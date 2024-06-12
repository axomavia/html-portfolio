<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $referral = $_POST['referral'];
    $utn = $_POST['utn'];
    
    // Open the file in append mode
    $file = fopen("users.txt", "a");
    // Write the user data to the file
    fwrite($file, $username . "," . $email . "," . $phone . "," . $password . "," . $referral . "," . $utn . "\n");
    // Close the file
    fclose($file);
    
    echo "Signup successful!";
}
?>
