<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">  

    {{-- CSS untuk datatables --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.css">

    {{-- CSS untuk Bootstrap Icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <title>Rolmax - @yield('title')</title>
</head>
<body>
    <div class="container-fluid">
        <!--HEADER-->
        <div class="row">
            <div class="col-md-12 bg-primary py-2">
                <div class="dropdown float-right">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bi bi-person-circle"></i> User
                    </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#"><i class="bi bi-person-fill"></i>{{Auth::user()->name ?? ""}}</a>
                            <a class="dropdown-item" href="/user"><i class="bi bi-pen"></i> Change Password</a>
                            <a class="dropdown-item" href="/logout"><i class="bi bi-box-arrow-in-left"></i> Logout</a>
                        </div>
                </div>
            </div>
        </div>

        <!--BODY/KONTEN-->
        <div class="row vh-100">
            <div class="col-md-2">
                <!--MENU-->
                <div class="row mt-4">
                    <div class="col-3">
                      <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link {{ ($key == "home") ? "active":"" }}" id="v-pills-home-tab" href="/home">Home</a>
                        <a class="nav-link {{ ($key == "catalog") ? "active":"" }}" id="v-pills-profile-tab" href="/catalog">Catalog</a>
                        <a class="nav-link" id="v-pills-messages-tab" href="#">About</a>
                        <a class="nav-link" id="v-pills-settings-tab" href="#">FAQ</a>
                      </div>
                    </div>
                </div>
            </div>
            <!--ARTIKEL-->
            <div class="col-md-10">
                <div class="card mt-4">
                    <div class="card-header"></div>
                    <div class="card-body">
                        <div class="jumbotron jumbotron-fluid">
                            {{-- ANAK-ANAK = {HOME,CATALOG,ABOUT} --}}
                            @yield('artikel')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <footer>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 bg-primary py-4"></div>
                </div>
            </div>
        </footer> -->
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    {{-- Javascript DataTables --}}
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
    <script>
        new DataTable('#example');
    </script>
</body>
</html>