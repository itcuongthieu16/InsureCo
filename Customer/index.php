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

    <title>Customer CRUD</title>
</head>

<body>

    <div class="container mt-4">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>.
                            <a href="../index.php" class="btn btn-primary float-end">MENU</a>
                        </h4>
                    </div>
                    <div class="card-header">
                        <h4>Customer Details
                            <a href="customer-create.php" class="btn btn-primary float-end">Add Customers</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>CUS_CODE</th>
                                    <th>CUS_LNAME</th>
                                    <th>CUS_FNAME</th>
                                    <th>CUS_INITIAL</th>
                                    <th>CUS_AREACODE</th>
                                    <th>CUS_PHONE</th>
                                    <th>CUS_INSURE_AMT</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM customer";
                                $query_run = mysqli_query($con, $query);

                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $customer) {
                                ?>
                                <tr>
                                    <td><?= $customer['CUS_CODE']; ?></td>
                                    <td><?= $customer['CUS_LNAME']; ?></td>
                                    <td><?= $customer['CUS_FNAME']; ?></td>
                                    <td><?= $customer['CUS_INITIAL']; ?></td>
                                    <td><?= $customer['CUS_AREACODE']; ?></td>
                                    <td><?= $customer['CUS_PHONE']; ?></td>
                                    <td><?= $customer['CUS_INSURE_AMT']; ?></td>
                                    <td>
                                        <a href="customer-view.php?id=<?= $customer['CUS_CODE']; ?>"
                                            class="btn btn-info btn-sm">View</a>
                                        <a href="customer-edit.php?id=<?= $customer['CUS_CODE']; ?>"
                                            class="btn btn-success btn-sm">Edit</a>
                                        <form action="code.php" method="POST" class="d-inline">
                                            <button type="submit" name="delete_customer"
                                                value="<?= $customer['CUS_CODE']; ?>"
                                                class="btn btn-danger btn-sm">Delete</button>
                                        </form>

                                    </td>
                                </tr>
                                <?php
                                    }
                                } else {
                                    echo "<h5> No Record Found </h5>";
                                }
                                ?>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>