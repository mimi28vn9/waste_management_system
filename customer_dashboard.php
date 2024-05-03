<!DOCTYPE html>
<html lang="en">
<head>
    <title>Customer Dashboard</title>
    <link rel="stylesheet" href="project 01_/style_2.css">
    <!-- Include the viewport meta tag for responsiveness -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php include('templates-2/customer.php'); ?>

<div class="dashboard-head">
    <h3>Customer Dashboard</h3>
</div>

<section class="cards">
    <div class="cards-container container">
        <!-- Add responsive styles for the box elements -->
        <div class="box">
            <img src="images/photo4.jpg" alt="">
            <h2>Solid Waste</h2>
        </div>
        <div class="box">
            <img src="images/photo5.jpg" alt="">
            <h2>Liquid Waste</h2>
        </div>
        <div class="box">
            <img src="images/photo6.jpeg" alt="">
            <h2>Other Services</h2>
        </div>
    </div>
</section>

<div class="content">
    <main>
        <div class="table-data">
            <div class="request">
                <div class="head">
                    <h3>History</h3>
                </div>
                <?php
                if (mysqli_num_rows($query) > 0) {
                ?>
                <table>
                    <thead>
                        <tr>
                            <th>S/N</th>
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
                    echo "No history available";
                }
                ?>
            </div>
        </div>
    </main>
</div>

</body>
</html>
