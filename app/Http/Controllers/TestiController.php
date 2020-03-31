<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Models\User;
use App\Models\Member;
use \Yajra\Datatables\Datatables;
use Intervention\Image\Facades\Image;
use Validator;
use File;
use Carbon\Carbon;
use DB;

class TestiController extends Controller
{
	/**
    * Display a listing of the resource.
    * @return Response
    */
    public function indexTesti()
    {

    	return view('users.testimoni_index');
    }

    /**
    * Fetch data from model with datatables.
    * @return Response
    */
    public function getData()
    {
    	// $testimoni = Testimonial::with('member')->get();

    	// $data = [];
    	// for ($i=0; $i <count($testimoni) ; $i++) { 
    	// 	$testi['id'] = $testimoni[$i]->id;
    	// 	$testi['content'] = $testimoni[$i]->content;
    	// 	$testi['user_id'] = $testimoni[$i]->member->user_id;
    	// 	$testi['institution'] = $testimoni[$i]->member->institution;

    	// 	$data[] = $testi;
    	// }

    	$data = DB::table('testimonials')
    		->join('members', 'members.id', '=', 'testimonials.id_member')
    		->join('users', 'users.id', '=', 'members.user_id')
    		->select('testimonials.id','testimonials.content','testimonials.id_member','members.institution','members.user_id','users.fullname','users.profile_picture','testimonials.created_at','testimonials.updated_at')
    		->get();

		//return $t;

    	return datatables()->of($data)->addColumn('option', function($row) {
            $btn = '<button type="button" id="detail-btn" class="btn m-btn--pill btn-primary btn-sm">Detail</button>';

                return $btn;
        })
        ->rawColumns(['option'])
        ->make(true);
    }

}
