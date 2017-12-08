<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rimborso extends Model
{

	public static function giorni_rimborso($table_result, $modello){
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

    	return $result;
	}

    public static function evaluation_active_snc_ltd ($iva, $giorni_rimborso){

    	return $iva * (1 - ($giorni_rimborso/365) * 0.12);
    }


    public static function evaluation_closeout_snc_ltd ($iva, $giorni_rimborso, $flag){

    	switch ($flag) {
            case 1:
            	$x = $iva * (1 - ($giorni_rimborso/365) * 0.14);
			break;

            case 0:
            	$x = $iva * (1 - ($giorni_rimborso + 180/365) * 0.14);
            break;
        }

        return $x;
    }


    public static function evaluation_consultant_receiver($iva, $art74, $giorni_rimborso, $flag){

    	switch ($flag) {
            case 1:
            	$x = $art74 * (1 - ($giorni_rimborso/365) * 0.16);
			break;

            case 0:
            	$x = ($iva - $art74) * (1 - ($giorni_rimborso + 180/365) * 0.16);
            break;
        }

        return $x;
    }
}
