<?php
  class moto{
  	private $id;
  	private $tipo;
   	private $marca_moto;
  	private $inyeccion;
  	private $cilindraje;
  	private $frenos;
  	private $suspension;

  	function __construct(){}

    public function getid(){
      return $this->id;
    }
    public function setid($id){
        $this->id = $id;

  	public function gettipo(){
  		return $this->tipo;
  	}
    public function settipo($tipo){
        $this->tipo = $tipo;
    }
    public function getmarca(){
      return $this->marca_moto;
    }
    public function setmarca($marca_moto){
        $this->marca = $marca_moto;
    public function getinyeccion(){
      return $this->inyeccion;
    }
    public function setinyeccion($inyeccion){
        $this->inyeccion = $inyeccion;
  }
  public function getcilindraje(){
      return $this->cilindraje;
    }
    public function setcilindraje($cilindraje){
        $this->cilindraje = $cilindraje;
  }
  public function getfrenos(){
      return $this->frenos;
    }
    public function setfrenos($frenos){
        $this->frenos = $frenos;
  }
  public function getsuspension(){
      return $this->suspension;
    }
    public function setsuspencion($suspension){
        $this->suspension = $suspension;
            }
}
?>