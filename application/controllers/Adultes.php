<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Adultes extends MY_Controller {
    public function __construct(){
        parent::__construct();
       
    }
    public function Alphabetisation()
    {
       $this->render('main/Alphabetisation', 'template/base/adultes'); 
    }
    public function AteliersSante()
    {
       $this->render('main/AteliersSante', 'template/base/adultes'); 
    }
    public function SoutienParents()
    {
       $this->render('main/SoutienParents', 'template/base/adultes'); 
    }
}