<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komper_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function get_by_role()
  {
    $query = $this->db->query('
    select
      data_invoice.buppin_number,
      data_invoice.price_invoicesatu,
       data_penawaran.GCT_COMP_NO,
        data_penawaran.BASE_PRICE
           from data_invoice
           inner join data_penawaran
           on data_invoice.buppin_number = data_penawaran.GCT_COMP_NO');

    return $query->result();
  }

}