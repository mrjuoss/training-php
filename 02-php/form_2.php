<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Contoh Formulir</title>
    <style>
      label {
        display: inline-block;
        width: 100px;
      }

      input[type=text] {
        border: 1px solid blue;
        width: 190px;
        border-radius: 4px;
        padding-left: 10px;
      }

      select {
        width: 200px;
      }

      input[type="submit"] {
        margin-top: 10px;
        margin-left: 100px;
      }
    </style>
  </head>
  <body>
    <h3>Latihan dengan method POST</h3>
    <form class="" action="hasil_form_2.php" method="post" enctype="multipart/form-data">
      <label for="nama">Nama</label>
      <input type="text" name="nama" value="" placeholder="Masukkan Nama">
      <br>
      <label for="gender">Jenis Kelamin</label>
      <input type="radio" name="gender" id="genderPria" value="Pria" checked> Pria
      <input type="radio" name="gender" id="genderWanita" value="Wanita"> Wanita
      <br>
      <label for="posisi">Posisi</label>
      <select class="" name="posisi">
        <option value="eselon_2">Eselon II</option>
        <option value="eselon_3">Eselon III</option>
        <option value="eselon_4">Eselon IV</option>
        <option value="staf">Staf</option>
      </select>
      <br>
      <br>
      <label for="foto">Foto</label>
      <input type="file" name="foto" value="foto">
      <br>
      <input type="submit" name="submit" value="Kirim Data">
    </form>
  </body>
</html>
