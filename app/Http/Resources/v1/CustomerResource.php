<?php

namespace App\Http\Resources\v1;

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
        //trả về tất cả thông tin nằm trong mảng data[]. data[] là mảng các đối tượng
        return parent::toArray($request);

        // trả về từng thuộc tính theo ý muốn
        // return [
        //     'customer_name'=>$this->customer_name
        // ];
    }
}
