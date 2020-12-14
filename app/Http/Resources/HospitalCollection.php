<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class HospitalCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'message' => 'Hospital',
            'code' => 200,
            'error' => false,
            'data' => $this->collection->transform(static function ($hospital){
                return [
                    'id' => $hospital->id,
                    'hospital_name' => $hospital->hospital_name,
                    
                    'department' => $hospital->departments,
                ];
            })
        ];
    }
}
