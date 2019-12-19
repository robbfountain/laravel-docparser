<?php


namespace onethirtyone\docparser;


use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class InstallerCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'docparser:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Installs the docparser package';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        if (!file_exists(resource_path('docs'))) {
            $this->comment('Creating Docs Directory');
            mkdir(resource_path('docs'));
        }

        $this->comment('Publishing Views');
        Artisan::call('vendor:publish',['--tag' => 'docparser-views']);

        $this->comment('Publishing Assets');
        Artisan::call('vendor:publish',['--tag' => 'docparser-public']);
    }

}