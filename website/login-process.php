<?php
include 'connect.php';
session_start();

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['pswd'];

    try {
        
        $sql = "SELECT * FROM tbl_user WHERE email = :email";
        $stmt = $db->prepare($sql);

        $stmt->bindParam(':email', $email ,PDO::PARAM_STR);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Verify the password
        if ($user && password_verify($password, $user['password'])) {

            $_SESSION['userId'] = $user['userId'];
            $_SESSION['email'] = $user['email'];


            
            echo "Login successful!";
            header('Location:movies.php');

        } else {
            echo "Invalid email or password!";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

?>