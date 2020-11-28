<?php

require './../../models/transaksi.models.php';

class TransaksiController
{
    function __construct()
    {
        $this->transaksi = new TransaksiModel();
    }

    function getAll()
    {
        $data['transaksi'] = $this->transaksi->get_all("transaksi");
        
        return $data;
    }
    
    function getMakanan()
    {
        $data['makanan'] = $this->transaksi->get_table("makanan");
        return $data;
    }
    
    function getMeja()
    {
        $data['meja'] = $this->transaksi->get_table("meja");
        return $data;
    }

    function insertTransaksi()
    {
        $value = [
            "fk_meja" => $_POST['fk_meja'],
            "fk_makanan" => $_POST['fk_makanan'],
            "t_total" => $_POST['t_total'],
            "t_status" => 0,
        ];

        $insert = $this->transaksi->insert_data("transaksi", $value);
        if($insert){
            return true;
        } else {
            return false;
        }
    }
}

