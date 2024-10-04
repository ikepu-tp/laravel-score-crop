<?php

namespace ikepu_tp\LaravelScoreCrop\app\Models;

/**
 * @property \Illuminate\Database\Eloquent\Relations\HasMany|\Illuminate\Database\Eloquent\Collection<,ScAnswer> $scAnswers
 * @property \Illuminate\Database\Eloquent\Relations\HasMany|\Illuminate\Database\Eloquent\Collection<,ScAnswerImage> $scAnswerImages
 * @property \Illuminate\Database\Eloquent\Relations\HasMany|\Illuminate\Database\Eloquent\Collection<,ScStudentAnswer> $scStudentAnswers
 * @property \Illuminate\Database\Eloquent\Relations\HasMany|\Illuminate\Database\Eloquent\Collection<,ScStudentAnswerImage> $scStudentAnswerImages
 * @property \Illuminate\Database\Eloquent\Relations\HasMany|\Illuminate\Database\Eloquent\Collection<,ScStudentAnswerTrimmedImage> $scStudentAnswerTrimmedImages
 */
trait FileHasMany
{

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany|\Illuminate\Database\Eloquent\Collection<,ScAnswer>
     */
    function scAnswers(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ScAnswer::class, "file_id", config("score-crop.file.id"));
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany|\Illuminate\Database\Eloquent\Collection<,ScAnswerImage>
     */
    function scAnswerImages(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ScAnswerImage::class, "file_id", config("score-crop.file.id"));
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany|\Illuminate\Database\Eloquent\Collection<,ScStudentAnswer>
     */
    function scStudentAnswers(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ScStudentAnswer::class, "file_id", config("score-crop.file.id"));
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany|\Illuminate\Database\Eloquent\Collection<,ScStudentAnswerImage>
     */
    function scStudentAnswerImages(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ScStudentAnswerImage::class, "file_id", config("score-crop.file.id"));
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany|\Illuminate\Database\Eloquent\Collection<,ScStudentAnswerTrimmedImage>
     */
    function scStudentAnswerTrimmedImages(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ScStudentAnswerTrimmedImage::class, "sc_student_answer_image_id", "id");
    }
}