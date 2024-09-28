<?php

namespace ikepu_tp\LaravelScoreCrop\app\Models;

use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

/**
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 */
class DefaultModel extends Model
{
    protected $guarded = ["id", "created_at", "updated_at", "deleted_at",];

    /**
     * Uuidキー名
     *
     * @var string
     */
    protected $uuidKey;

    function __construct(array $attributes = [])
    {
        if (
            !is_null($this->uuidKey) &&
            $this->uuidKey !== "id" &&
            !isset($attributes[$this->uuidKey])
        ) $attributes[$this->uuidKey] = Str::uuid()->toString();

        parent::__construct($attributes);
    }

    static public function getUuidKey(): null|string
    {
        $static = new static;
        if (is_null($static->uuidKey)) return null;
        return $static->uuidKey;
    }

    /**
     * Uuidで取得
     *
     * @param string $uuid
     * @return
     */
    public function findUuid(?string $uuid)
    {
        $uuidKey = $this->uuidKey;

        if (is_null($uuidKey) || is_null($uuid)) throw new Exception("UUID Keyを設定してください");

        return $this->where($uuidKey, $uuid)->first();
    }

    /**
     * Uuidで取得
     *
     * @param string $uuid
     * @return self
     */
    static public function findByUuid(?string $uuid)
    {
        $model = new static;
        return $model->findUuid($uuid);
    }
}
