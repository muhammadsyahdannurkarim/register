<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Register - SB Admin</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
  </head>
  <body class="bg-primary">
    <div id="layoutAuthentication">
      <div id="layoutAuthentication_content">
        <main>
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                  <div class="card-header"><h3 class="text-center font-weight-light my-4">MEDICAL FORM</h3></div>
                  <div class="card-body">
                    <form>
                    <div class="row mb-3">
                        <div class="col-md-6">
                          <div class="form-floating mb-3 mb-md-0">
                            <div class="form-control d-flex align-items-center">
                                <p><?=$_POST['nama1'] ?></p>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-floating">
                            <div class="form-control d-flex align-items-center">
                                <p><?=$_POST['nama2'] ?></p>
                            </div>
                          </div>
                        </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-md-6">
                          <div class="form-floating mb-3 mb-md-0">
                            <div class="form-control d-flex align-items-center">
                                <p><?=$_POST['age'] ?></p>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-floating">
                            <div class="form-control d-flex align-items-center">
                                <p><?=$_POST['gender'] ?></p>
                            </div>
                          </div>
                        </div>
                      </div>                     
                      <div class="row mb-3">
                        <div class="col-md-6">
                          <div class="form-floating mb-3 mb-md-0">
                            <div class="form-control d-flex align-items-center">
                                <p><?=$_POST['email'] ?></p>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-floating">
                            <div class="form-control d-flex align-items-center">
                                <p><?=$_POST['agama'] ?></p>
                            </div>
                          </div>
                        </div>
                        </div>
                      <div class="row mb-3">
                        <div class="col-md-6">
                          <div class="form-floating mb-3 mb-md-0">
                            <div class="form-control d-flex align-items-center">
                                <p><?=$_POST['pendidikan'] ?></p>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-floating">
                            <div class="form-control d-flex align-items-center">
                                <p><?=$_POST['kota'] ?></p>
                            </div>
                          </div>
                        </div><hr>
                      <div class="card-header"><h3 class="text-center font-weight-light my-4"> MEDICAL CHECK FORM</h3></div>
                      <div class="card-body">
                        <p>periksa ketentuan yang berlaku untuk anda atau anggota kerabat anda</p>
                        <div class="form-floating mb-3">
                            <div class="form-control d-flex align-items-center">
                                <?php
                                    if (isset($_POST['penyakit1'])) {

                                        $penyakit1 = $_POST['penyakit1'];
                                        for ($i=0; $i < count($penyakit1) ; $i++){
                                            echo $penyakit1[$i].", ";
                                        }
                                    }
                                ?>
                            </div>
                        </div><br>
                        <p>Periksa gejala yang anda alami saat ini</p>
                        <div class="form-floating">
                            <div class="form-control d-flex align-items-center">
                                <?php
                                    if (isset($_POST['penyakit2'])) {

                                        $penyakit2 = $_POST['penyakit2'];
                                        for ($i=0; $i < count($penyakit2) ; $i++){
                                            echo $penyakit2[$i].", ";
                                        }
                                    }
                                ?>
                            </div>
                        </div><br>
                        <p>Apakah saat ini anda sedang mengkonsumsi obat?</p>
                        <div class="form-floating">
                            <div class="form-control d-flex align-items-center">
                                <p><?=$_POST['obat'] ?></p>
                            </div>
                        </div><br>
                        <div>
                            <p>Silahkan list yang lain</p>
                        </div>
                        <div class="form-floating">
                            
                            <div class="form-control d-flex align-items-center">
                                <p><?=$_POST['list'] ?></p>
                        </div>                     
                    </form>
                  </div>
                  <div class="card-footer text-center py-3">
                    <div class="small"><h4>Take care of your health</h4></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>
      </div>
      <div id="layoutAuthentication_footer">
        <footer class="py-4 bg-light mt-auto">
          <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-between small">
              <div class="text-muted">Copyright &copy; Your Website 2022</div>
              <div>
                <a href="#">Privacy Policy</a>
                &middot;
                <a href="#">Terms &amp; Conditions</a>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>
