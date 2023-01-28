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

    <title>Type Insurance Edit</title>
</head>

<body>

    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Type Insurance Edit
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $type_insu_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM type_insurance WHERE TYPE_INSU_CODE='$type_insu_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $type_insurance = mysqli_fetch_array($query_run);
                                ?>
                        <form action="code.php" method="POST">
                            <input type="hidden" name="TYPE_INSU_CODE" value="<?= $type_insurance['TYPE_INSU_CODE']; ?>">

                            <div class="mb-3">
                                <label>TYPE_INSU_NAME</label>
                                <input type="text" name="TYPE_INSU_NAME" value="<?=$type_insurance['TYPE_INSU_NAME'];?>"
                                    class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="update_type_insurance" class="btn btn-primary">
                                    Update Type Insurance
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