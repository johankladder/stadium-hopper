<?php
/**
 * Created by PhpStorm.
 * User: johankladder
 * Date: 5-12-17
 * Time: 18:05
 */

namespace Tests\Feature;


use Tests\Helpers\FeatureTest;

class AdminAuthenticationTest extends FeatureTest
{

    public function testAdminRedirectToLogin()
    {
        $response = $this->get('/admin');
        $response->assertStatus(302);
        $this->followRedirects($response)
            ->assertSee('Login');
    }

}