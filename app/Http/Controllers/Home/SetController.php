<?php
    namespace App\Http\Controllers\Home;

    use Illuminate\Http\Request;
    use App\Http\Requests;
    use App\Http\Controllers\Controller;

    class SetController extends Controller {
        public function set() {
            return view('home.Index.set')->with('title', '测试');
        }
    }
