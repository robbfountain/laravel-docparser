<?php


namespace onethirtyone\docparser;


use App\Backup;
use Illuminate\Console\Command;

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
       //
    }

}