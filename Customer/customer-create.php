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

    <title>Customer Create</title>
</head>

<body>

    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Customer Add
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">

                            <div class="mb-3">
                                <label>Mã khách hàng</label>
                                <input type="text" name="CUS_CODE" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Tên họ khách hàng</label>
                                <input type="text" name="CUS_LNAME" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Tên đệm khách hàng</label>
                                <input type="text" name="CUS_FNAME" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Chữ cái đầu trong tên của khách hàng</label>
                                <input type="text" name="CUS_INITIAL" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Mã vùng khách hàng</label>
                                <input type="text" name="CUS_AREACODE" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Số điện thoại</label>
                                <input type="text" name="CUS_PHONE" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Số tiền hợp đồng bảo hiểm</label>
                                <input type="text" name="CUS_INSURE_AMT" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_customer" class="btn btn-primary">SAVE
                                    CUSTOMER</button>
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