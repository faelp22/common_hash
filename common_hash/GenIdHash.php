<?php
/**
 * @author Isael Sousa <faelp22@hotmail.com>
 * @date 07-08-2014
 **/
namespace common_hash;
abstract class GenIdHash{
    private static $lowercase = 'abcdefghijklmnopqrstuvwxyz';
    private static $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    private static $num = '1234567890';
    private static $symbols = '!@#$.,:;%*-+.\/^';
    private static $characters;
    private static $len;
    private static $ret;

    public static function genIdHash($size = 11, $sym = false, $upper = true, $numm = true) {
        self::$ret = NULL;
        
        self::$characters .= self::$lowercase;
        
        if ($upper): self::$characters .= self::$uppercase; endif;
        if ($numm): self::$characters .= self::$num; endif;
        if ($sym): self::$characters .= self::$symbols; endif;
        
        self::$len = \strlen(self::$characters);
        
        for ($n = 1; $n <= $size; $n++):
            $rand = \mt_rand(1, self::$len);
            self::$ret .= self::$characters[$rand - 1];
        endfor;
        return self::$ret;
    }// Fim genProfileId
}// Fim GenIdHash