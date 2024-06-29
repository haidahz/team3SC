<?php 
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: index.php"); // Redirect to login page if not logged in
    exit();
}

include '../pages/header.php';
include '../db.php';
include "../edit.php";
include '../form_handler.php';

$conn = connect();
$id = $_GET['id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    updateForm('channel');
    exit();
} else {
    // Retrieve existing data
    $stmt = $conn->prepare("SELECT * FROM channel WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();
    $stmt->close();
}
$conn->close();
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">

<h2>Edit Channel</h2>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] . "?id=" . $id); ?>">
  <table>
    <tr>
      <th colspan="2">Update Channel Details</th>
    </tr>
    <tr>
      <td>Title:</td>
      <td><input type="text" name="title" value="<?php echo $data['title']; ?>"></td>
    </tr>
    <tr>
      <td>BG Image URL:</td>
      <td><input type="text" name="bgimageurl" value="<?php echo $data['bgimageurl']; ?>"></td>
    </tr>
    <tr>
      <td>Card Image URL:</td>
      <td><input type="text" name="cardimageurl" value="<?php echo $data['cardimageurl']; ?>"></td>
    </tr>
    <tr>
      <td>Video URL:</td>
      <td><input type="text" name="videourl" value="<?php echo $data['videourl']; ?>"></td>
    </tr>
    <tr>
      <td>Tag:</td>
      <td><input type="text" name="tag" value="<?php echo $data['tag']; ?>"></td>
    </tr>
  </table>
  <input type="hidden" name="form_name" value="channel">
  <input type="hidden" name="id" value="<?php echo $id; ?>">
  <div class="button"><input type="submit" name="submit" value="Update"></div>
  </form>
      </div>
    </div>
</div>
  <?php
include '../pages/footer.php';
?>
</body>
</html>