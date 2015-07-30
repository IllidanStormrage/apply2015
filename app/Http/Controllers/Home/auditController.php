<?php
    namespace App\Http\Controllers\Home;

    use Illuminate\Http\Request;
    use App\Http\Requests;
    use App\Http\Controllers\Controller;

    class AuditController extends Controller {
        public function audit() {
            return view('home.Index.audit')->with('title', '测试');
        }
    }
