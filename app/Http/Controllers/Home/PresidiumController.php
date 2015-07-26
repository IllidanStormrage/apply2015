<?php
    namespace App\Http\Controllers\Home;

    use Illuminate\Http\Request;
    use App\Http\Requests;
    use App\Http\Controllers\Controller;

    class PresidiumController extends Controller {
        public function presidium() {
            return view('home.Index.presidium')->with('title', '测试');
        }
    }
