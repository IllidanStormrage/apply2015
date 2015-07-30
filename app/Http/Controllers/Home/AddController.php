<?php
    namespace App\Http\Controllers\Home;

    use Illuminate\Http\Request;
    use App\Http\Requests;
    use App\Http\Controllers\Controller;

    class AddController extends Controller {
        public function add() {
            return view('home.Index.add')->with('title', '测试');
        }
    }
