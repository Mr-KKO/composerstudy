<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo $title ?></title>
    <link href='http://fonts.font.im/css?family=Great+Vibes' rel='stylesheet' type='text/css'>

    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: 'Great Vibes', cursive;
            color: #544669;
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 10rem;
        }

        .slogan {
            font-size: 4rem;
        }
    </style>

</head>
<body>
<div class="container">
    <div class="content">
        <div class="slogan"><?php echo $slogan ?></div>
        <div class="title">Mr-KKO</div>
        <div>Copyright by <?php echo $cpr ?></div>
        <div><?php echo $msg ?></div>
    </div>
</div>
</body>
</html>