<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Events extends MY_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model("events_mdl"); 
        //$this->load->helper("date");
    }
    public function index()
    {
       $this->data["query"] = $this->events_mdl->get_where();
       $this->render('events/events', 'template/base/index'); 
    }

    public function more($id=FALSE)
    {
        if ($id==FALSE)
        {
            $this->index();
            return;
        }
        
          $result = $this->events_mdl->get_where(array('id'=> $id));
          if ($result->num_rows()!=1)
          {
              $this->index();
              return;
          }
          
          $this->data["query"] = $result;
          $this->render("events/more"); 
    }
     public function create()
    {
     
       $this->render('events/create', 'template/base/index'); //form to create event
    }

     public function created()
    {
        $nameEvent = $_POST['eventname'];
        $eventadress = $_POST['adressname'];
        $image=$_POST['imagesource'];
        $description=$_POST['description'];
        $lienevent = $_POST['lien'];
      $this->events_mdl->create($nameEvent,$eventadress,$image,$lienevent,$description);
       $this->render('events/created', 'template/base/index'); 
       
       redirect('events','');
       
    }

    public function modify($id)
     {  
         $where = array ('id' => $id);
        $this->data["query"] = $this->events_mdl->get_where($where);
          $this->render("events/update"); 
     }

      public function modify_event()
      {
         $nameEvent = $_POST['eventname'];
        $eventadress = $_POST['adressname'];
        $image=$_POST['imagesource'];
        $description=$_POST['description'];
        $lienevent = $_POST['lien'];
        $id = $_POST['id_user'];

        $this->events_mdl->modify($nameEvent,$eventadress,$image,$lienevent,$description,$id);
        $this->render('events/updated');
         redirect('events','');
      }

      public function delete ($id)
      {
       
        $this->events_mdl->delete($id);
         $this->render('events/delete');
          redirect('events','');
      }
}