 <?php 
 

$firstName = mysqli_real_escape_string($conn ,$_POST['firstName']);
$lastName =  mysqli_real_escape_string($conn ,$_POST['lastName']);
$email =    mysqli_real_escape_string($conn ,$_POST['email']);


$errors = [
  'firstNameError' => '',
  'lastNameError' =>'',
  'emailError' =>'',
];




if(isset($_POST['submit'])){
 $sql = "INSERT INTO users(firstName,lastName,email)
    VALUES ('$firstName','$lastName', '$email')";

      if(empty($firstName)){
          $errors['firstNameError'] = 'First name is empty';

         

      }

      
       if(empty($lastName)){

        $errors['lastNameError'] = 'Last name is empty';

      }
      
      
       if(empty($email)){

        $errors['emailError'] = 'email is empty';

      }
      elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['emailError'] = 'emai is wrong';
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