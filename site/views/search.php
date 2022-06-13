

        

        <!-- Main Breadcrumb Start -->
        <div class="main--breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="" class="btn-link"><i class="fa fm fa-home"></i>Trang Chủ</a></li>
                    <li class="active"><span>Tìm Kiếm</span></li>
                </ul>
            </div>
        </div>
        <!-- Main Breadcrumb End -->

        <!-- Main Content Section Start -->
        <div class="main-content--section pbottom--30">
            <div class="container">
                <div class="row">
                    <!-- Main Content Start -->
                    <div class="main--content col-md-8 col-sm-7" data-sticky-content="true">
                        <div class="sticky-content-inner">
                            <!-- Page Title Start -->
                            <div class="page--title ptop--30">
                                <h1 class="h2">Tìm kiếm</h1>
                            </div>
                            <!-- Page Title End -->

                            <!-- Post Items Start -->
                            <div class="post--items post--items-2 pd--30-0">
                                <ul class="nav row AdjustRow">
                                    <?php 
                                        if(count($ListSearch) == '0') echo "<p class='ml-2'>Không có bài viết nào!</p>";
                                        foreach ($ListSearch as  $value) {
                                            $linkDetail = 'bai-viet/'.$value['slugnew'];
                                            $linkDm = 'danh-muc/'.$value['slugdm'];
                                           echo '<li class="col-md-6 col-sm-12 col-xs-6 col-xss-12 mt-2">
                                           <!-- Post Item Start -->
                                           <div class="post--item post--layout-1 post--title-large img-categories">
                                               <div class="post--img">
                                                   <a href="'.$linkDetail.'" class="thumb"><img src="uploads/'.$value['img'].'" alt=""></a>
                                                   <a href="'. $linkDm.'" class="cat">'.$value['tendm'].'</a>
   
                                                   <div class="post--info">
                                                    
                                                       <div class="title">
                                                           <h2 class="h4"><a href="'.$linkDetail.'" class="btn-link">'.$value['title'].'</a></h2>
                                                       </div>
                                                   </div>
                                               </div>
   
                                               <div class="post--content">
                                                   <p>'.$value['description'].'</p>
                                               </div>
   
                                               <div class="post--action">
                                                   <a href="'.$linkDetail.'">Xem thêm...</a>
                                               </div>
                                           </div>
                                           <!-- Post Item End -->
                                       </li>
                                        <li class="col-xs-12 hidden-lg hidden-md hidden-xs shown-xss">
                                            <!-- Divider Start -->
                                            <hr class="divider divider--25">
                                            <!-- Divider End -->
                                        </li>
                                    ';
                                        }
                                    ?>
                                </ul>
                            </div>
                            <!-- Post Items End -->

                 

                       

                     

                           
                        </div>
                    </div>
                    <!-- Main Content End -->

                    <!-- Main Sidebar Start -->
                    <div class="main--sidebar col-md-4 col-sm-5 ptop--30 pbottom--30" data-sticky-content="true">
                        <div class="sticky-content-inner">
                            <?php 
                                require_once "sidebar1.php";
                                require_once "sidebar2.php";
                             ?>
                        </div>
                    </div>
                    <!-- Main Sidebar End -->
                </div>
            </div>
        </div>
        <!-- Main Content Section End -->
