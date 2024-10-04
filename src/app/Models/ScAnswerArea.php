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
 *
 * @property \Illuminate\Database\Eloquent\Relations\BelongsTo $user
 * @property \Illuminate\Database\Eloquent\Relations\BelongsTo|ScAnswerImage $scAnswerImage
 * @property \Illuminate\Database\Eloquent\Relations\HasMany|\Illuminate\Database\Eloquent\Collection<,ScStudentAnswerTrimmedImage> $scStudentAnswerTrimmedImages
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

    function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        $user_model = config("score-crop.user.model");
        if (is_null($user_model)) throw new \Exception("user model is not defined in config/score-crop.php");
        return $this->belongsTo($user_model, "user_id", config("score-crop.user.id"));
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo|ScAnswerImage
     */
    function scAnswerImage(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(ScAnswerImage::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany|\Illuminate\Database\Eloquent\Collection<,ScStudentAnswerTrimmedImage>
     */
    function scStudentAnswerTrimmedImages(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ScStudentAnswerTrimmedImage::class, "sc_student_answer_image_id", "id");
    }
}
