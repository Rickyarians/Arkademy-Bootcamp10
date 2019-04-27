<?php 

class model_candidates extends CI_Model
{

    public function getCandidates() {

        $this->db->select('*');
        $this->db->from('candidates');

        $hasil = $this->db->get();

        return $hasil->result_array();
    }

    public function getCandidatesDetail($id) 
    {
        $this->db->select('*');
        $this->db->from('candidates');
        $this->db->where('id', $id);

        $hasil = $this->db->get();

        return $hasil->result_array();
    }

    public function update($data, $id)
	{
		if($data && $id) {
			$this->db->where('id', $id);
			$update = $this->db->update('candidates', $data);
			return ($update == true) ? true : false;
		}
	}
}