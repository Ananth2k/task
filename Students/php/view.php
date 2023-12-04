<?php
include "db_conn.php";



?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">

</head>
<body>

    <div class="wrapper view">

        <?php

        $id = $_GET['id'];

        $sql = "SELECT * FROM list WHERE id='$id'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) :
            $row = $result->fetch_assoc();
            ?>
            <?php
        else:
            echo "ID not found";
        endif;


        $conn->close();
        ?>


        <?php include "nav.php";?>
        <div class="container">
            <h1  style="color: #00751b;">View Student Data</h1>
        </div>
        <div class="container">

            <div class="card card-success">
                <div class="card-header">
                    <h2 class="card-title">Student Details</h2>


                </div>
                <div class="card-body">

                    <div class="container">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <label  class="form-label">Name</label>
                                <input class="form-control" value="<?= $row['NAME'] ?>" readonly>
                            </div>

                            <div class="col-6 mb-3">
                                <label  class="form-label">Date Of Birth</label>
                                <input class="form-control" value="<?= $row['DOB'] ?>" readonly>
                            </div>
                            <div class="col-6 mb-3">
                                <label  class="form-label">Age</label>
                                <input class="form-control" value="<?= $row['AGE'] ?>" readonly>
                            </div>
                            <div class="col-12 mb-3">
                                <h3  style="color: #28a745;">Obtained Marks</h3>
                            </div>
                            <div class="col-4 mb-3">
                                <label  class="form-label">English</label>
                                <input class="form-control" value="<?= $row['ENGLISH'] ?>" readonly>
                            </div>
                            <div class="col-4 mb-3">
                                <label  class="form-label">Science</label>
                                <input class="form-control" value="<?= $row['SCIENCE'] ?>" readonly>
                            </div>
                            <div class="col-4 mb-3">
                                <label  class="form-label">Maths</label>
                                <input class="form-control" value="<?= $row['MATHS'] ?>" readonly>
                            </div>
                            <div class="col-6 mb-3">
                                <label  class="form-label">Total Mark</label>
                                <input class="form-control" value="<?= $row['TOTAL'] ?>" readonly>
                            </div>
                            <div class="col-6 mb-3">
                                <label  class="form-label">Average Mark</label>
                                <input class="form-control" value="<?= $row['AVERAGE'] ?>" readonly>
                            </div>


                        </div>

                    </div>



                </div>
                <div class="card-footer">


                    <a href="index.php"><button  class="btn btn-success">Back</button></a>

                </div>

            </div>


        </div>


        <?php include "footer.php";?>