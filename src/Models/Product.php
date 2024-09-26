<?php

namespace App\Models;

class Product
{
    public static function all(): array
    {
        return [
          [
            'name' => 'xbox',
            'price' => 499.99,
            'is_available' => true,
          ],
          [
            'name' => 'playstation',
            'price' => 599.99,
            'is_available' => true,
          ],
          [
            'name' => 'nintendo switch',
            'price' => 399.99,
            'is_available' => false,
          ],

          ];
    }

}