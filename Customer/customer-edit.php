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

    <title>Customer Edit</title>
</head>

<body>

    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Customer Edit
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if (isset($_GET['id'])) {
                            $customer_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM customer WHERE CUS_CODE='$customer_id' ";
                            $query_run = mysqli_query($con, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                $customer = mysqli_fetch_array($query_run);
                        ?>
                        <form action="code.php" method="POST">
                            <input type="hidden" name="CUS_CODE" value="<?= $customer['CUS_CODE']; ?>">
                            <div class="mb-3">
                                <label>CUS_LNAME</label>
                                <input type="text" name="CUS_LNAME" value="<?= $customer['CUS_LNAME']; ?>"
                                    class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>CUS_FNAME</label>
                                <input type="text" name="CUS_FNAME" value="<?= $customer['CUS_FNAME']; ?>"
                                    class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>CUS_AREACODE</label>
                                <input type="text" name="CUS_INITIAL" value="<?= $customer['CUS_INITIAL']; ?>"
                                    class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>CUS_AREACODE</label>
                                <input type="text" name="CUS_AREACODE" value="<?= $customer['CUS_AREACODE']; ?>"
                                    class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>CUS_PHONE</label>
                                <input type="text" name="CUS_PHONE" value="<?= $customer['CUS_PHONE']; ?>"
                                    class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>CUS_INSURE_AMT</label>
                                <input type="text" name="CUS_INSURE_AMT" value="<?= $customer['CUS_INSURE_AMT']; ?>"
                                    class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="update_customer" class="btn btn-primary">
                                    Update Customer
                                </button>
                            </div>

                        </form>
                        <?php
                            } else {
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