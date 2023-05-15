<?= $this->extend('layout/main.php') ?>
<?=  $this->section('content')   ?>
<div class="card">
<div class="card-header bg-danger ">
                    <div class="row">
                                  <div class="col-md-12" align="center">
                                       <h1 class="btn text-white"> THÊM DANH SÁCH SINH VIÊN</h1>
                                  </div>
                    
                     </div>
</div>
<div class="card-body">
            <form action="<?= base_url('sinhvien/luu')?>" method="POST">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
            <div class="row"> <!--thuộc tính form-row nó giúp chia 2 cột trên 1 row của nó-->
                    <div class="col">
                        <label>Mã Sinh Viên</label>
                        <input id="current-pass-control" name="txt_ma_sv" class="form-control" type="text" value="<?= old('txt_ma_sv');?>">
                        <span class="text-danger"> <?= isset($validation)? display_error($validation,"txt_ma_sv"):'' ?></span>
                    </div>
                    <div class="col">
                        <label>Tên Sinh Viên</label>
                        <input id="current-pass-control" name="txt_ten_sv" class="form-control" type="text" value="">
                        <span class="text-danger"> <?= isset($validation)? display_error($validation,"txt_ten_sv"):'' ?></span>
                    </div>
</div>
<div class="row"> <!--thuộc tính form-row nó giúp chia 2 cột trên 1 row của nó-->
                   <div class="col">
                        <label>Giới Tính</label>
                        <input id="new-pass-control" name="txt_gioitinh" class="form-control" type="text" value="">
                        <span class="text-danger"> <?= isset($validation)? display_error($validation,"txt_gioitinh"):'' ?></span>
                    </div>
                    <div class="col">
                        <label>Địa Chỉ</label>
                        <input id="new-pass-control" name="txt_diachi" class="form-control" type="text" value="">
                        <span class="text-danger"> <?= isset($validation)? display_error($validation,"txt_diachi"):'' ?></span>
                    </div>
</div>
<div class="row"> <!--thuộc tính form-row nó giúp chia 2 cột trên 1 row của nó-->
                   <div class="col">
                        <label>Số Điện Thoại</label>
                        <input id="new-pass-control" name="txt_sdt" class="form-control" type="text" value="">
                        <span class="text-danger"> <?= isset($validation)? display_error($validation,"txt_sdt"):'' ?></span>
                    </div>
                    <div class="col">
                        <label>Mã Lớp</label>
                        <input id="new-pass-control" name="txt_malop" class="form-control" type="text" value="">
                        <span class="text-danger"> <?= isset($validation)? display_error($validation,"txt_malop"):'' ?></span> 
                    </div>
</div>
<div class="row"> <!--thuộc tính form-row nó giúp chia 2 cột trên 1 row của nó-->
                   <div class="col">
                        <label>Ghi Chú</label>
                        <input id="new-pass-control" name="txt_ghichu" class="form-control" type="text" value="">
                        <span class="text-danger"> <?= isset($validation)? display_error($validation,"txt_ghichu"):'' ?></span>
                    </div>
</div>





<div class="text-white mt-2">
                    <button id="submit-button" type="submit" class="btn btn-primary" name="action" value="CONFIRM"><i class="fa fa-save"></i>&nbsp&nbspLưu Lại&nbsp&nbsp</button>
                    <a href="<?= base_url('/sinhvien')?>" class="btn btn-danger"><i class="fas fa-reply-all"></i>&nbsp&nbspQuay lại&nbsp&nbsp</a>
</div>
</div>
</div>
</div>
<?= $this->endSection() ?>