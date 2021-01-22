<?php
$mysqli = new mysqli("localhost","root","","test");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
 $url  = explode("/",$_SERVER['REQUEST_URI']);
 $name = ($url[2]);
 $aname = ($url[3]);
 $amount =($url[4]);
// $ss =($url[5]);
 $input = "SELECT Amount FROM users WHERE user_name ='$name'";
 $input_1= "SELECT  Amount FROM users WHERE user_name='$aname'";
 $query = ($mysqli->query($input));
 $query_2= $query->fetch_array();

 $sub =$query_2['Amount']-$amount;
//  print_r($sub);
 $up = "UPDATE users SET Amount='$sub' WHERE user_name='$name'";
 if($mysqli->query($up)==True){
  echo "successfull";
}else {
  echo "not successfull".mysqli_error;
}

 $condition = ($mysqli->query($input_1));
 $query_3= $condition->fetch_array();
  $add = $amount+$query_3['Amount'];
  $up1 = "UPDATE users SET Amount='$add' WHERE user_name='$aname'";
 if($mysqli->query($up1)==True){
   echo "successfull";
 }else {
   echo "not successfull".mysqli_error;
 }

   
 //$am = "UPDATE users SET Amount = '$w+$x'";

 //  $up = "UPDATE users SET user_name='$name',Amount='$re',password= '$er',name='$ss' WHERE id='80'";
  //$time = "UPDATE  registartion_date SET  last_time =CURRENT_TIMESTAMP" ;
  //if(mysqli_query($mysqli,$up))
//   {
// echo "successfull";                                                                                                                                   
//   } 
//   else
//   {
//     echo " not  successfull" ;
//   }


  //$mydate = getdate(date('U'));
  // echo "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";
  
  
  
?>