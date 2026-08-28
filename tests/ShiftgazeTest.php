<?php
/**
 * Tests for ShiftGaze
 */

use PHPUnit\Framework\TestCase;
use Shiftgaze\Shiftgaze;

class ShiftgazeTest extends TestCase {
    private Shiftgaze $instance;

    protected function setUp(): void {
        $this->instance = new Shiftgaze(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Shiftgaze::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
