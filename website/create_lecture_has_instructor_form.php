<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">



    <title>jlecture</title>

    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap CSS for table -->
    <link href="/css/dataTables.bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->



</head>

<body>

    <?php include $_SERVER['DOCUMENT_ROOT'].'/inc/navbar.php'; ?>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/cfg/main.cfg'; ?>

    <!-- Content Section -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">


                    <h1>Assign lecture to instructor!</h1>

                    <form id="create_instructor" action="/forms/create_lecture_has_instructor_callback.php" method="POST">
                        <div class="form-group">
                            <label for="instructor">Select the instructor</label>
                            <select class="form-control" id="instructor" name="instructor">


                                <?php

                                $link = mysqli_connect($db_host, $db_username, $db_password, $db_name);

                                if (!$link) {
                                    die("MySQL-Connection error (#" . mysqli_connect_errno() . "): " . mysqli_connect_error());
                                } else {
                                // echo "MySQL-Connection established: " . mysqli_get_host_info($link)."\n";


                                    mysqli_set_charset($link, "utf8");

                                    $query = "SELECT * FROM `instructor`";
                                    if ($result = $link->query($query)) {
                                        while ($row = $result->fetch_row()) {

                                            $query2 = "SELECT * FROM `person` WHERE `pid`='{$row[1]}'";
                                            if ($result2 = $link->query($query2)){
                                                $row2 = $result2->fetch_row();
                                                printf("<option value=\"".$row[0]."\">%s ", $row2[1]);
                                            }

                                            printf("(%s)</option>\n", $row[0]);
                                        }
                                        /* free result set */
                                        $result->close();
                                    }
                                }
                                mysqli_close($link);
                                ?>



                            </select>
                        </div>
                        <div class="form-group">
                            <label for="lecture">Select the lecture</label>
                            <select class="form-control" id="lecture" name="lecture">


                                <?php

                                $link = mysqli_connect($db_host, $db_username, $db_password, $db_name);

                                if (!$link) {
                                    die("MySQL-Connection error (#" . mysqli_connect_errno() . "): " . mysqli_connect_error());
                                } else {
                                // echo "MySQL-Connection established: " . mysqli_get_host_info($link)."\n";


                                    mysqli_set_charset($link, "utf8");

                                    $query = "SELECT * FROM `lecture`";
                                    if ($result = $link->query($query)) {
                                        while ($row = $result->fetch_row()) {
                                            printf("<option value=\"".$row[0]."\">%s (%s)</option>\n", $row[1],$row[0]);
                                        }
                                        /* free result set */
                                        $result->close();
                                    }
                                }
                                mysqli_close($link);
                                ?>

                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>


                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>



    <!-- Fixed Height Image Aside -->
    <!-- Image backgrounds are set within the full-width-pics.css file. -->


    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; jlecture 2016</p>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </footer>

    <!-- jQuery -->
    <script src="/js/jquery.js"></script>
    <script>
    $(document).ready(function() {
    $('#example').DataTable();} );
    </script>
    <!-- Bootstrap Core JavaScript -->
    <script src="/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
</body>
</html>
