<?php

namespace ikepu_tp\LaravelScoreCrop\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}