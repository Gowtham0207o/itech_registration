<?php
include 'libs/load.php';
   $data=$_POST;
  $result=user::upload($data);
   if (!$result) {
    ?>
    <main class="container">
<div class="bg-dark p-4"  style=margin:-1px;>
  <h1>Register success</h1>
  <p class="lead"> Thankyou for showing your interest in psgitech wait for your results</p>
  <a class="btn btn-lg btn-primary" href="/studinfo/" role="button">view result »</a>
</div>
</main>
<?
} else {
    ?>


<main class="container">
<div class="bg-dark p-3"  style=margin:-1px;>
  <h1>Regiteration failed</h1>
  <p class="lead"> <?echo "you may not follow the exact format of the form please submit an another form"; ?></p>
  <a class="btn btn-lg btn-primary" href="/studinfo/" role="button">submit another »</a>
</div>
</main>
<?}
   
?>