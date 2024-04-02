    <!-- courses start -->
    <div class="courses-area courses-bg-height gray-bg pt-100 pb-70">
        <div class="container">
            <div class="courses-list">
                <div class="row">

                    <?php
                        for($i = 1; $i <= 6 ; $i++){
                        ?>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="courses-wrapper course-radius-none mb-30">
                                    <div class="courses-thumb">
                                        <a href="course_details.html"><img src="img/courses/single_courses_thumb_0<?php echo $i ?>.jpg" alt=""></a>
                                    </div>
                                    <div class="courses-author">
                                        <img src="img/courses/coursesauthor1.png" alt="">
                                    </div>
                                    <div class="course-main-content clearfix">
                                        <div class="courses-content">
                                            <div class="courses-category-name">
                                                <span>
                                                    <a href="#">Business</a>
                                                </span>
                                            </div>
                                            <div class="courses-heading">
                                                <h1><a href="course_details.html">Business Studies</a></h1>
                                            </div>
                                            <div class="courses-para">
                                                <p>Maecenas fermentum consequat mi fonec has fermentum ellentesque malesuada.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="courses-wrapper-bottom clearfix">
                                        <div class="courses-icon d-flex f-left">
                                            <div class="courses-single-icon">
                                                <span class="ti-user"></span>
                                                <span class="user-number">35</span>
                                            </div>
                                            <div class="courses-single-icon">
                                                <span class="ti-heart"></span>
                                                <span class="user-number">35</span>
                                            </div>
                                        </div>
                                        <div class="courses-button f-right">
                                            <a href="course_details.html">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                    ?>

                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="single-courses-btn text-center mt-15 mb-30">
                            <button class="btn black-border">View all course</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- courses end -->