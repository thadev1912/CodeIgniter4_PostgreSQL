<?= $this->extend('layout/main.php') ?>
<?=  $this->section('content')   ?>
<div class="card">
<div class="card-header bg-danger ">
                    <div class="row">
                                  <div class="col-md-12" align="center">
                                       <h1 class="btn text-white"> THÊM DANH SÁCH LỚP HỌC</h1>
                                  </div>
                    
                     </div>
</div>
<div class="card-body">
            <form action="<?= base_url('lophoc/luu')?>" method="POST">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
            <div class="row"> <!--thuộc tính form-row nó giúp chia 2 cột trên 1 row của nó-->
                    <div class="col">
                        <label>Mã Lớp Học</label>
                        <input id="current-pass-control" name="txt_ma_lop" class="form-control" type="text" value="">
                        
                    </div>
                   
</div>
<div class="row"> <!--thuộc tính form-row nó giúp chia 2 cột trên 1 row của nó-->
                    <div class="col">
                        <label>Tên Lớp Học</label>
                        <input id="current-pass-control" name="txt_ten_lop" class="form-control" type="text" value="">
                        
                    </div>
                   
</div>






<div class="text-white mt-2">
                    <button id="submit-button" type="submit" class="btn btn-primary" name="action" value="CONFIRM"><i class="fa fa-save"></i>&nbsp&nbspLưu Lại&nbsp&nbsp</button>
                    <a href="<?= base_url('/lophoc')?>" class="btn btn-danger"><i class="fas fa-reply-all"></i>&nbsp&nbspQuay lại&nbsp&nbsp</a>
</div>
</div>
</div>
</div>
<?= $this->endSection() ?>