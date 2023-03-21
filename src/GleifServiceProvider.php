<?php

namespace K2ouMais\Gleif;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use K2ouMais\Gleif\Commands\GleifCommand;

class GleifServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('gleif-sdk')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_gleif-sdk_table')
            ->hasCommand(GleifCommand::class);
    }
}
