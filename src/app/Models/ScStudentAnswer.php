<?php

namespace ikepu_tp\LaravelScoreCrop\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @property int $id
 * @property string $scStudentAnswerId
 * @property int $user_id
 * @property int $sc_exam_id
 * @property int $file_id
 *
 * @property \Illuminate\Database\Eloquent\Relations\BelongsTo $user
 * @property \Illuminate\Database\Eloquent\Relations\BelongsTo|ScExam $scExam
 * @property \Illuminate\Database\Eloquent\Relations\BelongsTo|\ikepu_tp\FileLibrary\app\Models\File $file
 */
class ScStudentAnswer extends Model
{
    use HasFactory;


    protected $casts = [
        'id' => 'integer',
        'scStudentAnswerId' => 'string',
        'user_id' => 'integer',
        'sc_exam_id' => 'integer',
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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo|ScExam
     */
    function scExam(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(ScExam::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo|\ikepu_tp\FileLibrary\app\Models\File
     */
    function file(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(config("score-crop.file.model"), "file_id", config("score-crop.file.id"));
    }
}