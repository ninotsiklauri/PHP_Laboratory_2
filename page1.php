<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>N1</title>
    <style>
        .container{
            margin: auto;
            border: solid black 1px;
            width: 220px;
            padding: 20px
        } 
        .result{
            border: black solid 1px;
            width: 200px;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Array</h1>
        <?php
            $array = [];
            for($i = 0; $i < 12; $i++){
                array_push($array,rand(10, 100));
            }
            echo "<pre>";
            print_r($array);
            echo "</pre>";

            $less = 0;
            $more = 0;
            if(isset($_POST['Submit'])){
                foreach($array as $num){
                    if($num > $_POST['Submit']){
                        $more++;
                    }
                    if($num < $_POST['Submit']){
                        $less++;
                    }
                }
            }
        ?>
        <div class="result">
            <div>
                <form method="post">
                    <input type="number" name="Submit">
                    <br><br>
                    <button type="submit">Submit</button>
                    <br><br>
                </form>
            </div>
            <?php
                if(isset($_POST['Submit'])){
            ?>
                <div>
                    <label>მეტი:</label>
                    <?=$more?>
                    <br>
                    <label>ნაკლები:</label>
                    <?=$less?>
                </div>
            <?php
                }
            ?>
        </div>
    </div>
</body>
</html>