
<!doctype html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>Super Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <!-- Icons -->
	<script src="https://kit.fontawesome.com/97a1274a6e.js" crossorigin="anonymous"></script>
    <!-- style -->
    <link rel="stylesheet" href="{{secure_asset('/userAdm/css/style.css')}}">
    {{-- DATA TABLE --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
    <!--summernote-->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <style>
        .form-control{
            border: 1px solid rgb(158, 158, 158)
        }
    </style>
</head>
<body>
    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="custom-menu">
            <button type="button" id="sidebarCollapse" class="btn btn-primary">
            <i class="fa fa-bars"></i>
            <span class="sr-only">Toggle Menu</span>
            </button>
            </div>
            <h1><a href="#" class="logo"> SUPER ADMIN </a></h1>
            <ul class="list-unstyled components">
                <li>
                    <a href="{{route('index')}}"><i class="fas fa-arrow-circle-left"></i> Web kelompok</a>
                </li>
                <li>
                    <a href="/super-woofer-admin"> Dashboard</a>
                </li>
                <li>
                    <a href="{{route('super-woofer-admin.posts')}}"> All Post Control</a>
                </li>
                <li>
                    <a href="{{route('super-woofer-admin.author')}}"> All User Control</a>
                </li>
            </ul>
        </nav>

            @yield('content')

    </div>
    <script src="{{'/userAdm/js/jquery.min.js'}}"></script>
    <script src="{{'/userAdm/js/popper.js'}}"></script>
    <script src="{{'/userAdm/js/bootstrap.min.j'}}s"></script>
    <script src="{{'/userAdm/js/main.js'}}"></script>
    {{-- DATA TABLE --}}
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
    <!--summernote-->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>


    <script>
        $('#summernote').summernote({
            callbacks: {
                onPaste: function(e) {
                    var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');
                    e.preventDefault();
                    document.execCommand('insertText', false, bufferText);
                }
            },
          tabsize: 2,
          height: 350,
          toolbar: [
            ['font', ['bold', 'underline', 'clear']],
            ['height', ['height']],
            ['fontsize', ['fontsize']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link', 'picture']],
            ['view', ['fullscreen', 'help']],
          ]
        });

        @if (count($errors) > 0)
            $('#passChange').modal('show');
        @endif

        $(document).ready( function () {
            $('#dataTable').DataTable();
        } );
      </script>

</body>

</html>