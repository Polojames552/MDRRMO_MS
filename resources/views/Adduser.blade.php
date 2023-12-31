<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Managed Employee</title>
<!-- Modal-->

 <!-- Button-->
 <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,400,500,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
 <!-- Button-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Custom fonts for this template-->

 <!-- table-->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css" type="text/css">
 <!-- table-->

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <link href="{{('css/styles.css') }}" rel="stylesheet" type="text/css" >
    <!-- Custom styles for this template-->
    <link href="css/style.css" rel="stylesheet">
    <!-- <link href="css/styles.css" rel="stylesheet"> -->
    <link rel="shortcut icon" href="images/logo12basd21.png"/>
</head>

<style>
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
                <a class="nav-link collapsed" href="Report">
                    <i class="fas fa-clipboard-list"></i>
                    <span> Add Reports</span>
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

                        <!-- <h5>Report and Monitoring Information System</h5> -->
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

               
<div  class="d-none d-sm-inline-block  shadow-sm" style="float: right;"  id="button-modal">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><i class="fas fa-download fa-sm text-white-50"></i> Add Employee</button>
</div>


<h2>Managed Employee</h2>
@if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
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

<!-- Large modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Employee</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <form method="POST" action="{{ route('register') }}">
        @csrf
  <div class="modal-body">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Name</label>
      <input type="text" class="form-control" name="name" id="name" placeholder="" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Contact Number</label>
      <input type="text" class="form-control"  name="contact_num" id="contact_num" placeholder="" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" name="address" id="address" placeholder="" required>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="text" class="form-control" name="email" id="email" placeholder="" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" name="password" id="password" placeholder="" required>
    </div>
  </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </form>
    </div>
  </div>
</div>
<!-- Large modal -->



      
</body>
<!-- table -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
<!-- table -->

<script>
  //table script pagination
$(document).ready(function () {
    $('#example').DataTable({
        pagingType: 'full_numbers',
    });
});
</script>

<!-- <script>
    $(document).ready(function(){
    $('#checkbox').on('change', function(){
        $('#password').attr('type',$('#checkbox').prop('checked')==true?"text":"password"); 
    });
    });
</script> -->
</html>
