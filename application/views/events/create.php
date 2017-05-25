<h1> Evenements</h1>
<?php 
echo form_open(base_url('Events/created')); 

// echo validation_errors();   
echo form_label('Nom de l\'event', 'eventname');

$attributesEventName = array('class' => 'form-control', 'id' => 'eventname' ,  'name' => 'eventname', 'value'=>'');
echo form_input($attributesEventName)."<br>";
echo form_label('Adresse ', 'adressname');
$attributesAdresseName = array('class' => 'form-control', 'id' => 'adressname' ,  'name' => 'adressname', 'value'=>'');
echo form_input($attributesAdresseName)."<br>";


echo form_label('Image ', 'imagesource');
$attributesImgPath = array('class' => 'form-control', 'id' => 'imagesource' ,  'name' => 'imagesource', 'value'=>'');
echo form_input($attributesImgPath)."<br>";

echo form_label('Description ', 'description');
$attributesImgPath = array('class' => 'form-control', 'id' => 'description' ,  'name' => 'description', 'value'=>'');
echo form_input($attributesImgPath)."<br>";
echo form_label('Lien ', 'lien');
$attributesImgPath = array('class' => 'form-control', 'id' => 'lien' ,  'name' => 'lien', 'value'=>'');
echo form_input($attributesImgPath)."<br>";
echo form_submit('mysubmit', 'Creer Evenement', array('class' => 'btn btn-primary'));
echo form_close();

?>