<?php

namespace ikepu_tp\LaravelScoreCrop\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

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


    protected $casts = [
        'id' => 'integer',
        'scStudentAnswerImageId' => 'string',
        'user_id' => 'integer',
        'sc_answer_image_id' => 'integer',
        'sc_student_id' => 'integer',
        'file_id' => 'integer',
        "created_at" => "datetime",
        "updated_at" => "datetime",
        "deleted_at" => "datetime",
    ];
}
