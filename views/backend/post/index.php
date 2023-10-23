<?php
use App\Models\Post;

//status=0--> Rac
//status=1--> Hiện thị lên trang người dùng
//
//SELECT * FROM post wher status!=0 and id=1 order by created_at desc

$list = post::where('status','!=',0)->orderBy('Created_at','DESC')->get();

/*
$list = Post::join('topic', 'post.topic_id', '=', 'topic.id')
 ->where([['post.status', '!=', 0],['post.type', '=', 'post']])
 ->orderBy('post.created_at', 'desc')
 ->select("post.*", "topic.name as topic_name")
 ->get();
*/
 $list = Post::join('topic', 'post.topic_id', '=', 'topic.id')
 ->where('post.status', '!=', 0)
 ->orderBy('post.created_at', 'desc')
 ->select("post.*", "topic.name as topic_name")
 ->get();

?>
<?php require_once "../views/backend/header.php";?>
      <!-- CONTENT -->
      <form action ="index.php?option=post&cat=create" method="post" enctype="multipart/form-data">

      <div class="content-wrapper">
         <section class="content-header">
            <div class="container-fluid">
               <div class="row mb-2">
                  <div class="col-sm-12">
                     <h1 class="d-inline">Tất cả bài viết</h1>
                     <a href="index.php?option=post&cat=create" class="btn btn-sm btn-primary">Thêm bài viết</a>
                  </div>
               </div>
            </div>
         </section>
         <!-- Main content -->
         <section class="content">
         <div class="card-header">             
                        <select name="" id="" class="form-control d-inline" style="width:100px;">
                        <option value="">Xoá</option>
                        </select>
                        <button class="btn btn-sm btn-success" type ="submit" name ="THEM">Áp dụng</button>
                     <div class="row">
                     <div  div class="col-md-6">
                        <a href="index.php?option=product">Tất cả</a> |
                        <a href="index.php?option=brand&cat=trash" class="btn btn-danger btn-sm">Thùng rác</a>
                     </div>
                  </div>
               <div class="card-body p-2">
                  <table class="table table-bordered">
                     <thead>
                        <tr>
                           <th class="text-center" style="width:30px;">
                              <input type="checkbox">
                           </th>
                           <th class="text-center" style="width:130px;">Hình ảnh</th>
                           <th>Tiêu đề bài viết</th>
                           <th>Tên chủ đề</th>
                        </tr>
                     </thead>
                     <tbody>
                     <?php if(count($list) > 0) : ?>
                              <?php foreach($list as $item   ):?>
                        <tr class="datarow">
                           <td>
                              <input type="checkbox">
                           </td>
                           <td>
                           <img class="img-fluid" src="../public/images/post/<?= $item->image; ?>" alt="<?= $item->image; ?>">                              </td>
                           </td>
                           <td>
                              <div class="title"></div>
                              <?= $item->title ; ?> 
                             
                              </div>
                              <div class="function_style">
                              <?php if ($item->status == 1) :?>
                                       <a href="index.php?option=post&cat=status&id=<?=$item->id;?>
                                       "class="btn btn-success btn-xs"><i class="fas fa-toggle-on"></i>Hiện
                                    </a>
                                    <?php else :?>
                                       <a href="index.php?option=post&cat=status&id=<?=$item->id;?>
                                       "class="btn btn-danger btn-xs"><i class="fas fa-toggle-off"></i>Ẩn 
                                       </a>  
                                       <?php endif;?>

                                       <a href="index.php?option=post&cat=edit&id=<?=$item->id;?>
                                       "class="btn btn-primary btn-xs"><i class="fas fa-edit"></i>Chỉnh sửa</a> 
                                       <a href="index.php?option=post&cat=show&id=<?=$item->id;?>
                                       "class="btn btn-info btn-xs"><i class="fas fa-eye"></i>Chi tiết</a> 
                                       <a href="index.php?option=post&cat=delete&id=<?=$item->id;?>
                                       "class="btn btn-danger btn-xs"><i class="fas fa-trash"></i>Xoá</a>
                              </div>
                           </td>
                           <td><div class="topic_name">
                              <?= $item->topic_name ; ?> 
                             
                              </div></td>
                        </tr>
                        <?php endforeach;?>
                              <?php endif;?>
                     </tbody>
                  </table>
               </div>
            </div>
         </section>
      </div>
      <!-- END CONTENT-->
      <?php require_once "../views/backend/footer.php";?>