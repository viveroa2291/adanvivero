<?php 
session_start();

function emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) {
    $result; 

    if(empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}
function invalidUid($username) {
    $result; 
    
    // Search parameter that checks if it matches up 
    if(!preg_match("/^[a-zA-Z0-9]*$/", $username))  {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}
function invalidEmail($email) {
    $result; 
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL))  {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}
function pwdMatch($pwd, $pwdRepeat) {
    $result; 
    
    if ($pwd !== $pwdRepeat)  {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}
function uidExists($conn, $username, $email) {
    $sql = "SELECT * FROM usersProfiles WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);

    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt); 
}
function createUser($conn, $name, $email, $username, $pwd) {
    
    $sql = "INSERT INTO usersProfiles (usersName, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    /*
    $sql = "INSERT INTO usersProfiles (usersName, usersEmail, usersUid, usersPwd) VALUES ('$name', '$email', '$username','$pwd');";
    mysqli_query($conn, $sql);
    
    // Below is for the images....
    $sqlImg = "SELECT * FROM usersProfiles WHERE usersUid='$username'";
    $resultImg = mysqli_query($conn, $sqlImg);

    if(mysqli_num_rows($resultImg) > 0) {
        while($row = mysqli_fetch_assoc($resultImg)) {
            $userid = $row['usersId'];
            $sql = "INSERT INTO profileimg (userid, status) VALUES ('$userid', 1)";
            mysqli_query($conn, $sql);
            header("Location: profile.php");
        }
    }
    else {
        echo "You failed, Good Day Sir";
    }
    */
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");
    exit();
}
function createUserProfilePicture ($conn, $username) {
    $sql = "INSERT INTO user (username) VALUES ('$username');";
    mysqli_query($conn, $sql);
    // Below is for the images....
    $sqlImg = "SELECT * FROM user WHERE username='$username'";
    $resultImg = mysqli_query($conn, $sqlImg);

    if(mysqli_num_rows($resultImg) > 0) {
        while($row = mysqli_fetch_assoc($resultImg)) {
            $userid = $row['id'];
            $sql = "INSERT INTO profileimg (userid, status) VALUES ('$userid', 1)";
            mysqli_query($conn, $sql);
            header("Location: profile.php");
        }
    }
    else {
        echo "You failed, Good Day Sir";
    }
}
function emptyInputLogin($username, $pwd) {
    $result; 

    if(empty($username) || empty($pwd)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}
function loginUser($conn, $username, $pwd) {
     $uidExists = uidExists($conn, $username, $username);

     if($uidExists === false) {
         header("location: ../login.php?error=wronglogin");
         exit();
     }
     $pwdHashed = $uidExists["usersPwd"];
     $checkPwd = password_verify($pwd, $pwdHashed);

    if($checkPwd === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
     }
     else if ($checkPwd === true) {
         session_start();
         $_SESSION["userid"] = $uidExists["usersId"];
         $_SESSION["useruid"] = $uidExists["usersUid"];
         $_SESSION["username"] = $uidExists["usersName"];
         header("location: ../index.php");
         exit();
     }
}