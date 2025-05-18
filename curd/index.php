<?php
require_once '../partials/connect.php';
$dbobj=new database();
var_dump($dbobj);
?>

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
        <!-- Form modal -->
        <!-- Button trigger modal -->

        <!-- Modal -->
        <div class="modal fade" id="usermodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Add or update users</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span>&times;</span></button>
                    </div>

                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            <!-- You can add your form inputs here -->
                            <div class="from-group">
                                <label>Name:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-dark">
                                            <i class="fas fa-user-alt bg-dark text-light"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Enter user name" autocomplete="off" required="required" id="username">
                                </div>

                                <label>Email:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-dark">
                                            <i class="fas fa-envelope bg-dark text-light"></i>
                                        </span>
                                    </div>
                                    <input type="email" class="form-control" placeholder="Enter Email" autocomplete="off" required="required" id="username">
                                </div>

                                <label>Phone:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-dark">
                                            <i class="fas fa-user-alt bg-dark text-light"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Enter mobile no" autocomplete="off" required="required" id="phone" maxlength="10" minlength="10">
                                </div>

                                <div class="mb-3">
                                    <label for="userphoto" class="form-label">Photo:</label>
                                    <input class="form-control" type="file" id="userphoto" name="photo">
                                </div>

                            </div>

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-dark">Submit</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="row my-2">
            <div class="col-md-10">
                <div class="input-group">
                    <span class="input-group-text bg-dark text-light">
                        <i class="fas fa-search"></i>
                    </span>
                    <input type="text" class="form-control" placeholder="Search user...">
                </div>
            </div>
            <!-- Button to trigger modal -->
            <div class="col-2">
                <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#usermodal">
                    Add New User
                </button>
            </div>
        </div>
<!-- table -->
 <table class="table" id="usertable">
    <thead class="table-dark">
        <tr>        
            <th scope="col">IMage</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Operations</th>
        </tr>
    </thead>

    <tbody>
        <th scope="row">Piecture1</th>
        <td>raj</td>
        <td>Raj@gmail.com</td>
        <td>4512369874</td>
        <td>
            <span>Edit</span>
            <span>Profile</span>
            <span>Delete</span>
        </td>
    </tbody>
 </table>

 <!-- Pagination -->

 <nav aria-label="page navigation example" id="pagination">
    <ul class="pagination justify-content-center">
        <li class="page-item disabled"><a href="" class="page-link">previous</a></li>
        <li class="page-item active"><a href="" class="page-link">1</a></li>
        <li class="page-item"><a href="" class="page-link">2</a></li>
        <li class="page-item"><a href="" class="page-link">3</a></li>
        <li class="page-item"><a href="" class="page-link">Next</a></li>
        
    </ul>
 </nav>
    </div>

</body>

</html>