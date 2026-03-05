<?php
/**
 * Tests for ChainCore
 */

use PHPUnit\Framework\TestCase;
use Chaincore\Chaincore;

class ChaincoreTest extends TestCase {
    private Chaincore $instance;

    protected function setUp(): void {
        $this->instance = new Chaincore(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Chaincore::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
