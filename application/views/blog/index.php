
        
        <!--================Home Banner Area =================-->
        <!--<section class="home_banner_area">
        	<div class="container">
				<div class="row">
					<div class="col-lg-5"></div>
					<div class="col-lg-7">
						<div class="blog_text_slider owl-carousel">
							<div class="item">
								<div class="blog_text">
									<div class="cat">
										<a class="cat_btn" href="#">Gadgets</a>
										<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> March 14, 2018</a>
										<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 05</a>
									</div>
									<a href="#"><h4>Nest Protect: 2nd Gen Smoke + CO Alarm</h4></a>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
									<a class="blog_btn" href="#">Read More</a>
								</div>
							</div>
							<div class="item">
								<div class="blog_text">
									<div class="cat">
										<a class="cat_btn" href="#">Gadgets</a>
										<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> March 14, 2018</a>
										<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 05</a>
									</div>
									<a href="#"><h4>Nest Protect: 2nd Gen Smoke + CO Alarm</h4></a>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
									<a class="blog_btn" href="#">Read More</a>
								</div>
							</div>
							<div class="item">
								<div class="blog_text">
									<div class="cat">
										<a class="cat_btn" href="#">Gadgets</a>
										<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> March 14, 2018</a>
										<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 05</a>
									</div>
									<a href="#"><h4>Nest Protect: 2nd Gen Smoke + CO Alarm</h4></a>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
									<a class="blog_btn" href="#">Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
        	</div>
        </section>-->
        <!--================End Home Banner Area =================-->
        
        <!--================Blog Area =================-->
        <section class="blog_area p_120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog_left_sidebar">
                            <!--<article class="blog_style1">
                            	<div class="blog_img">
                            		<img class="img-fluid" src="img/home-blog/blog-1.jpg" alt="">
                            	</div>
                            	<div class="blog_text">
									<div class="blog_text_inner">
										<div class="cat">
											<a class="cat_btn" href="#">Gadgets</a>
											<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> March 14, 2018</a>
											<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 05</a>
										</div>
										<a href="#"><h4>Nest Protect: 2nd Gen Smoke + CO Alarm</h4></a>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
										<a class="blog_btn" href="#">Read More</a>
									</div>
								</div>
                            </article>-->
                            <div class="row">
								<?php
								if(!empty($blogList))
								{
									foreach ($blogList->result() as $row)
									{
										
								?>
								<div class="col-md-12">
								<article class="blog_style1">
									<div class="blog_text">
										<div class="blog_text_inner">
											<div class="cat">
												<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $row->created_dt?date('M d, Y',strtotime($row->created_dt)):"-"; ?></a>
											</div>
											<a href="<?php echo base_url("blog/detail?id=".$row->id); ?>"><h4><?php echo $row->blog_title; ?></h4></a>
											<p><?php echo $row->blog_desc; ?></p>
											<a class="blog_btn" href="<?php echo base_url("blog/detail?id=".$row->id) ?>">Read More</a>
										</div>
									</div>
								</article><br>
								</div>
								<!--<div class="col-md-6">
                            		<article class="blog_style1 small">
										<div class="blog_img">
											<img class="img-fluid" src="img/home-blog/blog-small-1.jpg" alt="">
										</div>
										<div class="blog_text">
											<div class="blog_text_inner">
												<div class="cat">
													<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> <?php //echo $row->created_dt?date('M d, Y',strtotime($row->created_dt)):"-"; ?></a>
												</div>
												<a href="<?php //echo base_url("blog/detail?id=".$row->id); ?>"><h4><?php //echo $row->blog_title; ?></h4></a>
												<p><?php //echo $row->blog_desc; ?></p>
												<a class="blog_btn" href="<?php //echo base_url("blog/detail?id=".$row->id) ?>">Read More</a>
											</div>
										</div>
									</article>
                            	</div>-->
								<?php 
									}
								}
								?>
                            </div>
                            <!--<nav class="blog-pagination justify-content-center d-flex">
		                        <ul class="pagination">
		                            <li class="page-item">
		                                <a href="#" class="page-link" aria-label="Previous">
		                                    <span aria-hidden="true">
		                                        <span class="lnr lnr-chevron-left"></span>
		                                    </span>
		                                </a>
		                            </li>
		                            <li class="page-item"><a href="#" class="page-link">01</a></li>
		                            <li class="page-item active"><a href="#" class="page-link">02</a></li>
		                            <li class="page-item"><a href="#" class="page-link">03</a></li>
		                            <li class="page-item"><a href="#" class="page-link">04</a></li>
		                            <li class="page-item"><a href="#" class="page-link">09</a></li>
		                            <li class="page-item">
		                                <a href="#" class="page-link" aria-label="Next">
		                                    <span aria-hidden="true">
		                                        <span class="lnr lnr-chevron-right"></span>
		                                    </span>
		                                </a>
		                            </li>
		                        </ul>
		                    </nav>-->
                        </div>
                    </div>
                    <div class="col-lg-4">
						<?php $this->load->view('right-side-bar'); ?> 
                    </div>
                </div>
            </div>
        </section>
        <!--================Blog Area =================-->