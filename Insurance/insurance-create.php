<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>CREATE INSURANCE</title>
</head>

<body>

    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>ADD INSURANCE
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">

                            <div class="mb-3">
                                <label>Mã bảo hiểm</label>
                                <input type="text" name="INSU_CODE" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Tên bảo hiểm</label>
                                <input type="text" name="INSU_NAME" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Thời hạn bảo hiểm</label>
                                <input type="text" name="INSU_DURATION" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Giá trị bảo hiểm</label>
                                <input type="text" name="INSU_VALUE" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Mã loại bảo hiểm</label>
                                <input type="text" name="TYPE_INSU_CODE" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_insurance" class="btn btn-primary">SAVE INSURANCE</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>