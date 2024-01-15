<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Multiply Table</title>

    <?php $multi_x = $numberinput?>
    <?php $i = 1; ?>

    <style>
        body {
            margin: 0;
            padding: 0;
            color: black;
            background: rgb(247, 123, 123);
            font-family: 'Arial', sans-serif;
        }

        .container {
            margin: 50px auto;
            text-align: center;
        }

        h1 {
            font-size: 30px;
            margin-bottom: 20px;
        }

        .scroll-bg {
            width: 80%;
            margin: 2% auto;
            padding: 20px;
            background: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .scroll-div {
            width: 100%;
            height: 500px;
            overflow: auto;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="scroll-bg">
            <h1>ตารางสูตรคูณแม่ <?php echo $multi_x ?></h1>
            <div class="scroll-div">
                <table>
                    <thead>
                        <tr>
                            <th>Multiplier</th>
                            <th>Symbol</th>
                            <th>Value</th>
                            <th>Equals</th>
                            <th>Result</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($i = 1; $i <= 24; $i++) : ?>
                            <tr>
                                <td><?php echo $multi_x ?></td>
                                <td>x</td>
                                <td><?php echo $i ?></td>
                                <td>=</td>
                                <td><?php echo $multi_x * $i ?></td>
                            </tr>
                        <?php endfor; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <button type="submit"> ตกลง</button>
    </div>
</body>

</html>
