<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample() {
        $this->visit('/')
             ->see('Laravel 5');
    }

    public function testAcademy() {
        $this->get('api/academy');
    }

    public function taskCache() {
        $this->get('api/cache')->seeJson(['status'=>200]);
    }

//    public function testLoginOK() {
//        $data = ['username'=>'2013211854','password'=>'123456', '_token'=>csrf_token()];
//        $this->post('api/login', $data)
//            ->seeJson([
//                'status' => 200
//            ]);
//    }

    public function testLoginFail() {
        $this->post('api/login')
            ->seeJson([
                'status' => 400
            ]);
    }
}
