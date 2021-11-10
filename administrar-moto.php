<?php
            //incluimos la clase moto y crud motos
            require_once("crud_motos.php");
            require_once("motos.php");
            
            $crud= new crud_motos();
            $motos= new motos();
            
            //si el elemento insertar no viene nulo llama al crud e insert un producto
            if (isset($_POST["insertar"])){
            	$motos->setid($_POST["id"]);
            	$motos->settipo($_POST["tipo"]);
            	$motos->setmarca($_POST["marca_moto"]);
            	$motos->setinyeccion($_POST["inyeccion"]);
            	$motos->setcilindraje($_POST["cilindraje"]);
            	$motos->setfrenos($_POST["frenos"]);
            	$motos->setsuspencion($_POST["suspencion"]);
            //llama la funcion inserter definida en el crud
            
            	$crud->insertar($motos);
            	header("location: index.php");
            	//si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el producto
            }elseif (isset($_POST["actalizar"])) {
            	$motos->setid($_POST["id"]);
            	$motos->settipo($_POST["tipo"]);
            	$motos->setmarca($_POST["marca_moto"]);
            	$motos->setinyeccion($_POST["inyeccion"]);
            	$motos->setcilindraje($_POST["cilindraje"]);
            	$motos->setfrenos($_POST["frenos"]);
            	$motos->setsuspencion($_POST["suspencion"]);
            
            	$$crud->actualizar($motos);
            	header("location: index.php");
            
            // si la variable accion enviada por el GET en == 'e' llama al crud y elimina un producto
            }elseif($_GET["accion"]=='e') {
            	$crud->eliminar($GET["id"]);
            	header("location: index.php");
            
            // si la variable accion enviada por GET es == 'a', envia a la pagina actualizar.php
            }elseif($_GET["accion"]=='a'){
            	header("location: actualizar.php");
            }
?>