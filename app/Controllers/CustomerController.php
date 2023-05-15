<?php

namespace App\Controllers;

class CustomerController extends BaseController
{
    public function index()
    {
       // return view('welcome_message');
       $data=[];
       $data=$this->loadMasterLayout($data,'Khách Hàng', 'customer/customer');   
       return view('layout/main',$data);
    }
   
}
