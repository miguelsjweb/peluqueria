<?php 

namespace Model;

class AdminCita extends ActiveRecord{
    protected static $tabla = 'citasServicios';
    protected static $columnasDB = ['id', 'hora', 'cliente', 'email', 'telefono', 'servicio', 'precio'];


    public $id;
    public $hora;
    public $cliente;
    public $email;
    public $telefono;
    public $servicio;
    public $precio;

    public function __construct(){
        
        $this->id = $args['id'] ?? null;
        $this->id = $args['hora'] ?? '';
        $this->id = $args['cliente'] ?? '';
        $this->id = $args['email'] ?? '';
        $this->id = $args['telefono'] ?? '';
        $this->id = $args['servicio'] ?? '';
        $this->id = $args['precio'] ?? '';
    }
}


