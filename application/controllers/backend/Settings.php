<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {

    public function __construct(){
        parent::__construct();

        $this->load->model('Settings_model','st_md');

    }

    public function index()
    {
        $data['title'] = 'Settings List';

        $settings = new Settings_model();

        $data['lists'] = $settings->select_all();

        $this->load->admin('settings/index',$data);
    }

    public function create(){

        if($this->input->post()){

            $request_data = [
                'some' => $this->security->xss_clean($this->input->post('some')),
                'any' => $this->security->xss_clean($this->input->post('any')),
                'status' => $this->security->xss_clean($this->input->post('status'))
            ];
            $insert_id = $this->st_md->insert($request_data);

            if($insert_id > 0){
                $this->session->set_flashdata('success_message','Məlumat uğurla əlavə edildi');

                redirect('backend/settings');
            }

        }

        $data['title'] = 'Settings List';

        $this->load->admin('settings/create',$data);

    }

    public function edit($id){

        if($this->input->post()){
            $id = $this->security->xss_clean($id);

            $request_data = [
                'some' => $this->security->xss_clean($this->input->post('some')),
                'any' => $this->security->xss_clean($this->input->post('any')),
                'status' => $this->security->xss_clean($this->input->post('status'))
            ];

            $affected_rows = $this->st_md->update($id,$request_data);
            redirect('backend/settings');
            if($affected_rows > 0){
                $this->session->set_flashdata('success_message','Məlumat uğurla dəyişdirildi');

                redirect('backend/settings/edit/'.$id);
            }

        }

        $item = $this->st_md->selectDataById($id);

        if(empty($item)){
            $this->session->set_flashdata('error_message','Bu məlumat tapılmadı');

            redirect('backend/settings');
        }

        $data['item'] = $item;

        $data['title'] = 'Settings Edit';

        $this->load->admin('settings/edit',$data);


    }
    public function delete($id) {
//        $this->load->model('Admins_model');
        $this->st_md->delete($id);
        redirect('backend/settings');
    }

}


