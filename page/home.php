    <!-- latest_news start -->
    <div id="blog" class="latest_news-area gray-bg pt-20 pb-20">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-md-8 offset-md-2">
                    <div class="section-title mb-50 text-center">
                        <div class="section-title-heading mb-20">
                            <h1 class="primary-color">Latest News</h1>
                        </div>
                        <div class="section-title-para">
                            <p class="gray-color">Belis nisl adipiscing sapien sed malesu diame lacus eget erat Cras mollis scelerisqu Nullam arcu liquam here was consequat.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                        for($i = 1; $i <= 6 ; $i++){
                        ?>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="blog-wrapper mb-30">
                                    <div class="blog-thumb mb-25">
                                        <a href="news_details.html"><img src="img/blog/blog_thumb_<?php echo $i ?>.jpg" alt=""></a>
                                        <span class="blog-category">news</span>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-meta">
                                            <span>Auguest 25, 2018</span>
                                        </div>
                                        <h5><a href="news_details.html">Some say education is the process of gaining information is nation.</a></h5>
                                        <p>Belis nisl adipiscing sapien sed malesu diame lacus eget erat Cras mollis scele.</p>
                                        <div class="read-more-btn">
                                            <button>Read more</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                    }
                ?>
            </div>
        </div>
    </div>
    <!-- latest_blog end -->
    <!-- team start -->
    <div class="team-area pt-20 pb-20">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                    <div class="section-title mb-50 text-center">
                        <div class="section-title-heading mb-20">
                            <h1 class="primary-color">Our Experience Advisors</h1>
                        </div>
                        <div class="section-title-para">
                            <p class="gray-color">Belis nisl adipiscing sapien sed malesu diame lacus eget erat Cras mollis scelerisqu Nullam arcu liquam here was consequat.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-list">
                <div class="row">
                    <?php
                            for($i = 1; $i <= 4 ; $i++){
                            ?>
                                <div class="col-xl-3 col-lg-3 col-md-6">
                                    <div class="team-wrapper team-wrapper-2 mb-30">
                                        <div class="team-thumb">
                                            <img src="img/team/teamthumb00<?php echo $i ?>.jpg" alt="">
                                        </div>
                                        <div class="team-social-info text-center">
                                            <div class="team-social-icon-list">
                                                <ul>
                                                    <li><a href="#"><span class="ti-facebook"></span></a></li>
                                                    <li><a href="#"><span class="ti-twitter-alt"></span></a></li>
                                                    <li><a href="#"><span class="ti-google"></span></a></li>
                                                    <li><a href="#"><span class="ti-linkedin"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="team-teacher-info team-teacher-info-2 text-center">
                                            <h1>Mr. LUY SOKMATRA</h1>
                                            <h2>Computer Teacher</h2>
                                        </div>
                                    </div>
                                </div>

                            <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- team end -->
    <!-- counter start -->
    <div class="counter-area">
        <div class="container pt-20 pb-25">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3">
                    <div class="couter-wrapper mb-30 text-center">
                        <img src="img/counter/counter_icon1.png" alt="">
                        <span class="counter">10532</span>
                        <h3>Satisfied Students</h3>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3">
                    <div class="couter-wrapper mb-30 text-center">
                        <img src="img/counter/counter_icon2.png" alt="">
                        <span class="counter">7985</span>
                        <h3>Courses Complated</h3>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3">
                    <div class="couter-wrapper mb-30 text-center">
                        <img src="img/counter/counter_icon3.png" alt="">
                        <span class="counter">5382</span>
                        <h3>Satisfied Students</h3>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3">
                    <div class="couter-wrapper mb-30 text-center">
                        <img src="img/counter/counter_icon4.png" alt="">
                        <span class="counter">354</span>
                        <h3>Expert Advisors</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- counter end -->