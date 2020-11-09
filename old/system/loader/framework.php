<?php
class framework{
	function __destruct(){
		
    }
    function controller($path){
        setLog('CALL CONTROLLER '.$path);
    	require_once('controller.php');
        $arr_str = explode('/', $path);
        if(count($arr_str)>1){
            $absolute_path = $arr_str[0];
        }else{
            $absolute_path = $path;
        }

    	$request_path = BASE_CATALOG.'controller/'.$absolute_path.'.php';
        if(file_exists($request_path)){
        	require_once($request_path);
        }else{
            setLog('ERROR not found controller '.$absolute_path.' '.$request_path);
            echo "Not found controller ".$absolute_path."<br>".$request_path;exit();
        }

    	$string_class_controller = ucfirst($absolute_path."Controller");
    	$getClass = new $string_class_controller();
        
        if(count($arr_str)==2){
            $getFunc = $arr_str[1];
            if(!method_exists( $getClass,$getFunc )) {
                setLog('ERROR not found method '.$getFunc.' in '.$string_class_controller);
                echo "Not found method ".$getFunc." in ".$string_class_controller;
                exit();
            }else{
                $getClass->$getFunc();
            }
            exit();
        }elseif(count($arr_str)==1){
            $getClass->index();
            exit();
        }else{
            echo "Please check route";
            exit();
        }
    }

}