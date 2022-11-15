<?php

namespace Mohammerat\Press\Tests;

use Mohammerat\Press\PressBaseServiceProvider;
use Orchestra\Testbench\TestCase as TestbenchTestCase;

class TestCase extends TestbenchTestCase
{
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
}
