<!DOCTYPE html>
<html>
<head>
    <title>Sarah May Anasco - Laravel 9 AJAX CRUD</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ URL::asset('assets/img/apple-icon.png'); }}">
    <link rel="icon" type="image/png" href="{{ URL::asset('assets/img/favicon.png'); }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
 

    <link href="{{ URL::asset('assets/css/material-dashboard.css?v=2.1.2'); }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/demo/demo.css'); }}" rel="stylesheet">

</head>
<body class="sidebar-mini">
        

    <div class="main-panel"> 

        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
            <div class="container-fluid">
              <div class="navbar-wrapper">
                <div class="navbar-minimize">
                  <button id="minimizeSidebar" class="btn btn-just-icon btn-white btn-fab btn-round">
                    <i class="material-icons text_align-center visible-on-sidebar-regular">more_vert</i>
                    <i class="material-icons design_bullet-list-67 visible-on-sidebar-mini">view_list</i>
                  </button>
                </div>
                <a class="navbar-brand" href="javascript:;">DataTables.net</a>
              </div>
              <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="true" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-end">
                <form class="navbar-form">
                  <div class="input-group no-border">
                    <input type="text" value="" class="form-control" placeholder="Search...">
                    <button type="submit" class="btn btn-white btn-round btn-just-icon">
                      <i class="material-icons">search</i>
                      <div class="ripple-container"></div>
                    </button>
                  </div>
                </form>
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="javascript:;">
                      <i class="material-icons">dashboard</i>
                      <p class="d-lg-none d-md-block">
                        Stats
                      </p>
                    </a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="material-icons">notifications</i>
                      <span class="notification">5</span>
                      <p class="d-lg-none d-md-block">
                        Some Actions
                      </p>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="#">Mike John responded to your email</a>
                      <a class="dropdown-item" href="#">You have 5 new tasks</a>
                      <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                      <a class="dropdown-item" href="#">Another Notification</a>
                      <a class="dropdown-item" href="#">Another One</a>
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="material-icons">person</i>
                      <p class="d-lg-none d-md-block">
                        Account
                      </p>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                      <a class="dropdown-item" href="#">Profile</a>
                      <a class="dropdown-item" href="#">Settings</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Log out</a>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid"> 
                <div class="material-datatables">
                    <h1>Sarah May Anasco - Laravel 9 AJAX CRUD</h1>
                    <a class="btn btn-success" href="javascript:void(0)" id="createNewiPhone"> Create New iPhone</a>
                    <table class="table table-bordered data-table">
                        <colgroup>
                            <col width="5%">
                            <col width="10%">
                            <col width="15%">
                            <col width="15%">
                            <col width="10%">
                            <col width="10%">
                            <col width="15%">
                            <col width="5%">
                        </colgroup>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>iPhone Model</th>
                                <th>Released</th>
                                <th>Discontinued</th>
                                <th>Capacities</th>
                                <th>Processor</th>
                                <th>OS</th>
                                <th width="280px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

     
<div class="modal fade" id="ajaxiPhoneModel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modelHeading"></h4>
            </div>
            <div class="modal-body">
                <form id="iphoneForm" name="iphoneForm" class="form-horizontal">
                   <input type="hidden" name="iphone_id" id="iphone_id">

                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">iPhone Model</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="model" name="model" placeholder="Enter Model" value="" maxlength="50" required="">
                        </div>
                    </div>
       
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Released</label>
                        <div class="col-sm-12">
                            <textarea id="released" name="released" required="" placeholder="Enter Released" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">discontinued</label>
                        <div class="col-sm-12">
                            <textarea id="discontinued" name="discontinued" required="" placeholder="Enter Discontinued" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Capacities</label>
                        <div class="col-sm-12">
                            <textarea id="capacities" name="capacities" required="" placeholder="Enter Capacities" class="form-control"></textarea>
                        </div>
                    </div>
        
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Processor</label>
                        <div class="col-sm-12">
                            <textarea id="processor" name="processor" required="" placeholder="Enter processor" class="form-control"></textarea>
                        </div>
                    </div>
        
                    <div class="form-group">
                        <label class="col-sm-2 control-label">OS</label>
                        <div class="col-sm-12">
                            <textarea id="os" name="os" required="" placeholder="Enter OS" class="form-control"></textarea>
                        </div>
                    </div>
        
                    <div class="col-sm-offset-2 col-sm-10">
                     <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Save changes
                     </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

    <script src="{{ URL::asset('assets/js/core/jquery.min.js'); }}"></script> 
    <script src="{{ URL::asset('assets/js/core/popper.min.js'); }}"></script> 
    <script src="{{ URL::asset('assets/js/core/bootstrap-material-design.min.js'); }}"></script> 
    <script src="{{ URL::asset('assets/js/plugins/perfect-scrollbar.jquery.min.js'); }}"></script> 
    <script src="{{ URL::asset('assets/js/plugins/moment.min.js'); }}"></script> 
    <script src="{{ URL::asset('assets/js/plugins/sweetalert2.js'); }}"></script> 
    <script src="{{ URL::asset('assets/js/plugins/jquery.validate.min.js'); }}"></script> 
    <script src="{{ URL::asset('assets/js/plugins/jquery.bootstrap-wizard.js'); }}"></script> 
    <script src="{{ URL::asset('assets/js/plugins/bootstrap-selectpicker.js'); }}"></script> 
    <script src="{{ URL::asset('assets/js/plugins/bootstrap-datetimepicker.min.js'); }}"></script> 
    <script src="{{ URL::asset('assets/js/plugins/jquery.dataTables.min.js'); }}"></script> 
    <script src="{{ URL::asset('assets/js/plugins/bootstrap-tagsinput.js'); }}"></script> 
    <script src="{{ URL::asset('assets/js/plugins/jasny-bootstrap.min.js'); }}"></script> 
    <script src="{{ URL::asset('assets/js/plugins/fullcalendar.min.js'); }}"></script> 
    <script src="{{ URL::asset('assets/js/plugins/jquery-jvectormap.js'); }}"></script> 
    <script src="{{ URL::asset('assets/js/plugins/nouislider.min.js'); }}"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script> 
    <script src="{{ URL::asset('assets/js/plugins/arrive.min.js'); }}"></script> 
    <script src="{{ URL::asset('assets/js/plugins/chartist.min.js'); }}"></script> 
    <script src="{{ URL::asset('assets/js/plugins/bootstrap-notify.js'); }}"></script>  
    <script src="{{ URL::asset('assets/js/material-dashboard.js?v=2.1.2'); }}"></script> 
    <script src="{{ URL::asset('assets/demo/demo.js'); }}"></script> 

</body>

<script type="text/javascript">
  $(function () {
      
    /*------------------------------------------
     --------------------------------------------
     Pass Header Token
     --------------------------------------------
     --------------------------------------------*/ 
    $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
    });
      
    /*------------------------------------------
    --------------------------------------------
    Render DataTable
    --------------------------------------------
    --------------------------------------------*/
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('iphones.index') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'model', name: 'model'},
            {data: 'released', name: 'released'},
            {data: 'discontinued', name: 'discontinued'},
            {data: 'capacities', name: 'capacities'},
            {data: 'processor', name: 'processor'},
            {data: 'os', name: 'os'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
       
    /*------------------------------------------
    --------------------------------------------
    Click to Button
    --------------------------------------------
    --------------------------------------------*/
    $('#createNewiPhone').click(function () {
        $('#saveBtn').val("create-iphone");
        $('#iphone_id').val('');
        $('#iphoneForm').trigger("reset");
        $('#modelHeading').html("Create New iPhone");
        $('#ajaxiPhoneModel').modal('show');
    });
      
    /*------------------------------------------
    --------------------------------------------
    Click to Edit Button
    --------------------------------------------
    --------------------------------------------*/
    $('body').on('click', '.editiPhone', function () {
      var iphone_id = $(this).data('id');
      $.get("{{ route('iphones.index') }}" +'/' + iphone_id +'/edit', function (data) {
          $('#modelHeading').html("Edit iPhone");
          $('#saveBtn').val("edit-user");
          $('#ajaxiPhoneModel').modal('show');
          $('#iphone_id').val(data.id);
          $('#model').val(data.model);
          $('#released').val(data.released);
          $('#discontinued').val(data.discontinued);
          $('#capacities').val(data.capacities);
          $('#processor').val(data.processor);
          $('#os').val(data.os);
      })
    });
       
    /*------------------------------------------
    --------------------------------------------
    Create iPhone Code
    --------------------------------------------
    --------------------------------------------*/
    $('#saveBtn').click(function (e) {
        e.preventDefault();
        $(this).html('Sending..');
      
        $.ajax({
          data: $('#iphoneForm').serialize(),
          url: "{{ route('iphones.store') }}",
          type: "POST",
          dataType: 'json',
          success: function (data) {
       
              $('#iphoneForm').trigger("reset");
              $('#ajaxiPhoneModel').modal('hide');
              table.draw();
           
          },
          error: function (data) {
              console.log('Error:', data);
              $('#saveBtn').html('Save Changes');
          }
      });
    });
      
    /*------------------------------------------
    --------------------------------------------
    Delete iPhone Code
    --------------------------------------------
    --------------------------------------------*/
    $('body').on('click', '.deleteiPhone', function () {
     
        var iphone_id = $(this).data("id");
        confirm("Are You sure want to delete !");
        
        $.ajax({
            type: "DELETE",
            url: "{{ route('iphones.store') }}"+'/'+iphone_id,
            success: function (data) {
                table.draw();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });
       
  });
</script>
</html>