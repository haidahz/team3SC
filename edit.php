<?php
function updateForm($table_name) {
    $conn = connect();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Update existing record
        $id = $_POST['id'];
        $sql = "UPDATE $table_name SET ";
        $types = "";
        $values = [];
        foreach ($_POST as $key => $value) {
            if ($key != 'form_name' && $key != 'submit' && $key != 'id') {
                $sql .= "$key = ?, ";
                $types .= "s";
                $values[] = $value;
            }
        }
        $sql = rtrim($sql, ", ") . " WHERE id = ?";
        $types .= "i";
        $values[] = $id;

        // Prepare statement
        $stmt = $conn->prepare($sql);
        $stmt->bind_param($types, ...$values);

        if ($stmt->execute()) {
            echo "Record updated successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Close statement
        $stmt->close();
    }

    // Close the database connection
    $conn->close();
}
?>