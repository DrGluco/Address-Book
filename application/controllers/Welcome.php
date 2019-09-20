<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    public function __construct()
  {
     parent::__construct();
    $this->load->model('user_model');
     $this->load->library('session');
  
  }
	public function index()
	{
		$contacts['my_contact'] = $this->user_model->Get_Contacts();
		$this->load->view('includes/header', array_merge($contacts));
		$this->load->view('welcome_message');
		$this->load->view('includes/footer');
	}
	public function New_Contact()
	{
		$this->load->view('includes/header');
		$this->load->view('new_contact');
		$this->load->view('includes/footer');
	}
	public function Edit_Contact($contact_id)
	{
		$contacts['my_contact'] = $this->user_model->get_contact_details($contact_id)[0];
		$this->load->view('includes/header', array_merge($contacts));
		$this->load->view('edit_contact');
		$this->load->view('includes/footer');
	}
	
	public function Add_Contact(){
      
        if (count($_POST)){
            $this->load->helper('security');
              $this->form_validation->set_rules('first_name', '', 'required');
            $this->form_validation->set_rules('email', '', 'required|valid_email|is_unique[contacts.contact_email]');
            $this->form_validation->set_rules('phone', '', 'required|min_length[6]|max_length[100]|is_unique[contacts.contact_phone_number]');
            

               if ($this->form_validation->run() == false) {
                  echo '<script>
         alert("Details you are trying to add already exist!");
         </script>';
         $this->New_Contact();
            } 
            else {
            
    
              $this->user_model->Add_Contact();
            
           echo '<script>
         alert("New Contact Successfully Added!");
         </script>';
          redirect('/', 'refresh');

               
               
            }
        }
        
    }
    public function Save_Changes(){
      
        if (count($_POST)){
            $this->load->helper('security');
              $this->form_validation->set_rules('first_name', '', 'required');
            $this->form_validation->set_rules('email', '', 'required|valid_email');
            $this->form_validation->set_rules('phone', '', 'required|min_length[6]|max_length[100]');
            

               if ($this->form_validation->run() == false) {
                  echo '<script>
         alert("Opps something went wrong!");
         </script>';
         redirect('/', 'refresh');
            } 
            else {
            
    
              $this->user_model->Save_Changes();
            
           echo '<script>
         alert("Contact Changes were Successfully Saved!");
         </script>';
          redirect('/', 'refresh');

               
               
            }
        }
        
    }
    public function Add_Email(){
      
        if (count($_POST)){
            $this->load->helper('security');
            $this->form_validation->set_rules('email', '', 'required|valid_email|is_unique[additional_emails.email_address]'); 

			
               if ($this->form_validation->run() == false) {
             
                  echo '<script>
         alert("Email address you are trying to add already exist!");
         </script>';
         redirect($_SERVER['HTTP_REFERER']);
            } 
            else {

             $this->user_model->Add_Email();
            
           echo '<script>
         alert("New Email Successfully Added!");
         </script>';

        redirect($_SERVER['HTTP_REFERER']);

               
               
            }
        }
        
    }
      public function Add_Phone_Number(){
      
        if (count($_POST)){
            $this->load->helper('security');
            $this->form_validation->set_rules('phone', '', 'required|is_unique[additional_phone_numbers.phone_number]');  

               if ($this->form_validation->run() == false) {
               
                  echo '<script>
         alert("Phone number you are trying to add already exist!");
         </script>';
         redirect($_SERVER['HTTP_REFERER']);
            } 
            else {
            
   			 
              $this->user_model->Add_Phone_Number();
            
           echo '<script>
         alert("New Number Successfully Added!");
         </script>';

         redirect($_SERVER['HTTP_REFERER']);

         //$this->View_Contact($contact_id);

               
               
            }
        }
        
    }
      public function Delete_Contact($contact_id)
  {
     
    
   $this->user_model->Delete_Contact($contact_id);
  echo '<script>
         alert("Contact was Successfully Deleted!");
         </script>';

        redirect($_SERVER['HTTP_REFERER']);

  }
    public function Delete_Email($email_id)
  {
     
    
   $this->user_model->Delete_Email($email_id);
  echo '<script>
         alert("Email was Successfully Deleted!");
         </script>';

         redirect($_SERVER['HTTP_REFERER']);

  }
   public function Delete_Phone($phone_id)
  {
    $this->user_model->Delete_Phone($phone_id);
  echo '<script>
         alert("Phone Number was Successfully Deleted!");
         </script>';

         redirect($_SERVER['HTTP_REFERER']);

  }
    public function View_Contact($contact_id)
	{
		$contacts['my_contact'] = $this->user_model->get_contact_details($contact_id);
		$additional_emails['emails'] = $this->user_model->get_additional_emails($contact_id);
		$additional_phone_numbers['phone_numbers'] = $this->user_model->get_additional_phone_numbers($contact_id);
		$this->load->view('includes/header', array_merge($contacts, $additional_emails, $additional_phone_numbers));
		$this->load->view('contact');
		$this->load->view('includes/footer');
	}
}
