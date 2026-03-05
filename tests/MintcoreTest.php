<?php
/**
 * Tests for MintCore
 */

use PHPUnit\Framework\TestCase;
use Mintcore\Mintcore;

class MintcoreTest extends TestCase {
    private Mintcore $instance;

    protected function setUp(): void {
        $this->instance = new Mintcore(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Mintcore::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
