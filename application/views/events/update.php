<h1> Evenements</h1>
<?php 
foreach($query->result() as $row){      
echo form_open(base_url('Events/modify_event/')); 

// echo validation_errors();   
echo form_label('Nom de l\'event', 'eventname');

$attributesEventName = array('class' => 'form-control', 'id' => 'eventname' ,  'name' => 'eventname', 'value'=>$row->nom);
echo form_input($attributesEventName)."<br>";
echo form_label('Adresse ', 'adressname');
$attributesAdresseName = array('class' => 'form-control', 'id' => 'adressname' ,  'name' => 'adressname', 'value'=>$row->adresse);
echo form_input($attributesAdresseName)."<br>";


echo form_label('Lien de l\'Image ', 'imagesource');
$attributesImgPath = array('class' => 'form-control', 'id' => 'imagesource' ,  'name' => 'imagesource', 'value'=>$row->image);
echo form_input($attributesImgPath)."<br>";

echo form_label('Description ', 'description');
$attributesDesc = array('class' => 'form-control', 'id' => 'description' ,  'name' => 'description', 'value'=>$row->description);
echo form_input($attributesDesc)."<br>";
echo form_label('Lien ', 'lien');
$attributesLink = array('class' => 'form-control', 'id' => 'lien' ,  'name' => 'lien', 'value'=>$row->lien);
echo form_input($attributesLink)."<br>";
echo form_hidden('id_user',$row->id);
echo form_submit('mysubmit', 'Modifier Evenement', array('class' => 'btn btn-primary'));
echo form_close();

?>
<?php 
} ?>