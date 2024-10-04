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
 *
 * @property \Illuminate\Database\Eloquent\Relations\BelongsTo $user
 * @property \Illuminate\Database\Eloquent\Relations\BelongsTo|ScStudentAnswerImage $scStudentAnswerImage
 * @property \Illuminate\Database\Eloquent\Relations\BelongsTo|ScAnswerArea $scAnswerArea
 * @property \Illuminate\Database\Eloquent\Relations\BelongsTo|\ikepu_tp\FileLibrary\app\Models\File $file
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

    function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        $user_model = config("score-crop.user.model");
        if (is_null($user_model)) throw new \Exception("user model is not defined in config/score-crop.php");
        return $this->belongsTo($user_model, "user_id", config("score-crop.user.id"));
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo|ScStudentAnswerImage
     */
    function scStudentAnswerImage(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(ScStudentAnswerImage::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo|ScAnswerArea
     */
    function scAnswerArea(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(ScAnswerArea::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo|\ikepu_tp\FileLibrary\app\Models\File
     */
    function file(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(config("score-crop.file.model"), "file_id", config("score-crop.file.id"));
    }
}