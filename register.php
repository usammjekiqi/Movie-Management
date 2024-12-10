<?php include "inclodes/db.php"; ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>register</title>

    <link  href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>



<div class = "container mt-5 ">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h2 class="text-center">register</h2> 


                        <form method="POST">
                        <div class="mb-3">
                                <label for="naem" class="form-lable">name</label>
                                <input type="mame" name="name " id="name" class="form-control" require>

                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-lable">Email</label>
                                <input type="email" name="email" id="email" class="form-control" require>

                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-lable">Password</label>
                                <input type="password" name="password" id="password" class="form-control" require>

                            </div>

                            <button type="submit" class="btn btn-primary wh-150">login</button>
                             

                        </form>

                    </div>

                </div> 

            </div>

        </div>

    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>