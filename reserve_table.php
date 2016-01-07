<!DOCTYPE html>
<?php
session_start();
                  
include 'header.php';

include 'db_connect.php';        

?>
    <?php
// Get all the information from post
 $postname= isset($_POST['name']) ? $_POST['name'] :"";
 $postemail= isset($_POST['email']) ? $_POST['email'] :"";
 $postNum= isset($_POST['numOfPeople']) ? $_POST['numOfPeople'] :"";
 $posttime= isset($_POST['time']) ? $_POST['time'] :"";
 $postphoneNum= isset($_POST['phoneNum']) ? $_POST['phoneNum'] :"";
 $postdate= isset($_POST['somedate']) ? $_POST['somedate'] :"";
  


// define variables and set to empty values
$nameErr = $emailErr= $phoneErr= $dateErr= "";
$name = $email = $phone = $dateErr = "";
$submitError =0;
$status="";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])  ) {
   $dateErr = $_POST["hiddenDateBox"];
   if($dateErr == "Invalid Date")
       $submitError=0;
   if (empty($_POST["name"])) {
     $nameErr = "Name is required";
       $submitError =1;
   } else {
     $name = test_input($_POST["name"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
       $nameErr = "Only letters and white space allowed"; 
         $submitError =1;
     }
   }
   if (empty($_POST["email"])) {
     $emailErr = "Email is required";
       $submitError =1;
   } else {
     $email = test_input($_POST["email"]);
     // check if e-mail address is well-formed
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "Invalid email format"; 
         $submitError =1;
     }
   }
     if (empty($_POST["phoneNum"])) {
     $phoneErr = "Phone Number is required";
       $submitError =1;
   } else {
         $phone = test_input($_POST["phoneNum"]);
     if(!preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/", $phone)) {
  // $phone is invalid
         $phoneErr = "invalid phone number";
          $submitError =1;
      }
   }
  
    
  $postname=$db -> quote($postname);
  $postemail=$db -> quote($postemail);
  $postNum=$db -> quote($postNum);
  $posttime=$db -> quote($posttime);
  $postphoneNum=$db -> quote($postphoneNum);
 $postdate=$db ->quote( $postdate);
  
   if ($submitError==0){
     
 //insert reservation data in to table   
$db->exec("INSERT INTO reservations(name,email,phone,time,num,date) VALUES ($postname, $postemail,$postphoneNum,$posttime,$postNum,$postdate)");
       $reserveId=$db->lastInsertId ();
       $status = "Table Reserved<br><br>Confirmation number 10".$reserveId;
       
   }
    
   else{
        $status = "Table Not Reserved";
   
   }
    
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

?> 

      
<div id="reserve-content">
<div id="reserve">
<h1 id="reservetableheading">Reserve a Table</h1>
<br>
 <p class="status_table"> <?php echo $status ?> </p>
<br>
<form class="formdata" method="post" action=""> 
    <span class="fields">Name:</span>  <input type="text" name="name" value="<?php echo $name;?>">
   <span class="error">* <?php echo $nameErr;?></span>
   <br><br>
  <span class="fields">  E-mail:</span> <input type="text" name="email" value="<?php echo $email;?>">
   <span class="error">* <?php echo $emailErr;?></span>
   <br><br>
 
<p>
    <span class="fields"> Phone: </span><input type='text' name='phoneNum' value="<?php echo $phone;?>" />
   <span class="error">* <?php echo $phoneErr;?></span>
   </p>
   <br>
   <p>
  <span class="fields">  People:</span>
    
    <select name="numOfPeople" id="numPeople">
     <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      
    </select>

  </p>
  <br>
  <p>
 <span class="fields">   Time:</span>
    
    <select name="time">
     <option value="1">12:00 PM</option>
      <option value="2">12:30 PM</option>
      <option value="3">01:00 PM</option>
      <option value="4">01:30 PM</option>
       <option value="5">02:00 PM</option>
      <option value="6">02:30 PM</option>
      <option value="7">06:00 PM</option>
      <option value="8">06:30 PM</option>
       <option value="9">07:00 PM</option>
       <option value="10">07:30 PM</option>
       <option value="11">08:00 PM</option>
    </select>

  </p>
  <br>
  <p>
      <span class="fields"> Date:</span>
      <input name="somedate" type="date" min="2015-12-02">
 
    <span class="error">* </span>
    <span id="dateErr"><?php echo $dateErr;?></span>
    <INPUT TYPE="text" id="myDate" NAME="hiddenDateBox" style="display: none">
    
    </p>
   <p>
  
    
    </p>
    <br><br>
 
 <input id="reservebutton" class="button" type="submit" name="submit" value="Book Table"> 
 <br> <br>

</form>
</div>   
    </div>
    <script>
      $(document).ready(function() {
      var today = new Date();
      today.setDate(today.getDate() - 1);
         
      document.getElementsByName("somedate")[0].setAttribute('min', today.toISOString().split('T')[0]);
                 $('#reservebutton').css({"border": "0px", "cursor": "pointer"})
      });

    </script>     
<?php include("footer.php"); ?>