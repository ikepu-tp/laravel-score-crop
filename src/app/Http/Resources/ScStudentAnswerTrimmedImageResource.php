<?php

namespace ikepu_tp\LaravelScoreCrop\app\Http\Resources;

class ScStudentAnswerTrimmedImageResource extends JsonResource
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