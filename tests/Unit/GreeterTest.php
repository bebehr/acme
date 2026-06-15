<?php

declare(strict_types=1);

namespace Tests\Unit;

use App\Greeter;
use Faker\Factory;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(Greeter::class)]
final class GreeterTest extends TestCase
{
    public function testGreetsWithName(): void
    {
        $faker = Factory::create();
        $name = $faker->name();
        $expectedGreeting = sprintf('Hello, %s!', $name);
        $greeter = new Greeter();

        $greeting = $greeter->greet($name);

        $this->assertSame($expectedGreeting, $greeting);
    }
}
