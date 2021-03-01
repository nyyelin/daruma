<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Student;
class StudentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {

        $timetable_id = Array();
        for ($i=0; $i < $this->timetables->count() ; $i++) { 
                $timetable_id = $this->timetables[$i]->timetable_id;  
        };


        $name = Array();
        for ($i=0; $i < $this->timetables->count() ; $i++) { 
                $name = $this->timetables[$i]->name;  
        };



        $start_date = Array();
        for ($i=0; $i < $this->timetables->count() ; $i++) { 
                $start_date = $this->timetables[$i]->start_date;  
        };

        $end_date = Array();
        for ($i=0; $i < $this->timetables->count() ; $i++) { 
                $end_date = $this->timetables[$i]->end_date;  
        };


        $start_time = Array();
        for ($i=0; $i < $this->timetables->count() ; $i++) { 
                $start_time = $this->timetables[$i]->start_time;  
        };

        $end_time = Array();
        for ($i=0; $i < $this->timetables->count() ; $i++) { 
                $end_time = $this->timetables[$i]->end_time;  
        };

        $level = Array();
        for ($i=0; $i < $this->timetables->count() ; $i++) { 
                $level = $this->timetables[$i]->level->name;  
        };
       
        $days = Array();
        for ($i=0; $i < $this->timetables->count() ; $i++) { 
            for ($j=0; $j < $this->timetables[$i]->days->count() ; $j++) { 
                
                array_push($days,$this->timetables[$i]->days[$j]->name);  
            };
               
        };

        // $day = implode(',',$days);


       return  [
            'id' => $this->id,
            'student_name' => $this->user->name,
            'student_phone' => $this->user->phone,
            'student_email' => $this->user->email,
            'student_codeno' => $this->codeno,
            'student_address' => $this->address,
            'student_dob' => $this->dob,
            'student_photo' => $this->photo,
            'timetable_id' => $timetable_id,
            'timetable_name' => $name,
            'timetable_start_date' => $start_date,
            'timetable_end_date' => $end_date,
            'timetable_start_time' => $start_time,
            'timetable_end_time' => $end_time,
            'timetable_level' => $level,
            'timetable_days' => $days,

       ];
    }
}
