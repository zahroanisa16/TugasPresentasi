<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row-justify-content-center mt-5">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-transparent mb-2"><h5 class="text-center"> Please <span class="font-weight-bold-text-primary"> LOGIN </span></h5></div>
                    <div class="card-body">
                        <form action="proses.php" method="GET">
                            <div class="form-group mb-3">
                                <input type="text" name="username" class="form-control" placeholder="username">
                            </div>
                            <div class="form-group mb-4">
                                <input type="text" name="password" class="form-control" placeholder="password">
                            </div>
                            <div class="form-group custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customcontrolautosizing">
                                <label for="customconrolautosizing" class="custom-control-label">remember me</label>
                            </div>
                            <div class="container mt-3">
                                <a href="posts">
                                    <button type="button" class="btn btn-outline-primary">Login</button>
                                </a>
                            </div>
                        
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>


