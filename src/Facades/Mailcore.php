<?php

declare(strict_types=1);

namespace Inboxcom\Mailcore\Laravel\Facades;

use Inboxcom\Mailcore\MailcoreClient;
use Inboxcom\Mailcore\Resource\Datadump;
use Inboxcom\Mailcore\Resource\Domains;
use Inboxcom\Mailcore\Resource\Mailboxplans;
use Inboxcom\Mailcore\Resource\Mailfilter;
use Inboxcom\Mailcore\Resource\Reports;
use Inboxcom\Mailcore\Resource\Users;
use Illuminate\Support\Facades\Facade;

/**
 * @method static Users        users()
 * @method static Domains      domains()
 * @method static Mailboxplans mailboxplans()
 * @method static Mailfilter   mailfilter()
 * @method static Reports      reports()
 * @method static Datadump     datadump()
 *
 * @see MailcoreClient
 */
final class Mailcore extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return MailcoreClient::class;
    }
}
