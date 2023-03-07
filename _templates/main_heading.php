
<section class="py-5 text-center container">
<div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Welcome you to the PSGitech!!</h1>
        <p class="lead text-muted">Mission of the Institute->
To facilitate active learning and vocational training.
To encourage and promote questioning spirit and 'can-do' entrepreneurial attitude.
To foster industry - institute collaboration.
To ignite passion for creative work and selfless service towards a sustainable world.
To provide intellectually stimulating environment, conducive for research.</p>
        <p>
          <a href="#" class="btn btn-primary my-2">View results</a>
          <a href="#" class="btn btn-secondary my-2">New registration</a>
        </p>
      </div>
    </div>
    </section>




<?php
include '/../libs/load.php';
if(isset($_POST['submit'])){
  $firstname=$_POST['firstname'];
  $lastname=$_POST['lastname'];
  $aadhar=$_POST['aadhar'];
  $email=$_POST['email'];
$go=array($firstname,$lastname,$aadhar,$email);
 

}
?>

<center><b>REGISTRATION</b></center>
<form method="POST" action="index.php">
<section class="py-5 text-center container">
<form class="row g-3">
<div class="row g-3">
  <div class="col">
    
  <label for="inputAddress2" class="form-label">Firstname</label>
    <input name="firstname" type="text" class="form-control" placeholder="eg.Gowtham" aria-label="First name">
  </div>
  <div class="col">
    
  <label for="inputAddress2" class="form-label">Lastname</label>
    <input name="lastname" type="text" class="form-control" placeholder="eg.Ravi (optional)" aria-label="Last name" optional>
  </div>

  <div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Aadhar number</label>
  <input name="aadhar" type="text" class="form-control" id="formGroupExampleInput" placeholder="eg.675776764747">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">EmailId</label>
  <input name="email" type="text" class="form-control" id="formGroupExampleInput2" placeholder="eg.admin@mail.me">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Student mobile number</label>
  <input name="studphone" type="text" class="form-control" id="formGroupExampleInput2" placeholder="eg.9600620266">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Parent's mobile number</label>
  <input name="parentphone" type="text" class="form-control" id="formGroupExampleInput2" placeholder="eg.9600620266">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Date of birth</label>
  <input name="dob" type="text" class="form-control" id="formGroupExampleInput2" placeholder="eg.YYYY-MM-DD">
</div>
<div class="row g-3">
  <div class="col">
    
  <label for="inputAddress2" class="form-label">Father's name</label>
    <input type="text" class="form-control" placeholder="eg.Ravi" aria-label="First name">
  </div>
  <div class="col">
  <label for="floatingSelectGrid">Gender</label>
      <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
        <option selected>none</option>
        <option value="1">Male</option>
        <option value="2">Female</option>
        <option value="3">Others</option>
      </select>
    </div>
  </div>
</div>
<br>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label"> Occupation</label>
  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="eg.buisness">
</div>

  <div class="row g-3">
  <div class="col">
  <label for="inputAddress2" class="form-label">Address 2</label>
    <input type="text" class="form-control" placeholder="eg.16/117,kovilstreet" aria-label="First name">
  </div>
  <div class="col">
    
  <label for="inputAddress2" class="form-label">Address 2</label>
    <input type="text" class="form-control" placeholder="eg.muthuchettipalayam,avinashi" aria-label="Last name">
  </div>
</div>
<br>
<div class="row g-3">
  <div class="col">
    
  <label for="inputAddress2" class="form-label">School name</label>
    <input type="text" class="form-control" placeholder="eg.Park matriculation and higher secondary school" aria-label="First name">
  </div>
  <div class="col">
  <label for="floatingSelectGrid">Board of study</label>
      <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
        <option selected>none</option>
        <option value="1">HSC</option>
        <option value="2">CBSE</option>
        <option value="3">ICSE</option>
        <option value="4">Others</option>
      </select>
    </div>
  </div>
</div>
<br>
<div class="row g-3">
  <div class="col">
  <div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Community</label>
  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="eg.MBC">
</div>
<br>
<div class="row g-4">
  <div class="col-sm">
  <label for="formGroupExampleInput2" class="form-label">Chemistry mark</label>
    <input type="text" class="form-control" placeholder="eg.98" aria-label="City">
  </div>
  <div class="col-sm">
  <label for="formGroupExampleInput2" class="form-label">Maths mark</label>
    <input type="text" class="form-control" placeholder="eg.87" aria-label="State">
  </div>
  <div class="col-sm">
  <label for="formGroupExampleInput2" class="form-label">Physics mark</label>
    <input type="text" class="form-control" placeholder="eg.89" aria-label="Zip">
  </div>
  <div class="col-sm">
  <label for="formGroupExampleInput2" class="form-label">Cut-off mark</label>
    <input type="text" class="form-control" placeholder="eg.183" aria-label="Zip">
  </div>
</div>
<br>
<div class="row g-3">
<div class="col-sm">
    <label for="inputState" class="form-label">Preference-1</label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>BE civil</option>
      <option>BE Mechanical</option>
      <option>BE CSE</option>
      <option>BE EEE</option>
      <option>BE ECE</option>
      <option>BTech AI&DS</option>
      <option>BTech CSBS</option>
    </select>
  </div> <div class="col-sm">
    <label for="inputState" class="form-label">Preference-2</label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>BE civil</option>
      <option>BE Mechanical</option>
      <option>BE CSE</option>
      <option>BE EEE</option>
      <option>BE ECE</option>
      <option>BTech AI&DS</option>
      <option>BTech CSBS</option>
    </select>
  </div> <div class="col-sm">
    <label for="inputState" class="form-label">Preference-3</label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>BE civil</option>
      <option>BE Mechanical</option>
      <option>BE CSE</option>
      <option>BE EEE</option>
      <option>BE ECE</option>
      <option>BTech AI&DS</option>
      <option>BTech CSBS</option>
    </select>
  </div>
</div>
<br>
<div class="col-12">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
