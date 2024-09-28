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
}
