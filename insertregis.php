<?php
include 'config.php';

if (@$_POST['simpan']) {
  $name = @$_POST['nama_lengkap'];
  $email = @$_POST['email'];
  $passwordold = @$_POST['password'];

  $password = md5($passwordold);

  mysqli_query($connect, "INSERT INTO data(nama_lengkap,email,password) VALUES ('$name', '$email', '$password')");

?>

<script type="text/javascript">
  alert("SIMPAN berhasil");
  window.location.href="index.html"

</script>

<?php  }
 ?>