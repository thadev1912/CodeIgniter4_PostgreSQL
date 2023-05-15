<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;
use App\Models\Sinhvien;
use App\Models\Lophoc;
class SinhvienRestAPIController extends BaseController
{
    use ResponseTrait;
    public function __construct()
    {
        $this->db=\Config\Database::connect();
    }
    public function index()
    {
        $data['sinhvien'] = $this->db->table('sinhvien')       
        ->join('lophoc','sinhvien.ma_lop = lophoc.ma_lop')   
        ->select('sinhvien.*,lophoc.ten_lop')           
        ->get()->getResult();       
        //dd($data);
        if($data)
        {
            return $this->respond([
                'data'=>$data,
                'status'=>200,
                'message'=>'Lấy dữ liệu thành công!!!'
            ]);
        }
        else {
            return $this->respond([
                'data'=>null,
                'status'=>500,
                'message'=>'Kết nối thất bại!!!'
            ]);
        }
       
    }
    public function store(){
        $sinhvien=new Sinhvien;
        $data=[
            'ma_sv'=>$this->request->getPost('txt_ma_sv'),
            'ten_sv'=>$this->request->getPost('txt_ten_sv'),
            'gioitinh'=>$this->request->getPost('txt_gioitinh'),
            'diachi'=>$this->request->getPost('txt_diachi'),
            'ma_lop'=>$this->request->getPost('txt_malop'),
            'sdt'=>$this->request->getPost('txt_sdt'),
            'ghichu'=>$this->request->getPost('txt_ghichu'),
        ];
        $sinhvien->save($data);
        if($data)
        {
            return $this->respond([
                'data'=>$data,
                'status'=>200,
                'message'=>'Lưu dữ liệu thành công!!!'
            ]);
        }
        else {
            return $this->respond([
                'data'=>null,
                'status'=>500,
                'message'=>'Kết nối thất bại!!!'
            ]);
        }
       
    }
    public function edit($id)
    {
        $sinhvien=new Sinhvien;
        $data['sinhvien']=$sinhvien->find($id);
        if($data)
        {
            return $this->respond([
                'data'=>$data,
                'status'=>200,
                'message'=>'Lưu dữ liệu thành công!!!'
            ]);
        }
        else {
            return $this->respond([
                'data'=>null,
                'status'=>500,
                'message'=>'Kết nối thất bại!!!'
            ]);
        }
       
    }
    public function update($id)
    {
        $sinhvien=new Sinhvien;
        $data=[
           'ma_sv'=>$this->request->getPost('txt_ma_sv'),
           'ten_sv'=>$this->request->getPost('txt_ten_sv'),
           'gioitinh'=>$this->request->getPost('txt_gioitinh'),
           'diachi'=>$this->request->getPost('txt_diachi'),
           'ma_lop'=>$this->request->getPost('txt_malop'),
           'sdt'=>$this->request->getPost('txt_sdt'),
           'ghichu'=>$this->request->getPost('txt_ghichu'),
       ];
       var_dump($data);
       $data['sinhvien']=$sinhvien->update($id,$data);
       if($data)
        {
            return $this->respond([
                'data'=>$data,
                'status'=>200,
                'message'=>'Cập nhật dữ liệu thành công!!!'
            ]);
        }
        else {
            return $this->respond([
                'data'=>null,
                'status'=>500,
                'message'=>'Kết nối thất bại!!!'
            ]);
        }
    }
    public function delete($id)
    {
        $sinhvien =new Sinhvien;
        $data['sinhvien']= $sinhvien->delete($id);
       if($data)
        {
            return $this->respond([
                'data'=>$data,
                'status'=>200,
                'message'=>'Xóa dữ liệu thành công!!!'
            ]);
        }
        else {
            return $this->respond([
                'data'=>null,
                'status'=>500,
                'message'=>'Kết nối thất bại!!!'
            ]);
        }
       
    }
}
