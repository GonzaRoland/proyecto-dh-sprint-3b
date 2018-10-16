<?php

class QueryBuilder
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function index($table)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM {$table}");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

    public function searchId($table, $id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM {$table} WHERE id = {$id}");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /*public function createUser($data) // $data va a ser $_POST
    {
        $stmt = $this->pdo->prepare("INSERT INTO usuarios ( first_name, last_name, dni, phone, email, pswd, photo_url, dob, street_address, apt_floor, zip_code, city, province) VALUES (:firstName, :lastName, :dni, :phone, :email, :pswd, :photoUrl, :dob, :streetAddress, :aptFloor, :zipCode, :city, :province )");

        $firstName = $data['nombre'];
        $lastName = $data['apellido'];
        $dni = $data['dni'];
        $phone = $data['telefono'];
        $email = $data['email'];
        $pswd = password_hash($data['password'], PASSWORD_DEFAULT);
        $photoUrl = "" //esta URL debería generarse y matchear el path de saveAvatar
        $dob = $data['dia'] . $data['mes'] . $data['anio']; 
        $streetAddress = $data['direccion'];
        $aptFloor = $data['piso-departamento'];
        $zipCode = $data['codigo-postal'];
        $city = $data['localidad'];
        $province = $data['provincia'];

        $stmt->bindParam(':firstName', $firstName, PDO::PARAM_STR);
        $stmt->bindParam(':lastName', $lastName, PDO::PARAM_STR);
        $stmt->bindParam(':dni', $dni, PDO::INT);
        $stmt->bindParam(':phone', $phone, PDO::INT);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':password', $pswd, PDO::PARAM_STR);
        $stmt->bindParam(':photoUrl', $photoUrl, PDO::PARAM_STR);
        $stmt->bindParam(':dob', $dob, PDO::PARAM_STR);
        $stmt->bindParam(':streetAddress', $streetAddress, PDO::PARAM_STR);
        $stmt->bindParam(':aptFloor', $aptFloor, PDO::PARAM_STR);
        $stmt->bindParam(':zipCode', $zipCode, PDO::INT);
        $stmt->bindParam(':city', $city, PDO::PARAM_STR);
        $stmt->bindParam(':province', $province, PDO::PARAM_STR);
        
        $stmt->execute();

    }*/

    public function createProduct($data) // $data va a ser $_POST
    {
        $stmt = $this->pdo->prepare("INSERT INTO productos (prod_name, price, prod_description, photo_url, stock, id_brand, id_cat, id_subcat) VALUES (:prodName, :price, :prod_description, :stock, :id_brand, :id_cat, :id_subcat)");

        $name = $data['nombre'];
        $price = $data['precio'];
        $description = $data['descripcion'];
        //$photoUrl = esta URL debería generarse y matchear el path de saveAvatar
        $stock = $data['stock']; 
        $brand = $data['brand'];
        $cat = $data['categoria'];
        $subCat = $data['subcategoria'];
        
        $stmt->bindParam(':prodName', $name, PDO::PARAM_STR);
        $stmt->bindParam(':price', $price, PDO::FLOAT);
        $stmt->bindParam(':prod_description', $description, PDO::PARAM_STR);
        $stmt->bindParam(':stock', $stock, PDO::INT);
        $stmt->bindParam(':id_brand', $brand, PDO::INT);
        $stmt->bindParam(':id_cat', $cat, PDO::INT);
        $stmt->bindParam(':id_subcat', $subCat, PDO::INT);
        
        
        $stmt->execute();

    }

    
}