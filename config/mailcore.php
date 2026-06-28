<?php

declare(strict_types=1);

return [
    // Your Mailcore API key. Keep it in .env, never in source control.
    'api_key' => env('MAILCORE_API_KEY', ''),

    // Override only if you talk to a non-default Mailcore endpoint.
    'base_uri' => env('MAILCORE_BASE_URI', 'https://api.example.com'),

    // HTTP timeouts for the default client, in seconds (0 disables).
    // Raise the request timeout if you fetch large data dumps.
    'timeout' => env('MAILCORE_TIMEOUT', \Inboxcom\Mailcore\MailcoreClient::DEFAULT_TIMEOUT),
    'connect_timeout' => env('MAILCORE_CONNECT_TIMEOUT', \Inboxcom\Mailcore\MailcoreClient::DEFAULT_CONNECT_TIMEOUT),
];
