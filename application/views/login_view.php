<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Login</title>
  
  <style> .error{color: red;}</style>



</head>

<body>

  <h1>Login</h1>
  <?php echo form_open('admin');?>
  

  <p>
    <?php
      echo form_label('Email address','admin_name');
      echo form_input('admin_name',set_value('admin_name'),'id="email_address"');

    ?>
  </p>
  <p>
    <?php
      echo form_label('Password','password');
      echo form_password('admin_password','','id="password"');

    ?>
  </p>
  <p>
    <?php echo form_submit('submit','Login');?>
  </p>
  </form  >
  <div class="error"><?php echo validation_errors(); ?></div>

</body>
</html>      


