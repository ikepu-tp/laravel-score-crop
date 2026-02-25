<?php

namespace ikepu_tp\LaravelScoreCrop\app\Http\Resources;

use ikepu_tp\LaravelScoreCrop\app\Models\ScAnswerImage;

/**
 * @property ScAnswerImage $resource
 */
class ScAnswerImageResource extends JsonResource
{

    function nullResource()
    {
        return null;
    }

    function createResource()
    {
        $file_resource = config("score-crop.file.resource");
        return [
            "scAnswerImageId" => $this->resource->scAnswerImageId,
            "page" => $this->resource->page,
            "image" => new $file_resource($this->resource->file),
        ];
    }
}