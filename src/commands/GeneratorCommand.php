<?php

namespace Illustrate\Concept\Commands;

use Illuminate\Console\Command;

class GeneratorCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'concept:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Concept illustrator command.';

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
        \Storage::delete('.githash');
    }
}
