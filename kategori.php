<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>
<body>
     <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Kategori</h1>
                 

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tambah Kategori</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama Kategori</th>
                                            <?php if($_SESSION['user']['level']=='admin'): ?>
                                            <th>Aksi</th>
                                            <?php endif;?>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama Kategori</th>
                                            <!-- jika login sebagai admin maka muncul tombol aksi -->
                                            <?php if($_SESSION['user']['level']=='admin'): ?>
                                            <th>Aksi</th>
                                            <?php endif;?>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php 
                                        $i = 1;
                                        $query  = mysqli_query($koneksi, "SELECT * FROM kategori");
                                        while ($data=mysqli_fetch_array($query)):
                                        ?>

                                        <tr>
                                            <td><?=  $i++; ?></td>
                                            <td><?=  $data['kategori'];?></td>
                                            <td></td>
                                        </tr>
                                        <?php endwhile;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
</body>
</html>