  <!-- Widget Start -->
  <div class="widget">
                                <div class="widget--title" data-ajax="tab">
                                    <h2 class="h4">Xem Nhiều Nhất</h2>

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
                                <div class="list--widget list--widget-1 post-sidebar" data-ajax-content="outer">
                                    <!-- Post Items Start -->
                                    <div class="post--items post--items-3">
                                        <ul class="nav" data-ajax-content="inner">
                                            <?php 
                                            foreach($this->getAllNewView as $value)
                                            {
                                                $linkDetail = 'bai-viet/'.$value['slug'];
                                            echo '
                                   

                                                    <li>
                                                <!-- Post Item Start -->
                                                <div class="post--item post--layout-3">
                                                    <div class="post--img">
                                                        <a href="'.$linkDetail.'" class="thumb"><img src="uploads/'.$value['img'].'" alt=""></a>

                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="#">16 April 2017</a></li>
                                                            </ul>

                                                            <div class="title ">
                                                                <h3 class="h4 limit-title"><a href="'.$linkDetail.'" class="btn-link">'.$value["title"].'</a></h3>
                                                                <span class="label_title1">'.$value["description"].'</span>
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