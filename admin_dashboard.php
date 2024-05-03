<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="project 01_/style_2.css">
    <!-- Include the viewport meta tag for responsiveness -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php include('templates-2/admin.php'); ?>

<div class="dashboard-head">
    <h3>Admin Dashboard</h3>
</div>

<div class="cards">
    <div class="container cards-container">
        <!-- Add responsive styles for the box elements -->
        <div class="box">
            <img src="images/photo1.jpg" alt="">
            <h2>Recycling Centers <span><?php echo $centers_count ?></span></h2>
        </div>
        <div class="box">
            <img src="images/photo2.jpg" alt="">
            <h2>Members <span><?php echo $users_count ?></span></h2>
        </div>
        <div class="box">
            <img src="images/photo3.jpg" alt="">
            <h2>Request <span><?php echo $request_count ?></span></h2>
        </div>
    </div>
</div>

<div class="content">
    <main>
        <div class="table-data">
            <div class="request">
                <div class="head">
                    <h3>Request</h3>
                    <i class="bx bx-search" id="search-icon"></i>
                    <div class="search-box">
                        <form action="#" method="POST">
                            <input type="search" name="search" placeholder="Search request">
                        </form>
                    </div>
                </div>
                <?php
                if ($resultsFound) {
                ?>
                <table>
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Phone Number</th>
                            <th>Location</th>
                            <th>Street</th>
                            <th>Service</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $count = 1;
                        while ($info = mysqli_fetch_assoc($query)) {
                        ?>
                            <tr>
                                <td scope="row"><?php echo $count++ ?></td>
                                <td><?php echo "{$info['first_name']}" ?></td>
                                <td><?php echo "{$info['last_name']}" ?></td>
                                <td><?php echo "{$info['phone_number']}" ?></td>
                                <td><?php echo "{$info['location']}" ?></td>
                                <td><?php echo "{$info['street']}" ?></td>
                                <td><?php echo "{$info['service']}" ?></td>
                                <td><?php echo "{$info['created_at']}" ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
                <?php
                } else {
                    echo "No search request";
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
