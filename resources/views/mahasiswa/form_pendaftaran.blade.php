@extends('master')
@section('content')

<div class="adminx-content">
        <div class="adminx-main-content">
          <div class="container-fluid">
            <!-- BreadCrumb -->
            <nav aria-label="breadcrumb" role="navigation">
              <ol class="breadcrumb adminx-page-breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                <li class="breadcrumb-item active  aria-current=" page"="">Elements</li>
              </ol>
            </nav>

            <div class="pb-3">
              <h1>Elements</h1>
            </div>
            <div class="row">
              <div>
                <div class="card mb-grid">
                  <div class="card-header d-flex justify-content-between align-items-center">
                    <div class="card-header-title">Basic Form Example</div>

                    <nav class="card-header-actions">
                      <a class="card-header-action" data-toggle="collapse" href="#card1" aria-expanded="false" aria-controls="card1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="8" y1="12" x2="16" y2="12"></line></svg>
                      </a>
                      
                      <div class="dropdown">
                        <a class="card-header-action" href="#" role="button" id="card1Settings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="card1Settings">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                      </div>

                      <a href="#" class="card-header-action">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                      </a>
                    </nav>
                  </div>
                  <div class="card-body collapse show" id="card1">
                    <form>
                        <div class="form-group">
                          <label class="form-label" for="validationCustom01">Nama Lengkap</label>
                          <input type="text" class="form-control" id="validationCustom01" placeholder="Masukkan nama lengkap anda" required="">
                        </div>

                        <div class="form-group">
                          <label class="form-label" for="validationCustom01">NPM</label>
                          <input type="text" class="form-control" id="validationCustom01" placeholder="Masukkan NPM anda" required="">
                        </div>

                        <div class="form-group">
                          <label class="form-label" for="validationCustom01">NIK</label>
                          <input type="text" class="form-control" id="validationCustom01" placeholder="Masukkan NIK anda" required="">
                        </div>

                        <div class="form-group">
                          <legend class="col-form-legend  form-label">Jenis Kelamin</legend>
                          <div class="form-group">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked="">
                                Laki - Laki
                              </label>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked="">
                                Perempuan
                              </label>
                            </div>                           
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="form-label" for="validationCustom03">Alamat</label>
                          <input type="text" class="form-control" id="validationCustom03" placeholder="Alamat Lengkap" required="">
                          <div class="invalid-feedback">
                            Tolong Masukkan Alamat
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="form-label" for="validationCustom01">Kelurahan</label>
                          <input type="text" class="form-control" id="validationCustom01" placeholder="Masukkan Kelurahan anda" required="">
                        </div>

                        <div class="form-group">
                          <label class="form-label" for="validationCustom01">Kecamatan</label>
                          <input type="text" class="form-control" id="validationCustom01" placeholder="Masukkan Kecamatan anda" required="">
                        </div>

                        <div class="form-group">
                          <label class="form-label" for="validationCustom01">Kota/Kabupaten</label>
                          <input type="text" class="form-control" id="validationCustom01" placeholder="Masukkan Kota/Kabupaten anda" required="">
                        </div>

                        <div class="form-group">
                          <label class="form-label" for="validationCustom01">Provinsi</label>
                          <input type="text" class="form-control" id="validationCustom01" placeholder="Masukkan Provinsi anda" required="">
                        </div>

                        <div class="form-group">
                          <label class="form-label" for="validationCustom01">Tempat Lahir</label>
                          <input type="text" class="form-control" id="validationCustom01" placeholder="Masukkan Tempat Lahir anda" required="">
                        </div>

                        <div class="form-group">
                          <label class="form-label" for="validationCustom01">Tanggal Lahir</label>
                          <input type="text" class="form-control" id="validationCustom01" placeholder="Masukkan Tanggal Lahir anda" required="">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Jurusan</label>
                            <div class="choices" role="combobox" aria-autocomplete="list" data-type="select-one" tabindex="0" aria-haspopup="true" aria-expanded="false" dir="ltr" aria-activedescendant="choices-select-3h-item-choice-3">
                                <div class="choices__inner"><select name="select" class="form-control js-choice choices__input is-hidden" tabindex="-1" style="display:none;" aria-hidden="true" data-choice="active"><option value="1" selected="">Sample value</option></select><div class="choices__list choices__list--single"><div class="choices__item choices__item--selectable" data-item="" data-id="1" data-value="1" aria-selected="true">
                                    Sample value
                                </div></div></div><div class="choices__list choices__list--dropdown" aria-expanded="false"><input type="text" class="choices__input choices__input--cloned" autocomplete="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="">
                                <div class="choices__list" dir="ltr" role="listbox"><div class="choices__item choices__item--choice choices__item--selectable" data-select-text="Press to select" data-choice="" data-id="1" data-value="1" data-choice-selectable="" id="choices-select-3h-item-choice-1" role="option" aria-selected="false">
                                    Sample value
                                </div><div class="choices__item choices__item--choice choices__item--selectable" data-select-text="Press to select" data-choice="" data-id="2" data-value="2" data-choice-selectable="" id="choices-select-3h-item-choice-2" role="option" aria-selected="false">
                                    Sample value 2
                                </div><div class="choices__item choices__item--choice choices__item--selectable is-highlighted" data-select-text="Press to select" data-choice="" data-id="3" data-value="3" data-choice-selectable="" id="choices-select-3h-item-choice-3" role="option" aria-selected="true">
                                    Sample value 3
                                </div></div></div></div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Pilih Program MBKM</label>
                            <div class="choices" role="combobox" aria-autocomplete="list" data-type="select-one" tabindex="0" aria-haspopup="true" aria-expanded="false" dir="ltr" aria-activedescendant="choices-select-3h-item-choice-3">
                                <div class="choices__inner"><select name="select" class="form-control js-choice choices__input is-hidden" tabindex="-1" style="display:none;" aria-hidden="true" data-choice="active"><option value="1" selected="">Sample value</option></select><div class="choices__list choices__list--single"><div class="choices__item choices__item--selectable" data-item="" data-id="1" data-value="1" aria-selected="true">
                                    Sample value
                                </div></div></div><div class="choices__list choices__list--dropdown" aria-expanded="false"><input type="text" class="choices__input choices__input--cloned" autocomplete="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="">
                                <div class="choices__list" dir="ltr" role="listbox"><div class="choices__item choices__item--choice choices__item--selectable" data-select-text="Press to select" data-choice="" data-id="1" data-value="1" data-choice-selectable="" id="choices-select-3h-item-choice-1" role="option" aria-selected="false">
                                    Sample value
                                </div><div class="choices__item choices__item--choice choices__item--selectable" data-select-text="Press to select" data-choice="" data-id="2" data-value="2" data-choice-selectable="" id="choices-select-3h-item-choice-2" role="option" aria-selected="false">
                                    Sample value 2
                                </div><div class="choices__item choices__item--choice choices__item--selectable is-highlighted" data-select-text="Press to select" data-choice="" data-id="3" data-value="3" data-choice-selectable="" id="choices-select-3h-item-choice-3" role="option" aria-selected="true">
                                    Sample value 3
                                </div></div></div></div>
                        </div>

                        <div class="form-group">
                        <label class="form-label" for="validationCustom01">Upload Foto Anda</label>
                            <div class="form-group">
                                <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                        <label class="form-label" for="validationCustom01">Upload Skrip Nilai Anda</label>
                            <div class="form-group">
                                <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                        <label class="form-label" for="validationCustom01">Upload KRS Anda</label>
                            <div class="form-group">
                                <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                          <label class="form-label" for="validationCustom01">IPK</label>
                          <input type="text" class="form-control" id="validationCustom01" placeholder="Masukkan IPK anda" required="">
                        </div>

                        <div class="form-group">
                          <label class="form-label" for="validationCustom01">Semester</label>
                          <input type="text" class="form-control" id="validationCustom01" placeholder="Masukkan Semester anda" required="">
                        </div>

                        <div class="form-group">
                          <label class="form-label" for="validationCustom01">Angkatan</label>
                          <input type="text" class="form-control" id="validationCustom01" placeholder="Masukkan Angkatan anda" required="">
                        </div>
                                         
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                  </div>
                </div>

                

                

                <div class="card mb-grid">
                  <div class="card-header">
                    <div class="card-header-title">Form controls</div>
                  </div>
                  <div class="card-body">
                    <p>
                      Textual form controls—like <code class="highlighter-rouge">&lt;input&gt;</code>s, <code class="highlighter-rouge">&lt;select&gt;</code>s, and <code class="highlighter-rouge">&lt;textarea&gt;</code>s—are styled with the <code class="highlighter-rouge">.form-control</code> class. Included are styles for general appearance, focus state, sizing, and more.
                    </p>
                    <form>
                      <div class="form-group">
                        <label class="form-label" for="exampleFormControlInput1">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                      </div>
                      <div class="form-group">
                        <label class="form-label" for="exampleFormControlSelect1">Example select</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label class="form-label" for="exampleFormControlSelect2">Example multiple select</label>
                        <select multiple="" class="form-control" id="exampleFormControlSelect2">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label class="form-label" for="exampleFormControlTextarea1">Example textarea</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                    </form>
                  </div>
                </div>

                <div class="card mb-grid">
                  <div class="card-header">
                    <div class="card-header-title">Validation errors</div>
                  </div>
                  <div class="card-body">
                    <form>
                      <div class="form-group">
                        <label class="form-label is-invalid">Invalid Field</label>
                        <input type="email" class="form-control is-invalid" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text invalid-feedback">We'll never share your email with anyone else.</small>
                      </div>
                      <div class="form-group">
                        <label class="form-label is-valid">VALID</label>
                        <input type="password" class="form-control is-valid" placeholder="Password">
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection