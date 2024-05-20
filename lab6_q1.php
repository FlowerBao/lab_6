<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lab 6 Q1</title>
</head>

<body>
    <?php
$name = "Fatin Nadia";
$matricNum = "DI220150";
$course = "Information Technology";
$yearOfStudy = "Year 2";
$address = "Kolej Kediaman Tun Fatimah, UTHM";
?>
    <table>
        <tr>
            <td><strong>Name:</strong></td>
            <td><?php echo "$name"; ?></td>
        </tr>
        <tr>
            <td><strong>Matric Number:</strong></td>
            <td><?php echo "$matricNum"; ?></td>
        </tr>
        <tr>
            <td><strong>Course:</strong></td>
            <td><?php echo "$course"; ?></td>
        </tr>
        <tr>
            <td><strong>Year of Study:</strong></td>
            <td><?php echo "$yearOfStudy"; ?></td>
        </tr>
        <tr>
            <td><strong>Address:</strong></td>
            <td><?php echo "$address"; ?></td>
        </tr>
    </table>
</body>

</html>
