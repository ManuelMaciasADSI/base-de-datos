<?php 
// incluye la clase Db
require_once('conexion.php');

    class crudcomputador{
    	//1. constructor de la case 
    	public function __construc(){}

    	// metodo para insertar, recibe como parametro un objeto de tipo moto
    	public function insertar($moto){
    		$db=Db::conectar();
    		$insert=$db->prepare('INSERT INTO motos values(NULL,:tipo,:marca_moto,:inyeccion,:cilindraje,:frenos,:suspencion)');
    		$insert->bindvalue('tipo',$motos->gettipo());
    		$insert->bindvalue('marca_moto',$motos->getmarca());
    		$insert->bindvalue('inyeccion',$motos->getinyeccion());
    		$insert->bindvalue('cilindraje',$motos->getcilindraje());
    		$insert->bindvalue('frenos',$motos->getfrenos());
    		$insert->bindvalue('suspencion',$motos->getsuspencion());
    		$insert->excute();
    		
    	}
    	// 2. metodo para mostrar todas las motos
    	public function mostrar(){
    		$db=Db::conectar();
    		$listamotos=[];
    		$select=$db->query('SELECT * FROM motos');

    		foreach($select->fetchA11() as $motos){
    			$mymotos= new computador();
    			$mymotos->setid($motos['id']);
    			$mymotos->settipo($motos['tipo']);
    			$mymotos->setmarca($motos['marca_moto']);
    			$mymotos->setinteccion($motos['inyeccion']);
    			$mymotos->setcilindraje($motos['cilindraje']);
    			$mymotos->setfrenos($motos['frenos']);
    			$mymotos->setsuspencion($motos['suspencion']);
    			$listamotos[]=$mymotos;
    		}
    		return $listamotos;
    	}
    	//3. metodo para eliminar un producto, recibe com parametro el id del producto
    	public function eliminar($id){
    		$db=Db::conectar();
    		$eliminar=$db->prepare('DELETE FROM motos WHERE ID=:id');
    		$eliminar->bindvalue(íd,$id);
    		$eliminar->execute();
    	}
    	// 4. metodo para buscar un producto. recibe como parametro el id del producto
    	public function obtenermotos($id){
    		$db=Db::conectar();
    		$select=$db->prepare('SELECT* FROM motos WHERE ID=:id');
    		$select->bindvalue('id',$id);
    		$select->execute();
    		$motos=$select->fetch();
    		$mymotos= new motos();
    		$mymotos= new computador();
    			$mymotos->setid($motos['id']);
    			$mymotos->settipo($motos['tipo']);
    			$mymotos->setmarca($motos['marca_moto']);
    			$mymotos->setinteccion($motos['inyeccion']);
    			$mymotos->setcilindraje($motos['cilindraje']);
    			$mymotos->setfrenos($motos['frenos']);
    			$mymotos->setsuspencion($motos['suspencion']);
    			return $mymotos;
    	}
    	//.5 metodo de actualizar una moto, recibe como parametro la moto
    	public function actualizar($motos){
    		$db=Db::conectar();
    		$actualizar=$db->prepare('UPDATE motos SET tipo=:tipo,marca=:marca,inyeccion=:inyeccion,cilindraje=:cilindraje,frenos=:frenos,suspencion=:suspencion WHERE ID=:id');
    		$actualizar->bindvalue('id',$motos->getid());
    		$actualizar->bindvalue('tipo',$motos->gettipo());
    		$actualizar->bindvalue('marca',$motos->getmarca());
    		$actualizar->bindvalue('inyeccion',$motos->getinyeccion());
    		$actualizar->bindvalue('cilindraje',$motos->getcilindraje());
    		$actualizar->bindvalue('frenos',$motos->getfrenos());
    		$actualizar->bindvalue('suspencion',$motos->getsuspencion());
    		$actualizar->execute();
    	}
    } 
?>