<?php

namespace Controllers;

use Model\Servicio;
use Model\Cita;
use Model\CitaServicio;


class APIController{
    public static function index(){
        $servicios = Servicio::all();
        echo json_encode($servicios, JSON_UNESCAPED_UNICODE);
        
    }
    
    public static function guardar(){

        //guarda la cita y devuelve el id
        $cita = new Cita($_POST);
        $resultado = $cita->guardar();

        $id = $resultado['id'];

        //guarda la cita y el servicio

        $idServicios = explode(",", $_POST['servicios']);

        foreach($idServicios as $idServicio){
            $args = [
                'citaId' => $id,
                'servicioId' => $idServicio
            ];
            $citaServicio = new CitaServicio($args);
            $citaServicio -> guardar();
        }

        $respuesta = [
            'servicios' => $resultado
        ];
        echo json_encode($respuesta,JSON_UNESCAPED_UNICODE);
    }

    public static function eliminar(){
        
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            
            $cita = Cita::find($_POST['id']);
            $cita->eliminar();
            header('Location:' . $_SERVER['HTTP_REFERER']);
        }
    }
}