<html>

<head>
    <meta charset="utf-8">
    
</head>
<style>
    h1{
        font-size:  25px;
        
    }
    body{
        margin: 0;
        padding: 0;
        color: black;
    }
    .scroll-bg{
        background: rgb(247, 123, 123);

        width: 400px;
        margin:10% auto
    }
    .scroll-div{
        width: 400px;
        background:rgb(247, 123, 123);
        height: 300px;
        overflow: auto;
        overflow-y: scroll;
    }
    .scroll-object{
        color: :azure;
        font-size:20px;
        padding:20px


    }

</style>
<body>
    <?php $i = 1; ?>
<div class="scroll-bg">
    <div class="scroll-div">
        <div class="scroll-object">
        <table>
            <h1>ตารางสูตรคูณแม่ <?php echo $multi_x ?></h1>
        <?php for  ($i = 1; $i <= 24; $i++) { ?>
                <tr>
                    <td><?php echo $multi_x ?></td>
                    <td> x </td>
                    <td><?php echo $i ?></td>
                    <td> = </td>
                    <td><?php echo $multi_x * $i ?></td>
                </tr>
                <?php } ?>
            
        </table>
        </div>
    </div>
</div>
</body>

</html>
