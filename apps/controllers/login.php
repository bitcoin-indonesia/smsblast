<?php



defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('header', 'url', 'security'));
        $this->load->library('form_validation');
        $this->load->model(array('mhome', 'mpesan', 'admin_log'));
    }

    function index() {
        $is_logged_in = $this->session->userdata('is_logged_in');
        if (!isset($is_logged_in) || $is_logged_in != true) {
            $a = array();
            $a['html']['css'] = add_css('/bootstrap/css/bootstrap.min.css');
            $a['html']['css'] .= add_css('/bootstrap/css/font-awesome.min.css');
            $a['html']['css'] .= add_css('/bootstrap/css/ionicons.min.css');
            $a['html']['css'] .= add_css('/plugins/datepicker/datepicker3.css');
            $a['html']['css'] .= add_css('/dist/css/AdminLTE.min.css');
            $a['html']['css'] .= add_css('/dist/css/skins/_all-skins.min.css');

            $a['html']['js'] = add_js('/plugins/jQuery/jQuery-2.2.0.min.js');
            $a['html']['js'] .= add_js('/bootstrap/js/bootstrap.min.js');
            $a['html']['js'] .= add_js('/plugins/iCheck/icheck.min.js');

            $this->form_validation->set_rules('nama_lengkap', 'Username', 'trim|required');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_ceklogin');
            if ($this->form_validation->run() == TRUE) {
                redirect('');
            }
            $this->load->view('home/login', $a, FALSE);
        } else {
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
            $a['html']['js'] .= add_js('/plugins/chartjs/Chart.min.js');
            $a['html']['js'] .= add_js('/bootstrap/js/bootstrap-datepicker.min.js');


            $a['member'] = $this->mpesan->td_get_member();
            $a['activity'] = $this->mhome->td_get_activity();
            $a['report'] = $this->mhome->td_get_blast_report();

            $a['template']['sidebarmenu'] = $this->load->view('template/vsidebarmenu', NULL, true);
            $a['template']['footer'] = $this->load->view('template/vfooter', NULL, true);
            $a['template']['header'] = $this->load->view('template/vheader', NULL, true);
           
            
            $this->load->view('home/vhome', $a, FALSE);
        }
    }

    function ceklogin() {
        $username = addslashes($this->input->post('nama_lengkap'));
        $password = addslashes(md5($this->input->post('password')));
        $data = $this->mhome->validate($username, $password);
        $jum = count($data);

        if ($jum == 0) {
            $this->form_validation->set_message('ceklogin', 'Username and password do not match');
            return FALSE;
        } else {
            $this->admin_log->log_login();
            return TRUE;
        }
    }

    function is_logged_in() {
        $is_logged_in = $this->session->userdata('is_logged_in');
        if (!isset($is_logged_in) || $is_logged_in != true) {
            redirect('');
        }
    }

    function logout() {
        $this->session->sess_destroy();
        header("Expires: " . gmdate("D, d M Y H:i:s", time()) . " GMT");
        header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
        header("Cache-Control: no-cache, must-revalidate");
        header("Pragma: no-cache");
        $this->admin_log->log_logout();
        redirect();
    }

}


