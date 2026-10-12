<?php

include "db.php";

$sql = "SELECT
            students.student_name,
            students.roll_number,
            students.course,
            students.year,
            fee_plans.total_fee,
            fee_plans.installment_count,
            fee_plans.installment_amount,
            fee_plans.due_date
        FROM students
        INNER JOIN fee_plans
        ON students.id = fee_plans.student_id
        ORDER BY fee_plans.id DESC";

$result = mysqli_query($conn, $sql);

if (!$result) {
    die("SQL Error: " . mysqli_error($conn));
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Fee Dashboard</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="dashboard">

    <h1>Fee Dashboard</h1>

    <div class="top-buttons">

        <a href="index.php" class="btn">
            Home
        </a>

        <a href="add_student.php" class="btn">
            Add Student
        </a>

        <a href="fee_planner.php" class="btn">
            Create Fee Plan
        </a>

    </div>

    <?php

    if (mysqli_num_rows($result) > 0) {

    ?>

    <div class="table-container">

        <table>

            <thead>

                <tr>

                    <th>Student</th>
                    <th>Roll No.</th>
                    <th>Course</th>
                    <th>Year</th>
                    <th>Total Fee</th>
                    <th>Installments</th>
                    <th>Each Installment</th>
                    <th>Due Date</th>

                </tr>

            </thead>

            <tbody>

            <?php

            while ($row = mysqli_fetch_assoc($result)) {

            ?>

                <tr>

                    <td>
                        <?php echo htmlspecialchars($row["student_name"]); ?>
                    </td>

                    <td>
                        <?php echo htmlspecialchars($row["roll_number"]); ?>
                    </td>

                    <td>
                        <?php echo htmlspecialchars($row["course"]); ?>
                    </td>

                    <td>
                        <?php echo $row["year"]; ?>
                    </td>

                    <td>
                        ₹<?php echo number_format($row["total_fee"], 2); ?>
                    </td>

                    <td>
                        <?php echo $row["installment_count"]; ?>
                    </td>

                    <td>
                        ₹<?php echo number_format($row["installment_amount"], 2); ?>
                    </td>

                    <td>
                        <?php echo htmlspecialchars($row["due_date"]); ?>
                    </td>

                </tr>

            <?php

            }

            ?>

            </tbody>

        </table>

    </div>

    <?php

    } else {

    ?>

        <div class="no-data">

            <h3>No fee plans found</h3>

            <p>Add a student and create a fee plan first.</p>

        </div>

    <?php

    }

    ?>

</div>

</body>

</html>

<?php

mysqli_close($conn);

?>