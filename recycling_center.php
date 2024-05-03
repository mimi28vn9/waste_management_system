<?php
session_start();
include('db_connection.php');

if(isset($_POST['submit'])){
    $center = htmlspecialchars($_POST['center']);
    $location = htmlspecialchars($_POST['location']);

    $sql = "INSERT  INTO centers(center, location) VALUES('$center', '$location')";
    $query = mysqli_query($conn, $sql);
}

$sql = "SELECT * FROM centers";
$query = mysqli_query($conn, $sql);

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
                        <h3>Recycling Centers</h3>
                        <div class="center">
                            <button id="show-login" class="bx bx-plus"></button>
                        </div>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Center Name</th>
                                <th>Location</th>
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
                                <td><?php echo "{$info['center']}" ?></td>
                                <td><?php echo "{$info['location']}" ?></td>
                                <td><?php echo "<a onclick = \"javascript:return confirm('Are you sure you want to delete');\" class='btn' href='delete_center.php?id={$info['id']}'>Delete</a>"; ?></td> 
                            </tr>
                        <?php
                            }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
    <div class="popup">
        <div class="close-btn">&times;</div>
        <form action="#" method="POST">
            <h2>Add Center</h2>
            <div class="form-element">
                <label for="name">Center Name</label>
                <input type="text" name="center" required>
            </div>
            <div class="form-element">
                <label for="location">Location</label>
                <input type="text" name="location" required>
            </div>
            <div class="form-element">
               <button name="submit">Submit</button>
            </div>
        </form>
    </div>
    <script>
        document.querySelector("#show-login").addEventListener("click",function(){
            document.querySelector(".popup").classList.add("active");
        });

        document.querySelector(".popup .close-btn").addEventListener("click",function(){
            document.querySelector(".popup").classList.remove("active");
        });
    </script>
         
</body>    
</html>