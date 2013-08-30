<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script type="text/javascript">
 	$(document).ready(function(){
 		$("#email_address").prop('disabled', true);
 	});
  </script>
  <title>Login</title>
  
  <style> .error{color: red;}</style>



</head>

<body>
<div class="main_body">
  <h1>Login</h1>
  <?php echo form_open('admin/change_password');?>
  

  <p>
    <?php
      echo form_label('Email address','admin_name');
      echo form_input('admin_name',$_SESSION['username'],'id="email_address"','readonly="true"');

    ?>
  </p>
  <p>
    <?php
      echo form_label('Old Password','password');
      echo form_password('admin_password','','id="password"');

    ?>
  </p>
 <p>
  <?php
      echo form_label('New Password','password');
      echo form_password('new_password','','id="password"');

    ?>
  </p>
   <p>
  <?php
      echo form_label('Confirm New Password','password');
      echo form_password('new_password2','','id="password"');

    ?>
  </p>
  <p>
    <?php echo form_submit('submit','Login');?>
  </p>
  <?pho echo form_close(); ?>
  <div class="error"><?php echo validation_errors(); ?></div>
</div>
</body>
</html>      


