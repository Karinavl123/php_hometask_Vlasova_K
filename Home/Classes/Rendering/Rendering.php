<?php

namespace Phpcourse\Myproject\Classes\Rendering;

use Latte\Engine;

class Rendering{
        public function __construct($data){

            $latte = new Engine();
            $latte->render('templates/default/index.latte',$data );

    }
}
