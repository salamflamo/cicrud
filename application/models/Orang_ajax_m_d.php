<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class Orang_ajax_m_d extends CI_Model
{
  var $table = 'orang';
  var $column_order = array('nik','nama','phone','gender','alamat','kecamatan','kabkot',null );
  var $column_search = array('nik','nama','phone','gender','alamat','kecamatan','kabkot');
  var $order = array('id'=>'desc');

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  private function get_data_query()
  {
    $this->db->from($this->table);
    $i = 0;
    foreach ($this->column_search as $value) {
      if ($_POST['search']['value']) {
        if ($i===0) {
          $this->db->group_start();
          $this->db->or_like($value,$_POST['search']['value']);
        } else {
          $this->db->or_like($value,$_POST['search']['value']);
        }
        if (count($this->column_search) - 1 == $i) {
          $this->db->group_end();
        }
      }
      $i++;
    }

    if (isset($_POST['order'])) {
      $this->db->order_by($this->column_order[$_POST['order']['0']['column']],$_POST['order']['0']['dir']);
    } elseif (isset($this->order)) {
      $order = $this->order;
      $this->db->order_by(key($order),$order[key($order)]);
    }
  }

  public function get_datatables()
  {
    $this->get_data_query();
    if ($_POST['length'] != -1) {
      $this->db->limit($_POST['length'],$_POST['start']);
      $query = $this->db->get();
      return $query->result();
    }
  }

  public function count_filtered($value='')
  {
    $this->get_data_query();
    $query = $this->db->get();
    return $query->num_rows();
  }

  public function count_all()
  {
    $this->db->from($this->table);
    return $this->db->count_all_results();
  }

  public function get_by_id($id)
  {
    $this->db->from($this->table);
    $this->db->where('id',$id);
    $query = $this->db->get();
    return $query->row();
  }

  public function save($data)
  {
    $this->db->insert($this->table,$data);
    return $this->db->insert_id();
  }

  public function update($where,$data)
  {
    $this->db->update($this->table,$data,$where);
    return $this->db->affected_rows();
  }

  public function delete_by_id($id)
  {
    $this->db->where('id',$id);
    $this->db->delete($this->table);
  }

}
