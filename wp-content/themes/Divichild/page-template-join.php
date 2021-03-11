<?php
/*
Template Name: join Page
*/

get_header();?>

<div class="container">
	 <div class="row">
	 	  <?php 
     if(is_user_logged_in()){
          echo do_shortcode('[ultimatemember form_id="276924"]'); 
     }
     else{
     	
     	 echo do_shortcode('[ultimatemember form_id="276923"]');
     	 echo do_shortcode('[nextend_social_login_register_flow]');
     }
	 	   ?>
	 </div>
</div>
<?php get_footer(); ?>
