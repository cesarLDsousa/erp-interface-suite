<?php

namespace CesarLDsousa\ErpInterfaceSuite;

use CesarLDsousa\ErpInterfaceSuite\Commands\ErpInterfaceSuiteCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ErpInterfaceSuiteServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('erp-interface-suite')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_erp-interface-suite_table')
            ->hasCommand(ErpInterfaceSuiteCommand::class);
    }
}
