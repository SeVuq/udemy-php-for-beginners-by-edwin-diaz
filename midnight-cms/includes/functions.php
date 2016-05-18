<?php
$db = array();
$db['db_host'] = 'localhost';
$db['db_user'] = 'root';
$db['db_pass'] = '';
$db['db_name'] = 'midnight_cms';

foreach ($db as $key => $value) {
    define(strtoupper($key), $value);
}

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if (!$connection) die(mysqli_error($connection));

function showAllCategories() {
    global $connection;
    $query = "SELECT * FROM categories LIMIT 4";
    $result = mysqli_query($connection, $query);
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $cat_title = $row['cat_title'];
            echo "<li><a href='#'>{$cat_title}</a></li>";
        }
    } else {
        die(mysqli_error($connection));
    }
}

function searchPost($query) {
    global $connection;
    $query = "SELECT * FROM posts WHERE post_tags LIKE '%$query%'";
    $result = mysqli_query($connection, $query);
    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $postID = $row['post_id'];
                $postCatID = $row['post_category_id'];
                $postTitle = $row['post_title'];
                $postAuthor = $row['post_author'];
                $postDate = $row['post_date'];
                $postImage = $row['post_image'];
                $postContent = $row['post_content'];
                $postTags = $row['post_tags'];
                $postCommentsCount = $row['post_comment_count'];
                $postStatus = $row['post_status'];
                $postViewsCount = $row['post_views_count'];
                ?>

                <h2>
                    <a href="#"><?php echo $postTitle;?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?php echo $postAuthor;?></a>
                </p>
                <p>
                    <span class="glyphicon glyphicon-time"></span>
                     Posted on <?php echo $postDate;?>
                </p>
                <hr>
                <img class="img-responsive" src="<?php echo $postImage;?>" alt="">
                <hr>
                <p><?php echo $postContent;?></p>
                <a href="#" class="btn btn-primary">Read more</a>
                <span class="gkyphicon glyphicon-chevron-right"></span>
                <hr>

                <?php
            }
        } else {
            echo "<h1>No result!</h1>";
        }
    } else {
        die(mysqli_error($connection));
    }
}

function selectAllPosts() {
    global $connection;
    $query = "SELECT * FROM posts";
    $result = mysqli_query($connection, $query);
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $postID = $row['post_id'];
            $postCatID = $row['post_category_id'];
            $postTitle = $row['post_title'];
            $postAuthor = $row['post_author'];
            $postDate = $row['post_date'];
            $postImage = $row['post_image'];
            $postContent = $row['post_content'];
            $postTags = $row['post_tags'];
            $postCommentsCount = $row['post_comment_count'];
            $postStatus = $row['post_status'];
            $postViewsCount = $row['post_views_count'];
            ?>
            
            <h2>
                <a href="#"><?php echo $postTitle;?></a>
            </h2>
            <p class="lead">
                by <a href="index.php"><?php echo $postAuthor;?></a>
            </p>
            <p>
                <span class="glyphicon glyphicon-time"></span>
                 Posted on <?php echo $postDate;?>
            </p>
            <hr>
            <img class="img-responsive" src="<?php echo $postImage;?>" alt="">
            <hr>
            <p><?php echo $postContent;?></p>
            <a href="#" class="btn btn-primary">Read more</a>
            <span class="gkyphicon glyphicon-chevron-right"></span>
            <hr>
            
            <?php
        }
    } else {
        die(mysqli_error($connection));
    }
}
?>