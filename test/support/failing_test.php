<?php

require_once __DIR__ . '/../../src/autorun.php';

class FailingTest extends UnitTestCase
{
    public function test_fail()
    {
        $this->assertEqual(1, 2);
    }
}
