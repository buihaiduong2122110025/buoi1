<?php
use App\Models\Order;
//status=0--> Rac
//status=1--> Hiện thị lên trang người dùng
//
//SELECT * FROM brand wher status!=0 and id=1 order by created_at desc

$list = Order::where('status','!=',0)->orderBy('Created_at','DESC')->get();
?>
<?php require_once "../views/backend/header.php";?>
      <!-- CONTENT -->
      <form action ="index.php?option=order&cat=process" method="post" enctype="multipart/form-data">

      <div class="content-wrapper">
         <section class="content-header">
            <div class="container-fluid">
               <div class="row mb-2">
                  <div class="col-sm-12">
                     <h1 class="d-inline">Tất cả đơn hàng</h1>
                   
                  </div>
               </div>
            </div>
         </section>
         <!-- Main content -->
         <section class="content">  
            <div class="card">
               <div class="card-header p-2">
                Nội Dung
               </div>
               <div class="card-body p-2">
                  <table class="table table-bordered">
                     <thead>
                        <tr>
                           <th class="text-center" style="width:30px;">
                              <input type="checkbox">
                           </th>
                           <th>User_id</th>
                           <th>Tên Giao Hàng</th>
                           <th>Điện Thoại Giao Hàng</th>
                           <th>Email Giao Hàng</th>
                           <th>Địa Chỉ Giao Hàng</th>
                           <th>Ghi Chú</th>
                        </tr>
                     </thead>
                     
                     <tbody>
            
                        <tr class="datarow">
                           <td>
                              <input type="checkbox">
                           </td>
                           <td>1</td>
                           <td>Bùi Hải Dương</td>
                           <td> 09819929900</td>
                           <td>dayduongtui@gmail.com</td>
                       
                           <td>KTX cÔNG THƯƠNG </td>
                           <td> TRÙM BOM HÀNG </td>
                         
                        </tr>
                 
                     </tbody>
                  </table>
               </div>
            </div>
         </section>
      </div>
      </form>
      <!-- END CONTENT-->
      <?php require_once "../views/backend/footer.php";?>

