<?php

namespace LOCAL\Demo\Tests\Unit;

use LOCAL\Demo\Tool;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

class ToolTest extends UnitTestCase
{
    /**
     * @test
     */
    public function returnsHelloWorld(): void
    {
        $subject = new Tool();
        $result = $subject->test();
    }
}