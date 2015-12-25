<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Muser extends CI_Model {

	public function cek($u,$p)
	{
		$this->db->select('username, pass')
				 ->from('t_user')
				 ->where('username',$u)
				 ->where('pass',$p)
				 ->limit(1);
		return $query=$this->db->get();
		
	}
}

/* End of file Muser.php */
/* Location: ./application/models/Muser.php */