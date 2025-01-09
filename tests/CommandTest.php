<?php

test('console command', function () {
    $this->artisan('add-faq')
        ->expectsQuestion('Which panel do you want to install the package for?', 'user')
        ->expectsOutput('Installing for panel: user')
        ->assertExitCode(0);
});
