<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Lophoc;
class LophocController extends BaseController
{
    public function index()
    {
        $lophoc =new Lophoc;
        $data['lophoc']=$lophoc->findAll();
        return view('lophoc/lophoc',$data); 
    }
    public function create()
    {
        return view('lophoc/themlophoc');
    }
    public function store()
    {
        $lophoc=new Lophoc;
        $data =[
           'ma_lop'=>$this->request->getPost('txt_ma_lop'),
           'ten_lop'=>$this->request->getPost('txt_ten_lop')
        ];
       $lophoc->save($data);
        return redirect()->to(base_url('lophoc'))->with('thongbao','Thêm lớp học thành công!!!');
    }
    public function edit($id)
    {
        $lophoc=new Lophoc;
        $data['lophoc']=$lophoc->find($id);
        return view('lophoc/sualophoc',$data);
    }
    public function update($id)
    {
        $lophoc=new Lophoc;
        $data =[
            'ma_lop'=>$this->request->getPost('txt_ma_lop'),
            'ten_lop'=>$this->request->getPost('txt_ten_lop')
         ];
         $lophoc->update($id,$data);
         return redirect()->to(base_url('lophoc'))->with('thongbao','Cập nhật lớp học thành công!!!');
    }
    public function delete($id)
    {
        $lophoc=new Lophoc;
        $lophoc->delete($id);
        return redirect()->to(base_url('lophoc'))->with('thongbao','Xóa id lớp học thành công!!!');
    }
}
