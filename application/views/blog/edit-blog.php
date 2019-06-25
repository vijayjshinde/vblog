
        
        
        <!--================Blog Area =================-->
        <section class="blog_area p_120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog_left_sidebar">
                           <form class="row contact_form" action="<?php echo base_url("blog/editBlog"); ?>" method="post" id="contactForm">							
								<div class="col-md-12">
									<?php
										if($this->session->flashdata('msgBlogAddSuccess'))
										{
											echo '<div class="alert alert-success">'.$this->session->flashdata('msgBlogAddSuccess').'</div>';
										}
										elseif($this->session->flashdata('msgBlogAddError'))
										{
											echo '<div class="alert alert-danger">'.$this->session->flashdata('msgBlogAddError').'</div>';
										}
									?>
									<div class="input-group">
										<h4>Add New Blog</h4>
									</div>
									<div class="form-group">
										<label>Tital</label>
										<input type="text" class="form-control" id="blog_title" name="blog_title" placeholder="Enter blog title" value="<?php echo $blogDetail['blog_title']; ?>">
									</div>
									<div class="form-group">
										<label>Details</label>
										<textarea class="form-control" name="blog_desc" rows="15" col="15">
											<?php echo trim($blogDetail['blog_desc']); ?>
										</textarea>
									</div>
								</div>
								<div class="col-md-12 text-right">
									<input type="hidden" name="id" value="<?php echo $blogDetail['id']; ?>" />
									<button type="submit" value="submit" id="submitBlog" class="btn submit_btn">Save</button>
								</div>
							</form>	
                        </div>
                    </div>
                    <div class="col-lg-4">
						<?php $this->load->view('right-side-bar'); ?>                        
                    </div>
                </div>
            </div>
        </section>
        <!--================Blog Area =================-->