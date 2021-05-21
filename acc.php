<?php
  $username=$_POST['username'];
  $password=$_POST['password'];
  $email=$_POST['email'];
  $kontak=$_POST['kontak'];
  if ($username==null) {
    # code...
    echo "Username : anda tidak mengisi username","<br>";
  } else{
    echo "Username : ",@$username,"<br>";
  }
  if ($email==null) {
    # code...
    echo "email : anda tidak mengisi email","<br>";
  } else{
    echo "email : ",@$email,"<br>";
  }
  if ($password==null) {
    # code...
    echo "password : anda tidak mengisi password","<br>";
  } else{
    echo "password : ",@$password,"<br>";
  }
  if ($kontak==null) {
    # code...
    echo "Kontak : anda tidak mengisi kontak","<br>";
  } else{
    echo "Kontak : ",@$kontak,"<br>";
  }
  if($username && $password && $email && $kontak !=null){
    ?>
    <div class="form-group">
      <label>Selamat anda Terdaftar</label>

    </div>
    <?php
  } else{
    ?>
    <form action="register.php">

    <div class="form-group">
    <label>Format tidak lengkap</label>
    <button type="submit" id="btn" class="btn btn-primary mb-3" [disabled]="!form.form.valid">
      Kembali
    
    </button></div>
    </form>
  }
    
    <?php

  }
  ?>
  <form action="register.php">

  <div class="form-group">
      <label>Selamat anda Terdaftar</label>

    </div>
  </form>
 
