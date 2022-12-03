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
                    <form action="output.php" method="POST">
                      <div class="row mb-3">
                        <div class="col-md-6">
                          <div class="form-floating mb-3 mb-md-0">
                            <input class="form-control" name="nama1" id="inputFirstName" type="text" placeholder="Enter your first name"/>
                            <label for="inputFirstName">First name</label>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-floating">
                            <input class="form-control" name="nama2" id="inputLastName" type="text" placeholder="Enter your last name" />
                            <label for="inputLastName">Last name</label>
                          </div>
                        </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-md-6">
                          <div class="form-floating mb-3 mb-md-0">
                            <input class="form-control" name="age" id="inputFirstName" type="text" placeholder="Enter your first name" />
                            <label for="inputyourage">Whats is your age?</label>
                          </div>
                        </div>
                        <div class="col-md-6 mt-3" >
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="lk" value="Laki-Laki">
                                <label class="form-check-label" for="lk">Laki-Laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="pr" value="Perempuan">
                                <label class="form-check-label" for="pr">Perempuan</label>
                            </div>
                        </div>
                      </div>
                      
                      <div class="form-floating mb-3">
                        <input class="form-control" name="email" id="inputEmail" type="email" placeholder="name@example.com" />
                        <label for="inputEmail">Email address</label>
                      </div>
                      <div class="row mb-3">
                        <div class="col-md-6">
                          <div class="form-floating mb-3 mb-md-0">
                            <select class="form-select" name="agama" aria-label="Default select example">
                                <option selected>Agama</option>
                                <option value="islam">Islam</option>
                                <option value="Keristen">Keristen</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Konghucu">Konghucu</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-floating">
                            <select class="form-select" name="pendidikan" aria-label="Default select example">
                                <option selected>Jenjang pendidikan</option>
                                <option value="SD">SD</option>
                                <option value="SMP">SMP</option>
                                <option value="SMA/SMK">SMA/SMK</option>
                                <option value="DI">DI</option>
                                <option value="DII">DII</option>
                                <option value="DIII">DIII</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col-md-6">
                          <div class="form-floating mb-3 mb-md-0">
                            <input class="form-control" name="kota" id="inputkota" type="text" placeholder="Enter your kota" />
                            <label for="inputkota">Kota</label>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-floating">
                            <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" />
                            <label for="inputLastName">Provinsi</label>
                          </div>
                        </div>
                      </div><br><hr>
                      <div class="card-header"><h3 class="text-center font-weight-light my-4">MEDICAL CHECK FORM</h3></div>
                      <div class="card-body">
                        <p>periksa ketentuan yang berlaku untuk anda atau anggota kerabat anda</p>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="penyakit1[]" id="asm" value="asma">
                            <label class="form-check-label" for="asm">Asma</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="penyakit1[]" id="inlineCheckbox2" value="penyakit Jantung">
                            <label class="form-check-label" for="inlineCheckbox2">Penyakit Jantung</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="penyakit1[]" id="kang" value="kangker">
                            <label class="form-check-label" for="kang">Kangker</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="penyakit1[]" id="diabetes" value="diabetes">
                            <label class="form-check-label" for="diabetes">Diabetes</label>
                        </div><div><br></div>
                        <p>periksa gejala yang anda alami saat ini</p>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="penyakit2[]" id="dada" value="Sakit dada">
                            <label class="form-check-label" for="dada">Sakit dada</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="penyakit2[]" id="kard" value="Kardiovaskular">
                            <label class="form-check-label" for="kard">Kardiovaskular</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="penyakit2[]" id="nafas" value="Pernafasan">
                            <label class="form-check-label" for="nafas">Pernafasan</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="penyakit2[]" id="BB" value="Penambahan BB">
                            <label class="form-check-label" for="BB">Penambahan BB</label>
                        </div><div><br></div>
                        <p>Apakan saat ini anda mengkonsumsi obat?</p>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="obat" id="y" value="Ya">
                            <label class="form-check-label" for="y">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="obat" id="tdk" value="Tidak">
                            <label class="form-check-label" for="tdk">Tidak</label>
                        </div><div><br></div>
                        <div>
                            <p>Silahkan list yang lain</p>
                        </div>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" name="list" id="floatingTextarea2" style="height: 100px"></textarea>
                            <label for="floatingTextarea2"></label>
                          </div>
                      <div class="mt-4 mb-0">
                        <div class="d-grid">
                          <input class="btn btn-primary btn-block" type="submit">
                          </div>
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
