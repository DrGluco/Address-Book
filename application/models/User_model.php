<?php


if (!defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model{

	public function Add_Contact(){
    $first_name = $this->input->post('first_name');
    $last_name = $this->input->post('surname');
    $email = $this->input->post('email');
    $phone = $this->input->post('phone');
    
		 $contact_details = array(
    	'contact_name' => $first_name,
    	'contact_lname' => $last_name,
    	'contact_email' => $email,
    	'contact_phone_number' => $phone
    	 );
    
    $this->db->insert('contacts', $contact_details); 
} 
public function Add_Email(){
  $email = $this->input->post('email');
  $contact_id = $this->input->post('id');
  $email_details = array(
    'contact_id' => $contact_id,
    'email_address' => $email
     );
  $this->db->insert('additional_emails', $email_details);

}
public function Add_Phone_Number(){
  $phone = $this->input->post('phone');
  $contact_id = $this->input->post('id');
  $phone_details = array(
    'contact_id' => $contact_id,
    'phone_number' => $phone
     );
  $this->db->insert('additional_phone_numbers', $phone_details);

}

    public function Save_Changes(){
     $first_name = $this->input->post('first_name');
    $last_name = $this->input->post('surname');
    $email = $this->input->post('email');
    $phone = $this->input->post('phone');
    $contact_id = $this->input->post('id');
    
     $contact_details = array(
      'contact_name' => $first_name,
      'contact_lname' => $last_name,
      'contact_email' => $email,
      'contact_phone_number' => $phone
       );
   $this->db->where('contact_id', $contact_id);
  $this->db->update('contacts', $contact_details);

}
public function Delete_Contact($contact_id){
  $this->db->delete('additional_phone_numbers', array('contact_id' => $contact_id));
  $this->db->delete('additional_emails', array('contact_id' => $contact_id));
  $this->db->delete('contacts', array('contact_id' => $contact_id));
}
public function Delete_Email($email_id){
  
  $this->db->delete('additional_emails', array('email_id' => $email_id));
 
}
public function Delete_Phone($phone_id){
  
  $this->db->delete('additional_phone_numbers', array('phone_id' => $phone_id));
 
}

 
    public function Get_Contacts(){
	$this->db->select('*');
	$this->db->from('contacts');
  $this->db->order_by('contact_name');
	$query = $this->db->get();
	if($query->num_rows() > 0){
		foreach ($query->result() as $row)

			{
			    $data[]=$row;
			}
			$query->free_result();

		    return $data;
     }
	else
		{
			return false;
		}

}
 public function get_additional_emails($contact_id){
  $this->db->select('*');
  $this->db->where('contact_id', $contact_id);
  $this->db->from('additional_emails');
  $query = $this->db->get();
  if($query->num_rows() > 0){
    foreach ($query->result() as $row)

      {
          $data[]=$row;
      }
      $query->free_result();

        return $data;
     }
  else
    {
      return false;
    }

}
 public function get_contact_details($contact_id){
	$this->db->select('*');
	$this->db->where('contact_id', $contact_id);
	$this->db->from('contacts');
	$query = $this->db->get();
	if($query->num_rows() > 0){
		foreach ($query->result() as $row)

			{
			    $data[]=$row;
			}
			$query->free_result();

		    return $data;
     }
	else
		{
			return false;
		}

}
 public function get_additional_phone_numbers($contact_id){
  $this->db->select('*');
  $this->db->where('contact_id', $contact_id);
  $this->db->from('additional_phone_numbers');
  $query = $this->db->get();
  if($query->num_rows() > 0){
    foreach ($query->result() as $row)

      {
          $data[]=$row;
      }
      $query->free_result();

        return $data;
     }
  else
    {
      return false;
    }

}


}
