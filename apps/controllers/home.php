<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper(array('url', 'weburi', 'header', 'file', 'contentdate', 'stringurl', 'textlimiter', 'security'));
        $this->load->library('form_validation');
        $this->load->model(array('mhome', 'mpesan'));
        $this->is_logged_in();
    }

    function index() {
        $a = array();

        $a['html']['css'] = add_css('/bootstrap/css/bootstrap.min.css');
        $a['html']['css'] .= add_css('/bootstrap/css/font-awesome.min.css');
        
        $a['html']['css'] .= add_css('/bootstrap/css/bootstrap-datepicker3.min.css');
        $a['html']['css'] .= add_css('/bootstrap/css/ionicons.min.css');
        $a['html']['css'] .= add_css('/plugins/datepicker/datepicker3.css');
        $a['html']['css'] .= add_css('/dist/css/AdminLTE.min.css');
        $a['html']['css'] .= add_css('/dist/css/skins/_all-skins.min.css');
        $a['html']['css'] .= add_css('/plugins/jvectormap/jquery-jvectormap-1.2.2.css');

        $a['html']['js'] = add_js('/plugins/jQuery/jQuery-2.2.0.min.js');
        
        $a['html']['js'] .= add_js('/bootstrap/js/bootstrap.min.js');
        $a['html']['js'] .= add_js('/assets/bootstrap/js/jquery.dataTables.min.js');
        $a['html']['js'] .= add_js('/assets/bootstrap/js/dataTables.bootstrap.js');
        $a['html']['js'] .= add_js('/plugins/fastclick/fastclick.js');
        $a['html']['js'] .= add_js('/dist/js/app.min.js');
        $a['html']['js'] .= add_js('/plugins/sparkline/jquery.sparkline.min.js');
        $a['html']['js'] .= add_js('/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js');
        $a['html']['js'] .= add_js('/plugins/jvectormap/jquery-jvectormap-world-mill-en.js');
        $a['html']['js'] .= add_js('/plugins/slimScroll/jquery.slimscroll.min.js');
        
        $a['html']['js'] .= add_js('/plugins/chartjs/Chart.min.js');
        $a['html']['js'] .= add_js('/dist/js/demo.js');
         $a['html']['js'] .= add_js('/bootstrap/js/bootstrap-datepicker.min.js');

        //$id_group=$this->uri->segment(2);
        $a['member'] = $this->mpesan->td_get_member();
        $a['activity'] =$this->mhome->td_get_activity();
        $a['report'] =$this->mhome->td_get_blast_report();
        $a['template']['sidebarmenu'] = $this->load->view('template/vsidebarmenu', NULL, true);
        $a['template']['footer'] = $this->load->view('template/vfooter', NULL, true);
        $a['template']['header'] = $this->load->view('template/vheader', NULL, true);
        
        $this->load->view('home/vhome', $a, FALSE);
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
        redirect('login');
    }

}
