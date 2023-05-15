<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\Sinhvien;
use App\Models\Lophoc;
use CodeIgniter\API\ResponseTrait;
class SinhvienController extends BaseController
{
    use ResponseTrait;
    public function __construct()
    {
        $this->db=\Config\Database::connect();
        helper(['url','form']);
    }
    public function index()
    {
        // $sinhvien=new Sinhvien;
        // $data['sinhvien']=$sinhvien->findAll();      
        // return view('sinhvien/sinhvien',$data);
        $data['sinhvien'] = $this->db->table('sinhvien')       
        ->join('lophoc','sinhvien.ma_lop = lophoc.ma_lop')   
        ->select('sinhvien.*,lophoc.ten_lop')           
        ->get()->getResult();       
        //dd($data);
         return view('sinhvien/sinhvien',$data);
    }
    public function create(){
        return view('sinhvien/themsinhvien');
    }
    public function store(){
        // $validation=$this->validate([
        //     'txt_ma_sv'=>'required',
        //      'txt_ten_sv'=>'required',
        //      'txt_gioitinh'=>'required',
        //      'txt_diachi'=>'required',
        //      'txt_malop'=>'required',
        //      'txt_sdt'=>'required',
        //      'txt_ghichu'=>'required',
        // ]);
        $validation=$this->validate([       
            'txt_ma_sv'=>[
                'rules'=>'required',
                'errors'=>[
                    'required'=>'Mã sinh viên không được để trống',
                ]
                ],
               'txt_ten_sv'=>[
                    'rules'=>'required',
                    'errors'=>[
                        'required'=>'Tên sinh viên không được để trống',
                    ]
                    ],  
                    'txt_gioitinh'=>[
                        'rules'=>'required',
                        'errors'=>[
                            'required'=>'Giới tính không được để trống',
                        ]
                        ],
                        'txt_diachi'=>[
                            'rules'=>'required',
                            'errors'=>[
                                'required'=>'Địa chỉ không được để trống',
                            ]
                            ], 
                            'txt_malop'=>[
                                'rules'=>'required',
                                'errors'=>[
                                    'required'=>'Mã lớp không được để trống',
                                ]
                                ],  
                                'txt_sdt'=>[
                                    'rules'=>'required',
                                    'errors'=>[
                                        'required'=>'Số điện thoại không được để trống',
                                    ]
                                    ],   
                                    'txt_ghichu'=>[
                                        'rules'=>'required',
                                        'errors'=>[
                                            'required'=>'Ghi chú không được để trống',
                                        ]
                                        ],             
        ]);
        if(!$validation)
        {
           return view('sinhvien/themsinhvien',['validation'=>$this->validator]);
           //return redirect()->back()->withInput()->with(['validation'=> $this->validator]);
        }
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
        return redirect()->to(base_url('sinhvien'))->with('thongbao','Thêm sinh viên thành công!!!');
    }
    public function edit($id)
    {
        $sinhvien=new Sinhvien;
        $data['sinhvien']=$sinhvien->find($id);
        return view('sinhvien/suasinhvien',$data);
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
       $sinhvien->update($id,$data);
       return redirect()->to(base_url('sinhvien'))->with('thongbao','Cập nhật sinh viên thành công!!!');
    }
    public function delete($id)
    {
        $sinhvien =new Sinhvien;
        $sinhvien->delete($id);
        return redirect()->to(base_url('sinhvien'))->with('warning','Xóa sinh viên thành công!!!');
    }
    public function show()
    {
       
        $data['sinhvien'] = $this->db->table('sinhvien')
        ->join('lophoc','sinhvien.ma_lop = lophoc.ma_lop')
        ->get()->getResult();           
        return $this->respond($data);
    }
   
}
