<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use \Yajra\Datatables\Datatables;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;
use Validator;
use File;
use Illuminate\Support\Facades\Hash;
use Session;

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
    public function index(){
        //
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

        $notification = '';

        if($validate->fails())
        {
            //return response()->json(['errors' => $validate->errors()->all()]);
            session(['error' => $validate->errors()->all()]);

            return back()->withInput();

        } else {
            if(!empty($request->profile_picture))
            {
                $file = $request->file('profile_picture');
                $extension = strtolower($file->getClientOriginalExtension());
                $filename = uniqid().'.'.$extension;
                \Storage::delete('public/images/user'.$user->profile_picture);
                \Storage::put('public/images/user'.$filename, \File::get($file));
            } else {
                $filename = $user->profile_picture;
            }

            $user->fullname = $request->fullname;
            $user->email = $request->email;
            if(Hash::check($request->old_password, $user->password))
            {
                $user->fill([
                    'password' => Hash::make($request->new_password)
                ]);
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
    public function delete($id)
    {

    }


    /** 
    ===========================
     ** Member **
    ============================
    **/

    public function indexMember()
    {
    	return view('users.members_index');
    }

    public function indexTesti()
    {

    	return view('users.testimoni_index');
    }
    
}
