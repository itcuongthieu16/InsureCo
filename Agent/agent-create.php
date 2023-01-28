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

    <title>Agent Create</title>
</head>

<body>

    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Agent Add
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">

                            <div class="mb-3">
                                <label>Mã nhân viên</label>
                                <input type="text" name="AGENT_CODE" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Tên họ nhân viên</label>
                                <input type="text" name="AGENT_LNAME" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Tên nhân viên</label>
                                <input type="text" name="AGENT_FNAME" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Chữ cái đầu trong tên của nhân viên</label>
                                <input type="text" name="AGENT_INITIAL" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Mã vùng nhân viên</label>
                                <input type="text" name="AGENT_AREACODE" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Số điện thoại</label>
                                <input type="text" name="AGENT_PHONE" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Địa chỉ nhân viên</label>
                                <input type="text" name="AGENT_ADDRESS" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Tên thành phố</label>
                                <input type="text" name="AGENT_CITY" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Tên tiểu bang</label>
                                <input type="text" name="AGENT_STATE" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Mã Zip</label>
                                <input type="text" name="AGENT_ZIP" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Ngày thuê</label>
                                <input type="text" name="AGENT_DATE_HIRED" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Số tiền thanh toán hàng năm</label>
                                <input type="text" name="AGENT_YTD_PAY" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Số tiền thu thuế liên bang từ đầu năm đến nay</label>
                                <input type="text" name="AGENT_YTD_FIT" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Số tiền bán từ đầu năm đến nay</label>
                                <input type="text" name="AGENT_YTD_SLS" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Số tiền nộp thuế an sinh xã hội từ đầu năm đến nay</label>
                                <input type="text" name="AGENT_YTD_FICA" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Thời hạn bảo hiểm</label>
                                <input type="text" name="AGENT_DEP" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_agent" class="btn btn-primary">SAVE AGENT</button>
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