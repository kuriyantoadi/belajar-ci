<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table>

      <?php echo form_open('C_buku/tambah'); ?>
      <tr>
        <td>Judul</td>
        <td>
          <input type="text" name="judul" value="">
        </td>
      </tr>
      <tr>
        <td>Pengarang</td>
        <td>
          <input type="text" name="pengarang" value="">
        </td>
      </tr>
      <tr>
        <td>Tahun Terbit</td>
        <td><input type="text" name="tahun_terbit" value=""></td>
      </tr>
      <tr>
        <td></td>
        <td>
          <button type="submit" value="simpan">Simpan</button>
        </td>
      </tr>
      <?php echo form_close(); ?>
    </table>
  </body>
</html>
