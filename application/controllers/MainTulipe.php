<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MainTulipe extends MY_Controller {
    public function __construct(){
        parent::__construct();
        // charge notre model
        $this->load->model('contact_model');
       
        }
    public function index()
    {
        $this->render('main/index', 'template/base/home');
    }
	public function contact(){
			$this->render('main/contact');
		}

	public function contact_form(){
		$this->form_validation->set_rules('nom', 'nom', 'trim|required|min_length[5]',array('required' => 'Votre %s est requis'));
		$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email',array('required' => 'Oups, il manque votre %s'));
		$this->form_validation->set_rules('message', 'message', 'trim|required|min_length[5]',array('required' => 'Where is the %s, man?'));
        if ($this->form_validation->run() == FALSE)
                {
        //sauvegarder la valeur de l'input dans l'input
        $this->data['nom']=$this->input->post('nom');            
        $this->data['message']=$this->input->post('message');            

        $this->render('main/contact');
                }
                else
                {
			// récupérer les données
			$nom = $this->input->post('nom');
			$email = $this->input->post('email');
			$message = $this->input->post('message');

				// mettre dans la BDD
			$this->contact_model->contact_send($nom,$email,$message);

			// envoyer par email
			$config['useragent']    = 'CodeIgniter';
			$config['protocol']     = 'smtp';
			$config['smtp_host']    = 'smtp.mailtrap.io';
			$config['smtp_user']    = '3b0bc61feb61ed'; // Your gmail id
			$config['smtp_pass']    = '90eb6f939f66c6'; // Your gmail Password
			$config['smtp_port']    = 2525;
			$config['wordwrap']     = TRUE;    
			$config['wrapchars']    = 76;
			$config['mailtype']     = 'html';
			$config['charset']      = 'UTF-8';
			$config['validate']     = FALSE;
			$config['priority']     = 3;
			$config['newline']      = "\r\n";
			$config['crlf']         = "\r\n";

			$this->load->library('email');
			$this->email->initialize($config);

			$this->email->from('3b0bc61feb61ed', 'TSS DEV');
			$this->email->to('lamjahdi.soumaya@gmail.com'); 

			$this->email->subject('Message provenant du site web');
			$this->email->message($nom, $email, $message);    

			$this->email->send();
			$this->render('main/formsuccess');
                }

		}

		public function newsletter(){
			$this->load->model("newsletter_model");
			$prenom = $this->input->post('newsletter_prenom');
			$email = $this->input->post('newsletter_email');
			$this->newsletter_model->subscribe($prenom, $email);
			$this->data['inscription'] = true;
			$this->render('main/newsletter', 'template/base/index');
		}

		/* generateur CSV */

        function create_csv(){
			$this->load->dbutil();
			$this->load->helper('file');
			$this->load->helper('download');
			$query = $this->db->query("SELECT email FROM newsletter");
			$delimiter = ",";
			$newline = "\r\n";
			$data = $this->dbutil->csv_from_result($query, $delimiter, $newline);
			force_download('CSV_Report.csv', $data);
        }
	}