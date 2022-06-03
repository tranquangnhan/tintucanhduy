    
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
                                        <a href="#" class="cat">Politics</a>
                                      

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
                                                <a href="#" class="cat">Travel</a>
                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#"><?php 
                                                        $date=date_create($getTitleNew[1]['date']);
                                                        echo date_format($date,"d/m/Y");
                                                        ?></a></li>
                                                    </ul>

                                                    <div class="title">
                                                        <h2 class="h4"><a href="<?= $linkDetail?>" class="btn-link"><?=$getTitleNew[1]['title']?></a></h2>
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
                                                <a href="#" class="cat">Education</a>                                
                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#"><?php 
                                                        $date=date_create($getTitleNew[2]['date']);
                                                        echo date_format($date,"d/m/Y");
                                                        ?></a></li>
                                                    </ul>

                                                    <div class="title">
                                                        <h2 class="h4"><a href="<?= $linkDetail?>" class="btn-link"><?=$getTitleNew[2]['title']?></a></h2>
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
                                                <a href="#" class="cat">Politics</a>
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
                                        <h2 class="h4"><?=$this->getCate[0]['tendm']?></h2>

                                        <div class="nav">
                                            <a href="#" class="prev btn-link" data-ajax-action="load_prev_world_news_posts">
                                                <i class="fa fa-long-arrow-left"></i>
                                            </a>

                                            <span class="divider">/</span>

                                            <a href="#" class="next btn-link" data-ajax-action="load_next_world_news_posts">
                                                <i class="fa fa-long-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Post Items Title End -->

                                    <!-- Post Items Start -->
                                    <div class="post--items post--items-2" data-ajax-content="outer">
                                        <ul class="nav row gutter--15" data-ajax-content="inner">
                                            <?php
                                            foreach ($getNewbyCateLimit0 as $key => $value) {
                                            $linkDetail = 'bai-viet/'.$value['slug'];
                                              if($key==0){
                                                  echo '
                                                        <li class="col-xs-12">
                                                            <!-- Post Item Start -->
                                                            <div class="post--item post--layout-1 post-large">
                                                                <div class="post--img">
                                                                    <a href="'.$linkDetail.'" class="thumb"><img src="uploads/'.$value['img'].'" alt=""></a>
                                                                    <a href="#" class="cat">War</a>
                                                                    <div class="post--info">
                                                                        <ul class="nav meta">
                                                                            <li><a href="#">Yeasterday 03:52 pm</a></li>
                                                                        </ul>

                                                                        <div class="title">
                                                                            <h3 class="h4"><a href="'.$linkDetail.'" class="btn-link">'.$value['title'].'</a></h3>
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
                                                  <div class="post--item post--layout-2 post-small">
                                                      <div class="post--img">
                                                          <a href="'.$linkDetail.'" class="thumb"><img src="uploads/'.$value['img'].'" alt=""></a>
  
                                                          <div class="post--info">
                                                              <ul class="nav meta">
                                                                  <li><a href="#">17 April 2017</a></li>
                                                              </ul>
  
                                                              <div class="title">
                                                                  <h3 class="h4"><a href="'.$linkDetail.'" class="btn-link">'.$value['title'].'</a></h3>
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
                                        <h2 class="h4"><?=$this->getCate[1]['tendm']?></h2>

                                        <div class="nav">
                                            <a href="#" class="prev btn-link" data-ajax-action="load_prev_technology_posts">
                                                <i class="fa fa-long-arrow-left"></i>
                                            </a>

                                            <span class="divider">/</span>

                                            <a href="#" class="next btn-link" data-ajax-action="load_next_technology_posts">
                                                <i class="fa fa-long-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Post Items Title End -->

                                    <!-- Post Items Start -->
                                    <div class="post--items post--items-3" data-ajax-content="outer">
                                        <ul class="nav" data-ajax-content="inner">
                                        <?php
                                            foreach ($getNewbyCateLimit1 as $key => $value) {
                                                $linkDetail = 'bai-viet/'.$value['slug'];
                                                if($key==0){
                                                  echo '
                                                  <li>
                                                  <!-- Post Item Start -->
                                                  <div class="post--item post--layout-1 post-large">
                                                      <div class="post--img">
                                                          <a href="'.$linkDetail.'" class="thumb"><img src="uploads/'.$value['img'].'" alt=""></a>
                                                          <a href="#" class="cat">Computer</a>  
                                                          <div class="post--info">
                                                              <ul class="nav meta">
                                                                  <li><a href="#">Yeasterday 03:52 pm</a></li>
                                                              </ul>
  
                                                              <div class="title">
                                                                  <h3 class="h4"><a href="'.$linkDetail.'" class="btn-link">'.$value['title'].'</a></h3>
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
                                                <div class="post--item post--layout-3 post-small">
                                                    <div class="post--img">
                                                        <a href="'.$linkDetail.'" class="thumb"><img src="uploads/'.$value['img'].'" alt=""></a>

                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Bune</a></li>
                                                                <li><a href="#">16 April 2017</a></li>
                                                            </ul>

                                                            <div class="title">
                                                                <h3 class="h4"><a href="'.$linkDetail.'" class="btn-link">'.$value['title'].'</a></h3>
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
                                        <h2 class="h4"><?=$this->getCate[2]['tendm']?></h2>

                                        <div class="nav">
                                            <a href="#" class="prev btn-link" data-ajax-action="load_prev_finance_posts">
                                                <i class="fa fa-long-arrow-left"></i>
                                            </a>

                                            <span class="divider">/</span>

                                            <a href="#" class="next btn-link" data-ajax-action="load_next_finance_posts">
                                                <i class="fa fa-long-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Post Items Title End -->

                                    <!-- Post Items Start -->
                                    <div class="post--items post--items-2" data-ajax-content="outer">
                                        <ul class="nav row" data-ajax-content="inner">
                                        <?php
                                            foreach ($getNewbyCateLimit2 as $key => $value) {
                                              if($key==0){
                                                  echo '
                                                  <li class="col-md-6">
                                                  <!-- Post Item Start -->
                                                  <div class="post--item post--layout-2">
                                                      <div class="post--img">
                                                          <a href="news-single-v1.html" class="thumb"><img src="site/views/assets/img/home-img/finance-01.jpg" alt=""></a>
                                                          <a href="#" class="cat">Business</a>
  
                                                          <div class="post--info">
                                                              <ul class="nav meta">
                                                                  <li><a href="#">Vassago</a></li>
                                                                  <li><a href="#">Today 03:30 am</a></li>
                                                              </ul>
  
                                                              <div class="title">
                                                                  <h3 class="h4"><a href="news-single-v1.html" class="btn-link">'.$value['title'].'</a></h3>
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
                                                        <div class="post--item post--layout-2">
                                                            <div class="post--img">
                                                                <a href="news-single-v1.html" class="thumb"><img src="site/views/assets/img/home-img/finance-02.jpg" alt=""></a>

                                                                <div class="post--info">
                                                                    <ul class="nav meta">
                                                                        <li><a href="#">Zepar</a></li>
                                                                        <li><a href="#">Today 03:52 pm</a></li>
                                                                    </ul>

                                                                    <div class="title">
                                                                        <h3 class="h4"><a href="news-single-v1.html" class="btn-link">'.$value['title'].'</a></h3>
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
                                        <h2 class="h4"><?=$this->getCate[3]['tendm']?></h2>

                                        <div class="nav">
                                            <a href="#" class="prev btn-link" data-ajax-action="load_prev_politics_posts">
                                                <i class="fa fa-long-arrow-left"></i>
                                            </a>

                                            <span class="divider">/</span>

                                            <a href="#" class="next btn-link" data-ajax-action="load_next_politics_posts">
                                                <i class="fa fa-long-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Post Items Title End -->

                                    <!-- Post Items Start -->
                                    <div class="post--items post--items-2" data-ajax-content="outer">
                                        <ul class="nav row gutter--15" data-ajax-content="inner">
                                        <?php
                                            foreach ($getNewbyCateLimit3 as $key => $value) {
                                              if($key==0){
                                                  echo '
                                                  <li class="col-xs-12">
                                                <!-- Post Item Start -->
                                                <div class="post--item post--layout-1">
                                                    <div class="post--img">
                                                        <a href="news-single-v1.html" class="thumb"><img src="site/views/assets/img/home-img/politics-01.jpg" alt=""></a>
                                                        <a href="#" class="cat">Election</a>
                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Yeasterday 03:52 pm</a></li>
                                                            </ul>

                                                            <div class="title">
                                                                <h3 class="h4"><a href="news-single-v1.html" class="btn-link">'.$value['title'].'</a></h3>
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
                                                <div class="post--item post--layout-2">
                                                    <div class="post--img">
                                                        <a href="news-single-v1.html" class="thumb"><img src="site/views/assets/img/home-img/politics-02.jpg" alt=""></a>

                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">17 April 2017</a></li>
                                                            </ul>

                                                            <div class="title">
                                                                <h3 class="h4"><a href="news-single-v1.html" class="btn-link">'.$value['title'].'</a></h3>
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
                                        <h2 class="h4"><?=$this->getCate[4]['tendm']?></h2>

                                        <div class="nav">
                                            <a href="#" class="prev btn-link" data-ajax-action="load_prev_sports_posts">
                                                <i class="fa fa-long-arrow-left"></i>
                                            </a>

                                            <span class="divider">/</span>

                                            <a href="#" class="next btn-link" data-ajax-action="load_next_sports_posts">
                                                <i class="fa fa-long-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Post Items Title End -->

                                    <!-- Post Items Start -->
                                    <div class="post--items post--items-3" data-ajax-content="outer">
                                        <ul class="nav" data-ajax-content="inner">
                                        <?php
                                            foreach ($getNewbyCateLimit4 as $key => $value) {
                                              if($key==0){
                                                  echo '
                                                  <li>
                                                <!-- Post Item Start -->
                                                <div class="post--item post--layout-1">
                                                    <div class="post--img">
                                                        <a href="news-single-v1.html" class="thumb"><img src="site/views/assets/img/home-img/sports-01.jpg" alt=""></a>
                                                        <a href="#" class="cat">Basketball</a>

                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Yeasterday 03:52 pm</a></li>
                                                            </ul>

                                                            <div class="title">
                                                                <h3 class="h4"><a href="news-single-v1.html" class="btn-link">'.$value['title'].'</a></h3>
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
                                                <div class="post--item post--layout-3">
                                                    <div class="post--img">
                                                        <a href="news-single-v1.html" class="thumb"><img src="site/views/assets/img/home-img/sports-02.jpg" alt=""></a>

                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">16 April 2017</a></li>
                                                            </ul>

                                                            <div class="title">
                                                                <h3 class="h4"><a href="news-single-v1.html" class="btn-link">'.$value['title'].'</a></h3>
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
                           

                            <!-- Widget Start -->
                            <div class="widget">
                                <div class="widget--title">
                                    <h2 class="h4">Kết Nối</h2>
                                    <i class="icon fa fa-share-alt"></i>
                                </div>

                                <!-- Social Widget Start -->
                                <div class="social--widget style--1">
                                    <ul class="nav">
                                        <li class="facebook">
                                            <a href="#">
                                                <span class="icon"><i class="fa fa-facebook-f"></i></span>
                                                <span class="count">521</span>
                                                <span class="title">Likes</span>
                                            </a>
                                        </li>
                                        <li class="twitter">
                                            <a href="#">
                                                <span class="icon"><i class="fa fa-twitter"></i></span>
                                                <span class="count">3297</span>
                                                <span class="title">Followers</span>
                                            </a>
                                        </li>
                                        <li class="google-plus">
                                            <a href="#">
                                                <span class="icon"><i class="fa fa-google-plus"></i></span>
                                                <span class="count">596282</span>
                                                <span class="title">Followers</span>
                                            </a>
                                        </li>
                                        <li class="rss">
                                            <a href="#">
                                                <span class="icon"><i class="fa fa-rss"></i></span>
                                                <span class="count">521</span>
                                                <span class="title">Subscriber</span>
                                            </a>
                                        </li>
                                        <li class="vimeo">
                                            <a href="#">
                                                <span class="icon"><i class="fa fa-vimeo"></i></span>
                                                <span class="count">3297</span>
                                                <span class="title">Followers</span>
                                            </a>
                                        </li>
                                        <li class="youtube">
                                            <a href="#">
                                                <span class="icon"><i class="fa fa-youtube-square"></i></span>
                                                <span class="count">596282</span>
                                                <span class="title">Subscriber</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Social Widget End -->
                            </div>
                            <!-- Widget End -->

                

                            <!-- Widget Start -->
                            <div class="widget">
                                <div class="widget--title">
                                    <h2 class="h4">Tin Mới Nhất</h2>
                                
                                    <i class="icon fa fa-newspaper-o"></i>
                                </div>

                                <!-- List Widgets Start -->
                                <div class="list--widget list--widget-1">
                                    
                                    <!-- Post Items Start -->
                                    <div class="post--items post--items-3" data-ajax-content="outer">
                                        <ul class="nav" data-ajax-content="inner">
                                        <?php 
                                    foreach($this->getAllNew as $item_New)
                                    {
                                    echo '
                                    <li>
                                                <!-- Post Item Start -->
                                                <div class="post--item post--layout-3">
                                                    <div class="post--img">
                                                        <a href="news-single-v1.html" class="thumb"><img src="site/views/assets/img/widgets-img/news-widget-01.jpg" alt=""></a>

                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">16 April 2017</a></li>
                                                            </ul>

                                                            <div class="title">
                                                                <h3 class="h4"><a href="news-single-v1.html" class="btn-link">'.$item_New["title"].'</a></h3>
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
                                <!-- List Widgets End -->
                            </div>
                            <!-- Widget End -->

                            
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
                                        <h2 class="h4"><?=$this->getCate[5]['tendm']?></h2>

                                        <div class="nav">
                                            <a href="#" class="prev btn-link" data-ajax-action="load_prev_health_fitness_posts">
                                                <i class="fa fa-long-arrow-left"></i>
                                            </a>

                                            <span class="divider">/</span>

                                            <a href="#" class="next btn-link" data-ajax-action="load_next_health_fitness_posts">
                                                <i class="fa fa-long-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Post Items Title End -->

                                    <!-- Post Items Start -->
                                    <div class="post--items post--items-3" data-ajax-content="outer">
                                        <ul class="nav" data-ajax-content="inner">
                                        <?php
                                            foreach ($getNewbyCateLimit5 as $key => $value) {
                                              if($key==0){
                                                  echo '
                                                  <li>
                                                <!-- Post Item Start -->
                                                <div class="post--item post--layout-1">
                                                    <div class="post--img">
                                                        <a href="news-single-v1.html" class="thumb"><img src="site/views/assets/img/home-img/health-and-fitness-01.jpg" alt=""></a>
                                                        <a href="#" class="cat">Business</a>

                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Yeasterday 03:52 pm</a></li>
                                                            </ul>

                                                            <div class="title">
                                                                <h3 class="h4"><a href="news-single-v1.html" class="btn-link">'.$value['title'].'</a></h3>
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
                                                <div class="post--item post--layout-3">
                                                    <div class="post--img">
                                                        <a href="news-single-v1.html" class="thumb"><img src="site/views/assets/img/home-img/health-and-fitness-02.jpg" alt=""></a>

                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">16 April 2017</a></li>
                                                            </ul>

                                                            <div class="title">
                                                                <h3 class="h4"><a href="news-single-v1.html" class="btn-link">'.$value['title'].'</a></h3>
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
                                        <h2 class="h4"><?=$this->getCate[6]['tendm']?></h2>

                                        <div class="nav">
                                            <a href="#" class="prev btn-link" data-ajax-action="load_prev_lifestyle_posts">
                                                <i class="fa fa-long-arrow-left"></i>
                                            </a>

                                            <span class="divider">/</span>

                                            <a href="#" class="next btn-link" data-ajax-action="load_next_lifestyle_posts">
                                                <i class="fa fa-long-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Post Items Title End -->

                                    <!-- Post Items Start -->
                                    <div class="post--items post--items-2" data-ajax-content="outer">
                                        <ul class="nav row gutter--15" data-ajax-content="inner">
                                        <?php
                                            foreach ($getNewbyCateLimit6 as $key => $value) {
                                              if($key==0){
                                                  echo '
                                                  <li class="col-xs-12">
                                                  <!-- Post Item Start -->
                                                  <div class="post--item post--layout-1">
                                                      <div class="post--img">
                                                          <a href="news-single-v1.html" class="thumb"><img src="site/views/assets/img/home-img/lifestyle-01.jpg" alt=""></a>
                                                          <a href="#" class="cat">Fashion</a>
  
                                                          <div class="post--info">
                                                              <ul class="nav meta">
                                                                  <li><a href="#">Yeasterday 03:52 pm</a></li>
                                                              </ul>
  
                                                              <div class="title">
                                                                  <h3 class="h4"><a href="news-single-v1.html" class="btn-link">'.$value['title'].'</a></h3>
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
                                                <div class="post--item post--layout-2">
                                                    <div class="post--img">
                                                        <a href="news-single-v1.html" class="thumb"><img src="site/views/assets/img/home-img/lifestyle-02.jpg" alt=""></a>

                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">17 April 2017</a></li>
                                                            </ul>

                                                            <div class="title">
                                                                <h3 class="h4"><a href="news-single-v1.html" class="btn-link">'.$value['title'].'</a></h3>
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
                                        <h2 class="h4"><?=$this->getCate[7]['tendm']?></h2>

                                        <div class="nav">
                                            <a href="#" class="prev btn-link" data-ajax-action="load_prev_food_resturent_posts">
                                                <i class="fa fa-long-arrow-left"></i>
                                            </a>

                                            <span class="divider">/</span>

                                            <a href="#" class="next btn-link" data-ajax-action="load_next_food_resturent_posts">
                                                <i class="fa fa-long-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Post Items Title End -->

                                    <!-- Post Items Start -->
                                    <div class="post--items" data-ajax-content="outer">
                                        <ul class="nav row gutter--15" data-ajax-content="inner">
                                        <?php
                                            foreach ($getNewbyCateLimit7 as $key => $value) {
 
                                                  echo '
                                                  <li class="col-md-4 col-xs-6 col-xxs-12">
                                                <!-- Post Item Start -->
                                                <div class="post--item post--layout-1">
                                                    <div class="post--img">
                                                        <a href="news-single-v1.html" class="thumb"><img src="site/views/assets/img/home-img/food-and-resturent-01.jpg" alt=""></a>

                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Yeasterday 03:52 pm</a></li>
                                                            </ul>

                                                            <div class="title">
                                                                <h3 class="h4"><a href="news-single-v1.html" class="btn-link">'.$value['title'].'</a></h3>
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
                                        <h2 class="h4">Photo Gallery</h2>

                                        <div class="nav">
                                            <a href="#" class="prev btn-link" data-ajax-action="load_prev_photo_gallery_posts">
                                                <i class="fa fa-long-arrow-left"></i>
                                            </a>

                                            <span class="divider">/</span>

                                            <a href="#" class="next btn-link" data-ajax-action="load_next_photo_gallery_posts">
                                                <i class="fa fa-long-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Post Items Title End -->

                                    <!-- Post Items Start -->
                                    <div class="post--items post--items-1" data-ajax-content="outer">
                                        <ul class="nav row gutter--15" data-ajax-content="inner">
                                            <li class="col-md-12">
                                                <!-- Post Item Start -->
                                                <div class="post--item post--layout-1 post--title-large">
                                                    <div class="post--img">
                                                        <a href="news-single-v1.html" class="thumb"><img src="site/views/assets/img/home-img/photo-gallery-01.jpg" alt=""></a>
                                                        <a href="#" class="cat">Serfer</a>
                                                        <a href="#" class="icon"><i class="fa fa-eye"></i></a>

                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Astaroth</a></li>
                                                                <li><a href="#">Today 05:52 pm</a></li>
                                                            </ul>

                                                            <div class="title text-xxs-ellipsis">
                                                                <h2 class="h4"><a href="news-single-v1.html" class="btn-link">Standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum</a></h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Post Item End -->
                                            </li>
                                            <li class="col-md-4 col-xs-6 col-xxs-12">
                                                <!-- Post Item Start -->
                                                <div class="post--item post--layout-1">
                                                    <div class="post--img">
                                                        <a href="news-single-v1.html" class="thumb"><img src="site/views/assets/img/home-img/photo-gallery-02.jpg" alt=""></a>

                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Astaroth</a></li>
                                                                <li><a href="#">Today 03:52 pm</a></li>
                                                            </ul>

                                                            <div class="title">
                                                                <h2 class="h4"><a href="news-single-v1.html" class="btn-link">It is a long established fact that a reader will be distracted by</a></h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Post Item End -->
                                            </li>
                                            <li class="col-md-4 col-xs-6 col-xxs-12">
                                                <!-- Post Item Start -->
                                                <div class="post--item post--layout-1">
                                                    <div class="post--img">
                                                        <a href="news-single-v1.html" class="thumb"><img src="site/views/assets/img/home-img/photo-gallery-03.jpg" alt=""></a>

                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Astaroth</a></li>
                                                                <li><a href="#">Today 03:52 pm</a></li>
                                                            </ul>

                                                            <div class="title">
                                                                <h2 class="h4"><a href="news-single-v1.html" class="btn-link">It is a long established fact that a reader will be distracted by</a></h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Post Item End -->
                                            </li>
                                            <li class="col-md-4 hidden-sm hidden-xs">
                                                <!-- Post Item Start -->
                                                <div class="post--item post--layout-1">
                                                    <div class="post--img">
                                                        <a href="news-single-v1.html" class="thumb"><img src="site/views/assets/img/home-img/photo-gallery-04.jpg" alt=""></a>

                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Astaroth</a></li>
                                                                <li><a href="#">Today 03:52 pm</a></li>
                                                            </ul>

                                                            <div class="title">
                                                                <h2 class="h4"><a href="news-single-v1.html" class="btn-link">It is a long established fact that a reader will be distracted by</a></h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Post Item End -->
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
                                <!-- Photo Gallery End -->
                            </div>
                        </div>
                    </div>
                    <!-- Main Content End -->

                    <!-- Main Sidebar Start -->
                    <div class="main--sidebar col-md-4 col-sm-5 ptop--30 pbottom--30" data-sticky-content="true">
                        <div class="sticky-content-inner">
                            

                            

                            <!-- Widget Start -->
                            <div class="widget">
                                <div class="widget--title" data-ajax="tab">
                                    <h2 class="h4">Readers Opinion</h2>

                                    <div class="nav">
                                        <a href="#" class="prev btn-link" data-ajax-action="load_prev_readers_opinion_widget">
                                            <i class="fa fa-long-arrow-left"></i>
                                        </a>

                                        <span class="divider">/</span>

                                        <a href="#" class="next btn-link" data-ajax-action="load_next_readers_opinion_widget">
                                            <i class="fa fa-long-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>

                                <!-- List Widgets Start -->
                                <div class="list--widget list--widget-2" data-ajax-content="outer">
                                    <!-- Post Items Start -->
                                    <div class="post--items post--items-3">
                                        <ul class="nav" data-ajax-content="inner">
                                            <li>
                                                <!-- Post Item Start -->
                                                <div class="post--item post--layout-3">
                                                    <div class="post--img">
                                                        <span class="thumb"><img src="site/views/assets/img/widgets-img/readers-opinion-01.png" alt=""></span>

                                                        <div class="post--info">
                                                            <div class="title">
                                                                <h3 class="h4">Long established fact that a reader will be distracted</h3>
                                                            </div>

                                                            <ul class="nav meta">
                                                                <li><span>by Ninurta</span></li>
                                                                <li><span>16 April 2017</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Post Item End -->
                                            </li>
                                            <li>
                                                <!-- Post Item Start -->
                                                <div class="post--item post--layout-3">
                                                    <div class="post--img">
                                                        <span class="thumb"><img src="site/views/assets/img/widgets-img/readers-opinion-02.png" alt=""></span>

                                                        <div class="post--info">
                                                            <div class="title">
                                                                <h3 class="h4">Long established fact that a reader will be distracted</h3>
                                                            </div>

                                                            <ul class="nav meta">
                                                                <li><span>by Ninurta</span></li>
                                                                <li><span>16 April 2017</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Post Item End -->
                                            </li>
                                            <li>
                                                <!-- Post Item Start -->
                                                <div class="post--item post--layout-3">
                                                    <div class="post--img">
                                                        <span class="thumb"><img src="site/views/assets/img/widgets-img/readers-opinion-03.png" alt=""></span>

                                                        <div class="post--info">
                                                            <div class="title">
                                                                <h3 class="h4">Long established fact that a reader will be distracted</h3>
                                                            </div>

                                                            <ul class="nav meta">
                                                                <li><span>by Ninurta</span></li>
                                                                <li><span>16 April 2017</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Post Item End -->
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
                                <!-- List Widgets End -->
                            </div>
                            <!-- Widget End -->

                            <!-- Widget Start -->
                            <div class="widget">
                                <div class="widget--title" data-ajax="tab">
                                    <h2 class="h4">Editors Choice</h2>

                                    <div class="nav">
                                        <a href="#" class="prev btn-link" data-ajax-action="load_prev_editors_choice_widget">
                                            <i class="fa fa-long-arrow-left"></i>
                                        </a>

                                        <span class="divider">/</span>

                                        <a href="#" class="next btn-link" data-ajax-action="load_next_editors_choice_widget">
                                            <i class="fa fa-long-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>

                                <!-- List Widgets Start -->
                                <div class="list--widget list--widget-1" data-ajax-content="outer">
                                    <!-- Post Items Start -->
                                    <div class="post--items post--items-3">
                                        <ul class="nav" data-ajax-content="inner">
                                            <li>
                                                <!-- Post Item Start -->
                                                <div class="post--item post--layout-3">
                                                    <div class="post--img">
                                                        <a href="news-single-v1.html" class="thumb"><img src="site/views/assets/img/widgets-img/editors-choice-01.jpg" alt=""></a>

                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Ninurta</a></li>
                                                                <li><a href="#">16 April 2017</a></li>
                                                            </ul>

                                                            <div class="title">
                                                                <h3 class="h4"><a href="news-single-v1.html" class="btn-link">Long established fact that a reader will be distracted</a></h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Post Item End -->
                                            </li>
                                            <li>
                                                <!-- Post Item Start -->
                                                <div class="post--item post--layout-3">
                                                    <div class="post--img">
                                                        <a href="news-single-v1.html" class="thumb"><img src="site/views/assets/img/widgets-img/editors-choice-02.jpg" alt=""></a>

                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Orcus</a></li>
                                                                <li><a href="#">16 April 2017</a></li>
                                                            </ul>

                                                            <div class="title">
                                                                <h3 class="h4"><a href="news-single-v1.html" class="btn-link">Long established fact that a reader will be distracted</a></h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Post Item End -->
                                            </li>
                                            <li>
                                                <!-- Post Item Start -->
                                                <div class="post--item post--layout-3">
                                                    <div class="post--img">
                                                        <a href="news-single-v1.html" class="thumb"><img src="site/views/assets/img/widgets-img/editors-choice-03.jpg" alt=""></a>

                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Rahab</a></li>
                                                                <li><a href="#">16 April 2017</a></li>
                                                            </ul>

                                                            <div class="title">
                                                                <h3 class="h4"><a href="news-single-v1.html" class="btn-link">Long established fact that a reader will be distracted</a></h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Post Item End -->
                                            </li>
                                            <li>
                                                <!-- Post Item Start -->
                                                <div class="post--item post--layout-3">
                                                    <div class="post--img">
                                                        <a href="news-single-v1.html" class="thumb"><img src="site/views/assets/img/widgets-img/editors-choice-04.jpg" alt=""></a>

                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Tannin</a></li>
                                                                <li><a href="#">16 April 2017</a></li>
                                                            </ul>

                                                            <div class="title">
                                                                <h3 class="h4"><a href="news-single-v1.html" class="btn-link">Long established fact that a reader will be distracted</a></h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Post Item End -->
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
                                <!-- List Widgets End -->
                            </div>
                            <!-- Widget End -->
                        </div>
                    </div>
                    <!-- Main Sidebar End -->
                </div>
            </div>
        </div>
        <!-- Main Content Section End -->
