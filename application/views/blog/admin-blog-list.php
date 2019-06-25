      
<!--================Blog Area =================-->
<section class="blog_area">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="blog_left_sidebar">
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
					<div class="row">
					<table class="table">
						<tr>
						<th>Id</th>
						<th>Blog Title</th>
						<th>Created By</th>
						<th>Created On</th>
						<th>Action</th>
						</tr>
						<?php
						if(!empty($blogList))
						{
							foreach ($blogList->result() as $row)
							{
								
						?>
						<tr>
							<td><?php echo $row->id; ?></td>
							<td><?php echo $row->blog_title; ?></td>
							<td><?php echo $row->firstname; ?></td>
							<td><?php echo $row->created_dt?date('M d, Y',strtotime($row->created_dt)):"-"; ?></td>
							<td><a href='<?php echo base_url("blog/editBlog?id=".$row->id);?>' >Edit</a></td>										
						</tr>
						
						<?php 
							}
						}
						?>
						</table>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<?php $this->load->view('right-side-bar'); ?> 
			</div>
		</div>
	</div>
</section>
<!--================Blog Area =================-->