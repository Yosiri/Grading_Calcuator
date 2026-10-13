<!DOCTYPE html>
<html>
<head>
    <title>Grade Calculator</title>
</head>
<body>
    <?php
    $studentName1 = "Malijan Aldrich";
    $studentName2 = "Jhon Galangga";
    $CourseCode = "IT 301";
    $prelim = [85, 90];
    $midterm = [88.5, 92.7];
    $finals = [90, 95];

    $finalAverage1 = ($prelim[0] + $midterm[0] + $finals[0]) / 3;
    $finalAverage2 = ($prelim[1] + $midterm[1] + $finals[1]) / 3;
    ?>

    <h1>Grade Calculator</h1>
    <table>
        <tr>
            <th>Student Name</th>
            <th>Course Code</th>
            <th>Prelim Grade</th>
            <th>Midterm Grade</th>
            <th>Finals Grade</th>
            <th>Average Grade</th>
        </tr>
        <tr>
            <td><?php echo $studentName1; ?></td>
            <td><?php echo $CourseCode; ?></td>
            <td><?php echo $prelim[0]; ?></td>
            <td><?php echo $midterm[0]; ?></td>
            <td><?php echo $finals[0]; ?></td>
            <td><?php echo $finalAverage1; ?></td>
        </tr>
        <tr>
            <td><?php echo $studentName2; ?></td>
            <td><?php echo $CourseCode; ?></td>
            <td><?php echo $prelim[1]; ?></td>
            <td><?php echo $midterm[1]; ?></td>
            <td><?php echo $finals[1]; ?></td>
            <td><?php echo $finalAverage2; ?></td>
        </tr>
    </table>


</body>
</html>