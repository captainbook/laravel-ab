<?php

namespace Ben182\AbTesting\Models;

use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    protected $table = 'ab_goals';

    protected $fillable = [
        'name',
        'hit',
    ];

    protected $casts = [
        'hit' => 'integer',
    ];

    public function experiment(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Experiment::class);
    }

    public function incrementHit(): void
    {
        $this->increment('hit');
    }
}
