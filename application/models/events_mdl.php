<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class events_mdl extends CI_Model {
    private $table = "events";
    public function __construct(){
        parent::__construct();
         $this->load->database();
    }

    public function get_where($where=array()){
        if ( !is_array($where))
        {
            return FALSE;
        }
       $this->db->where('deleted',0); //ramene juste les deleted = 0 
       $query = $this->db->get_where($this->table, $where); 
       return $query;
    }

   public function create($eventname,$eventadress,$image,$lienevent,$description){
         $data = array(
            'nom' => $eventname,
            'adresse' =>  $eventadress,
            'image' => $image,
            'description' => $description,
            'lien' => $lienevent
            ); 
        $this->db->insert($this->table, $data);
        }

         public function modify($eventname,$eventadress,$image,$lienevent,$description,$id){
         $data = array(
               'nom' => $eventname,
            'adresse' =>  $eventadress,
            'image' => $image,
            'description' => $description,
            'lien' => $lienevent         
           );
           $this->db->where('id',$id);
            $this->db->update($this->table,$data);
     }

   public function delete($id)
          {
                $data = array(
               'deleted' => 1           
           );
             $this->db->where('id',$id);
            $this->db->update($this->table,$data);
        
          }

}