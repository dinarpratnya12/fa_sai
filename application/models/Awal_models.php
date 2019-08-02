<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Awal_models extends CI_Model {

    public function get_all_sup()
    {
        return $this->db->get('supplier')->result();
    }

    function totalinvoice(){
        $query = $this->db->query('
        SELECT
            count(*)
        as
            total_record
        FROM
            data_invoice');

        return $query->result();
    }

    function totalpenawaran(){
        $query = $this->db->query('
        SELECT
            count(*)
        as
            total_record
        FROM
            data_penawaran');

        return $query->result();
    }

    function totalsup(){
        $array_s = [];
        $query = $this->db->get("supplier");
        foreach ($query->result() as $row)
        {
            array_push($array_s,$row->sai);
            array_push($array_s,$row->gct);
        }
        return count(array_unique($array_s));

    }

    function totaluser(){
        $query = $this->db->query('
        SELECT
            count(*)
        as
            total_record
        FROM
            tbl_users');

        return $query->result();
    }



}
