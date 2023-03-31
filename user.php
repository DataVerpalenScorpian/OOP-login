<?php
// Functie: classdefinitie User
// Auteur: Toby Verpalen

require_once 'connect.php';

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

    // Zoek user in de table user
    $sql = "SELECT * FROM user WHERE username = '$username' and password = '$password'";

    echo "Username:" . $this->username;
    echo "Password:" . $this->password;

    // Indien gevonden dan sessie vullen
    if (isset($_SESSION['username'])){
    // Sessie vullen
    session_start();
    $_SESSION['username'] = $this->username;
    $_SESSION['password'] = $this->password;
    return true;
    }
    return false;
    }
    



    // Check if the user is already logged in
    public function IsLoggedin(){

    // Check if user session has been set
    if (isset($_SESSION['username'])) {
        return true;
    }
    return false;
    }




    public function GetUser($username) {
        // Connect to the database
        $server = "localhost";
        $user = "root";
        $pass = "";
        $db = "oopwig";

        $conn = new mysqli($server, $user, $pass, $db);

        // Check for connection errors
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Search for user in the user table
        $sql = "SELECT * FROM user WHERE username = '$username' and password = 'password'";

        // If user is found, set object properties with values from the SELECT
        if($stmt->RowCount() == 1){
            echo "logged in";
            ession_start();
        $_SESSION['username'] = $this->username;
        $_SESSION['password'] = $this->password;
        return true;
        } else{
            echo "login mislukt";
            return false;
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