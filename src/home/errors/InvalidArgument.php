<?php
/**
 * Created by PhpStorm.
 * User: gabri
 * Date: 20/02/2017
 * Time: 16:32
 */

namespace home\errors;


class InvalidArgument extends \Exception
{
    static  public  function  className(){
        return 'InvalidArgument';
    }
}