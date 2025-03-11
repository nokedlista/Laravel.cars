<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class Install extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run the migrations and seeders for the app';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $servername = "localhost";
        $name = "root";
        $password = "";

        $conn = mysqli_connect($servername, $name, $password);
        if($conn->connect_error)
        {
            $sql = "CREATE DATABASE IF NOT EXISTS laravel_cars";
            if ($conn->query($sql) === TRUE)
            {
                $path = $this->laravel->databasePath().DIRECTORY_SEPARATOR.'seeders';
                $files = scandir($path);
                $filecount = count(glob($path . "*"));
                $bar = $this->output->createProgressBar($filecount);
                $this->output->info('Database created!');

                $bar->start();
                Artisan::call('migrate');
                $bar->advance();
                $this->output->info('Migration complete!');

                foreach ($files as $fill) 
                {
                    $file = strpos($fill, '.');
                    Artisan::call('db:seed --class='.$file);
                    $bar->advance();
                    $this->output->info($file.' complete!');
                }
                $bar->finish();
                $this->output->info('Install complete!');

                mysqli_close($conn);
            } 
        }
        else
        {
            $this->output->info('Database already exists!');
        }
    }
}