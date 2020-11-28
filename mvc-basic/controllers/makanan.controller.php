<?php

require './../../models/makanan.models.php';

class MakananController{
    function __construct()
    {
        $this->makanan = new MakananModel();
    }

    function getAll()
    {
        $data['makanan'] = $this->makanan->get_all("makanan");
        return $data;
    }

    function insertMakanan()
    {
        if(isset($_POST['tambahMakanan'])){
            $value = [
                "mk_nama" => $_POST['mk_nama'],
                "mk_deskripsi" => $_POST['mk_deskripsi'],
                "mk_harga" => $_POST['mk_harga'],
            ];

            $data['insert'] = $this->makanan->insert_makanan("makanan", $value);
            if($data['insert']){
                return true;
            } else {
                return false;
            }
            var_dump($value);
        } else {
            return false;
        }
    }

    function detailMakanan($id)
    {
        $data['detail'] = $this->makanan->get_data_id("makanan", $id);
        return $data;
    }
}