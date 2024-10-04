<?php

namespace ikepu_tp\LaravelScoreCrop\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @property int $id
 * @property string $scExamId
 * @property int $user_id
 * @property string $title
 * @property string $description
 *
 * @property \Illuminate\Database\Eloquent\Relations\BelongsTo $user
 * @property \Illuminate\Database\Eloquent\Relations\HasMany|\Illuminate\Database\Eloquent\Collection<,ScAnswer> $scAnswers
 * @property \Illuminate\Database\Eloquent\Relations\HasMany|\Illuminate\Database\Eloquent\Collection<,ScStudentAnswer> $scStudentAnswers
 */
class ScExam extends Model
{
    use HasFactory;

    protected $casts = [
        'id' => 'integer',
        'scExamId' => 'string',
        'user_id' => 'integer',
        'title' => 'string',
        'description' => 'string',
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
     * @return \Illuminate\Database\Eloquent\Relations\HasMany|\Illuminate\Database\Eloquent\Collection<,ScAnswer>
     */
    function scAnswers(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ScAnswer::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany|\Illuminate\Database\Eloquent\Collection<,ScStudentAnswer>
     */
    function scStudentAnswers(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ScStudentAnswer::class);
    }
}