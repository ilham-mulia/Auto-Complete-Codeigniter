<h1>Hasil Searching</h1>
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
