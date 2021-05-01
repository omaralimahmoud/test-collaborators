
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>table</title>
    <style>
     td{
         border: 4px solid black;
     }
    
    </style>
</head>
<body>
    <table>
       <tbody>
       
       
       <?php  for ($i=1;$i<=12;$i++) {  ?>
       <tr>
       <?php for ($j=1; $j <=12 ; $j++) {  ?>
       <td>
        <?php  echo  " $j * $j =" . $j *$i; ?>
       </td>
       <?php } ?>
       </tr>
      <?php } ?>
       </tbody>
    </table>


</body>
</html>





