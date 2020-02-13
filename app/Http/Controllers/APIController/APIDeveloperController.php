<?php

namespace App\Http\Controllers\APIController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Developer;
use App\Http\Controllers\APIController\BaseController as BaseController;

class APIDeveloperController extends BaseController
{
    public function index()
    {
    	$data = Developer::orderBy('created_at', 'desc')
    			->paginate(5);

    	return $this->sendResponse($data->toArray(),'Success!');
    }
}
