<?php

namespace ikepu_tp\LaravelScoreCrop\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @property int $id
 * @property string $scStudentId
 * @property int $user_id
 * @property int $group_id
 * @property int $grade
 * @property int $class
 * @property int $number
 * @property string $name
 * @property string $ruby_name
 *
 * @property \Illuminate\Database\Eloquent\Relations\BelongsTo $user
 * @property \Illuminate\Database\Eloquent\Relations\BelongsTo $group
 * @property \Illuminate\Database\Eloquent\Relations\HasMany|\Illuminate\Database\Eloquent\Collection<,ScStudentAnswer> $scStudentAnswerImages
 */
class ScStudent extends Model
{
    use HasFactory;


    protected $casts = [
        'id' => 'integer',
        'scStudentId' => 'string',
        'user_id' => 'integer',
        'group_id' => 'integer',
        'grade' => 'integer',
        'class' => 'integer',
        'number' => 'integer',
        'name' => 'encrypted',
        'ruby_name' => 'encrypted',
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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    function group(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        if (is_null(config("score-crop.group.model"))) throw new \Exception("group model is not defined in config/score-crop.php");
        return $this->belongsTo(config("score-crop.group.model"), "group_id", config("score-crop.group.id"));
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany|\Illuminate\Database\Eloquent\Collection<,ScStudentAnswer>
     */
    function scStudentAnswerImages(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ScStudentAnswerImage::class);
    }
}
