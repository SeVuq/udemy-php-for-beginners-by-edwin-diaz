<?php include "db.php";?>
<?php include "functions.php"?>
<?php createRows();?>
<?php include "includes/header.php";?>
    <div class="container">
        <h1 class="text-center">Create</h1>
        <div class="col-sm-6">
            <form action="login_create.php" method="post">
                <div class="form-group">
                   <label for="username">Username</label>
                   <input type="text" class="form-control" name="username">
                </div>
                <div class="form-group">
                   <label for="password">Password</label>
                   <input type="password" class="form-control" name="password">
                </div>
                <div class="form-group">
                    <input class="btn btn-primary" type="submit" name="submit" value="Create">
                </div>
            </form>
        </div>
    </div>
<?php include "includes/footer.php";?>