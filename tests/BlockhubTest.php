<?php
/**
 * Tests for BlockHub
 */

use PHPUnit\Framework\TestCase;
use Blockhub\Blockhub;

class BlockhubTest extends TestCase {
    private Blockhub $instance;

    protected function setUp(): void {
        $this->instance = new Blockhub(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Blockhub::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
