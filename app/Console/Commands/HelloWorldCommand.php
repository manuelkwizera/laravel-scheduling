<?php

//* * * * * cd /var/www/html/laravel-scheduling && php artisan schedule:run >> /var/www/html/laravel-scheduling.log 2>&1
//crontab -e


namespace App\Console\Commands;

use Illuminate\Console\Command;

class HelloWorldCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    // protected $signature = 'app:hello-world-command';

    /**
     * The console command description.
     *
     * @var string
     */
    // protected $description = 'Command description';

    /**
     * Execute the console command.
     */

    protected $signature = 'hello:world';
    protected $description = 'Prints "Hello, World!" to the console';

    public function handle()
    {
        $this->line('Hello, World!');
    }
}
