<?php

   $connection = mysqli_connect('localhost','root','123456','book_db');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $location = $_POST['location'];
      $guests = $_POST['guests'];
      $arrival = $_POST['arrival'];
      $departure = $_POST['departure'];

      $request = " insert into book_form(name, email, phone, address, location, guests, arrival, departure) values('$name','$email','$phone','$address','$location','$guests','$arrival','$departure') ";
      mysqli_query($connection, $request);

      header('location:book.php'); 

   }else{
      echo 'Something went wrong, please try again!';
   }

   // if($request){
   //    echo "<script>alert('You have succesfully inserted the data');</script>";
   // }
   // else {
   //    echo "<script>alert('Something went wrong, please try again!');</script>";
   // }

?>