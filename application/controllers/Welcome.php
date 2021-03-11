<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 public function __construct() {
            parent::__construct();
			//$this->check_isvalidated();
			$this->load->helper('url');
			$this->load->model('Items_model'); // load model
        
			
        }
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function add_items()
	{
		$updateid=$this->input->post('updateid'); 
		if($updateid==0)
		{
			$uploadedFile = '';
		if(!empty($_FILES["file"]["type"])){
        $fileName =round(microtime(true)).$_FILES['file']['name'];
        $valid_extensions = array("jpeg", "jpg", "png");
        $temporary = explode(".", $_FILES["file"]["name"]);
        $file_extension = end($temporary);
        $sourcePath = $_FILES['file']['tmp_name'];
        $targetPath = "images/Logo/".$fileName;
        if(move_uploaded_file($sourcePath,$targetPath)){
               $uploadedFile = $fileName;
            }
        
    }
			$cmpnyname=$this->input->post('cmpnyname'); 
		    $email=$this->input->post('email'); 
		    $website=$this->input->post('website'); 
			$this->Items_model->add_items($cmpnyname,$email,$website,$uploadedFile);
		}
		else
		{
			$logos=$this->input->post('logos'); 
			$uploadedFile = '';
		if(!empty($_FILES["file"]["type"])){
        $fileName =round(microtime(true)).$_FILES['file']['name'];
        $valid_extensions = array("jpeg", "jpg", "png");
        $temporary = explode(".", $_FILES["file"]["name"]);
        $file_extension = end($temporary);
        $sourcePath = $_FILES['file']['tmp_name'];
        $targetPath = "images/Logo/".$fileName;
        if(move_uploaded_file($sourcePath,$targetPath)){
               $uploadedFile = $fileName;
            }
			if($uploadedFile=="")
			{
				$$uploadedFile=$logos;
			}
			else
			{
				$uploadedFile;
			}
			
    }
			$cmpnyname=$this->input->post('cmpnyname'); 
		    $email=$this->input->post('email'); 
		    $website=$this->input->post('website'); 
			$website=$this->input->post('website'); 
			$this->Items_model->update_items($cmpnyname,$email,$website,$uploadedFile,$updateid);
			
			
			
		}
		
	}
	public function update()
	{
			$itname     = $this->input->post("itname") ;
			$qty     = $this->input->post("qty") ;
			$status     = $this->input->post("status") ;
			$dates     = $this->input->post("dates") ;
			$id     = $this->input->post("id") ;
			$this->Items_model->update($itname,$qty,$status,$dates,$id);
		
	}
	public function deleteitem()
	{
			
			$id     = $this->input->post("id") ;
			$this->Items_model->deleteitem($id);
		
	}
public function viewdata()
{
	$data['cpmdtls']=$this->Items_model->viewdata();
	$this->load->view('viewcompany',$data);
	
}

public function viewdataemp()
{
	$data['cpmdtls']=$this->Items_model->viewdataemp();
	$this->load->view('viewemployee',$data);
	
}



public function editcompany()
	{
			
			$id     = $this->input->post("id") ;
			$this->Items_model->editcompany($id);
		
	}
	
public function 	editcompany1()
	{
			
			$id     = $this->input->post("id") ;
			$this->Items_model->editcompany1($id);
		
	}	
	
	

	public function addemp()
	{
		
		$fname     = $this->input->post("fname") ;
		$lname     = $this->input->post("lname") ;
		$cname     = $this->input->post("cname") ;
		$eemail     = $this->input->post("eemail") ;
		$mnumber     = $this->input->post("mnumber") ;
		$this->Items_model->addemp($fname,$lname,$cname,$eemail,$mnumber);
		
		
	}
	
	
	public function updateemp()
	{
		
		$fname     = $this->input->post("fname") ;
		$lname     = $this->input->post("lname") ;
		$cname     = $this->input->post("cname") ;
		$eemail     = $this->input->post("eemail") ;
		$mnumber     = $this->input->post("mnumber") ;
		$updateid1     = $this->input->post("updateid1") ;
		$this->Items_model->updateemp($fname,$lname,$cname,$eemail,$mnumber,$updateid1);
		
		
	}
	

function deleteemp()
{
	$id     = $this->input->post("id") ;
			$this->Items_model->deleteemp($id);
	
	
}
	
	
	
	
}
