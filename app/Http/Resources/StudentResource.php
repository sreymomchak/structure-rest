<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // if (is_null($this->score)) {
        //     $status = 'No Score';
        // } else {
        //     $status = $this->score >= 50 ? 'Pass' : 'Fail';
        // }

        // $status = $this->score >= 50 ? 'Pass' : 'Fail';
        
        return [
            'id' => $this->id,
            'name' => $this->name,
            'age' => $this->age,
            'province' => $this->province,
            'score' => $this->score,
            'status' => $this->status,
            'phone_number' => $this->phone_number,

        ];
    }
}
