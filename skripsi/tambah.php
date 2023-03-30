<?php
require('functions_tambah.php');

if (isset($_POST["submit"])) {
    if (tambah($_POST) > 0) {
        echo "
        <script>
        alert ('Data Berhasil Ditambahkan!');
        document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert ('Data Gagal Ditambahkan!');
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Tambah Data</title>
</head>

<body>
    <section id="tambah" class="tambah">
        <h2>Tambah <span>Data</span></h2>
        <div class="row">
            <div class="content">
                <p>Silakan lakukan pengisian untuk meneliti kepuasan pengguna website. </p>
                <form action="" method="post">
                    <table>
                        <th colspan="2">Usability</th>
                        <tr>
                            <td>X1_1 :</td>
                            <td class="bigger-text">Apakah pengguna merasa mudah untuk mempelajari pengoperasian website
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">Sangat Tidak Setuju
                                <input type="radio" name="X1_1" id="X1_1_1" value="1" checked><label
                                    for="X1_1_1">1</label>
                                <input type="radio" name="X1_1" id="X1_1_2" value="2"><label for="X1_1_2">2</label>
                                <input type="radio" name="X1_1" id="X1_1_3" value="3"><label for="X1_1_3">3</label>
                                <input type="radio" name="X1_1" id="X1_1_4" value="4"><label for="X1_1_4">4</label>
                                Sangat Setuju
                            </td>
                        </tr>
                        <tr>
                            <td>X1_2 :</td>
                            <td class="bigger-text">Apakah interaksi antara website dengan pengguna jelas dan mudah
                                dipahami</td>
                        </tr>
                        <tr>
                            <td colspan="2">Sangat Tidak Setuju
                                <input type="radio" name="X1_2" id="X1_2_1" value="1" checked><label
                                    for="X1_2_1">1</label>
                                <input type="radio" name="X1_2" id="X1_2_2" value="2"><label for="X1_2_2">2</label>
                                <input type="radio" name="X1_2" id="X1_2_3" value="3"><label for="X1_2_3">3</label>
                                <input type="radio" name="X1_2" id="X1_2_4" value="4"><label for="X1_2_4">4</label>
                                Sangat Setuju
                            </td>
                        </tr>
                        <tr>
                            <td>X1_3 :</td>
                            <td class="bigger-text">Apakah pengguna merasa mudah untuk bernavigasi dalam website</td>
                        </tr>
                        <tr>
                            <td colspan="2">Sangat Tidak Setuju
                                <input type="radio" name="X1_3" id="X1_3_1" value="1" checked><label
                                    for="X1_3_1">1</label>
                                <input type="radio" name="X1_3" id="X1_3_2" value="2"><label for="X1_3_2">2</label>
                                <input type="radio" name="X1_3" id="X1_3_3" value="3"><label for="X1_3_3">3</label>
                                <input type="radio" name="X1_3" id="X1_3_4" value="4"><label for="X1_3_4">4</label>
                                Sangat Setuju
                            </td>
                        </tr>
                        <tr>
                            <td>X1_4 :</td>
                            <td class="bigger-text">Apakah website memiliki tampilan yang menarik</td>
                        </tr>
                        <tr>
                            <td colspan="2">Sangat Tidak Setuju
                                <input type="radio" name="X1_4" id="X1_4_1" value="1" checked><label
                                    for="X1_4_1">1</label>
                                <input type="radio" name="X1_4" id="X1_4_2" value="2"><label for="X1_4_2">2</label>
                                <input type="radio" name="X1_4" id="X1_4_3" value="3"><label for="X1_4_3">3</label>
                                <input type="radio" name="X1_4" id="X1_4_4" value="4"><label for="X1_4_4">4</label>
                                Sangat Setuju
                            </td>
                        </tr>
                        <th colspan="2">Information Quality</th>
                        <tr>
                            <td>X2_1 :</td>
                            <td class="bigger-text">Apakah website memberikan informasi yang akurat</td>
                        </tr>
                        <tr>
                            <td colspan="2">Sangat Tidak Setuju
                                <input type="radio" name="X2_1" id="X2_1_1" value="1" checked><label
                                    for="X2_1_1">1</label>
                                <input type="radio" name="X2_1" id="X2_1_2" value="2"><label for="X2_1_2">2</label>
                                <input type="radio" name="X2_1" id="X2_1_3" value="3"><label for="X2_1_3">3</label>
                                <input type="radio" name="X2_1" id="X2_1_4" value="4"><label for="X2_1_4">4</label>
                                Sangat Setuju
                            </td>
                        </tr>
                        <tr>
                            <td>X2_2 :</td>
                            <td class="bigger-text">Apakah website memberikan informasi yang dapat dipercaya</td>
                        </tr>
                        <tr>
                            <td colspan="2">Sangat Tidak Setuju
                                <input type="radio" name="X2_2" id="X2_2_1" value="1" checked><label
                                    for="X2_2_1">1</label>
                                <input type="radio" name="X2_2" id="X2_2_2" value="2"><label for="X2_2_2">2</label>
                                <input type="radio" name="X2_2" id="X2_2_3" value="3"><label for="X2_2_3">3</label>
                                <input type="radio" name="X2_2" id="X2_2_4" value="4"><label for="X2_2_4">4</label>
                                Sangat Setuju
                            </td>
                        </tr>
                        <tr>
                            <td>X2_3 :</td>
                            <td class="bigger-text">Apakah website memberikan informasi secara tepat waktu</td>
                        </tr>
                        <tr>
                            <td colspan="2">Sangat Tidak Setuju
                                <input type="radio" name="X2_3" id="X2_3_1" value="1" checked><label
                                    for="X2_3_1">1</label>
                                <input type="radio" name="X2_3" id="X2_3_2" value="2"><label for="X2_3_2">2</label>
                                <input type="radio" name="X2_3" id="X2_3_3" value="3"><label for="X2_3_3">3</label>
                                <input type="radio" name="X2_3" id="X2_3_4" value="4"><label for="X2_3_4">4</label>
                                Sangat Setuju
                            </td>
                        </tr>
                        <tr>
                            <td>X2_4 :</td>
                            <td class="bigger-text">Apakah website menyediakan informasi yang lengkap dan terperinci
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">Sangat Tidak Setuju
                                <input type="radio" name="X2_4" id="X2_4_1" value="1" checked><label
                                    for="X2_4_1">1</label>
                                <input type="radio" name="X2_4" id="X2_4_2" value="2"><label for="X2_4_2">2</label>
                                <input type="radio" name="X2_4" id="X2_4_3" value="3"><label for="X2_4_3">3</label>
                                <input type="radio" name="X2_4" id="X2_4_4" value="4"><label for="X2_4_4">4</label>
                                Sangat Setuju
                            </td>
                        </tr>
                        <th colspan="2">Service Interaction Quality</th>
                        <tr>
                            <td>X3_1 :</td>
                            <td class="bigger-text">Apakah website memiliki reputasi yang baik</td>
                        </tr>
                        <tr>
                            <td colspan="2">Sangat Tidak Setuju
                                <input type="radio" name="X3_1" id="X3_1_1" value="1" checked><label
                                    for="X3_1_1">1</label>
                                <input type="radio" name="X3_1" id="X3_1_2" value="2"><label for="X3_1_2">2</label>
                                <input type="radio" name="X3_1" id="X3_1_3" value="3"><label for="X3_1_3">3</label>
                                <input type="radio" name="X3_1" id="X3_1_4" value="4"><label for="X3_1_4">4</label>
                                Sangat Setuju
                            </td>
                        </tr>
                        <tr>
                            <td>X3_2 :</td>
                            <td class="bigger-text">Apakah website menjaga keamanaan data pribadi pengguna/member</td>
                        </tr>
                        <tr>
                            <td colspan="2">Sangat Tidak Setuju
                                <input type="radio" name="X3_2" id="X3_2_1" value="1" checked><label
                                    for="X3_2_1">1</label>
                                <input type="radio" name="X3_2" id="X3_2_2" value="2"><label for="X3_2_2">2</label>
                                <input type="radio" name="X3_2" id="X3_2_3" value="3"><label for="X3_2_3">3</label>
                                <input type="radio" name="X3_2" id="X3_2_4" value="4"><label for="X3_2_4">4</label>
                                Sangat Setuju
                            </td>
                        </tr>
                        <tr>
                            <td>X3_3 :</td>
                            <td class="bigger-text">Apakah website memberikan ruang untuk diskusi antar member</td>
                        </tr>
                        <tr>
                            <td colspan="2">Sangat Tidak Setuju
                                <input type="radio" name="X3_3" id="X3_3_1" value="1" checked><label
                                    for="X3_3_1">1</label>
                                <input type="radio" name="X3_3" id="X3_3_2" value="2"><label for="X3_3_2">2</label>
                                <input type="radio" name="X3_3" id="X3_3_3" value="3"><label for="X3_3_3">3</label>
                                <input type="radio" name="X3_3" id="X3_3_4" value="4"><label for="X3_3_4">4</label>
                                Sangat Setuju
                            </td>
                        </tr>
                        <tr>
                            <td>X3_4 :</td>
                            <td class="bigger-text">Apakah website memberi rasa aman pada pengguna saat mengunduh</td>
                        </tr>
                        <tr>
                            <td colspan="2">Sangat Tidak Setuju
                                <input type="radio" name="X3_4" id="X3_4_1" value="1" checked><label
                                    for="X3_4_1">1</label>
                                <input type="radio" name="X3_4" id="X3_4_2" value="2"><label for="X3_4_2">2</label>
                                <input type="radio" name="X3_4" id="X3_4_3" value="3"><label for="X3_4_3">3</label>
                                <input type="radio" name="X3_4" id="X3_4_4" value="4"><label for="X3_4_4">4</label>
                                Sangat Setuju
                            </td>
                        </tr>
                        <th colspan="2">Kepuasan Pengguna</th>
                        <tr>
                            <td>Y1 :</td>
                            <td class="bigger-text">Website ini efektif dalam penggunaannya</td>
                        </tr>
                        <tr>
                            <td colspan="2">Sangat Tidak Setuju
                                <input type="radio" name="Y1" id="Y1_1" value="1" checked><label for="Y1_1">1</label>
                                <input type="radio" name="Y1" id="Y1_2" value="2"><label for="Y1_2">2</label>
                                <input type="radio" name="Y1" id="Y1_3" value="3"><label for="Y1_3">3</label>
                                <input type="radio" name="Y1" id="Y1_4" value="4"><label for="Y1_4">4</label>
                                Sangat Setuju
                            </td>
                        </tr>
                        <tr>
                            <td>Y2 :</td>
                            <td class="bigger-text">Website ini efisien dalam penggunaannya</td>
                        </tr>
                        <tr>
                            <td colspan="2">Sangat Tidak Setuju
                                <input type="radio" name="Y2" id="Y2_1" value="1" checked><label for="Y2_1">1</label>
                                <input type="radio" name="Y2" id="Y2_2" value="2"><label for="Y2_2">2</label>
                                <input type="radio" name="Y2" id="Y2_3" value="3"><label for="Y2_3">3</label>
                                <input type="radio" name="Y2" id="Y2_4" value="4"><label for="Y2_4">4</label>
                                Sangat Setuju
                            </td>
                        </tr>
                        <tr>
                            <td>Y3 :</td>
                            <td class="bigger-text">Website ini memberi rasa keyakinan dalam penggunaannya</td>
                        </tr>
                        <tr>
                            <td colspan="2">Sangat Tidak Setuju
                                <input type="radio" name="Y3" id="Y3_1" value="1" checked><label for="Y3_1">1</label>
                                <input type="radio" name="Y3" id="Y3_2" value="2"><label for="Y3_2">2</label>
                                <input type="radio" name="Y3" id="Y3_3" value="3"><label for="Y3_3">3</label>
                                <input type="radio" name="Y3" id="Y3_4" value="4"><label for="Y3_4">4</label>
                                Sangat Setuju
                            </td>
                        </tr>
                        <tr>
                            <td>Y4 :</td>
                            <td class="bigger-text">Secara keseluruhan, saya puas dengan website ini</td>
                        </tr>
                        <tr>
                            <td colspan="2">Sangat Tidak Setuju
                                <input type="radio" name="Y4" id="Y4_1" value="1" checked><label for="Y4_1">1</label>
                                <input type="radio" name="Y4" id="Y4_2" value="2"><label for="Y4_2">2</label>
                                <input type="radio" name="Y4" id="Y4_3" value="3"><label for="Y4_3">3</label>
                                <input type="radio" name="Y4" id="Y4_4" value="4"><label for="Y4_4">4</label>
                                Sangat Setuju
                            </td>
                        </tr>
                        <tr class="no-border">
                            <td colspan="2"><button type="submit" name="submit">Send Data!</button></td>
                        </tr>
                        <table>
                </form>
            </div>
        </div>
    </section>
</body>

</html>