<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: /hoteladmin/index.php"); // Redirect to login page if not logged in
    exit();
}

include "../db.php";
include "../edit.php";
include "../pages/header.php";
include "../pages/footer.php";

$conn = connect();
$id = $_GET['id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    updateForm('app');
    exit();
} else {
    $stmt = $conn->prepare("SELECT * FROM app WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();
    $stmt->close();
}
$conn->close();
?>

<div class="container my-4">
    <header class="d-flex justify-content-between my-4">
        <h1>Edit APP DATA</h1>
        <div>
            <a href="/hoteladmin/list/app1.php" class="btn btn-secondary">Back to List</a>
        </div>
    </header>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] . "?id=" . $id); ?>">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="<?php echo $data['title']; ?>" required>
        </div>
        <div class="form-group">
            <label for="packagename">Package Name</label>
            <input type="text" class="form-control" id="packagename" name="packagename" value="<?php echo $data['packagename']; ?>" required>
        </div>
        <div class="form-group">
            <label for="appdata">App Data</label>
            <input type="text" class="form-control" id="appdata" name="appdata" value="<?php echo $data['appdata']; ?>" required>
        </div>
        <div class="form-group">
            <label for="tag">Tag</label>
            <input type="text" class="form-control" id="tag" name="tag" value="<?php echo $data['tag']; ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
