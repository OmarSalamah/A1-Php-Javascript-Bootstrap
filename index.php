<?php


 


 include './INC/db.php';
 include './INC/form.php';

include './INC/select.php';
include './INC/db_close.php';
  
 
 

?>

 <!DOCTYPE html>
 <html lang="en"   dir= "rtl">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" ./css/bootstrap.rtl.min.css">
   <link rel="stylesheet" href="./CSS/style.css">
    <title>Document</title>
 </head>
 <body>
  

 <div class="container">

 
 <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 fw-normal">دورة التداول</h1>
      <p class="lead fw-normal"> متبقي فقط اربعة مقاعد </p>
      <p class="lead fw-normal"> : للتسجيل  </p>
      <a class="btn btn-outline-secondary" href="#">Coming soon</a>
    </div>
     




    <ul class="list-group list-group-flush">
  <li class="list-group-item"> دورة عن الاساسيات في التداول من الصفر الى الاحتراف</li>
  <li class="list-group-item">الاساسيات</li>
  <li class="list-group-item">الدعوم والمقاومة </li>
  <li class="list-group-item">المؤشرات</li>
   
</ul>
 

<form class ="mt-5"  action="index.php" method ="POST">
  <h3>    الرجاء ادخل معلوماتك </h3>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">First Name</label>
    <input type="text"  name="firstName"class="form-control" id="exampleInputEmail1" value ="<?php echo $firstName  ?>"aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"> <?php echo $errors['firstNameError'] ?> </div>
  </div>
 
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Last name</label>
    <input type="text"  name="lastName"class="form-control" id="exampleInputEmail1"value ="<?php echo $lastName  ?>" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"><?php echo $errors['lastNameError'] ?></div>
  </div>


  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="text" name="email" class="form-control" id="exampleInputEmail1" value ="<?php echo $email  ?>" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text error"><?php echo $errors['emailError'] ?></div>
  </div>





     
  <button type="submit" name ="submit" class="btn btn-primary">Submit</button>
</form>



 
</div>



  


    
 
 
<?php foreach($users as $user): ?> 
   <h1>  <?php echo htmlspecialchars( $user['firstName']) .' '. htmlspecialchars( $user ['lastName']) .' '. htmlspecialchars( $user ['email'])  ;?> </h1> ;
  <?php endforeach; ?>

 
  <script src=" ./js/bootstrap.bundle.min.js"  ></script>
<script src="./JS/script.js"></script>
 
 </body>
 </html>

 