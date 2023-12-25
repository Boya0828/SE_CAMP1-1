<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <?php $multi_x = 2; ?>
    <h1>ตารางสูตรคูณแม่ <?php echo $multi_x ?></h1>

    <table>
        <tbody>
            for(int i=1;i<=24;i++){
            <tr>
                <td>$multi_x</td>
                <td>x</td>
                <td>i</td>
                <td>=</td>
                <td>i*2</td>
            </tr>
            }
        </tbody>
    </table>
    <style>
        table {
            width: 150px;
            height: 265px;
        }
    </style>
</body>

</html>