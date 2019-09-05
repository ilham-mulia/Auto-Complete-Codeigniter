<h1>Searching Mode 1</h1>
<p>
  mode 1 form dan 1 halaman
</p>
<a href="<?php echo base_url('index.php/home/mode1') ?>">Lihat mode2</a>

<form class="" action="<?php echo base_url(); ?>" method="post"><br> <!-- ingan base urlnya kosong unk mode 1 -->
  <div class="row">
    <div class="col 4">
      <input type="text" name="key" value="" placeholder="Cari">
      <input type="submit" name="" value="Cari" >
    </div>

  </div>

</form>
<table border="1">
    <thead>
        <tr>
            <th class="text-center">Kode</th>
            <th>Judul</th>
            <th>Letak</th>
            <th>Genre</th>
            <th>Kondisi</th>
            <th>Tahun</th>

        </tr>
    </thead>
    <?php

    foreach ($data as $tampil) { // $data di ambil dari home.php dan $tampil hanya sebuah variable baru
    ?>
    <tbody>
        <tr>
            <td class="text-center"> <?php echo $tampil->kode; ?></td>
            <td> <?php echo $tampil->judul; ?></td>
            <td> <?php echo $tampil->letak; ?></td>
            <td> <?php echo $tampil->genre; ?></td>
            <td> <?php echo $tampil->kondisi; ?></td>
            <td> <?php echo $tampil->tahun; ?></td>

        </tr>

    </tbody>
    <?php
    }

     ?>
</table>
