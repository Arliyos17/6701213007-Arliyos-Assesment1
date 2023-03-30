<?php
$angka1 = $_POST['angka1'];
$angka2 = $_POST['angka2'];
$operasi = $_POST['operasi'];

switch ($operasi) {
  case '+':
    $hasil = $angka1 + $angka2;
    break;
  case '-':
    $hasil = $angka1 - $angka2;
    break;
  case '*':
    $hasil = $angka1 * $angka2;
    break;
  case '/':
    $hasil = $angka1 / $angka2;
    break;
  default:
    $hasil = "Operasi tidak valid";
}

echo "Hasil: " . $hasil;
?>