<?php

class HTML{
    public static function css($path){
        return "<link rel='stylesheet' href='{$path}'>";
    }
    public static function anchor($content,$href){
        return "<a href='{$href}'>{$content}</a>";
    }
    public static function __callStatic($name, $arguments)
    {
        $result = "<{$name}";
        if(isset($arguments[1])) $result.=" class='{$arguments[1]}' ";
        $result.=">{$arguments[0]}</{$name}>";
        return $result;
    }
    public static function lists($type,$array){
        foreach ($array as &$a){
            $a = self::li($a);
        }
       return self::$type(implode("\n",$array));
    }
    public static function ul_list($arr){
        return self::lists("ul",$arr);
    }
    public static function ol_list($arr){
        return self::lists("ol",$arr);
    }
}





echo HTML::css("1.css");
echo HTML::anchor("google","http://google.com");
echo HTML::ul_list(["one","two","three"]);
echo HTML::div("asfdafgsadg","active");
