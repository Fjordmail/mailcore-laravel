<?php

declare(strict_types=1);

return [
    // Your Mailcore API key. Keep it in .env, never in source control.
    'api_key' => env('MAILCORE_API_KEY', ''),

    // Override only if you talk to a non-default Mailcore endpoint.
    'base_uri' => env('MAILCORE_BASE_URI', 'https://api.example.com'),
];
