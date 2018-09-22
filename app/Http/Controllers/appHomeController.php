<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\appSetting;
use App\appNav;
use App\Http\Requests;

class appHomeController extends Controller
{
    public function index()
    {
        $appSettings     = DB::table('app_settings')->first();
        $appNav          = DB::table('app_navs')->first();

        return view('principal.index',[
            'appSettings'     => $appSettings,
            'appNav'          => $appNav
        ]);
    }
}
