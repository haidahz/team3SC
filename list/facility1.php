<?php 
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: index.php"); // Redirect to login page if not logged in
    exit();
}

include "../pages/header.php";
include "../db.php";
include '../pages/footer.php';
include "../form_handler.php";
$form_name = "facility";
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">

            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <table class="border">

<style>
.card-primary:not(.card-outline) > .card-header {
  background-color: #212529;
  }
.btn-primary {
    color: #fff;
    background-color: #212529;
    border-color: #212529;
    box-shadow: none;
  }
    </style>
</head>
<body>
    <div class="container my-4">
        <header class="d-flex justify-content-between my-4">
            <h1>FACILITY DATA LIST</h1>
            <div>
                <a href="/hoteladmin/forms/facility.php" class="btn btn-primary">Add New Data</a>
            </div>
        </header>
        <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>TITLE</th>
                <th>IMAGE URL</th>
                <th>VIDEO URL</th>
                <th>LIVE URL</th>
                <th>DESCRIPTION</th>
                <th>TAG</th>
            </tr>
        </thead>
        <tbody>
        
        <?php
                $conn = connect(); 
                $result = mysqli_query($conn, "SELECT * FROM facility");

                if ($result) {
                    while ($data = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        ?>
                        <tr>
                            <td><?php echo $data['id']; ?></td>
                            <td><?php echo $data['title']; ?></td>
                            <td><?php echo $data['imageurl']; ?></td>
                            <td><?php echo $data['videourl']; ?></td>
                            <td><?php echo $data['liveurl']; ?></td>
                            <td><?php echo $data['description']; ?></td>
                            <td><?php echo $data['tag']; ?></td>
                            <td>
                    <form method="post" action="/ukamaserve/hoteladmin/delete.php">
                    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                    <input type="hidden" name="table_name" value="facility">
                    <button type="submit" class="btn btn-danger">Delete</button>
                               </form>
                            </td>
                        </tr>
                        <?php
                    }
                } else {
                    echo "Error: " . mysqli_error($conn);
                }

                mysqli_close($conn);
                ?>