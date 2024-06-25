<?php

namespace App\Models;

Class Clothes {
    static function all(){
        return [
            [
                'id' => 1,
                'name' => 'baju-1',
                'img' => 'https://i.pinimg.com/564x/0e/f7/5d/0ef75dc11ed684d1ea790e37268326c2.jpg'
            ],
            [
                'id' => 2,
                'name' => 'baju-2',
                'img' => 'https://i.pinimg.com/564x/cf/f8/e3/cff8e36e6380de809536b4fc39b7e4b4.jpg'
            ],
        ];
    }
}