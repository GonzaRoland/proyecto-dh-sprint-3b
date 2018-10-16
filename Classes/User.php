 <?php

class User
{
    private $id; //
    private $firstName;
    private $lastName;
    private $dni; //
    private $phone; //
    private $email;
    private $password;
    private $dob; //
    private $streetAddress; //
    private $aptFloor; //
    private $zipCode; //
    private $city; //
    private $province; //
    private $genre; //
    private $userRole;


    public function __construct($firstName, $lastName, $email, $password, $streetAddress = null, $aptFloor = null, $city = null, $province = null, $id = null, $dob = null, $zipCode = null, $dni = null, $phone = null, $genre = null, $userRole)
    {
        $this->setId($id);
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
        $this->setEmail($email);
        $this->setPassword($password);
        $this->setStreetAddress($streetAddress);
        $this->setAptFloor($aptFloor);
        $this->setCity($city);
        $this->setProvince($province);
        $this->setDob($dob);
        $this->setZipCode($zipCode);
        $this->setDni($dni);
        $this->setPhone($phone);
        $this->setGenre($genre);
        $this->setUserRole($userRole);
    }

   
    public function getId()
    {
        return $this->id;
    }

   
    public function setId($id)
    {
        $this->id = $id;
    }

    
    public function getFirstname()
    {
        return $this->firstName;
    }

   
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

   
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }
    
    public function getEmail()
    {
        return $this->email;
    }

    
    public function setEmail($email)
    {
        $this->email = $email;
    }

   
    public function getPassword()
    {
        return $this->password;
    }

   
    public function setPassword($password)
    {
        //$hash = password_hash($password, PASSWORD_DEFAULT);
        $this->password = $password;
    }

    //public function pwdCrypt($password)
    //{
    //    return password_hash($password, PASSWORD_DEFAULT);
    //}

    public function getDni()
    {
        return $this->dni;
    }

   
    public function setDni($dni)
    {
        $this->dni = $dni;
    }

    public function getPhone()
    {
        return $this->phone;
    }

   
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function getPhotoUrl()
    {
        return $this->photoUrl;
    }

   
    public function setPhotoUrl($photoUrl)
    {
        $this->photoUrl = $photoUrl;
    }

    public function getDob()
    {
        return $this->dob;
    }

   
    public function setDob($dob)
    {
        $this->dob = $dob;
    }

    public function getStreetAddress()
    {
        return $this->streetAddress;
    }

   
    public function setStreetAddress($streetAddress)
    {
        $this->streetAddress = $streetAddress;
    }

    public function getAptFloor()
    {
        return $this->aptFloor;
    }

   
    public function setAptFloor($aptFloor)
    {
        $this->aptFloor = $aptFloor;
    }

    public function getZipCode()
    {
        return $this->zipCode;
    }

   
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;
    }

    public function getCity()
    {
        return $this->city;
    }

   
    public function setCity($city)
    {
        $this->city = $city;
    }

    public function getProvince()
    {
        return $this->province;
    }

   
    public function setProvince($province)
    {
        $this->province = $province;
    }

    public function getGenre()
    {
        return $this->genre;
    }

   
    public function setGenre($genre)
    {
        $this->genre = $genre;
    }

    public function getUserRole()
    {
        return $this->userRole;
    }

   
    public function setUserRole($userRole)
    {
        $this->userRole = $userRole;
    }
    
}

