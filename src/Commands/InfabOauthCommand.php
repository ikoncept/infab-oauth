<?php

namespace Ikoncept\InfabOauth\Commands;

use Illuminate\Console\Command;

class InfabOauthCommand extends Command
{
    public $signature = 'infab-oauth';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
