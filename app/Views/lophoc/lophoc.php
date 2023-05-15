<?= $this->extend('layout/main.php') ?>
<?=  $this->section('content')   ?>
<div class="card">
               <div class="card-header bg-danger">
                    <div class="row">
                                  <div class="col-md-12" align="center">
                                       <h1 class="btn text-light"> DANH SÁCH LỚP HỌC</h1>
                                  </div>
                    
                     </div>
</div>
</br>
<?php
if(session()->getFlashdata('thongbao'))
{
    echo "<div class='alert alert-success'>".session()->getFlashdata('thongbao')."</div>";
}
elseif(session()->getFlashdata('warning'))
{
    echo "<div class='alert alert-success'>".session()->getFlashdata('warning')."</div>";
}
?>

<div class="card-body">
<div> <a href="<?= base_url('lophoc/them') ?>" class=" btn btn-primary"><i class="fas fa-feather">&nbsp;Thêm mới</i></a> <br></div> 
                 
                   
                                <table class="table table-bordered mt-2">
                                     <thread >
                                         </tr >
                                           
                                           <th style="text-align: center; vertical-align: middle;background: blue;color: white;width:250px;">MÃ LỚP</th>
                                           <th style="text-align: center; vertical-align: middle;background: blue;color: white;width:250px;">TÊN LỚP</th>                                                                              
                                           <th style="text-align: center; vertical-align: middle;background: blue;color: white;width:150px;">TÙY CHỈNH</th>
                                          </tr>
                                     </thread>
                                    
                                     <tbody>
                                     <?php foreach ($lophoc as $row): ?>
                                     <tr>
                                                                         
                                        <td><?=$row['ma_lop'] ?></td>
                                        <td><?=$row['ten_lop'] ?></td>       
                                                                              
                                        <td  style="text-align: center; " class="td-actions">
                        <a href="<?= base_url('lophoc/sua/'.$row['id'])?>" class="  btn"><i class="fas fa-edit" style="font-size:28px;color:blue"></i></a>

                        <a href="<?= base_url('lophoc/xoa/'.$row['id'])?>" class="  btn"><i class="far fa-trash-alt" style="font-size:25px;color:red"></i></a>
                    </td>
                                     </tr>
                                      <?php endforeach  ?>
                                   
                                    </tbody>
                               </table>
                            
                 
                 </div >   
              </div>
           </div>
         </div>
        
         <?= $this->endSection() ?>