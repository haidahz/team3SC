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

<h2>Menu Form</h2>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
  <table>
    <tr>
      <th colspan="2">Insert Menu Details</th>
    </tr>
    <tr>
      <td>Title:</td>
      <td><input type="text" name="title"></td>
    </tr>
    <tr>
      <td>Price:</td>
      <td><input type="text" name="price"></td>
    </tr>
    <tr>
      <td>Section:</td>
      <td><input type="text" name="section"></td>
    </tr>
    <tr>
      <td>Subsection:</td>
      <td><input type="text" name="subsection"></td>
    </tr>
    <tr>
      <td>Image URL:</td>
      <td><input type="text" name="imageurl"></td>
    </tr>
    <tr>
      <td>Thumbnail URL:</td>
      <td><input type="text" name="thumbnailurl"></td>
    </tr>
    <tr>
      <td>Tag:</td>
      <td><input type="text" name="tag"></td>
    </tr>
  </table>
  <input type="hidden" name="form_name" value="menu">
  <div class="button"><input type="submit" name="submit" value="Submit"></div>
  </form>

</div>
    </div>
</div>
  <?php
include "../db.php";
include "../form_handler.php";
$form_name = "menu";
submitForm($form_name);

include '../pages/footer.php';
?>
</body>
</html>