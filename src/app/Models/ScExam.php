<?php

namespace ikepu_tp\LaravelScoreCrop\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $scExamId
 * @property int $user_id
 * @property string $title
 * @property string $description
 */
class ScExam extends Model
{
    use HasFactory;
}