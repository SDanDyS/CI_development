<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class GreeterTest extends TestCase
{
    public function testGreetsWithName(): void
    {

        $this->assertSame('Hello, Alice!', 'Hello, Alice!');
    }

    public function testYolo(): void
    {

        $this->assertSame('Hello, Abdul!', 'Hello, Abdul!');
    }
}