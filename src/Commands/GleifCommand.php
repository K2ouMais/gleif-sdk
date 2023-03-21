<?php

namespace K2ouMais\Gleif\Commands;

use Illuminate\Console\Command;

class GleifCommand extends Command
{
    public $signature = 'gleif-sdk';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
