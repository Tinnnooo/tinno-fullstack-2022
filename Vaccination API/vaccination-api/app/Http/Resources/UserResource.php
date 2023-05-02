<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $regional = [
            "id" => $this->regional->id,
            "province" => $this->regional->province,
            "district" => $this->regional->district,
        ];

        return [
            "name" => $this->name,
            "born_date" => $this->born_date,
            "gender" => $this->gender,
            "address" => $this->address,
            "token" => $this->login_tokens,
            "regional" => $regional,
        ];
    }
}
