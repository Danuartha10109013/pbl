<?php

class News_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function GetBerita($slug = FALSE)
    {
        if ($slug === FALSE) {
            $query = $this->db->get('berita');
            return $query->result_array();
        }
        $query = $this->db->get_where('berita', array('slug' => $slug));
        return $query->row_array();
    }

    public function GetBeritaId($tableName, $data)
    {
        $res = $this->db->get_where('berita', ['id_berita' => $data]);
        return $res->row_array();
    }

    public function InsertData($tableName, $data)
    {
        $res = $this->db->insert($tableName, $data);
        return $res;
    }

    public function UpdateData($tableName, $data, $where)
    {
        $res = $this->db->update($tableName, $data, ['id_berita' => $where]);
        return $res;
    }

    public function DeleteData($tableName, $where)
    {
        $res = $this->db->delete($tableName, ['id_berita' => $where]);
        return $res;
    }
}
