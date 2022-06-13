

<div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <div class="row d-flex justify-content-center">
                            <div class="col-xl-10">
                                <div class="card-box">
                                    <div class="dropdown float-right">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                        </div>
                                    </div>

                                    <h4 class="header-title mt-0 mb-3">Sửa tin tức</h4>

                                    <form data-parsley-validate novalidate method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="">Hình ảnh</label>
                                            <br>
                                            <?php
                                                if(is_file(PATH_IMG_SITE.explode(",",$oneRecode['img'])[0])){
                                                    $img = PATH_IMG_SITE.explode(",",$oneRecode['img'])[0];
                                                }else{
                                                    $img = PATH_IMG_SITE.'logo.png';
                                                }
                                            ?>
                                            <img width="200" style="object-fit: cover;" height="200" src="<?= $img?>" alt="">
                                            <br>
                                           <input class="mt-2" type="file" name="img[]" multiple>
                                        </div>

                                        
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Tiêu đề</label>
                                                    <input type="text" name="title"  parsley-trigger="change" required
                                                        placeholder="Nhập tiêu đề tin tức" value="<?=$oneRecode['title']?>" class="form-control" id="userName">
                                                </div>
                                            </div>
                                     
                                          
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Danh Mục</label>
                                                    <div class="form-group">
                                                      <select class="form-control" name="iddm" id="">
                                                        <?php 
                                                            foreach ($listDanhMuc as $item) {
                                                                if($item['id'] == $oneRecode['iddm']){
                                                                    echo " <option value=".$item['id']." selected>".$item['tendm']."</option>";
                                                                }else{
                                                                    echo " <option value=".$item['id']." >".$item['tendm']."</option>";
                                                                }
                                                               
                                                            }
                                                        ?>
                                                      </select>
                                                    </div>
                                                </div>
                                            </div>
                                          
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                            <label for="">Mô Tả</label>
                                            <input type="text" class="form-control" value="<?=$oneRecode['description']?>" name="description" placeholder="Nhập mô tả ngắn">
                                          
                                            </div>
                                        </div>
                                      
                                        <div class="row">
                                            <div class="col-lg-12">
                                                 <label for="">Tag</label>
                                                    <select name="tags[]" class="select2 select2-multiple" multiple="multiple" multiple data-placeholder="Chọn tag ...">
                                                        <?php 
                                                            function callbackMap($n)
                                                            {
                                                                return  $n['idtag'];
                                                            }
                
                                                            $b = array_map('callbackMap', $getTagById);
                                                            foreach ($listTag as $index=> $value) {
                                                                $key = array_search($value['id'],  $b);
                                                                if($key != ""){
                                                                    echo '<option selected value="'. $value['id'].'">'. $value['name'].'</option>';
                                                                }else{
                                                                    echo '<option value="'. $value['id'].'">'. $value['name'].'</option>';
                                                                }
                                                            }
                                                          
                                                        ?>
                                                        
                                                    </select>
                                            </div>

                                        </div>
                                        <br>
                                        <label for="">Nội Dung</label>
                                        <textarea id="editor1" style="height: 300px;width:100%" name="content" ><?=$oneRecode['content']?></textarea>
                                      
                                        <div class="form-group text-right mb-0 mt-5">
                                            <a href="?ctrl=tintuc&act=index" clas="btn btn-secondary waves-effect waves-light">Huỷ</a>
                                            <input type="submit" name="them" class="btn btn-primary waves-effect waves-light mr-1" value="Sửa">
                                        </div>

                                    </form>
                                </div>
                            </div><!-- end col -->
                        </div>
                    </div>
                </div>
            </div>