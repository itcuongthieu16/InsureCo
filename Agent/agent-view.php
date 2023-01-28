<?php
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

    <title>Agent View</title>
</head>

<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Agent View Details
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

                        <div class="mb-3">
                            <label>AGENT_CODE</label>
                            <p class="form-control">
                                <?=$agent['AGENT_CODE'];?>
                            </p>
                        </div>
                        <div class="mb-3">
                            <label>AGENT_LNAME</label>
                            <p class="form-control">
                                <?=$agent['AGENT_LNAME'];?>
                            </p>
                        </div>

                        <div class="mb-3">
                            <label>AGENT_FNAME</label>
                            <p class="form-control">
                                <?=$agent['AGENT_FNAME'];?>
                            </p>
                        </div>

                        <div class="mb-3">
                            <label>AGENT_INITIAL</label>
                            <p class="form-control">
                                <?=$agent['AGENT_INITIAL'];?>
                            </p>
                        </div>

                        <div class="mb-3">
                            <label>AGENT_AREACODE</label>
                            <p class="form-control">
                                <?=$agent['AGENT_AREACODE'];?>
                            </p>
                        </div>

                        <div class="mb-3">
                            <label>AGENT_PHONE</label>
                            <p class="form-control">
                                <?=$agent['AGENT_PHONE'];?>
                            </p>
                        </div>

                        <div class="mb-3">
                            <label>AGENT_ADDRESS</label>
                            <p class="form-control">
                                <?=$agent['AGENT_ADDRESS'];?>
                            </p>
                        </div>

                        <div class="mb-3">
                            <label>AGENT_CITY</label>
                            <p class="form-control">
                                <?=$agent['AGENT_CITY'];?>
                            </p>
                        </div>

                        <div class="mb-3">
                            <label>AGENT_STATE</label>
                            <p class="form-control">
                                <?=$agent['AGENT_STATE'];?>
                            </p>
                        </div>

                        <div class="mb-3">
                            <label>AGENT_ZIP</label>
                            <p class="form-control">
                                <?=$agent['AGENT_ZIP'];?>
                            </p>
                        </div>

                        <div class="mb-3">
                            <label>AGENT_DATE_HIRED</label>
                            <p class="form-control">
                                <?=$agent['AGENT_DATE_HIRED'];?>
                            </p>
                        </div>

                        <div class="mb-3">
                            <label>AGENT_YTD_PAY</label>
                            <p class="form-control">
                                <?=$agent['AGENT_YTD_PAY'];?>
                            </p>
                        </div>

                        <div class="mb-3">
                            <label>AGENT_YTD_FIT</label>
                            <p class="form-control">
                                <?=$agent['AGENT_YTD_FIT'];?>
                            </p>
                        </div>

                        <div class="mb-3">
                            <label>AGENT_YTD_SLS</label>
                            <p class="form-control">
                                <?=$agent['AGENT_YTD_SLS'];?>
                            </p>
                        </div>

                        <div class="mb-3">
                            <label>AGENT_YTD_FICA</label>
                            <p class="form-control">
                                <?=$agent['AGENT_YTD_FICA'];?>
                            </p>
                        </div>

                        <div class="mb-3">
                            <label>AGENT_DEP</label>
                            <p class="form-control">
                                <?=$agent['AGENT_DEP'];?>
                            </p>
                        </div>

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