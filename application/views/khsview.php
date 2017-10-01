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
        // $tampung[$hasil['nama']][][$hasil['namamk']] = [$hasil['namamk'], $hasil['sks'],$hasil['indeks'], $hasil['nilai akhir'], $hasil['nxk']];
        $tampung[$hasil['nama']][$hasil['semester']][$hasil['namamk']] = [$hasil['namamk'], $hasil['sks'],$hasil['indeks'], $hasil['nilai akhir'], $hasil['nxk']];      
    }
}

// print_r($tampung);
// print_r($dataku);
?>
<? if (isset($tampung)) :?>
<? foreach($tampung as $namamhs => $arraysmstr) :?>
<? echo("<b>Nama Mahasiswa : $namamhs</b><br>") ?>
<div class="well">
<? foreach($arraysmstr as $semester => $nilai) :?>
<div class="container">
<? echo("<b>Semester : $semester</b><br>") ?>
<table class="table">
    <tr>
        <th>Nama Matakuliah</th>
        <th>SKS</th>
        <th>Nilai</th>
        <th>Indeks</th>
        <th>nxk</th>
    </tr>
    <?foreach ($nilai as $k => $anotherarray):?>
    <tr>
    <?foreach($anotherarray as $i => $v):?>
    
    <td>
        <? echo($v) ?>
    </td>
    
    <?endforeach?>
    </tr>
    <?endforeach?>
</table>
</div>
<? endforeach ?>
</div>
<? endforeach ?>
<? endif ?>


<script src="http://localhost/nilai/static/index.js">
</script>
</body>
</html>