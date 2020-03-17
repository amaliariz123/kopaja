<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use App\Models\Province;
use App\Models\City;
use App\Models\Kecamatan;
use DB;
use Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */     
    protected $redirectTo = '/email/verify';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $user = Auth::user();
    }

    public function index(){
        $data = User::all();
        $province = Province::all()->pluck("provinsi", "id");
        return view('auth.register', compact('data', 'province'));
    }

    public function getCity($id){
        $city = City::where('provinsi_id', '=', $id)->pluck("kabupaten_kota", "id");
        return json_encode($city);
    }

    public function getKecamatan($id){
        $kecamatan = Kecamatan::where('kab_id', '=', $id)->pluck("kecamatan", "id");
        return json_encode($kecamatan);
    }

    public function profileMember(){
        $data = User::where('id', '=', Auth::user()->id)->get();
        $province = Province::all()->pluck("provinsi", "id");
        $user = User::where('id', '=', Auth::user()->id)->get();
        return view('profile', compact('data', 'province', 'user'));
    }
        
    public function store(Request $request)
    {
        // dd($request);
        $user = new User;
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->role = $request->input('role');
        $user->tanggal_lahir = $request->input('tanggal_lahir'); 
        $user->province = $request->input('province');
        $user->city = $request->input('city');
        $user->kecamatan = $request->input('kecamatan');
        $user->instansi = $request->input('instansi');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
    
        if($user){
            $user->save();
            return redirect('login');
        }
    }

    public function edit($id)
    {
        $data = User::where('id','=',$id)->get();
        return view('tutor.editLogin', compact('data'));
    }
    
    public function update(Request $request, $id)
    {
        $data = User::where('id',$id)->first();
        $data->first_name = $request->first_name;
        $data->last_name = $request->last_name;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->instansi = $request->instansi;
        $data->province = $request->province;
        $data->city = $request->city;
        $data->kecamatan = $request->kecamatan;
        $data->email = $request->email;
        $data->save();
        if ($data ['role'] == 'member'){
        return redirect('profile')->withMessage('Berhasil Merubah Data');
        } else {
            return redirect('profil_admin')->withMessage('Berhasil Merubah Data');
        }
    }

    public function data(){
        $data = User::where('id', '=', Auth::user()->id)->get();
        return view('dashboard_admin.profileAdmin', compact('data'));
    }

    

}
