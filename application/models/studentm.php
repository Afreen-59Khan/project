<?php

class Studentm extends CI_Model
{
	public function modeldata()
	{
		$a=array(

			'name'=>$this->input->post('name'),
			'usn'=>$this->input->post('usn'),
			'dob'=>$this->input->post('dob'),
			'address'=>$this->input->post('add')
			);
			$query=$this->db->insert('stu_details',$a);

			if($query)
			
				return true;
			else

				return false;

	}
	//suppose i make some changes here and then save the project. after that i will push it to git. so ...
	//i saved the controller, now go to the ci folder
}