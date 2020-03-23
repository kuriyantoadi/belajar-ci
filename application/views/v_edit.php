<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php foreach ($data_buku as $row) {
      echo form_open('C_buku/edit');
    ?>
    <table>
      <tr>
        <td>Judul</td>
        <td>
          <input type="hidden" name="id_buku" value="<?php echo $row->id_buku; ?>">
          <input type="text" name="judul" value="<?php echo $row->judul; ?>">
        </td>
      </tr>
      <tr>
        <td>Pengarang</td>
        <td>
          <input type="text" name="pengarang" value="<?php echo $row->pengarang; ?>">
        </td>
      </tr>
      <tr>
        <td>Tahun Terbit</td>
        <td>
          <input type="text" name="tahun_terbit" value="<?php echo $row->tahun_terbit; ?>">
        </td>
      </tr>
      <tr>
        <td></td>
        <td>
          <button type="submit" name="button">Edit</button>
        </td>
      </tr>
    </table>
  <?php
  echo form_close();
    } ?>
  </body>
</html>
