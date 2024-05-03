<?php
session_start();
include('db_connection.php');

if(isset($_POST['submit'])){
    $userId = $_GET['user_id']; 
    $firstName = htmlspecialchars($_POST['firstName']); 
    $lastName = htmlspecialchars($_POST['lastName']);
    $phoneNumber = htmlspecialchars($_POST['phoneNumber']);

    $sql ="UPDATE users SET first_name='$firstName', last_name='$lastName', phone_number='$phoneNumber' WHERE user_id='$userId'";

    $query = mysqli_query($conn, $sql);

    if($query){
        header('location: members.php');
    }

}

if(!isset($_SESSION['user_id'])){
    header("location:login.php");
}

if($_SESSION['user_type'] == 'customer'){
    header('location: login.php');
}

?>
<?php include('templates-2/admin.php'); ?>

    <div class="dashboard-head">
        <h3>Admin Dashboard</h3>
    </div>
    <div class="content">
            <div class = "update-form"> 
                <div class="container-2">
                <h3 class="form-title">Update User Profile</h3>
                <form action="#" method="POST">
                    <?php 
                    $selectUser = "SELECT * FROM users WHERE user_id='".$_GET['user_id']."'";
                    $result = mysqli_query($conn, $selectUser);

                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){  ?>
                        <div class="main-user-info">
                            <div class="user-input-box">
                                <label>First Name</label>
                                <input type="text" name="firstName" value="<?php echo $row['first_name']; ?>">
                            </div>
                            <div class="user-input-box">
                                <label>Last Name</label>
                                <input type="text" name="lastName" value="<?php echo $row['last_name']; ?>">
                            </div>
                            <div class="user-input-box">
                                <label>Phone Number</label>
                                <input type="text" name="phoneNumber" value="<?php echo $row['phone_number']; ?>">
                            </div>
                        </div>
                        <?php  
                        }
                    }
                    ?>
                        <div class="form-submit-btn">
                            <input type="submit" name="submit" value="Save">
                        </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>

    
        

    

