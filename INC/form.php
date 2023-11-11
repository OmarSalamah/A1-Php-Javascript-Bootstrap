 <?php 
 

$firstName = mysqli_real_escape_string($conn ,$_POST['firstName']);
$lastName =  mysqli_real_escape_string($conn ,$_POST['lastName']);
$email =    mysqli_real_escape_string($conn ,$_POST['email']);

if(isset($_POST['submit'])){
 $sql = "INSERT INTO users(firstName,lastName,email)
    VALUES ('$firstName','$lastName', '$email')";

      if(empty($firstName)){

        echo 'First name is empty';

      }
      
      
      elseif(empty($lastName)){

        echo 'last name is empty';

      }
      
      
      elseif(empty($email)){

        echo 'email  is empty';

      }
      elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
          echo 'enter valid email';
      }



      else{


        if(mysqli_query($conn, $sql)){

            header('Location: index.php');
            }else{
            
                echo 'fail :' .mysqli_connect_error($conn);
            }

      }


  
} 

 
 
 
 ?>