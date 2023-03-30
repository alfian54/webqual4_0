<?php
$conn = mysqli_connect("localhost", "root", "", "awicoffee");

function tambah($POST)
{
    global $conn;
    $X1_1 = $POST['X1_1'];
    $X1_2 = $POST['X1_2'];
    $X1_3 = $POST['X1_3'];
    $X1_4 = $POST['X1_4'];
    $X2_1 = $POST['X2_1'];
    $X2_2 = $POST['X2_2'];
    $X2_3 = $POST['X2_3'];
    $X2_4 = $POST['X2_4'];
    $X3_1 = $POST['X3_1'];
    $X3_2 = $POST['X3_2'];
    $X3_3 = $POST['X3_3'];
    $X3_4 = $POST['X3_4'];
    $Y1 = $POST['Y1'];
    $Y2 = $POST['Y2'];
    $Y3 = $POST['Y3'];
    $Y4 = $POST['Y4'];

    $query = "INSERT INTO kepuasan_pengguna__website___jawaban____form_responses_1 VALUES ('',$X1_1,$X1_2,$X1_3,$X1_4,$X2_1,$X2_2,$X2_3,$X2_4,$X3_1,$X3_2,$X3_3,$X3_4,$Y1,$Y2,$Y3,$Y4)";

    mysqli_query($conn, $query);
    if (mysqli_affected_rows($conn) > 0) {

    } else {
        echo "gagal";
        mysqli_error($conn);
    }
    return mysqli_affected_rows($conn);
}
?>