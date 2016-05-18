<?php include_once 'includes/header.php';?>
<?php include_once 'includes/navigation.php';?>

<!-- Page Content -->
<div class="container">
    <div class="row">
        <!-- Blog Entries Column -->
        <div class="col-md-8">
            <h1 class="page-header">
                Page Heading
                <small>Secondary Text</small>
            </h1>
            <?php if (isset($_POST['query'])) searchPost($_POST['query']);?>
        </div>

<?php include_once 'includes/sidebar.php';?>
<?php include_once 'includes/footer.php';?>