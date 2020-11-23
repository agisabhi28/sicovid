<html>

<head>
    <h1 align="center">Data Covid-19 Kecamatan <?= $kecamat['nama_kecamatan']; ?> </h1>
</head>

<body>
    <table border="1" align="center">
        <tr>
            <td>No</td>
            <td>Tanggal</td>
            <td>Nama Kecamatan</td>
            <td>Positif</td>
            <td>Orang Dalam Pengawasan</td>
            <td>Pasien Dalam Pengawasan</td>
            <td>Sembuh</td>
            <td>Meninggal</td>
        </tr>
        <?php $no = 1; ?>
        <?php foreach ($kecamatan as $s) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $s['tanggal']; ?></td>
                <td><?= $s['nama_kecamatan']; ?></td>
                <td align="center"><?= $s['positif']; ?></td>
                <td align="center"><?= $s['odp']; ?></td>
                <td align="center"><?= $s['pdp']; ?></td>
                <td align="center"><?= $s['sembuh']; ?></td>
                <td align="center"><?= $s['meninggal']; ?></td>
            </tr>
        <?php endforeach; ?>
        <?php foreach ($jumlah as $all) : ?>
            <tr>
                <td colspan="3" align="center">JUMLAH</td>
                <td align="center"><?= $all['positif']; ?></td>
                <td align="center"><?= $all['odp']; ?></td>
                <td align="center"><?= $all['pdp']; ?></td>
                <td align="center"><?= $all['sembuh']; ?></td>
                <td align="center"><?= $all['meninggal']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>

</html>