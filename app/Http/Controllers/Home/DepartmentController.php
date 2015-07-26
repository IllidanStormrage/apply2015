<?php
    namespace App\Http\Controllers\Home;

    use Illuminate\Http\Request;
    use App\Http\Requests;
    use App\Http\Controllers\Controller;

    class DepartmentController extends Controller {
        public function department() {
            return view('home.Index.department')->with('title', '测试');
        }
    }
