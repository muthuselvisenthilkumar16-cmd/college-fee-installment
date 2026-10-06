<?php

include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $student_id = $_POST["student_id"];
    $total_fee = $_POST["total_fee"];
    $paid_fee = $_POST["paid_fee"];
    $installments = $_POST["installments"];

    if ($installments <= 0) {
        die("Please select a valid number of installments.");
    }

    $remaining_fee = $total_fee - $paid_fee;

    if ($remaining_fee < 0) {
        die("Paid amount cannot be greater than total fee.");
    }

    $installment_amount = $remaining_fee / $installments;

    $sql = "INSERT INTO fee_plans
            (student_id, total_fee, installment_count, installment_amount)
            VALUES (?, ?, ?, ?)";

    $stmt = mysqli_prepare($conn, $sql);

    if (!$stmt) {
        die("SQL Error: " . mysqli_error($conn));
    }

    mysqli_stmt_bind_param(
        $stmt,
        "idid",
        $student_id,
        $total_fee,
        $installments,
        $installment_amount
    );

    if (mysqli_stmt_execute($stmt)) {
        echo "<h2>Fee plan saved successfully!</h2>";
        echo "<p>Remaining Fee: ₹" . number_format($remaining_fee, 2) . "</p>";
        echo "<p>Installment Amount: ₹" . number_format($installment_amount, 2) . "</p>";
        echo "<br><a href='fee_planner.php'>Create Another Fee Plan</a>";
    } else {
        echo "Error saving fee plan: " . mysqli_stmt_error($stmt);
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}

?>