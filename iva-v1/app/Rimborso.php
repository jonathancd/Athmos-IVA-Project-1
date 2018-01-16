<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rimborso extends Model
{

	public static function giorni_rimborso_snc_ltd($table_result, $modello){
		switch($modello){
    		case 1:
    			$result = $table_result->fatturato_0_30;
    			break;
    		case 2:
    			$result = $table_result->fatturato_30_100;
    			break;
    		case 3:
    			$result = $table_result->fatturato_100;
    			break;
    	}


    	if(!empty($result))
            return $result;

        return 0;
	}


    public static function giorni_rimborso_consultant($table_result, $iva){
        if($iva < 30000){
            $result = $table_result->fatturato_0_30;
        }
        else if($iva >= 30000 && $iva < 100000)
            $result = $table_result->fatturato_30_100;
        else{
            $result = $table_result->fatturato_100;
        }

        if(!empty($result))
            return $result;

        return 0;
    }


    public static function evaluation_active_snc_ltd ($iva, $giorni_rimborso){

    	$result = $iva * (1 - ($giorni_rimborso/365) * 0.12);

    	if(!empty($result)){
    		if($result >= 0)
    			return $result;
    		else
    			return 0;
    	}else{
    		return 0;
    	}

    }


    public static function evaluation_closeout_snc_ltd ($iva, $giorni_rimborso, $flag){

    	switch ($flag) {
            case 1:
            	$result = $iva * (1 - ($giorni_rimborso/365) * 0.14);
			break;

            case 0:
            	$result = $iva * (1 - ( ($giorni_rimborso + 180) /365) * 0.14);
            break;
        }

        if(!empty($result)){
    		if($result >= 0)
    			return $result;
    		else
    			return 0;
    	}else{
    		return 0;
    	}
    }


    public static function evaluation_consultant_receiver($iva, $art74, $giorni_rimborso, $flag){

    	switch ($flag) {
            case 1:
            	$result = $art74 * (1 - ($giorni_rimborso/365) * 0.16);
			break;

            case 0:
            	$result = ($iva - $art74) * (1 - ( ($giorni_rimborso + 180) / 365) * 0.16);
            break;
        }

        if(!empty($result)){
    		if($result >= 0)
    			return $result;
    		else
    			return 0;
    	}else{
    		return 0;
    	}
    }
}
