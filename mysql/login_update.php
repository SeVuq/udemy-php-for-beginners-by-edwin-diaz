<?php include "db.php";?>
<?php include "functions.php";?>
<?php updateTable();?>
<?php include "includes/header.php";?>
    <div class="container">
        <div class="col-sm-6">
            <h1 class="text-center">Update</h1>
            <form action="login_update.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input class="form-control" type="text" name="username">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input  class="form-control" type="password" name="password">
                </div>
                <div class="form-group">
                    <select name="id" id="">
                        <?php showAllData();?>
                    </select>
                </div>
                <div class="form-group">
                    <input class="btn btn-primary" type="submit" name="submit" value="Update">
                </div>
            </form>
        </div>
    </div>
<?php include "includes/footer.php";?>