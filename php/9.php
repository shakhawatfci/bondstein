<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Printing User Data</title>
    <style>
        *{
            margin: 0 auto;
        }
    </style>
</head>
<body>
<?php

$array = [
    ['Joe', 'joe@hmail.com', 24],
    ['Doe', 'doe@hmail.com', 25],
    ['Dane', 'dane@hmail.com', 20],
];

?>
<table border="1" style="margin-top: 50px;width:600px;text-align:center">
   <thead>
       <tr>
           <th>Name</th>
           <th>Email</th>
           <th>Age</th>
       </tr>
   </thead>
    <tbody>
        <?php foreach ($array as $value) {?>
           <tr>
            <td><?=$value[0]?></td>
            <td><?=$value[1]?></td>
            <td><?=$value[2]?></td>
           </tr>
       <?php }?>
    </tbody>
</table>

</body>
</html>
