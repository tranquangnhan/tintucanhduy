<!-- Main Breadcrumb Start -->
        <div class="main--breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="" class="btn-link"><i class="fa fm fa-home"></i>Trang Chủ</a></li>
                    <li><a href="danh-muc/<?=$getCateById['tendm']?>" class="btn-link"><?=$getCateById['tendm']?></a></li>
                    <li class="active"><span><?=$oneNew['title']?></span></li>
                </ul>
            </div>
        </div>
        <!-- Main Breadcrumb End -->
        
        <!-- Main Content Section Start -->
        <div class="main-content--section pbottom--30">
            <div class="container">
                <div class="row">
                    <!-- Main Content Start -->
                    <div class="main--content col-md-8" data-sticky-content="true">
                        <div class="sticky-content-inner">
                            <!-- Post Item Start -->
                            <div class="post--item post--single post--title-largest pd--30-0">
                                <div class="post--img">
                                    <a href="#" class="thumb"><img src="uploads/<?=$oneNew['img']?>" alt=""></a>
                                    <a href="#" class="icon"><i class="fa fa-star-o"></i></a>

                                    <div class="post--map">
                                        <p class="btn-link"><i class="fa fa-map-o"></i>Location in Google Map</p>

                                        <div class="map--wrapper">
                                            <div data-map-latitude="23.790546" data-map-longitude="90.375583" data-map-zoom="6" data-map-marker="[[23.790546, 90.375583]]"></div>
                                        </div>
                                    </div>
                                </div>

                              

                                <div class="post--info">
                                    <ul class="nav meta">
                                      
                                        <li><a href="#"><?=$oneNew['date']?></a></li>
                                        <li><span><i class="fa fm fa-eye"></i>45k</span></li>
                                    </ul>

                                    <div class="title">
                                        <h1 class="h4"><?=$oneNew['title']?></h1>
                                    </div>
                                </div>

                                <div class="post--content">
                                   <?=
                                    $oneNew['content']
                                   ?>
                                </div>
                            </div>
                            <!-- Post Item End -->
                    
                            <!-- Advertisement Start -->
                            <div class="ad--space pd--20-0-40">
                                <a href="#">
                                    <img src="img/ads-img/ad-728x90-02.jpg" alt="" class="center-block">
                                </a>
                            </div>
                            <!-- Advertisement End -->

                            <!-- Post Tags Start -->
                            <div class="post--tags">
                                <ul class="nav">
                                    <li><span><i class="fa fa-tags"></i></span></li>
                                    <?php 
                                        foreach ($listTag as $item) {
                                            $linkTag = 'tag/'.$item['slug'];
                                           echo ' <li><a href="'. $linkTag.'">'.$item['name'].'</a></li>';
                                        }
                                    ?>
                                </ul>
                            </div>
                           
                            <!-- Post Tags End -->

                            <!-- Post Social Start -->
                            <div class="post--social pbottom--30">
                                <span class="title"><i class="fa fa-share-alt"></i></span>
                                
                                <!-- Social Widget Start -->
                                <div class="social--widget style--4">
                                    <ul class="nav">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                        <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                    </ul>
                                </div>
                                <!-- Social Widget End -->
                            </div>
                            <!-- Post Social End -->

                           

                       

                            <!-- Post Related Start -->
                            <div class="post--related ptop--30">
                              
                                <!-- Post Items Start -->
                                <div class="post--items post--items-2" data-ajax-content="outer">
                                    <ul class="nav row" data-ajax-content="inner">
                                        <?php 
                                            foreach ($sameCate as $row) {
                                                $linkDetail = 'bai-viet/'.$row['slug'];
                                                echo ' <li class="col-sm-6 pbottom--30">
                                                            <!-- Post Item Start -->
                                                            <div class="post--item post--layout-1 post-large-0">
                                                                <div class="post--img">
                                                                    <a href="'. $linkDetail.'" class="thumb"><img src="uploads/'.$row['img'].'" alt=""></a>
                                                                    <a href="danh-muc/'.$row['slugdm'].'" class="cat">'.$row['tendm'].'</a>
                                                                    <a href="#" class="icon"><i class="fa fa-flash"></i></a>
                
                                                                    <div class="post--info">
                                                                    
                
                                                                        <div class="title">
                                                                            <h3 class="h4"><a href="'. $linkDetail.'" class="btn-link">'.$row['tieude'].'</a></h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                
                                                                <div class="post--content">
                                                                    <p>'.$row['description'].'</p>
                                                                </div>
                
                                                                <div class="post--action">
                                                                    <a href="'. $linkDetail.'">Xem thêm... </a>
                                                                </div>
                                                            </div>
                                                            <!-- Post Item End -->
                                                        </li>';
                                            }
                                        
                                        ?>
                                       

                                       
                                    </ul>

                                    <!-- Preloader Start -->
                                    <div class="preloader bg--color-0--b" data-preloader="1">
                                        <div class="preloader--inner"></div>
                                    </div>
                                    <!-- Preloader End -->
                                </div>
                                <!-- Post Items End -->
                            </div>
                            <!-- Post Related End -->

                            
                        </div>
                    </div>
              
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

     