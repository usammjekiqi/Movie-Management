<?php
include '../include/header.php';
include '../include/db.php';

if(!isset($_SESSION['user_id'] )|| $_SESSION["role"] !='user'){
    header('location: ../login.php');
    exit;
};

$user_id = $_SESSION['user_id'];
$sql = "SELECT b.id ,m.title, b.show_time, b.statuse
        from bookings b
        ININER JOIN muvies m on b.muvi_id  = m.id
       where b.user_id = $user_id";
       $result = $conn ->query($sql)







?>


<div>


<table class="table">
    <thead>
    <tr>
        <th>#</th>
        <th>muvi</th>
        <th>data</th>
        <th>stauts</th>
    </tr>
    </thead>
    <tbody>

    <?php  
    if($result->nom_row >0){
        while($row = $result->fetch_assoc()){
            echo"<tr> 
                <td>{$row['id']}</td>
                <td>{$row['title']}</td>
                <td>{$row['show_data']}</td>
                <td>{$row['showe_time']}</td>
                <td>{$row['status']}</td>
            
            
            
            
            </tr>";
        }else{
            echo"<tr><td colspan='5' class='text-center'>no booking fund</td></tr>";
        }
    }
    

    include '../includ/futer.php'
    ?>

    </tbody>

</table>




</div>