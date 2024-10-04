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
 *
 * @property \Illuminate\Database\Eloquent\Relations\BelongsTo $user
 * @property \Illuminate\Database\Eloquent\Relations\BelongsTo|ScAnswer $scAnswer
 * @property \Illuminate\Database\Eloquent\Relations\BelongsTo|\ikepu_tp\FileLibrary\app\Models\File $file
 * @property \Illuminate\Database\Eloquent\Relations\HasMany|\Illuminate\Database\Eloquent\Collection<,ScAnswerArea> $scAnswerAreas
 * @property \Illuminate\Database\Eloquent\Relations\HasMany|\Illuminate\Database\Eloquent\Collection<,ScStudentAnswerImage> $scStudentAnswerImages
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

    function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        $user_model = config("score-crop.user.model");
        if (is_null($user_model)) throw new \Exception("user model is not defined in config/score-crop.php");
        return $this->belongsTo($user_model, "user_id", config("score-crop.user.id"));
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo|ScAnswer
     */
    function scAnswer(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(ScAnswer::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo|\ikepu_tp\FileLibrary\app\Models\File
     */
    function file(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(config("score-crop.file.model"), "file_id", config("score-crop.file.id"));
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany|\Illuminate\Database\Eloquent\Collection<,ScAnswerArea>
     */
    function scAnswerAreas(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ScAnswerArea::class, "sc_answer_image_id", "id");
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany|\Illuminate\Database\Eloquent\Collection<,ScStudentAnswerImage>
     */
    function scStudentAnswerImages(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ScStudentAnswerImage::class, "sc_answer_image_id", "id");
    }
}