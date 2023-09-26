
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sukma Rizki | Pengusaha Muda</title>
    
</head>
<body>
<form style="width: 50%; margin: auto;">
        <h1 style="text-align: center;">Datadiri</h1>
        <label for="nim">NIM:  {{ $nim }}</label><br>
        <label for="nama">Nama: {{ $name }}</label><br>
        <label for="jurusan">Jurusan:  <?php echo $jurusan ?></label><br>
        <label for="prodi">Program Studi: <?= $program ?> </label><br>
        <label for="matkul"> Mata Kuliah:  {{ $matkul }}</label><br>
    </form>
    <h3 style="text-align : center;">List Mata Kuliah Semester Ganjil 2023</h1>
    <h2 style="text-align : center;">Total Mata Kuliah : {{ $total }}</h2>
    
    </div>
    
<div style="text-align:center">
<ul style="display: inline-block; text-align:left;" >
        <?php foreach($buah as $b){?>
        <li class="list-group-item">
            <?php echo $b; ?>
        </li><?php }?>
    </ul>
</div>
</body>
</html>