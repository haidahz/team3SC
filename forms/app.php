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

          <h2>App Form</h2>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <table class="border">
              <tr>
                <th colspan="2">Insert App Details</th>
              </tr>
              <tr>
                <td>Title:</td>
                <td><input type="text" name="title"></td>
              </tr>
              <tr>
                <td>Package Name:</td>
                <td><input type="text" name="packagename"></td>
              </tr>
              <tr>
                <td>App Data:</td>
                <td><input type="text" name="appdata"></td>
              </tr>
              <tr>
                <td>Tag:</td>
                <td><input type="text" name="tag"></td>
              </tr>
            </table>
            <input type="hidden" name="form_name" value="app">
            <div class="button"><input type="submit" name="submit" value="Submit"></div>
            </form>
          </div>
    </div>
    </div>
</div>

  <?php
include "../db.php";
include "../form_handler.php";
$form_name = "app";
submitForm($form_name);

include '../pages/footer.php';
?>
