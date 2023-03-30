<?php
require('functions.php');
$result = mysqli_query($conn, "SELECT * FROM responden LIMIT 10");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
        rel="stylesheet" />
    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- My Style -->
    <link rel="stylesheet" href="css/style.css" />

    <!-- jqmath -->
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>

    <title>Awi Coffee</title>
</head>

<body>
    <!-- Navbar Start -->
    <nav class="navbar">
        <a href="#" class="navbar-logo">Awi<span>Coffee</span></a>
        <div class="navbar-nav">
            <a href="#home">Home</a>
            <a href="#tabel">Tabel Data</a>
            <a href="#rlb">Regresi Linear Berganda</a>
            <a href="#ujiR">Uji R<sup>2</sup></a>
            <a href="#ujiF">Uji F</a>
            <a href="#ujiT">Uji T</a>
        </div>
        <div class="navbar-extra">
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
            <a href="#" id="user"><i data-feather="user"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Hero Section Start -->
    <section class="hero" id="home">
        <main class="content">
            <h1>Metode Webqual 4.0 Awi<span>Coffee</span></h1>
            <p>Untuk meneliti hubungan antara Usability, Service Interaction Quality dan Information Quality terhadap
                Kepuasan User</p>
        </main>
    </section>
    <!-- Hero Section End -->

    <!-- Tabel Section Start -->
    <section id="tabel" class="tabel">
        <h2>Tabel <span>Data</span></h2>
        <div class="row">
            <div class="content">
                <p>
                    Bagian ini berisi tentang semua data perhitungan yang selesai diriset dan dikalkulasikan
                </p>
                <table>
                    <tr>
                        <td bgcolor="#4b3f35">No</td>
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
                            <td bgcolor="#4b3f35">
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
                </table>
                <a href="tabel.php" class="link-more" target="/blank">Click to Show More</a>
                <a href="tambah.php" class="link-more" target="/blank">Click to Add Data</a>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- RLB Section Start -->
    <section id="rlb" class="rlb">
        <h2>Regresi Linear <span>Berganda</span></h2>
        <div class="row">
            <div class="content">
                <p>Regresi linear berganda ditujukan untuk menguji pengaruh dua atau lebih variabel independen terhadap
                    satu variabel dependen. Model ini mengasumsikan adanya hubungan satu garis lurus / linear prediksi
                    atau peramalan dengan menggunakan data berskala interval atau rasio.</p>
                <p>Berikut adalah persamaan dari Regresi Linear Berganda : </p>
                <p><span class="rumus">\(Y = a + β_1X_1 + β_2X_2 + β_3X_3\)</span></p>
                <p><span class="p2">Dimana : </br>\(Y\) = Kepuasan User (Variabel Terikat)</br> \(a\) = Konstanta </br>β
                        =
                        Koefisien Regresi</br>\(X\) =
                        Usability, Service Interaction Quality atau Information Quality (Variabel Bebas)</span></p>
                <p><span class="p3"> Interpretasi :
                        <ol>
                            <li>Nilai konstanta / \(a\) bermakna bahwa ketika variabel X1, X2 dan X3 bernilai 0, maka
                                variabel terikat tidak akan mengalami peningkatan nilai atau sama dengan nilai konstanta
                            </li>
                            <li>β memiliki nilai yang bermakna bahwa apabila variabel X1, X2 atau X3 meningkat sebesar
                                1 satuan, maka variabel terikat akan meningkat sebesar X1, X2 atau X3 satuan dengan
                                catatan variabel lainnya konstan (tetap)</li>
                        </ol>
                    </span>
                </p>
                <p> <span class="p4">
                        Langkah selanjutnya kita perlu mencari nilai dari \(a\) dan β untuk setiap variabel bebas yang
                        ada
                        dengan menggunakan matriks dan mencari nilai determinan dari masing-masing matriks.</span>
                </p>
                <div class="matriks-row">
                    <p>Matriks A = </p>
                    <math>
                        <mrow>
                            <mo>[</mo>
                            <mtable>
                                <mtr>
                                    <mtd>
                                        <mn>n</mn>
                                    </mtd>
                                    <mtd>
                                        <mn>ΣX1</mn>
                                    </mtd>
                                    <mtd>
                                        <mn>ΣX2</mn>
                                    </mtd>
                                    <mtd>
                                        <mn>ΣX3</mn>
                                    </mtd>
                                </mtr>
                                <mtr>
                                    <mtd>
                                        <mn>ΣX1</mn>
                                    </mtd>
                                    <mtd>
                                        <mn>ΣX1^2</mn>
                                    </mtd>
                                    <mtd>
                                        <mn>ΣX1X2</mn>
                                    </mtd>
                                    <mtd>
                                        <mn>ΣX1X3</mn>
                                    </mtd>
                                </mtr>
                                <mtr>
                                    <mtd>
                                        <mn>ΣX2</mn>
                                    </mtd>
                                    <mtd>
                                        <mn>ΣX1X2</mn>
                                    </mtd>
                                    <mtd>
                                        <mn>ΣX2^2</mn>
                                    </mtd>
                                    <mtd>
                                        <mn>ΣX2X3</mn>
                                    </mtd>
                                </mtr>
                                <mtr>
                                    <mtd>
                                        <mn>ΣX3</mn>
                                    </mtd>
                                    <mtd>
                                        <mn>ΣX1X3</mn>
                                    </mtd>
                                    <mtd>
                                        <mn>ΣX2X3</mn>
                                    </mtd>
                                    <mtd>
                                        <mn>ΣX3^2</mn>
                                    </mtd>
                                </mtr>
                            </mtable>
                            <mo>]</mo>
                        </mrow>
                    </math>
                </div>
                <div class="matriks-row">
                    <p>Matriks H = </p>
                    <math>
                        <mrow>
                            <mo>[</mo>
                            <mtable>
                                <mtr>
                                    <mtd>
                                        <mn>ΣY</mn>
                                    </mtd>
                                </mtr>
                                <mtr>
                                    <mtd>
                                        <mn>ΣX1Y</mn>
                                    </mtd>
                                </mtr>
                                <mtr>
                                    <mtd>
                                        <mn>ΣX2Y</mn>
                                    </mtd>
                                </mtr>
                                <mtr>
                                    <mtd>
                                        <mn>ΣX3Y</mn>
                                    </mtd>
                                </mtr>
                            </mtable>
                            <mo>]</mo>
                        </mrow>
                    </math>
                </div>
                <p>Untuk Matriks A1 - A4, kita hanya perlu mengganti setiap kolom dari Matriks A dengan Matriks H</p>
                <div class="matriks-row">
                    <p>Matriks A1 = </p>
                    <math>
                        <mrow>
                            <mo>[</mo>
                            <mtable>
                                <mtr>
                                    <mtd>
                                        <mn>ΣY</mn>
                                    </mtd>
                                    <mtd>
                                        <mn>ΣX1</mn>
                                    </mtd>
                                    <mtd>
                                        <mn>ΣX2</mn>
                                    </mtd>
                                    <mtd>
                                        <mn>ΣX3</mn>
                                    </mtd>
                                </mtr>
                                <mtr>
                                    <mtd>
                                        <mn>ΣX1Y</mn>
                                    </mtd>
                                    <mtd>
                                        <mn>ΣX1^2</mn>
                                    </mtd>
                                    <mtd>
                                        <mn>ΣX1X2</mn>
                                    </mtd>
                                    <mtd>
                                        <mn>ΣX1X3</mn>
                                    </mtd>
                                </mtr>
                                <mtr>
                                    <mtd>
                                        <mn>ΣX2Y</mn>
                                    </mtd>
                                    <mtd>
                                        <mn>ΣX1X2</mn>
                                    </mtd>
                                    <mtd>
                                        <mn>ΣX2^2</mn>
                                    </mtd>
                                    <mtd>
                                        <mn>ΣX2X3</mn>
                                    </mtd>
                                </mtr>
                                <mtr>
                                    <mtd>
                                        <mn>ΣX3Y</mn>
                                    </mtd>
                                    <mtd>
                                        <mn>ΣX1X3</mn>
                                    </mtd>
                                    <mtd>
                                        <mn>ΣX2X3</mn>
                                    </mtd>
                                    <mtd>
                                        <mn>ΣX3^2</mn>
                                    </mtd>
                                </mtr>
                            </mtable>
                            <mo>]</mo>
                        </mrow>
                    </math>
                    <p>Matriks A2 = </p>
                    <math>
                        <mrow>
                            <mo>[</mo>
                            <mtable>
                                <mtr>
                                    <mtd>
                                        <mn>n</mn>
                                    </mtd>
                                    <mtd>
                                        <mn>ΣY</mn>
                                    </mtd>
                                    <mtd>
                                        <mn>ΣX2</mn>
                                    </mtd>
                                    <mtd>
                                        <mn>ΣX3</mn>
                                    </mtd>
                                </mtr>
                                <mtr>
                                    <mtd>
                                        <mn>ΣX1</mn>
                                    </mtd>
                                    <mtd>
                                        <mn>ΣX1Y</mn>
                                    </mtd>
                                    <mtd>
                                        <mn>ΣX1X2</mn>
                                    </mtd>
                                    <mtd>
                                        <mn>ΣX1X3</mn>
                                    </mtd>
                                </mtr>
                                <mtr>
                                    <mtd>
                                        <mn>ΣX2</mn>
                                    </mtd>
                                    <mtd>
                                        <mn>ΣX2Y</mn>
                                    </mtd>
                                    <mtd>
                                        <mn>ΣX2^2</mn>
                                    </mtd>
                                    <mtd>
                                        <mn>ΣX2X3</mn>
                                    </mtd>
                                </mtr>
                                <mtr>
                                    <mtd>
                                        <mn>ΣX3</mn>
                                    </mtd>
                                    <mtd>
                                        <mn>ΣX3Y</mn>
                                    </mtd>
                                    <mtd>
                                        <mn>ΣX2X3</mn>
                                    </mtd>
                                    <mtd>
                                        <mn>ΣX3^2</mn>
                                    </mtd>
                                </mtr>
                            </mtable>
                            <mo>]</mo>
                        </mrow>
                    </math>
                </div>
                <div class="matriks-row">
                    <p>Matriks A3 = </p>
                    <math>
                        <mrow>
                            <mo>[</mo>
                            <mtable>
                                <mtr>
                                    <mtd>
                                        <mn>n</mn>
                                    </mtd>
                                    <mtd>
                                        <mn>ΣX1</mn>
                                    </mtd>
                                    <mtd>
                                        <mn>ΣY</mn>
                                    </mtd>
                                    <mtd>
                                        <mn>ΣX3</mn>
                                    </mtd>
                                </mtr>
                                <mtr>
                                    <mtd>
                                        <mn>ΣX1</mn>
                                    </mtd>
                                    <mtd>
                                        <mn>ΣX1^2</mn>
                                    </mtd>
                                    <mtd>
                                        <mn>ΣX1Y</mn>
                                    </mtd>
                                    <mtd>
                                        <mn>ΣX1X3</mn>
                                    </mtd>
                                </mtr>
                                <mtr>
                                    <mtd>
                                        <mn>ΣX2</mn>
                                    </mtd>
                                    <mtd>
                                        <mn>ΣX1X2</mn>
                                    </mtd>
                                    <mtd>
                                        <mn>ΣX2Y</mn>
                                    </mtd>
                                    <mtd>
                                        <mn>ΣX2X3</mn>
                                    </mtd>
                                </mtr>
                                <mtr>
                                    <mtd>
                                        <mn>ΣX3</mn>
                                    </mtd>
                                    <mtd>
                                        <mn>ΣX1X3</mn>
                                    </mtd>
                                    <mtd>
                                        <mn>ΣX3Y</mn>
                                    </mtd>
                                    <mtd>
                                        <mn>ΣX3^2</mn>
                                    </mtd>
                                </mtr>
                            </mtable>
                            <mo>]</mo>
                        </mrow>
                    </math>
                    <p>Matriks A4 = </p>
                    <math>
                        <mrow>
                            <mo>[</mo>
                            <mtable>
                                <mtr>
                                    <mtd>
                                        <mn>n</mn>
                                    </mtd>
                                    <mtd>
                                        <mn>ΣX1</mn>
                                    </mtd>
                                    <mtd>
                                        <mn>ΣX2</mn>
                                    </mtd>
                                    <mtd>
                                        <mn>ΣY</mn>
                                    </mtd>
                                </mtr>
                                <mtr>
                                    <mtd>
                                        <mn>ΣX1</mn>
                                    </mtd>
                                    <mtd>
                                        <mn>ΣX1^2</mn>
                                    </mtd>
                                    <mtd>
                                        <mn>ΣX1X2</mn>
                                    </mtd>
                                    <mtd>
                                        <mn>ΣX1Y</mn>
                                    </mtd>
                                </mtr>
                                <mtr>
                                    <mtd>
                                        <mn>ΣX2</mn>
                                    </mtd>
                                    <mtd>
                                        <mn>ΣX1X2</mn>
                                    </mtd>
                                    <mtd>
                                        <mn>ΣX2^2</mn>
                                    </mtd>
                                    <mtd>
                                        <mn>ΣX2Y</mn>
                                    </mtd>
                                </mtr>
                                <mtr>
                                    <mtd>
                                        <mn>ΣX3</mn>
                                    </mtd>
                                    <mtd>
                                        <mn>ΣX1X3</mn>
                                    </mtd>
                                    <mtd>
                                        <mn>ΣX2X3</mn>
                                    </mtd>
                                    <mtd>
                                        <mn>ΣX3Y</mn>
                                    </mtd>
                                </mtr>
                            </mtable>
                            <mo>]</mo>
                        </mrow>
                    </math>
                </div>
                <p>Selanjutnya kita harus mengisi matriks tersebut dengan data dari tabel diatas.</p>
                <div class="matriks-row">
                    <p>Matriks A = </p>
                    <math>
                        <mrow>
                            <mo>[</mo>
                            <mtable>
                                <mtr>
                                    <mtd>
                                        <mn>
                                            <?= count($totalX1_1) ?>
                                        </mn>
                                    </mtd>
                                    <mtd>
                                        <mn>
                                            <?= $totalX1z ?>
                                        </mn>
                                    </mtd>
                                    <mtd>
                                        <mn>
                                            <?= $totalX2z ?>
                                        </mn>
                                    </mtd>
                                    <mtd>
                                        <mn>
                                            <?= $totalX3z ?>
                                        </mn>
                                    </mtd>
                                </mtr>
                                <mtr>
                                    <mtd>
                                        <mn>
                                            <?= $totalX1z ?>
                                        </mn>
                                    </mtd>
                                    <mtd>
                                        <mn>
                                            <?= $totalX1X1z ?>
                                        </mn>
                                    </mtd>
                                    <mtd>
                                        <mn>
                                            <?= $totalX1X2z ?>
                                        </mn>
                                    </mtd>
                                    <mtd>
                                        <mn>
                                            <?= $totalX1X3z ?>
                                        </mn>
                                    </mtd>
                                </mtr>
                                <mtr>
                                    <mtd>
                                        <mn>
                                            <?= $totalX2z ?>
                                        </mn>
                                    </mtd>
                                    <mtd>
                                        <mn>
                                            <?= $totalX1X2z ?>
                                        </mn>
                                    </mtd>
                                    <mtd>
                                        <mn>
                                            <?= $totalX2X2z ?>
                                        </mn>
                                    </mtd>
                                    <mtd>
                                        <mn>
                                            <?= $totalX2X3z ?>
                                        </mn>
                                    </mtd>
                                </mtr>
                                <mtr>
                                    <mtd>
                                        <mn>
                                            <?= $totalX3z ?>
                                        </mn>
                                    </mtd>
                                    <mtd>
                                        <mn>
                                            <?= $totalX1X3z ?>
                                        </mn>
                                    </mtd>
                                    <mtd>
                                        <mn>
                                            <?= $totalX2X3z ?>
                                        </mn>
                                    </mtd>
                                    <mtd>
                                        <mn>
                                            <?= $totalX3X3z ?>
                                        </mn>
                                    </mtd>
                                </mtr>
                            </mtable>
                            <mo>]</mo>
                        </mrow>
                    </math>
                </div>
                <div class="matriks-row">
                    <p>Matriks H = </p>
                    <math>
                        <mrow>
                            <mo>[</mo>
                            <mtable>
                                <mtr>
                                    <mtd>
                                        <mn>
                                            <?= $totalYz ?>
                                        </mn>
                                    </mtd>
                                </mtr>
                                <mtr>
                                    <mtd>
                                        <mn>
                                            <?= $totalX1Yz ?>
                                        </mn>
                                    </mtd>
                                </mtr>
                                <mtr>
                                    <mtd>
                                        <mn>
                                            <?= $totalX2Yz ?>
                                        </mn>
                                    </mtd>
                                </mtr>
                                <mtr>
                                    <mtd>
                                        <mn>
                                            <?= $totalX3Yz ?>
                                        </mn>
                                    </mtd>
                                </mtr>
                            </mtable>
                            <mo>]</mo>
                        </mrow>
                    </math>
                </div>
                <div class="matriks-row">
                    <p>Matriks A1 = </p>
                    <math>
                        <mrow>
                            <mo>[</mo>
                            <mtable>
                                <mtr>
                                    <mtd>
                                        <mn>
                                            <?= $totalYz ?>
                                        </mn>
                                    </mtd>
                                    <mtd>
                                        <mn>
                                            <?= $totalX1z ?>
                                        </mn>
                                    </mtd>
                                    <mtd>
                                        <mn>
                                            <?= $totalX2z ?>
                                        </mn>
                                    </mtd>
                                    <mtd>
                                        <mn>
                                            <?= $totalX3z ?>
                                        </mn>
                                    </mtd>
                                </mtr>
                                <mtr>
                                    <mtd>
                                        <mn>
                                            <?= $totalX1Yz ?>
                                        </mn>
                                    </mtd>
                                    <mtd>
                                        <mn>
                                            <?= $totalX1X1z ?>
                                        </mn>
                                    </mtd>
                                    <mtd>
                                        <mn>
                                            <?= $totalX1X2z ?>
                                        </mn>
                                    </mtd>
                                    <mtd>
                                        <mn>
                                            <?= $totalX1X3z ?>
                                        </mn>
                                    </mtd>
                                </mtr>
                                <mtr>
                                    <mtd>
                                        <mn>
                                            <?= $totalX2Yz ?>
                                        </mn>
                                    </mtd>
                                    <mtd>
                                        <mn>
                                            <?= $totalX1X2z ?>
                                        </mn>
                                    </mtd>
                                    <mtd>
                                        <mn>
                                            <?= $totalX2X2z ?>
                                        </mn>
                                    </mtd>
                                    <mtd>
                                        <mn>
                                            <?= $totalX2X3z ?>
                                        </mn>
                                    </mtd>
                                </mtr>
                                <mtr>
                                    <mtd>
                                        <mn>
                                            <?= $totalX3Yz ?>
                                        </mn>
                                    </mtd>
                                    <mtd>
                                        <mn>
                                            <?= $totalX1X3z ?>
                                        </mn>
                                    </mtd>
                                    <mtd>
                                        <mn>
                                            <?= $totalX2X3z ?>
                                        </mn>
                                    </mtd>
                                    <mtd>
                                        <mn>
                                            <?= $totalX3X3z ?>
                                        </mn>
                                    </mtd>
                                </mtr>
                            </mtable>
                            <mo>]</mo>
                        </mrow>
                    </math>
                    <p>Matriks A2 = </p>
                    <math>
                        <mrow>
                            <mo>[</mo>
                            <mtable>
                                <mtr>
                                    <mtd>
                                        <mn>
                                            <?= count($totalX1_1) ?>
                                        </mn>
                                    </mtd>
                                    <mtd>
                                        <mn>
                                            <?= $totalYz ?>
                                        </mn>
                                    </mtd>
                                    <mtd>
                                        <mn>
                                            <?= $totalX2z ?>
                                        </mn>
                                    </mtd>
                                    <mtd>
                                        <mn>
                                            <?= $totalX3z ?>
                                        </mn>
                                    </mtd>
                                </mtr>
                                <mtr>
                                    <mtd>
                                        <mn>
                                            <?= $totalX1z ?>
                                        </mn>
                                    </mtd>
                                    <mtd>
                                        <mn>
                                            <?= $totalX1Yz ?>
                                        </mn>
                                    </mtd>
                                    <mtd>
                                        <mn>
                                            <?= $totalX1X2z ?>
                                        </mn>
                                    </mtd>
                                    <mtd>
                                        <mn>
                                            <?= $totalX1X3z ?>
                                        </mn>
                                    </mtd>
                                </mtr>
                                <mtr>
                                    <mtd>
                                        <mn>
                                            <?= $totalX2z ?>
                                        </mn>
                                    </mtd>
                                    <mtd>
                                        <mn>
                                            <?= $totalX2Yz ?>
                                        </mn>
                                    </mtd>
                                    <mtd>
                                        <mn>
                                            <?= $totalX2X2z ?>
                                        </mn>
                                    </mtd>
                                    <mtd>
                                        <mn>
                                            <?= $totalX2X3z ?>
                                        </mn>
                                    </mtd>
                                </mtr>
                                <mtr>
                                    <mtd>
                                        <mn>
                                            <?= $totalX3z ?>
                                        </mn>
                                    </mtd>
                                    <mtd>
                                        <mn>
                                            <?= $totalX3Yz ?>
                                        </mn>
                                    </mtd>
                                    <mtd>
                                        <mn>
                                            <?= $totalX2X3z ?>
                                        </mn>
                                    </mtd>
                                    <mtd>
                                        <mn>
                                            <?= $totalX3X3z ?>
                                        </mn>
                                    </mtd>
                                </mtr>
                            </mtable>
                            <mo>]</mo>
                        </mrow>
                    </math>
                </div>
                <div class="matriks-row">
                    <p>Matriks A3 = </p>
                    <math>
                        <mrow>
                            <mo>[</mo>
                            <mtable>
                                <mtr>
                                    <mtd>
                                        <mn>
                                            <?= count($totalX1_1) ?>
                                        </mn>
                                    </mtd>
                                    <mtd>
                                        <mn>
                                            <?= $totalX1z ?>
                                        </mn>
                                    </mtd>
                                    <mtd>
                                        <mn>
                                            <?= $totalYz ?>
                                        </mn>
                                    </mtd>
                                    <mtd>
                                        <mn>
                                            <?= $totalX3z ?>
                                        </mn>
                                    </mtd>
                                </mtr>
                                <mtr>
                                    <mtd>
                                        <mn>
                                            <?= $totalX1z ?>
                                        </mn>
                                    </mtd>
                                    <mtd>
                                        <mn>
                                            <?= $totalX1X1z ?>
                                        </mn>
                                    </mtd>
                                    <mtd>
                                        <mn>
                                            <?= $totalX1Yz ?>
                                        </mn>
                                    </mtd>
                                    <mtd>
                                        <mn>
                                            <?= $totalX1X3z ?>
                                        </mn>
                                    </mtd>
                                </mtr>
                                <mtr>
                                    <mtd>
                                        <mn>
                                            <?= $totalX2z ?>
                                        </mn>
                                    </mtd>
                                    <mtd>
                                        <mn>
                                            <?= $totalX1X2z ?>
                                        </mn>
                                    </mtd>
                                    <mtd>
                                        <mn>
                                            <?= $totalX2Yz ?>
                                        </mn>
                                    </mtd>
                                    <mtd>
                                        <mn>
                                            <?= $totalX2X3z ?>
                                        </mn>
                                    </mtd>
                                </mtr>
                                <mtr>
                                    <mtd>
                                        <mn>
                                            <?= $totalX3z ?>
                                        </mn>
                                    </mtd>
                                    <mtd>
                                        <mn>
                                            <?= $totalX1X3z ?>
                                        </mn>
                                    </mtd>
                                    <mtd>
                                        <mn>
                                            <?= $totalX3Yz ?>
                                        </mn>
                                    </mtd>
                                    <mtd>
                                        <mn>
                                            <?= $totalX3X3z ?>
                                        </mn>
                                    </mtd>
                                </mtr>
                            </mtable>
                            <mo>]</mo>
                        </mrow>
                    </math>
                    <p>Matriks A4 = </p>
                    <math>
                        <mrow>
                            <mo>[</mo>
                            <mtable>
                                <mtr>
                                    <mtd>
                                        <mn>
                                            <?= count($totalX1_1) ?>
                                        </mn>
                                    </mtd>
                                    <mtd>
                                        <mn>
                                            <?= $totalX1z ?>
                                        </mn>
                                    </mtd>
                                    <mtd>
                                        <mn>
                                            <?= $totalX2z ?>
                                        </mn>
                                    </mtd>
                                    <mtd>
                                        <mn>
                                            <?= $totalYz ?>
                                        </mn>
                                    </mtd>
                                </mtr>
                                <mtr>
                                    <mtd>
                                        <mn>
                                            <?= $totalX1z ?>
                                        </mn>
                                    </mtd>
                                    <mtd>
                                        <mn>
                                            <?= $totalX1X1z ?>
                                        </mn>
                                    </mtd>
                                    <mtd>
                                        <mn>
                                            <?= $totalX1X2z ?>
                                        </mn>
                                    </mtd>
                                    <mtd>
                                        <mn>
                                            <?= $totalX1Yz ?>
                                        </mn>
                                    </mtd>
                                </mtr>
                                <mtr>
                                    <mtd>
                                        <mn>
                                            <?= $totalX2z ?>
                                        </mn>
                                    </mtd>
                                    <mtd>
                                        <mn>
                                            <?= $totalX1X2z ?>
                                        </mn>
                                    </mtd>
                                    <mtd>
                                        <mn>
                                            <?= $totalX2X2z ?>
                                        </mn>
                                    </mtd>
                                    <mtd>
                                        <mn>
                                            <?= $totalX2Yz ?>
                                        </mn>
                                    </mtd>
                                </mtr>
                                <mtr>
                                    <mtd>
                                        <mn>
                                            <?= $totalX3z ?>
                                        </mn>
                                    </mtd>
                                    <mtd>
                                        <mn>
                                            <?= $totalX1X3z ?>
                                        </mn>
                                    </mtd>
                                    <mtd>
                                        <mn>
                                            <?= $totalX2X3z ?>
                                        </mn>
                                    </mtd>
                                    <mtd>
                                        <mn>
                                            <?= $totalX3Yz ?>
                                        </mn>
                                    </mtd>
                                </mtr>
                            </mtable>
                            <mo>]</mo>
                        </mrow>
                    </math>
                </div>
                <p>Lalu kita lakukan perhitungan untuk mencari nilai determinan dari matriks A, A1 sampai A4 </br>
                    Untuk melakukan perhitungannya anda bisa menuju ke <a
                        href="http://matrix.reshish.com/determinant.php" target="_blank" rel="noopenner norefferer">Link
                        is here</a></p>
                <div class="matriks-row">
                    <table>
                        <tr>
                            <td class="diagonal-cross"></td>
                            <td>A</td>
                            <td>A1</td>
                            <td>A2</td>
                            <td>A3</td>
                            <td>A4</td>
                        </tr>
                        <tr>
                            <td>Determinan</td>
                            <td>
                                <?= round(hitungdeterminan($matriksA, 4)) ?>
                            </td>
                            <td>
                                <?= round(hitungdeterminan($matriksA1, 4)) ?>
                            </td>
                            <td>
                                <?= round(hitungdeterminan($matriksA2, 4)) ?>
                            </td>
                            <td>
                                <?= round(hitungdeterminan($matriksA3, 4)) ?>
                            </td>
                            <td>
                                <?= round(hitungdeterminan($matriksA4, 4)) ?>
                            </td>
                        </tr>
                    </table>
                </div>
                <p>Dari hasil determinan yang didapat kita bisa mencari nilai dari \(a\) dan juga β masing-masing
                    variabel bebas.</p>
                <p><span class="rumus">\(a = Determinan A1 / Determinan A\)</span></p>
                </br>
                <p><span class="rumus">\(βn = Determinan An / Determinan A\)</span></p>
                <div class="rumus-center">
                    <p>\(a =
                        \frac{
                        <?= round(hitungdeterminan($matriksA1, 4)) ?>}{
                        <?= round(hitungdeterminan($matriksA, 4)) ?>} =
                        <?= round($koefb0, 4) ?>\)
                    </p>
                    <p>\(β1 =
                        \frac{
                        <?= round(hitungdeterminan($matriksA2, 4)) ?>}{
                        <?= round(hitungdeterminan($matriksA, 4)) ?>} =
                        <?= round($koefb1, 4) ?>\)
                    </p>
                    <p>\(β2 =
                        \frac{
                        <?= round(hitungdeterminan($matriksA3, 4)) ?>}{
                        <?= round(hitungdeterminan($matriksA, 4)) ?>} =
                        <?= round($koefb2, 4) ?>\)
                    </p>
                    <p>\(β3 =
                        \frac{
                        <?= round(hitungdeterminan($matriksA4, 4)) ?>}{
                        <?= round(hitungdeterminan($matriksA, 4)) ?>} =
                        <?= round($koefb3, 4) ?>\)
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- RLB Section End -->

    <!-- Uji R2 Section Start -->
    <section id="ujiR" class="ujiR">
        <h2>Uji <span>R<sup>2</sup></span></h2>
        <div class="row">
            <div class="content">
                <p>Uji R<sup>2</sup> bertujuan untuk mengetahui seberapa besar kemampuan variabel bebas menjelaskan
                    variabel terikat.</p>
                <p>Berikut adalah persamaan / rumus dari uji R<sup>2</sup> : </p>
                <p><span class="rumus"> \(R^2 = \frac{β1.Σx_1y + β2.Σx_2y + β3.Σx_3y}{Σy^2}\)</span></p>
                <p>Untuk \(Σx_1y, Σx_2y, Σx_3y\) dan \(Σy^2\) kita perlu untuk mencari nilai nya terlebih dahulu.
                    Berikut adalah cara untuk mencari nilai nya masing-masing : </p>
                <div class="rumus-between">
                    <p>
                        \(Σx_1y = ΣX_1Y - \frac{ΣX1 * ΣY}{n}\)
                        \(Σx_1y =
                        <?= $totalX1Yz ?> - \frac{(
                        <?= $totalX1z ?> *
                        <?= $totalYz ?>)}{
                        <?= count($totalX1_1) ?>}\)
                        \(Σx_1y =
                        <?= $totalX1Yz ?> - \frac{
                        <?= $totalX1z * $totalYz ?>}{
                        <?= count($totalX1_1) ?>}\)
                        \(Σx_1y =
                        <?= $totalX1Yz ?> -
                        <?= $totalX1z * $totalYz / count($totalX1_1) ?>
                        \)
                        </br>
                        \(Σx_1y =
                        <?= $totalX1Yz - ($totalX1z * $totalYz / count($totalX1_1)) ?>
                        \)
                    </p>
                    <p>
                        \(Σx_2y = ΣX_2Y - \frac{ΣX2 * ΣY}{n}\)
                        \(Σx_2y =
                        <?= $totalX2Yz ?> - \frac{(
                        <?= $totalX2z ?> *
                        <?= $totalYz ?>)}{
                        <?= count($totalX1_1) ?>}\)
                        \(Σx_2y =
                        <?= $totalX2Yz ?> - \frac{
                        <?= $totalX2z * $totalYz ?>}{
                        <?= count($totalX1_1) ?>}\)
                        \(Σx_2y =
                        <?= $totalX2Yz ?> -
                        <?= $totalX2z * $totalYz / count($totalX1_1) ?>
                        \)
                        </br>
                        \(Σx_2y =
                        <?= $totalX2Yz - ($totalX2z * $totalYz / count($totalX1_1)) ?>
                        \)
                    </p>
                    <p>
                        \(Σx_3y = ΣX_3Y - \frac{ΣX3 * ΣY}{n}\)
                        \(Σx_3y =
                        <?= $totalX3Yz ?> - \frac{(
                        <?= $totalX3z ?> *
                        <?= $totalYz ?>)}{
                        <?= count($totalX1_1) ?>}\)
                        \(Σx_3y =
                        <?= $totalX3Yz ?> - \frac{
                        <?= $totalX3z * $totalYz ?>}{
                        <?= count($totalX1_1) ?>}\)
                        \(Σx_3y =
                        <?= $totalX3Yz ?> -
                        <?= $totalX3z * $totalYz / count($totalX1_1) ?>
                        \)
                        </br>
                        \(Σx_3y =
                        <?= $totalX3Yz - ($totalX3z * $totalYz / count($totalX1_1)) ?>
                        \)
                    </p>
                    <p>
                        \(Σy^2 = ΣY^2 - \frac{ΣY * ΣY}{n}\)
                        \(Σy^2 =
                        <?= $totalYYz ?> - \frac{(
                        <?= $totalYz ?> *
                        <?= $totalYz ?>)}{
                        <?= count($totalX1_1) ?>}\)
                        \(Σy^2 =
                        <?= $totalYYz ?> - \frac{
                        <?= $totalYz * $totalYz ?>}{
                        <?= count($totalX1_1) ?>}\)
                        \(Σy^2 =
                        <?= $totalYYz ?> -
                        <?= $totalYz * $totalYz / count($totalX1_1) ?>
                        \)
                        </br>
                        \(Σy^2 =
                        <?= $totalYYz - ($totalYz * $totalYz / count($totalX1_1)) ?>
                        \)
                    </p>
                </div>
                <p>Setelah mendapatkan nilainya maka kita bisa melanjutkan untuk menghitung nilai R<sup>2</sup></p>
                <div class="rumus-center">
                    <p>
                        \(R^2 = \frac{
                        <?= round($koefb1, 4) ?> x
                        <?= $sigmax1y ?> +
                        <?= round($koefb2, 4) ?> x
                        <?= $sigmax2y ?> +
                        <?= round($koefb3, 4) ?> x
                        <?= $sigmax3y ?>}{
                        <?= $sigmayy ?>}\)
                    </p>
                    <p>\(R^2 = \frac{
                        <?= round($koefb1, 4) * $sigmax1y ?> +
                        <?= round($koefb2, 4) * $sigmax2y ?> +
                        <?= round($koefb3, 4) * $sigmax3y ?> }{
                        <?= $sigmayy ?>}\)
                    </p>
                    <p>
                        \(R^2 = \frac{
                        <?= (round($koefb1, 4) * $sigmax1y) + (round($koefb2, 4) * $sigmax2y) + (round($koefb3, 4) * $sigmax3y) ?>}{
                        <?= $sigmayy ?>}\)
                    </p>
                    <p>
                        \(R^2 =
                        <?= round($rsquare, 4) ?>\)
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Uji R2 Section End -->

    <!-- Uji F Section Start -->
    <section id="ujiF" class="ujiF">
        <h2>Uji <span>F</span></h2>
        <div class="row">
            <div class="content">
                <p>Uji F bertujuan untuk mengetahui tingkat signifikansi variabel bebas secara bersama-sama terhadap
                    variabel terikat</p>
                <p>Berikut adalah persamaan / rumus dari uji F : </p>
                <p><span class="rumus">\(F = \frac{R^2 / K}{(1-R^2)/(n-K-1)}\)</span></p>
                <p><span class="p1">Dimana : </br> K = Jumlah Variabel Bebas </br> n = Jumlah Data Responden</span></p>
                <p>Karena semua data sudah diperoleh maka kita bisa melanjutkan perhitungan kita. </p>
                <div class="rumus-center">
                    <p>\(F = \frac{
                        <?= round($rsquare, 4) ?> / 3}{(1-
                        <?= round($rsquare, 4) ?>)/(
                        <?= count($totalX1_1) ?>- 3- 1)}\)
                    </p>
                    <p>\(F = \frac{
                        <?= round($rsquare / 3, 4) ?>}{
                        <?= 1 - round($rsquare, 4) ?>/
                        <?= count($totalX1_1) - 3 - 1 ?>}\)
                    </p>
                    <p>\(F = \frac{
                        <?= round($rsquare / 3, 4) ?>}{
                        <?= round((1 - $rsquare) / (count($totalX1_1) - 3 - 1), 4) ?>}\)
                    </p>
                    <p>\(F =
                        <?= round($F, 4) ?>\)
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Uji F Section End -->

    <!-- Uji T Section Start -->
    <section id="ujiT" class="ujiT">
        <h2>Uji <span>T</span></h2>
        <div class="row">
            <div class="content">
                <p>Uji t bertujuan untuk mengetahui tingkat signifikansi variabel bebas secara partial atau terpisah
                    terhadap variabel terikat</p>
                <p>Berikut adalah persamaan / rumus dari uji T : </p>
                <div class="rumus-grid">
                    <p>
                        \(t_b{_1} = \frac{b_1}{S_b{_1}}\)
                    </p>
                    <p>
                        \(t_b{_2} = \frac{b_2}{S_b{_2}}\)
                    </p>
                    <p>
                        \(t_b{_3} = \frac{b_3}{S_b{_3}}\)

                    </p>
                    <p>
                        \(t_b{_1} = \frac{
                        <?= round($koefb1, 4) ?>}{
                        <?= round($std_error_b1, 4) ?>}\)
                    </p>
                    <p>
                        \(t_b{_2} = \frac{
                        <?= round($koefb2, 4) ?>}{
                        <?= round($std_error_b2, 4) ?>}\)
                    </p>
                    <p>
                        \(t_b{_3} = \frac{
                        <?= round($koefb3, 4) ?>}{
                        <?= round($std_error_b3, 4) ?>}\)
                    </p>
                    <p>
                        \(t_b{_1} =
                        <?= $ujiT_X1 ?>\)
                    </p>
                    <p>
                        \(t_b{_2} =
                        <?= $ujiT_X2 ?>\)
                    </p>
                    <p>
                        \(t_b{_3} =
                        <?= $ujiT_X3 ?>\)
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Uji T Section End -->

    <!-- Feather Icons -->
    <script>
        feather.replace();
    </script>
    <!-- My Javascript -->
    <script src="js/script.js"></script>
</body>

</html>