<?php


 


 include './INC/db.php';
 include './INC/form.php';

include './INC/select.php';
include './INC/db_close.php';
  
 
 

?>

 <?php  include_once './parts/header.php';     ?>
  

 

 
 <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <img src="IMAGES/x.jpg" alt="">
      <h1 class="display-4 fw-normal">دورة التداول</h1>
      <p class="lead fw-normal"> متبقي فقط اربعة مقاعد </p>
      <p class="lead fw-normal">الوقت المتبقي للتسجيل : </p>
      <h3 id="countdown"></h3>
      <!--<p class="lead fw-normal">    </p>-->
      <a class="btn btn-outline-secondary" href="#">Coming soon</a>
    </div>
</div>



 
    <ul class="list-group list-group-flush">
  <li class="list-group-item"> دورة عن الاساسيات في التداول من الصفر الى الاحتراف</li>
  <li class="list-group-item">الاساسيات</li>
  <li class="list-group-item">الدعوم والمقاومة </li>
  <li class="list-group-item">المؤشرات</li>
   
</ul>
 
 
<div class="position-relative   text-center ">
    <div class="col-md-5 p-lg-5 mx-auto my-5">

<form    action=" <?php $_SERVER ['PHP_SELF'] ?>" method ="POST">
  <h3>    الرجاء ادخل معلوماتك </h3>

  <div class="mb-3">
    <label for="firstName" class="form-label">First Name</label>
    <input type="text"  name="firstName" id="firstName" class="form-control"  value ="<?php echo $firstName  ?>" >
    <div   class="form-text error"> <?php echo $errors['firstNameError'] ?> </div>
  </div>
 
  <div class="mb-3">
    <label for="lastName" class="form-label">Last name</label>
    <input type="text"  name="lastName"id="lastName"class="form-control" value ="<?php echo $lastName  ?>" >
    <div   class="form-text error"><?php echo $errors['lastNameError'] ?></div>
  </div>


  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="text" name="email" id="email" class="form-control"  value ="<?php echo $email  ?>"  >
    <div   class="form-text error"><?php echo $errors['emailError'] ?></div>
  </div>





     
  <button type="submit" name ="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>


 
 
<?php foreach($users as $user): ?> 
   <h1>  <?php echo htmlspecialchars( $user['firstName']) .' '. htmlspecialchars( $user ['lastName']) .' '. htmlspecialchars( $user ['email'])  ;?> </h1> ;
  <?php endforeach; ?>

 
 <?php  include_once './parts/footer.php'; ?>  ?>