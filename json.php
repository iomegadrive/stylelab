<?php

echo '<pre>';
print_r(json_decode(file_get_contents('https://api.instagram.com/v1/tags/fashion/media/recent?access_token=282652.f59def8.c140637f88d04f5ab7123e190adf55e5')));
echo '</pre>';



?>
