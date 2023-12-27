<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0">Manajemen Daftar Pasien Poli</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php?page=home">Home</a></li>
            <li class="breadcrumb-item active">Obat</li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<!-- Main content -->
<div class="content">
    <div class="container-fluid">
    <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
            <h3 class="card-title">Data Obat</h3>

            <div class="card-tools">
                
            </div>
            </div>
            <!-- /.card-header -->
            

            <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Nomer Rekam Medis</th>
                    <th>Keluhan</th>
                    <th>Nomer Antrian</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                <?php include 'tampilPasien.php'?>
			             <!-- TAMPILKAN DATA OBAT DI SINI -->

                </tbody>
            </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
        </div>
    </div>
    <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>