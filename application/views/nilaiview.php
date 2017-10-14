<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Nilai</title>
    </head>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href=<?echo base_url().'static/main.css'?>>
    <body>
    <div class="container-fluid">
    <form action="" method="POST" class="form-group form-group-sm row">
        <div class="col-xs-3">
        <label for="">Kode MK</label>
        <input class="form-control" type="text" name="kodemk" />
        <?php echo form_error('kodemk'); ?>

        <label for="">Nama MK</label>
        <input class="form-control" type="text" name="namamk" />
        <?php echo form_error('namamk'); ?>

        <label for="">SKS</label>
        <input class="form-control" type="text" name="sks" />
        <?php echo form_error('sks'); ?>

        <label for="">NRP</label>
        <input class="form-control" type="text" name="nrp" />
        <?php echo form_error('nrp'); ?>

        <label for="">Nama</label>
        <input class="form-control" type="text" name="nama" />
        <?php echo form_error('nama'); ?>

        <label for="">Semester</label>
        <input class="form-control" type="text" name="semester" />
        <?php echo form_error('semester'); ?>

        <label for="">Tugas</label>
        <input class="form-control" type="text" name="tugas" />
        <?php echo form_error('tugas'); ?>

        <label for="">UTS</label>
        <input class="form-control" type="text" name="uts" />
        <?php echo form_error('uts'); ?>

        <label for="">UAS</label>
        <input class="form-control" type="text" name="uas" />
        <?php echo form_error('uas'); ?>
        <input class="btn btn-primary" id="btnSubmit" type="submit" name="btnSubmit" value="Submit" />
        <a target="_blank" href="<?echo base_url('index.php/KHS_Controller');?>"><button class="btn btn-default" id="lihatKhs" type="button">LIHAT KHS</button></a>    
    </div>
    </form>
    
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
            <th>Hapus Semua &nbsp;<input onClick="checkAll(this)" type='checkbox'> </th>
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
    </table>
    <input type="submit" name="checkboxsbmt" id="multiHps" value="Hapus" class="pull-right btn btn-danger">
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


    </div>
    <script>
        //https://stackoverflow.com/questions/19282219/check-uncheck-all-the-checkboxes-in-a-table 
        function checkAll(){
        var checkboxes = document.getElementsByTagName('input')
        var val = null
        for (var i = 0; i < checkboxes.length; i++){
         if (checkboxes[i].type == 'checkbox'){
             if (val === null)
                val = checkboxes[i].checked
                checkboxes[i].checked = val
            }
        }
    }
    </script>
    </body>
   
    </html> 