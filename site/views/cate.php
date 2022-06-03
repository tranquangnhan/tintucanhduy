

        

        <!-- Main Breadcrumb Start -->
        <div class="main--breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="home-1.html" class="btn-link"><i class="fa fm fa-home"></i>Home</a></li>
                    <li class="active"><span>Archives</span></li>
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
                                <h2 class="h2">Yearly Archives 2016</h2>
                            </div>
                            <!-- Page Title End -->

                            <!-- Post Items Start -->
                            <div class="post--items post--items-2 pd--30-0">
                                <ul class="nav row AdjustRow">
                                    <?php 
                                        foreach ($NewList as  $value) {
                                            $linkDetail = 'bai-viet/'.$value['slug'];
                                           echo '<li class="col-md-6 col-sm-12 col-xs-6 col-xss-12 mt-2">
                                           <!-- Post Item Start -->
                                           <div class="post--item post--layout-1 post--title-large post-cate">
                                               <div class="post--img">
                                                   <a href="'.$linkDetail.'" class="thumb"><img src="uploads/'.$value['img'].'" alt=""></a>
                                                   <a href="#" class="cat">Kids</a>
   
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

                 

                       

                     

                            <!-- Pagination Start -->
                            <div class="pagination--wrapper clearfix bdtop--1 bd--color-2 ptop--60 pbottom--30">
                                <p class="pagination-hint float--left">Page 02 of 03</p>

                                <ul class="pagination float--right">
                                    <li><a href="#"><i class="fa fa-long-arrow-left"></i></a></li>
                                    <li><a href="#">01</a></li>
                                    <li class="active"><span>02</span></li>
                                    <li><a href="#">03</a></li>
                                    <li>
                                        <i class="fa fa-angle-double-right"></i>
                                        <i class="fa fa-angle-double-right"></i>
                                        <i class="fa fa-angle-double-right"></i>
                                    </li>
                                    <li><a href="#">20</a></li>
                                    <li><a href="#"><i class="fa fa-long-arrow-right"></i></a></li>
                                </ul>
                            </div>
                            <!-- Pagination End -->
                        </div>
                    </div>
                    <!-- Main Content End -->

                    <!-- Main Sidebar Start -->
                    <div class="main--sidebar col-md-4 col-sm-5 ptop--30 pbottom--30" data-sticky-content="true">
                        <div class="sticky-content-inner">
                            <!-- Widget Start -->
                            <div class="widget">
                                <!-- Search Widget Start -->
                                <div class="search--widget">
                                    <form action="#" data-form="validate">
                                        <div class="input-group">
                                            <input type="search" name="search" placeholder="Search..." class="form-control" required>

                                            <div class="input-group-btn">
                                                <button type="submit" class="btn-link"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- Search Widget End -->
                            </div>
                            <!-- Widget End -->

                            <!-- Widget Start -->
                            <div class="widget">
                                <div class="widget--title">
                                    <h2 class="h4">Catagory</h2>
                                    <i class="icon fa fa-folder-open-o"></i>
                                </div>

                                <!-- Nav Widget Start -->
                                <div class="nav--widget">
                                    <ul class="nav">
                                        <li><a href="#"><span>Fashion</span><span>(22)</span></a></li>
                                        <li><a href="#"><span>Winter</span><span>(16)</span></a></li>
                                        <li><a href="#"><span>Exclusive</span><span>(84)</span></a></li>
                                        <li><a href="#"><span>Summer</span><span>(11)</span></a></li>
                                        <li><a href="#"><span>Heavy Style</span><span>(19)</span></a></li>
                                    </ul>
                                </div>
                                <!-- Nav Widget End -->
                            </div>
                            <!-- Widget End -->

                            <!-- Widget Start -->
                            <div class="widget">
                                <div class="widget--title">
                                    <h2 class="h4">Tags</h2>
                                    <i class="icon fa fa-tags"></i>
                                </div>

                                <!-- Tags Widget Start -->
                                <div class="tags--widget style--1">
                                    <ul class="nav">
                                        <li><a href="#">News</a></li>
                                        <li><a href="#">Image</a></li>
                                        <li><a href="#">Music</a></li>
                                        <li><a href="#">Video</a></li>
                                        <li><a href="#">Audio</a></li>
                                        <li><a href="#">Fashion</a></li>
                                        <li><a href="#">Latest</a></li>
                                        <li><a href="#">Trendy</a></li>
                                        <li><a href="#">Special</a></li>
                                        <li><a href="#">Recipe</a></li>
                                        <li><a href="#">Sports</a></li>
                                    </ul>
                                </div>
                                <!-- Tags Widget End -->
                            </div>
                            <!-- Widget End -->

                            <!-- Widget Start -->
                            <div class="widget">
                                <div class="widget--title">
                                    <h2 class="h4">Archives</h2>
                                    <i class="icon fa fa-folder-open-o"></i>
                                </div>

                                <!-- Nav Widget Start -->
                                <div class="nav--widget">
                                    <ul class="nav">
                                        <li><a href="#"><span>March 2017</span><span>(22)</span></a></li>
                                        <li><a href="#"><span>April 2017</span><span>(16)</span></a></li>
                                        <li><a href="#"><span>May 2017</span><span>(84)</span></a></li>
                                        <li><a href="#"><span>January 2016</span><span>(11)</span></a></li>
                                        <li><a href="#"><span>February 2016</span><span>(19)</span></a></li>
                                        <li><a href="#"><span>March 2016</span><span>(36)</span></a></li>
                                        <li><a href="#"><span>April 2016</span><span>(41)</span></a></li>
                                        <li><a href="#"><span>October 2015</span><span>(39)</span></a></li>
                                        <li><a href="#"><span>Nover 2015</span><span>(15)</span></a></li>
                                        <li><a href="#"><span>Decemberr 2015</span><span>(28)</span></a></li>
                                    </ul>
                                </div>
                                <!-- Nav Widget End -->
                            </div>
                            <!-- Widget End -->

                            <!-- Widget Start -->
                            <div class="widget">
                                <div class="widget--title">
                                    <h2 class="h4">Stay Connected</h2>
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
                                    <h2 class="h4">Get Newsletter</h2>
                                    <i class="icon fa fa-envelope-open-o"></i>
                                </div>

                                <!-- Subscribe Widget Start -->
                                <div class="subscribe--widget">
                                    <div class="content">
                                        <p>Subscribe to our newsletter to get  latest news, popular news and exclusive updates.</p>
                                    </div>

                                    <form action="https://themelooks.us13.list-manage.com/subscribe/post?u=79f0b132ec25ee223bb41835f&id=f4e0e93d1d" method="post" name="mc-embedded-subscribe-form" target="_blank" data-form="mailchimpAjax">
                                        <div class="input-group">
                                            <input type="email" name="EMAIL" placeholder="E-mail address" class="form-control" autocomplete="off" required>

                                            <div class="input-group-btn">
                                                <button type="submit" class="btn btn-lg btn-default active"><i class="fa fa-paper-plane-o"></i></button>
                                            </div>
                                        </div>

                                        <div class="status"></div>
                                    </form>
                                </div>
                                <!-- Subscribe Widget End -->
                            </div>
                            <!-- Widget End -->

                            <!-- Widget Start -->
                            <div class="widget">
                                <div class="widget--title">
                                    <h2 class="h4">Featured News</h2>
                                    <i class="icon fa fa-newspaper-o"></i>
                                </div>

                                <!-- List Widgets Start -->
                                <div class="list--widget list--widget-1">
                                    <div class="list--widget-nav" data-ajax="tab">
                                        <ul class="nav nav-justified">
                                            <li>
                                                <a href="#" data-ajax-action="load_widget_hot_news">Hot News</a>
                                            </li>
                                            <li class="active">
                                                <a href="#" data-ajax-action="load_widget_trendy_news">Trendy News</a>
                                            </li>
                                            <li>
                                                <a href="#" data-ajax-action="load_widget_most_watched">Most Watched</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Post Items Start -->
                                    <div class="post--items post--items-3" data-ajax-content="outer">
                                        <ul class="nav" data-ajax-content="inner">
                                            <li>
                                                <!-- Post Item Start -->
                                                <div class="post--item post--layout-3">
                                                    <div class="post--img">
                                                        <a href="#" class="thumb"><img src="img/widgets-img/news-widget-01.jpg" alt=""></a>

                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Ninurta</a></li>
                                                                <li><a href="#">16 April 2017</a></li>
                                                            </ul>

                                                            <div class="title">
                                                                <h3 class="h4"><a href="#" class="btn-link">Long established fact that a reader will be distracted</a></h3>
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
                                                        <a href="#" class="thumb"><img src="img/widgets-img/news-widget-02.jpg" alt=""></a>

                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Orcus</a></li>
                                                                <li><a href="#">16 April 2017</a></li>
                                                            </ul>

                                                            <div class="title">
                                                                <h3 class="h4"><a href="#" class="btn-link">Long established fact that a reader will be distracted</a></h3>
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
                                                        <a href="#" class="thumb"><img src="img/widgets-img/news-widget-03.jpg" alt=""></a>

                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Rahab</a></li>
                                                                <li><a href="#">16 April 2017</a></li>
                                                            </ul>

                                                            <div class="title">
                                                                <h3 class="h4"><a href="#" class="btn-link">Long established fact that a reader will be distracted</a></h3>
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
                                                        <a href="#" class="thumb"><img src="img/widgets-img/news-widget-04.jpg" alt=""></a>

                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">Tannin</a></li>
                                                                <li><a href="#">16 April 2017</a></li>
                                                            </ul>

                                                            <div class="title">
                                                                <h3 class="h4"><a href="#" class="btn-link">Long established fact that a reader will be distracted</a></h3>
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

                            <!-- Widget Start -->
                            <div class="widget">
                                <div class="widget--title">
                                    <h2 class="h4">Advertisement</h2>
                                    <i class="icon fa fa-bullhorn"></i>
                                </div>

                                <!-- Ad Widget Start -->
                                <div class="ad--widget">
                                    <a href="#">
                                        <img src="img/ads-img/ad-300x250-2.jpg" alt="">
                                    </a>
                                </div>
                                <!-- Ad Widget End -->
                            </div>
                            <!-- Widget End -->

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
                                                        <span class="thumb">
                                                            <img src="img/widgets-img/readers-opinion-01.png" alt="">
                                                        </span>

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
                                                        <span class="thumb">
                                                            <img src="img/widgets-img/readers-opinion-02.png" alt="">
                                                        </span>

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
                                                        <span class="thumb">
                                                            <img src="img/widgets-img/readers-opinion-03.png" alt="">
                                                        </span>

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
                        </div>
                    </div>
                    <!-- Main Sidebar End -->
                </div>
            </div>
        </div>
        <!-- Main Content Section End -->
