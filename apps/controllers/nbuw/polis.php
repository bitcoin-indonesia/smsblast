<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Polis extends CI_Controller {

	public function __construct()
	{
            parent::__construct();
            $this->load->helper(array('url','weburi','header','file','contentdate','stringurl','textlimiter','security'));
            $this->load->model(array('mpesan','admin_log'));
            $this->load->library('form_validation');
            $this->is_logged_in();
	}
        
	public function index()
	{
                $a = array();
                $a['html']['css'] = add_css('/bootstrap/css/bootstrap.css');
                $a['html']['css'] .= add_css('/bootstrap/css/font-awesome.min.css');
                $a['html']['css'] .= add_css('/bootstrap/css/ionicons.min.css');
                $a['html']['css'] .= add_css('/dist/css/AdminLTE.min.css');
                $a['html']['css'] .= add_css('/dist/css/skins/_all-skins.min.css');
                $a['html']['css'] .= add_css('/plugins/datatables/dataTables.bootstrap.css');
                $a['html']['css'] .= add_css('/bootstrap/css/bootstrap-datepicker3.min.css');

                $a['html']['js'] = add_js('/plugins/jQuery/jQuery-2.2.0.min.js');
                $a['html']['js'] .= add_js('/bootstrap/js/jquery-ui.min.js');
                $a['html']['js'] .= add_js('/bootstrap/js/bootstrap.min.js');
                $a['html']['js'] .= add_js('/plugins/datatables/jquery.dataTables.min.js');
                $a['html']['js'] .= add_js('/plugins/datatables/dataTables.bootstrap.min.js');
                $a['html']['js'] .= add_js('/plugins/slimScroll/jquery.slimscroll.min.js');
                $a['html']['js'] .= add_js('/plugins/fastclick/fastclick.js');
                $a['html']['js'] .= add_js('/dist/js/app.min.js');
                $a['html']['js'] .= add_js('/dist/js/demo.js');
                $a['html']['js'] .= add_js('/bootstrap/js/bootstrap-confirm-delete.js');
                $a['html']['js'] .= add_js('/bootstrap/js/test.js');
                $a['html']['js'] .= add_js('/bootstrap/js/bootstrap-datepicker.min.js');
                
                $a['template']['sidebarmenu'] = $this->load->view('template/vsidebarmenu',$a,true);
                $a['template']['footer'] = $this->load->view('template/vfooter',NULL,true);
                $a['template']['header'] = $this->load->view('template/vheader',NULL,true);
                //$this->load->view('pages/vmodul',$a,FALSE);
                $t['polis'] = $this->mpesan->td_get_polis();
                $t['member'] = $this->mpesan->td_get_member();
                
                $a['admin']['datatable']= $this->load->view('nbuw/polis',$t,true);
                
                $this->load->view('pages/vpesan',$a,FALSE);
             
	}
        
        function polis()
        { 
                $t['polis'] = $this->mpesan->td_get_polis();
                $t['member'] = $this->mpesan->td_get_member();
                $this->load->view('pages/vpolis',$t);
        }


        public function ajax_list()
	{
		$list = $this->mpesan->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $admin){
			$no++;
			$row = array();
			$row[] = $admin->nama_area;
                        $row[] = $admin->nama_cabang;
			$row[] = '<a data-toggle="tooltip" class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_person('."'".$admin->id_area."'".')"><i class="glyphicon glyphicon-pencil"></i></a>
				  <a data-toggle="tooltip" class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_person('."'".$admin->id_area."'".')"><i class="glyphicon glyphicon-trash"></i></a>';
			$data[] = $row;}
		$output = array(
                "draw" => $_POST['draw'],
                "recordsTotal" => $this->mpesan->count_all(),
                "recordsFiltered" => $this->mpesan->count_filtered(),
                "data" => $data,);
		echo json_encode($output);
	}
	public function ajax_edit($id)
	{
            $data = $this->mpesan->get_by_id($id);
            $data->id_pesan =  $data->id_pesan;
            echo json_encode($data);
	}
	public function ajax_add()
	{
            $this->_validate();
            $data = array(
                'isi_pesan' => addslashes($this->input->post('isi_pesan')),
                'type' => 'nbuw',
                'sub_type' => 'polis',
            );
            $this->mpesan->save($data);
            $this->admin_log->log_add_polis();
            echo json_encode(array("status" => TRUE));
	}
        
	public function ajax_update()
	{
            $this->_validate();
            $data = array(
                'isi_pesan' => addslashes($this->input->post('isi_pesan')),
                'type' => 'nbuw',
                'sub_type' => 'polis',
            );
            $this->mpesan->update(array('id_pesan' => $this->input->post('id_pesan')), $data);
            $this->admin_log->log_edit_polis();
            echo json_encode(array("status" => TRUE));
	}
        
	public function ajax_delete($id)
	{
            $this->mpesan->delete_by_id($id);
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