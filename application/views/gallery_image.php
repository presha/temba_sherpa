<!Doctype html>
<html lang="en">

<head>

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>media/css/style.css">
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url();?>media/css/light.css">

<!-- Fall back to local if necessary -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>

<link rel="stylesheet" href="<?php echo base_url(); ?>media/css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
<script src="<?php echo base_url(); ?>media/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>

</head>
<body>
 

<div id="wrapper"> 

  <!-- Container --> 
  <!-- Top -->
  <header>
    <div class="container">
      <div class="titles">
        <h2 class="start">Mountaineer And Traveller</h2>
        <h3 class="start">By Own</h3>
      </div>
      <h1 class="start"><a href="#">Temba <span>Sherpa</span></a></h1>
    </div>
  </header>
  
  <!-- /Top --> 
   <!-- Content -->
  <section>
    <div class="container">
      <nav id="nav">
        <ul class="shadow">
          <li><a href="<?php echo base_url().'index.php/ui'?>" class="start"><strong>Profile</strong><span>about me</span></a></li>
          <li><a href="<?php echo base_url().'index.php/ui/resume'?>" class="start" ><strong>Resume</strong><span>me and about me</span></a></li>
          <li><a href="<?php echo base_url().'index.php/ui/achievement'?>" class="start"><strong>My Achivement</strong><span>himalayas I conquer</span></a></li>
          <li><a href="<?php echo base_url().'index.php/ui/gallery'?>" class="active start"><strong>My Gallery</strong><span>a moment of rememberance</span></a></li>
          
          
        </ul>
      </nav>

<div id="content">
  <div id="portfolio">
    <div id="porfolio-container">
      <header>
        <div class="container">
          <h1 class="start"><span>Photos</span></h1>
        </div>
      </header>
  <div id="main">
      <h2>Gallery</h2>
      <ul class="gallery clearfix">
        <?php foreach ($gallery_images as $data_image): ?>
             <div class="box">
             <ul class="gallery clearfix">
               <li>
                 <a href="<?php echo base_url().'images/gallery_image/'.$data_image['image_path'] ?>" rel="prettyPhoto[gallery1]" title="<?php echo $data_image['image_caption'] ?>">
                 <img src="<?php echo base_url().'images/gallery_image/'.$data_image['image_path'] ?>" alt="<?php echo $data_image['image_caption'] ?>"/></a>
                </li>
              </ul>
            </div>

          <?php endforeach ?>
      </ul>

<div class="facebook">
   <div class="fb-like" data-href="http://www.facebook.com/UdanSoftwarePvtLtd?fref=ts" data-send="true" data-width="450" data-show-faces="true" data-font="arial"></div>

               


      
      
      <script type="text/javascript" charset="utf-8">
      $(document).ready(function(){
        // $("area[rel^='prettyPhoto']").prettyPhoto();
        
        $(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: true});
        $(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:10000, hideflash: true});
        $("img").click(function(){
          test=setInterval(function()
            {
              if($(".pp_pic_holder").is(":visible"))
                {
                  $(".pp_social").hide();
                }
            }
            ,500);
        });
        
      });
      </script>
  
      <!-- Google Maps Code -->
      <script type="text/javascript"
          src="http://maps.google.com/maps/api/js?sensor=true">
      </script>
      <script type="text/javascript">
        function initialize() {
          var latlng = new google.maps.LatLng(-34.397, 150.644);
          var myOptions = {
            zoom: 8,
            center: latlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
          };
          var map = new google.maps.Map(document.getElementById("map_canvas"),
              myOptions);
        }

      </script>
      <!-- END Google Maps Code -->
  
      
  </div>
      </div>
    </div>
  </div>
</div>
</section>

<!-- footer-->
 <header>
  <div class="container">
      <div class="titles">
        <h3 class="start">Powered by <a href="http://www.udansoftware.com" target="_blank" alt="Udan Software Pvt Ltd" style="color:#D94D4A">Udan</a></h3>
        
      </div>
    </div>
</header>

  
  <!-- /footer --> 
  
</div>
</body>


</html>