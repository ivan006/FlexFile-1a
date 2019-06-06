<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\SubAssetsM;
use App\AssetsM;

class AssetsM extends Model
{




  public static function AssetsList() {
    $AssetURL = AssetsM::siteURL();
    $staticdir  = AssetsM::siteURL();
    $result = array();
    $dataNameList = scandir($AssetURL);
    foreach ($dataNameList as $key => $value) {
      if (!in_array($value,array(".","..")))  {
        $dataLocation = $AssetURL . "/" . $value;
        if (is_dir($dataLocation) and basename($dataLocation) !== "smart"){
          $subDataNameList = scandir($dataLocation);
          $blackList = array(".","..","smart","rich.txt");
          $whiteList = array_diff_key($subDataNameList,$blackList);
          if (!empty($whiteList)) {
            // $result[$value] = SubAssetsM::deepList($dataLocation,$staticdir);
            $url = str_replace($staticdir."/", "", $dataLocation);
            $result[$value]["url"] = url('/')."/".SubAssetsM::AssetURLs()['sub_assets_read_suffix']."/".$url;
          } else {
            $url = str_replace($staticdir."/", "", $dataLocation);
            $result[$value] = url('/')."/".SubAssetsM::AssetURLs()['sub_assets_read_suffix']."/".$url;
          }
        }
      }
    }

    return $result;
  }





  public static function VPgContForAsset($a,$b) {
    $result = array();
    $VPgContItem = scandir($siteURL);
    foreach ($VPgContItem as $key => $value) {
      if (!in_array($value,array(".","..")))  {
        $VPgContItemLoc = $siteURL . DIRECTORY_SEPARATOR . $value;

          $result[$value] = file_get_contents($VPgContItemLoc);

      }
    }
    return  $result;
  }



  public static function AssetURL() {
    return AssetsM::siteURL()."/hey";
  }
  public static function siteURL() {
    return "../public/images";
  }






}