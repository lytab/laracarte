<?php
if (! function_exists('"page_title"')){
function page_title($title=""){
    $name=config('app.name', 'Laracarte');
    return  $title.' | '.$name ;  
}
}