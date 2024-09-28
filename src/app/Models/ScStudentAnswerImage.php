<?php

namespace ikepu_tp\LaravelScoreCrop\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $scStudentAnswerImageId
 * @property int $user_id
 * @property int $sc_answer_image_id
 * @property int $sc_student_id
 * @property int $file_id
 */
class ScStudentAnswerImage extends Model
{
    use HasFactory;
}