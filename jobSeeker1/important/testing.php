<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="testing.css">
    <title>Testing</title>
</head>
<body>
   <div class="cls">
   this is div
   </div>
   <button onclick="show()" class="pasha">click</button>
   <script>
     function show()
     {
         document.getElementsByClassName("cls").style.display="inline";
         document.getElementsByClassName('pasha').style.background='red';
     }
   </script>
</body>
</html>