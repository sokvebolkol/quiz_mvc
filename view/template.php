<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <title>PHP MySQL MVC</title>
    <link href="view/css/bootstrap.min.css" rel="stylesheet" type="text/css" medai="all">
    <link rel="stylesheet" href="view/style.css">
    <script src="view/jquery-1.9.1.js"></script>
    <script src="view/list.js"></script>
    <script src="view/js/bootstrap.min.js"></script>
</head>
<body data-gr-c-s-loaded="true">
    <div class="container">
        
        <legend class="header">
            <!-- <h3 class="pull">Employee Manager</h3>
            <hr> -->
        </legend>

        <?php
            include "view/" . $data['page'] . ".php";
        ?>     
    </div>

</body>
</html>