<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <title>KHS</title>
</head>
<body>

<?
// holy shit it's working ?????
$tampung = [];
foreach($dataku as $indeks => $arr){
    foreach($arr as $hasil){
        $tampung[$hasil['nama']][][$hasil['namamk']] = [$hasil['namamk'], $hasil['sks'],$hasil['indeks'], $hasil['nilai akhir'], $hasil['nxk']];
        
        if(array_key_exists($hasil['nama'], $tampung) && array_key_exists($hasil['namamk'], $tampung[$hasil['nama']][0])){
            // echo($hasil['nama']);
        }else{
            // echo('namamk belum ada');
        }       
    }
}

print_r($tampung);
// print_r($dataku);
?>
<? if (isset($tampung)) :?>
<? foreach($tampung as $table) :?>
<table class="table">
<tr>
    <td>Mata Kuliah</td>
    <td>SKS</td>
    <td>Nilai</td>
    <td>Indeks</td>
    <td>nxk</td>
</tr>
<? foreach($table as $key => $isi) :?>
<? foreach($isi as $indeks => $arr) :?>
<tr>
<? foreach($arr as $k => $v) :?>
<td><? echo($v) ?></td>
<? endforeach ?>
</tr>
<? endforeach ?>
<? endforeach ?>
</table>
<? endforeach ?>

<? endif ?>


<script src="http://localhost/nilai/static/index.js">
</script>
</body>
</html>