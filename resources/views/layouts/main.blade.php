<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Bootstrap css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Atomic Walet App</title>
</head>
<body>
    

    <div class="container-fluid">
        {{-- Header --}}
        <header class="text-center bg-light text-secondary p-2 mb-4">
            <div class="row">
                <div class="col-12">
                    <h1 class="">Dompet Fais</h1>
                </div>
            </div>
        </header>
        {{-- Header end --}}

        {{-- Main --}}
        <main class="row">
          <div class="col">
              <div class="row">
                  <div class="col-2">
                    
                    <div class="p-2 border-end bg-light" id="sidebar-wrapper">
                        <div class="sidebar-heading border-bottom bg-light mt-4 fw-bold">MASTER</div>
                        <div class="list-group list-group-flush">
                            <a class="list-group-item list-group-item-action list-group-item-light p-2" href="#!">Dompet</a>
                            <a class="list-group-item list-group-item-action list-group-item-light p-2" href="#!">Kategori</a>
                        </div>
                        <div class="sidebar-heading border-bottom bg-light mt-4 fw-bold">TRANSAKSI</div>
                        <div class="list-group list-group-flush">
                            <a class="list-group-item list-group-item-action list-group-item-light p-2" href="#!">Dompet Masuk</a>
                            <a class="list-group-item list-group-item-action list-group-item-light p-2" href="#!">Dompet Keluar</a>
                        </div>
                        <div class="sidebar-heading border-bottom bg-light mt-4 fw-bold">LAPORAN</div>
                        <div class="list-group list-group-flush">
                            <a class="list-group-item list-group-item-action list-group-item-light p-2" href="#!">Laporan Transaksi</a>
                        </div>
                    </div>
                  </div>

                  {{-- Table Contntent --}}
                 
                  <div class="col-10">
                      <div class="row">
                          <div class="col">
                              @yield('container')
                          </div>
                          {{-- ls --}}
                      </div>
                  </div>
                   {{-- Table Contntent --}}
              </div>
          </div>
        </main>
        {{-- Main end --}}

        {{-- Footer --}}
        <footer class="p-2 text-center bg-info text-light mt-4">
            <div>Maju Bersama Atomic Indonesia</div>
        </footer>
        {{-- Footer end --}}
    </div>


    {{-- Bootsrap javascript --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    {{-- Bootstrap bundle --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>