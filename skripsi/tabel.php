<?php
require('functions.php');
$result = mysqli_query($conn, "SELECT * FROM responden");
$sumsql = mysqli_query($conn, "SELECT X1_1 + X1_2 + X1_3 + X1_4 as sumX1 FROM responden");
$sumsql1 = mysqli_query($conn, "SELECT X2_1 + X2_2 + X2_3 + X2_4 as sumX2 FROM responden");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=auto, initial-scale=1.0" />
    <title>Data Bantu</title>
</head>

<body>
    <h1>Data Responden</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <td bgcolor="#d1c7c7">No</td>
            <td>X1_1</td>
            <td>X1_2</td>
            <td>X1_3</td>
            <td>X1_4</td>
            <td>X2_1</td>
            <td>X2_2</td>
            <td>X2_3</td>
            <td>X2_4</td>
            <td>X3_1</td>
            <td>X3_2</td>
            <td>X3_3</td>
            <td>X3_4</td>
            <td>Y1</td>
            <td>Y2</td>
            <td>Y3</td>
            <td>Y4</td>
        </tr>
        <?php $i = 0 ?>
        <?php $j = 1 ?>
        <?php while ($data = mysqli_fetch_array($result)): ?>
        <tr>
            <td bgcolor="#d1c7c7">
                <?= $j ?>
            </td>
            <td>
                <?= $totalX1_1[$i] ?>
            </td>
            <td>
                <?= $totalX1_2[$i] ?>
            </td>
            <td>
                <?= $totalX1_3[$i] ?>
            </td>
            <td>
                <?= $totalX1_4[$i] ?>
            </td>
            <td>
                <?= $totalX2_1[$i] ?>
            </td>
            <td>
                <?= $totalX2_2[$i] ?>
            </td>
            <td>
                <?= $totalX2_3[$i] ?>
            </td>
            <td>
                <?= $totalX2_4[$i] ?>
            </td>
            <td>
                <?= $totalX3_1[$i] ?>
            </td>
            <td>
                <?= $totalX3_2[$i] ?>
            </td>
            <td>
                <?= $totalX3_3[$i] ?>
            </td>
            <td>
                <?= $totalX3_4[$i] ?>
            </td>
            <td>
                <?= $totalY1[$i] ?>
            </td>
            <td>
                <?= $totalY2[$i] ?>
            </td>
            <td>
                <?= $totalY3[$i] ?>
            </td>
            <td>
                <?= $totalY4[$i] ?>
            </td>
        </tr>
        <?php $i++ ?>
        <?php $j++ ?>
        <?php endwhile; ?>
        <tr>
            <td bgcolor="#d1c7c7">Jumlah</td>
            <td>
                <?= $sumx1_1 ?>
            </td>
            <td>
                <?= $sumx1_2 ?>
            </td>
            <td>
                <?= $sumx1_3 ?>
            </td>
            <td>
                <?= $sumx1_4 ?>
            </td>
            <td>
                <?= $sumx2_1 ?>
            </td>
            <td>
                <?= $sumx2_2 ?>
            </td>
            <td>
                <?= $sumx2_3 ?>
            </td>
            <td>
                <?= $sumx2_4 ?>
            </td>
            <td>
                <?= $sumx3_1 ?>
            </td>
            <td>
                <?= $sumx3_2 ?>
            </td>
            <td>
                <?= $sumx3_3 ?>
            </td>
            <td>
                <?= $sumx3_4 ?>
            </td>
            <td>
                <?= $sumy1 ?>
            </td>
            <td>
                <?= $sumy2 ?>
            </td>
            <td>
                <?= $sumy3 ?>
            </td>
            <td>
                <?= $sumy4 ?>
            </td>
        </tr>
    </table>
    <h1>Data Bantu Hitung</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <td bgcolor="#d1c7c7">No</td>
            <td>X1</td>
            <td>X2</td>
            <td>X3</td>
            <td>Y</td>
            <td>X1_Y</td>
            <td>X2_Y</td>
            <td>X3_Y</td>
            <td>X1_X2</td>
            <td>X1_X3</td>
            <td>X2_X3</td>
            <td>X1<sup>2</sup></td>
            <td>X2<sup>2</sup></td>
            <td>X3<sup>2</sup></td>
            <td>Y<sup>2</sup></td>
            <td>
                y<sub>i</sub> = Y<sub>i</sub> -
                <span STYLE="text-decoration:overline">Y</span>
            </td>
            <td>
                x<sub>1i</sub> = X<sub>1i</sub> -
                <span STYLE="text-decoration:overline">X1</span>
            </td>
            <td>
                x<sub>2i</sub> = X<sub>2i</sub> -
                <span STYLE="text-decoration:overline">X2</span>
            </td>
            <td>
                x<sub>3i</sub> = X<sub>3i</sub> -
                <span STYLE="text-decoration:overline">X3</span>
            </td>
            <td>x<sub>1i</sub><sup>2</sup></td>
            <td>x<sub>2i</sub><sup>2</sup></td>
            <td>x<sub>3i</sub><sup>2</sup></td>
            <td>y<sub>i</sub><sup>2</sup></td>
        </tr>
        <?php $i = 0 ?>
        <?php $j = 1 ?>
        <?php while ($datasum = mysqli_fetch_array($sumsql)): ?>
        <tr>
            <td bgcolor="#d1c7c7">
                <?= $j ?>
            </td>
            <td>
                <?= $sumsqlX1z[$i] ?>
            </td>
            <td>
                <?= $sumsqlX2z[$i] ?>
            </td>
            <td>
                <?= $sumsqlX3z[$i] ?>
            </td>
            <td>
                <?= $sumsqlYz[$i] ?>
            </td>
            <td>
                <?= $multiplyX1Yz[$i] ?>
            </td>
            <td>
                <?= $multiplyX2Yz[$i] ?>
            </td>
            <td>
                <?= $multiplyX3Yz[$i] ?>
            </td>
            <td>
                <?= $multiplyX1X2z[$i] ?>
            </td>
            <td>
                <?= $multiplyX1X3z[$i] ?>
            </td>
            <td>
                <?= $multiplyX2X3z[$i] ?>
            </td>
            <td>
                <?= $multiplyX1X1z[$i] ?>
            </td>
            <td>
                <?= $multiplyX2X2z[$i] ?>
            </td>
            <td>
                <?= $multiplyX3X3z[$i] ?>
            </td>
            <td>
                <?= $multiplyYYz[$i] ?>
            </td>
            <td>
                <?= $yz[$i] ?>
            </td>
            <td>
                <?= $x1z[$i] ?>
            </td>
            <td>
                <?= round($x2z[$i], 3) ?>
            </td>
            <td>
                <?= $x3z[$i] ?>
            </td>
            <td>
                <?= $x1x1z[$i] ?>
            </td>
            <td>
                <?= round($x2x2z[$i], 3) ?>
            </td>
            <td>
                <?= $x3x3z[$i] ?>
            </td>
            <td>
                <?= round($yyz[$i], 3) ?>
            </td>
        </tr>
        <?php $i++ ?>
        <?php $j++ ?>
        <?php endwhile; ?>
        <tr>
            <td bgcolor="#d1c7c7">Jumlah</td>
            <td>
                <?= $totalX1z ?>
            </td>
            <td>
                <?= $totalX2z ?>
            </td>
            <td>
                <?= $totalX3z ?>
            </td>
            <td>
                <?= $totalYz ?>
            </td>
            <td>
                <?= $totalX1Yz ?>
            </td>
            <td>
                <?= $totalX2Yz ?>
            </td>
            <td>
                <?= $totalX3Yz ?>
            </td>
            <td>
                <?= $totalX1X2z ?>
            </td>
            <td>
                <?= $totalX1X3z ?>
            </td>
            <td>
                <?= $totalX2X3z ?>
            </td>
            <td>
                <?= $totalX1X1z ?>
            </td>
            <td>
                <?= $totalX2X2z ?>
            </td>
            <td>
                <?= $totalX3X3z ?>
            </td>
            <td>
                <?= $totalYYz ?>
            </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <?= round($totalyyz, 3) ?>
            </td>
        </tr>
        <tr>
            <td bgcolor="#d1c7c7">Average</td>
            <td>
                <?= $avgsqlX1z ?>
            </td>
            <td>
                <?= $avgsqlX2z ?>
            </td>
            <td>
                <?= $avgsqlX3z ?>
            </td>
            <td>
                <?= $avgsqlYz ?>
            </td>
        </tr>
    </table>
    <h2>Perhitungan Regresi Linear Berganda</h2>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <td bgcolor="#d1c7c7">No</td>
            <td>&Ycirc;</td>
            <td>&Ycirc; - <span STYLE="text-decoration:overline">Y</span></td>
            <td>
                ( &Ycirc; - <span STYLE="text-decoration:overline">Y</span> )<sup>2</sup>
            </td>
            <td>Y<sub>i</sub> - &Ycirc;</td>
            <td>( Y<sub>i</sub> - &Ycirc; )<sup>2</sup></td>
        </tr>
        <?php $i = 0; ?>
        <?php $j = 1; ?>
        <?php while ($datasum1 = mysqli_fetch_array($sumsql1)): ?>
        <tr>
            <td bgcolor="#d1c7c7">
                <?= $j ?>
            </td>
            <td>
                <?= round($Ytopi[$i], 3) ?>
            </td>
            <td>
                <?= round($Ytopi_Yavg[$i], 3) ?>
            </td>
            <td>
                <?= round($Ytopi_Yavgsquare[$i], 3) ?>
            </td>
            <td>
                <?= round($Yiz_Ytopi[$i], 3) ?>
            </td>
            <td>
                <?= round($Yiz_Ytopisquare[$i], 3) ?>
            </td>
        </tr>
        <?php $i++ ?>
        <?php $j++ ?>
        <?php endwhile; ?>
    </table>
    <h2>Matriks</h2>
    Matriks A
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ($i = 0; $i < 4; $i++): ?>
        <tr>
            <?php for ($j = 0; $j < 4; $j++): ?>
            <td>
                <?= $matriksA[$i][$j] ?>
            </td>
            <?php endfor; ?>
        </tr>
        <?php endfor; ?>
        <tr>
            <td>Determinan</td>
            <td>
                <?= round(hitungdeterminan($matriksA, 4)) ?>
            </td>
            <td colspan="2"></td>
        </tr>
    </table>
    <br />
    Matriks A1
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ($i = 0; $i < 4; $i++): ?>
        <tr>
            <?php for ($j = 0; $j < 4; $j++): ?>
            <td>
                <?= $matriksA1[$i][$j] ?>
            </td>
            <?php endfor; ?>
        </tr>
        <?php endfor; ?>
        <tr>
            <td>Determinan</td>
            <td>
                <?= round(hitungdeterminan($matriksA1, 4)) ?>
            </td>
            <td colspan="2"></td>
        </tr>
    </table>
    <br />
    Matriks A2
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ($i = 0; $i < 4; $i++): ?>
        <tr>
            <?php for ($j = 0; $j < 4; $j++): ?>
            <td>
                <?= $matriksA2[$i][$j] ?>
            </td>
            <?php endfor; ?>
        </tr>
        <?php endfor; ?>
        <tr>
            <td>Determinan</td>
            <td>
                <?= round(hitungdeterminan($matriksA2, 4)) ?>
            </td>
            <td colspan="2"></td>
        </tr>
    </table>
    <br />
    Matriks A3
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ($i = 0; $i < 4; $i++): ?>
        <tr>
            <?php for ($j = 0; $j < 4; $j++): ?>
            <td>
                <?= $matriksA3[$i][$j] ?>
            </td>
            <?php endfor; ?>
        </tr>
        <?php endfor; ?>
        <tr>
            <td>Determinan</td>
            <td>
                <?= round(hitungdeterminan($matriksA3, 4)) ?>
            </td>
            <td colspan="2"></td>
        </tr>
    </table>
    Matriks A4
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ($i = 0; $i < 4; $i++): ?>
        <tr>
            <?php for ($j = 0; $j < 4; $j++): ?>
            <td>
                <?= $matriksA4[$i][$j] ?>
            </td>
            <?php endfor; ?>
        </tr>
        <?php endfor; ?>
        <tr>
            <td>Determinan</td>
            <td>
                <?= round(hitungdeterminan($matriksA4, 4)) ?>
            </td>
            <td colspan="2"></td>
        </tr>
    </table>
    <h2>Hasil Pengujian</h2>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr align="center">
            <td rowspan="2">Uji R<sup>2</sup></td>
            <td rowspan="2">Uji F</td>
            <td colspan="3">Uji T</td>
        </tr>
        <tr align="center">
            <td>X1</td>
            <td>X2</td>
            <td>X3</td>
        </tr>
        <tr>
            <td>
                <?= round($rsquarepercent, 3) ?>
            </td>
            <td>
                <?= round($F, 3) ?>
            </td>
            <td>
                <?= round($ujiT_X1, 3) ?>
            </td>
            <td>
                <?= round($ujiT_X2, 3) ?>
            </td>
            <td>
                <?= round($ujiT_X3, 3) ?>
            </td>
        </tr>
    </table>
</body>

</html>