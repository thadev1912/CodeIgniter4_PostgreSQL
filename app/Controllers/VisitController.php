<?php

namespace App\Controllers;

class VisitController extends BaseController
{
    public function index()
    {
       // return view('welcome_message');
       $data=[];
       $data=$this->loadMasterLayout($data,'Liên Hệ', 'visit/visit');   
       return view('layout/main',$data);
    }
   
}
