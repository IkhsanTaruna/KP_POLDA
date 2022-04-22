<!DOCTYPE html>
<html lang="en">
<head>
<link rel = "shorcut icon" href="logo.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Wifi</title>
    <link rel="stylesheet" type="text/css" media ="screen" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href = "https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href = "https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
</head>
<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">BID TEKKOM POLDA SUMSEL </a>  
    </button>
    <div class="   navbar" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" href="#">Home</a>
        <a class="nav-link" href="tablewifi.php">Internet</a>
        <a class="nav-link" href="tabelcctv.php">CCTV</a>

      </div>
    </div>
  </div>
</nav>
<br>
<br>
<br>

<div class="container">
<h4>Tabel Data WIFI Polda Sumsel</h4>
<table id="example" class="table table-striped table-bordered" style="width:100%">
          <thead>
           <tr>
             <th>Lokasi </th>
             <th>Jenis Layanan</th>
             <th>Kecepatan</th>
             <th>Nomor Wifi</th>
             <th>update</th>
             <th>delete</th>
           </tr>
           <a href=""></a>
           </thead>
           
           <tbody>
           <?php
           include 'koneksi.php';
           //query koneksi ke database
           $wifi = mysqli_query($koneksi,"SELECT * FROM subbid_tekkom.wifi");
           //error check
          //var_dump(mysqli_error($koneksi));
           //looping row tabel
           while($row = mysqli_fetch_array($wifi))
           {
             echo "<tr>
              <td>".$row['lokasi']."</td> 
              <td>".$row['nama_provider']."</td> 
              <td>".$row['kecepatan']."</td> 
              <td>".$row['nowifi']."</td> 
              <td> <a href=\"ubah.php?lokasi=".$row['lokasi']." \"><button>Update</button></a></td>
              <td> <a href=\"hapus.php?lokasi=".$row['lokasi']." \"onclick =\" return confirm('yakin?');\" ><button>Delete</button></a> </td>
             </tr>";
           }
          ?>
          </tbody>
        </table>
        <a href="tambah.php"><button>Tambah Data</button></a>
        </div>
        <script>
            //script datatable
         $(document).ready(function() {
          $('#example').DataTable();
          } ); 
          
        </script>
        
</body>
</html>