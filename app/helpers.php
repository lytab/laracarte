<?php
if (! function_exists('"page_title"')){
function page_title($title=""){
    $name=config('app.name', 'Laracarte');
    return  $title.' | '.$name ;  
}
}

if (! function_exists('"set_active_route"')){
    function set_active_route($route){
        return Route::is($route)? 'active':'';
    }
    }