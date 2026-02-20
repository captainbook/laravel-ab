<?php

namespace Ben182\AbTesting\Events;

use Ben182\AbTesting\Models\Experiment;

class ExperimentNewVisitor
{
    public function __construct(
        public Experiment $experiment
    ) {
    }
}
