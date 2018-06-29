<?php

return [

    /*
    |--------------------------------------------------------------------------
    | GETRESPONSE API URL
    |--------------------------------------------------------------------------
    |
    | apiUrl is GetResponse API URL. The current API URL is: https://api.getresponse.com/v3
    | You should change apiUrl only when GetResponse change.
    |
    */

    'apiUrl' => env('GETRESPONSE_APIURL', 'https://api.getresponse.com/v3'),
    /*
    |--------------------------------------------------------------------------
    | GETRESPONSE API KEY
    |--------------------------------------------------------------------------
    |
    | apiKey is GetResponse API KEY. This key is provided when you create new account in GetResponse.
    | https://www.getresponse.com/help/glossary/api-key.html
    |
    */
    'apiKey' => env('GETRESPONSE_APIKEY')
];