<?php

namespace ikepu_tp\LaravelScoreCrop\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @property int $id
 * @property string $scExamId
 * @property int $user_id
 * @property string $title
 * @property string $description
 */
class ScExam extends Model
{
    use HasFactory;

    protected $casts = [
        'id' => 'integer',
        'scExamId' => 'string',
        'user_id' => 'integer',
        'title' => 'string',
        'description' => 'string',
        "created_at" => "datetime",
        "updated_at" => "datetime",
        "deleted_at" => "datetime",
    ];
}
