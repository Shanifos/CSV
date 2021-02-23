<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{padding-top:10px;}
       table, tr, td {border:1px black solid;}
    </style>
    
</head>
<body>
    
        <div>
            <?php 
            include 'csv.php';

            print(readCSV('MOCK_DATA.csv'));
            ?>
        </div>
    </div>
    
</body>
</html>



