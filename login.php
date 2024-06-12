<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Open the file for reading
    $file = fopen("users.txt", "r");
    $found = false;
    
    // Loop through each line in the file
    while (!feof($file)) {
        $line = fgets($file);
        $data = explode(",", $line);
        // Check if username and password match
        if ($data[0] == $username && rtrim($data[3]) == $password) { // Assuming password is stored in the fourth position
            $found = true;
            break;
        }
    }
    fclose($file);
    
    if ($found) {
        echo "Login successful!";
    } else {
        echo "Invalid username or password!";
    }
}
?>
