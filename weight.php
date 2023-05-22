<?php
@include "config.php";

session_start();

if (!isset($_SESSION['user_id'])) {
    header('location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/styles-weights.css">

    <title>Gainz Tracker</title>
</head>

<body>
    <nav class="navbar">
        <img class="logo-gainz" src="./images/logo-gainz2.png">
        <h4><span><?php echo $_SESSION['user_name'] ?></span></h4>
        <ul>
            <li><a href="main_page.php">Home</a></li>
            <li><a href="table.php">Workout Tracker</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>

    <div class="container">
        <?php
        if (isset($_GET["msg"])) {
            $msg = $_GET["msg"];
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
        }
        ?>

        <main class="table">
            <section class="table_header">
                <h1>Weight Goal</h1>
            </section>
            <section class="table_body">
                <table>
                    <thead>
                        <tr>
                            <th scope="col">Weight Goal(lbs)</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $user_id = $_SESSION['user_id'];
                        $sql = "SELECT * FROM `user_goals` WHERE weight_id = $user_id LIMIT 1";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr>
                                <td><?php echo $row["weight_goal"] ?>lbs</td>
                                <td>
                                    <a href="weight_goal_edit.php?id=<?php echo $row["id"] ?>" class="link-edit"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </section>

            <section class="table_header">
                <h1>Weight Current</h1>
            </section>
            <a href="weight-add.php" class="btn btn-dark mb-3">Add Weight Goal</a>
            <section class="table_body">
                <table>
                    <thead>
                        <tr>
                            <th scope="col">Weight Current(lbs)</th>
                            <th scope="col">Date</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $user_id = $_SESSION['user_id'];
                        $sql = "SELECT * FROM `user_goals` WHERE weight_id = $user_id";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr>
                                <td><?php echo $row["current_weight"] ?>lbs</td>
                                <td><?php echo $row["date-added"] ?></td>
                                <td>
                                    <a href="weight-edit.php?id=<?php echo $row["id"] ?>" class="link-edit"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                                    <a href="weight-delete.php?id=<?php echo $row["id"] ?>" class="link-trash"><i class="fa-solid fa-trash fs-5"></i></a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </section>
        </main>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>