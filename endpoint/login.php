<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // Check if the provided username and password are correct
    if ($username === "admin" && $password === "admin") {
        header("Location: http://localhost/my-e-diary/home.php");
        exit();
    } else {
        echo "
        <script>
            alert('Incorrect username or password. Login Again.');
            window.location.replace('http://localhost/my-e-diary/');
        </script>
        ";
    }
}
?>
