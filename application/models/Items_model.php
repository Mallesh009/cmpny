<?php 

class Items_model extends CI_Model
{		

	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
		
	}
	
	public function add_items($cmpnyname,$email,$website,$uploadedFile) 
	{
		
		$saveQmbill = array (
		'cmpny_name' => $cmpnyname, 'email' => $email, 'website' => $website,'logo' => $uploadedFile
		);
		$this->db->insert('cmpny_dtls', $saveQmbill) ;
		echo "ok";
	}
	
	
	public function update_items($cmpnyname,$email,$website,$uploadedFile,$updateid) 
	{
		$updateItems = array (
		'cmpny_name' => $cmpnyname, 'email' => $email, 'website' => $website,'logo' => $uploadedFile
		);
					$array = array( 'id' => $updateid );
					$this->db->where($array);
					$this->db->set($updateItems);
					$this->db->update('cmpny_dtls');
					echo "yes";
		
		
	}
	
	
	
	public function updateemp($fname,$lname,$cname,$eemail,$mnumber,$updateid1)
	{
		$updateItems = array (
		'fname' => $fname, 'lname' => $lname, 'cname' => $cname,'eemail' => $eemail,'mnumber'=>$mnumber
		);
					$array = array( 'id' => $updateid1 );
					$this->db->where($array);
					$this->db->set($updateItems);
					$this->db->update('employee');
					echo "Employee Data Updated Successfully";
		
		
		
	}
	public function deleteitem($id)
	{
		$this->db->query("delete from cmpny_dtls where id='".$id."'");
		
		echo "Company Deleted Successfully Thanks!";
		
		
	}
	public function viewdata()
	{
		
		$row=$this->db->query("select * from cmpny_dtls");
		$row1=$row->result();
		return $row1;
		
	}
	
	public function viewdataemp()
	{
		
		$row=$this->db->query("select * from employee");
		$row1=$row->result();
		return $row1;
		
	}
	

	public function editcompany($id)
	{
		$row=$this->db->query("select * from cmpny_dtls where id='".$id."'");
		$row1=$row->result();
		if(!empty($row1))
		{
			foreach($row1 as $row2)
			{
				$one=$row2->id;
				$two=$row2->cmpny_name;
				$three=$row2->email;
				$four=$row2->website;
				$five=$row2->logo;
				
			}
			
			
		}
		echo $one.'|'.$two.'|'.$three.'|'.$four.'|'.$five;
		
		
	}
	
	public function editcompany1($id)
	{
		$row=$this->db->query("select * from employee where id='".$id."'");
		$row1=$row->result();
		if(!empty($row1))
		{
			foreach($row1 as $row2)
			{
				$one=$row2->id;
				$two=$row2->fname;
				$three=$row2->lname;
				$four=$row2->cname;
				$five=$row2->eemail;
				$six=$row2->mnumber;
				
			}
			
			
		}
		echo $one.'|'.$two.'|'.$three.'|'.$four.'|'.$five.'|'.$six;
		
		
	}
	
	
	
	
	

	
	function addemp($fname,$lname,$cname,$eemail,$mnumber)
	{
		$saveQmbill = array (
		'fname' => $fname, 'lname' => $lname, 'cname' => $cname,'eemail' => $eemail,'mnumber'=>$mnumber
		);
		$this->db->insert('employee', $saveQmbill) ;
		echo "Data Inserted Successfully";
		
		
		
	}
	
	public function deleteemp($id)
	{
		$this->db->query("delete from employee where id='".$id."'");
		
		echo "Employee Deleted Successfully Thanks!";
		
		
	}
	
	
	
	
}
?>