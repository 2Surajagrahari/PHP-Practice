<?php

$name = $email = $message = "";

function sanitize_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $message = filter_var($_POST["message"], FILTER_SANITIZE_SPECIAL_CHARS);
}

?>

<h2>PHP Form with Sanitization</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Name: <input type="text" name="name" value="<?php echo $name; ?>"><br><br>
    Email: <input type="email" name="email" value="<?php echo $email;?>"><br><br>
    Message: <textarea name="message" cols="30" rows="10"><?php echo $message; ?><br><br>
    <input type="submit" value="Submit">
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    echo "<h3>Sanitized Input</h3>";
    echo "Name: ". $name . "<br>";
    echo "Email: ". $email . "<br>";
    echo "Message: ". $message . "<br>";
    
}

?>