<?php
    namespace App\Http\Controllers\Home;

    use Illuminate\Http\Request;
    use App\Http\Requests;
    use App\Http\Controllers\Controller;

    class BarController extends Controller {
        public function bar() {
            return view('home.Index.bar')->with('title', '测试');
        }
    }
