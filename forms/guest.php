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


<h2>Guest Form</h2>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
  <table>
    <tr>
      <th colspan="2">Insert Guest Details</th>
    </tr>
    <tr>
      <td>Guest Name:</td>
      <td><input type="text" name="guestname"></td>
    </tr>
    <tr>
      <td>Guest Last Stay:</td>
      <td><input type="text" name="guestlaststay"></td>
    </tr>
    <tr>
      <td>Guest Data 2:</td>
      <td><input type="text" name="guestdata2"></td>
    </tr>
    <tr>
      <td>Guest Data 3:</td>
      <td><input type="text" name="guestdata3"></td>
    </tr>
    <tr>
      <td>Guest Data 4:</td>
      <td><input type="text" name="guestdata4"></td>
    </tr>
    <tr>
      <td>Guest Data 5:</td>
      <td><input type="text" name="guestdata5"></td>
    </tr>
    <tr>
      <td>Guest Data 6:</td>
      <td><input type="text" name="guestdata6"></td>
    </tr>
    <tr>
      <td>Guest Data 7:</td>
      <td><input type="text" name="guestdata7"></td>
    </tr>
    <tr>
      <td>Guest Data 8:</td>
      <td><input type="text" name="guestdata8"></td>
    </tr>
    <tr>
      <td>Tag:</td>
      <td><input type="text" name="tag"></td>
    </tr>
  </table>
  <input type="hidden" name="form_name" value="guest">
  <div class="button"><input type="submit" name="submit" value="Submit"></div>
  </form>

  </div>
    </div>
</div>

  <?php
include "../db.php";
include "../form_handler.php";
$form_name = "guest";
submitForm($form_name);

include '../pages/footer.php';
?>
</body>
</html>