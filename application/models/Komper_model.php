<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komper_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function get_by_role($periode)
  {
    $query = $this->db->query('
    select
      data_invoice.InvoiceNumber,
      data_invoice.ProductID,
      data_invoice.kalkulasi_per_pcs,
      data_invoice.supplier,
      data_invoice.QuantityUnit,
      data_penawaran.GCT_COMP_NO,
      data_penawaran.PERIOD,
      data_penawaran.BASE_PRICE,
      data_penawaran.SPPLY_NM
    from
      data_invoice
    inner join
      data_penawaran
    on
      data_invoice.ProductID = data_penawaran.GCT_COMP_NO
    and
      data_invoice.supplier = data_penawaran.SPPLY_NM where data_invoice.periode="'.$periode.'"
      AND data_penawaran.PERIOD="'.$periode.'"');

    return $query->result();
  }

  public function get_no_same($periode)
  {
    $query = $this->db->query('
    select
      data_invoice.ProductID as no,data_invoice.supplier as supplier,data_invoice.kalkulasi_per_pcs as price from data_invoice
    where
      periode = "'.$periode.'"
    UNION ALL
    Select
      data_penawaran.GCT_COMP_NO as no,data_penawaran.SPPLY_NM as supplier,data_penawaran.BASE_PRICE as price from data_penawaran
    where
      PERIOD = "'.$periode.'"');

    return $query->result();
  }

}
