<?php
include_once "config.php";
$db = Config::GetIntance();

//$sdk=$_GET['sdk'];
$sdk='15';
if ($sdk == '14') {
	$appver=$db->mGet("itv_config", "value", "where name='appver_sdk14'");
	$appUrl=$db->mGet("itv_config", "value", "where name='appurl_sdk14'");
} else {
	$appver=$db->mGet("itv_config", "value", "where name='appver'");
	$appUrl=$db->mGet("itv_config", "value", "where name='appurl'");
	$up_size=$db->mGet("itv_config", "value", "where name='up_size'");
	$up_sets=$db->mGet("itv_config", "value", "where name='up_sets'");
	$up_text=$db->mGet("itv_config", "value", "where name='up_text'");
}
$obj=(Object)null;
$obj->appver=$appver;
$obj->appurl=$appUrl;
$obj->appsets=$up_sets;
$obj->appsize=$up_size;
$obj->apptext=$up_text;
echo json_encode($obj,JSON_UNESCAPED_UNICODE);
unset($obj);
?>