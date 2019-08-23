<?php

exec('python add.py simple.txt', $validation);

echo implode("\n", $validation);

//var_dump($validation);

?>