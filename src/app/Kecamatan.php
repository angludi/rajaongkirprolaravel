<?php

namespace angludi\rajaongkirprolaravel\app;

class Kecamatan extends Api {
    protected $method = "subdistrict";

    public function byKota($kota_id){
        $this->parameters = "?city=".$kota_id;
        return $this->GetData();
    }
}