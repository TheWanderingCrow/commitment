<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Commit Message Generator</title>
    <link rel="author" href="/humans.txt" />
    <style>
        body {
            font-family: 'Lucida Console', 'Courier New', monospace;
            font-size: 26pt;
            line-height: 1.2em;
        }
        #content {
            width: 760px;
            text-align: left;
            margin: 1em auto;
        }
        .permalink {
            font-size: .5em;
            color: #ddd;
            line-height: 1em;
        }
        .permalink a {
            text-decoration: none;
            color: inherit;
        }
        .permalink a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<?php
require "commit.php";
$message = return_message();
?>
<body>
    <div id="content">
        <p><?php echo $message[1];?></p>
        <p class="permalink">
            [<a href="/?hardlink=<?php echo $message[0];?>">permalink</a>]
        </p>
    </div>
</body>
<!-- Like what you see? http://github.com/ngerakines/commitment -->
</html>
