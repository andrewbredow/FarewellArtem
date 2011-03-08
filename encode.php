<?php

// BASE64 ENCODE IMAGES:

$data = file_get_contents('ufo_explosion.png');
echo base64_encode($data);