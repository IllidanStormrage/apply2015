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
    //测试学院列表
    public function testAcademy() {
        $this->get('api/academy');
    }
    //测试缓存
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

    //登录失败
    public function testLoginFail() {
        $this->post('api/login')
            ->seeJson([
                'status' => 400
            ]);
    }

    //添加部门人员
    public function testAddMember() {
        $data = [
                    'studentnum' => 2013211855,
                    'role_id' => 6,
                    'department_id' => 1
        ];
        $this->post('api/addmember', $data)
            ->seeJson([
                'status' => 200
            ]);
    }
}
