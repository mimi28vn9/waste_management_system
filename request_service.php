<?php
session_start();
error_reporting(0);
include('db_connection.php');

if(isset($_POST['submit'])){ 
    $userId= htmlspecialchars($_POST['user_id']);
    $location = htmlspecialchars($_POST['location']);
    $street = htmlspecialchars($_POST['street']);
    $service = htmlspecialchars($_POST['service']);

    $sql = "INSERT  INTO request( user_id, location, street, service, created_at) VALUES('$userId','$location', '$street', '$service', NOW())";
    $query = mysqli_query($conn, $sql);

    if($query){
        header('location: customer_dashboard.php');
    }
}

if(!isset($_SESSION['user_id'])){
    header("location: login.php");
}

if($_SESSION['user_type'] == 'admin'){
    header('location: login.php');
}

?>
<?php include('templates-2/customer.php'); ?>

    <div class="dashboard-text">
        <h3>Customer Dashboard</h3>
    </div>
    <div class="request-form">
    <div class="box-2">
        <form action="request_service.php" method="POST">
            <h4>Request Service</h4>          
                <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id'] ?>" required>       
            <div class="requestBox">
                <input type="text" name="location" required>
                <span>Location</span>
                <i></i>
            </div>
            <div class="requestBox">
                <input type="text" name="street" required>
                <span>Street</span>
                <i></i>
            </div>
            <div class="requestBox">
                <input type="text" name="service" required>
                <span>Service</span>
                <i></i>
            </div>
            <input type="submit" name="submit" value="Submit" >
        </form>
    </div>   
    </div>
    
</body>    
</html>
