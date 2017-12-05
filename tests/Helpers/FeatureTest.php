<?php
/**
 * Created by PhpStorm.
 * User: johankladder
 * Date: 5-12-17
 * Time: 17:11
 */

namespace Tests\Helpers;

class FeatureTest extends \Tests\TestCase
{

    public function home()
    {
        return $this->get('/');
    }

    public function amGoingToHome()
    {
        $response = $this->home();
        $response->assertStatus(200);
        return $response;
    }

}