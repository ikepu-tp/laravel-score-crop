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

    public function getRouteKeyName()
    {
        return $this->uuidKey;
    }
}