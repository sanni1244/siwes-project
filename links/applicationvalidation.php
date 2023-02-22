<?php
session_start();
$con = mysqli_connect('localhost','root','','siwesproject');
$db = $con;

$gen = $fname = $mylink = $state = $lname = $phone = $email = $address = $birth = $gender = $foa = $country = $countcode = "";

if(isset($_POST['submitit']) ) {
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
      if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $fname = ($_POST['fname']);
        $lname = ($_POST['lname']);
        $countcode = ($_POST['countcode']);
        $phone = ($_POST['phone']);
        $email = ($_POST['email']);
        $address = ($_POST['address']);
        $birth = ($_POST['birth']);
        $gender = ($_POST['gender']);
        $foa = ($_POST['foa']);
        $country = ($_POST['country']);
        $mylink = ($_POST['mylink']);
        $state = ($_POST['state']);

      
        $year =  $birth[0]. $birth[1]. $birth[2]. $birth[3];
        if($year > 2004){
             echo "<script> alert('You are not qualified to apply.')</script>
              <meta http-equiv='refresh' content='0; url=../index.php'>";
        }
        }
          if(empty($gender)){
            $gen = "Choose your gender";
          }
      else{
            $fname = test_input($fname);
            $lname = test_input($lname);
            $phone = test_input($phone);
            $countcode = test_input($countcode);
            $email = test_input($email);
            $address = test_input($address);
            $birth = test_input($birth);
            $gender = test_input($gender);
            $foa = test_input($foa);
            $country = test_input($country);
            $mylink = test_input($mylink);
            $state = test_input($state);

            $sql = "INSERT INTO `applytable` (`First Name`, `Last Name`, `Country Code`, `Phone Number`, `Email`, `Address`, `Date of Birth`, `Gender`, `Field`, `Country`, `State`, `Page`) VALUES ('$fname', '$lname', '$countcode', '$phone', '$email', '$address', '$birth', '$gender', '$foa', '$country', '$state','$mylink' )";  
           


          $sql_select ="SELECT * FROM `applytable` WHERE `Email` =  '$email'";
          // 
          $aa = mysqli_query($con, $sql_select);
          if(mysqli_num_rows($aa) != 0){
            echo "<b class='red'>Application already recieved!</b>";
          }
          else{
          $rs = mysqli_query($con, $sql);
          echo "<b class='red'>Application was a success </b>";
          echo "<meta http-equiv='refresh' content='1.5; url=../index.php'>";
        }
      }

      
      
    
    
    

    }
  
      ?>