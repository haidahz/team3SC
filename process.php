<?php
if (isset($_POST["edit"])) 
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $packagename = mysqli_real_escape_string($conn, $_POST["packagename"]);
    $appdata = mysqli_real_escape_string($conn, $_POST["appdata"]);
    $tag = mysqli_real_escape_string($conn, $_POST["tag"]);
    $sqlUpdate = "UPDATE $table_name WHERE id= ?";
    if(mysqli_query($conn,$sqlUpdate)){
        session_start();
        $_SESSION["update"] = "Data Updated Successfully!";
        header("Location:index.php");
    }else{
        die("Something went wrong");
    }

session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: index.php"); // Redirect to login page if not logged in
    exit();
}

//include '../pages/header.php';
include '../db.php';
//include '../pages/footer.php';
include '../form_handler.php';
$form_name = "app";
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">

            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <table class="border">

            <h1>Edit App Data</h1>
            <div>
            <a href="/hoteladmin/list/app1.php" class="btn btn-primary">Back</a>
            </div>
        </header>
           <form action="process.php" method="post">
            <?php 
            
            if (isset($_GET['id'])) {
                include("db.php");
                $id = $_GET['id'];
                $sql = "SELECT * FROM app WHERE id=$id";
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_array($result);
                ?>
            <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="title">Title : </label>
                    <input type="text" class="form-control" name="title">
                  </div>
                  <div class="form-group">
                    <label for="packageName">Package Name : </label>
                    <input type="text" class="form-control" name="packageName">
                  </div>
                  <div class="form-group">
                    <label for="appData">App Data : </label>
                    <input type="text" class="form-control" name="appData">
                  </div>
                  <div class="form-group">
                    <label for="tag">Tag </label>
                    <input type="text" class="form-control" name="tag">
              </form>
            </div>

                <?php
            }else{
                echo "<h3>Data does not exist !</h3>";
            }
            ?>
           
        </form>
        
        
    </div>
</body>
</html>
?>
