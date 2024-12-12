<<?php include "inclodes/db.php"; 
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link herf="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"rel="stylesheet">

    <title>home</title>
</head>
<body>
<nav class="navbar navbar=collapse" id=navbarNav>
    <div class=container>
        <a href="navbar-bramd href=index.php "  > muvie booking</a>
           <button class=navbar-toggler type=button data-be-traget=#naewbarNav aria-controls=navbarNav aril-label=toggle-navigation >
            <span class="navbar-toggler-icon"></span>
           </button>
           <div class="collapse navbar-collapes" id="navbarNav">
                <ul class=" navbar-nav ms-auto" id='navbarNav'>

                     <li>
                    <a  class="nav-link" href="index.php">Home</a>
                    </li>
                    <?php if(!isset($_SESSION['user_id'])):?>

                        <li  class="nav_link">
                            <a  class="nav_link" href="register.php">registe</a>
                        </li>
                        <li  class="nav_link">
                            <a  class="nav_link" href="login.php">login</a>
                        </li>


                        <?php else:?>

                        <li  class="nav_link">
                            <a  class="nav_link" href="<?php echo $_SESSION["role"] == 'admin' ? 'admin/dashbord.php' : 'user/dashbord.php';?>">dashbord</a>
                        </li>

                        <li  class="nav-item">
                            <a  class="nav_link" href="logout.php">logout</a>
                        </li>

                        <?php endif;
                        ?>
                            
                </ul>
           </div>
    </div> 
</nav>

<div class="container mt-5">
    <h1 class="text-conter">
        welcome to muvi booking system
    </h1>
    <p>this is  movi booking </p>
</div>





<script> src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"</script>

</body>
</html>