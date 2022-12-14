<?php

namespace Mohammerat\Press\Tests;

use Mohammerat\Press\PressBaseServiceProvider;
use Orchestra\Testbench\TestCase as TestbenchTestCase;

class TestCase extends TestbenchTestCase
{
  protected function setUp(): void
  {
    parent::setUp();

    $this->withFactories(__DIR__ . '/../database/factories');
  }

  /**
   * Get package providers.
   *
   * @param  \Illuminate\Foundation\Application  $app
   * @return array<int, class-string>
   */
  protected function getPackageProviders($app)
  {
    return [
      PressBaseServiceProvider::class
    ];
  }

  protected function getEnvironmentSetUp($app)
  {
    $app['config']->set('database.default', 'testdb');
    $app['config']->set('database.connections.testdb', [
      'driver' => 'sqlite',
      'database' => ':memory:'
    ]);
  }
}
