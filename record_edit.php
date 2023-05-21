<?php
@include "config.php";
$id = $_GET["id"];

if (isset($_POST["submit"])) {
    $personal_workout = $_POST['personal_workout'];
    $personal_weight = $_POST['personal_weight'];

    $sql = "UPDATE `personal_records` SET `personal_workout`='$personal_workout',`personal_weight`='$personal_weight' WHERE id = $id";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: table.php?msg=Data updated successfully");
    } else {
        echo "Failed: " . mysqli_error($conn);
    }
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
    <link rel="stylesheet" href="./css/style-personal.css">

    <title>Gainz Tracker</title>
</head>

<body>

    <div class="container">
        <div class="text-center mb-4">
            <h3>Edit Record Information</h3>
            <p>Click update after changing any information</p>
        </div>

        <?php
        $sql = "SELECT * FROM `personal_records` WHERE id = $id LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        ?>

        <div class="container-main d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px;">
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Specific Workout:</label>
                        <input type="text" class="form-control" name="personal_workout" value="<?php echo $row['personal_workout'] ?>" required>
                    </div>

                    <div class="col">
                        <label class="form-label">Weight Lifted(lbs):</label>
                        <input type="number" class="form-control" name="personal_weight" value="<?php echo $row['personal_weight'] ?>" required>
                    </div>

                </div>

                <div>
                    <button type="submit" class="btn btn-success" name="submit">Save</button>
                    <a href="table.php" class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>