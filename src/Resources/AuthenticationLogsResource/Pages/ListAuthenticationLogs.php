<?php

declare(strict_types=1);

namespace Akira\FilamentAuthLogs\Resources\AuthenticationLogsResource\Pages;

use Akira\FilamentAuthLogs\Resources\AuthenticationLogsResource\AuthenticationLogsResource;
use Filament\Resources\Pages\ListRecords;

class ListAuthenticationLogs extends ListRecords
{
    protected static string $resource = AuthenticationLogsResource::class;
}
