<?php require 'header.php'; ?>

    <!-- Page Wrapper -->
    <div id="wrapper">

<?php require 'sidebar.php'; ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <?php require 'templates/top-bar.php'; ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
            </div>

            <?php echo getContent() ?>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->


<?php require 'footer.php'; ?>