<?php

namespace ikepu_tp\LaravelScoreCrop\app\Http\Resources;

use ikepu_tp\LaravelScoreCrop\app\Models\ScAnswerArea;

/**
 * @property ScAnswerArea $resource
 */
class ScAnswerAreaResource extends JsonResource
{

    function nullResource()
    {
        return null;
    }

    function createResource()
    {
        return [
            "scAnswerAreaId" => $this->resource->scAnswerAreaId,
            "big_number" => $this->resource->big_number,
            "middle_number" => $this->resource->middle_number,
            "small_number" => $this->resource->small_number,
            "score" => $this->resource->score,
            "x" => $this->resource->x,
            "y" => $this->resource->y,
            "width" => $this->resource->width,
            "height" => $this->resource->height,
        ];
    }
}