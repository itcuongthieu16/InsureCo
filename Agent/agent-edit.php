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

    <title>Agent Edit</title>
</head>

<body>

    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Agent Edit
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $agent_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM agent WHERE AGENT_CODE='$agent_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $agent = mysqli_fetch_array($query_run);
                                ?>
                        <form action="code.php" method="POST">
                            <input type="hidden" name="AGENT_CODE" value="<?= $agent['AGENT_CODE']; ?>">

                            <div class="mb-3">
                                <label>AGENT_LNAME</label>
                                <input type="text" name="AGENT_LNAME" value="<?=$agent['AGENT_LNAME'];?>"
                                    class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>AGENT_FNAME</label>
                                <input type="text" name="AGENT_FNAME" value="<?=$agent['AGENT_FNAME'];?>"
                                    class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>AGENT_INITIAL</label>
                                <input type="text" name="AGENT_INITIAL" value="<?=$agent['AGENT_INITIAL'];?>"
                                    class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>AGENT_AREACODE</label>
                                <input type="text" name="AGENT_AREACODE" value="<?=$agent['AGENT_AREACODE'];?>"
                                    class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>AGENT_PHONE</label>
                                <input type="text" name="AGENT_PHONE" value="<?=$agent['AGENT_PHONE'];?>"
                                    class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>AGENT_ADDRESS</label>
                                <input type="text" name="AGENT_ADDRESS" value="<?=$agent['AGENT_ADDRESS'];?>"
                                    class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>AGENT_CITY</label>
                                <input type="text" name="AGENT_CITY" value="<?=$agent['AGENT_CITY'];?>"
                                    class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>AGENT_STATE</label>
                                <input type="text" name="AGENT_STATE" value="<?=$agent['AGENT_STATE'];?>"
                                    class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>AGENT_ZIP</label>
                                <input type="text" name="AGENT_ZIP" value="<?=$agent['AGENT_ZIP'];?>"
                                    class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>AGENT_DATE_HIRED</label>
                                <input type="text" name="AGENT_DATE_HIRED" value="<?=$agent['AGENT_DATE_HIRED'];?>"
                                    class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>AGENT_YTD_PAY</label>
                                <input type="text" name="AGENT_YTD_PAY" value="<?=$agent['AGENT_YTD_PAY'];?>"
                                    class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>AGENT_YTD_FIT</label>
                                <input type="text" name="AGENT_YTD_FIT" value="<?=$agent['AGENT_YTD_FIT'];?>"
                                    class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>AGENT_YTD_SLS</label>
                                <input type="text" name="AGENT_YTD_SLS" value="<?=$agent['AGENT_YTD_SLS'];?>"
                                    class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>AGENT_YTD_FICA</label>
                                <input type="text" name="AGENT_YTD_FICA" value="<?=$agent['AGENT_YTD_FICA'];?>"
                                    class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>AGENT_DEP</label>
                                <input type="text" name="AGENT_DEP" value="<?=$agent['AGENT_DEP'];?>"
                                    class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="update_agent" class="btn btn-primary">
                                    Update Agent
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