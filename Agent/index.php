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

    <title>AGENT CRUD</title>
</head>

<body>

    <div class="">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="">
                <div class="">
                    <div class="card-header">

                        <h4>
                            .
                            <a href="../index.php" class="btn btn-primary float-end">MENU</a>
                        </h4>
                    </div>
                    <div class="card-header">
                        <h4>AGENT DETAILS
                            <a href="agent-create.php" class="btn btn-primary float-end">ADD AGENT</a>
                        </h4>
                    </div>
                    <div class="">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>AGENT_CODE</th>
                                    <th>AGENT_LNAME</th>
                                    <th>AGENT_FNAME</th>
                                    <th>AGENT_INITIAL</th>
                                    <th>AGENT_AREACODE</th>
                                    <th>AGENT_PHONE</th>
                                    <th>AGENT_ADDRESS</th>
                                    <th>AGENT_CITY</th>
                                    <th>AGENT_STATE</th>
                                    <th>AGENT_ZIP</th>
                                    <th>AGENT_DATE_HIRED</th>
                                    <th>AGENT_YTD_PAY</th>
                                    <th>AGENT_YTD_FIT</th>
                                    <th>AGENT_YTD_SLS</th>
                                    <th>AGENT_YTD_FICA</th>
                                    <th>AGENT_DEP</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM agent";
                                $query_run = mysqli_query($con, $query);

                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $agent) {
                                ?>
                                <tr>
                                    <td><?= $agent['AGENT_CODE']; ?></td>
                                    <td><?= $agent['AGENT_LNAME']; ?></td>
                                    <td><?= $agent['AGENT_FNAME']; ?></td>
                                    <td><?= $agent['AGENT_INITIAL']; ?></td>
                                    <td><?= $agent['AGENT_AREACODE']; ?></td>
                                    <td><?= $agent['AGENT_PHONE']; ?></td>
                                    <td><?= $agent['AGENT_ADDRESS']; ?></td>
                                    <td><?= $agent['AGENT_CITY']; ?></td>
                                    <td><?= $agent['AGENT_STATE']; ?></td>
                                    <td><?= $agent['AGENT_ZIP']; ?></td>
                                    <td><?= $agent['AGENT_DATE_HIRED']; ?></td>
                                    <td><?= $agent['AGENT_YTD_PAY']; ?></td>
                                    <td><?= $agent['AGENT_YTD_FIT']; ?></td>
                                    <td><?= $agent['AGENT_YTD_SLS']; ?></td>
                                    <td><?= $agent['AGENT_YTD_FICA']; ?></td>
                                    <td><?= $agent['AGENT_DEP']; ?></td>


                                    <td>
                                        <a href="agent-view.php?id=<?= $agent['AGENT_CODE']; ?>"
                                            class="btn btn-info btn-sm">View</a>
                                        <a href="agent-edit.php?id=<?= $agent['AGENT_CODE']; ?>"
                                            class="btn btn-success btn-sm">Edit</a>
                                        <form action="code.php" method="POST" class="d-inline">
                                            <button type="submit" name="delete_agent"
                                                value="<?= $agent['AGENT_CODE']; ?>"
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