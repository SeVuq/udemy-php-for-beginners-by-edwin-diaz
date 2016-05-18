<!-- Blog Sidebar Widgets Column -->
<div class="col-md-4">
    <!-- Blog Search Well -->
    
    <div class="well">
        <h4>Blog Search</h4>
        <form action="search.php" method="post">
            <div class="input-group">
                <input type="text" name="query" class="form-control">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="submit" name="submit">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                </span>
            </div> <!-- /.input-group -->
        </form>
    </div>
    
    <!-- Blog Categories Well -->
    <div class="well">
        <h4>Blog Categories</h4>
        <div class="row">
            <div class="col-lg-12">
                <ul class="list-unstyled">
                    <?php include_once 'functions.php';?>
                    <?php showAllCategories();?>
                </ul>
            </div> <!-- col-lg-6 -->
        </div> <!-- row -->
    </div> <!-- well -->
    
    <!-- Side Widget Well -->
    <?php include_once 'widget.php';?>
</div>