<?php
    include "koneksi.php";

    $AKSI=$_GET["Aksi"];
    $ID_PELATIHAN=$_GET["id"];

    if ($AKSI=="Hapus") {
        $QUERY=mysqli_query($KONEKSI, "DELETE FROM `course` WHERE id_kursus = $ID_PELATIHAN");

        if ($QUERY) {
            header ("location: tcourse.php");
        }
    }

    if ($AKSI=="Hapus1") {
        $QUERY=mysqli_query($KONEKSI, "DELETE FROM `pelajar` WHERE id_pelajar = $ID_PELATIHAN");

        if ($QUERY) {
            header ("location: tpelajar.php");
        }
    }

    if ($AKSI=="Hapus2") {
        $QUERY=mysqli_query($KONEKSI, "DELETE FROM `jadwal` WHERE id_jadwal = $ID_PELATIHAN");

        if ($QUERY) {
            header ("location: tjadwal.php");
        }
    }

    if ($AKSI=="verifikasi") {
        $QUERY=mysqli_query($KONEKSI, "UPDATE `laporan` SET `status`='1' WHERE `id_laporan`='$ID_PELATIHAN'");

        if ($QUERY) {
            header ("location: tlaporan.php");
        }
    }
?>