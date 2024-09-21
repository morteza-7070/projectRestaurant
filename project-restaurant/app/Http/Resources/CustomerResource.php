<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {

        return [
            'data' => [
                'id' => $this->id,
                'name' => $this->name,
                'email' => $this->email,
                'phoneNumber' => $this->phoneNumber,
                'address' => $this->address,
                'birthday' => $this->birthday,
                'password'=>$this->password,
            ],
            'meta' => [
                'total' => $this->count(),
//                'current_page' => $this->currentPage(),
//                'last_page' => $this->lastPage(),
            ],
        ];
    }
}
