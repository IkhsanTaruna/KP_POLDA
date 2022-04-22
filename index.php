<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" media ="screen" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href = "https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href = "https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
</head>
<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="#">Home</a>
        <a class="nav-link" href="#">Internet</a>
        <a class="nav-link" href="#">CCTV</a>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
          <thead>
           <tr>
             <th>Lokasi </th>
             <th>Nama Provider </th>
             <th>Kecepatan</th>
             <th>Nomor Wifi</th>
           </tr>
           </thead>
           <tbody>
           <?php
           include 'koneksi.php'
           $wifi = mysqli_query($koneksi,"select * from wifi");
           while($row = mysqli_fetch_array($wifi))
           {
             echo "<tr>
              <td>".$row['lokasi']."</td> 
              <td>".$row['nama_provider']."</td> 
              <td>".$row['kecepatan']."</td> 
              <td>".$row['nowifi']."</td> 
             
             </tr>";
           }
          ?>
          </tbody>
        </table>
        <script>
         $(document).ready(function() {
          $('#example').DataTable();
          } ); 
          
        </script>
      </div>
    </div>
  </div>
</nav>

</body>
</html>