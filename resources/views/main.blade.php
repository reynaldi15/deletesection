<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Delete Section</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    
</head>
  <body>
    <div class="container">
        <h1 class="text-center text-success pt-4 ">Learn how to make and use the <a href="https://laravel.com/docs/8.x/scout#soft-deleting" class="text-decoration-none"><i class="text-warning">Soft Delete</i></a>  , <i class="text-danger">Force Delete</i> and  Restore</h1>
        <hr>
        <div class="row py-2">
            <div class="col-md-6">
                <h2>@yield('title')</h2>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <a href="/" class="btn btn-default m-2 text-gelap"><i class="fa-solid fa-user fa-beat"></i></i> List User</a>
                    <a href="trashed" class="btn btn-default m-2 text-info"><i class="fa-solid fa-user-slash fa-spin"></i> Recycle Bin</a>
                </div>
            </div>
        </div>
        <table id="example" class="table table-bordered table-hover display">
            @yield('data')
        </table>
    </div>

    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $('#example').DataTable();
        });
    </script>
</body>
</html>