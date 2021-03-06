    
        <!-- Main Content Section Start -->
        <div class="main-content--section pbottom--30">
            <div class="container">
                <!-- Main Content Start -->
                <div class="main--content">
                    <!-- Post Items Start -->
                    <div class="post--items post--items-1 pd--30-0">
                        <div class="row gutter--15">
                            <div class="col-md-6">
                                <?php
                                     $linkDetail = 'bai-viet/'.$getTitleNew[0]['slug'];
                                ?>
                                <!-- Post Item Start -->
                                <div class="post--item post--layout-1 post--title-larger popular-img">
                                    <div class="post--img">
                                        <a href="<?= $linkDetail?>" class="thumb"><img src="uploads/<?=$getTitleNew[0]['img']?>" alt=""></a>
                                        <a href="danh-muc/<?=$getCatebyTinTuc[0]['slugdm']?>" class="cat"><?=$getCatebyTinTuc[0]['tendm']?></a>
                                      

                                        <div class="post--info">
                                            <ul class="nav meta">
                                                <li><a href="#">
                                                <?php 
                                                $date=date_create($getTitleNew[0]['date']);
                                                echo date_format($date,"d/m/Y");
                                                ?></a></li>
                                            </ul>

                                            <div class="title">
                                                <h2 class="h4"><a href="<?= $linkDetail?>" class="btn-link"><?=$getTitleNew[0]['title']?></a></h2>
                                                <span class="label_title1"><?=$getTitleNew[0]['description']?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Post Item End -->
                            </div>

                            <div class="col-md-6">
                                <div class="row gutter--15">
                                    <div class="col-xs-6 col-xss-12">
                                        <!-- Post Item Start -->
                                        <?php
                                            $linkDetail = 'bai-viet/'.$getTitleNew[1]['slug'];
                                        ?>
                                        <div class="post--item post--layout-1 post--title-large post-right">
                                            <div class="post--img">
                                                <a href="<?= $linkDetail?>" class="thumb"><img src="uploads/<?=$getTitleNew[1]['img']?>" alt=""></a>
                                                <a href="danh-muc/<?=$getCatebyTinTuc[1]['slugdm']?>" class="cat"><?=$getCatebyTinTuc[1]['tendm']?></a>
                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#"><?php 
                                                        $date=date_create($getTitleNew[1]['date']);
                                                        echo date_format($date,"d/m/Y");
                                                        ?></a></li>
                                                    </ul>

                                                    <div class="title">
                                                        <h2 class="h4"><a href="<?= $linkDetail?>" class="btn-link"><?=$getTitleNew[1]['title']?></a></h2>
                                                        <span class="label_title1"><?=$getTitleNew[1]['description']?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post Item End -->
                                    </div>

                                    <div class="col-xs-6 hidden-xss">
                                        <!-- Post Item Start -->
                                        <?php
                                            $linkDetail = 'bai-viet/'.$getTitleNew[2]['slug'];
                                        ?>
                                        <div class="post--item post--layout-1 post--title-large post-right">
                                            <div class="post--img">
                                                <a href="<?= $linkDetail?>" class="thumb"><img src="uploads/<?=$getTitleNew[2]['img']?>" alt=""></a>
                                                <a href="danh-muc/<?=$getCatebyTinTuc[2]['slugdm']?>" class="cat"><?=$getCatebyTinTuc[2]['tendm']?></a>                                
                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#"><?php 
                                                        $date=date_create($getTitleNew[2]['date']);
                                                        echo date_format($date,"d/m/Y");
                                                        ?></a></li>
                                                    </ul>

                                                    <div class="title">
                                                        <h2 class="h4"><a href="<?= $linkDetail?>" class="btn-link"><?=$getTitleNew[2]['title']?></a></h2>
                                                        <span class="label_title1"><?=$getTitleNew[2]['description']?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post Item End -->
                                    </div>

                                    <div class="col-sm-12 hidden-sm hidden-xs">
                                        <!-- Post Item Start -->
                                        <?php
                                            $linkDetail = 'bai-viet/'.$getTitleNew[3]['slug'];
                                        ?>
                                        <div class="post--item post--layout-1 post--title-larger post-bottom">
                                            <div class="post--img">
                                                <a href="<?= $linkDetail?>" class="thumb"><img src="uploads/<?=$getTitleNew[3]['img']?>" alt=""></a>
                                                <a href="danh-muc/<?=$getCatebyTinTuc[3]['slugdm']?>" class="cat"><?=$getCatebyTinTuc[3]['tendm']?></a>
                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#"><?php 
                                                        $date=date_create($getTitleNew[3]['date']);
                                                        echo date_format($date,"d/m/Y");
                                                        ?></a>
                                                        </li>
                                                    </ul>

                                                    <div class="title">
                                                        <h2 class="h4"><a href="<?= $linkDetail?>" class="btn-link"><?=$getTitleNew[3]['title']?></a></h2>
                                                        <span class="label_title1"><?=$getTitleNew[3]['description']?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post Item End -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Post Items End -->
                </div>
                <!-- Main Content End -->

                <div class="row">
                    <!-- Main Content Start -->
                    <div class="main--content col-md-8 col-sm-7" data-sticky-content="true">
                        <div class="sticky-content-inner">
                            <div class="row">
                                <!-- World News Start -->
                                <div class="col-md-6 ptop--30 pbottom--30">
                                    <!-- Post Items Title Start -->
                                    <div class="post--items-title" data-ajax="tab">
                                        <a href="danh-muc/<?=$this->getCate[0]['slug']?>"><h2 class="h4"><?=$this->getCate[0]['tendm']?></h2></a>
                                        
                                
                                    </div>
                                    <!-- Post Items Title End -->

                                    <!-- Post Items Start -->
                                    <div class="post--items post--items-2" data-ajax-content="outer">
                                        <ul class="nav row gutter--15" data-ajax-content="inner">
                                            <?php
                                            foreach ($getNewbyCateLimit0 as $key => $value) {
                                            $linkDetail = 'bai-viet/'.$value['slug'];
                                            $date=date_create($value['date']);
                                            $getCate = $this->getCate[0]['tendm'];
                                            $getSlug = $this->getCate[0]['slug'];
                                              if($key==0){
                                                  echo '
                                                        <li class="col-xs-12">
                                                            <!-- Post Item Start -->
                                                            <div class="post--item post--layout-1 post-large-0">
                                                                <div class="post--img">
                                                                    <a href="'.$linkDetail.'" class="thumb"><img src="uploads/'.$value['img'].'" alt=""></a>
                                                                    <a href="danh-muc/'.$getSlug.'" class="cat">'.$getCate.'</a>
                                                                    <div class="post--info">
                                                                        <ul class="nav meta">
                                                                            <li><a href="#">'.date_format($date,"d/m/Y").'</a></li>
                                                                        </ul>

                                                                        <div class="title">
                                                                            <h3 class="h4"><a href="'.$linkDetail.'" class="btn-link">'.$value['title'].'</a></h3>
                                                                            <span class="label_title1">'.$value['description'].'</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Post Item End -->
                                                        </li>
                                                        <li class="col-xs-12">
                                                            <!-- Divider Start -->
                                                            <hr class="divider">
                                                            <!-- Divider End -->
                                                        </li>
                                                  ';
                                              }
                                              else{
                                                  echo '
                                                  <li class="col-xs-6">
                                                  <!-- Post Item Start -->
                                                  <div class="post--item post--layout-2 post-small-0">
                                                      <div class="post--img">
                                                          <a href="'.$linkDetail.'" class="thumb"><img src="uploads/'.$value['img'].'" alt=""></a>
  
                                                          <div class="post--info">
                                                              <ul class="nav meta">
                                                                  <li><a href="#">'.date_format($date,"d/m/Y").'</a></li>
                                                              </ul>
  
                                                              <div class="title">
                                                                  <h3 class="h4"><a href="'.$linkDetail.'" class="btn-link">'.$value['title'].'</a></h3>
                                                                  <span class="label_title2">'.$value['description'].'</span>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <!-- Post Item End -->
                                              </li>
                                                  ';
                                                  if($key%2==0){
                                                      echo '
                                                            <li class="col-xs-12">
                                                                <!-- Divider Start -->
                                                                <hr class="divider">
                                                                <!-- Divider End -->
                                                             </li>
                                                      ';

                                                  }
                                              }
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
                                <!-- World News End -->

                                <!-- Technology Start -->
                                <div class="col-md-6 ptop--30 pbottom--30">
                                    <!-- Post Items Title Start -->
                                    <div class="post--items-title" data-ajax="tab">
                                        <a href="danh-muc/<?=$this->getCate[1]['slug']?>"><h2 class="h4"><?=$this->getCate[1]['tendm']?></h2></a>

                                        
                                    </div>
                                    <!-- Post Items Title End -->

                                    <!-- Post Items Start -->
                                    <div class="post--items post--items-3" data-ajax-content="outer">
                                        <ul class="nav" data-ajax-content="inner">
                                        <?php
                                            foreach ($getNewbyCateLimit1 as $key => $value) {
                                                $linkDetail = 'bai-viet/'.$value['slug'];
                                                $date=date_create($value['date']);
                                                $getCate = $this->getCate[1]['tendm'];
                                                $getSlug = $this->getCate[1]['slug'];
                                                if($key==0){
                                                  echo '
                                                  <li>
                                                  <!-- Post Item Start -->
                                                  <div class="post--item post--layout-1 post-large-1">
                                                      <div class="post--img">
                                                          <a href="'.$linkDetail.'" class="thumb"><img src="uploads/'.$value['img'].'" alt=""></a>
                                                          <a href="danh-muc/'.$getSlug.'" class="cat">'.$getCate.'</a>  
                                                          <div class="post--info">
                                                              <ul class="nav meta">
                                                                  <li><a href="#">'.date_format($date,"d/m/Y").'</a></li>
                                                              </ul>
  
                                                              <div class="title">
                                                                  <h3 class="h4"><a href="'.$linkDetail.'" class="btn-link">'.$value['title'].'</a></h3>
                                                                  <spanclass="label_title1">'.$value['description'].'</span>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <!-- Post Item End -->
                                              </li>
                                                  ';
                                              }
                                              else{
                                                  echo '
                                                  <li>
                                                <!-- Post Item Start -->
                                                <div class="post--item post--layout-3 post-small-1">
                                                    <div class="post--img">
                                                        <a href="'.$linkDetail.'" class="thumb"><img src="uploads/'.$value['img'].'" alt=""></a>

                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">'.date_format($date,"d/m/Y").'</a></li>
                                                            </ul>

                                                            <div class="title">
                                                                <h3 class="h4"><a href="'.$linkDetail.'" class="btn-link">'.$value['title'].'</a></h3>
                                                                <span class="label_title2">'.$value['description'].'</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Post Item End -->
                                            </li>
                                                  ';
                                                  
                                              }
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
                                <!-- Technology End -->

                                <!-- Ad Start -->
                                <div class="col-md-12 ptop--30 pbottom--30">
                                    <!-- Advertisement Start -->
                                    <div class="ad--space">
                                        <a href="#">
                                            <img src="site/views/assets/img/ads-img/ad-728x90-01.jpg" alt="" class="center-block">
                                        </a>
                                    </div>
                                    <!-- Advertisement End -->
                                </div>
                                <!-- Ad End -->

                                <!-- Finance Start -->
                                <div class="col-md-12 ptop--30 pbottom--30">
                                    <!-- Post Items Title Start -->
                                    <div class="post--items-title" data-ajax="tab">
                                        <a href="danh-muc/<?=$this->getCate[2]['slug']?>"><h2 class="h4"><?=$this->getCate[2]['tendm']?></h2></a>

                                       
                                    </div>
                                    <!-- Post Items Title End -->

                                    <!-- Post Items Start -->
                                    <div class="post--items post--items-2" data-ajax-content="outer">
                                        <ul class="nav row" data-ajax-content="inner">
                                        <?php
                                            foreach ($getNewbyCateLimit2 as $key => $value) {
                                            $linkDetail = 'bai-viet/'.$value['slug'];
                                            $date=date_create($value['date']);
                                            $getCate = $this->getCate[2]['tendm'];
                                            $getSlug = $this->getCate[2]['slug'];
                                              if($key==0){
                                                  echo '
                                                  <li class="col-md-6">
                                                  <!-- Post Item Start -->
                                                  <div class="post--item post--layout-2 post-large-2">
                                                      <div class="post--img">
                                                          <a href="'.$linkDetail.'" class="thumb"><img src="uploads/'.$value['img'].'" alt=""></a>
                                                          <a href="danh-muc/'.$getSlug.'" class="cat">'.$getCate.'</a>
  
                                                          <div class="post--info">
                                                              <ul class="nav meta">
                                                                  <li><a href="#">'.date_format($date,"d/m/Y").'</a></li>
                                                              </ul>
  
                                                              <div class="title">
                                                                  <h3 class="h4"><a href="'.$linkDetail.'" class="btn-link">'.$value['title'].'</a></h3>
                                                                  <span class="label_title2">'.$value['description'].'</span>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <!-- Post Item End -->
                                              </li>
                                              <li class="col-md-6">
                                                <ul class="nav row">
                                                    <li class="col-xs-12 hidden-md hidden-lg">
                                                        <!-- Divider Start -->
                                                        <hr class="divider">
                                                        <!-- Divider End -->
                                                    </li>
                                                  ';
                                              }
                                              else{
                                                  echo '
                                                  <li class="col-xs-6">
                                                        <!-- Post Item Start -->
                                                        <div class="post--item post--layout-2 post-small-2">
                                                            <div class="post--img">
                                                                <a href="'.$linkDetail.'" class="thumb"><img src="uploads/'.$value['img'].'" alt=""></a>

                                                                <div class="post--info">
                                                                    <ul class="nav meta">
                                                                        <li><a href="#">'.date_format($date,"d/m/Y").'</a></li>
                                                                    </ul>

                                                                    <div class="title">
                                                                        <h3 class="h4"><a href="'.$linkDetail.'" class="btn-link">'.$value['title'].'</a></h3>
                                                                        <span class="label_title1">'.$value['description'].'</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Post Item End -->
                                                    </li>
                                                  ';
                                                  if($key%2==0){
                                                      echo '
                                                      <li class="col-xs-12">
                                                      <!-- Divider Start -->
                                                      <hr class="divider">
                                                      <!-- Divider End -->
                                                  </li>
                                                      ';

                                                  }
                                              }
                                            }
                                            ?>                                     
                                                </ul>
                                            </li>
                                        </ul>

                                        <!-- Preloader Start -->
                                        <div class="preloader bg--color-0--b" data-preloader="1">
                                            <div class="preloader--inner"></div>
                                        </div>
                                        <!-- Preloader End -->
                                    </div>
                                    <!-- Post Items End -->
                                </div>
                                <!-- Finance End -->

                                <!-- Politics Start -->
                                <div class="col-md-6 ptop--30 pbottom--30">
                                    <!-- Post Items Title Start -->
                                    <div class="post--items-title" data-ajax="tab">
                                        <a href="danh-muc/<?=$this->getCate[3]['slug']?>"><h2 class="h4"><?=$this->getCate[3]['tendm']?></h2></a>
                                        
                                    </div>
                                    <!-- Post Items Title End -->

                                    <!-- Post Items Start -->
                                    <div class="post--items post--items-2" data-ajax-content="outer">
                                        <ul class="nav row gutter--15" data-ajax-content="inner">
                                        <?php
                                            foreach ($getNewbyCateLimit3 as $key => $value) {
                                                $linkDetail = 'bai-viet/'.$value['slug'];
                                                $date=date_create($value['date']);
                                                $getCate = $this->getCate[3]['tendm'];
                                                $getSlug = $this->getCate[3]['slug'];
                                              if($key==0){
                                                  echo '
                                                  <li class="col-xs-12">
                                                <!-- Post Item Start -->
                                                <div class="post--item post--layout-1 post-large-3">
                                                    <div class="post--img">
                                                        <a href="'.$linkDetail.'" class="thumb"><img src="uploads/'.$value['img'].'" alt=""></a>
                                                        <a href="danh-muc/'.$getSlug.'" class="cat">'.$getCate.'</a>
                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">'.date_format($date,"d/m/Y").'</a></li>
                                                            </ul>

                                                            <div class="title">
                                                                <h3 class="h4"><a href="'.$linkDetail.'" class="btn-link">'.$value['title'].'</a></h3>
                                                                <span class="label_title1">'.$value['description'].'</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Post Item End -->
                                            </li>
                                            <li class="col-xs-12">
                                                <!-- Divider Start -->
                                                <hr class="divider">
                                                <!-- Divider End -->
                                            </li>
                                                  ';
                                              }
                                              else{
                                                  echo '
                                                  <li class="col-xs-6">
                                                <!-- Post Item Start -->
                                                <div class="post--item post--layout-2 post-small-3">
                                                    <div class="post--img">
                                                        <a href="'.$linkDetail.'" class="thumb"><img src="uploads/'.$value['img'].'" alt=""></a>

                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">'.date_format($date,"d/m/Y").'</a></li>
                                                            </ul>

                                                            <div class="title">
                                                                <h3 class="h4"><a href="'.$linkDetail.'" class="btn-link">'.$value['title'].'</a></h3>
                                                                <span class="label_title2">'.$value['description'].'</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Post Item End -->
                                            </li>
                                                    </li>
                                                  ';
                                                  if($key%2==0){
                                                      echo '
                                                      <li class="col-xs-12">
                                                <!-- Divider Start -->
                                                <hr class="divider">
                                                <!-- Divider End -->
                                            </li>
                                                  </li>
                                                      ';

                                                  }
                                              }
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
                                <!-- Politics End -->

                                <!-- Sports Start -->
                                <div class="col-md-6 ptop--30 pbottom--30">
                                    <!-- Post Items Title Start -->
                                    <div class="post--items-title" data-ajax="tab">
                                        <a href="danh-muc/<?=$this->getCate[4]['slug']?>"><h2 class="h4"><?=$this->getCate[4]['tendm']?></h2></a>

                                        
                                    </div>
                                    <!-- Post Items Title End -->

                                    <!-- Post Items Start -->
                                    <div class="post--items post--items-3" data-ajax-content="outer">
                                        <ul class="nav" data-ajax-content="inner">
                                        <?php
                                            foreach ($getNewbyCateLimit4 as $key => $value) {
                                                $linkDetail = 'bai-viet/'.$value['slug'];
                                                $date=date_create($value['date']);
                                                $getCate = $this->getCate[4]['tendm'];
                                                $getSlug = $this->getCate[4]['slug'];
                                              if($key==0){
                                                  echo '
                                                  <li>
                                                <!-- Post Item Start -->
                                                <div class="post--item post--layout-1 post-large-4">
                                                    <div class="post--img">
                                                        <a href="'.$linkDetail.'" class="thumb"><img src="uploads/'.$value['img'].'" alt=""></a>
                                                        <a href="danh-muc/'.$getSlug.'" class="cat">'.$getCate.'</a>

                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">'.date_format($date,"d/m/Y").'</a></li>
                                                            </ul>

                                                            <div class="title">
                                                                <h3 class="h4"><a href="'.$linkDetail.'" class="btn-link">'.$value['title'].'</a></h3>
                                                                <span class="label_title1">'.$value['description'].'</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Post Item End -->
                                            </li>
                                                  ';
                                              }
                                              else{
                                                  echo '
                                                  <li>
                                                <!-- Post Item Start -->
                                                <div class="post--item post--layout-3 post-small-4">
                                                    <div class="post--img">
                                                        <a href="'.$linkDetail.'" class="thumb"><img src="uploads/'.$value['img'].'" alt=""></a>

                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">'.date_format($date,"d/m/Y").'</a></li>
                                                            </ul>

                                                            <div class="title">
                                                                <h3 class="h4"><a href="news-single-v1.html" class="btn-link">'.$value['title'].'</a></h3>
                                                                <span class="label_title1">'.$value['description'].'</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Post Item End -->
                                            </li>
                                                  ';
                                                  
                                              }
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
                                <!-- Sports End -->
                            </div>
                        </div>
                    </div>
                    <!-- Main Content End -->

                    <!-- Main Sidebar Start -->
                    <div class="main--sidebar col-md-4 col-sm-5 ptop--30 pbottom--30" data-sticky-content="true">
                        <div class="sticky-content-inner">
                           

                           <?php 
                            require_once "sidebar1.php";
                           ?>

                            
                        </div>
                    </div>
                    <!-- Main Sidebar End -->
                </div>

                
                    
                <!-- Advertisement Start -->
                <div class="ad--space pd--30-0">
                    <a href="#">
                        <img src="site/views/assets/img/ads-img/ad-970x90.jpg" alt="" class="center-block">
                    </a>
                </div>
                <!-- Advertisement End -->

                <div class="row">
                    <!-- Main Content Start -->
                    <div class="main--content col-md-8 col-sm-7" data-sticky-content="true">
                        <div class="sticky-content-inner">
                            <div class="row">
                                <!-- Health and fitness Start -->
                                <div class="col-md-6 ptop--30 pbottom--30">
                                    <!-- Post Items Title Start -->
                                    <div class="post--items-title" data-ajax="tab">
                                        <a href="danh-muc/<?=$this->getCate[5]['slug']?>"><h2 class="h4"><?=$this->getCate[5]['tendm']?></h2></a>
                                      
                                    </div>
                                    <!-- Post Items Title End -->

                                    <!-- Post Items Start -->
                                    <div class="post--items post--items-3" data-ajax-content="outer">
                                        <ul class="nav" data-ajax-content="inner">
                                        <?php
                                            foreach ($getNewbyCateLimit5 as $key => $value) {
                                                $linkDetail = 'bai-viet/'.$value['slug'];
                                                $date=date_create($value['date']);
                                                $getCate = $this->getCate[5]['tendm'];
                                                $getSlug = $this->getCate[5]['slug'];
                                              if($key==0){
                                                  echo '
                                                  <li>
                                                <!-- Post Item Start -->
                                                <div class="post--item post--layout-1 post-large-5">
                                                    <div class="post--img">
                                                        <a href="'.$linkDetail.'" class="thumb"><img src="uploads/'.$value['img'].'" alt=""></a>
                                                        <a href="danh-muc/'.$getSlug.'" class="cat">'.$getCate.'</a>

                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">'.date_format($date,"d/m/Y").'</a></li>
                                                            </ul>

                                                            <div class="title">
                                                                <h3 class="h4"><a href="'.$linkDetail.'" class="btn-link">'.$value['title'].'</a></h3>
                                                                <span class="label_title1">'.$value['description'].'</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Post Item End -->
                                            </li>
                                                  ';
                                              }
                                              else{
                                                  echo '
                                                  <li>
                                                <!-- Post Item Start -->
                                                <div class="post--item post--layout-3 post-small-5">
                                                    <div class="post--img">
                                                        <a href="'.$linkDetail.'" class="thumb"><img src="uploads/'.$value['img'].'" alt=""></a>

                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">'.date_format($date,"d/m/Y").'</a></li>
                                                            </ul>

                                                            <div class="title">
                                                                <h3 class="h4"><a href="'.$linkDetail.'" class="btn-link">'.$value['title'].'</a></h3>
                                                                <span class="label_title1">'.$value['description'].'</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Post Item End -->
                                            </li>
                                                  ';
                                                  
                                              }
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
                                <!-- Health and fitness End -->

                                <!-- Lifestyle Start -->
                                <div class="col-md-6 ptop--30 pbottom--30">
                                    <!-- Post Items Title Start -->
                                    <div class="post--items-title" data-ajax="tab">
                                        <a href="danh-muc/<?=$this->getCate[6]['slug']?>"><h2 class="h4"><?=$this->getCate[6]['tendm']?></h2></a>
                                        
                                    </div>
                                    <!-- Post Items Title End -->

                                    <!-- Post Items Start -->
                                    <div class="post--items post--items-2" data-ajax-content="outer">
                                        <ul class="nav row gutter--15" data-ajax-content="inner">
                                        <?php
                                            foreach ($getNewbyCateLimit6 as $key => $value) {
                                                $linkDetail = 'bai-viet/'.$value['slug'];
                                                $date=date_create($value['date']);
                                                $getCate = $this->getCate[6]['tendm'];
                                                $getSlug = $this->getCate[6]['slug'];
                                              if($key==0){
                                                  echo '
                                                  <li class="col-xs-12">
                                                  <!-- Post Item Start -->
                                                  <div class="post--item post--layout-1 post-large-6">
                                                      <div class="post--img">
                                                          <a href="'.$linkDetail.'" class="thumb"><img src="uploads/'.$value['img'].'" alt=""></a>
                                                          <a href="danh-muc/'.$getSlug.'" class="cat">'.$getCate.'</a>
  
                                                          <div class="post--info">
                                                              <ul class="nav meta">
                                                                  <li><a href="#">'.date_format($date,"d/m/Y").'</a></li>
                                                              </ul>
  
                                                              <div class="title">
                                                                  <h3 class="h4"><a href="'.$linkDetail.'" class="btn-link">'.$value['title'].'</a></h3>
                                                                  <span class="label_title1">'.$value['description'].'</span>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <!-- Post Item End -->
                                              </li>
                                              <li class="col-xs-12">
                                                  <!-- Divider Start -->
                                                  <hr class="divider">
                                                  <!-- Divider End -->
                                              </li>
                                                  ';
                                              }
                                              else{
                                                  echo '
                                                  <li class="col-xs-6">
                                                <!-- Post Item Start -->
                                                <div class="post--item post--layout-2 post-small-5">
                                                    <div class="post--img">
                                                        <a href="'.$linkDetail.'" class="thumb"><img src="uploads/'.$value['img'].'" alt=""></a>

                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">'.date_format($date,"d/m/Y").'</a></li>
                                                            </ul>

                                                            <div class="title">
                                                                <h3 class="h4"><a href="'.$linkDetail.'" class="btn-link">'.$value['title'].'</a></h3>
                                                                <span class="label_title2">'.$value['description'].'</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Post Item End -->
                                            </li>
                                                  ';
                                                  if($key%2==0){
                                                      echo '
                                                      <li class="col-xs-12">
                                                      <!-- Divider Start -->
                                                      <hr class="divider">
                                                      <!-- Divider End -->
                                                  </li>
                                                      ';

                                                  }
                                              }
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
                                <!-- Lifestyle End -->

                                <!-- Foods and Recipes Start -->
                                <div class="col-md-12 ptop--30 pbottom--30">
                                    <!-- Post Items Title Start -->
                                    <div class="post--items-title" data-ajax="tab">
                                        <a href="danh-muc/<?=$this->getCate[7]['slug']?>"><h2 class="h4"><?=$this->getCate[7]['tendm']?></h2></a>

                                      
                                    </div>
                                    <!-- Post Items Title End -->

                                    <!-- Post Items Start -->
                                    <div class="post--items" data-ajax-content="outer">
                                        <ul class="nav row gutter--15" data-ajax-content="inner">
                                        <?php
                                            foreach ($getNewbyCateLimit7 as $key => $value) {
                                                $linkDetail = 'bai-viet/'.$value['slug'];
                                                $date=date_create($value['date']);
                                                $getCate = $this->getCate[7]['tendm'];
                                                $getSlug = $this->getCate[7]['slug'];
                                                  echo '
                                                  <li class="col-md-4 col-xs-6 col-xxs-12">
                                                <!-- Post Item Start -->
                                                <div class="post--item post--layout-1 post-7">
                                                    <div class="post--img">
                                                        <a href="'.$linkDetail.'" class="thumb"><img src="uploads/'.$value['img'].'" alt=""></a>
                                                        <a href="danh-muc/'.$getSlug.'" class="cat">'.$getCate.'</a>

                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">'.date_format($date,"d/m/Y").'</a></li>
                                                            </ul>

                                                            <div class="title">
                                                                <h3 class="h4"><a href="'.$linkDetail.'" class="btn-link">'.$value['title'].'</a></h3>
                                                                <span class="label_title1">'.$value['description'].'</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Post Item End -->
                                            </li>
                                                  ';
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
                                <!-- Foods and Recipes End -->

                                <!-- Photo Gallery Start -->
                                <div class="col-md-12 ptop--30 pbottom--30">
                                    <!-- Post Items Title Start -->
                                    <div class="post--items-title" data-ajax="tab">
                                        <h2 class="h4">???nh ?????p</h2>

                                        
                                    </div>
                                    <!-- Post Items Title End -->

                                    <!-- Post Items Start -->
                                    <div class="post--items post--items-1" data-ajax-content="outer">
                                        <ul class="nav row gutter--15" data-ajax-content="inner">
                                           
                                                <?php 
                                                    foreach ( $getRandomNew as $key => $value) {
                                                        $linkDetail = 'bai-viet/'.$value['slug'];
                                                        $date=date_create($value['date']);
                                                        if($key == 0 ){
                                                            echo ' 
                                                                <li class="col-md-12">
                                                                <div class="post--item post--layout-1 post--title-large">
                                                                    <div class="post--img">
                                                                        <a href="'.$linkDetail.'" class="thumb"><img src="uploads/'.$value['img'].'" alt=""></a>
                                                                        <a href="#" class="cat">'.$value['tendm'].'</a>
                                                                        <a href="#" class="icon"><i class="fa fa-eye"></i></a>
                
                                                                        <div class="post--info">
                                                                            <ul class="nav meta">
                                                                                <li><a >'.date_format($date,"d/m/Y").'</a></li>
                                                                            </ul>
                
                                                                            <div class="title text-xxs-ellipsis">
                                                                                <h2 class="h4"><a href="'.$linkDetail.'" class="btn-link">'.$value['title'].'</a></h2>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </li>
                                                            ';
                                                        }
                                                    }
                                                
                                                ?>
                                                <!-- Post Item Start -->
                                                
                                                <!-- Post Item End -->
                                        
                                                <?php 
                                                    foreach ( $getRandomNew as $key => $value) {
                                                        $linkDetail = 'bai-viet/'.$value['slug'];
                                                        $date=date_create($value['date']);
                                                        if($key == 0 ){
                                                            echo ' 
                                                            <li class="col-md-4 col-xs-6 col-xxs-12">
                                                                <!-- Post Item Start -->
                                                                <div class="post--item post--layout-1">
                                                                    <div class="post--img">
                                                                        <a href="'.$linkDetail.'" class="thumb"><img src="uploads/'.$value['img'].'" alt=""></a>
                
                                                                        <div class="post--info">
                                                                            <ul class="nav meta">
                                                                                <li><a >'.date_format($date,"d/m/Y").'</a></li>
                                                                            </ul>
                
                                                                            <div class="title">
                                                                                <h2 class="h4"><a href="'.$linkDetail.'" class="btn-link">'.$value['title'].'</a></h2>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- Post Item End -->
                                                            </li>
                                                            ';
                                                        }
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
                                <!-- Photo Gallery End -->
                            </div>
                        </div>
                    </div>
                    <!-- Main Content End -->

                    <!-- Main Sidebar Start -->
                    <div class="main--sidebar col-md-4 col-sm-5 ptop--30 pbottom--30" data-sticky-content="true">
                        <div class="sticky-content-inner">
                             <?php 
                                require_once "sidebar2.php";
                             ?>
                        </div>
                    </div>
                    <!-- Main Sidebar End -->
                </div>
            </div>
        </div>
        <!-- Main Content Section End -->
