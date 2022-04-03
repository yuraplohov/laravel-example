<?php

namespace Yuraplohov\LaravelExample\Test;

class CommandTest extends TestCase
{
    /** @test */
    public function it_executes_example_command()
    {
        $output = $this->artisan('example-command');

        $output->expectsOutput("Example command executed with config param value 200");
    }
}