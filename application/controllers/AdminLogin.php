<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdminLogin extends MY_Controller {

  function __construct()
  {
    parent::__construct();
    
    $this->load->model('admin_mdl','admin_mdl');
    $this->load->model('events_mdl','events_mdl');
   
  }

  public function login()
  {
    if($this->session->userdata('login') || $this->session->userdata('logged'))
    {
      $this->data["adminDashboard"] = $this->events_mdl->get_where($where);
      redirect('session/logged',$data);
    }
    else
    {
      $this->render('session/index');
    }
  }
  public function login_admin()
  {
    $this->form_validation->set_rules('login','login','trim|required');
    $this->form_validation->set_rules('password','password','trim|required');
    if($this->form_validation->run())
    {
      if($this->admin_mdl->check_id($this->input->post('login'),$this->input->post('password')))
      {
       //si bon id
       $data = array('login'=>$this->input->post('login'),'logged'=>TRUE);
        $this->data["adminDashboard"] = $this->events_mdl->get_where();
     
       $this->session->set_userdata($data);

       $this->render('session/logged');
      }
      else 
      {
        $data['error'] = 'Mauvais id';
        $data['titre'] = 'contact';
        $this->render('session/index');
      }
   }
   else
  {
    $data['titre'] = 'connecté';
    redirect('VerifyLogin/login',$data);
  }
}




function logout()
  {
    $this->session->unset_userdata('logged_in');
    $this->session->unset_userdata('username');  
    redirect(base_url() . 'admin');  
  }
}
?>