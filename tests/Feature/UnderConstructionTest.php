<?php

namespace Tests\Feature;

use Tests\Helpers\FeatureTest;

class UnderConstructionTest extends FeatureTest
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testShowUnderConstruction()
    {
        $response = $this->amGoingToHome();

        $response->assertSee('Under construction');
    }
}
