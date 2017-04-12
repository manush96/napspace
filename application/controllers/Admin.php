<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
        $this->load->helper('url_helper');
        $this->load->helper('cookie');
        $this->load->library('session');
    }
    public function add_pg()
    {
        $this->load->view("admin/header");
        $this->load->view("admin/sidebar");
        $this->load->view('admin/add_pg');
        $this->load->view("admin/footer");
    }
    public function add_rule()
    {
        $data['rules']=$this->admin_model->get_all_rules();
        $this->load->view("admin/header");
        $this->load->view("admin/sidebar");
        $this->load->view('admin/add_rules',$data);
        $this->load->view("admin/footer");
    }
    public function add_amenities()
    {
        $data['amenities']=$this->admin_model->get_all_amenities();
        $this->load->view("admin/header");
        $this->load->view("admin/sidebar");
        $this->load->view('admin/add_amenities',$data);
        $this->load->view("admin/footer");   
    }
    public function add_owner()
    {
        $this->load->view("admin/header");
        $this->load->view("admin/sidebar");
        $this->load->view('admin/add_owner');
        $this->load->view("admin/footer");
    }
    public function new_owner_data()
    {
        $name=$this->input->post('name');
        $email=$this->input->post('email');
        $contact=$this->input->post('contact');
        $password=$this->input->post('password');
        $desc=$this->input->post('about_owner');
        $this->admin_model->owner_data_to_db($name, $email, $contact, $password,$desc);
        redirect("admin/add_owner");
    }

    public function new_rule_data()
    {
        $rule_name=$this->input->post('rule_name');
        $type=$this->input->post('type');
        $this->admin_model->rule_data_to_db($rule_name,$type);
        redirect("admin/add_rule");
    }

    public function new_amenities_data()
    {
        $amenities=$this->input->post('amenity_name');
        $icon=$this->input->post('amenity_icon');
        $type=$this->input->post('type');
        $this->admin_model->amenities_data_to_db($amenities,$icon,$type);
        redirect("admin/add_amenities");
    }

    public function eliminate_rule()
    {
        $id=$this->input->post('id');
        
        $this->admin_model->eliminate_rule($id);
        redirect("admin/add_rule");
    }
    public function new_pg_data()
    {
        $pg_path = $this->config->item('pg_img');
        #pr($_FILES);
        pr(get_defined_vars());
        exit;
        $dirs = array_filter(glob($pg_path.'*'), 'is_dir');
        foreach ($dirs as $key => $value)
        {
            $dirs[$key] = str_replace($pg_path,"",$value);
        }
        sort($dirs);
        $form_no = intval(end($dirs))+1;
        mkdir($pg_path.$form_no);
        $count = count($_FILES['image']['size']);
        $temp = $_FILES['image'];
        for($i=0; $i<$count;$i++)
        {
            $_FILES['test'][$i]['name'] = $temp['name'][$i];
            $_FILES['test'][$i]['type'] = $temp['type'][$i];
            $_FILES['test'][$i]['tmp_name'] = $temp['tmp_name'][$i];
            $_FILES['test'][$i]['error'] = $temp['error'][$i];
            $_FILES['test'][$i]['size'] = $temp['size'][$i];
            $config['upload_path'] = $this->config->item('base_img_path').$form_no."\\";
            $config['allowed_types'] = 'gif|jpg|png';
            $config['file_name'] = ($i+1).".jpg";
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('test['.$i.']');
            $data = $this->upload->data();
        }
        
        $name=$this->input->post('PG_Name');
        $address=$this->input->post('address');
        $contact=$this->input->post('contact');
        $area=$this->input->post('area');
        $lat = $this->input->post('latitude');
        $long = $this->input->post('longitude');
        $room_price=$this->input->post('room_price');
        $gender=$this->input->post('gender');
        $vacant_beds=$this->input->post('vacant_beds');
        $city=$this->input->post('city');
        $price_to=$this->input->post('price_to');
        $price_from=$this->input->post('price_from');
        $type=$this->input->post('type');
        $amenities=$this->input->post('amenities');
        $rules=$this->input->post('rules');
        if(isset($amenities))
            $new_amenities = implode(',',$amenities);
        else
            $new_amenities = "";
        if(isset($rules))
            $new_rules = implode(',',$rules);
        else
            $new_rules = "";
        $this->admin_model->pg_data_to_db($name, $address, $contact, $area, $lat, $long, $room_price, $gender, $vacant_beds, $city, $price_from, $price_to, $type, $form_no, $new_amenities, $new_rules);
       
       redirect("admin/add_pg");
    }
}
?>