<?php

function submitForm($table_name) {
     $conn = connect();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Prepare and bind SQL statement with prepared statement
        $sql = "INSERT INTO $table_name (";
        $sql_values = "VALUES (";
        $types = "";
        $values = [];
        foreach ($_POST as $key => $value) {
            if ($key != 'form_name' && $key != 'submit') {
                $sql .= "$key, ";
                $sql_values .= "?, ";
                $types .= "s";
                $values[] = $value;
            }
        }
        $sql = rtrim($sql, ", ") . ") ";
        $sql_values = rtrim($sql_values, ", ") . ")";
        $sql .= $sql_values;

        // Prepare statement
        $stmt = $conn->prepare($sql);

        $stmt->bind_param($types, ...$values);

        if ($stmt->execute()) {
            echo "New record created successfully";
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