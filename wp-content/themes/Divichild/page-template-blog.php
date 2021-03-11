<?php
/*
Template Name: Blog Page
*/
get_header();
?>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet"> 
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> 

<!--
    instagram: www.instagram.com/programmingtutorial
    site: programlamadersleri.net
-->
<style>
     @import url(https://fonts.googleapis.com/css?family=Raleway:400,900,700,600,500,300,200,100,800);

section{
    padding:60px 0px;
    font-family: 'Raleway', sans-serif;
}

h2 {
    color: #4C4C4C;
    word-spacing: 5px;
    font-size: 30px;
    font-weight: 700;
    margin-bottom:30px;
    font-family: 'Raleway', sans-serif;
}

.ion-minus{
    padding:0px 10px;
}

#blog{
     background-color:#f6f6f6;
}

#blog .blog.column a{
     color:#5db4c0;
     text-decoration:none;
}

#blog img:hover {
     opacity:0.8; 
}

</style>

<section id="blog">
      <div class="container">
       
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3 text-center">  
                <h2><span class="ion-minus"></span>Blog Posts<span class="ion-minus"></span></h2>
               
            </div> 
        </div>  
                
        <div class="row">
<?php 
// the query to set the posts per page to 3
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array('posts_per_page' => 6, 'paged' => $paged );
query_posts($args); ?>
<!-- the loop -->
<?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>
       <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" data-aos="fade-right">
                    <div class="blog column text-center">
                       <?php the_post_thumbnail(); ?>
                        <h4><?php the_title(); ?></h4>
                        <p>  <?php echo get_excerpt(150); ?></p>
                       
                    </div>
                </div>
<?php endwhile; ?>
<!-- pagination -->
<?php next_posts_link(); ?>
<?php previous_posts_link(); ?>
<?php else : ?>
<!-- No posts found -->
<?php endif; ?>


               
            
        </div>  <!-- row -->
            
    </div>
</section>
