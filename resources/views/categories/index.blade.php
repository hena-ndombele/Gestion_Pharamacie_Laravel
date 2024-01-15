<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PHARMACIE</title>

    <!-- Custom fonts for this template-->
    <link href="{{url('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="{{url('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i')}}"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{url('css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav  sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color:#086223;">

            <!-- Sidebar - Brand -->
          <img src="images/logo.jpeg" alt="" width="90px;">
            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{route('index')}}">
                    <i class="fas fa-fw fa-home"></i>
                    <span>HOME</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
           
            <!-- Nav Item - Pages Collapse Menu -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{route('entrees.index')}}" >
                    <i class="fas fa-fw fa-arrow-right"></i>
                    <span>ENTREE</span>
                </a>
             
            </li>
        

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-arrow-left"></i>
                    <span>SORTIE</span>
                </a>
             
            </li>
 <!-- Nav Item - Utilities Collapse Menu -->
 <li class="nav-item">
    <a class="nav-link collapsed" href="{{route('categories.index')}}" 
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-tag"></i>
        <span>CATEGORIE</span>
    </a>
 
</li>
 <!-- Nav Item - Utilities Collapse Menu -->
 <li class="nav-item">
    <a class="nav-link collapsed" href="#" "
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-wrench"></i>
        <span>FOURNISSEURS</span>
    </a>
 
</li>
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>
                </ul>
       
              <br><br>

                    <div class="text-end">
                        <button type="button" class="btn btn-primary m-4 float-right" data-toggle="modal" data-target="#modal-default">
                            <i class="fas fa-plus-circle">
                            </i>
                        </button>
                    </div>
                

        <div class="container-fluid">
          <div class="col-12">
            
              <div class="row">
                  <div class="col-12">
                    
        <div class="card">
            <h1 style="text-align: center;font-weight:bolder;color:green;">Categories Produits</h1>
          <div class="card-body p-0">
            <table class="table table-striped projects text-center" >
              <thead>
                  <tr>
                      <th class="text-center col-lg-1">
                          Numero
                      </th>
                      <th class="text-center col-lg-3">
                          type de produit
                      </th>
                      
                  </tr>
              </thead>
              <tbody>
                  <tr class="text-center col-lg-1">
                     
                   <td class="text-center">1</td>
                        <td class="text-center col-lg-3">Medicament sur ordonance</td>
                        
                     
                       


               
                
                     
                  </tr>
              
                  
              </tbody>
          </table>
          <td class="text-right  col-lg-2">
            <form action="{{ route('departements.destroy'?, method="POST">
              
                <a class="btn btn-outline-primary fas fa-folder"  data-toggle="modal" data-target="" href="#"></a>

              
                <a class="btn btn-danger btn-sm" href="#" data-toggle="modal" data-target="">
                    <i class="fas fa-trash" form=""></i>
                </a>
              
            </form>
        </td>
          </div>
         
        </div>
                  </div>
              </div></div>



        











    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
</body>