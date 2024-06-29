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
$form_name = "guest";
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
            <h1>GUEST DATA LIST</h1>
            <div>
                <a href="/hoteladmin/forms/guest.php" class="btn btn-primary">Add New Data</a>
            </div>
        </header>
        <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>GUEST NAME</th>
                <th>GUEST LAST STAY</th>
                <th>GUEST DATA 1</th>
                <th>GUEST DATA 2</th>
                <th>GUEST DATA 3</th>
                <th>GUEST DATA 4</th>
                <th>GUEST DATA 5</th>
                <th>GUEST DATA 6</th>
                <th>GUEST DATA 7</th>
                <th>GUEST DATA 8</th>
                <th>TAG</th>
            </tr>
        </thead>
        <tbody>
        
        <?php
                $conn = connect(); 
                $result = mysqli_query($conn, "SELECT * FROM guest");

                if ($result) {
                    while ($data = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        ?>
                        <tr>
                            <td><?php echo $data['id']; ?></td>
                            <td><?php echo $data['guestname']; ?></td>
                            <td><?php echo $data['guestlaststay']; ?></td>
                            <td><?php echo $data['guestdata1']; ?></td>
                            <td><?php echo $data['guestdata2']; ?></td>
                            <td><?php echo $data['guestdata3']; ?></td>
                            <td><?php echo $data['guestdata4']; ?></td>
                            <td><?php echo $data['guestdata5']; ?></td>
                            <td><?php echo $data['guestdata6']; ?></td>
                            <td><?php echo $data['guestdata7']; ?></td>
                            <td><?php echo $data['guestdata8']; ?></td>
                            <td><?php echo $data['tag']; ?></td>
                            <td>
                    <form method="post" action="/ukamaserve/hoteladmin/delete.php">
                    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                    <input type="hidden" name="table_name" value="guest">
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