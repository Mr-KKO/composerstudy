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
            font-size: 96px;
        }

        .slogan {
            font-size: 66px;
        }
    </style>

</head>
<body>
<div class="container">
    <div class="content">
        <div class="slogan"><?php echo $slogan ?></div>
    </div>
</div>
</body>
</html>