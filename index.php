<?php 
session_start();
$_SESSION['user'] = (isset($_GET['user']) === true) ? (int)$_GET['user'] : 0;

require 'core/init.php';


$chat = new Chat(); 

?> <pre><?php //print_r($chat->fetchMessages());?></pre><?

//$chat->throwMessages(2, 'Another new message!');

?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ajax Chat</title>
        <link rel='stylesheet' href='css/styles.css'>
    </head>
    <body>

        <div class="chat">
            <div class="message">

            </div>
            <textarea class="entry" placeholder="Type here and it Return. Use Shift + Retrun for a new line"></textarea>
          
        </div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="js/chat.js"></script>
    </body>
</html>
