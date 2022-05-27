<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master Student</title>
</head>
<body>
    <h1><?php echo $judul; ?></h1>

    <?php
    if (isset($message)) {
        echo $message . '<br>';
    }
    ?>
    <form method="post" action="/student/save">
        ID: <input type="text" name="id" /> <br />
        Name: <input type="text" name="name" /> <br />
        Gender:
            <input type="radio" name="gender" value="male"> Male
            <input type="radio" name="gender" value="female"> Female
        <br />
        Birth Date: <input type="date" name="birth_date" /> <br />
        Birth Place: <input type="text" name="birth_place" /> <br />
        Address: <textarea name="address" rows=7 cols=40></textarea> <br />
        Active:
            <select name="is_active">
                <option value="0">Inactive</option>
                <option value="1">Active</option>
            </select>
        <br />

        <input type="submit" name="btnSave" value="Save" />
        <a href="/student/">Cancel</a>
    </form>
</body>
</html>
