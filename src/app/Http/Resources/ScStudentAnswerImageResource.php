<?php

namespace ikepu_tp\LaravelScoreCrop\app\Http\Resources;

class ScStudentAnswerImageResource extends JsonResource
{

    function nullResource()
    {
        return null;
    }

    function createResource()
    {
        return $this->resource;
    }
}