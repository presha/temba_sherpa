<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Forms</title>
  <meta name="description" content="">

  <style type="text/css" title="currentStyle">
    /*@import "<?php echo base_url(); ?>assets/media/css/demo_page.css";
    @import "<?php echo base_url(); ?>assets/media/css/demo_table.css";*/
  </style>  
  <script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>media/js/jquery.js"></script>
  <script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>media/js/jquery.dataTables.js"></script>
  <script type="text/javascript" charset="utf-8">
    $(document).ready(function() {
      $('#example').dataTable();
    } );
  </script>
  
  <style type="text/css">
  a{
      text-decoration: none;
      color:black;
    }
    table{
      border: none;
      width: 100%;
      margin-top: 32px;
    }
    thead tr{background-color: #a0a6a7;}
    th{border-bottom: 1px solid black;}
    td{border-bottom: 1px dotted black;}
    #example_wrapper{margin-top:120px;}
    .gallery_view_image{
      height: 80px;
    }
    .gallery_name{padding-left:10px;}
  </style>

</head>

<body>
  <div class="main_body">
  <table id="example">
    <thead>
  <tr>
    <th>Achievement title</th>
    <th>Achievement description</th>
    <th>Achievement date</th>
    <th>Achievement's image</th>
    <th>Publish</th>
    <th></th>
    <th></th>
  </tr>
</thead>

<TBODY>
  <?php foreach ($achievement_data as $data_image): ?>
  <tr>
      <td><p class="gallery_name"><?php echo $data_image['achievement_title'] ?></p></td>
      <td><p class="gallery_name"><?php echo $data_image['achievement_desc'] ?></p></td>
      <td><p class="gallery_name"><?php echo $data_image['achievement_date'] ?></p></td>
      <td><p><a href="<?php echo base_url()."images/achievement_image/".$data_image['achievement_photo'] ?>" target="_blank"><img class="gallery_view_image" src="<?php echo base_url()."images/achievement_image/".$data_image['achievement_photo'] ?>" alt="no image found"/></a></p></td>
      <td><?php if($data_image['enable_disable']==1){echo "true";}else{echo "false";}?></td>
      <td><p><a href="<?php echo base_url();?>index.php/achievement/delete/<?php echo $data_image['achievement_id']?>"><img src="<?php echo base_url();?>media/images/delete.png" alt="Delete" style="max-width: 30px;"></a></p></td>
      <td><p><a href="<?php echo base_url();?>index.php/achievement/edit/<?php echo $data_image['achievement_id']?>"><img src="<?php echo base_url();?>media/images/edit.jpg" alt="Edit" style="max-width: 30px;"></a></p></td>

  </tr>
  <?php endforeach ?>

</TBODY>
</table>
</div>
</body>
</html>      

