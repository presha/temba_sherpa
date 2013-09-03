<!Doctype html>
<html lang="en">

<head>

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>media/css/style.css">
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url();?>media/css/light.css">

<!-- Fall back to local if necessary -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>


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
          <li><a href="<?php echo base_url().'index.php/ui/achievement'?>" class="active start"><strong>My Achivement</strong><span>himalayas I conquer</span></a></li>
          <li><a href="<?php echo base_url().'index.php/ui/gallery'?>" class="start"><strong>My Gallery</strong><span>a moment of rememberance</span></a></li>
          
          
        </ul>
      </nav>
     
<div id="content">
  <div id="portfolio" class="clearfix">
    <div id="porfolio-container">
       <header>
    <div class="container">
      <h1 class="start"><a href="#"><span>My Achivement</span></a></h1>
    </div>
  </header>
  <?php foreach ($achievement_data as $data_image): ?>
    <div class="achivement">
      <a href="<?php echo base_url();?>index.php/ui/achievement_desc/<?php echo $data_image['achievement_id']?>" title="This is the description">
       <div class="box"><img src="<?php echo base_url()."images/achievement_image/".$data_image['achievement_photo'] ?>" alt="New achivement" title="New achivement">
         <div class="discript"><?php echo $data_image['achievement_title'] ?></div>
        </div>
      </a>
     </div>
  <?php endforeach ?>
   
    
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