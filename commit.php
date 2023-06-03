<?php

$default_port = 5000;
$names = ['Ben', 'Shea', 'Mike'];

$messages_file = file(__DIR__."/commit_messages.txt");
$messages = [];

// generate a hashtable for all the messages
foreach ($messages_file as $line) {
    $messages[md5($line)] = $line;
}


function fill_line($message) {
    global $names;
    $message = preg_replace('#XNAMEX#', $names[array_rand($names)], $message);
    $message = preg_replace('#XUPPERNAMEX#', strtoupper($names[array_rand($names)]), $message);
    $message = preg_replace('#XLOWERNAMEX#', strtolower($names[array_rand($names)]), $message);
    $message = preg_replace('#XNUMX#', rand(), $message);

    return $message;
}

function return_message() {
    global $messages;
    $hash = array_rand($messages);
    $message = fill_line($messages[$hash]);

    return [$hash, $message];
}