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
        <label for="">Nama MK</label>
        <input class="form-control" type="text" name="namamk" />
        <label for="">SKS</label>
        <input class="form-control" type="text" name="sks" />
        <label for="">NRP</label>
        <input class="form-control" type="text" name="nrp" />
        <label for="">Nama</label>
        <input class="form-control" type="text" name="nama" />
        <label for="">Semester</label>
        <input class="form-control" type="text" name="semester" />
        <label for="">Tugas</label>
        <input class="form-control" type="text" name="tugas" />
        <label for="">UTS</label>
        <input class="form-control" type="text" name="uts" />
        <label for="">UAS</label>
        <input class="form-control" type="text" name="uas" />
        <input class="form-control" type="submit" name="btnSubmit" value="Submit" />
        </div>
    </form>
    <a href="http://localhost/nilai/index.php/khs_controller"><button class="btn btn-default">LIHAT KHS</button></a>
    <form action="" method="post">
    <table class="table">
        <tr>
            <th>Nama MK</th>
            <th>SKS</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Semester</th>
            <th>Tugas</th>
            <th>UTS</th>
            <th>UAS</th>
            <th>Nilai Akhir</th>
            <th>Indeks</th>
            <th>Hapus</th>
            <th>Multiple Hapus</th>
        </tr>
     
    <? if (count($dataku) > 0) :?>
    <? foreach($dataku as $key => $row) :?>
    <tr>
    <? foreach($row as $value) :?>
    <? endforeach ?>

    <? foreach($value as $data) :?>
    <td><? echo $data ?></td>
    <?endforeach?>
    <td><a href="http://localhost/nilai/index.php/nilai_controller/delete/<? echo $key ?>">Hapus</a></td>
    <td><input type='checkbox' name='checkbox[]' value=<? echo $key ?>></td>
    </tr>
    <? endforeach ?>
    <? endif ?>
    
    <input type="submit" name="checkboxsbmt" value="Hapus" class="pull-right btn btn-danger">
    <?php 
    if (isset($_POST['checkboxsbmt'])) 
    {
        if (!isset($_SESSION['multihps'])) {
            $_SESSION['multihps'] = $_POST['checkbox'];
        }
        header("Location: http://localhost/nilai/index.php/nilai_controller/delete_multiple/");
        exit();
    }
    ?>

    </body>
   
    </html> 