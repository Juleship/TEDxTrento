<?php get_header(); ?>
	<div class="col-sm-12 col-md-10 col-md-offset-1 speakers">
	<?php 
			$custom = get_post_custom();
			$name = get_the_title();
			$name_slug = basename(get_permalink());
			$title = $custom["_staff_member_title"][0];
			$url = $custom["_staff_member_fb"][0];
			/* $position = $custom["_staff_member_position"][0]; */
			$bio 	= $custom["_staff_member_bio"][0];
			if(has_post_thumbnail()){
				$photo_url = wp_get_attachment_url( get_post_thumbnail_id() );
				$photo = '<img class="staff-member-photo" src="'.$photo_url.'" alt = "'.$title.'">';
			}
			
			?>
			<div class="staff-member-listing">
				<div class="staff-member big-member even">
					<a href="http://<?php echo $url; ?>" target="_blank">
						<div class="ch-item" style="background-image: url('<?php echo $photo_url; ?>');">
			            	<div class="ch-info">
			                	<p><?php echo $url; ?></p>
			                </div>
		                </div>
		            </a>
		            <div class="staff-member-info-wrap">
						<h1><?php echo $name ?></h1>
						<h3><?php /* echo $position */ ?></h3>
						<p><?php echo $bio; ?></p>
						
					</div>
				</div>
			</div>
	</div>
	<div class="clearfix"></div>
<?php get_footer(); ?>