<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Member;
use App\Models\Province;
use App\Models\City;
use Auth;
use \Yajra\Datatables\Datatables;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;
use Validator;
use File;
use Illuminate\Support\Facades\Hash;
use Session;
use Carbon\Carbon;
use DB;

class UserController extends Controller
{

    /** 
    ===========================
     ** Admin **
    ============================
    **/

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('users.user_index');
    }


    /**
     * Fetch data from model with datatables.
     * @return Response
     */
    public function getDataUsers()
    {
        $users = User::with('roles')->orderByDesc('created_at')->get();

        $data = [];
        for ($i=0; $i < count($users); $i++) { 
            $user['id'] = $users[$i]->id;
            $user['fullname'] = $users[$i]->fullname;
            $user['email'] = $users[$i]->email;
            $user['profile_picture'] = $users[$i]->profile_picture;
            $user['created_at'] = $users[$i]->created_at;
            $user['updated_at'] = $users[$i]->updated_at;
            for ($j=0; $j < count($users[0]['roles']) ; $j++) {
                $user['role_id'] = $users[$i]['roles'][$j]['id'];
                $user['role'] = $users[$i]['roles'][$j]['name'];
            }
            $data[] = $user;
        }
        return datatables()->of($data)->addColumn('option', function($row) {
            $btn = '<button type="button" id="edit-btn" 
                    class="btn m-btn--pill m-btn--air btn-success m-btn--wide btn-sm">
                    Edit status</button>';
                return $btn;
        })
        ->rawColumns(['option'])
        ->make(true);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function editRole($id)
    {
        $user = User::with('roles')->find($id);
        
        $edit['id'] = $user->id;
        $edit['fullname'] = $user->fullname;
        $edit['email'] = $user->email;
        $edit['profile_picture'] = $user->profile_picture;
        $edit['created_at'] = $user->created_at;
        $edit['updated_at'] = $user->updated_at;
        for ($j=0; $j < count($user->roles) ; $j++) {
            $edit['role_id'] = $user->roles[$j]['id']; 
            $edit['role'] = $user->roles[$j]['name'];
        }

        return $edit;
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function changeUserRole(Request $request, $id)
    {
        $data = DB::table('role_user')
                ->where('user_id', $id)
                ->update(['role_id' => $request->role_edit]);

        if($request->role_edit == '1')
        {
            $delete = Member::where('user_id', $id)->delete();
        }

        if ($request->role_edit == '2') {
            $member = Member::create([
                'user_id' => $id,
            ]);
        }
    
        return response()->json(['success' => 'Status updated!']);
    }


    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        return view('users.admin_edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $rules = [
            'fullname' => 'required|string|max:35',
            'email' => 'required|email',
            'old_password' => 'nullable|min:8|max:20',
            'new_password' => 'nullable|min:8|max:20|different:old_password',
            'confirm_new_password' => 'same:new_password',
            'profile_picture' => 'nullable|max:2048|mimes:png,jpg,jpeg',
        ];

        $validate = Validator::make($request->all(), $rules);
        if($validate->fails()) {
            session(['error' => $validate->errors()->all()]);
            return back()->withInput();
        } else {
            if(!empty($request->profile_picture)) {
                $file = $request->file('profile_picture');
                $extension = strtolower($file->getClientOriginalExtension());
                $filename = $id.'.'.$extension;
                Storage::delete('public/images/user/'.$user->profile_picture);
                Storage::put('public/images/user/'.$filename, \File::get($file));
            } else {
                $filename = $user->profile_picture;
            }

            $user->fullname = $request->fullname;
            $user->email = $request->email;
            if(Hash::check($request->old_password, $user->password)) {
                $user->fill(['password' => Hash::make($request->new_password)]);
            } 
            $user->profile_picture = $filename;
            $user->save();

            session(['success' => ['Profil berhasil diperbarui.']]);
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function deletePicture($id)
    {
        $data = User::find($id);

        Storage::delete('public/images/user/'.$data->profile_picture);
        $data->profile_picture = null;
        $data->save();

        return response()->json(['success' => 'Data deleted successfully']);
    }


    /** 
    ===========================
     ** Member **
    ============================
    **/


    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function indexMember()
    {
        return view('users.member_index');
    }

    /**
    * Fetch data from model with datatables.
    * @return Response
    */
    public function getDataMember() {
        $members = Member::with('user','province','city')->get();
        $data = [];
        for ($i=0; $i <count($members) ; $i++) {
            $member['user_id'] = $members[$i]->user->id;
            $member['id'] = $members[$i]->id; 
            $member['fullname'] = $members[$i]->user->fullname;
            if($members[$i]->date_of_birth != null) {
                $member['age'] = Carbon::parse($members[$i]->date_of_birth)->age;
            } else {
                $member['age'] = null;
            }
            $member['institution'] = $members[$i]->institution;
            if($members[$i]->province_id != null) {
                $member['province'] = $members[$i]->province->provinsi;   
            } else {
                $member['province'] = null;
            }
            if($members[$i]->city_id != null) {
                $member['city'] = $members[$i]->city->kabupaten_kota;    
            } else {
                $member['city'] = null;
            }
            $member['member_status'] = $members[$i]->member_status;
            $member['premium_code'] = $members[$i]->premium_code;
            $member['status'] = $members[$i]->member_status;
            $member['created_at'] = $members[$i]->created_at;
            $member['updated_at'] = $members[$i]->updated_at;
            $data[] = $member;
        }
        return datatables()->of($data)->addColumn('option', function($row) {
            $btn = '<button type="button" id="detail-btn" 
            class="btn m-btn--pill btn-info btn-sm"><i class="fa fa-clipboard-list"></i> &nbsp; Detail </button>';
                return $btn;
        })
        ->rawColumns(['option'])
        ->make(true);
    }
    public function editProfile($id){
        
        $data = [];
        $data['user'] = User::where('id', '=', Auth::user()->id)->first();
        $province = Province::all()->pluck("provinsi", "id");
        $data['member'] = Member::where('user_id','=',$id)->first();
    
        return  view('member.member_edit_profile', compact('data', 'province'));
    }

    public function editAccount($id){
        $data = User::where('id', '=', $id)->first();
        return view('member.member_change_pass', compact('data'));
    }

    public function getCity($id){
        $city = City::where('provinsi_id', '=', $id)->pluck("kabupaten_kota", "id");
        // dd(json_encode($city));
        return json_encode($city);
    }

    public function updateMemberProfile(Request $request, $id){
        // dd($request->profile_picture);
        $user = User::where('id', '=', Auth::user()->id)->first();
        if(!empty($request->profile_picture)) {
            $file = $request->file('profile_picture');
            $extension = strtolower($file->getClientOriginalExtension());
            $filename = $id.'.'.$extension;
            Storage::delete('storage/images/user/'.$user->profile_picture);
            Storage::put('storage/images/user/'.$filename, \File::get($file));

            $user = DB::table('users')
                ->where('id',$id)
                ->update(['profile_picture' => $filename
                ]);
        } 
        $user = DB::table('users')
            ->where('id',$id)
            ->update(['fullname' => $request->fullname
            ]);
        
        $member = DB::table('members')
        ->where('user_id', $id)
        ->update(['institution' => $request->institution,
            'province_id' => $request->province_id,
            'city_id' => $request->city_id,
            'date_of_birth' => $request->date_of_birth
            ]);

        $data = [];
        $data['user'] = User::where('id', '=', Auth::user()->id)->first();
        $province = Province::all()->pluck("provinsi", "id");
        $data['member'] = Member::where('user_id','=',$id)->first();
        
        return response()->json(['success' => 'Profil berhasil diperbarui!']);
    }

    public function updateAccount(Request $request, $id)
    {
        $user = User::find($id);    
        $rules = [
            'email' => 'required|email',
            'old_password' => 'nullable|min:8|max:20',
            'new_password' => 'nullable|min:8|max:20|different:old_password',
            'confirm_new_pass' => 'same:new_password',
        ];

        $validate = Validator::make($request->all(), $rules);
        if($validate->fails())
        {
            $notification = array(
                'message' => [$validate->errors()->all()], 
                'alert-type' => 'error'
            );
            return redirect()->withInput();
        } else {
            $notification = array(
                'message' => 'Berhasil diperbarui.', 
                'alert-type' => 'success'
                );
            $user->email = $request->email;
            if(Hash::check($request->old_password, $user->password))
            {
                $user->fill([
                    'password' => Hash::make($request->new_password)
                ]);
            }
            $user->save();
            return response()->json(['success' => 'Data berhasil diperbarui!']);
            // session(['success' => ['Profil berhasil diperbarui.']]);
            // return redirect()->back(); 
        }
    }
    
}