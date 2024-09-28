<?php

namespace ikepu_tp\LaravelScoreCrop\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

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


    protected $casts = [
        'id' => 'integer',
        'scStudentAnswerTrimmedImageId' => 'string',
        'user_id' => 'integer',
        'sc_student_answer_image_id' => 'integer',
        'sc_answer_area_id' => 'integer',
        'file_id' => 'integer',
        'score' => 'integer',
        'feedback' => 'string',
        "created_at" => "datetime",
        "updated_at" => "datetime",
        "deleted_at" => "datetime",
    ];
}
