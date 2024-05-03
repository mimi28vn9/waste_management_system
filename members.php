<?php
session_start();
include('db_connection.php');

if(isset($_POST['search'])){
    $fName= mysqli_real_escape_string($conn, $_POST['search']);
}

// Variable to track whether any results were found
$resultsFound = false;

if(!empty($fName)){
    $sql = "SELECT * FROM users WHERE user_type = 'customer' AND first_name = '$fName'";
    $query = mysqli_query($conn, $sql);

}else{
    $sql = "SELECT user_id, first_name, last_name, phone_number FROM users WHERE user_type = 'customer'";
    $query = mysqli_query($conn, $sql);
}

// Check if any results were found
if(mysqli_num_rows($query) > 0) {
    $resultsFound = true;
}

if(!isset($_SESSION['user_id'])){
    header("location: login.php");
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
        <main>
            <div class="table-data">
                <div class="request">
                    <div class="head">
                        <h3>Members</h3>
                        <i class="bx bx-search" id="search-icon"></i>
                        <div class="search-box">
                        <form action="#" method="POST">
                            <input type="search" id="search" name="search" placeholder="Search member">
                        </form>
                        </div>
                    </div>
                    <?php
                    if ($resultsFound) {
                    ?>
                    <table>
                    <table>
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Phone Number</th>
                                <th>Action</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                          $count=1;
                                  while($info=mysqli_fetch_assoc($query))
                                  {
                        ?>
                            <tr>
                                <td scope="row"><?php echo $count++ ?></td>
                                <td><?php echo "{$info['first_name']}" ?></td>
                                <td><?php echo "{$info['last_name']}" ?></td>
                                <td><?php echo "{$info['phone_number']}" ?></td>
                                <td><?php echo "<a onclick = \"javascript:return confirm('Are you sure you want to delete');\" class='btn' href='delete_member.php?user_id={$info['user_id']}'>Delete</a>"; ?></td> 
                                <td><?php echo "<a class='btn-2' href='update_user.php?user_id={$info['user_id']}'>Update</a>"; ?></td>   
                            </tr>
                        <?php
                            }
                        ?>
                        </tbody>
                    </table>
                    <?php
                    } else {
                    echo "Member not found";
                   }
                  ?>
                </div>
            </div>
        </main>
    </div>
    <script>
        let search = document.querySelector('.search-box');

        document.querySelector('#search-icon').onclick = () => {
        search.classList.toggle('active');
    }
    </script>
         
</body>    
</html>