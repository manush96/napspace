<?php
class Admin_model extends CI_Model
{
		public function __construct()
		{
			$this->load->database();
			$this->load->helper('url');
			$this->load->helper('cookie');
		}
		public function owner_data_to_db($name, $email, $contact, $password,$desc)
		{
			$data=array('name'=>$name , 'email'=>$email , 'contact'=>$contact , 'password'=>md5($password) , 'status'=>'1','desc'=>$desc);
			$this->db->insert('owner',$data);
		}
    	public function rule_data_to_db($rule_name, $type)
		{
			$data=array('rule'=>$rule_name ,'status'=>'1','type'=>$type);
			$this->db->insert('rules',$data);
		}
		public function get_all_rules()
		{
			$this->db->select('*');
			$this->db->where('status',1);
			$query=$this->db->get('rules');
			$result=$query->result_array();
			return $result;
		} 
		public function eliminate_rule($id)
		{
			$query="update rules set status='0' where id='".$id."'";
			$result=$this->db->query($query);

		}
		public function get_all_amenities()
		{
			$this->db->select('*');
			$query=$this->db->get('amenities');
			$result=$query->result_array();
			return $result;
		}
		public function amenities_data_to_db($name, $icon,$type)
		{
			$data=array('name'=>$name ,'icon'=>$icon,'type'=>$type);
			$this->db->insert('amenities',$data);
		}
		/*public function eliminate_amenities($id)
		{
			$query="update amenities0 set status='0' where id='".$id."'";
			$result=$this->db->query($query);
			
		}*/

		public function pg_data_to_db($name, $address, $contact, $area, $lat, $long, $room_share, $gender, $city, $type, $form_no, $amenities, $rules,$property_desc)
		{
			$this->db->select('id');
			$this->db->where('contact',$contact);
			$query=$this->db->get('owner');
			$result=$query->row_array();

			$owner_id = $result['id'];

			#$name, $address, $contact, $area, $lat, $long, $room_share, $gender, $city,  $type, $form_no, $new_amenities, $new_rules,$this->input->post('description')
			
			$data=array('owner_id'=>$owner_id,'name'=>$name,'address'=>$address,'area'=>$area ,'latitude'=>$lat, 'longitude'=>$long, 'amenities'=>$amenities , 'room_price'=>$room_share,'rules'=>$rules,'gender'=>$gender,'city'=>$city ,'type'=>$type,'form_no'=>$form_no, 'property_desc'=>$property_desc);
  			$this->db->insert('pg',$data);
		}
}



?>