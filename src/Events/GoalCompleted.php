<?php

namespace Ben182\AbTesting\Events;

use Ben182\AbTesting\Models\Goal;

class GoalCompleted
{
    public function __construct(
        public Goal $goal
    ) {
    }
}
