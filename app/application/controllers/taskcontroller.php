<?php
    class taskcontroller extends CI_Controller{

        function __construct(){
            parent::__construct();
            $this->load->model('task');
        }
        

        public function index(){
            $data['tasks'] = $this->task->getTasks();
            $this->load->view('task/taskview', $data);
        }

        public function insert_task(){
        
            $data['title'] = $this->input->post('title');
            $data['description'] = $this->input->post('desc');
            $this->task->insertTask($data);
            
            redirect('/');
        }

        public function delete_task(){
            $id = $this->input->get('id');
            $this->task->deleteTask($id);

            redirect('/');
        }

    }
?>