<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Record Form</title>
    <link rel="stylesheet" href="StyleSheet.css" />
    <style type="text/css">
        body {
            background-image: while);
        }
    </style>
</head>

<body>
    <form action="insert.php" method="post">

        <div class="row">
            <div class="col-25">
                <label for="table1">Choisir une table:</label>
            </div>
            <div class="col-75">
                <select name="table1" id="table1:">
                    <option value="table1">table1</option>
                    <option value="table2">table2</option>
                    <option value="table3">table3</option>
                    <option value="table4">table4</option>
                </select>
            </div>
        </div>

        <div class="row">
            <input type="submit" value="Connection">
        </div>
    </form>
</body>
</html>