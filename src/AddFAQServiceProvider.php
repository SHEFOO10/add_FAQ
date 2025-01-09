<?php

namespace Aquadic\AddFAQ;

use Aquadic\AddFAQ\Facades\AddFAQ;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Str;
use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Aquadic\AddFAQ\Commands\AddFAQCommand;
use Symfony\Component\Console\Command\Command;

class AddFAQServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $this->package->name('add-faq');
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $this->publishes([
            __DIR__ . '/../Models/FAQ.php' => app_path('Models/FAQ.php'),
        ], 'add-faq-model');

        $package->publishableProviderName = 'AddFAQServiceProvider';

        $package
            ->name('add-faq')
//            ->hasConfigFile()
//            ->hasViews()
            ->hasMigration('create_f_a_q_s_table')
            ->runsMigrations()
            ->hasCommand(AddFAQCommand::class)
            ->hasInstallCommand(function(InstallCommand $command) {
                $command->hidden = false;
                $command
                    ->publishMigrations()
                    ->askToRunMigrations()
                    ->copyAndRegisterServiceProviderInApp();
                $command->endWith(function () use ($command) {
                    Artisan::call('add-faq:add', outputBuffer: $command->getOutput());
                });

            });
    }
}
