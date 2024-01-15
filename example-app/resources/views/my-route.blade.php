<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ตารางสูตรคูณ</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            color: #333;
            background: #9beafc;
            font-size: 16px;
            font-family: 'Arial', sans-serif;
        }

        .scroll-bg {
            width: 80%;
            margin: 5% auto;
            padding: 20px;
            background: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .scroll-div {
            width: 100%;
            background: #fff;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            overflow-x: auto;
        }

        form {
            text-align: center;
            margin-top: 20px;
        }

        label {
            font-size: 18px;
            display: block;
            margin-bottom: 5px;
        }

        input {
            font-size: 16px;
            padding: 10px;
            margin-top: 10px;
            width: 50%;
            box-sizing: border-box;
        }

        button {
            font-size: 18px;
            padding: 10px;
            margin-top: 10px;
            background-color: #9beafc;
            color: black;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #9beafc;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }

        th {
            background-color: #9beafc;
            color: white;
        }

    </style>
</head>

<body>
    <div class="scroll-bg">
        <div class="scroll-div">
            <form method="post" action="/mail">
                @csrf
                <label for="my_val">เลือกแม่สูตรคุณ:</label>
                <br>
                <input type="number" name="numberinput">
                <br>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>

    @if (session('multiply'))
    <div class="scroll-bg">
        <h1>ตารางสูตรคูณแม่ : <?php echo $multi_x = (int)session('multiply') ?></h1>
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
                    @for ($i = 1; $i <= 24; $i++)
                        <tr>
                            <td>{{ $multi_x }}</td>
                            <td>x</td>
                            <td>{{ $i }}</td>
                            <td>=</td>
                            <td>{{ $multi_x * $i }}</td>
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>
    @endif
</body>

</html>
