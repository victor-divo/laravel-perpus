<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Info Mahasiswa</title>
</head>

<body>
  <h1>Saya adalaha mahasiswa Program Studi:
    @if ($progdi == 'TI')
      Teknik Informatika
    @elseif($progdi == 'SI')
      Sistem Informasi
    @elseif($progdi == 'IK')
      Ilmu Komunikasi
    @else
      Tidak ada progi tsb di FTIK
    @endif
  </h1>
</body>

</html>
