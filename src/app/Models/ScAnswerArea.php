<?php

namespace ikepu_tp\LaravelScoreCrop\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @property int $id
 * @property string $scAnswerAreaId
 * @property int $user_id
 * @property int $sc_answer_image_id
 * @property int $big_number
 * @property int $middle_number
 * @property int $small_number
 * @property int $score
 * @property int $x
 * @property int $y
 * @property int $width
 * @property int $height
 */
class ScAnswerArea extends Model
{
    use HasFactory;

    protected $casts = [
        'id' => 'integer',
        'scAnswerAreaId' => 'string',
        'user_id' => 'integer',
        'sc_answer_image_id' => 'integer',
        'big_number' => 'integer',
        'middle_number' => 'integer',
        'small_number' => 'integer',
        'score' => 'integer',
        'x' => 'integer',
        'y' => 'integer',
        'width' => 'integer',
        'height' => 'integer',
        "created_at" => "datetime",
        "updated_at" => "datetime",
        "deleted_at" => "datetime",
    ];
}