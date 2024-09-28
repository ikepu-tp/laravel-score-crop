<?php

namespace ikepu_tp\LaravelScoreCrop\app\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property \Carbon\Carbon $deleted_at
 */
class Model extends DefaultModel
{
    use SoftDeletes;

    protected $uuidKey = "id";

    protected $casts = [
        "created_at" => "datetime",
        "updated_at" => "datetime",
        "deleted_at" => "datetime",
    ];

    public function getRouteKeyName()
    {
        return $this->uuidKey;
    }

    protected function casts(): array
    {
        return $this->casts;
    }
}
