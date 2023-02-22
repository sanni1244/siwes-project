<?php
session_start();
$con = mysqli_connect('localhost','root','','siwesproject');
$db = $con;

$fname = $idnum = $fnameErr = $idnumErr = "";
if( isset($_POST['submitit']) ) {
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
      if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $fname = strtoupper($_POST['firstname']);
        $idnum = strtoupper($_POST['idnum']);
      

        if (empty($fname)) {
          $fnameErr = "Your first name is required";
        }
        elseif (empty($idnum)) {
          $idnumErr = "Provide your ID Number";
        }
        elseif(strlen($idnum) != 9 ){
          $idnumErr = "Enter a valid ID Number";
          $idnum = "";
      } 
      else {
        $fname = test_input($fname);
        $idnum = test_input($idnum);
        $sql_select ="SELECT ID FROM `infolog` WHERE `ID Number` =  '$idnum'";
        $sqln_select ="SELECT ID FROM `infolog` WHERE `First Name` =  '$fname'";
      $aa = mysqli_query($con, $sql_select);
      $ab = mysqli_query($con, $sqln_select);
      $ac = mysqli_fetch_row($aa);
      $ad = mysqli_fetch_row($ab);
    if(mysqli_num_rows($aa) == 0){
        echo "<b class='red'>Your ID number does not exist.</b>";
      }
      elseif(mysqli_num_rows($ab) == 0){
        echo "<b class='red'>Incorrect First Name entry</b>";
      }
      elseif(mysqli_num_rows($ab) > 1 or $ac == $ad) {
        $sqln_select ="SELECT ID FROM `infolog` WHERE `ID Number` =  '$idnum'";
        $ab = mysqli_query($con, $sqln_select);
        $ad = mysqli_fetch_row($ab);;
        $_SESSION['idnu'] = $idnum;
        $_SESSION['idnum'] = $ac;
        echo "<meta http-equiv='refresh' content='1.5; url=confirmation.php'>";
        header("location:links/dashboard.php");
      }
      else{
        echo "<b class='red'>This account does not exist</b>";
      }
}}}

    
?>