<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sarah May Anasco - CRUD App Laravel 10 & Ajax</title>

  <link rel='stylesheet' href='/bootstrap.min.css' />
  <link rel='stylesheet' href='/bootstrap-icons-1.5.0/bootstrap-icons.min.css' />
  <link rel="stylesheet" type="text/css" href="/datatables.min.css" /> 
  <script src="/jquery.min.js"></script>

  <style type="text/css">
        
       html {
          height:100%;
        }

        body {
          margin:0;
        }

        .bg {
          animation:slide 3s ease-in-out infinite alternate;
          background-image: linear-gradient(-60deg, #6c3 50%, #09f 50%);
          bottom:0;
          left:-50%;
          opacity:.5;
          position:fixed;
          right:-50%;
          top:0;
          z-index:-1;
        }

        .bg2 {
          animation-direction:alternate-reverse;
          animation-duration:4s;
        }

        .bg3 {
          animation-duration:5s;
        }

        .content {
          background-color:rgba(255,255,255,.8);
          border-radius:.25em;
          box-shadow:0 0 .25em rgba(0,0,0,.25);
          box-sizing:border-box;
          left:50%;
          padding:10vmin;
          position:fixed;
          text-align:center;
          top:50%;
          transform:translate(-50%, -50%);
        }

        h1 {
          font-family:monospace;
        }

        @keyframes slide {
          0% {
            transform:translateX(-25%);
          }
          100% {
            transform:translateX(25%);
          }
        }

  </style>

</head>
{{-- add new iphone modal start --}}
<div class="modal fade" id="addIphoneModal" tabindex="-1" aria-labelledby="exampleModalLabel"
  data-bs-backdrop="static" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Iphone</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="#" method="POST" id="add_iphone_form" enctype="multipart/form-data">
        @csrf
        <div class="modal-body p-4 bg-light">
          <div class="my-2">
            <label for="add_iphone_image">Select iPhone Image</label>
            <input type="file" name="add_iphone_image" class="form-control" required>
          </div>
          <div class="my-2">
            <label for="model">Model</label>
            <input type="text" name="model" class="form-control" placeholder="Model" required>
          </div>
          <div class="my-2">
            <label for="released">Released</label>
            <input type="text" name="released" class="form-control" placeholder="Released" required>
          </div>
          <div class="my-2">
            <label for="discontinued">Discontinued</label>
            <input type="text" name="discontinued" class="form-control" placeholder="Discontinued" required>
          </div>
          <div class="my-2">
            <label for="capacities">Capacities</label>
            <input type="text" name="capacities" class="form-control" placeholder="Capacities" required>
          </div>
          <div class="my-2">
            <label for="processor">Processor</label>
            <input type="text" name="processor" class="form-control" placeholder="Processor" required>
          </div>
          <div class="my-2">
            <label for="os">Operating System</label>
            <input type="text" name="os" class="form-control" placeholder="Operating System" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" id="add_iphone_btn" class="btn btn-primary">Add Iphone</button>
        </div>
      </form>
    </div>
  </div>
</div>
{{-- add new iphone modal end --}}

{{-- edit iphone modal start --}}
<div class="modal fade" id="editIphoneModal" tabindex="-1" aria-labelledby="exampleModalLabel"
  data-bs-backdrop="static" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Iphone</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="#" method="POST" id="edit_iphone_form" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="iphone_update_id" id="iphone_update_id">
        <input type="hidden" name="iphone_update_image" id="iphone_update_image">
        <div class="modal-body p-4 bg-light">
          <div class="mt-2" id="iphone_image">

          </div>
          <div class="my-2">
            <label for="iphone_image">Select iPhone Image</label>
            <input type="file" id="iphone_image" name="iphone_image" class="form-control">
          </div>
          <div class="my-2">
            <label for="model">Model</label>
            <input type="text" name="model" id="model" class="form-control" placeholder="Model" required>
          </div>
          <div class="my-2">
            <label for="released">Released</label>
            <input type="text" name="released" id="released" class="form-control" placeholder="Released" required>
          </div>
          <div class="my-2">
            <label for="discontinued">Discontinued</label>
            <input type="text" name="discontinued" id="discontinued" class="form-control" placeholder="Discontinued" required>
          </div>
          <div class="my-2">
            <label for="capacities">Capacities</label>
            <input type="text" name="capacities" id="capacities" class="form-control" placeholder="Capacities" required>
          </div>
          <div class="my-2">
            <label for="processor">Processor</label>
            <input type="text" name="processor" id="processor" class="form-control" placeholder="Processor" required>
          </div>
          <div class="my-2">
            <label for="os">Operating System</label>
            <input type="text" name="os" id="os" class="form-control" placeholder="Operating System" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" id="edit_iphone_btn" class="btn btn-success">Update Iphone</button>
        </div>
      </form>
    </div>
  </div>
</div>
{{-- edit iphone modal end --}}

{{-- view iphone modal start --}}
<div class="modal fade" id="viewIphoneModal" tabindex="-1" aria-labelledby="exampleModalLabel"
  data-bs-backdrop="static" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">View Iphone</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="#" method="POST" id="view_iphone_form" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="iphone_view_id" id="iphone_view_id">
        <input type="hidden" name="iphone_view_image" id="iphone_view_image">
        <div class="modal-body p-4 bg-light">
          <div class="mt-2" id="view_iphone_image">

          </div>
          <div class="my-2">
            <label for="view_model">Model</label>
            <input type="text" name="view_model" id="view_model" class="form-control" placeholder="Model" required onfocus="this.blur()">
          </div>
          <div class="my-2">
            <label for="released">Released</label>
            <input type="text" name="view_released" id="view_released" class="form-control" placeholder="Released" required onfocus="this.blur()">
          </div>
          <div class="my-2">
            <label for="view_discontinued">Discontinued</label>
            <input type="text" name="view_discontinued" id="view_discontinued" class="form-control" placeholder="Discontinued" required onfocus="this.blur()">
          </div>
          <div class="my-2">
            <label for="view_capacities">Capacities</label>
            <input type="text" name="view_capacities" id="view_capacities" class="form-control" placeholder="Capacities" required onfocus="this.blur()">
          </div>
          <div class="my-2">
            <label for="view_processor">Processor</label>
            <input type="text" name="view_processor" id="view_processor" class="form-control" placeholder="Processor" required onfocus="this.blur()">
          </div>
          <div class="my-2">
            <label for="view_os">Operating System</label>
            <input type="text" name="view_os" id="view_os" class="form-control" placeholder="Operating System" required onfocus="this.blur()">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> 
        </div>
      </form>
    </div>
  </div>
</div>
{{-- view iphone modal end --}}

<body class="bg-light"> 
<div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>
      <br>
      <div class="container">
          <div class="text-center text-white">
            <h1 class="text-light">iPhone Store</h1>
            <h3 class="text-light">@SARAH MAY AÑASCO </h3>
            <h1 class="text-light">CRUD App Laravel-10 & Ajax</h1>
          </div>
      </div>
      <div class="container">
        <div class="row my-5">
          <div class="col-lg-12">
            <div class="card shadow">
              <div class="card-header bg-danger d-flex justify-content-between align-items-center" style="background-color:#795548!important;">
                <h3 class="text-light">Manage Iphones</h3>
                 
                <div class="my-2">
                  <input type="text" name="search_form" id="search_form" class="form-control" placeholder="Search" hidden>
                </div>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addIphoneModal"><i
                    class="bi-plus-circle me-2"></i>Add New Iphone</button>
              </div>
              <div class="card-body" id="show_all_iphones">
                <h1 class="text-center text-secondary my-5">Loading...</h1>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="text-center"> 
        <h6 class="text-light">Subject: Interactive Programming and Technologies (IPT1)</h6>
        <h6 class="text-light">@SARAH MAY AÑASCO</h6>
      </div> 
      <br><br>

  
  <script src='/bootstrap.bundle.min.js'></script> 
  <script type="text/javascript" src="/datatables.min.js"></script>
  <script src="/sweetalert2@11.js"></script>
 
  <script>
    $(function() {

        var typeTimer;

      // search iphone ajax request
      $('#search_form').on('keyup', function() {
            var keyword = $(this).val();
            clearTimeout(typeTimer);

            typeTimer = setTimeout(function() {
                searchiPhone(keyword);
            }, 2000);
        });


      function searchiPhone(keyword) 
        {
            if (keyword.trim() == "") {
                getProductData();
                return;
            }

            $.get({
                url: "/iphone/search/" + keyword,
                success: function(res)
                {
                    $('.table-s').html(res.html);
                    addUpdateAction();
                    addDeleteAction();
                },
                error: function()
                {
                    console.log('err');
                }
            });
        }

      // view iphone ajax request
      $(document).on('click', '.viewIcon', function(e) {
        e.preventDefault();
        let id = $(this).attr('id');
        $.ajax({
          url: '/iphone/view/' + id,
          method: 'get',
          data: {
            _token: '{{ csrf_token() }}'
          },
          success: function(response) {
            $("#view_model").val(response.model);
            $("#view_released").val(response.released);
            $("#view_discontinued").val(response.discontinued);
            $("#view_capacities").val(response.capacities);
            $("#view_processor").val(response.processor);
            $("#view_os").val(response.os);
            $("#view_iphone_image").html(
              `<img src="files/public/images/${response.iphone_image}" width="100" class="img-fluid img-thumbnail">`);
            $("#iphone_view_id").val(response.id);
            $("#iphone_view_image").val(response.iphone_image);
          }
        });
      });



      // add new iphone ajax request
      $("#add_iphone_form").submit(function(e) {
        e.preventDefault();
        const fd = new FormData(this);
        $("#add_iphone_btn").text('Adding...');
        $.ajax({
          url: '/iphone/create',
          method: 'post',
          data: fd,
          cache: false,
          contentType: false,
          processData: false,
          dataType: 'json',
          success: function(response) {
            if (response.status == 200) {
              Swal.fire(
                'Added!',
                'Iphone Added Successfully!',
                'success'
              )
              fetchAllIphones();
            }
            $("#add_iphone_btn").text('Add Iphone');
            $("#add_iphone_form")[0].reset();
            $("#addIphoneModal").modal('hide');
          }
        });
      });

      // edit iphone ajax request
      $(document).on('click', '.editIcon', function(e) {
        e.preventDefault();
        let id = $(this).attr('id');
        $.ajax({
          url: '/iphone/edit/' + id,
          method: 'get',
          data: {
            _token: '{{ csrf_token() }}'
          },
          success: function(response) {
            $("#model").val(response.model);
            $("#released").val(response.released);
            $("#discontinued").val(response.discontinued);
            $("#capacities").val(response.capacities);
            $("#processor").val(response.processor);
            $("#os").val(response.os);
            $("#iphone_image").html(
              `<img src="files/public/images/${response.iphone_image}" width="100" class="img-fluid img-thumbnail">`);
            $("#iphone_update_id").val(response.id);
            $("#iphone_update_image").val(response.iphone_image);
          }
        });
      });

      // update iphone ajax request
      $("#edit_iphone_form").submit(function(e) {
        e.preventDefault();
        const fd = new FormData(this);
        $("#edit_iphone_btn").text('Updating...');
        $.ajax({
          url: '/iphone/update',
          method: 'post',
          data: fd,
          cache: false,
          contentType: false,
          processData: false,
          dataType: 'json',
          success: function(response) {
            if (response.status == 200) {
              Swal.fire(
                'Updated!',
                'Iphone Updated Successfully!',
                'success'
              )
              fetchAllIphones();
            }
            $("#edit_iphone_btn").text('Update Iphone');
            $("#edit_iphone_form")[0].reset();
            $("#editIphoneModal").modal('hide');
          }
        });
      });

      // delete iphone ajax request
      // i use sweetalert2 for confirmation before delete
      $(document).on('click', '.deleteIcon', function(e) {
        e.preventDefault();
        let id = $(this).attr('id');
        let csrf = '{{ csrf_token() }}';
        Swal.fire({
          title: 'Are you sure?\n DELETE this iPhone',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.isConfirmed) {
            $.ajax({
              url: '/iphone/delete/' + id,
              method: 'delete',
              data: { 
                _token: csrf
              },
              success: function(response) {
                console.log(response);
                Swal.fire(
                  'Deleted!',
                  'Your iPhone has been deleted.',
                  'success'
                )
                fetchAllIphones();
              }
            });
          }
        })
      });

      // fetch all iphones ajax request
      fetchAllIphones();

      function fetchAllIphones() {
        $.ajax({
          url: '/iphone/read',
          method: 'get',
          success: function(response) {
            $("#show_all_iphones").html(response);
            $("table").DataTable({
              order: [0, 'desc']
            });
          }
        });
      }
    });
  </script>
</body>

</html>