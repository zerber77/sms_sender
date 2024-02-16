<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class SmsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $dt = Carbon::create($this->created_at);
        $udt = Carbon::create($this->updated_at);
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'user_name' => $this->user->name,
            'phone' => $this->user->phone,
            'text' => $this->text,
            'status' => $this->status,
            'mode' => $this->mode,
            'created_at' => $dt->toDayDateTimeString(),
            'updated_at' => $udt->toDayDateTimeString(),

        ];
    }
}
