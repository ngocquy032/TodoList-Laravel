<?php
    namespace App\Http\Controllers;
    use Illuminate\Routing\Controller as BaseController;
    class DemoController extends BaseController  {
        public function showDetails(){
            return 'day la demoControler';
        }
        public function showSubject($theSubject){
            return "Detail infomation about $theSubject";

        }
    }
