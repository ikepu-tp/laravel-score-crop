<?php

namespace ikepu_tp\LaravelScoreCrop\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $scAnswerImageId
 * @property int $user_id
 * @property int $sc_answer_id
 * @property int $page
 * @property int $file_id
 */
class ScAnswerImage extends Model
{
    use HasFactory;
}