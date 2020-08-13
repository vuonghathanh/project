<?php


namespace App;


use NumberFormatter;

class Utility
{
    private static $fmt;
    public static function formatMoney($money){
        if(self::$fmt == null) {
            self::$fmt = numfmt_create( 'vi_VN', NumberFormatter::CURRENCY);
        }
        return numfmt_format_currency(self::$fmt, $money, 'VND');
    }
}
