<?php 

include './inc/db.php';
INCLUDE './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';

?>

<?php include_once './parts/hesder.php'; ?>




<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.rtl.min.css" >
    <link rel="stylesheet" href="./css/style.css">
    <title>ROO7</title>
</head>
<body>




<div class="position-relative  text-center ">
    <div class="col-md-5 p-lg-5 mx-auto my-5">

<img src="images/haider-icon.jpg" alt="">

      <h1 class="display-4 fw-normal"> Roo7 </h1>
      <p class="lead fw-normal">باقي على فتح التسجيل</p>
      <h2 id="countdown"></h2>
      <p class="lead fw-normal">للسحب على ربح نسخه مجانيه من برنامج</p>
      <a class="btn btn-outline-secondary" href="#">Coming soon</a>

<h3>للدخول في السحب يرجى اتباع مايلي:</h3>

      <ul class="list-group list-group-flush">
  <li class="list-group-item">تابع البث المباشر على صفحتي على الفيس بوك بالتاريخ المذكور اعلاه</li>
  <li class="list-group-item"> سأقوم ببث مباشر لمده ساعه عباره عن أسئله واجوبه حره للجميع</li>
  <li class="list-group-item"> خلال فتره الساعه سيتم فتح صفحه التسجيل هنا حيث ستقوم بتسجيل اسمك وايميلك</li>
  <li class="list-group-item"> بناهيه البثسيتم اختيار واحد من قاعده البيانات بشكل عشوائي </li>
  <li class="list-group-item">الرابح سيحصل على نسخه مجانيه من برنامج كامنازيا</li>
</ul>
    </div>

  </div>



  
<div class="container">

<div class="position-relative  text-center ">
    <div class="col-md-5 p-lg-5 mx-auto my-5">

<form action="<?php $_server['PHP_SELF'] ?>" method="POST">
    <h3>الرجاء ادخل معلوماتك</h3>
  <div class="mb-3">
    <label for="firstName" class="form-label">الاسم الاول</label>
    <input type="text" name="firstName" id="firstName" class="form-control"  value="<?php echo $firstName ?>" >
    <div  class="form-text error"><?php echo $errors ['firstNameError'] ?> </div>
  </div>

  <div class="mb-3">
    <label for="lastName" class="form-label">الاسم الاخير</label>
    <input type="text" name="lastName" id="lastName" class="form-control"  value="<?php echo $lastName ?>" >
    <div  class="form-text error"><?php echo $errors ['lastNameError'] ?></div>
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">البريد الالكتروني</label>
    <input type="text" name="email" id="email" class="form-control"  value="<?php echo $email ?>" >
    <div  class="form-text error"><?php echo $errors ['emailError'] ?></div>
  </div>
  

  <button type="submit" name="submit" class="btn btn-primary">ارسال المعلومات</button>
</form>


</div>

  </div>
    
    </div>







  <div class = "loader-con">
  <div id="loader">
	<canvas id="circularLoader" width="200" height="200"></canvas>
  </div>
  </div>


<!-- Button trigger modal -->
<div class = "d-grid gap-2 col-6 mx-auto my-5">
<button type="button" id = "winner" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal">
  اختيار الرابح
</button>
</div>

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
      
        <h5 class="modal-title" id="modalLabel">الرابح في المسابقه</h5>
      
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php foreach($users as $users):?>
        <h1 class=" display-3 text-center modal-title" id="modalLabel"><?php echo htmlspecialchars($users['firstName']) . ' ' .htmlspecialchars($users['lastName']); '<br>'  ?></h1>
        <?php endforeach; ?>
      </div>
      
    </div>
  </div>
</div>








<div id= "cards" class="row mb-5 pb-5">

<div class= "col-sm-6">

    <div class= "card my-2 bg-light">

        <div class = "card-body">
            <h5 class = "card=title"></h5>
            <!--
            <p class= "card=text"><?php echo htmlspecialchars($users['email']) ?></p>
      -->

</div>
</div>
</div>
</div>
    
    
</div>
    

 <?php include_once './parts/footer.php'; ?>