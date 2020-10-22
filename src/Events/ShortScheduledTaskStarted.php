<?php

namespace Spatie\ShortSchedule\Events;

use Symfony\Component\Process\Process;

class ShortScheduledTaskStarted
{
    public $command;

    public $process;

    public function __construct(string $command, Process $process)
    {
        $this->command = $command;

        $this->process = $process;
    }
}
