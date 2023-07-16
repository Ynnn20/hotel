<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Data Pasien</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-4">
                <h3>Tambah Data Pasien</h3>
                <form action="koneksi.php" method="POST">
                    <div class="form-group">
                        <label for="idPengunjung">ID Pengunjung</label>

                        <input type="text" class="form-control mb-3" name="idPengunjung" placeholder="ID Pengunjung">

                    </div>
                    <div class="form-group">
                        <label for="noKamar">No Kamar</label>

                        <input type="text" class="form-control mb-3" name="noKamar" placeholder="No Kamar">

                    </div>
                    <div class="form-group">
                        <label for="nmPengunjung">Nama Pengunjung</label>

                        <input type="text" class="form-control mb-3" name="nmPengunjung" placeholder="Nama Pengunjung">

                    </div>
                    <div class="form-group">
                        <label for="jk">Jenis Kelamin</label>
                        <div class="form-check">

                            <input type="radio" class="form-check-input" name="jk" value="Perempuan"> Perempuan

                        </div>

                        <div class="form-check">

                            <input type="radio" class="form-check-input" name="jk" value="Laki-Laki"> Laki-laki

                        </div>
                        <div class="form-group mt-3">
                            <input type="submit" name="simpan" value="Simpan" class="form-control btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>