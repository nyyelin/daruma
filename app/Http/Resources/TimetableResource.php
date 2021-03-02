<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TimetableResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {


        $days = Array();
        
            for ($j=0; $j < $this->days->count() ; $j++) { 
                
                array_push($days,$this->days[$j]->name);  
            
               
        };


        return [
            'id' => $this->id,
            'name' => $this->name,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'start_time' => $this->start_time,
            'end_time' => $this->end_time,
            'duration' => $this->duration,
            'fee' => $this->fees,
            'status' => $this->status,
            'description' => $this->description,
            'level' => $this->level->name,
            'days' => $days,
        ];
    }
}
