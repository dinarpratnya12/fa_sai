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
      data_invoice.invoicenumber,
      data_invoice.productid,
      data_invoice.kalkulasi_per_pcs,
      data_invoice.supplier,
      data_invoice.invoicedate,
      data_invoice.quantityunit,
      data_penawaran.partnumber,
      data_penawaran.period,
      data_penawaran.base_price,
      data_penawaran.supplier
    from
      data_invoice
    inner join
      data_penawaran
    on
      data_invoice.productid = data_penawaran.partnumber
    and
      data_invoice.supplier = data_penawaran.supplier where data_invoice.periode="'.$periode.'"
      AND data_penawaran.period="'.$periode.'"');

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
      data_penawaran.partnumber as no,data_penawaran.supplier as supplier,data_penawaran.base_price as price from data_penawaran
    where
      period = "'.$periode.'"');

    return $query->result();
  }

}
