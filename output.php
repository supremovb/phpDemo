<?php
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $email = $_POST["email"];
        
        $username = $_POST["username"];

        $password = $_POST["password1"];

        $confirm_password = $_POST["confirm-password"];

      //  echo json_encode(($_POST));

        // VALIDATE USERNAME
        
        
if(trim($username) != "") {
    echo "USER username is NOT EMPTY<br>"; 
} else {
    echo "field username is empty<br>";
} 

// VALIDATE EMAIL
if(trim($email) != "") {
    echo "USER email is NOT EMPTY<br>";
} else {
    echo "field email is empty<br>";
}

// VALIDATE PASSWORD
if(trim($password) != "") {
    echo "USER password is NOT EMPTY<br>";
} else {
    echo "field password is empty<br>";
}

// VALIDATE CONFIRM PASSWORD
if(trim($confirm_password) != "") {
    echo "USER confirm_password is NOT EMPTY<br>";
} else {
    echo "field confirm_password is empty<br>";
}
    

        //echo "USER email is ".$email."<br>"; 

        // echo "USER username is ".$username."<br>";

        //echo "USER password is ".$password."<br>";

        //echo "USER confirm password is ".$confirm_password."<br>";

        // function caller
    test($username);

    // dummyFunction("liga");
}

if($password == $confirm_password) {
    header("location: demo1.php?success=REGISTRATION SUCCESFUL");
} else {
    header("location: demo1.php?error=PASSWORDS DO NOT MATCH");
    exit;
}


function dummyFunction($x) {
    echo "dummy function value is ".$x;
}

// function to be called
function test ($fieldName) {
    if(trim($fieldName) != "") {
        echo "USER field is NOT EMPTY<br>";
    } else {
        echo "field $$fieldName is empty<br>";
    }
}


?>