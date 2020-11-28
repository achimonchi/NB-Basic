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
}

