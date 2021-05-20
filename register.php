<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous" />

  <title>Register</title>
</head>

<body>
  <div class="container">
    <h2 class="alert alert-primary text-center mt-3">REGISTER</h2>
  </div>
  <form action="register.php" method="POST">
    <div class="form-group">
      <label>Username :</label>
      <input type="text" name="username" class="form-control" placeholder="username">

    </div>
    <div class="form-group">
      <label>Password :</label>
      <input type="password" name="password" class="form-control" placeholder="password">
    </div>
    <div class="form-group">
      <label>Email :</label>
      <input type="email" name="email" class="form-control" placeholder="email">
    </div>
    <div class="form-group">
      <label>Kontak :</label>
      <input type="number" name="kontak" class="form-control" placeholder="Opsional">
      <br>
      <div class="form-group">
        <button type="submit" id="btn" class="btn btn-primary mb-3" [disabled]="!form.form.valid">
          Register

        </button>
      </div>
    </div>

  </form>
  <div class="form-group">
    <label class="form-control"> Identitas Anda :</label>
  </div>
 
 
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    -->
</body>

</html>
<?php
  $username=$_POST['username'];
  $password=$_POST['password'];
  $email=$_POST['email'];
  $kontak=$_POST['kontak'];
  echo "Username : ",@$username,"<br>";
  echo "Password : ",@$password,"<br>";
  echo "Email : ",@$email,"<br>";
  echo "Kontak : ",@$kontak,"<br>";
  ?>