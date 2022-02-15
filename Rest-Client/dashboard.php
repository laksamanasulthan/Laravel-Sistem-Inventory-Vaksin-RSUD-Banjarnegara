<?php

require __DIR__ . '/vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client([
	'base_uri' => 'http://127.0.0.1:8000',
	'timeout' => 5,
]);

$response = $client->request('GET', '/api/apidbsatu');
$body = $response->getBody();
$data_body = json_decode($body);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Sistem Inventory Vaksin RSUD Banjarnegara</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">Inventory Vaksin</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="LoginForm/login.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="dashboard.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                APIDataVaksin
                            </a>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="dashboard2.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                APIDataDistribusi
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Projek :</div>
                        Sister dan Keamanan
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>



                        <!-- ModalAdd -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Data Vaksin</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <div class="modal-body">
                            <form action="aksi_tambah.php" method="POST">
              
                                <div class="form-group last mb-4">
                                    <label for="company">Perusahaan Pengembang</label>
                                    <input type="text" class="form-control"  name="company">
                                </div>
                                <div class="form-group last mb-4">
                                    <label for="fda">Tanggal Approval dari FDA</label>
                                    <input type="text" class="form-control"  name="fda">
                                </div>
                                <div class="form-group last mb-4">
                                    <label for="clinical">Presentasi Klinikal</label>
                                    <input type="text" class="form-control"  name="clinical">
                                </div>
                                <div class="form-group last mb-4">
                                    <label for="dose">Dosis</label>
                                    <input type="text" class="form-control"  name="dose">
                                </div>
                                <div class="form-group last mb-4">
                                    <label for="rec">Rekomendasi Penggunaan</label>
                                    <input type="text" class="form-control"  name="rec">
                                </div>
                                <div class="form-group last mb-4">
                                    <label for="efek">Efek Samping</label>
                                    <input type="text" class="form-control"  name="efek">
                                </div>
                                <div class="form-group last mb-4">
                                    <label for="warn">Peringatan</label>
                                    <input type="text" class="form-control"  name="warn">
                                </div>


                                <input type="submit" value="Submit" class="btn btn-block btn-primary">
                                
                                </form>    
                            </div>

                            </div>
                        </div>
                        </div>




                        <!-- ModalUpdate -->
                        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Data Vaksin</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <div class="modal-body">
                            <form action="aksi_update.php" method="POST">
              
                                <div class="form-group last mb-4">
                                    <label for="aidi">ID</label>
                                    <input type="text" class="form-control" name="aidi">
                                </div>
                                <div class="form-group last mb-4">
                                    <label for="company">Perusahaan Pengembang</label>
                                    <input type="text" class="form-control"  name="company">
                                </div>
                                <div class="form-group last mb-4">
                                    <label for="fda">Tanggal Approval dari FDA</label>
                                    <input type="text" class="form-control"  name="fda">
                                </div>
                                <div class="form-group last mb-4">
                                    <label for="clinical">Presentasi Klinikal</label>
                                    <input type="text" class="form-control"  name="clinical">
                                </div>
                                <div class="form-group last mb-4">
                                    <label for="dose">Dosis</label>
                                    <input type="text" class="form-control"  name="dose">
                                </div>
                                <div class="form-group last mb-4">
                                    <label for="rec">Rekomendasi Penggunaan</label>
                                    <input type="text" class="form-control"  name="rec">
                                </div>
                                <div class="form-group last mb-4">
                                    <label for="efek">Efek Samping</label>
                                    <input type="text" class="form-control"  name="efek">
                                </div>
                                <div class="form-group last mb-4">
                                    <label for="warn">Peringatan</label>
                                    <input type="text" class="form-control"  name="warn">
                                </div>


                                <input type="submit" value="Submit" class="btn btn-block btn-primary">
                                
                                </form>    
                            </div>

                            </div>
                        </div>
                        </div>

                        <script>

                            var exampleModal = document.getElementById('exampleModal2')
                            exampleModal.addEventListener('show.bs.modal', function (event) {
                            // Button that triggered the modal
                            var button = event.relatedTarget
                            // Extract info from data-bs-* attributes
                            var recipient = button.getAttribute('data-bs-whatever')
                            // If necessary, you could initiate an AJAX request here
                            // and then do the updating in a callback.
                            //
                            // Update the modal's content.
                            var modalTitle = exampleModal.querySelector('.modal-title')
                            var modalBodyInput = exampleModal.querySelector('.modal-body input')

                            modalTitle.textContent = 'Update Data Vaksin '
                            modalBodyInput.value = recipient
                            })

                        </script>



                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Spesifikasi Vaksin
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Add Data
                        </button>
                            </div>
                            
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Perusahaan Pengembang</th>
                                            <th>Tanggal Approval dari FDA</th>
                                            <th>Presentasi Klinikal</th>
                                            <th>Dosis</th>
                                            <th>Rekomendasi Penggunaan</th>
                                            <th>Efek samping</th>
                                            <th>Peringatan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $no = 1;
                                            foreach ($data_body as $data) { ?>
                                                <tr>
                                                    <td><?php echo $no++; ?></td>
                                                    <td><?php echo $data->pengembangvaksin; ?></td>
                                                    <td><?php echo $data->approval; ?></td>
                                                    <td><?php echo $data->clinicalprtg; ?></td>
                                                    <td><?php echo $data->dosis; ?></td>
                                                    <td><?php echo $data->rekomendasi; ?></td>
                                                    <td><?php echo $data->efeksamping; ?></td>
                                                    <td><?php echo $data->peringatan; ?></td>
                                                    <td> 
                                                        <!-- Example single danger button -->
                                                            <div class="btn-group">
                                                            <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                Action
                                                            </button>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal2" data-bs-whatever="<?php echo $data->id; ?>" >Update</a></li>
                                                                <li><a class="dropdown-item" href="aksi_delete.php?del=<?php echo $data->id; ?>">Delete</a></li>
                                                            </ul>
                                                            </div>    
                                                            <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal4" data-bs-whatever="@mdo">Open modal for @mdo</button> -->
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                        


                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>