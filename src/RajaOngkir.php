<?php

namespace angludi\rajaongkirprolaravel;

use angludi\rajaongkirprolaravel\app\Provinsi;
use angludi\rajaongkirprolaravel\app\Kota;
use angludi\rajaongkirprolaravel\app\Kecamatan;
use angludi\rajaongkirprolaravel\app\Cost;

class RajaOngkir {
	public function Provinsi(){
		return new Provinsi;
	}

	public function Kota(){
		return new Kota;
	}

	public function Cost($attributes){
		return new Cost($attributes);
	}

	public function Kecamatan(){
	    return new Kecamatan;
    }
}