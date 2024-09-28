<?php

namespace ikepu_tp\LaravelScoreCrop\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @property int $id
 * @property string $scAnswerImageId
 * @property int $user_id
 * @property int $sc_answer_id
 * @property int $page
 * @property int $file_id
 */
class ScAnswerImage extends Model
{
    use HasFactory;


    protected $casts = [
        'id' => 'integer',
        'scAnswerImageId' => 'string',
        'user_id' => 'integer',
        'sc_answer_id' => 'integer',
        'page' => 'integer',
        'file_id' => 'integer',
        "created_at" => "datetime",
        "updated_at" => "datetime",
        "deleted_at" => "datetime",
    ];
}
