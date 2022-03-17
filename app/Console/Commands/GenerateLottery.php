<?php

namespace App\Console\Commands;

use App\Models\Rand;
use Illuminate\Console\Command;

class GenerateLottery extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:lottery';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'generate lottery values';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $buy="1.".(string)rand(1,9).(string)rand(1,9).(string)rand(1,9);
        $sell="2.1".(string)rand(1,9).(string)rand(1,9);
        $three=substr($buy, -3);
        $two=substr($buy, -1).substr($sell,-1);

        $new_lottery=new Rand;
        $new_lottery->buy=(float)$buy;
        $new_lottery->sell=(float)$sell;
        $new_lottery->three=(float)$three;
        $new_lottery->two=(float)$two;
        $new_lottery->save();

        $this->info("successfully generated new lottery");
    }
}
