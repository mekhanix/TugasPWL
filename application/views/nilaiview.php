<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Nilai</title>
    </head>
    <link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
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
    
    <a target="_blank" href="<?echo base_url('index.php/KHS_Controller');?>"><button class="btn btn-default">LIHAT KHS</button></a>
    <form action="" method="post">
    <table class="table">
        <tr>
            <th>id</th>
            <th>Kode MK</th>
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
            <th>Nxk</th>
            <th>Hapus</th>
            <th>Multiple Hapus <input onClick="checkAll(this)" type='checkbox'> </th>
        </tr>
     

    <? if(count($hasilSelect) > 0) :?>
    <? foreach($hasilSelect as $row) :?>
    <tr>
        <? foreach($row as $data) :?>
        <td><? echo $data ?></td>
        <? endforeach ?>
        <td><a href="<?echo base_url('index.php/Nilai_Controller/delete/'.$row['id']);?>">Hapus</a></td>
        <td><input type='checkbox' name='checkbox[]' value=<? echo $row['id'] ?>></td>
    </tr>
    <? endforeach ?>
    <input type="submit" name="checkboxsbmt" value="Hapus" class="pull-right btn btn-danger">
    <? endif ?>

    <?php 
    if (isset($_POST['checkboxsbmt'])) 
    {
        if (!isset($_SESSION['multihps'])) {
            $_SESSION['multihps'] = $_POST['checkbox'];
        }
        header("Location: ".base_url("index.php/Nilai_Controller/delete_multiple/"));
        exit();
    }
    ?>

    <script>
        function checkAll(){
        var checkboxes = document.getElementsByTagName('input'), val = null;    
        for (var i = 0; i < checkboxes.length; i++){
         if (checkboxes[i].type == 'checkbox'){
             if (val === null) val = checkboxes[i].checked;
                checkboxes[i].checked = val;
            }
        }
    }    
    </script>
    </body>
   
    </html> 