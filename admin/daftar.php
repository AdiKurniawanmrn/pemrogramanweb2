<?php
    include_once 'top.php';
    include_once 'menu.php';
?>
<div>
    <div class="container-fluid px-4">
        <h1>silahkan isi form pendaftaran</h1>
            <fieldset class="border p-4">
                <legend class="w-auto">Form Daftar organisasi</legend>
                <form>
                    <div class="card-body">
                        <div class="row">
                          <!-- kiri -->
                            <div class="col-md-6">
                                <div class="mb-3 row">
                                    <label for="exampleInputEmail1" class="col-sm-2 col-form-label">NIM :</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan NIM">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="exampleInputPassword1" class="col-sm-2 col-form-label">Nama :</label>
                                <div class="col-sm-7">
                                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Nama">
                                </div>
                            </div>
        
                            <div class="mb-3 row">
                                <label for="exampleInputPassword1" class="col-sm-2 col-form-label">Prodi :</label>
                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option>Teknik Informatika</option>
                                            <option>Sistem Informasi</option>
                                            <option>Bisnis Digital</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="exampleInputPassword1" class="col-sm-2 col-form-label">Organisasi</label>
                                <div class="col-sm-7">
                                    <select class="form-control">
                                      <option>...</option>
                                      <option>BEM</option>
                                      <option>HALMAHERA</option>
                                      <option>SENADA</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="d-grid gap-2 d-md-block mt-3">
                            <button class="btn btn-primary" type="submit">Daftar</button>
                        </div>
                    </div>
                </form>
            </fieldset>
    </div>
</div>
<?php
    include_once 'bottom.php';
?>