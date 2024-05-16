<?php

return [

    /*
    |--------------------------------------------------------------------------
    | OpenAI API Key
    |--------------------------------------------------------------------------
    |
    | Your OpenAI API key. You can find your API key on your OpenAI dashboard.
    |
    */

    'api_key' => env('OPENAI_API_KEY'),

    /*
    |--------------------------------------------------------------------------
    | OpenAI Organization
    |--------------------------------------------------------------------------
    |
    | If you belong to multiple organizations, you can set an organization ID
    | to specify which one you want to use for your API requests.
    |
    */

    'organization' => env('OPENAI_ORGANIZATION'),

    /*
    |--------------------------------------------------------------------------
    | Request Timeout
    |--------------------------------------------------------------------------
    |
    | The maximum number of seconds to wait for a response from OpenAI. By
    | default, this value is 30 seconds. Adjust this as needed for your app.
    |
    */

    'request_timeout' => env('OPENAI_REQUEST_TIMEOUT', 30),

    /*
    |--------------------------------------------------------------------------
    | Max Retries
    |--------------------------------------------------------------------------
    |
    | The number of times to retry a request in case of a transient failure.
    | By default, this value is 1 retry. Adjust this as needed for your app.
    |
    */

    'max_retries' => env('OPENAI_MAX_RETRIES', 1),

];
