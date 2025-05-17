<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Advanced CURD</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap JS (with Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>
    <h1 class="bg-dark text-light text-center py-2">PHP Advanced CURD</h1>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-10">
                <div class="input-group">
                    <span class="input-group-text bg-dark text-light">
                        <i class="fas fa-search"></i>
                    </span>
                    <input type="text" class="form-control" placeholder="Search user...">
                </div>
            </div>
            <div class="col-2">
                <button class="btn btn-dark" type="button" data-toggle="modal" data-target="#usermodal">
                    Add New User 
                </button>
            </div>
        </div>
        
    </div>

</body>

</html>
