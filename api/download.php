<?php
  if (!empty($_GET)){
    if (!empty($_GET['key'])){
      $key = $_GET['key'];
      if ($key === "versions"){
        $dir = "../assets/versions/*";
        $versions = array();
        foreach(glob($dir) as $file){
            if(!is_dir($file)){
                array_push($versions, basename($file));
            }
        }
        header('Content-Type: application/json');
        echo json_encode(array('versions' => $versions));
      } else if ($key === "download"){
        if (!empty($_GET['version'])){
            downloadFile('https://www.depressionclient.ml/assets/versions/Depression-'.$_GET['version'].'.zip', 'Depression-'.$_GET['version']);
            die();
        } else {
          header('Content-Type: application/json');
          echo json_encode(array('status' => 'INVALID_VERSION'));
        }
      } else {
        header('Content-Type: application/json');
        echo json_encode(array('status' => 'INVALID_CALL'));
      }
    } else {
      header('Content-Type: application/json');
      echo json_encode(array('status' => 'INVALID_CALL'));
    }
  } else {
    header('Content-Type: application/json');
    echo json_encode(array('status' => 'INVALID'));
  }

  function downloadFile($link, $name){
    $content_len=@filesize($link);
    Header("Content-type: application/zip");
    Header("Content-type: octet-stream");
    Header('Content-Disposition: attachment; filename="'.$name.'.zip'.'"');
    if($content_len!=FALSE){
      Header("Content-length: $content_len");
    }
    readfile($link);
  }

?>
