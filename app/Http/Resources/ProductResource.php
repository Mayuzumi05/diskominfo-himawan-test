<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    //define properti
    public $message;
    public $resource;

    /**
     * __construct
     *
     * @param  mixed $message
     * @param  mixed $resource
     * @return void
     */
    public function __construct($message, $resource)
    {
        parent::__construct($resource);
        $this->message = $message;
    }

    /**
     * toArray
     *
     * @param  mixed $request
     * @return array
     */
    public function toArray(Request $request): array
    {
        return [
            'message'   => $this->message,
            'data'      => $this->resource
        ];
    }
}
