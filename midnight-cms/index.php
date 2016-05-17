<?php include 'includes/header.php';?>
<?php include 'includes/navigation.php';?>

<!-- Page Content -->
<div class="container">
    <div class="row">
        <!-- Blog Entries Column -->
        <div class="col-md-8">
            <h1 class="page-header">
                Page Heading
                <small>Secondary Text</small>
            </h1>
            <?php selectAllPosts();?>
        </div>

<?php include 'includes/sidebar.php';?>
<?php include 'includes/footer.php';?>