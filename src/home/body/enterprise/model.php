<?php

declare (strict_types=1);

namespace enterprise;

class model
{
    public function  save():int
    {
        $contents=@file_get_contents(self::getClassName().'.txt');
        if (!($contents===FALSE)) {
            $objects = explode(PHP_EOL, $contents);
            foreach ($objects as &$obj) {
                if (!$obj)  break;
                $serial = unserialize($obj);
                $attribute = $this::getIdAttribute();
                if ($serial->$attribute == $this->$attribute) {
                    $obj = serialize($this);
                    return file_put_contents('D:\gabri\Documents\Alessandro\SoftwareSantana\SSantanaArquivos' . $this->getClassName() . '.txt', implode(PHP_EOL, $objects));
                }
            }
        }
        return file_put_contents($this->getClassName().'.txt',serialize($this).PHP_EOL,FILE_APPEND);
    }

    public static function  load(int $id)
    {
        $contents=@file_get_contents(self::getClassName().'.txt');
        $objects=explode(PHP_EOL,$contents);
        foreach ($objects as $obj){
            if (!$obj)  break;
            $serial=unserialize($obj);
            $attribute = self::getIdAttribute();
            if ( $id == $serial->$attribute){
                return $serial;
            }
        }
        return null;
    }

    public function delete()
    {
        $contents=file_get_contents(self::getClassName().'.txt');
        $contents=str_replace(serialize($this).PHP_EOL,'',$contents);
        file_put_contents($this->getClassName().'.txt',$contents) ;
    }

    public static function getIdAttribute()
    {
        return self::getIdAttribute();
    }
    public static function  getClassName()
    {
        return self::getClassName();
    }

}