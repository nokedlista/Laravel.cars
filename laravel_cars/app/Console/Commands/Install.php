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
        $path = $this->laravel->databasePath().DIRECTORY_SEPARATOR.'seeders';
        $filecount = count(glob($path . "*"));

        $bar = $this->output->createProgressBar($filecount);
        $bar->start();
        Artisan::call('migrate');
        $this->output->info('Migration complete!');
        $bar->advance();









        //LARAVEL FILE-AL
        for($i = 0; $i < $filecount; $i++)
        {
            $handle = opendir($path);
            $file = readdir($handle);
            $STDERR = fopen("php://stderr", "w");
            fwrite($STDERR, "\n".$file."\n\n");
            fclose($STDERR);
            closedir($handle);

            if ($handle = opendir($path)) {
                while (false !== ($file = readdir($handle))) {
                    if ('.' === $file) continue;
                    if ('..' === $file) continue;
                    $STDERR = fopen("php://stderr", "w");
                    fwrite($STDERR, "\n".$file."\n\n");
                    fclose($STDERR);
                    // Artisan::call('db:seed --class=BodySeeder');
                    
                }
                closedir($handle);
            }
        }
        
        
        


        // Artisan::call('db:seed --class=BodySeeder');
        // $this->output->info('BodySeeder complete!');
        // $bar->advance();

        // Artisan::call('db:seed --class=MakerSeeder');
        // $bar->advance();
        // $this->output->info('MakerSeeder complete!');

        // $bar->finish();
        // $this->output->info('Install complete!');
    }
}