<?php
// Functie: classdefinitie User
// Auteur: Toby Verpalen

class User{
// Eigenschappen

    public $username;

    public $email;

    private $password;

    function SetPassword($password){

        $this->password = $password;
    }

    function GetPassword(){

        return $this->password;
    }


    public function ShowUser() {

        echo "<br>Username: $this->username<br>";
        echo "<br>Password: $this->password<br>";  
        echo "<br>Email: $this->email<br>";
    }


    public function RegisterUser(){

        $status = false;

        $errors=[];

        if($this->username != "" || $this->password != ""){

    // Check user exist
    if(true){
    array_push($errors, "Username bestaat al.");
    } else {
        // username opslaan in tabel login
        // INSERT INTO `user` (`username`, `password`, `role`) VALUES ('kjhasdasdkjhsak', 'asdasdasdasdas', '')
        // Manier 1
        $status = true;
        }
    }
    return $errors;
    }




    function ValidateUser(){
        $errors=[];
        if (empty($this->username)){
            array_push($errors, "Invalid username");
        } else if (empty($this->password)){
            array_push($errors, "Invalid password");
        }




    // Test username > 3 tekens
    return $errors;
    }

    public function LoginUser(){

    // Connect database
    $dbname = "oopdb";

    // Zoek user in de table user
    // SELECT * from user WHERE username = $this->username

    echo "Username:" . $this->username;
    echo "Password:" . $this->password;

    // Indien gevonden dan sessie vullen
    if (true){
    // Sessie vullen
    session_start();
    $_SESSION['username'] = $this->username;
    $_SESSION['password'] = $this->password;
    return true;
    } else{
    return false;
    } 
    return true;
    }




    // Check if the user is already logged in
    public function IsLoggedin() {

    // Check if user session has been set
    if (isset($_SESSION['username'])) {
        return true;
    }
    return false;
}




    public function GetUser($username){
        // Connect database
        $servername = "localhost";
        
        // Zoek user in de table user

        // Doe SELECT * from user WHERE username = $username
        if (false){

        //Indien gevonden eigenschappen vullen met waarden uit de SELECT
        $this->username = 'Waarde uit de database';
        $this->password = 'Waarde uit de database';
        } else {
            return NULL;
        }
    }




    public function Logout(){
        session_start();

        // remove all session variables
        session_unset();

        // destroy the session
        session_destroy();
        header('location: index.php');
    }
}