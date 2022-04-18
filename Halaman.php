<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>BMI</title>
  </head>
  <body>
  
      <h1> Menghitung BMI </h1>
    <div class="container d-flex justify-content-center">
        <div class="card shadow" style="width:18rem">
            <div class="card-body">
                <form action="Halaman.php" method="get">
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" class="form-control" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Kelamin</label>
                        <input type="text" class="form-control" name="gender">
                    </div>
                                    
                     <div class="form-group">
                        <label for="">Umur</label>
                        <input type="text" class="form-control" name="usia">
                    </div>
                    <div class="form-group">
                        <label for="">Tinggi Badan</label>
                        <input type="text" class="form-control" name="tb">
                    </div>
                    <div class="form-group">
                        <label for="">Berat Badan</label>
                        <input type="text" class="form-control" name="bb">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-danger btn-sm mt-2" name="hitung"> Hitung </button>
                </form>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>
</html>

<?php require_once "Hasil_BMI.php"; ?>

<h1>DATA PASIEN </h1>
<table class="table" border="1" width="100%">
    <thead>
        <tr>
            <th>Nomor</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Umur</th>
            <th>Tinggi</th>
            <th>Berat</th>
            <th>Nilai BMI</th>
            <th>Kategori</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $nomor= 1;
            foreach ($ar_pasien as $pasien){
        
            echo  '<tr> <td> '.$nomor . '</td>';
            echo  '<td> '.$pasien ['name'] .' </td>';
            echo  '<td> '.$pasien ['jeniskelamin'] .' </td>';
            echo  '<td> '.$pasien ['umur'] .' </td>';
            echo  '<td> '.$pasien ['tinggi'] .' </td>';
            echo  '<td> '.$pasien ['berat'] .' </td>';
            $BMI = $pasien ["berat"] / (($pasien ["tinggi"] / 100 ) ** 2);
            echo '<td>' . number_format ($BMI,1) . '</td>';
            $status = new DataBmi;
            echo $status->statusBMI($BMI);
            echo '</tr>';

            $nomor++;
        }
        ?>
         
    </tbody>
</table>

</body>
</html>