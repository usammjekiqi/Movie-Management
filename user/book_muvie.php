<?php
include '../includ/db.php'
include '../includ/heder.php'

session_start();

//enssure thet users is logged in


if(!isset($_SESSION['user_id'] )|| $_SESSION["role"] !='user'){
    header('location: ../login.php');
    exit;
};

//get the muvi id  from the queri string

if (!isset($_GET['muvi_id'])) {
    echo "<div class='continaer'><p>inavalid</p></div>";
    include '../includone/footer.phh';
    exit;
}


$muvi = $result -> fetch_assoc();

if ($_SERVER['request_method'] == 'POST') {
    $user_id = $_SESSION['user_id'];
    $show_date = $_POST['show_date'];
    $show_time = $_POST['show_time'];


    $sql = "INSERT INTO bokking (users_id, muvi_id, show_date, show_time, status)
    VALUE ($user_id, $muvi_id, '$show_date', '$show_time', 'pending') ";


   if($conn->query($sql) == TRUE){
        echo"<div class='contenier'><p class='aler alert_success'> booking sucsseful ! is pending<?p></div>";
   }else{
    echo " <div class='continer'><p class= 'alert alert-danger'>error:".$conn->error."</p></div>";
   }
    

}

?>

<div class='container'>

    <h1 class="text-center">book muvi</h1>

    <div class="card">
        <h3><?php echo $muvie ['title']?></h3>
        <p><?php echo $muvie ['description']?></p>
        <p><strong>gener:</strong> <?php echo $muvie ['gener']?></p>
        <p><strong>Language:</strong> <?php echo $muvie ['Language']?></p>
        <p><strong>duration:</strong> <?php echo $muvie ['duration']?></p>

    </div>
     
</div>


<form method="POST" class="mt-4">
    <div class="mb-3">
        <label for="show_data" class="forme-label">showe data </label>
        <input type="data" name="show_date" id="show_date" class="foem_control" required>

    </div>

    <div class="mb-3">
        <label for="show_time" class="forme-label">showe time </label>
        <input type="time" name="show_time" id="show_time" class="foem_control" required>
        <button type="submit" class="btn btn-primary">confirm booking</button>
    </div>




</form>


<?php
include '../includes/footer.php';
?>