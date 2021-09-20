<?php
class model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getValky($stranka, $per_page)
    {
        $this->db->select('id, nazev, datumZacatku, datumKonce, pocetMrtvych');
        $this->db->from('valka');
        $this->db->order_by('nazev','asc');
        $this->db->limit($per_page , $stranka*$per_page);
        $result = $this->db->get()->result();
        return $result;

    }
    public function totalRows()
    {
        return
        $this->db->count_all('valka');

    }

    public function getBitvy($id)
    {
        $this->db->select();
        $this->db->from('bitva');
        $this->db->where('valka_idvalka', $id);

        $result = $this->db->get()->result();
        return $result;
    }
    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('bitva');
    }

    public function getZbrane()
    {
        $this->db->select('nazev, obrazek, zbranvevalce.mnozstvi as mnozstvi, typzbrane.typZbrane as typZbrane, ');
        $this->db->from('zbran');
        $this->db->join('zbranvevalce', 'idzbran = zbran_idzbran', 'inner');
        $this->db->join('typzbrane', 'typZbrane_idtypZbrane = id', 'inner');
        //$this->db->join('valka', 'valka_idvalka = id', 'inner');
        $result = $this->db->get()->result();
        return $result;
    }

    public function getVojevudce($stranka, $per_page)
    {
        $this->db->select();
        $this->db->from('vojevudce');
        $this->db->order_by('jmeno','asc');
        $this->db->limit($per_page , $stranka*$per_page);
        $result = $this->db->get()->result();
        return $result;
    }

    public function totalRows2()
    {
        return
        $this->db->count_all('vojevudce');

    }
    
    public function getZeme()
    {
        $this->db->select();
        $this->db->from('zeme');
        $this->db->order_by('nazevZeme', 'asc');
        $result = $this->db->get()->result();
        return $result;
    }

    public function pridej($nazev)
    {
        $data = array('nazevZeme' => $nazev);
        $this->db->insert('zeme', $data);
    }
}    