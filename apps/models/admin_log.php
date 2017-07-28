<?php
 
class Admin_log extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
    }
    
    function log_login() {
//        $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
//        $location = file_get_contents('http://freegeoip.net/json/'.$_SERVER['REMOTE_ADDR']);
//        $json = json_decode($location, true);
//        if($json['region_name'] != "")
//        {$region =$json['region_name'];}
//        else {$region ="Indonesia";}
        $this->load->library('user_agent');
        if ($this->agent->is_browser())
        {
                $agent = $this->agent->browser().' '.$this->agent->version();
        }
        elseif ($this->agent->is_robot())
        {
                $agent = $this->agent->robot();
        }
        elseif ($this->agent->is_mobile())
        {
                $agent = $this->agent->mobile();
        }
        else
        {
                $agent = 'Unidentified User Agent';
        }
        $platform= $this->agent->platform();
        $sql = "INSERT INTO td_admin_log(keterangan,nama_lengkap,ip_address,browser,platform) VALUES ('Login','".$this->session->userdata['nama_lengkap']."','" . $this->input->ip_address() . "','$agent','$platform.')";
        $this->db->query($sql);
        return TRUE;
    }
    
     function log_logout() {
//        $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
//        $location = file_get_contents('http://freegeoip.net/json/'.$_SERVER['REMOTE_ADDR']);
//        $json = json_decode($location, true);
//        if($json['region_name'] != "")
//        {$region =$json['region_name'];}
//        else {$region ="Indonesia";}
        $this->load->library('user_agent');
        if ($this->agent->is_browser())
        {
                $agent = $this->agent->browser().' '.$this->agent->version();
        }
        elseif ($this->agent->is_robot())
        {
                $agent = $this->agent->robot();
        }
        elseif ($this->agent->is_mobile())
        {
                $agent = $this->agent->mobile();
        }
        else
        {
                $agent = 'Unidentified User Agent';
        }
        $platform= $this->agent->platform();
        $sql = "INSERT INTO td_admin_log(keterangan,nama_lengkap,ip_address,browser,platform) VALUES ('Logout','".$this->session->userdata['nama_lengkap']."','" . $this->input->ip_address() . "','$agent','$platform.')";
        $this->db->query($sql);
        return TRUE;
    }
    
    function log_add_spaj() {
//        $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
//        $location = file_get_contents('http://freegeoip.net/json/'.$_SERVER['REMOTE_ADDR']);
//        $json = json_decode($location, true);
//        if($json['region_name'] != "")
//        {$region =$json['region_name'];}
//        else {$region ="Indonesia";}
        $this->load->library('user_agent');
        if ($this->agent->is_browser())
        {
                $agent = $this->agent->browser().' '.$this->agent->version();
        }
        elseif ($this->agent->is_robot())
        {
                $agent = $this->agent->robot();
        }
        elseif ($this->agent->is_mobile())
        {
                $agent = $this->agent->mobile();
        }
        else
        {
                $agent = 'Unidentified User Agent';
        }
        $platform= $this->agent->platform();
        $sql = "INSERT INTO td_admin_log(keterangan,nama_lengkap,ip_address,browser,platform) VALUES ('Add SPAJ SMS Blast','".$this->session->userdata['nama_lengkap']."','" . $this->input->ip_address() . "','$agent','$platform.')";
        $this->db->query($sql);
        return TRUE;
    }
    function log_edit_spaj() {
//        $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
//        $location = file_get_contents('http://freegeoip.net/json/'.$_SERVER['REMOTE_ADDR']);
//        $json = json_decode($location, true);
//        if($json['region_name'] != "")
//        {$region =$json['region_name'];}
//        else {$region ="Indonesia";}
        $this->load->library('user_agent');
        if ($this->agent->is_browser())
        {
                $agent = $this->agent->browser().' '.$this->agent->version();
        }
        elseif ($this->agent->is_robot())
        {
                $agent = $this->agent->robot();
        }
        elseif ($this->agent->is_mobile())
        {
                $agent = $this->agent->mobile();
        }
        else
        {
            $agent = 'Unidentified User Agent';
        }
        $platform= $this->agent->platform();
        $sql = "INSERT INTO td_admin_log(keterangan,nama_lengkap,ip_address,browser,platform) VALUES ('Edit SPAJ SMS Blast','".$this->session->userdata['nama_lengkap']."','" . $this->input->ip_address() . "','$agent','$platform.')";
        $this->db->query($sql);
        return TRUE;
    }
    
    function log_add_polis() {
//        $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
//        $location = file_get_contents('http://freegeoip.net/json/'.$_SERVER['REMOTE_ADDR']);
//        $json = json_decode($location, true);
//        if($json['region_name'] != "")
//        {$region =$json['region_name'];}
//        else {$region ="Indonesia";}
        $this->load->library('user_agent');
        if ($this->agent->is_browser())
        {
                $agent = $this->agent->browser().' '.$this->agent->version();
        }
        elseif ($this->agent->is_robot())
        {
                $agent = $this->agent->robot();
        }
        elseif ($this->agent->is_mobile())
        {
                $agent = $this->agent->mobile();
        }
        else
        {
                $agent = 'Unidentified User Agent';
        }
        $platform= $this->agent->platform();
        $sql = "INSERT INTO td_admin_log(keterangan,nama_lengkap,ip_address,browser,platform) VALUES ('Add POLIS SMS Blast','".$this->session->userdata['nama_lengkap']."','" . $this->input->ip_address() . "','$agent','$platform.')";
        $this->db->query($sql);
        return TRUE;
    }
    function log_edit_polis() {
//        $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
//        $location = file_get_contents('http://freegeoip.net/json/'.$_SERVER['REMOTE_ADDR']);
//        $json = json_decode($location, true);
//        if($json['region_name'] != "")
//        {$region =$json['region_name'];}
//        else {$region ="Indonesia";}
        $this->load->library('user_agent');
        if ($this->agent->is_browser())
        {
                $agent = $this->agent->browser().' '.$this->agent->version();
        }
        elseif ($this->agent->is_robot())
        {
                $agent = $this->agent->robot();
        }
        elseif ($this->agent->is_mobile())
        {
                $agent = $this->agent->mobile();
        }
        else
        {
            $agent = 'Unidentified User Agent';
        }
        $platform= $this->agent->platform();
        $sql = "INSERT INTO td_admin_log(keterangan,nama_lengkap,ip_address,browser,platform) VALUES ('Edit POLIS SMS Blast','".$this->session->userdata['nama_lengkap']."','" . $this->input->ip_address() . "','$agent','$platform.')";
        $this->db->query($sql);
        return TRUE;
    }
    
     function log_add_billing_payment() {
//        $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
//        $location = file_get_contents('http://freegeoip.net/json/'.$_SERVER['REMOTE_ADDR']);
//        $json = json_decode($location, true);
//        if($json['region_name'] != "")
//        {$region =$json['region_name'];}
//        else {$region ="Indonesia";}
        $this->load->library('user_agent');
        if ($this->agent->is_browser())
        {
                $agent = $this->agent->browser().' '.$this->agent->version();
        }
        elseif ($this->agent->is_robot())
        {
                $agent = $this->agent->robot();
        }
        elseif ($this->agent->is_mobile())
        {
                $agent = $this->agent->mobile();
        }
        else
        {
                $agent = 'Unidentified User Agent';
        }
        $platform= $this->agent->platform();
        $sql = "INSERT INTO td_admin_log(keterangan,nama_lengkap,ip_address,browser,platform) VALUES ('Add Billing Payment SMS Blast','".$this->session->userdata['nama_lengkap']."','" . $this->input->ip_address() . "','$agent','$platform.')";
        $this->db->query($sql);
        return TRUE;
    }
    function log_edit_billing_payment() {
//        $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
//        $location = file_get_contents('http://freegeoip.net/json/'.$_SERVER['REMOTE_ADDR']);
//        $json = json_decode($location, true);
//        if($json['region_name'] != "")
//        {$region =$json['region_name'];}
//        else {$region ="Indonesia";}
        $this->load->library('user_agent');
        if ($this->agent->is_browser())
        {
                $agent = $this->agent->browser().' '.$this->agent->version();
        }
        elseif ($this->agent->is_robot())
        {
                $agent = $this->agent->robot();
        }
        elseif ($this->agent->is_mobile())
        {
                $agent = $this->agent->mobile();
        }
        else
        {
            $agent = 'Unidentified User Agent';
        }
        $platform= $this->agent->platform();
        $sql = "INSERT INTO td_admin_log(keterangan,nama_lengkap,ip_address,browser,platform) VALUES ('Edit Billing Payment SMS Blast','".$this->session->userdata['nama_lengkap']."','" . $this->input->ip_address() . "','$agent','$platform.')";
        $this->db->query($sql);
        return TRUE;
    }
    
    function log_add_claim_payment() {
//        $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
//        $location = file_get_contents('http://freegeoip.net/json/'.$_SERVER['REMOTE_ADDR']);
//        $json = json_decode($location, true);
//        if($json['region_name'] != "")
//        {$region =$json['region_name'];}
//        else {$region ="Indonesia";}
        $this->load->library('user_agent');
        if ($this->agent->is_browser())
        {
                $agent = $this->agent->browser().' '.$this->agent->version();
        }
        elseif ($this->agent->is_robot())
        {
                $agent = $this->agent->robot();
        }
        elseif ($this->agent->is_mobile())
        {
                $agent = $this->agent->mobile();
        }
        else
        {
                $agent = 'Unidentified User Agent';
        }
        $platform= $this->agent->platform();
        $sql = "INSERT INTO td_admin_log(keterangan,nama_lengkap,ip_address,browser,platform) VALUES ('Add Claim Payment SMS Blast','".$this->session->userdata['nama_lengkap']."','" . $this->input->ip_address() . "','$agent','$platform.')";
        $this->db->query($sql);
        return TRUE;
    }
    function log_edit_claim_payment() {
//        $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
//        $location = file_get_contents('http://freegeoip.net/json/'.$_SERVER['REMOTE_ADDR']);
//        $json = json_decode($location, true);
//        if($json['region_name'] != "")
//        {$region =$json['region_name'];}
//        else {$region ="Indonesia";}
        $this->load->library('user_agent');
        if ($this->agent->is_browser())
        {
                $agent = $this->agent->browser().' '.$this->agent->version();
        }
        elseif ($this->agent->is_robot())
        {
                $agent = $this->agent->robot();
        }
        elseif ($this->agent->is_mobile())
        {
                $agent = $this->agent->mobile();
        }
        else
        {
            $agent = 'Unidentified User Agent';
        }
        $platform= $this->agent->platform();
        $sql = "INSERT INTO td_admin_log(keterangan,nama_lengkap,ip_address,browser,platform) VALUES ('Edit Claim Payment SMS Blast','".$this->session->userdata['nama_lengkap']."','" . $this->input->ip_address() . "','$agent','$platform.')";
        $this->db->query($sql);
        return TRUE;
    }
    
    function log_add_claim_pending() {
//        $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
//        $location = file_get_contents('http://freegeoip.net/json/'.$_SERVER['REMOTE_ADDR']);
//        $json = json_decode($location, true);
//        if($json['region_name'] != "")
//        {$region =$json['region_name'];}
//        else {$region ="Indonesia";}
        $this->load->library('user_agent');
        if ($this->agent->is_browser())
        {
                $agent = $this->agent->browser().' '.$this->agent->version();
        }
        elseif ($this->agent->is_robot())
        {
                $agent = $this->agent->robot();
        }
        elseif ($this->agent->is_mobile())
        {
                $agent = $this->agent->mobile();
        }
        else
        {
                $agent = 'Unidentified User Agent';
        }
        $platform= $this->agent->platform();
        $sql = "INSERT INTO td_admin_log(keterangan,nama_lengkap,ip_address,browser,platform) VALUES ('Add Claim Pending SMS Blast','".$this->session->userdata['nama_lengkap']."','" . $this->input->ip_address() . "','$agent','$platform.')";
        $this->db->query($sql);
        return TRUE;
    }
    function log_edit_claim_pending() {
//        $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
//        $location = file_get_contents('http://freegeoip.net/json/'.$_SERVER['REMOTE_ADDR']);
//        $json = json_decode($location, true);
//        if($json['region_name'] != "")
//        {$region =$json['region_name'];}
//        else {$region ="Indonesia";}
        $this->load->library('user_agent');
        if ($this->agent->is_browser())
        {
                $agent = $this->agent->browser().' '.$this->agent->version();
        }
        elseif ($this->agent->is_robot())
        {
                $agent = $this->agent->robot();
        }
        elseif ($this->agent->is_mobile())
        {
                $agent = $this->agent->mobile();
        }
        else
        {
            $agent = 'Unidentified User Agent';
        }
        $platform= $this->agent->platform();
        $sql = "INSERT INTO td_admin_log(keterangan,nama_lengkap,ip_address,browser,platform) VALUES ('Edit Claim Pending SMS Blast','".$this->session->userdata['nama_lengkap']."','" . $this->input->ip_address() . "','$agent','$platform.')";
        $this->db->query($sql);
        return TRUE;
    }
    function log_add_ultah() {
//        $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
//        $location = file_get_contents('http://freegeoip.net/json/'.$_SERVER['REMOTE_ADDR']);
//        $json = json_decode($location, true);
//        if($json['region_name'] != "")
//        {$region =$json['region_name'];}
//        else {$region ="Indonesia";}
        $this->load->library('user_agent');
        if ($this->agent->is_browser())
        {
                $agent = $this->agent->browser().' '.$this->agent->version();
        }
        elseif ($this->agent->is_robot())
        {
                $agent = $this->agent->robot();
        }
        elseif ($this->agent->is_mobile())
        {
                $agent = $this->agent->mobile();
        }
        else
        {
                $agent = 'Unidentified User Agent';
        }
        $platform= $this->agent->platform();
        $sql = "INSERT INTO td_admin_log(keterangan,nama_lengkap,ip_address,browser,platform) VALUES ('Add ULTAH SMS Blast','".$this->session->userdata['nama_lengkap']."','" . $this->input->ip_address() . "','$agent','$platform.')";
        $this->db->query($sql);
        return TRUE;
    }
    function log_edit_ultah() {
//        $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
//        $location = file_get_contents('http://freegeoip.net/json/'.$_SERVER['REMOTE_ADDR']);
//        $json = json_decode($location, true);
//        if($json['region_name'] != "")
//        {$region =$json['region_name'];}
//        else {$region ="Indonesia";}
        $this->load->library('user_agent');
        if ($this->agent->is_browser())
        {
                $agent = $this->agent->browser().' '.$this->agent->version();
        }
        elseif ($this->agent->is_robot())
        {
                $agent = $this->agent->robot();
        }
        elseif ($this->agent->is_mobile())
        {
                $agent = $this->agent->mobile();
        }
        else
        {
            $agent = 'Unidentified User Agent';
        }
        $platform= $this->agent->platform();
        $sql = "INSERT INTO td_admin_log(keterangan,nama_lengkap,ip_address,browser,platform) VALUES ('Edit ULTAH SMS Blast','".$this->session->userdata['nama_lengkap']."','" . $this->input->ip_address() . "','$agent','$platform.')";
        $this->db->query($sql);
        return TRUE;
    }
    
    
    function log_add_mature() {
//        $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
//        $location = file_get_contents('http://freegeoip.net/json/'.$_SERVER['REMOTE_ADDR']);
//        $json = json_decode($location, true);
//        if($json['region_name'] != "")
//        {$region =$json['region_name'];}
//        else {$region ="Indonesia";}
        $this->load->library('user_agent');
        if ($this->agent->is_browser())
        {
                $agent = $this->agent->browser().' '.$this->agent->version();
        }
        elseif ($this->agent->is_robot())
        {
                $agent = $this->agent->robot();
        }
        elseif ($this->agent->is_mobile())
        {
                $agent = $this->agent->mobile();
        }
        else
        {
                $agent = 'Unidentified User Agent';
        }
        $platform= $this->agent->platform();
        $sql = "INSERT INTO td_admin_log(keterangan,nama_lengkap,ip_address,browser,platform) VALUES ('Add MATURE SMS Blast','".$this->session->userdata['nama_lengkap']."','" . $this->input->ip_address() . "','$agent','$platform.')";
        $this->db->query($sql);
        return TRUE;
    }
    function log_edit_mature() {
//        $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
//        $location = file_get_contents('http://freegeoip.net/json/'.$_SERVER['REMOTE_ADDR']);
//        $json = json_decode($location, true);
//        if($json['region_name'] != "")
//        {$region =$json['region_name'];}
//        else {$region ="Indonesia";}
        $this->load->library('user_agent');
        if ($this->agent->is_browser())
        {
                $agent = $this->agent->browser().' '.$this->agent->version();
        }
        elseif ($this->agent->is_robot())
        {
                $agent = $this->agent->robot();
        }
        elseif ($this->agent->is_mobile())
        {
                $agent = $this->agent->mobile();
        }
        else
        {
            $agent = 'Unidentified User Agent';
        }
        $platform= $this->agent->platform();
        $sql = "INSERT INTO td_admin_log(keterangan,nama_lengkap,ip_address,browser,platform) VALUES ('Edit MATURE SMS Blast','".$this->session->userdata['nama_lengkap']."','" . $this->input->ip_address() . "','$agent','$platform.')";
        $this->db->query($sql);
        return TRUE;
    }
    
    function log_add_ahli_waris() {
//        $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
//        $location = file_get_contents('http://freegeoip.net/json/'.$_SERVER['REMOTE_ADDR']);
//        $json = json_decode($location, true);
//        if($json['region_name'] != "")
//        {$region =$json['region_name'];}
//        else {$region ="Indonesia";}
        $this->load->library('user_agent');
        if ($this->agent->is_browser())
        {
                $agent = $this->agent->browser().' '.$this->agent->version();
        }
        elseif ($this->agent->is_robot())
        {
                $agent = $this->agent->robot();
        }
        elseif ($this->agent->is_mobile())
        {
                $agent = $this->agent->mobile();
        }
        else
        {
                $agent = 'Unidentified User Agent';
        }
        $platform= $this->agent->platform();
        $sql = "INSERT INTO td_admin_log(keterangan,nama_lengkap,ip_address,browser,platform) VALUES ('Add AHLI WARIS SMS Blast','".$this->session->userdata['nama_lengkap']."','" . $this->input->ip_address() . "','$agent','$platform.')";
        $this->db->query($sql);
        return TRUE;
    }
    function log_edit_ahli_waris() {
//        $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
//        $location = file_get_contents('http://freegeoip.net/json/'.$_SERVER['REMOTE_ADDR']);
//        $json = json_decode($location, true);
//        if($json['region_name'] != "")
//        {$region =$json['region_name'];}
//        else {$region ="Indonesia";}
        $this->load->library('user_agent');
        if ($this->agent->is_browser())
        {
                $agent = $this->agent->browser().' '.$this->agent->version();
        }
        elseif ($this->agent->is_robot())
        {
                $agent = $this->agent->robot();
        }
        elseif ($this->agent->is_mobile())
        {
                $agent = $this->agent->mobile();
        }
        else
        {
            $agent = 'Unidentified User Agent';
        }
        $platform= $this->agent->platform();
        $sql = "INSERT INTO td_admin_log(keterangan,nama_lengkap,ip_address,browser,platform) VALUES ('Edit AHLI WARIS SMS Blast','".$this->session->userdata['nama_lengkap']."','" . $this->input->ip_address() . "','$agent','$platform.')";
        $this->db->query($sql);
        return TRUE;
    }
    
    function log_add_alamat() {
//        $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
//        $location = file_get_contents('http://freegeoip.net/json/'.$_SERVER['REMOTE_ADDR']);
//        $json = json_decode($location, true);
//        if($json['region_name'] != "")
//        {$region =$json['region_name'];}
//        else {$region ="Indonesia";}
        $this->load->library('user_agent');
        if ($this->agent->is_browser())
        {
                $agent = $this->agent->browser().' '.$this->agent->version();
        }
        elseif ($this->agent->is_robot())
        {
                $agent = $this->agent->robot();
        }
        elseif ($this->agent->is_mobile())
        {
                $agent = $this->agent->mobile();
        }
        else
        {
                $agent = 'Unidentified User Agent';
        }
        $platform= $this->agent->platform();
        $sql = "INSERT INTO td_admin_log(keterangan,nama_lengkap,ip_address,browser,platform) VALUES ('Add ALAMAT SMS Blast','".$this->session->userdata['nama_lengkap']."','" . $this->input->ip_address() . "','$agent','$platform.')";
        $this->db->query($sql);
        return TRUE;
    }
    function log_edit_alamat() {
//        $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
//        $location = file_get_contents('http://freegeoip.net/json/'.$_SERVER['REMOTE_ADDR']);
//        $json = json_decode($location, true);
//        if($json['region_name'] != "")
//        {$region =$json['region_name'];}
//        else {$region ="Indonesia";}
        $this->load->library('user_agent');
        if ($this->agent->is_browser())
        {
                $agent = $this->agent->browser().' '.$this->agent->version();
        }
        elseif ($this->agent->is_robot())
        {
                $agent = $this->agent->robot();
        }
        elseif ($this->agent->is_mobile())
        {
                $agent = $this->agent->mobile();
        }
        else
        {
            $agent = 'Unidentified User Agent';
        }
        $platform= $this->agent->platform();
        $sql = "INSERT INTO td_admin_log(keterangan,nama_lengkap,ip_address,browser,platform) VALUES ('Edit ALAMAT SMS Blast','".$this->session->userdata['nama_lengkap']."','" . $this->input->ip_address() . "','$agent','$platform.')";
        $this->db->query($sql);
        return TRUE;
    }
    
    
    function log_add_aro() {
//        $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
//        $location = file_get_contents('http://freegeoip.net/json/'.$_SERVER['REMOTE_ADDR']);
//        $json = json_decode($location, true);
//        if($json['region_name'] != "")
//        {$region =$json['region_name'];}
//        else {$region ="Indonesia";}
        $this->load->library('user_agent');
        if ($this->agent->is_browser())
        {
                $agent = $this->agent->browser().' '.$this->agent->version();
        }
        elseif ($this->agent->is_robot())
        {
                $agent = $this->agent->robot();
        }
        elseif ($this->agent->is_mobile())
        {
                $agent = $this->agent->mobile();
        }
        else
        {
                $agent = 'Unidentified User Agent';
        }
        $platform= $this->agent->platform();
        $sql = "INSERT INTO td_admin_log(keterangan,nama_lengkap,ip_address,browser,platform) VALUES ('Add ARO SMS Blast','".$this->session->userdata['nama_lengkap']."','" . $this->input->ip_address() . "','$agent','$platform.')";
        $this->db->query($sql);
        return TRUE;
    }
    function log_edit_aro() {
//        $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
//        $location = file_get_contents('http://freegeoip.net/json/'.$_SERVER['REMOTE_ADDR']);
//        $json = json_decode($location, true);
//        if($json['region_name'] != "")
//        {$region =$json['region_name'];}
//        else {$region ="Indonesia";}
        $this->load->library('user_agent');
        if ($this->agent->is_browser())
        {
                $agent = $this->agent->browser().' '.$this->agent->version();
        }
        elseif ($this->agent->is_robot())
        {
                $agent = $this->agent->robot();
        }
        elseif ($this->agent->is_mobile())
        {
                $agent = $this->agent->mobile();
        }
        else
        {
            $agent = 'Unidentified User Agent';
        }
        $platform= $this->agent->platform();
        $sql = "INSERT INTO td_admin_log(keterangan,nama_lengkap,ip_address,browser,platform) VALUES ('Edit ARO SMS Blast','".$this->session->userdata['nama_lengkap']."','" . $this->input->ip_address() . "','$agent','$platform.')";
        $this->db->query($sql);
        return TRUE;
    }
    
    
    function log_add_marketing() {
//        $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
//        $location = file_get_contents('http://freegeoip.net/json/'.$_SERVER['REMOTE_ADDR']);
//        $json = json_decode($location, true);
//        if($json['region_name'] != "")
//        {$region =$json['region_name'];}
//        else {$region ="Indonesia";}
        $this->load->library('user_agent');
        if ($this->agent->is_browser())
        {
                $agent = $this->agent->browser().' '.$this->agent->version();
        }
        elseif ($this->agent->is_robot())
        {
                $agent = $this->agent->robot();
        }
        elseif ($this->agent->is_mobile())
        {
                $agent = $this->agent->mobile();
        }
        else
        {
                $agent = 'Unidentified User Agent';
        }
        $platform= $this->agent->platform();
        $sql = "INSERT INTO td_admin_log(keterangan,nama_lengkap,ip_address,browser,platform) VALUES ('Add MARKETING SMS Blast','".$this->session->userdata['nama_lengkap']."','" . $this->input->ip_address() . "','$agent','$platform.')";
        $this->db->query($sql);
        return TRUE;
    }
    function log_edit_marketing() {
//        $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
//        $location = file_get_contents('http://freegeoip.net/json/'.$_SERVER['REMOTE_ADDR']);
//        $json = json_decode($location, true);
//        if($json['region_name'] != "")
//        {$region =$json['region_name'];}
//        else {$region ="Indonesia";}
        $this->load->library('user_agent');
        if ($this->agent->is_browser())
        {
                $agent = $this->agent->browser().' '.$this->agent->version();
        }
        elseif ($this->agent->is_robot())
        {
                $agent = $this->agent->robot();
        }
        elseif ($this->agent->is_mobile())
        {
                $agent = $this->agent->mobile();
        }
        else
        {
            $agent = 'Unidentified User Agent';
        }
        $platform= $this->agent->platform();
        $sql = "INSERT INTO td_admin_log(keterangan,nama_lengkap,ip_address,browser,platform) VALUES ('Edit MARKETING SMS Blast','".$this->session->userdata['nama_lengkap']."','" . $this->input->ip_address() . "','$agent','$platform.')";
        $this->db->query($sql);
        return TRUE;
    }
    
    function log_add_no_rek() {
//        $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
//        $location = file_get_contents('http://freegeoip.net/json/'.$_SERVER['REMOTE_ADDR']);
//        $json = json_decode($location, true);
//        if($json['region_name'] != "")
//        {$region =$json['region_name'];}
//        else {$region ="Indonesia";}
        $this->load->library('user_agent');
        if ($this->agent->is_browser())
        {
                $agent = $this->agent->browser().' '.$this->agent->version();
        }
        elseif ($this->agent->is_robot())
        {
                $agent = $this->agent->robot();
        }
        elseif ($this->agent->is_mobile())
        {
                $agent = $this->agent->mobile();
        }
        else
        {
                $agent = 'Unidentified User Agent';
        }
        $platform= $this->agent->platform();
        $sql = "INSERT INTO td_admin_log(keterangan,nama_lengkap,ip_address,browser,platform) VALUES ('Add NO REK SMS Blast','".$this->session->userdata['nama_lengkap']."','" . $this->input->ip_address() . "','$agent','$platform.')";
        $this->db->query($sql);
        return TRUE;
    }
    function log_edit_no_rek() {
        $this->load->library('user_agent');
        if ($this->agent->is_browser())
        {
                $agent = $this->agent->browser().' '.$this->agent->version();
        }
        elseif ($this->agent->is_robot())
        {
                $agent = $this->agent->robot();
        }
        elseif ($this->agent->is_mobile())
        {
                $agent = $this->agent->mobile();
        }
        else
        {
            $agent = 'Unidentified User Agent';
        }
        $platform= $this->agent->platform();
        $sql = "INSERT INTO td_admin_log(keterangan,nama_lengkap,ip_address,browser,platform) VALUES ('Edit NO REK SMS Blast','".$this->session->userdata['nama_lengkap']."','" . $this->input->ip_address() . "','$agent','$platform.')";
        $this->db->query($sql);
        return TRUE;
    }
    function log_add_surender() {
//        $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
//        $location = file_get_contents('http://freegeoip.net/json/'.$_SERVER['REMOTE_ADDR']);
//        $json = json_decode($location, true);
//        if($json['region_name'] != "")
//        {$region =$json['region_name'];}
//        else {$region ="Indonesia";}
//        $this->load->library('user_agent');
        if ($this->agent->is_browser())
        {
                $agent = $this->agent->browser().' '.$this->agent->version();
        }
        elseif ($this->agent->is_robot())
        {
                $agent = $this->agent->robot();
        }
        elseif ($this->agent->is_mobile())
        {
                $agent = $this->agent->mobile();
        }
        else
        {
                $agent = 'Unidentified User Agent';
        }
        $platform= $this->agent->platform();
        $sql = "INSERT INTO td_admin_log(keterangan,nama_lengkap,ip_address,browser,platform) VALUES ('Add SURENDER SMS Blast','".$this->session->userdata['nama_lengkap']."','" . $this->input->ip_address() . "','$agent','$platform.')";
        $this->db->query($sql);
        return TRUE;
    }
    
    function log_edit_surender() {
        //$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
//        $location = file_get_contents('http://freegeoip.net/json/'.$_SERVER['REMOTE_ADDR']);
//        $json = json_decode($location, true);
//        if($json['region_name'] != "")
//        {$region =$json['region_name'];}
//        else {$region ="Indonesia";}
        $this->load->library('user_agent');
        if ($this->agent->is_browser())
        {
                $agent = $this->agent->browser().' '.$this->agent->version();
        }
        elseif ($this->agent->is_robot())
        {
                $agent = $this->agent->robot();
        }
        elseif ($this->agent->is_mobile())
        {
                $agent = $this->agent->mobile();
        }
        else
        {
            $agent = 'Unidentified User Agent';
        }
        $platform= $this->agent->platform();
        $sql = "INSERT INTO td_admin_log(keterangan,nama_lengkap,ip_address,browser,platform) VALUES ('Edit SURENDER SMS Blast','".$this->session->userdata['nama_lengkap']."','" . $this->input->ip_address() . "','$agent','$platform.')";
        $this->db->query($sql);
        return TRUE;
    }
    
}