<?php
require 'PDOConnector.php';
require 'User.php';
require 'Product.php';
require 'DB.php';

class MySQLDB extends DB
{
    private $pdo;
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    
    public function dbEmailSearch($email)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->bindParam(":email", $email, PDO::PARAM_STR);
        $stmt->execute();
        $userArray = $stmt->fetch(PDO::FETCH_ASSOC); 
        $user = new User($userArray['first_name'], $userArray['last_name'], $userArray['email'], $userArray['pswd'], $userArray['street_address'], $userArray['apt_floor'], $userArray['city'], $userArray['province'], $userArray['id'], $userArray['dob'], $userArray['zip_code'], $userArray['dni'], $userArray['phone'], $userArray['genre'], $userArray['user_role'] );
        return $user;
    }
    public function saveUser(User $user)
    {
        $stmt = $this->pdo->prepare("INSERT INTO users (first_name, last_name, dni, phone, email, pswd, dob, street_address, apt_floor, zip_code, city, province, genre, user_role) 
                VALUES (:firstName, :lastName, :dni, :phone, :email, :pswd, :dob, :streetAddress, :aptFloor, :zipCode, :city, :province, :genre, :userRole )");
        
        $firstName = $user->getFirstName();
        $lastName = $user->getLastName();
        $dni = $user->getDni();
        $phone = $user->getPhone();
        $email = $user->getEmail();
        $password = $user->getPassword();
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        $dob = $user->getDob();
        $streetAddress = $user->getStreetAddress();
        $aptFloor = $user->getAptFloor();
        $zipCode = $user->getZipCode();
        $city = $user->getCity();
        $province = $user->getProvince();
        $genre = $user->getGenre();
        $userRole = $user->getUserRole();

        
        $stmt->bindParam(":firstName", $firstName, PDO::PARAM_STR);
        $stmt->bindParam(":lastName", $lastName, PDO::PARAM_STR);
        $stmt->bindParam(":dni", $dni, PDO::PARAM_INT);
        $stmt->bindParam(":phone", $phone, PDO::PARAM_INT);       
        $stmt->bindParam(":email", $email, PDO::PARAM_STR);
        $stmt->bindParam(":pswd", $passwordHash, PDO::PARAM_STR);
        $stmt->bindParam(":dob", $dob, PDO::PARAM_STR);
        $stmt->bindParam(":streetAddress", $streetAddress, PDO::PARAM_STR);
        $stmt->bindParam(":aptFloor", $aptFloor, PDO::PARAM_STR);
        $stmt->bindParam(":zipCode", $zipCode, PDO::PARAM_STR);
        $stmt->bindParam(":city", $city, PDO::PARAM_STR);
        $stmt->bindParam(":province", $province, PDO::PARAM_STR);
        $stmt->bindParam(":genre", $genre, PDO::PARAM_STR);
        $stmt->bindParam(":userRole", $userRole, PDO::PARAM_STR);

        $stmt->execute();

        $user->setId($this->pdo->lastInsertId()); // que onda esto??
    }

    public function saveAvatar(User $user)
    {
        $id = $user->getId();
        $nombre = $_FILES["avatar"]["name"];
        $archivo = $_FILES["avatar"]["tmp_name"];
        $ext = pathinfo($nombre, PATHINFO_EXTENSION);
        $miArchivo = dirname(__DIR__);
        $miArchivo = $miArchivo . "/img/user_avatars/";
        $miArchivo = $miArchivo. "perfil" . $id . "." . $ext;
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

    public function saveProduct(Product $product)
    {
        $stmt = $this->pdo->prepare("INSERT INTO products (prod_name, price, prod_description, stock, id_brand, id_category) VALUES (:prodName, :price, :prod_description, :stock, :id_brand, :id_category)");

        $prodName = $product->getProdName();
        $price = $product->getPrice();
        $prodDescription = $product->getDescription();
        $stock = $product->getStock();
        $brand = $product->getBrand();
        $category = $product->getCategory();
              
        $stmt->bindParam(':prodName', $prodName, PDO::PARAM_STR);
        $stmt->bindParam(':price', $price, PDO::PARAM_STR);
        $stmt->bindParam(':prod_description', $prodDescription, PDO::PARAM_STR);
        $stmt->bindParam(':stock', $stock, PDO::PARAM_INT);
        $stmt->bindParam(':id_brand', $brand, PDO::PARAM_INT);
        $stmt->bindParam(':id_category', $category, PDO::PARAM_INT);
            
        
        $stmt->execute();

        $product->setId($this->pdo->lastInsertId());
    }

    public function saveProdPic(Product $product)
    {
        $id = $product->getId();
        $nombre = $_FILES["foto"]["name"];
        $archivo = $_FILES["foto"]["tmp_name"];
        $ext = pathinfo($nombre, PATHINFO_EXTENSION);
        $miArchivo = dirname(__DIR__);
        $miArchivo = $miArchivo . "/img/prod_pics/";
        $miArchivo = $miArchivo. "product" . $id . "." . $ext;
        $miArchivo = str_replace('/', DIRECTORY_SEPARATOR, $miArchivo);
        move_uploaded_file($archivo, $miArchivo);
    }

}