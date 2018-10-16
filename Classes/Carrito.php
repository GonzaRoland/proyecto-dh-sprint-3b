<?php

class Carrito
{
    private $usuario;
    private $productos = [];

    public function __construct(Usuario $usuario, Array $productos = null)
    {
        $this->usuario = $usuario;
        $this->productos = $productos;
    }

    
    
    public function getUsuario()
    {
        return $this->usuario;
    }

    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

   
    public function getProductos()
    {
        return $this->productos;
    }

        public function setProductos($producto)
    {
        $this->productos[] = $producto;
    }
}