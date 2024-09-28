<?php

namespace ikepu_tp\LaravelScoreCrop\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $scAnswerId
 * @property int $user_id
 * @property int $sc_exam_id
 * @property int $file_id
 */
class ScAnswer extends Model
{
    use HasFactory;
}