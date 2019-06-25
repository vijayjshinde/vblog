<div class="blog_right_sidebar">
	<?php if($this->session->userdata('userId')){ ?>
		<h4>Welcome,<br><?php echo $this->session->userdata('name');?></h4>
		<?php if($this->session->userdata('user_roal')){ ?>
			<a href="<?php echo base_url("blog/blogListAdmin"); ?>">Blog List</a><br>
			<?php } ?>
			<a href="<?php echo base_url("blog/addBlog"); ?>">Add New Blog</a><br>
			<a href="<?php echo base_url("user/logout"); ?>">Logout</a>	
	<?php } else { ?>
	<form class="row contact_form" action="<?php echo base_url("user/login"); ?>" method="post" id="contactForm">							
		<div class="col-md-12">
			<?php
				if($this->session->flashdata('msgError'))
				{
					echo '<div class="alert alert-danger">'.$this->session->flashdata('msgError').'</div>';
				}
			?>
			<div class="input-group">
				<h4>Login</h4>
			</div>
			<div class="form-group">
				<input type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
			</div>
			<div class="form-group">
				<input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
			</div>
		</div>
		<div class="col-md-12 text-right">
			<button type="submit" value="submit" id="submitLogin" class="btn submit_btn">Login</button>
		</div>
	</form>	
	<?php } ?>                           
</div>