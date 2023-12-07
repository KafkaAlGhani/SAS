<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">


<div class="collapse navbar-collapse" id="navbarNav">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="pengertian.php">Pengertian</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="latarbelakang.php">Latar Belakang</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="korban.php">Korban</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="bukutamu.php">Buku Tamu</a>
    </li>
  </ul>
</div>
<br>
<div class="container">
    <h1>Daftar Tamu</h1>

    <form action ="" method="POST" name ="penjualan">

  <div class="form-group">
    <label for="nm">Nama </label>
    <input type="text" class="form-control" id="nm" name="nm" Required>
  </div>
  <div class="form-group">
    <label for="kelas">kelas</label>
    <input type="text" class="form-control" id="kelas" name="kelas" Required>
  </div>
  <div class="form-group">
    <label for="jurusan">jurusan</label>
    <input type="text" class="form-control" id="jurusan" name="jurusan" Required>
  </div>
 
  <button type="submit" name="submit" class="btn btn-primary">Sumbit</button>

</form>

<hr>
    <?php
    if(isset($_POST['submit'])){
      $nama =$_POST['nm'];
      $kelas =$_POST['kelas'];
      $jurusan =$_POST['jurusan'];



    ?>
     <div class="container">

            <table class='table table-bordered'>
                <thead>
                    <tr>
                        <th >No</th>
                        <th >Nama</th>
                        <th >Kelas</th>
                        <th >Jurusan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>1</th>
                        <td><?php echo $nama ?></td>
                        <td><?php echo $kelas ?></td>
                        <td><?php echo $jurusan ?></td>

                    </tr>

                </tbody>
            </table>

    </div>
    <?php } ?>
    </div>
</body>
</html>