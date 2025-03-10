<?php
$message = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $password = $_POST["Password"];
    $confirm_password = $_POST["Confirm_Password"];

    if(strlen($password) < 8){
        $message = "Password must be at least 8 characters long.";
    }
    else if(!preg_match("/[A-Z]/",$password)){
        $message = "Password must contain at least one uppercase letter.";
    }
    else if(!preg_match("/[@$!%*?&]/",$password)){
        $message = "Password must contain at least one special character.";
    }
    else if($password !== $confirm_password){
        $message = "Passwords do not match.";
    }
    else{
        $name = "Password is valid";
    }
}

?>

<form method="post">
    <input type="password" name="Password" placeholder="Enter Password" required>
    <input type="password" name="Confirm_Password" placeholder="Confirm Password" required>
    <button type="submit">Submit</button>
</form>
<p><?php echo $message; ?></p>