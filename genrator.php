<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "form";
    $con = new mysqli($host, $user, $pass, $db);
    if (!$con) {
        echo "there are some problem while connecting the database";
    }
    $qry = "TRUNCATE TABLE random";
    if ($con->query($qry) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $con->error;
    }
    
    $num = $_POST['genratenum'];
    function generateDate()
    {
        $int = rand(1162055681, 1262055681);
        $string = date("Y-m-d H:i:s", $int);
        return $string;
    }
    function generateGender()
    {
        $charactersGender = array("male", "female", "other");
        $randomGender = $charactersGender[rand(0, 2)];
        return $randomGender;
    }
    function generateRandomString($length = 10)
    {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    
    $qry = "INSERT INTO `random`(`name`, `email`, `gender`, `date`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]')";
    for ($count = 0; $count < $num; $count++) {
        $randomstring = generateRandomString();
        $randomemail = generateRandomString();
        $randomgender = generateGender();
        $randomdate = generateDate();
        $qry = "INSERT INTO `random`(`name`, `email`, `gender`, `date`) VALUES ('$randomstring','$randomemail','$randomgender','$randomdate')";
        $insert = mysqli_query($con, $qry);
    }
    if (!$insert) {
        echo "there are some problem while inserting data";
    } else {
        echo "data inserted";
    }
    
    
    function redirect() {
        header('Location: http://localhost/form-2/table.php');
        die();
    }
    redirect();
    
    ?>