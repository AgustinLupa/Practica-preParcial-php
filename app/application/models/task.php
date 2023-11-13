<?php

 class task extends CI_Model{
    protected $table = 'task';

    public function getTasks(){
        $this->db->select('*');
        $this->db->from($this->table); 

        return $this->db->get()->result_array();
    }

    public function insertTask($data){
        $this->db->insert($this->table, $data);        
    }

    public function deleteTask($id){
        $this->db->where('id', $id);
        $this->db->delete($this->table);        
    }

    public function updateTask($data){
        $this->db->where('id', $data['id']);
        $this->db->update($this->table, $data);    
    }

 }

?>