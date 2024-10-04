<?php

namespace ikepu_tp\LaravelScoreCrop\app\Models;

/**
 * @property \Illuminate\Database\Eloquent\Relations\HasMany|\Illuminate\Database\Eloquent\Collection<,ScExam> $scExams
 * @property \Illuminate\Database\Eloquent\Relations\HasMany|\Illuminate\Database\Eloquent\Collection<,ScAnswer> $scAnswers
 * @property \Illuminate\Database\Eloquent\Relations\HasMany|\Illuminate\Database\Eloquent\Collection<,ScAnswerImage> $scAnswerImages
 * @property \Illuminate\Database\Eloquent\Relations\HasMany|\Illuminate\Database\Eloquent\Collection<,ScAnswerArea> $scAnswerAreas
 * @property \Illuminate\Database\Eloquent\Relations\HasMany|\Illuminate\Database\Eloquent\Collection<,ScStudent> $scStudents
 * @property \Illuminate\Database\Eloquent\Relations\HasMany|\Illuminate\Database\Eloquent\Collection<,ScStudentAnswer> $scStudentAnswers
 * @property \Illuminate\Database\Eloquent\Relations\HasMany|\Illuminate\Database\Eloquent\Collection<,ScStudentAnswerImage> $scStudentAnswerImages
 * @property \Illuminate\Database\Eloquent\Relations\HasMany|\Illuminate\Database\Eloquent\Collection<,ScStudentAnswerTrimmedImage> $scStudentAnswerTrimmedImages
 */
trait UserHasMany
{

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany|\Illuminate\Database\Eloquent\Collection<,ScExam>
     */
    function scExams(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ScExam::class, "user_id", config("score-crop.user.id"));
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany|\Illuminate\Database\Eloquent\Collection<,ScAnswer>
     */
    function scAnswers(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ScAnswer::class, "user_id", config("score-crop.user.id"));
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany|\Illuminate\Database\Eloquent\Collection<,ScAnswerImage>
     */
    function scAnswerImages(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ScAnswerImage::class, "user_id", config("score-crop.user.id"));
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany|\Illuminate\Database\Eloquent\Collection<,ScAnswerArea>
     */
    function scAnswerAreas(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ScAnswerArea::class, "user_id", config("score-crop.user.id"));
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany|\Illuminate\Database\Eloquent\Collection<,ScStudent>
     */
    function scStudents(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ScStudent::class, "user_id", config("score-crop.user.id"));
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany|\Illuminate\Database\Eloquent\Collection<,ScStudentAnswer>
     */
    function scStudentAnswers(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ScStudentAnswer::class, "user_id", config("score-crop.user.id"));
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany|\Illuminate\Database\Eloquent\Collection<,ScStudentAnswerImage>
     */
    function scStudentAnswerImages(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ScStudentAnswerImage::class, "user_id", config("score-crop.user.id"));
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany|\Illuminate\Database\Eloquent\Collection<,ScStudentAnswerTrimmedImage>
     */
    function scStudentAnswerTrimmedImages(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ScStudentAnswerTrimmedImage::class, "user_id", config("score-crop.user.id"));
    }
}