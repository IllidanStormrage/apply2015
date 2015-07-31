<?php
    namespace App\Http\Controllers\Home;

    use Illuminate\Http\Request;
    use App\Http\Requests;
    use App\Http\Controllers\Controller;

    class InfoController extends Controller {
        public function info() {
            return view('home.Index.info')->with('title', '测试');
        }
    }
