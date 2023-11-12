 <?php 
 
$firstName = $_POST['firstName'];
$lastName  = $_POST['lastName'];
$email     = $_POST['email']; 





 
$errors = [
  'firstNameError' => '',
  'lastNameError' =>'',
  'emailError' =>'',
];




if(isset($_POST['submit'])){
 // first name check
      if(empty($firstName)){
          $errors['firstNameError'] = 'First name is empty';

         

      }

      // last name check
       if(empty($lastName)){

        $errors['lastNameError'] = 'Last name is empty';

      }
      
      // email check 
       if(empty($email)){

        $errors['emailError'] = 'email is empty';

      }
      elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['emailError'] = 'emai is wrong';
      }



      // no errors

        if(!array_filter($errors)){
          $firstName = mysqli_real_escape_string($conn ,$_POST['firstName']);
          $lastName =  mysqli_real_escape_string($conn ,$_POST['lastName']);
          $email =    mysqli_real_escape_string($conn ,$_POST['email']);


          $sql = "INSERT INTO users(firstName,lastName,email)
                 VALUES ('$firstName','$lastName', '$email')";


                 if(mysqli_query($conn, $sql)){
                   header('Location: ' .  $_SERVER ['PHP_SELF']);
                   }else{
  
                     echo 'fail :' .mysqli_connect_error($conn);
                         }

        }
} 

 ?>