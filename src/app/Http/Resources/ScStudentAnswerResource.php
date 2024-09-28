<?php

namespace ikepu_tp\LaravelScoreCrop\app\Http\Resources;

use Illuminate\Http\Request;

class ScStudentAnswerResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return parent::toArray($request);
    }
}
