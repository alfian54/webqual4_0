<?php
$conn = mysqli_connect("localhost", "root", "", "awicoffee");
$result = mysqli_query($conn, "SELECT * FROM responden");
//sum penjumlahan
$sumsqlX1 = mysqli_query($conn, "SELECT X1_1 + X1_2 + X1_3 + X1_4 as sumX1 FROM responden");
$sumsqlX2 = mysqli_query($conn, "SELECT X2_1 + X2_2 + X2_3 + X2_4 as sumX2 FROM responden");
$sumsqlX3 = mysqli_query($conn, "SELECT X3_1 + X3_2 + X3_3 + X3_4 as sumX3 FROM responden");
$sumsqlY = mysqli_query($conn, "SELECT Y1 + Y2 + Y3 + Y4 as sumY FROM responden");
//multiply pengkalian
$multiplyX1Y = mysqli_query($conn, "SELECT (X1_1 + X1_2 + X1_3 + X1_4) * (Y1 + Y2 + Y3 + Y4) as multiplyX1Y FROM responden");
$multiplyX2Y = mysqli_query($conn, "SELECT (X2_1 + X2_2 + X2_3 + X2_4) * (Y1 + Y2 + Y3 + Y4) as multiplyX2Y FROM responden");
$multiplyX3Y = mysqli_query($conn, "SELECT (X3_1 + X3_2 + X3_3 + X3_4) * (Y1 + Y2 + Y3 + Y4) as multiplyX3Y FROM responden");
$multiplyX1X2 = mysqli_query($conn, "SELECT (X1_1 + X1_2 + X1_3 + X1_4) * (X2_1 + X2_2 + X2_3 + X2_4) as multiplyX1X2 FROM responden");
$multiplyX1X3 = mysqli_query($conn, "SELECT (X1_1 + X1_2 + X1_3 + X1_4) * (X3_1 + X3_2 + X3_3 + X3_4) as multiplyX1X3 FROM responden");
$multiplyX2X3 = mysqli_query($conn, "SELECT (X2_1 + X2_2 + X2_3 + X2_4) * (X3_1 + X3_2 + X3_3 + X3_4) as multiplyX2X3 FROM responden");
$multiplyX1X1 = mysqli_query($conn, "SELECT (X1_1 + X1_2 + X1_3 + X1_4) * (X1_1 + X1_2 + X1_3 + X1_4) as multiplyX1X1 FROM responden");
$multiplyX2X2 = mysqli_query($conn, "SELECT (X2_1 + X2_2 + X2_3 + X2_4) * (X2_1 + X2_2 + X2_3 + X2_4) as multiplyX2X2 FROM responden");
$multiplyX3X3 = mysqli_query($conn, "SELECT (X3_1 + X3_2 + X3_3 + X3_4) * (X3_1 + X3_2 + X3_3 + X3_4) as multiplyX3X3 FROM responden");
$multiplyYY = mysqli_query($conn, "SELECT (Y1 + Y2 + Y3 + Y4) * (Y1 + Y2 + Y3 + Y4) as multiplyYY FROM responden");
$i = 0;
while ($data = mysqli_fetch_array($result)) {
    $totalX1_1[$i] = $data['X1_1'];
    $totalX1_2[$i] = $data['X1_2'];
    $totalX1_3[$i] = $data['X1_3'];
    $totalX1_4[$i] = $data['X1_4'];
    $totalX2_1[$i] = $data['X2_1'];
    $totalX2_2[$i] = $data['X2_2'];
    $totalX2_3[$i] = $data['X2_3'];
    $totalX2_4[$i] = $data['X2_4'];
    $totalX3_1[$i] = $data['X3_1'];
    $totalX3_2[$i] = $data['X3_2'];
    $totalX3_3[$i] = $data['X3_3'];
    $totalX3_4[$i] = $data['X3_4'];
    $totalY1[$i] = $data['Y1'];
    $totalY2[$i] = $data['Y2'];
    $totalY3[$i] = $data['Y3'];
    $totalY4[$i] = $data['Y4'];
    $sumx1_1 = array_sum($totalX1_1);
    $sumx1_2 = array_sum($totalX1_2);
    $sumx1_3 = array_sum($totalX1_3);
    $sumx1_4 = array_sum($totalX1_4);
    $sumx2_1 = array_sum($totalX2_1);
    $sumx2_2 = array_sum($totalX2_2);
    $sumx2_3 = array_sum($totalX2_3);
    $sumx2_4 = array_sum($totalX2_4);
    $sumx3_1 = array_sum($totalX3_1);
    $sumx3_2 = array_sum($totalX3_2);
    $sumx3_3 = array_sum($totalX3_3);
    $sumx3_4 = array_sum($totalX3_4);
    $sumy1 = array_sum($totalY1);
    $sumy2 = array_sum($totalY2);
    $sumy3 = array_sum($totalY3);
    $sumy4 = array_sum($totalY4);
    $i++;
}
// sum dengan sql dan avg
$i = 0;
while ($datasum = mysqli_fetch_array($sumsqlX1)) {
    $sumsqlX1z[$i] = $datasum['sumX1'];
    $avgsqlX1z = array_sum($sumsqlX1z) / count($sumsqlX1z);
    $avgsqlX1zlast[$i] = $avgsqlX1z;
    $totalX1z = array_sum($sumsqlX1z);
    if ($i == 99) {
        for ($j = 0; $j < 100; $j++) {
            $x1z[$j] = $sumsqlX1z[$j] - $avgsqlX1zlast[99];
            $x1x1z[$j] = $x1z[$j] * $x1z[$j];
        }
    }
    $i++;
}
$i = 0;
while ($datasum = mysqli_fetch_array($sumsqlX2)) {
    $sumsqlX2z[$i] = $datasum['sumX2'];
    $avgsqlX2z = array_sum($sumsqlX2z) / count($sumsqlX2z);
    $avgsqlX2zlast[$i] = $avgsqlX2z;
    $totalX2z = array_sum($sumsqlX2z);
    if ($i == 99) {
        for ($j = 0; $j < 100; $j++) {
            $x2z[$j] = $sumsqlX2z[$j] - $avgsqlX2zlast[99];
            $x2x2z[$j] = $x2z[$j] * $x2z[$j];
        }
    }
    $i++;
}
$i = 0;
while ($datasum = mysqli_fetch_array($sumsqlX3)) {
    $sumsqlX3z[$i] = $datasum['sumX3'];
    $avgsqlX3z = array_sum($sumsqlX3z) / count($sumsqlX3z);
    $avgsqlX3zlast[$i] = $avgsqlX3z;
    $totalX3z = array_sum($sumsqlX3z);
    if ($i == 99) {
        for ($j = 0; $j < 100; $j++) {
            $x3z[$j] = $sumsqlX3z[$j] - $avgsqlX3zlast[99];
            $x3x3z[$j] = $x3z[$j] * $x3z[$j];
        }
    }
    $i++;
}
$i = 0;
$j = 0;
while ($datasum = mysqli_fetch_array($sumsqlY)) {
    $sumsqlYz[$i] = $datasum['sumY'];
    $avgsqlYz = array_sum($sumsqlYz) / count($sumsqlYz);
    $avgsqlYzlast[$i] = $avgsqlYz;
    $totalYz = array_sum($sumsqlYz);
    if ($i == 99) {
        for ($j = 0; $j < 100; $j++) {
            $yz[$j] = $sumsqlYz[$j] - $avgsqlYzlast[99];
            $yyz[$j] = $yz[$j] * $yz[$j];
            $x1yz[$j] = $x1z[$j] * $yz[$j];
            $totalyyz = array_sum($yyz);
        }
    }
    $i++;
} //WIP Untuk data nomor 1-3 masih salah, tapi selanjutnya sudah pas
//multiply
$i = 0;
while ($datamultiply = mysqli_fetch_array($multiplyX1Y)) {
    $multiplyX1Yz[$i] = $datamultiply['multiplyX1Y'];
    $totalX1Yz = array_sum($multiplyX1Yz);
    $i++;
}
$i = 0;
while ($datamultiply = mysqli_fetch_array($multiplyX2Y)) {
    $multiplyX2Yz[$i] = $datamultiply['multiplyX2Y'];
    $totalX2Yz = array_sum($multiplyX2Yz);
    $i++;
}
$i = 0;
while ($datamultiply = mysqli_fetch_array($multiplyX3Y)) {
    $multiplyX3Yz[$i] = $datamultiply['multiplyX3Y'];
    $totalX3Yz = array_sum($multiplyX3Yz);
    $i++;
}
$i = 0;
while ($datamultiply = mysqli_fetch_array($multiplyX1X2)) {
    $multiplyX1X2z[$i] = $datamultiply['multiplyX1X2'];
    $totalX1X2z = array_sum($multiplyX1X2z);
    $i++;
}
$i = 0;
while ($datamultiply = mysqli_fetch_array($multiplyX1X3)) {
    $multiplyX1X3z[$i] = $datamultiply['multiplyX1X3'];
    $totalX1X3z = array_sum($multiplyX1X3z);
    $i++;
}
$i = 0;
while ($datamultiply = mysqli_fetch_array($multiplyX2X3)) {
    $multiplyX2X3z[$i] = $datamultiply['multiplyX2X3'];
    $totalX2X3z = array_sum($multiplyX2X3z);
    $i++;
}
$i = 0;
while ($datamultiply = mysqli_fetch_array($multiplyX1X1)) {
    $multiplyX1X1z[$i] = $datamultiply['multiplyX1X1'];
    $totalX1X1z = array_sum($multiplyX1X1z);
    $i++;
}
$i = 0;
while ($datamultiply = mysqli_fetch_array($multiplyX2X2)) {
    $multiplyX2X2z[$i] = $datamultiply['multiplyX2X2'];
    $totalX2X2z = array_sum($multiplyX2X2z);
    $i++;
}
$i = 0;
while ($datamultiply = mysqli_fetch_array($multiplyX3X3)) {
    $multiplyX3X3z[$i] = $datamultiply['multiplyX3X3'];
    $totalX3X3z = array_sum($multiplyX3X3z);
    $i++;
}
$i = 0;
while ($datamultiply = mysqli_fetch_array($multiplyYY)) {
    $multiplyYYz[$i] = $datamultiply['multiplyYY'];
    $totalYYz = array_sum($multiplyYYz);
    $i++;
}
//matriks untuk mencari koefisien
$matriksA = [
    [count($totalX1_1), $totalX1z, $totalX2z, $totalX3z],
    [$totalX1z, $totalX1X1z, $totalX1X2z, $totalX1X3z],
    [$totalX2z, $totalX1X2z, $totalX2X2z, $totalX2X3z],
    [$totalX3z, $totalX1X3z, $totalX2X3z, $totalX3X3z],
];
$matriksH = [[$totalYz], [$totalX1Yz], [$totalX2Yz], [$totalX3Yz]];
$matriksA1 = [
    [$totalYz, $totalX1z, $totalX2z, $totalX3z],
    [$totalX1Yz, $totalX1X1z, $totalX1X2z, $totalX1X3z],
    [$totalX2Yz, $totalX1X2z, $totalX2X2z, $totalX2X3z],
    [$totalX3Yz, $totalX1X3z, $totalX2X3z, $totalX3X3z],
];
$matriksA2 = [
    [count($totalX1_1), $totalYz, $totalX2z, $totalX3z],
    [$totalX1z, $totalX1Yz, $totalX1X2z, $totalX1X3z],
    [$totalX2z, $totalX2Yz, $totalX2X2z, $totalX2X3z],
    [$totalX3z, $totalX3Yz, $totalX2X3z, $totalX3X3z],
];
$matriksA3 = [
    [count($totalX1_1), $totalX1z, $totalYz, $totalX3z],
    [$totalX1z, $totalX1X1z, $totalX1Yz, $totalX1X3z],
    [$totalX2z, $totalX1X2z, $totalX2Yz, $totalX2X3z],
    [$totalX3z, $totalX1X3z, $totalX3Yz, $totalX3X3z],
];
$matriksA4 = [
    [count($totalX1_1), $totalX1z, $totalX2z, $totalYz],
    [$totalX1z, $totalX1X1z, $totalX1X2z, $totalX1Yz],
    [$totalX2z, $totalX1X2z, $totalX2X2z, $totalX2Yz],
    [$totalX3z, $totalX1X3z, $totalX2X3z, $totalX3Yz],
];

function hitungdeterminan($matrix, $n)
{
    global $matriksA;
    global $matriksA1;
    global $matriksA2;
    global $matriksA3;
    global $matriksA4;
    //step 1 dibagi dengan index [0][0]
    // echo "step 1:";
    for ($i = 0; $i < $n; $i++) {
        $matrixstep1[0][$i] = $matrix[0][$i] / $matrix[0][0];
        // var_dump($matrixstep1[0][$i]);
    }
    //step 2 kalikan baris 1 dengan index [1][0]
    // echo "<br>step 2:";
    for ($i = 0; $i < $n; $i++) {
        $matrixstep2[0][$i] = $matrixstep1[0][$i] * $matrix[1][0];
        // var_dump($matrixstep2[0][$i]);
    }
    //step 3 kurangi baris 1 ke baris 2
    // echo "<br>step 3:";
    for ($i = 0; $i < $n; $i++) {
        $matrixstep3[1][$i] = $matrixstep2[0][$i] - $matrix[1][$i];
        // var_dump($matrixstep3[1][$i]);
    }
    //step 4 kalikan baris 1 dengan index[2][0]
    // echo "<br>step 4:";
    for ($i = 0; $i < $n; $i++) {
        $matrixstep4[0][$i] = $matrixstep1[0][$i] * $matrix[2][0];
        // var_dump($matrixstep4[0][$i]);
    }
    //step 5 kurangi baris 1 ke baris 3
    // echo "<br>step 5:";
    for ($i = 0; $i < $n; $i++) {
        $matrixstep5[1][$i] = $matrixstep4[0][$i] - $matrix[2][$i];
        // var_dump($matrixstep5[1][$i]);
    }
    //step 6 kalikan baris 1 dengan index[3][0]
    // echo "<br>step 6:";
    for ($i = 0; $i < $n; $i++) {
        $matrixstep6[0][$i] = $matrixstep1[0][$i] * $matrix[3][0];
        // var_dump($matrixstep6[0][$i]);
    }
    //step 7 kurangi baris 1 ke baris 4
    // echo "<br>step 7:";
    for ($i = 0; $i < $n; $i++) {
        $matrixstep7[1][$i] = $matrixstep6[0][$i] - $matrix[3][$i];
        // var_dump($matrixstep7[1][$i]);
    }
    //step 8 bagikan baris 2 ke baris [1][1]
    // echo "<br>step 8:";
    for ($i = 0; $i < $n; $i++) {
        $matrixstep8[1][$i + 1] = $matrixstep3[1][$i] / $matrixstep3[1][1];
        // var_dump($matrixstep8[1][$i+1]);
    }
    //step 9 kalikan baris 2 ke baris [2][1]
    // echo "<br>step 9:";
    for ($i = 0; $i < $n; $i++) {
        $matrixstep9[1][$i + 1] = $matrixstep8[1][$i + 1] * $matrixstep5[1][1];
        // var_dump($matrixstep9[1][$i+1]);
    }
    //step 10 kurangkan baris 2 ke baris 3
    // echo "<br>step 10:";
    for ($i = 0; $i < $n; $i++) {
        $matrixstep10[1][$i + 1] = $matrixstep9[1][$i + 1] - $matrixstep5[1][$i];
        // var_dump($matrixstep10[1][$i+1]);
    }
    //step 11 kalikan baris 2 ke baris 4
    // echo "<br>step 11:";
    for ($i = 0; $i < $n; $i++) {
        $matrixstep11[1][$i + 1] = $matrixstep8[1][$i + 1] * $matrixstep7[1][1];
        // var_dump($matrixstep11[1][$i+1]);
    }
    //step 12 kurangkan baris 2 ke baris 4
    // echo "<br>step 12:";
    for ($i = 0; $i < $n; $i++) {
        $matrixstep12[1][$i + 1] = $matrixstep11[1][$i + 1] - $matrixstep7[1][$i];
        // var_dump($matrixstep12[1][$i+1]);
    }
    //step 13 bagikan baris 3 ke baris 4
    // echo "<br>step 13:";
    for ($i = 0; $i < $n; $i++) {
        $matrixstep13[2][$i + 2] = $matrixstep10[1][$i + 1] / $matrixstep10[1][3];
        // var_dump($matrixstep13[2][$i+2]);
    }
    //step 14 kalikan baris 3 ke index [3][2]
    // echo "<br>step 14:";
    for ($i = 0; $i < $n; $i++) {
        $matrixstep14[2][$i + 2] = $matrixstep13[2][$i + 2] * $matrixstep12[1][3];
        // var_dump($matrixstep14[2][$i+2]);
    }
    //step 15 kurangkan baris 3 ke baris 4
    // echo "<br>step 15:";
    for ($i = 0; $i < $n; $i++) {
        $matrixstep15[2][$i + 2] = $matrixstep14[2][$i + 2] - $matrixstep12[1][$i + 1];
        // var_dump($matrixstep15[2][$i+2]);
    }
    //step 16 kalikan nilai yang diagonal
    // echo "<br>step 16:";
    $matrixstepFINAL = $matrix[0][0] * $matrixstep3[1][1] * $matrixstep10[1][3] * $matrixstep15[2][5];
    return $matrixstepFINAL;
    // var_dump($matrixstep15[2][5]);
}

#nilai Koefisien
$koefb0 = hitungdeterminan($matriksA1, 4) / hitungdeterminan($matriksA, 4);
$koefb1 = hitungdeterminan($matriksA2, 4) / hitungdeterminan($matriksA, 4);
$koefb2 = hitungdeterminan($matriksA3, 4) / hitungdeterminan($matriksA, 4);
$koefb3 = hitungdeterminan($matriksA4, 4) / hitungdeterminan($matriksA, 4);

//Untuk menghitung nilai RLB secara teori
for ($i = 0; $i < 100; $i++) {
    $Ytopi[$i] = $koefb0 + ($koefb1 * $sumsqlX1z[$i]) + ($koefb2 * $sumsqlX2z[$i]) + ($koefb3 * $sumsqlX3z[$i]);
    $Ytopi_Yavg[$i] = $Ytopi[$i] - $avgsqlYz;
    $Ytopi_Yavgsquare[$i] = $Ytopi_Yavg[$i] * $Ytopi_Yavg[$i];
    $Yiz_Ytopi[$i] = $sumsqlYz[$i] - $Ytopi[$i];
    $Yiz_Ytopisquare[$i] = $Yiz_Ytopi[$i] * $Yiz_Ytopi[$i];
    $sumYiz_Ytopisquare = array_sum($Yiz_Ytopisquare);
}

#hitung Rsquare
#hitung sigma x dan ykuadrat kecil
$sigmax1y = $totalX1Yz - ($totalX1z * $totalYz / count($totalX1_1));
$sigmax2y = $totalX2Yz - ($totalX2z * $totalYz / count($totalX1_1));
$sigmax3y = $totalX3Yz - ($totalX3z * $totalYz / count($totalX1_1));
$sigmayy = $totalYYz - ($totalYz * $totalYz / count($totalX1_1));
$rsquare = (($koefb1 * $sigmax1y) + ($koefb2 * $sigmax2y) + ($koefb3 * $sigmax3y)) / $sigmayy;
$rsquarepercent = $rsquare * 100;

#hitung ujiF
$F = (($rsquare / 3) / ((1 - $rsquare) / (count($sumsqlX3z) - 3 - 1)));

#hitung ujiT
#1 Mencari nilai sb masing" variabel
$std_error = sqrt($sumYiz_Ytopisquare / (count($sumsqlX3z) - 3 - 1));
// Mencari nilai determinan matriks A 11, 22, 33, 44
$matrixkofaktorA11 = [
    [$totalX1X1z, $totalX1X2z, $totalX1X3z],
    [$totalX1X2z, $totalX2X2z, $totalX2X3z],
    [$totalX1X3z, $totalX2X3z, $totalX3X3z]
];
$kofaktorA11 = (
    $matrixkofaktorA11[0][0] * (($matrixkofaktorA11[1][1] * $matrixkofaktorA11[2][2]) - ($matrixkofaktorA11[1][2] * $matrixkofaktorA11[2][1])) -
    $matrixkofaktorA11[0][1] * (($matrixkofaktorA11[1][0] * $matrixkofaktorA11[2][2]) - ($matrixkofaktorA11[1][2] * $matrixkofaktorA11[2][0])) +
    $matrixkofaktorA11[0][2] * (($matrixkofaktorA11[1][0] * $matrixkofaktorA11[2][1]) - ($matrixkofaktorA11[1][1] * $matrixkofaktorA11[2][0])));

$matrixkofaktorA22 = [
    [count($totalX1_1), $totalX2z, $totalX3z],
    [$totalX2z, $totalX2X2z, $totalX2X3z],
    [$totalX3z, $totalX2X3z, $totalX3X3z]
];
$kofaktorA22 = (
    $matrixkofaktorA22[0][0] * (($matrixkofaktorA22[1][1] * $matrixkofaktorA22[2][2]) - ($matrixkofaktorA22[1][2] * $matrixkofaktorA22[2][1])) -
    $matrixkofaktorA22[0][1] * (($matrixkofaktorA22[1][0] * $matrixkofaktorA22[2][2]) - ($matrixkofaktorA22[1][2] * $matrixkofaktorA22[2][0])) +
    $matrixkofaktorA22[0][2] * (($matrixkofaktorA22[1][0] * $matrixkofaktorA22[2][1]) - ($matrixkofaktorA22[1][1] * $matrixkofaktorA22[2][0])));

$matrixkofaktorA33 = [
    [count($totalX1_1), $totalX1z, $totalX3z],
    [$totalX1z, $totalX1X1z, $totalX1X3z],
    [$totalX3z, $totalX1X3z, $totalX3X3z]
];
$kofaktorA33 = (
    $matrixkofaktorA33[0][0] * (($matrixkofaktorA33[1][1] * $matrixkofaktorA33[2][2]) - ($matrixkofaktorA33[1][2] * $matrixkofaktorA33[2][1])) -
    $matrixkofaktorA33[0][1] * (($matrixkofaktorA33[1][0] * $matrixkofaktorA33[2][2]) - ($matrixkofaktorA33[1][2] * $matrixkofaktorA33[2][0])) +
    $matrixkofaktorA33[0][2] * (($matrixkofaktorA33[1][0] * $matrixkofaktorA33[2][1]) - ($matrixkofaktorA33[1][1] * $matrixkofaktorA33[2][0])));

$matrixkofaktorA44 = [
    [count($totalX1_1), $totalX1z, $totalX2z],
    [$totalX1z, $totalX1X1z, $totalX1X2z],
    [$totalX2z, $totalX1X2z, $totalX2X2z]
];
$kofaktorA44 = (
    $matrixkofaktorA44[0][0] * (($matrixkofaktorA44[1][1] * $matrixkofaktorA44[2][2]) - ($matrixkofaktorA44[1][2] * $matrixkofaktorA44[2][1])) -
    $matrixkofaktorA44[0][1] * (($matrixkofaktorA44[1][0] * $matrixkofaktorA44[2][2]) - ($matrixkofaktorA44[1][2] * $matrixkofaktorA44[2][0])) +
    $matrixkofaktorA44[0][2] * (($matrixkofaktorA44[1][0] * $matrixkofaktorA44[2][1]) - ($matrixkofaktorA44[1][1] * $matrixkofaktorA44[2][0])));

// Mencari nilai standard error masing" variabel
$std_error_b0 = sqrt((($std_error * $std_error) / hitungdeterminan($matriksA, 4)) * $kofaktorA11);
$std_error_b1 = sqrt((($std_error * $std_error) / hitungdeterminan($matriksA, 4)) * $kofaktorA22);
$std_error_b2 = sqrt((($std_error * $std_error) / hitungdeterminan($matriksA, 4)) * $kofaktorA33);
$std_error_b3 = sqrt((($std_error * $std_error) / hitungdeterminan($matriksA, 4)) * $kofaktorA44);

#2 Menghitung nilai Uji t
$ujiT_X1 = round($koefb1 / $std_error_b1, 4);
$ujiT_X2 = round($koefb2 / $std_error_b2, 4);
$ujiT_X3 = round($koefb3 / $std_error_b3, 4);
?>