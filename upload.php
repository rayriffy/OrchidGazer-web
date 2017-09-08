<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileUpload"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        setcookie("uploadst", 701, time() + (86400 * 30), "/"); //THIS IS NOT AN IMAGE
        $uploadOk = 0;
        header('Location: /');
    }
    // Check file size
    /*if ($_FILES["fileUpload"]["size"] > 500000) { //LIMIT 500KB
        setcookie("uploadst", 702, time() + (86400 * 30), "/"); //FILE TOO LARGE
        $uploadOk = 0;
        header('Location: /');
    }*/
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "JPEG") {
        setcookie("uploadst", 700, time() + (86400 * 30), "/"); //ONLY JPG JPEG PNG ALLOWED
        $uploadOk = 0;
        header('Location: /');
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        //echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file)) {
            if (move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file)) {
              setcookie("uploadst", 100, time() + (86400 * 30), "/");
              setcookie("resultst", 1, time() + (86400 * 30), "/");
              exec("export TF_CPP_MIN_LOG_LEVEL=2");
              ob_start();
              passthru("python -m scripts.label_image --graph=tf_files/retrained_graph.pb --image=/usr/share/nginx/html/orchidgazer/".$target_file);
              $output = ob_get_clean();
              ob_end_clean();
              $json=json_decode($output, true);
              $json_count_row=count($json['orchid'])-2;
              for($i=0;$i<=$json_count_row;$i++)
              {
                if($json['orchid'][$i]['label']==" aerides multiflora roxb ")
                {
                  $type=1;
                }
                else if($json['orchid'][$i]['label']==" ascda kultana gold spot x wilas ")
                {
                  $type=2;
                }
                else if($json['orchid'][$i]['label']==" ascocentrum curvifolium ")
                {
                  $type=3;
                }
                else if($json['orchid'][$i]['label']==" bulbophyllum smitinandii ")
                {
                  $type=4;
                }
                else if($json['orchid'][$i]['label']==" cattleya labiata ")
                {
                  $type=5;
                }
                else if($json['orchid'][$i]['label']==" cattleya myrmecophiala tibicinis ")
                {
                  $type=6;
                }
                else if($json['orchid'][$i]['label']==" dendrobium mini splash ")
                {
                  $type=7;
                }
                else if($json['orchid'][$i]['label']==" doritaenopsis chain xen diamond celebration ")
                {
                  $type=8;
                }
                else if($json['orchid'][$i]['label']==" epidendrum stamfordianum ")
                {
                  $type=9;
                }
                else if($json['orchid'][$i]['label']==" rhynchostylis retusa ")
                {
                  $type=10;
                }
                else if($json['orchid'][$i]['label']==" rnst bangkok beauty ")
                {
                  $type=11;
                }
                else if($json['orchid'][$i]['label']==" v hilo rose x v bitz s heartthrob ")
                {
                  $type=12;
                }
                else if($json['orchid'][$i]['label']==" vanda insignis ")
                {
                  $type=13;
                }
                else if($json['orchid'][$i]['label']==" cattleya arctic star snow queen ")
                {
                  $type=13;
                }
                setcookie("label".$i, $type, time() + (86400 * 30), "/");
                setcookie("result".$i, $json['orchid'][$i]['result'], time() + (86400 * 30), "/");
              }
            header('Location: /result.php');
            } else {
              setcookie("uploadst", 100, time() + (86400 * 30), "/");
              setcookie("resultst", 1, time() + (86400 * 30), "/");
              exec("export TF_CPP_MIN_LOG_LEVEL=2");
              ob_start();
              passthru("python -m scripts.label_image --graph=tf_files/retrained_graph.pb --image=/usr/share/nginx/html/orchidgazer/".$target_file);
              $output = ob_get_clean();
              ob_end_clean();
              $json=json_decode($output, true);
              $json_count_row=count($json['orchid'])-2;
              for($i=0;$i<=$json_count_row;$i++)
              {
                if($json['orchid'][$i]['label']==" aerides multiflora roxb ")
                {
                  $type=1;
                }
                else if($json['orchid'][$i]['label']==" ascda kultana gold spot x wilas ")
                {
                  $type=2;
                }
                else if($json['orchid'][$i]['label']==" ascocentrum curvifolium ")
                {
                  $type=3;
                }
                else if($json['orchid'][$i]['label']==" bulbophyllum smitinandii ")
                {
                  $type=4;
                }
                else if($json['orchid'][$i]['label']==" cattleya labiata ")
                {
                  $type=5;
                }
                else if($json['orchid'][$i]['label']==" cattleya myrmecophiala tibicinis ")
                {
                  $type=6;
                }
                else if($json['orchid'][$i]['label']==" dendrobium mini splash ")
                {
                  $type=7;
                }
                else if($json['orchid'][$i]['label']==" doritaenopsis chain xen diamond celebration ")
                {
                  $type=8;
                }
                else if($json['orchid'][$i]['label']==" epidendrum stamfordianum ")
                {
                  $type=9;
                }
                else if($json['orchid'][$i]['label']==" rhynchostylis retusa ")
                {
                  $type=10;
                }
                else if($json['orchid'][$i]['label']==" rnst bangkok beauty ")
                {
                  $type=11;
                }
                else if($json['orchid'][$i]['label']==" v hilo rose x v bitz s heartthrob ")
                {
                  $type=12;
                }
                else if($json['orchid'][$i]['label']==" vanda insignis ")
                {
                  $type=13;
                }
                else if($json['orchid'][$i]['label']==" cattleya arctic star snow queen ")
                {
                  $type=13;
                }
                setcookie("label".$i, $type, time() + (86400 * 30), "/");
                setcookie("result".$i, $json['orchid'][$i]['result'], time() + (86400 * 30), "/");
              }
              header('Location: /result.php');
            }
        }
  }
}
?>
