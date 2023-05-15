<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function index()
    {
       // return view('welcome_message');
    //    $data=[];
    //    $data=$this->loadMasterLayout($data,'Trang chủ', 'content/content');   
    //    return view('layout/main',$data);
    return view('content/content');
    }
   
}
