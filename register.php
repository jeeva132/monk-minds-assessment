<?php

include("db_connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone_number = $_POST["phone_number"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $checkEmailQuery = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($checkEmailQuery);

    if ($result->num_rows > 0) {
        echo "Error: Email already exists. Please choose a different email.";
    } else {
        $insertQuery = "INSERT INTO users (name, email, phone_number, password) 
                        VALUES ('$name', '$email', '$phone_number', '$password')";

        if ($conn->query($insertQuery) === TRUE) {
            session_start();
            $_SESSION["user_id"] = $conn->insert_id;

            header("Location: profile.php");
            exit();
        } else {
            echo "Error: " . $insertQuery . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>
