<!Doctype html>
<html lang="en">

<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>Temba Tsheri Sherpa</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="shortcut icon" href="favicon.ico">
<link rel="apple-touch-icon" href="apple-touch-icon.png">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>media/css/style.css">


<link rel="stylesheet" type="text/css" media="screen" title="light-theme" href="<?php echo base_url();?>media/css/light.css">

<!-- Fall back to local if necessary -->
<script src="<?php echo base_url(); ?>media/js/jquery-1.9.1.min.js"></script>
<script>!window.jQuery && document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
<script src="<?php echo base_url(); ?>media/js/jquery.easing.js" type="text/javascript"></script>


<!-- Custom scrollbars CSS -->
<link href="<?php echo base_url();?>media/css/jquery.mCustomScrollbar.css" rel="stylesheet" />
<script src="<?php echo base_url(); ?>media/js/jquery.mCustomScrollbar.concat.min.js" type="text/javascript"></script>

<!-- Progressbar -->
<script src="<?php echo base_url(); ?>media/js/jquery.simple-progress-bar.min.js" type="text/javascript"></script>


<!-- Clients -->
<link href="<?php echo base_url();?>media/css/jquery.bxslider.css" rel="stylesheet" />
<script src="<?php echo base_url(); ?>media/js/jquery.bxslider.min.js" type="text/javascript"></script>


<!-- Slider -->
<script src="<?php echo base_url(); ?>media/js/jquery.flexslider-min.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>media/css/flexslider.css" media="screen">

<!-- Main javascript JS Template -->
<script src="<?php echo base_url(); ?>media/js/main.js" type="text/javascript"></script>

<!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Dosis:600,500|Open+Sans:400,600,300,700,400italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo base_url(); ?>media/css/font-awesome.css">

<!--Fancybox-->
<link rel="stylesheet" href="<?php echo base_url(); ?>media/js/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo base_url(); ?>media/js/source/jquery.fancybox.pack.js?v=2.1.5"></script>

<script type="text/javascript">
  $(document).ready(function() {
  //fancy box
  $('.fancybox').fancybox();
  $(".mCSB_scrollTools:not(:last)").hide();
  });   

</script>


</head>
<body>
<div id="wrapper"> 

  <!-- Container --> 
  <!-- Top -->
  <header>
    <div class="container">
      <div class="titles">
        <h2>Mountaineer And Traveller</h2>
        <h3>By Own</h3>
      </div>
      <h1><a href="index.html">Temba <span>Sherpa</span></a></h1>
    </div>
  </header>
  
  <!-- /Top --> 
   <!-- Content -->
  <section>
    <div class="container">
      <nav id="nav">
        <ul class="shadow">
          <li><a href="<?php echo base_url().'index.php/ui'?>"><strong>Profile</strong><span>about me</span></a></li>
          <li><a href="<?php echo base_url().'index.php/ui/resume'?>" ><strong>Resume</strong><span>me and about me</span></a></li>
          <li><a href="<?php echo base_url().'index.php/ui/achievement'?>"><strong>My Achivement</strong><span>himalayas I conquer</span></a></li>
		      <li><a href="" class="active"><strong>My Gallery</strong><span>a moment of rememberance</span></a></li>
		      
          
        </ul>
      </nav>

<div id="content">
  <div id="portfolio" class="clearfix">
    <div id="porfolio-container">
       <header>
    <div class="container">
      <h1><a href="#"><span>Gallery</span></a></h1>
    </div>
  </header>
  <?php foreach ($gallery_data as $data_image): ?>

      <div class="box">
      <a href="<?php echo base_url().'index.php/ui/gallery_image/'.$data_image['gallery_id'] ?>" title="<?php echo $data_image['gallery_desc']?>">
        <img class="padd_img" src="<?php echo base_url()."images/gallery_image/".$data_image['gallery_img_path'] ?>" alt="Mount everest" title="">
          </a>
    </div>

    <?php endforeach ?>
    
       
      </div>
    </div>
  </div>
</div>

<!-- footer-->


 <header>
  <div class="container">
      <div class="titles">
        <h3>Powered by <a href="http://www.udansoftware.com" target="_blank" alt="Udan Software Pvt Ltd" style="color:#D94D4A">Udan</a></h3>
        
      </div>
    </div>
</header>

  
  <!-- /footer --> 
  
</div>
</body>


</html>