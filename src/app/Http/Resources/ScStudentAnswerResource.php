<?php

namespace ikepu_tp\LaravelScoreCrop\app\Http\Resources;

class ScStudentAnswerResource extends JsonResource
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