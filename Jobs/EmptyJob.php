<?php

namespace ShonM\ResqueBundle\Jobs;

class EmptyJob
{
    public function perform ()
    {
        if (! empty($this->args['fail'])) {
            fwrite(STDOUT, "\x1B[31m" . 'Throwing a job - Goodbye from EmptyJob!' . "\x1B[39m" . "\n");
            throw new \Exception("This is a completely empty exception");
        }

        fwrite(STDOUT, "\x1B[31m" . 'Performing a job - Hello from EmptyJob!' . "\x1B[39m" . "\n");
    }
}
