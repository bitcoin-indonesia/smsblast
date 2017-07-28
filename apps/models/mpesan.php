<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mpesan extends CI_Model {

    var $table = 'td_pesan';
    var $column_order = array('isi_pesan', null);
    var $column_search = array('isi_pesan');
    var $order = array('id_pesan' => 'desc');

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    private function _get_datatables_query() {
        $this->db->from($this->table);
        $i = 0;
        foreach ($this->column_search as $item) {
            if ($_POST['search']['value']) {

                if ($i === 0) {
                    $this->db->group_start();
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
                if (count($this->column_search) - 1 == $i)
                    $this->db->group_end();
            }
            $i++;
        }
        if (isset($_POST['order'])) {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($this->order)) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    function get_datatables() {
        $this->_get_datatables_query();
        if ($_POST['length'] != -1)
            $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }

    function count_filtered() {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all() {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    public function get_by_id($id) {
        $this->db->from($this->table);
        $this->db->where('id_pesan', $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function save($data) {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    public function update($where, $data) {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }

    public function delete_by_id($id) {
        $this->db->where('id_pesan', $id);
        $this->db->delete($this->table);
    }
    
    
    function td_get_spaj() {
        $sql = "SELECT * FROM td_pesan where sub_type ='spaj'";
        $query = $this->db->query($sql);
        $data = array();
        if ($query !== FALSE && $query->num_rows() > 0) {
            $data = $query->result_array();
        }
        return $data;
    }
    function td_get_polis() {
        $sql = "SELECT * FROM td_pesan where sub_type ='polis'";
        $query = $this->db->query($sql);
        $data = array();
        if ($query !== FALSE && $query->num_rows() > 0) {
            $data = $query->result_array();
        }
        return $data;
    }
    
    function td_get_ultah() {
        $sql = "SELECT * FROM td_pesan WHERE sub_type ='ultah'";
        $query = $this->db->query($sql);
        $data = array();
        if ($query !== FALSE && $query->num_rows() > 0) {
            $data = $query->result_array();
        }
        return $data;
    }
    
    function td_get_ahli_waris() {
        $sql = "SELECT * FROM td_pesan where sub_type ='ahli_waris'";
        $query = $this->db->query($sql);
        $data = array();
        if ($query !== FALSE && $query->num_rows() > 0) {
            $data = $query->result_array();
        }
        return $data;
    }
    function td_get_alamat() {
        $sql = "SELECT * FROM td_pesan where sub_type ='alamat'";
        $query = $this->db->query($sql);
        $data = array();
        if ($query !== FALSE && $query->num_rows() > 0) {
            $data = $query->result_array();
        }
        return $data;
    }
    
     function td_get_aro() {
        $sql = "SELECT * FROM td_pesan where sub_type ='aro'";
        $query = $this->db->query($sql);
        $data = array();
        if ($query !== FALSE && $query->num_rows() > 0) {
            $data = $query->result_array();
        }
        return $data;
    }
     function td_get_marketing() {
        $sql = "SELECT * FROM td_pesan where sub_type ='marketing'";
        $query = $this->db->query($sql);
        $data = array();
        if ($query !== FALSE && $query->num_rows() > 0) {
            $data = $query->result_array();
        }
        return $data;
    }
     function td_get_mature() {
        $sql = "SELECT * FROM td_pesan where sub_type ='mature'";
        $query = $this->db->query($sql);
        $data = array();
        if ($query !== FALSE && $query->num_rows() > 0) {
            $data = $query->result_array();
        }
        return $data;
    }
     function td_get_no_rek() {
        $sql = "SELECT * FROM td_pesan where sub_type ='no_rek'";
        $query = $this->db->query($sql);
        $data = array();
        if ($query !== FALSE && $query->num_rows() > 0) {
            $data = $query->result_array();
        }
        return $data;
    }
     function td_get_surender() {
        $sql = "SELECT * FROM td_pesan where sub_type ='surender'";
        $query = $this->db->query($sql);
        $data = array();
        if ($query !== FALSE && $query->num_rows() > 0) {
            $data = $query->result_array();
        }
        return $data;
    }
    
    
    function td_get_hari_raya() {
        $sql = "SELECT * FROM td_pesan where sub_type ='hari_raya'";
        $query = $this->db->query($sql);
        $data = array();
        if ($query !== FALSE && $query->num_rows() > 0) {
            $data = $query->result_array();
        }
        return $data;
    }
    
    function td_get_pay_bill() {
        $sql = "SELECT * FROM td_pesan WHERE type='billing' AND sub_type ='payment'";
        $query = $this->db->query($sql);
        $data = array();
        if ($query !== FALSE && $query->num_rows() > 0) {
            $data = $query->result_array();
        }
        return $data;
    }
    function td_get_pay_claim() {
        $sql = "SELECT * FROM td_pesan WHERE type='claim' AND sub_type ='payment'";
        $query = $this->db->query($sql);
        $data = array();
        if ($query !== FALSE && $query->num_rows() > 0) {
            $data = $query->result_array();
        }
        return $data;
    }
    function td_get_pending() {
        $sql = "SELECT * FROM td_pesan WHERE sub_type ='pending'";
        $query = $this->db->query($sql);
        $data = array();
        if ($query !== FALSE && $query->num_rows() > 0) {
            $data = $query->result_array();
        }
        return $data;
    }
    
    
    function td_get_member() {
        $sql = "SELECT * FROM td_member";
        $query = $this->db->query($sql);
        $data = array();
        if ($query !== FALSE && $query->num_rows() > 0) {
            $data = $query->result_array();
        }
        return $data;
    }
    
    
    function cron_ultah()
    {
        $sql = "SELECT * FROM `td_member` WHERE DATE_FORMAT(tanggal_lahir, '%d%m')= DATE_FORMAT(now(), '%d%m')";
        $query = $this->db->query($sql);
        $data = array();
        if ($query !== FALSE && $query->num_rows() > 0) {
            $data = $query->result_array();
        }
        return $data;   
    }


}