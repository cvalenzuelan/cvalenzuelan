<?php

class BaseElement{
	private $titulo;
	public $descripcion;
	public $meses;

	public function __construct($titulo, $descripcion){
		$this->modificarTitulo($titulo);
		$this->descripcion = $descripcion;
	}

	public function modificarTitulo($t){
		$this->titulo = ($t=='')?'SIN TITULO':$t;
	}

	public function obtenerTitulo(){
		return $this->titulo;
	}
	public function obtenermeses(){
		$ano = floor($this->meses / 12);
		$texto_ano = ($ano>0)?"$ano Años":"";
		$resto_meses = $this->meses % 12;
		$texto_meses = ($resto_meses>0)?"$resto_meses Meses":"";
		return "$texto_ano $texto_meses";
	}
}