<?php

require 'DB.php';

class JSONDB extends DB
{
    private $file;

    public function __construct($file)
    {
        $this->file = $file;
    }

    public function setFile($file)
    {
        $this->file = $file;
    }
    public function getFile()
    {
        return $this->file;
    }

    public function dbConnect()
    {
        $db = file_get_contents($this->getFile());
        $arr = explode(PHP_EOL, $db);
        array_pop($arr);

        foreach($arr as $user) {
            $usersArray[] = json_decode($user, true);
        }

        return $usersArray;
    }

    public function dbEmailSearch($email)
    {
        $users = $this->dbConnect();
        foreach($users as $user) {
            if($user['email'] === $email) {
                return $user;
            }
        }
        return null;
    }

    public function saveUser($user)
    {
        $jsonUser = json_encode($user);
        file_put_contents('users.json', $jsonUser . PHP_EOL, FILE_APPEND);
    }

    
    public function saveProduct($prod)
    {
        $jsonProd = json_encode($prod);
        file_put_contents('products.json', $jsonProd . PHP_EOL, FILE_APPEND);
    }

    public function userArray($data)
    {
        $usuario = [
            'username' => $data['username'],
            'name' => $data['nombre'],
            'lastname' => $data['apellido'],
            'email' => $data['email'],
            'password' => password_hash($data['password'], PASSWORD_DEFAULT),
            'genre' => $data['genero'],
            'role' => 1
        ];

        $usuario['id'] = $this->idGenerate();

        return $usuario;
    }

    
    public function productArray($data)
    {
        $product = [
            'name' => $data['nombre'],
            'code' => $data['codigo'],
            'price' => $data['precio'],
            'description' => $data['descripcion']
        ];

        $product['id'] = $this->idGenerate();

        return $product;
    }

    public function idGenerate()
    {
        $file = $this->dbConnect();

        if($file == "") {
            return 1;
        }

        $last = $file[count($file) - 1];
    
        return $last['id'] + 1;   
    }

    public function saveAvatar($user)
    {
        $id = $user["id"];
        $nombre = $_FILES["avatar"]["name"];
        $archivo = $_FILES["avatar"]["tmp_name"];
        $ext = pathinfo($nombre, PATHINFO_EXTENSION);
        $miArchivo = dirname(__DIR__);
        $miArchivo = $miArchivo . "/img/user_avatars/";
        $miArchivo = $miArchivo. "perfil" . $id . "." . $ext;
        $miArchivo = str_replace('/', DIRECTORY_SEPARATOR, $miArchivo);
        move_uploaded_file($archivo, $miArchivo);
    }

    
    public function saveProductPhoto($product)
    {
        $id = $product["id"];
        $nombre = $_FILES["foto"]["name"];
        $archivo = $_FILES["foto"]["tmp_name"];
        $ext = pathinfo($nombre, PATHINFO_EXTENSION);
        $miArchivo = dirname(__DIR__);
        $miArchivo = $miArchivo . "/img/product_photos/";
        $miArchivo = $miArchivo. "product" . $id . "." . $ext; 
        $miArchivo = str_replace('/', DIRECTORY_SEPARATOR, $miArchivo);
        move_uploaded_file($archivo, $miArchivo);
    }

    public function retrieveAvatar($id)
    {
        $avatarPath = dirname(__FILE__);
        $avatarPath = 'img/user_avatars/perfil'. $id. '.*';
        $avatarPath = str_replace('/', DIRECTORY_SEPARATOR, $avatarPath);
        $avatarPath = glob($avatarPath);
        $avatarTruePath = $avatarPath[0];
        return $avatarTruePath;
    }

}



