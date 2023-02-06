<!doctype html>
<html lang="en">

<head>
    <!-- <title>:: Lucid :: Hospital</title> -->
    <?php
    include_once "component/style.php"
    ?>
</head>

<body>

    <!-- Page Loader -->
    <?php
    include_once "component/page-reloader.php"
    ?>
    <!-- Overlay For Sidebars -->

    <div id="wrapper">

        <?php
        include_once "component/top-header.php"
        ?>
        <?php
        include_once "component/side-bar.php"
        ?>
        <div id="main-content">
            <div class="container-fluid">
                <div class="block-header">
                    <div class="row">
                        <div class="col-lg-5 col-md-8 col-sm-12">
                            <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Members</h2>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="user-dir.php"><i class="#"></i></a></li>
                                <li class="breadcrumb-item active">Members</li>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="header">
                            </div>
                            <div class="body">
                                <div class="table-responsive">
                                    <table class="table table-hover m-b-0">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>ID</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Number</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><span class="list-name">OU 00456</span></td>
                                                <td>Joseph</td>
                                                <td>Joe</td>
                                                <td>404-447-6013</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                                                            Action
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="#">Edit</a></li>
                                                            <li><a class="dropdown-item" href="#">Delete</a></li>
                                                            <li><a class="dropdown-item" href="#">Block</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span class="list-name">KU 00789</span></td>
                                                <td>Cameron</td>
                                                <td>Karter</td>
                                                <td>404-447-4569</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                                                            Action
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="#">Edit</a></li>
                                                            <li><a class="dropdown-item" href="#">Delete</a></li>
                                                            <li><a class="dropdown-item" href="#">Block</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span class="list-name">KU 00987</span></td>
                                                <td>Alex</td>
                                                <td>Alexis</td>
                                                <td>404-447-7412</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                                                            Action
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="#">Edit</a></li>
                                                            <li><a class="dropdown-item" href="#">Delete</a></li>
                                                            <li><a class="dropdown-item" href="#">Block</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span class="list-name">OU 00951</span></td>
                                                <td>James</td>
                                                <td>Silva</td>
                                                <td>404-447-2589</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                                                            Action
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="#">Edit</a></li>
                                                            <li><a class="dropdown-item" href="#">Delete</a></li>
                                                            <li><a class="dropdown-item" href="#">Block</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span class="list-name">OU 00456</span></td>
                                                <td>Joseph</td>
                                                <td>Doe</td>
                                                <td>404-447-6013</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                                                            Action
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="#">Edit</a></li>
                                                            <li><a class="dropdown-item" href="#">Delete</a></li>
                                                            <li><a class="dropdown-item" href="#">Block</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span class="list-name">OU 00953</span></td>
                                                <td>charlie</td>
                                                <td>Chapllain</td>
                                                <td>404-447-9632</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                                                            Action
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="#">Edit</a></li>
                                                            <li><a class="dropdown-item" href="#">Delete</a></li>
                                                            <li><a class="dropdown-item" href="#">Block</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Javascript -->
    <script src="assets/bundles/libscripts.bundle.js"></script>
    <script src="assets/bundles/vendorscripts.bundle.js"></script>

    <script src="assets/bundles/jvectormap.bundle.js"></script> <!-- JVectorMap Plugin Js -->
    <script src="assets/bundles/morrisscripts.bundle.js"></script><!-- Morris Plugin Js -->
    <script src="assets/bundles/knob.bundle.js"></script> <!-- Jquery Knob-->
    <script src="assets/bundles/bootstrap.bundle.min.js"></script> <!-- Jquery Knob-->

    <script src="assets/bundles/mainscripts.bundle.js"></script>
    <script src="assets/js/index3.js"></script>

</body>

</html>