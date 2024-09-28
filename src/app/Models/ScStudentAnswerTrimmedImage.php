<?php

namespace ikepu_tp\LaravelScoreCrop\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $scStudentAnswerTrimmedImageId
 * @property int $user_id
 * @property int $sc_student_answer_image_id
 * @property int $sc_answer_area_id
 * @property int $file_id
 * @property int $score
 * @property string $feedback
 */
class ScStudentAnswerTrimmedImage extends Model
{
    use HasFactory;
}