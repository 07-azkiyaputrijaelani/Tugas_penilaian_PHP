<?php
    $nama_siswa="Budi";
    $kelas = "12 PPLG 3";
    $nilai_tugas = 90;
    $nilai_uts = 95;
    $nilai_uas = 88;

    $nilai_akhir = ($nilai_tugas * 30/100) + ($nilai_uts * 30/100) + ($nilai_uas * 40/100);

    if ($nilai_akhir >=90) {
        $predikat = "A";
    } elseif ($nilai_akhir >=80) {
        $predikat = "B";
    } elseif ($nilai_akhir >=75) {
        $predikat = "C";
    } elseif ($nilai_akhir >=60) {
        $predikat = "D";
    } else {
        $predikat = "E";
    };

    if ($nilai_akhir >=75) {
        $status = "LULUS";
    } else {
        $status = "TIDAK LULUS";
    };

    echo "<h2>Hasil Penilaian Siswa</h2>";
    echo"Nama:$nama_siswa<br><br>";
    echo"Kelas:$kelas <br>";
    echo "<hr><br>";
    echo"Nilai Tugas: $nilai_tugas <br><br>";
    echo"Nilai UTS: $nilai_uts <br><br>";
    echo"Nilai UAS:$nilai_uas <br><br>";
    echo "<hr><br>";
    echo"Nilai Akhir:$nilai_akhir<br><br>";
    echo"Predikat:$predikat<br><br>";
    echo"Status: $status";
?>
