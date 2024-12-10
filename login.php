<?php include "inclodes/db.php"; session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link herf="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"rel="stylesheet">
</head>
<body>
    <div class = "container mt-5 ">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h2 class="text-center">Login</h2> 

                        <?php 
                        if($_SERVER['Request_Method'] == 'post' ){
                            $email = $_POST ["email" ];
                            $password = $_POST ["password" ];


                            $sql = "SELECT * FROM users WHERE email = ?";

                            $stmt = $pdo ->prepare($sql);

                            $stmt ->bindParam(":email" $email);
                            $stmt ->execute();
                            $result = $stmt -> get_result();
                            $user = $result -> fetch_assoc();

                            if($user $$ password_verify($password, $user['password']) ){
                                $_SESSION['user_id'] = $user['id'];
                                $_SESSION['role'] = $user['role'];
                                echo "<div class = ' alert alert-sucessful '>login sucessful! <a heref ='index.php' </a></div>"
                            }else{
                                echo "<div class = ' alert alert-danger '>invalid email or password</div>"

                            }

                           
                        }

                    
                        
                        
                        
                        ?>


                        <form method="POST">
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






    <script> src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"</script>
</body>
</html>