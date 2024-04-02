    <!-- courses start -->
    <div class="blog-grid-area gray-bg pt-100 pb-70">
        <div class="container">
            <div class="blog-grid-list">
                <div class="row">
                    <?php
                        for($i = 1; $i <= 9 ; $i++){
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
                <div class="row">
                    <div class="col-xl-12 text-center">
                        <div class="single-events-btn mt-15 mb-30">
                            <nav class="course-pagination mb-30" aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item">
                                        <a class="page-link" href="#"><span class="ti-angle-left"></span></a>
                                    </li>
                                    <li class="page-item active">
                                        <a class="page-link" href="#">1</a>
                                    </li>
                                    <?php
                                        for($i = 2; $i <= 4 ; $i++){
                                            ?>
                                            <li class="page-item">
                                                <a class="page-link" href="#"><?php echo $i ?></a>
                                            </li>
                                            <?php
                                        }
                                    ?>
                                    <li class="page-item">
                                        <a class="page-link" href="#"><span class="ti-angle-right"></span></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- courses end -->
