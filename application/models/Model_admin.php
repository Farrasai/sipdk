<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Model_admin extends CI_Model
{

	//query untuk hitung record laporan

	public function hitungLaporan()
	{
		 $query = $this->db->get('user');
   		 if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
	}



	public function hitungAnggota()
	{
		 $query = $this->db->get('user');
   		 if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
	}


	public function hitungData()
	{
		 $query = $this->db->get('user');
   		 if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
	}


	public function hitungPengumuman()
	{
		 $query = $this->db->get('user');
   		 if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
	}


}