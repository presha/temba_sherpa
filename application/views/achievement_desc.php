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
      <h1 class="start"><a href="#"><span>Title</span></a></h1>

    </div>
    <div class="container">
      <p style="margin-left:10px;color:grey;">Date:<?php echo $achievement_data['achievement_date']?></p>
      
    </div>
  </header>
   <div id="achivement">
          <div class="box" style="width: 96%;"><a href="#" title="This is the description"><img src="<?php echo base_url()."images/achievement_image/".$achievement_data['achievement_photo'] ?>" alt="This is image" title="New achivement"></a> 
         
            <div class="discript"><?php echo $achievement_data['achievement_desc']?> 
             </div>
           </div>
    </div>
    
      </div>
    </div>
  </div>





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