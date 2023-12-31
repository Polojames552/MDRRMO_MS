<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Inactive Employee</title>

    <!-- Custom fonts for this template-->

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
   <!-- Button-->
 <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,400,500,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
 <!-- Button-->
    <link href="{{('css/styles.css') }}" rel="stylesheet" type="text/css" >
    <!-- Custom styles for this template-->
    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/logo12basd21.png"/>
    <!-- <link href="css/styles.css" rel="stylesheet"> -->

     <!-- table-->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css" type="text/css">
 <!-- table-->
</head>
<style>
    .new{
  margin-left: 30px;
}

ul li {
      list-style: none;
      border-left: 2px solid #3ca0e7;
      display: inline-block;
      position: relative;
      text-decoration: none;
      text-align: center;

    }

    li a {
      color: black;

    }

    li a:hover {
      color: #3ca0e7;
    }

    li:hover {
      cursor: pointer;
    }


    ul li ul {
      visibility: hidden;
      opacity: 0;
      position: absolute;
      padding-left: 0;
      left: 0;
      display: none;
      background: white;
      margin-left: 30px;
    }

    ul li:hover > ul,
    ul li ul:hover {
      visibility: visible;
      opacity: 1;
      display: block;
      min-width: 100px;
      text-align: left;
      padding-top: 20px;
      box-shadow: 0px 3px 5px -1px #ccc;
    }

    ul li ul li {
      clear: both;
      width: 100%;
      text-align: left;
      margin-bottom: 20px;
      border-style: none;
    }

    @media only screen and (max-width: 768px) {
  /* For mobile phones: */

  .new{
    font-size: 12px;
    width: 100%;
    margin-left: 5px;
}
}
#boxcolor1{
        background-color: #ffffff;
    }

    #boxcolor2{
        background-color:  #33cccc;
    }

    #boxcolor3{
        background-color:  #ff6666;
    }

    
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <img src="images/logo12basd21.png">
        <br><br>


               <!-- Sidebar - Brand -->
               <!-- <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                <img src="images/logo12basd21.png" width="160px" height="160px">
                </div>

            </a> -->



            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="dashboard" >
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>



            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Add Employee -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="Adduser" >
                    <i class=" fas fa-solid fa-users"></i>
                    <span>Manage Employee</span>

                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link collapsed" href="Report" >
                <i class="fas fa-clipboard-list"></i>
                <span>Add Reports</span>

                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link collapsed" href="Export" >
                <i class="fas fa-solid fa-file-export"></i>
                <span>Export Data</span>
                </a>
            </li>



            <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <a  class="nav-link collapsed"  href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                         <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                    </a>
                    </form>
            </li>






        </ul>
        <!-- End of Sidebar -->
<!-- ..................................................................... -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-blue topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class='bx bx-menu'></i>
                    </button>



                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- <h4>Report and Monitoring Information System</h4> -->
                        <!-- Nav Item - User Information -->
                        <!-- <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <i class='bx bxs-user-circle'></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li> -->

                    </ul>

                </nav>
                <div id="content">
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Content Row -->
        <div class="row">
<style>
.column {
float: left;
padding-left: 50px;
width: 50%;
/* padding: 10px; */
}

/* Clear floats after the columns */
.row:after {
display: table;
clear: both;
}
</style>
            <!--  Employee -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                            <a href="Adduser">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1"> All Employee</div>
                                <div class="row">
                                    <div class="column">
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$num}}</div>
                                    </div>
                                    <div class="column">
                                        <div class="col-auto">
                                        <i class=" fas fa-users fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- New Reports -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                <a href="ActiveEmployee">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Active Employee</div>
                                    <div class="row">
                                        <div class="column">
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$active}}</div>
                                        </div>
                                        <div class="column">
                                            <div class="col-auto"> <i class=" fas fa-user-friends fa-2x text-gray-300"></i></div>
                                        </div>
                                    </div>
                                </a>
                                </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Reviewed Reports -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                           
                        <div class="col mr-2">
                            <a href="InactiveEmployee">
                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Inactive Employee</div>
                                    <div class="row">
                                        <div class="column">
                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$inactive}}</div>
                                        </div>
                                        <div class="column">
                                            <div class="col-auto">  <i class=" fas fa-user fa-2x text-gray-300"></i></i></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>

                    <h2>Inactive Employees</h2>

                    <div class="wrapper">
    <div class="form_container">
    <div style="overflow-x:auto;">
    <table id="example" class="display"  width="100%">
                <thead>
                    <h5>MDRRMO-Employee</h5>
                    <br>
                    <tr>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Contact No.</th>
                        <th>User Name</th>
                        <th>Status</th>
                        <th>Edit_Details</th>
                    </tr>
                </thead>
            
                <tbody>
                @foreach($data as $data)
                    <tr>
                        <td>{{$data->name}}</td>
                        <td>{{$data->address}}</td>
                        <td>{{$data->contact_num}}</td>
                        <td>{{$data->email}}</td>
                        <td>{{$data->Status}}</td>
                        <td>
                            <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#EditEmployee{{$data->id}}"><i class='bx bx-edit-alt'></i></button>
                            @include('modal.EditEmployee')
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
    </section>




    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>





   <!-- table -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
<!-- table -->
</body>

<script>
  //table script pagination
$(document).ready(function () {
    $('#example').DataTable({
        pagingType: 'full_numbers',
    });
});
</script>
</html>
