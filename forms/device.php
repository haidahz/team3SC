<?php 
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: index.php"); // Redirect to login page if not logged in
    exit();
}

include '../pages/header.php';
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        
  <h2>Device Form</h2>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
  <div class="table-wrapper">
  <table class="border">
    <tr>
      <th colspan="2">Insert Device Details</th>
    </tr>
    <tr>
      <td>Room No:</td>
      <td><input type="text" name="roomno"></td>
    </tr>
    <tr>
      <td>Room Type:</td>
      <td><input type="text" name="roomtype"></td>
    </tr>
    <tr>
      <td>Tag:</td>
      <td><input type="text" name="tag"></td>
    </tr>
    
  </table>
  <input type="hidden" name="form_name" value="device">
  <div class="button"><input type="submit" name="submit" value="Submit"></div>
  </form>
      </div>
    </div>
</div>

<?php
include "../db.php";
include "../form_handler.php";
$form_name = "device";
submitForm($form_name);

include '../pages/footer.php';
?>
</body>
</html>