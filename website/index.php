<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

</head>

<body>
    
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="https://campusnet.jacobs-university.de/">Campusnet</a>
                    </li>
                    <li>
                        <a href="https://cantaloupe.eecs.jacobs-university.de/login.php?f=djExOA">jgrader</a>
                    </li>
                    <li>
                        <a href="#">Video Materials</a>
                    </li>
                    <li>
                        <a href="contact_us.html">Contact Us</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    
    <!-- Full Width Image Header with Logo -->
    <!-- Image backgrounds are set within the full-width-pics.css file. -->
    <header class="image-bg-fluid-height">
        <img class="img-responsive img-center" src=""alt="">
            </header>
    <br>
    <br>
    <br>

<!-- Content Section -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="section-heading">New Uploads:</h1>
                <p class="lead section-lead">newest videoes:</p>
                <p class="section-paragraph">COOL INFORMATION COMES HERE SOON.</p>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>


    <title>jlecture</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap CSS for table -->
    <link href="css/dataTables.bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Content Section -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="section-heading">Lectures</h1>
                    <p class="lead section-lead">Pick your lecture</p>
                    <p class="section-paragraph">cool information comes here later.</p>
                    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Lecture ID</th>
                                <th>Lecture Name</th>
                                <th>Instructor</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Lecture ID</th>
                                <th>Lecture Name</th>
                                <th>Instructor</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>100000</td>
                                <td>Data Bases and Web Applications</td>
                                <td>Prof. Peter Baumann</td>

                            </tr>
                            <tr>
                                <td>100001</td>
                                <td>General Computer Science</td>
                                <td>Prof. Michael Kohlhase</td>

                            </tr>
                            <tr>
                                <td>100002</td>
                                <td>Formal Languages and Logic</td>
                                <td>Prof. Herbert Jaeger</td>
                            </tr>

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
    <script src="js/jquery.js"></script>
    <script>
    $(document).ready(function() {
    $('#example').DataTable();} );
    </script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
</body>
</html>
