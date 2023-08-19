@extends('master')
@section('content')


<div class="adminx-content">
        <!-- <div class="adminx-aside">

        </div> -->

        <div class="adminx-main-content">
          <div class="container-fluid">
            <!-- BreadCrumb -->
            <nav aria-label="breadcrumb" role="navigation">
              <ol class="breadcrumb adminx-page-breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Upload Nilai Perkuliahan</li>
              </ol>
            </nav>

          <div class="card mb-grid">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="link_gambar_mahasiswa.jpg" alt="Foto Mahasiswa" class="img-fluid">
                        </div>
                        <div class="col-md-8">
                            <ul class="list-unstyled">
                                <li><strong>Nama:</strong> M. Alamsyah Putra Zatmiko</li>
                                <li><strong>Kelas:</strong> 4KA24</li>
                                <li><strong>NPM:</strong> 13119986</li>
                                <li><strong>Jenis Kelamin:</strong> Laki-laki</li>
                                <li><strong>Program:</strong> Studi Independen</li>
                                <li><strong>Bidang:</strong> UI/UX Design Mastery</li>
                                <li><strong>Mitra:</strong> PT. Impactbyte Teknologi Informasi</li>
                                <li><strong>No. Telepon:</strong> 081263478512</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <h3 class="card-title">
              &nbsp;
                <button type="button" class="btn btn-sm btn-secondary" data-toggle="modal" data-target=".bd-example-modal-lg">
                    <i class="nav-icon fas fa-folder-plus"></i> &nbsp; Masukkan Nilai Perkuliahan &nbsp;
                </button>
                <a href="#" class="btn btn-sm btn-success" target="_blank"><i class="nav-icon fas fa-file-export"></i> &nbsp; Export Excel &nbsp;</a>
                <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#importExcel">
                    <i class="nav-icon fas fa-file-import"></i> &nbsp; Import Excel &nbsp;
                </button>
                <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#dropTable">
                    <i class="nav-icon fas fa-minus-circle"></i> &nbsp; Hapus Semua &nbsp;
                </button>
            </h3>
          </div>

          <div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			      <div class="modal-dialog" role="document">
				    <form method="post" action="#" enctype="multipart/form-data">
					    <div class="modal-content">
						    <div class="modal-header">
							    <h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
						    </div>
						    <div class="modal-body">
							  @csrf
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h5 class="modal-title">Petunjuk :</h5>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li>rows 1 = Kode Mata Kuliah</li>
                            <li>rows 2 = Nama Mata Kuliah</li>
                            <li>rows 3 = Jumlah SKS</li>
                            <li>rows 4 = Prodi</li>
                            <li>rows 5 = Semester</li>
                            <li>rows 6 = Nilai</li>
                        </ul>
                    </div>
                </div>
							<label>Pilih file excel</label>
							<div class="form-group">
								<input type="file" name="file" required="required">
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
							<button type="submit" class="btn btn-primary">Import</button>
						</div>
		  			</div>
		  		</form>
		  	</div>
		  </div>
        
            <div class="row">
            <div class="col">
                <div class="card mb-grid">
                  <div class="card-header d-flex justify-content-between align-items-center">
                    <div class="card-header-title">Mata Kuliah</div>
                  </div>
                  <div class="table-responsive-md">
                    <table class="table table-actions table-striped table-hover mb-0">
                      <thead>
                        <tr>
                          <th scope="col">
                            <label class="custom-control custom-checkbox m-0 p-0">
                              <input type="checkbox" class="custom-control-input table-select-all">
                              <span class="custom-control-indicator"></span>
                            </label>
                          </th>
                          <th scope="col">Kode Mata Kuliah</th>
                          <th scope="col">Nama Mata Kuliah</th>
                          <th scope="col">Jumlah SKS</th>
                          <th scope="col">Prodi</th>
                          <th scope="col">Semester</th>
                          <th scope="col">Nilai</th>
                          <th scope="col">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">
                            <label class="custom-control custom-checkbox m-0 p-0">
                              <input type="checkbox" class="custom-control-input table-select-row">
                              <span class="custom-control-indicator"></span>
                            </label>
                          </th>
                          <td>AK011326</td>
                          <td>TESTING DAN IMPLEMENTASI SISTEM</td>
                          <td>2</td>
                          <td>Sistem Informasi</td>
                          <td>Semester 7</td>
                          <td>85</td>
                          <td>
                            <a href="#" class="btn btn-sm btn-danger">Delete</a>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">
                            <label class="custom-control custom-checkbox m-0 p-0">
                              <input type="checkbox" class="custom-control-input table-select-row">
                              <span class="custom-control-indicator"></span>
                            </label>
                          </th>
                        </tr>
                      </tbody>
                    </table>
                    <div class="card-header">
                      <h3 class="card-title">
                          <button class="btn btn-sm btn-success">Konversi Semua Nilai</button>
                      </h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


@endsection