<?php

namespace ikepu_tp\LaravelScoreCrop\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
 */
class ScStudent extends Model
{
    use HasFactory;
}