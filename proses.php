<?php
$angka1 = $_POST['angka1'];
$angka2 = $_POST['angka2'];
$operasi = $_POST['operasi'];


if ($operasi == '+') {
  $hasil = $angka1 + $angka2;
} else if ($operasi == '-') {
  $hasil = $angka1 - $angka2;
} else if ($operasi == '*') {
  $hasil = $angka1 * $angka2;
} else if ($operasi == '/') {
  $hasil = $angka1 / $angka2;
}

echo "Hasil: " . $hasil;
?>