<div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

    
                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="mt-0 header-title">Tin tức</h4>
                                    <p class="text-muted font-14 mb-3">
                                    Danh sách tin tức.
                                    </p>
                                    <a name="" id="" class="btn btn-primary" href="?ctrl=tintuc&act=addnew" role="button">Thêm Bài Viết</a>
                                    <br>
                                    <br>
                                    <table class="table mb-0">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th width="10">STT</th>
                                                    <th width="120">Tiêu đề</th>
                                                    <th width="20">Hình</th>
                                                    <th >Mô Tả</th>
                                                    <th width="5">Xoá </th>
                                                    <th width="5">Sửa</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                        $stt = 0;
                                            foreach ($NewList as $row) {
                                                $stt++;
                                                
                                                $linkDel = "'?ctrl=tintuc&act=delete&id=".$row['id']."'";
                                                $linkEdit = '?ctrl=tintuc&act=edit&id='.$row['id'];
                                                
                                                if(is_file(PATH_IMG_SITE.explode(",",$row['img'])[0])){
                                                    $img = PATH_IMG_SITE.explode(",",$row['img'])[0];
                                                }else{
                                                    $img = PATH_IMG_SITE.'logo.png';
                                                }
                                                echo '<tr>
                                                        <td>'.$stt.'</td>
                                                        <td class="" >'.$row['title']." <br>". $anHien.'</td>
                                                        <td><img style="object-fit:cover;" class="img-admin" width="100" height="100" src="'.$img.'"></td>
                                                        <td>'.substr($row['description'],0,100).' ..</td>
                                                        <td><div  onclick="checkDelete('.$linkDel.')"  class="btn btn-danger" role="button"><i class="fa fa-trash"></i></div></td>
                                                        <td><a href=""><a name="" id="" class="btn btn-primary" href="'.$linkEdit.'" role="button"><span class="mdi mdi-pencil"></span></a></a></a></td>
                                                    </tr>';
                                            }
                                        ?>
                                            </tbody>
                                        </table>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                        <div class="row d-flex justify-content-end">
                            <div class="col-lg-5">
                                <nav>
                                    <ul class="pagination pagination-split">
                                        <?php
                                        echo $Pagination;
                                        ?>      
                                    </ul>
                                </nav>    
                                  
                            </div>
                        </div>
                             
                     
                        
                    </div> <!-- container-fluid -->

                </div> <!-- content -->


            </div>
    