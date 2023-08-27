<?php

/*
  type: layout
  content_type: static
  name: Home
  position: 11
  is_default: true
  description: Home layout

*/

?>

<?php include template_dir(). "header.php"; ?>

<div class="edit main-wrapper" rel="content" field="boost-home-content-4">
<?php
  $is_edited = \DB::table('content_fields')->where('field',"boost-home-content")->where('rel_id',PAGE_ID)->first();
  if($is_edited){

    print $is_edited->value;
    ?>

<?php }else{?>

  <module type="layouts" template="hero-slider/hero-slider"/>
  <module type="layouts" template="service/service"/>
  <module type="layouts" template="promotion/promotion"/>
  <module type="layouts" template="product/product"/>
  <module type="layouts" template="popular/popular"/>
  <module type="layouts" template="feature/feature"/>
  
<?php } ?>
</div>

<?php include template_dir().  "footer.php"; ?>