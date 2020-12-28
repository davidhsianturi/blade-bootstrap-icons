<?php

namespace Tests;

use Orchestra\Testbench\TestCase;
use BladeUI\Icons\BladeIconsServiceProvider;
use Davidhsianturi\BladeBootstrapIcons\BladeBootstrapIconsServiceProvider;

class CompilesIconsTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            BladeIconsServiceProvider::class,
            BladeBootstrapIconsServiceProvider::class,
        ];
    }

    /** @test */
    public function it_compiles_a_single_anonymous_component()
    {
        $result = svg('bi-bell-fill')->toHtml();

        $expected = <<<SVG
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
  <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
</svg>
SVG;

        $this->assertSame($expected, $result);
    }

    /** @test */
    public function it_can_add_classes_to_icons()
    {
        $result = svg('bi-bell-fill', 'text-primary')->toHtml();

        // Note: the double class here seems to be a Blade components / BladeUI Icons bug.
        $expected = <<<SVG
<svg class="text-primary" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
  <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
</svg>
SVG;

        $this->assertSame($expected, $result);
    }

    /** @test */
    public function it_can_add_styles_to_icons()
    {
        $result = svg('bi-bell-fill', ['style' => 'color: #555'])->toHtml();

        $expected = <<<SVG
<svg style="color: #555" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
  <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
</svg>
SVG;

        $this->assertSame($expected, $result);
    }
}
