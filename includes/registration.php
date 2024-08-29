<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $Name = $_POST["name"];
    $Company = $_POST["company"];
    $Email = $_POST["email"];
    $Phone = $_POST["phone"];
    $Type = $_POST["studenti"];

    try {
        require_once "connect.php";

        $sql = "INSERT INTO clients (Name, Company, Email, Phone, Type) VALUES (?, ?, ?, ?, ?);";

        $stmt = $pdo->prepare($sql);

        $stmt->execute([$Name, $Company, $Email, $Phone, $Type]);
        $pdo = null;
        $stmt = null;

        // if(isset($_POST['submit'])) {
        //     $studenti = $_POST['studenti'];

        //     $tab = "INSERT INTO clients (Type) VALUES ('$studenti')";
        //     $stmt = $pdo->query($tab);
        // }

        header("Location: ../vraboti.php?signup=success");

        die();
    } catch (PDOException $e) {
        die("Query failed:" . $e->getMessage());
    }

}
else {
    header("Location: ../vraboti.php?signup=success");
}
    // include_once 'connect.php';

    // $Name = $_POST["name"];
    // $Company = $_POST["company"];
    // $Email = $_POST["email"];
    // $Phone = $_POST["phone"];
    // $Type = $_POST["studenti"];


    // $sql = "INSERT INTO client (Name, Company, Email, Phone, Type) VALUES ($Name, $Company, $Email, $Phone, $Type);";
    // mysqli_query($conn, $sql);

    // header("Location: ../vraboti.html?signup=success");

    // $dsn = "mysql:host=localhost; dbname=client";
    // $dbuser = "root";
    // $dbpass = "onurege5";

    // try {
    //     $pdo = new PDO($dsn, $dbuser, $dbpass);
    //     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // } 
    // catch (PDOException $e) {
    //     echo"Connection failed:" .$e->getMessage();
    // }

// phpinfo();

// var_dump($_SERVER["REQUEST_METHOD"]);

// if ($_SERVER["REQUEST_METHOD"] == "POST") {

//     $Name = htmlspecialchars($_POST["name"]);
//     $Company = htmlspecialchars($_POST["company"]);
//     $Email = htmlspecialchars($_POST["email"]);
//     $Phone = htmlspecialchars($_POST["phone"]);
//     $Type = htmlspecialchars($_POST["studenti"]);


//     if(!empty($name)) {
//         exit();
        
//     }

//     $host = "localhost";
//     $userName = "root";
//     $password = "onurege5";
//     $dbName = "client";

//     //connection 
//     $conn = new mysqli($host, $userName, $password, $dbName);

//     if(mysqli_connect_errno()) {
//         die('Connect Error(' . mysqli_connect_error() . ')' . mysqli_connect_error());
//     } else {
//         $INSERT = "INSERT INTO clients (Name, Company, Email, Phone, Type) values (?, ?, ?, ?, ?)";

//         $stmt = $conn->prepare($INSERT);
//         $stmt->bindParam("sssis", $Name, $Company, $Email, $Phone, $Type);
//         $stmt->execute();
//         echo "New record inserted sucessfully";
//     }
//     $stmt->close();
//     $conn->close();
// } else {
//     header("Location: vraboti.html");
// }











