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



        <!-- Content Section -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="section-heading">Instructors</h1>
                        <p class="lead section-lead">Pick your Instructor</p>
                        <p class="section-paragraph">cool information comes here later.</p>
                        <table id="example" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Instructor ID</th>
                                    <th>Instructor Name</th>
                                    <th>Instructor Birthday</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Instructor ID</th>
                                    <th>Instructor Name</th>
                                    <th>Instructor Birthday</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php
                                include $_SERVER['DOCUMENT_ROOT'].'/cfg/main.cfg';

                                // Create connection
                                $conn = new mysqli($db_host, $db_username, $db_password, $db_name);
                                if (!$conn) {
                                    die("MySQL-Connection error (#" . mysqli_connect_errno() . "): " . mysqli_connect_error());
                                }
                                // query for retrieving data from the server
                                $sql = "SELECT instructor.iid AS 'id', person.name AS 'name', person.birthdate AS 'birthdate'
                                FROM (instructor
                                INNER JOIN person ON (instructor.person_pid = person.pid))";
                                // send the query throguh the connection and store the result
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                     // output data of each row
                                   while($row = $result->fetch_assoc()) {
                                       echo "<tr class=\"table-row\" data-href='/content/view_instructor.php?id=".$row["ID"]."'>"
                                       ."<td>".$row["id"]."</td>"
                                       ."<td>".$row["name"]."</td>"
                                       ."<td>".$row["birthdate"]."</td>"
                                       ."</tr>";
                                   }
                               } else {
                                   echo "0 results";
                               }

                               $conn->close();
                               ?>
                           </tbody>
                       </table>
                   </div>
               </div>
           </div>
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
    <script type="text/javascript">
        $(document).ready(function($) {
            $(".table-row").click(function() {
                window.document.location = $(this).data("href");
            });
        });
    </script>
        <!-- Bootstrap Core JavaScript -->
        <script src="/js/bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    </body>
    </html>
