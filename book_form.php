<?php

    $connection = mysqli_connect('localhost', 'root', '', 'book_db');
    
    if(isset($_POST['send'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $packages = $_POST['packages'];
        $books = $_POST['books'];

        $request = " insert into book_form(name, email,	phone, address,	packages, books) values('$name', '$email', '$phone', '$address', '$packages', '$books') ";

        mysqli_query($connection, $request);

        header('location:order.php');
    }else{
        echo 'something went wrong try again';
    }

?>