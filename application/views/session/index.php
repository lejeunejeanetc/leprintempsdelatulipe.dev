<h1>Connectez vous </h1>
<?php
echo validation_errors();
echo form_open("adminlogin/login_admin");
echo form_label ('login', 'Your login' );
$data = array ( 'class' => 'form-control',  'name' => 'login' );
echo form_input($data);
echo form_label ('Password', 'Your Password' );
$dataPassword = array ( 'class' => 'form-control' , 'name' => 'password', 'type' => 'password');
echo form_input($dataPassword);
echo form_submit('mysubmit', 'Se connecter',array('class' => 'btn btn-primary'));
echo form_close();

?>
