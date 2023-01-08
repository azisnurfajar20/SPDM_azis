<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="  {{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="  {{ asset('assets/css/bootstrap.css') }}">
  <link rel="stylesheet" href="  {{ asset('assets/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">


  <title>UTDI</title>
</head>

<body style="background-image: url('../assets/img/bg.jpg');
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  background-attachment: fixed;
  height: 100%;"    >
  <nav class="navbar navbar-expand-lg navbar-light bg-light shadow mb-5">
    <div class="container">
      <a class="navbar-brand" href="#"><i class="fa fa-shopping-bag" aria-hidden="true"> </i> UTDI</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        </ul>
      </div>
    </div>
  </nav>
  <section class="mb-5">
    <div class="container bg-light p-4 shadow" style="border-radius: 4px;">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h3><i class="fa fa-th-list" aria-hidden="true"> </i> Data Mahasiswa</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#formTambah">
            <i class="fa fa-plus-square" aria-hidden="true"></i> Tambah Data
          </button>
          <!-- Table -->
          <table id="example" class="table table-striped table-bordered mt-3 bg-light" style="width:100%">
            <thead>
              <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Prodi</th>
                <th>Semester</th>
                <th>Kelas</th>
                <th>Angkatan</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="formTambah" tabindex="-1" aria-labelledby="formTambahLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Laptop</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="simpan.php" method="post">
                  <div class="form-group">
                    <label for="KodeLaptop">Kode Laptop</label>
                    <input type="text" name="kode_laptop" class="form-control" id="KodeLaptop"
                      aria-describedby="KodeLaptop">
                  </div>
                  <div class="form-group">
                    <label for="NamaLaptop">Nama Laptop</label>
                    <input type="text" name="nama_laptop" class="form-control" id="NamaLaptop">
                  </div>
                  <div class="form-group">
                    <label for="Processor">Processor</label>
                    <input type="text" name="processor" class="form-control" id="Processor">
                  </div>
                  <div class="form-group">
                    <label for="Display">Display</label>
                    <input type="text" name="display" class="form-control" id="Display">
                  </div>
                  <div class="form-group">
                    <label for="SistemOperasi">Sistem Operasi</label>
                    <input type="text" name="sistem_operasi" class="form-control" id="SistemOperasi">
                  </div>
                  <div class="form-group">
                    <label for="RAM">RAM</label>
                    <input type="text" name="ram" class="form-control" id="RAM">
                  </div>
                  <div class="form-group">
                    <label for="Hard-Drive">Hard-Drive</label>
                    <input type="text" name="hard_drive" class="form-control" id="Hard-Drive">
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i>
                      Simpan</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal Edit -->
      </div>
    </div>
  </section>

  <footer class="text-center text-white" style="background-color: #f1f1f1;">
    <!-- Grid container -->
    <div class="container pt-4">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button"
          data-mdb-ripple-color="dark"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>

        <!-- Twitter -->
        <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button"
          data-mdb-ripple-color="dark"><i class="fa fa-twitter"></i></a>

        <!-- Google -->
        <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button"
          data-mdb-ripple-color="dark"><i class="fa fa-google"></i></a>

        <!-- Instagram -->
        <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button"
          data-mdb-ripple-color="dark"><i class="fa fa-instagram"></i></a>

        <!-- Linkedin -->
        <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button"
          data-mdb-ripple-color="dark"><i class="fa fa-linkedin"></i></a>
        <!-- Github -->
        <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button"
          data-mdb-ripple-color="dark"><i class="fa fa-github"></i></a>
      </section>
      <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2023 Copyright :
      <a class="text-dark" href="https://mdbootstrap.com/">Azis Nur Fajar</a>
    </div>
    <!-- Copyright -->
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
  </script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#example').DataTable();
    });
  </script>
</body>

</html>