<?php
/**
 * Tests for BscSmartChain
 */

use PHPUnit\Framework\TestCase;
use Bscsmartchain\Bscsmartchain;

class BscsmartchainTest extends TestCase {
    private Bscsmartchain $instance;

    protected function setUp(): void {
        $this->instance = new Bscsmartchain(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Bscsmartchain::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
