<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        /* styles */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
        }

        .home {
            background: #333;
            color: #fff;
            text-align: center;
            padding: 100px;
        }

        .home-text {
            max-width: 600px;
            margin: 0 auto;
        }

        .text-1 {
            font-size: 36px;
            font-weight: bold;
        }

        .text-2 {
            font-size: 24px;
            margin-top: 20px;
        }

        .text-3 {
            font-style: italic;
            margin-top: 20px;
        }

        /* Media queries for responsiveness */
        @media screen and (max-width: 768px) {
            .home {
                padding: 50px;
            }

            .home-text {
                max-width: 100%;
            }

            .text-1 {
                font-size: 28px;
            }

            .text-2 {
                font-size: 18px;
            }
        }
    </style>
</head>
<body>

    <?php include('templates/header.php'); ?>

    <div class="home">
        <div class="home-text">
            <div class="text-1">Harrican Environmental Agent</div>
            <div class="text-2">Clearing and Waste Management System</div>
            <div class="text-3"><i>Let Us Make Your Environment Better</i></div>
        </div>
    </div>

    <?php include('templates/footer.php'); ?>

</body>
</html>
