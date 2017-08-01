<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hari_raya extends CI_Controller {

	public function __construct()
	{
            parent::__construct();
            $this->load->helper(array('url','weburi','header','file','contentdate','stringurl','textlimiter','security'));
            $this->load->model(array('mpesan_hr','admin_log'));
            $this->load->library('form_validation');
            $this->is_logged_in();
	}
        
	public function index()
	{
            $t['list'] = $this->mpesan_hr->td_get_hari_raya();
            $t['member'] = $this->mpesan_hr->td_get_member();
            $this->load->view('pages/vhari_raya',$t);
	}
	
        public function ajax_list()
	{
		$list = $this->mpesan_hr->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $admin){
			$no++;
			$row = array();
			$row[] = $admin->isi_pesan;
                        $row[] = $admin->jenis_hari_raya;
                        $row[] = $admin->tanggal_hari_raya;
			$row[] = '<a data-toggle="tooltip" class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_pesan('."'".$admin->id_pesan_hari_raya."'".')"><i class="glyphicon glyphicon-pencil"></i></a>
				  <a data-toggle="tooltip" class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_person('."'".$admin->id_pesan_hari_raya."'".')"><i class="glyphicon glyphicon-trash"></i></a>';
			$data[] = $row;}
		$output = array(
                "draw" => $_POST['draw'],
                "recordsTotal" => $this->mpesan_hr->count_all(),
                "recordsFiltered" => $this->mpesan_hr->count_filtered(),
                "data" => $data,);
		echo json_encode($output);
	}
	public function ajax_edit($id)
	{
            $data = $this->mpesan_hr->get_by_id($id);
            $data->id_pesan_hari_raya =  $data->id_pesan_hari_raya;
            echo json_encode($data);
	}
	public function ajax_add()
	{
            $this->_validate();
            $data = array(
                'isi_pesan' => addslashes($this->input->post('isi_pesan')),
                'jenis_hari_raya' => $this->input->post('jenis_hari_raya'),
                'tanggal_hari_raya' =>  $this->input->post('tanggal_hari_raya'),
            );
            $this->mpesan_hr->save($data);
            $this->admin_log->log_add_hari_raya();
            echo json_encode(array("status" => TRUE));
	}
        
	public function ajax_update()
	{
            $this->_validate();
            $data = array(
                'isi_pesan' => addslashes($this->input->post('isi_pesan')),
                'tanggal_hari_raya' =>  $this->input->post('tanggal_hari_raya'),
                'jenis_hari_raya' => $this->input->post('jenis_hari_raya'),
            );
            $this->mpesan_hr->update(array('id_pesan_hari_raya' => $this->input->post('id_pesan_hari_raya')), $data);
            $this->admin_log->log_edit_hari_raya();
            echo json_encode(array("status" => TRUE));
	}
        
	public function ajax_delete($id)
	{
            $this->mpesan_hr->delete_by_id($id);
            $this->admin_log->log_delete_hari_raya();
            echo json_encode(array("status" => TRUE));
	}
        
	private function _validate()
	{
            $data = array();
            $data['error_string'] = array();
            $data['inputerror'] = array();
            $data['status'] = TRUE;

            
            if($this->input->post('isi_pesan') == '')
            {
                    $data['inputerror'][] = 'isi_pesan';
                    $data['error_string'][] = '';
                    $data['status'] = FALSE;
            }
             
             if($this->input->post('jenis_hari_raya') == '')
            {
                    $data['inputerror'][] = 'jenis_hari_raya';
                    $data['error_string'][] = 'Jenis Hari Raya is required';
                    $data['status'] = FALSE;
            }
             if($this->input->post('tanggal_hari_raya') == '')
            {
                    $data['inputerror'][] = 'tanggal_hari_raya';
                    $data['error_string'][] = 'Tanggal Hari Raya is required';
                    $data['status'] = FALSE;
            }
            if($data['status'] === FALSE)
            {
                    echo json_encode($data);
                    exit();
            }
	} 
    function is_logged_in(){
        $is_logged_in = $this->session->userdata('is_logged_in');
        if (!isset($is_logged_in) || $is_logged_in != true) {
            redirect('');
        }
    }
}