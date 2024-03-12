<?php

namespace App\Models;

use App\Models\LevelModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserModel extends Model{
    use HasFactory;
    protected $table = 'm_user';
    protected $primaryKey= 'id_user';
    /**
     *@var array 
     */
    protected $fillable = ['level_id','username','nama','password'];

    public function level(): BelongsTo
    {
        return $this->belongsTo(UserModel::class, 'level_id', 'level_id');
    }
}