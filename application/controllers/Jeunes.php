<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Jeunes extends MY_Controller {
    public function __construct(){
        parent::__construct();
       
    }
    public function SoutienScolaire()
    {
       $this->render('main/SoutienScolaire', 'template/base/jeunes'); 
    }
    public function AteliersCEB()
    {
       $this->render('main/AteliersCEB', 'template/base/jeunes'); 
    }
    public function SummerClasses()
    {
       $this->render('main/SummerClasses', 'template/base/jeunes'); 
    }
    public function ActivitesEte()
    {
       $this->render('main/ActivitesEte', 'template/base/jeunes'); 
    }
}