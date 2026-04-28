<?php

namespace Ben182\AbTesting\Models;

use Illuminate\Database\Eloquent\Model;

class Experiment extends Model
{
    protected $table = 'ab_experiments';

    protected $fillable = [
        'name',
        'visitors',
    ];

    protected $casts = [
        'visitors' => 'integer',
    ];

    public function goals(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Goal::class);
    }

    public function incrementVisitor(): void
    {
        $this->increment('visitors');
    }
}
