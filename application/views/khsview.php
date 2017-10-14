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
$tampung = [];
foreach($dataku as $indeks => $arr){
    $tampung[$arr['nama']][$arr['semester']][$arr['nama_mk']] = [$arr['nama_mk'], $arr['sks'],$arr['indeks'], $arr['nilaiakhir'], $arr['nxk']];
}

function hitung_ips($array, $nama, $semester){
    $totalsks = 0;
    $totalnxk = 0;
    $array_ips = $array[$nama][$semester];
    foreach($array_ips as $namamk => $arraynilai){
        foreach($arraynilai as $k => $v){
            if($k == 1){
                $totalsks = $totalsks + $v;
            }
            if($k == 4){
                $totalnxk = $totalnxk + $v;
            }
        }
    }
    $total = round($totalnxk/$totalsks, 2);
    return $total;
}

function hitung_ipk($res, $namamhs){
    $arr = $res[$namamhs];
    $total_semester = count($arr);
    $total_ips = array();
    
    foreach($arr as $semester => $arraynilai){
            array_push($total_ips, hitung_ips($res, $namamhs, $semester));
    }
    $ipk = round(array_sum($total_ips)/ $total_semester,2);
    return $ipk;
}
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
        <th>Nilai Akhir</th>
        <th>nxk</th>
    </tr>
    <?foreach ($nilai as $k => $anotherarray):?>
    <tr>
    <?foreach($anotherarray as $i => $v):?>
    <td><? echo($v) ?></td>
    <?endforeach?>
    </tr>
    <?endforeach?>
</table>
<? echo("<p class='pull-right'>IPS : " . hitung_ips($tampung,$namamhs, $semester))."</p>" ?>
</div>
<? endforeach ?>
<? echo("<b>IPK : " . hitung_ipk($tampung,$namamhs))."</b><br>" ?>
</div>
<? endforeach ?>
<? endif ?>

<script src="http://localhost/nilai/static/index.js">
</script>
</body>
</html>