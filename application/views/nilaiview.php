<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Nilai</title>
    </head>
    <link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css">
    <body>
    <form action="" method="POST" class="form-group form-group-sm row">
        <div class="col-xs-3">
        <label for="">Kode MK</label>
        <input class="form-control" type="text" name="kodemk" />
        <label for="">NRP</label>
        <input class="form-control" type="text" name="nrp" />
        <label for="">Nama</label>
        <input class="form-control" type="text" name="nama" />
        <label for="">Tugas</label>
        <input class="form-control" type="text" name="tugas" />
        <label for="">UTS</label>
        <input class="form-control" type="text" name="uts" />
        <label for="">UAS</label>
        <input class="form-control" type="text" name="uas" />
        <input class="form-control" type="submit" name="btnSubmit" value="Submit" />
        </div>
    </form>
    <form action="" method="post">
    <table class="table">
        <tr>
            <th>Hapus</th>
            <th></th>
            <th>Kode MK</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Tugas</th>
            <th>UTS</th>
            <th>UAS</th>
            <th>Nilai Akhir</th>
            <th>Indeks</th>
        </tr>
    
    <?php
    $this->load->helper('file');
    if (isset($_SESSION['data_mhs'])) {
        // write file
        if (!write_file("C:\\xampp\\htdocs\\nilai\\jsondata\\nilai.json", json_encode($_SESSION['data_mhs']))) {
            echo "unable to write file";
        } else {
            echo "file written!";
        }
    }

    ?>

    <? if(isset($_SESSION['data_mhs'])) :?>
    <? foreach($_SESSION['data_mhs'] as $key => $row) :?>
    <tr>
    <td><a href="http://localhost/nilai/index.php/nilai_controller/delete/<? echo $key ?>">Hapus</a></td>
    <td><input type="checkbox" name="hapus" value="<? echo $key ?>"></td>
    <? foreach($row as $value) :?>
    <td><? echo $value ?></td>
    <? endforeach ?>
    </tr>
    <? endforeach ?>
    <? endif ?>

    </body>
   
    </html> 

    <!-- unset($_SESSION['data_mhs'][key($row)]); -->