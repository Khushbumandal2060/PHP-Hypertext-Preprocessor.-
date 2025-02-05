<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>S.N.</th>
            <th>Name</th>
            <th>Email</th>
        </tr>

        <?php 
        $users = [
            [1, "Khushi", "khushi433@gmail.com"],
            [2, "Jyoti", "jyotimandal133@gmail.com"],
            [3, "Khusa", "khusa433@gmail.com"],
            [4, "Khushiya", "khushiya433@gmail.com"],
        ];

        foreach ($users as $user) {
            echo "<tr>";
            foreach ($user as $data) {
                echo "<td>$data</td>";
            }
            echo "</tr>";
        }
        ?>

    </table>
</body>
</html>
