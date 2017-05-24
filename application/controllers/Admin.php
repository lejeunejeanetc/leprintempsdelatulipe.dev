<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends MY_Controller {
  function __construct()
  {
    parent::__construct();
  }
  function index()
  {
    $this->render('session/index');
  }
}
?>