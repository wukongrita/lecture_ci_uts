<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master Student</title>
</head>
<body>
    <h1><?php echo $judul; ?></h1>

    <a href="/student/new">
        New
    </a>

    <table border="1" width="100%">
        <tr>
            <th width="10%">ID</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Birth Date</th>
            <th>Birth Place</th>
            <th>Address</th>
            <th>Active</th>
            <th width="20%">- action -</th>
        </tr>

        <?php
        foreach ($students as $student) {
        ?>
        <tr>
            <td><?php echo $student->id; ?></td>
            <td><?php echo $student->name; ?></td>
            <td><?php echo $student->gender; ?></td>
            <td><?php echo $student->birth_date; ?></td>
            <td><?php echo $student->birth_place; ?></td>
            <td><?php echo $student->address; ?></td>
            <td>
                <?php echo ($student->is_active) ? 'Active' : 'Inactive' ; ?>
            </td>
            <td>Edit | Delete</td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>
