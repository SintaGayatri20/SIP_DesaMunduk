<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{

    public $tablemenuSubMenu    = "user_sub_menu";
    public $tableUm             = "user_menu";
    public $tablemenu           = "user_menu";
    public $tableUser           = "user";
    public $tb_tempatwisata     = "tb_tempatwisata";
    public $tb_kategori         = "tb_kategori";
    public $tb_guide            = "tb_guide";
    public $tb_transaksi        = "tb_transaksi";





    public function delete($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function newUpdate($where, $data, $table)
    {

        $this->db->where($where);
        $this->db->update($table, $data);
    }

    ////////////////////////////////// SUB MENU ///////////////////////////////
    public function getId($id)
    {
        return $this->db->get_where($this->tablemenu, ["id" => $id])->row();
    }
    public function newUpdateMenu($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function getSubMenu()
    {
        $query = "SELECT user_sub_menu.*, user_menu.menu
                    FROM user_sub_menu JOIN  user_menu
                    ON user_sub_menu.menu_id = user_menu.id
                ";

        return $this->db->query($query)->result_array();
    }


    public function getByIdSubMenu($id)
    {
        return $this->db->get_where($this->tablemenuSubMenu, ["id" => $id])->row();
    }


    public function getByUserMenu()
    {
        return $this->db->get($this->tableUm)->result();
    }


    public function newUpdateSubMenu($where, $data, $table)
    {

        $this->db->where($where);
        $this->db->update($table, $data);
    }

    //////////////////////////////// SUB MENU ///////////////////////////////////////////////

    public function getWisata()
    {
        $query = "SELECT * FROM tb_tempatwisata
                  WHERE tb_tempatwisata.id_kategori = 1
                ";

        return $this->db->query($query)->result_array();
    }
    public function getRestoran()
    {
        $query = "SELECT * FROM tb_tempatwisata
                  WHERE tb_tempatwisata.id_kategori = 2
                ";

        return $this->db->query($query)->result_array();
    }
    public function getHotel()
    {
        $query = "SELECT * FROM tb_tempatwisata
                  WHERE tb_tempatwisata.id_kategori = 3
                ";

        return $this->db->query($query)->result_array();
    }


    ///////////////////////////// DATA TEMPAT WISATA ADMIN //////////////////////////////////////////////

    public function getDataTPS()
    {
        $query = "SELECT tb_tempatwisata.*, tb_kategori.*
                    FROM tb_tempatwisata JOIN  tb_kategori
                    ON tb_tempatwisata.id_kategori = tb_kategori.id_kategori
                ";

        return $this->db->query($query)->result_array();
    }

    public function getByIdDataTPS($id)
    {
        return $this->db->get_where($this->tb_tempatwisata, ["id_tps" => $id])->row();
    }

    ///////////////////////////// DATA TEMPAT WISATA ADMIN //////////////////////////////////////////////

    public function getByKategori()
    {
        return $this->db->get($this->tb_kategori)->result();
    }

    public function getIdKategori($id)
    {
        return $this->db->get_where($this->tb_kategori, ["id_kategori" => $id])->row();
    }
    public function getByIdDataGuide($id)
    {
        return $this->db->get_where($this->tb_guide, ["id_guide" => $id])->row();
    }

    public function getDataTransaksi()
    {

        $query = "SELECT tb_transaksi.*, tb_tempatwisata.*,tb_guide.*
                  FROM tb_transaksi
                  JOIN tb_tempatwisata ON tb_transaksi.id_tps=tb_tempatwisata.id_tps
                  JOIN tb_guide ON tb_transaksi.id_guide =tb_guide.id_guide
                ";
        return $this->db->query($query)->result_array();
    }

    public function getByIdDetailTransaksi($id)
    {

        return $this->db->get_where($this->tb_transaksi, ["id_transaksi" => $id])->row();
    }

    public function getByTPS($id)
    {
        return $this->db->get_where($this->tb_tempatwisata, ["id_tps" => $id])->row();
    }
    public function getByGuide($id)
    {
        return $this->db->get_where($this->tb_guide, ["id_guide" => $id])->row();
    }
}
