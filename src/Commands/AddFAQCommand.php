<?php

namespace Aquadic\AddFAQ\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Str;

class AddFAQCommand extends Command
{
    public $signature = 'add-faq:add';
    public $description = 'My command';

    public function handle(): int
    {
        $this->call('vendor:publish', ['--tag' => 'add-faq-model']);
        $panel = $this->ask('Which panel do you want to install the package for?', 'admin');
        $this->publishFilamentResource($panel);
        return self::SUCCESS;
    }

    public function publishFilamentResource(string $panel): void
    {
        $filesystem = new Filesystem();

        $panel = Str::studly($panel);
        $resourcesDir = __DIR__.'/../../resources/Filament';
        $destinationDir = app_path("Filament/$panel/Resources");


        // ensure Panel Directory exists
        $filesystem->ensureDirectoryExists($destinationDir);
        foreach ($filesystem->allFiles($resourcesDir) as $file) {
            // if there's a directory inside the resource dir
            $dir = trim(substr(Str::after($file->getPath(), $resourcesDir), 1));


            $content = $file->getContents();
            // replace {{panel}} the name of the panel
            $content = str_replace('{{panel}}', $panel, $content);

            // remove stub extension from the file
            $filename = Str::before($file->getFilename(), '.stub');

            if ($dir) {
                $filesystem->ensureDirectoryExists($destinationDir . "/FAQResource/$dir");
            }
            $filename = $destinationDir. ($dir ? "/FAQResource/$dir": '') ."/$filename";
            $filesystem->put($filename, $content);
            $this->line("File [$filename] Added $panel Panel");
        }



//        $this->publishes([
//            $resourcesDir => app_path('Filament/Resources/'.$panel),
//        ], 'add-faq-filament-resource');
    }
}
