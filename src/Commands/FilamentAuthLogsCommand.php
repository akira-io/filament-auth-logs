<?php

namespace Akira\FilamentAuthLogs\Commands;

use Illuminate\Console\Command;

class FilamentAuthLogsCommand extends Command
{
    public $signature = 'filament-auth-logs:install';

    public $description = 'Install the Filament Auth Logs package';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
