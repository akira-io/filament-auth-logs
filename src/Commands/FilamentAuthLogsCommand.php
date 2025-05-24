<?php

namespace Akira\FilamentAuthLogs\Commands;

use Illuminate\Console\Command;

class FilamentAuthLogsCommand extends Command
{
    public $signature = 'filament-auth-logs';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
