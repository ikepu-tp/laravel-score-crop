<?php

namespace ikepu_tp\LaravelScoreCrop\app\Http\Resources;

use ikepu_tp\LaravelScoreCrop\app\Models\ScExam;

/**
 * @property ScExam $resource
 */
class ScExamResource extends JsonResource
{

    function nullResource()
    {
        return null;
    }

    function createResource()
    {
        return [
            "scExamId" => $this->resource->scExamId,
            "title" => $this->resource->title,
            "description" => $this->resource->description,
        ];
    }
}