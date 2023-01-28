<?php
session_start();
require 'dbcon.php';
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Insurance Edit</title>
</head>

<body>

    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Insurance Edit
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $insurance_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM insurance WHERE INSU_CODE='$insurance_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $insurance = mysqli_fetch_array($query_run);
                                ?>
                        <form action="code.php" method="POST">
                            <input type="hidden" name="INSU_CODE" value="<?= $insurance['INSU_CODE']; ?>">

                            <div class="mb-3">
                                <label>INSU_NAME</label>
                                <input type="text" name="INSU_NAME" value="<?=$insurance['INSU_NAME'];?>"
                                    class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>INSU_DURATION</label>
                                <input type="text" name="INSU_DURATION" value="<?=$insurance['INSU_DURATION'];?>"
                                    class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>INSU_VALUE</label>
                                <input type="text" name="INSU_VALUE" value="<?=$insurance['INSU_VALUE'];?>"
                                    class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>TYPE_INSU_CODE</label>
                                <input type="text" name="TYPE_INSU_CODE" value="<?=$insurance['TYPE_INSU_CODE'];?>"
                                    class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="update_insurance" class="btn btn-primary">
                                    Update Insurance
                                </button>
                            </div>

                        </form>
                        <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>