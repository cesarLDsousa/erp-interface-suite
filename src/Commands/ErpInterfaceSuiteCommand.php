<?php

namespace CesarLDsousa\ErpInterfaceSuite\Commands;

use Illuminate\Console\Command;

class ErpInterfaceSuiteCommand extends Command
{
    public $signature = 'erp-interface-suite';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
