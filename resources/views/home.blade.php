@extends('/layouts/main')

@section('container')
    <div class="bg-light p-2">
                                <nav class="navbar navbar-light bg-light">
                                    <div class="container-fluid">
                                      <a class="navbar-brand" href="#">Navbar</a>
                                      <div class="btn-group ">
                                        <a href="#" class="text-light btn btn-primary active" aria-current="page">Buat Baru</a>
                                        {{-- <a href="#" class="text-light btn btn-info">Link</a> --}}
                                        <select class="text-light btn-primary" aria-label="Default select example">
                                            <option value="1">Semua</option>
                                            <option value="2">Aktif</option>
                                            <option value="3">Tidak Aktif</option>
                                          </select>
                                      </div>
                                    </div>
                                  </nav>

                                <div class="tables">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                              <th scope="col">#</th>
                                              <th scope="col">Nama</th>
                                              <th scope="col">Reverensi</th>
                                              <th scope="col">Descripsi</th>
                                              <th scope="col">Status</th>
                                              {{-- <th scope="col">Kelola</th> --}}
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <tr>
                                              <th scope="row">1</th>
                                              <td>Dompet Utama</td>
                                              <td>6868686223</td>
                                              <td>Bank BCA</td>
                                              <td>Aktif</td>
                                              <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                      
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                      <li class="dropdown-item">Dompet Utama</li>
                                                      <hr>
                                                      <li><a class="dropdown-item" href="#">Detail</a></li>
                                                      <li><a class="dropdown-item" href="#">Ubah</a></li>
                                                      <li><a class="dropdown-item" href="#">Tidak Aktif</a></li>
                                                    </ul>
                                                  </div>
                                              </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Dompet Utama</td>
                                                <td>6868686223</td>
                                                <td>Bank BCA</td>
                                                <td>Aktif</td>
                                                <td>
                                                  <div class="dropdown">
                                                      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                        
                                                      </button>
                                                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                        <li class="dropdown-item">Dompet Utama</li>
                                                        <hr>
                                                        <li><a class="dropdown-item" href="#">Detail</a></li>
                                                        <li><a class="dropdown-item" href="#">Ubah</a></li>
                                                        <li><a class="dropdown-item" href="#">Tidak Aktif</a></li>
                                                      </ul>
                                                    </div>
                                                </td>
                                              </tr>

                                              <tr>
                                                <th scope="row">3</th>
                                                <td>Dompet Utama</td>
                                                <td>6868686223</td>
                                                <td>Bank BCA</td>
                                                <td>Aktif</td>
                                                <td>
                                                  <div class="dropdown">
                                                      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                        
                                                      </button>
                                                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                        <li class="dropdown-item">Dompet Utama</li>
                                                        <hr>
                                                        <li><a class="dropdown-item" href="#">Detail</a></li>
                                                        <li><a class="dropdown-item" href="#">Ubah</a></li>
                                                        <li><a class="dropdown-item" href="#">Tidak Aktif</a></li>
                                                      </ul>
                                                    </div>
                                                </td>
                                              </tr>
                                            
                                          </tbody>
                                    </table>
                                </div>
                              </div>
@endsection