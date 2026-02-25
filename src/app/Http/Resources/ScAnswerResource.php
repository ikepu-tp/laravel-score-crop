<?php

namespace ikepu_tp\LaravelScoreCrop\app\Http\Resources;

use ikepu_tp\LaravelScoreCrop\app\Models\ScAnswer;

/**
 * @property ScAnswer $resource
 */
class ScAnswerResource extends JsonResource
{

    function nullResource()
    {
        return null;
    }

    function createResource()
    {
        $file_resource = config("score-crop.file.resource");
        return [
            "scAnswerId" => $this->resource->scAnswerId,
            "pdf" => is_null($this->resource->file_id) ? null : new $file_resource($this->resource->file),
        ];
    }
}