<?php

namespace ikepu_tp\LaravelScoreCrop\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @property int $id
 * @property string $scAnswerId
 * @property int $user_id
 * @property int $sc_exam_id
 * @property int $file_id
 */
class ScAnswer extends Model
{
    use HasFactory;


    protected $casts = [
        'id' => 'integer',
        'scAnswerId' => 'string',
        'user_id' => 'integer',
        'sc_exam_id' => 'integer',
        'file_id' => 'integer',
        "created_at" => "datetime",
        "updated_at" => "datetime",
        "deleted_at" => "datetime",
    ];
}
