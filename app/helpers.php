<?php

function api($url, $method, $data = null)
{
    if ($method == 'GET') {
        $request = Request::create($url, 'GET');
    } else {
        $request = Request::create($url, 'POST', $data);
    }


    $response = Route::dispatch($request);
    
    return json_decode($response->getContent());
}
