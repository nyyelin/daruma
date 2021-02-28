<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Timetable;
use App\Student;
use Carbon;

class ReportCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'everyMinute:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Finished By end date';

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
     * @return int
     */
    public function handle()
    {
        // dd('hi');
        $timetables = Timetable::where('end_date','<',Carbon\Carbon::today())->get();
        // dd(Carbon\Carbon::today());
        foreach ($timetables as $timetable) {
            foreach($timetable->students as $student){
                if($student->pivot->status == "Active"){
                    $student->pivot->status = 'Finished';
                    $student->pivot->save();
                }
            }
        }
    }
}
