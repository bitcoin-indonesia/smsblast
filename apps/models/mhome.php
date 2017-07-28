<?php
class Mhome extends CI_Model {

      function user($username, $password) {
        $sql = 'SELECT * FROM td_admin where nama_lengkap="' . $username . '" AND password="' . $password . '"';
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result;
    }
    
    function td_get_activity() {
        $sql = "SELECT * FROM td_admin_log ORDER BY time DESC LIMIT 5";
        $query = $this->db->query($sql);
        $data = array();
        if ($query !== FALSE && $query->num_rows() > 0) {
            $data = $query->result_array();
        }
        return $data;
    }
    function td_get_blast_report() {
        $sql = "SELECT * FROM td_pesan_send_log ORDER BY time DESC LIMIT 5";
        $query = $this->db->query($sql);
        $data = array();
        if ($query !== FALSE && $query->num_rows() > 0) {
            $data = $query->result_array();
        }
        return $data;
    }

    function validate($username, $password) {
        $hasil = $this->user($username, $password);
        $total = count($hasil);
        for ($i = 0; $i < $total; $i++) {
            if ($total > 0) {
                $data = array(
                    'nama_lengkap' => $hasil[$i]['nama_lengkap'],
                    'password' => $hasil[$i]['password'],
                    'id_admin' => $hasil[$i]['id_admin'],
                    'is_logged_in' => true
                );
                $this->session->set_userdata($data);
                return true;
            }
        }
    }
}