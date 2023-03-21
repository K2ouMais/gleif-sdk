<?php

namespace K2ouMais\Gleif;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class GleifServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('gleif-sdk')
            ->hasConfigFile();
    }
}
