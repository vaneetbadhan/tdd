<?php

namespace App\Helpers\Math;

class ArithmeticHelper
{
    
    private static function isNumeric($number)
    {
        return is_int($number);
    }

	public static function multiply(...$nums){
			if(sizeof($nums) < 1){
				throw new \InvalidArgumentException('Must have atleast 1 argument');
			}
			$multiply = 1;
			foreach($nums as $num){
				if(!self::isNumeric($num)){
					throw new \InvalidArgumentException("Argument can only be numeric.");
				}
				$multiply *= $num;
			}
			return $multiply;
		}
}