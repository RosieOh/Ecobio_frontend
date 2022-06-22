<?php if(!defined("__XE__")) exit();
$_m = Context::get('mid');
$before_time = microtime(true);
$rm = '';
$ml = array(
);
$addon_file = './addons/autolink/autolink.addon.php';
if(file_exists($addon_file)){
if($rm === 'no_run_selected'){
if(!isset($ml[$_m])){
unset($addon_info); $addon_info = unserialize(base64_decode('')); @include($addon_file);
}}else{
if(isset($ml[$_m]) || count($ml) === 0){
unset($addon_info); $addon_info = unserialize(base64_decode('')); @include($addon_file);
}}}
$after_time = microtime(true);
$addon_time_log = new stdClass();
$addon_time_log->caller = $called_position;
$addon_time_log->called = "autolink";
$addon_time_log->called_extension = "autolink";
writeSlowlog("addon",$after_time-$before_time,$addon_time_log);
$before_time = microtime(true);
$rm = '';
$ml = array(
);
$addon_file = './addons/elkha_www/elkha_www.addon.php';
if(file_exists($addon_file)){
if($rm === 'no_run_selected'){
if(!isset($ml[$_m])){
unset($addon_info); $addon_info = unserialize(base64_decode('')); @include($addon_file);
}}else{
if(isset($ml[$_m]) || count($ml) === 0){
unset($addon_info); $addon_info = unserialize(base64_decode('')); @include($addon_file);
}}}
$after_time = microtime(true);
$addon_time_log = new stdClass();
$addon_time_log->caller = $called_position;
$addon_time_log->called = "elkha_www";
$addon_time_log->called_extension = "elkha_www";
writeSlowlog("addon",$after_time-$before_time,$addon_time_log);
$before_time = microtime(true);
$rm = '';
$ml = array(
);
$addon_file = './addons/member_communication/member_communication.addon.php';
if(file_exists($addon_file)){
if($rm === 'no_run_selected'){
if(!isset($ml[$_m])){
unset($addon_info); $addon_info = unserialize(base64_decode('')); @include($addon_file);
}}else{
if(isset($ml[$_m]) || count($ml) === 0){
unset($addon_info); $addon_info = unserialize(base64_decode('')); @include($addon_file);
}}}
$after_time = microtime(true);
$addon_time_log = new stdClass();
$addon_time_log->caller = $called_position;
$addon_time_log->called = "member_communication";
$addon_time_log->called_extension = "member_communication";
writeSlowlog("addon",$after_time-$before_time,$addon_time_log);
$before_time = microtime(true);
$rm = '';
$ml = array(
);
$addon_file = './addons/member_extra_info/member_extra_info.addon.php';
if(file_exists($addon_file)){
if($rm === 'no_run_selected'){
if(!isset($ml[$_m])){
unset($addon_info); $addon_info = unserialize(base64_decode('')); @include($addon_file);
}}else{
if(isset($ml[$_m]) || count($ml) === 0){
unset($addon_info); $addon_info = unserialize(base64_decode('')); @include($addon_file);
}}}
$after_time = microtime(true);
$addon_time_log = new stdClass();
$addon_time_log->caller = $called_position;
$addon_time_log->called = "member_extra_info";
$addon_time_log->called_extension = "member_extra_info";
writeSlowlog("addon",$after_time-$before_time,$addon_time_log);
$before_time = microtime(true);
$rm = '';
$ml = array(
);
$addon_file = './addons/mobile/mobile.addon.php';
if(file_exists($addon_file)){
if($rm === 'no_run_selected'){
if(!isset($ml[$_m])){
unset($addon_info); $addon_info = unserialize(base64_decode('')); @include($addon_file);
}}else{
if(isset($ml[$_m]) || count($ml) === 0){
unset($addon_info); $addon_info = unserialize(base64_decode('')); @include($addon_file);
}}}
$after_time = microtime(true);
$addon_time_log = new stdClass();
$addon_time_log->caller = $called_position;
$addon_time_log->called = "mobile";
$addon_time_log->called_extension = "mobile";
writeSlowlog("addon",$after_time-$before_time,$addon_time_log);
$before_time = microtime(true);
$rm = 'no_run_selected';
$ml = array(
);
$addon_file = './addons/noclick/noclick.addon.php';
if(file_exists($addon_file)){
if($rm === 'no_run_selected'){
if(!isset($ml[$_m])){
unset($addon_info); $addon_info = unserialize(base64_decode('Tzo4OiJzdGRDbGFzcyI6OTp7czoxNToieGVfdmFsaWRhdG9yX2lkIjtzOjMxOiJtb2R1bGVzL2FkZG9uL3RwbC9zZXR1cF9hZGRvbi8xIjtzOjk6ImhhcmRfbW9kZSI7czoxOiJ5IjtzOjY6Im1vYmlsZSI7czoxOiJ5IjtzOjExOiJtb2JpbGVfdHlwZSI7czozOiJhbGwiO3M6ODoibm9zY3JpcHQiO3M6MToibiI7czoxNjoiY3NzX3NlbGV0ZV9ibG9jayI7czoxOiJuIjtzOjEwOiJtZW1iZXJfdXNlIjtzOjE6Im4iO3M6OToiYWRtaW5fdXNlIjtzOjE6InkiO3M6MTM6InhlX3J1bl9tZXRob2QiO3M6MTU6Im5vX3J1bl9zZWxlY3RlZCI7fQ==')); @include($addon_file);
}}else{
if(isset($ml[$_m]) || count($ml) === 0){
unset($addon_info); $addon_info = unserialize(base64_decode('Tzo4OiJzdGRDbGFzcyI6OTp7czoxNToieGVfdmFsaWRhdG9yX2lkIjtzOjMxOiJtb2R1bGVzL2FkZG9uL3RwbC9zZXR1cF9hZGRvbi8xIjtzOjk6ImhhcmRfbW9kZSI7czoxOiJ5IjtzOjY6Im1vYmlsZSI7czoxOiJ5IjtzOjExOiJtb2JpbGVfdHlwZSI7czozOiJhbGwiO3M6ODoibm9zY3JpcHQiO3M6MToibiI7czoxNjoiY3NzX3NlbGV0ZV9ibG9jayI7czoxOiJuIjtzOjEwOiJtZW1iZXJfdXNlIjtzOjE6Im4iO3M6OToiYWRtaW5fdXNlIjtzOjE6InkiO3M6MTM6InhlX3J1bl9tZXRob2QiO3M6MTU6Im5vX3J1bl9zZWxlY3RlZCI7fQ==')); @include($addon_file);
}}}
$after_time = microtime(true);
$addon_time_log = new stdClass();
$addon_time_log->caller = $called_position;
$addon_time_log->called = "noclick";
$addon_time_log->called_extension = "noclick";
writeSlowlog("addon",$after_time-$before_time,$addon_time_log);
$before_time = microtime(true);
$rm = 'no_run_selected';
$ml = array(
);
$addon_file = './addons/pop_up/pop_up.addon.php';
if(file_exists($addon_file)){
if($rm === 'no_run_selected'){
if(!isset($ml[$_m])){
unset($addon_info); $addon_info = unserialize(base64_decode('Tzo4OiJzdGRDbGFzcyI6Mjp7czoxNToieGVfdmFsaWRhdG9yX2lkIjtzOjMxOiJtb2R1bGVzL2FkZG9uL3RwbC9zZXR1cF9hZGRvbi8xIjtzOjEzOiJ4ZV9ydW5fbWV0aG9kIjtzOjE1OiJub19ydW5fc2VsZWN0ZWQiO30=')); @include($addon_file);
}}else{
if(isset($ml[$_m]) || count($ml) === 0){
unset($addon_info); $addon_info = unserialize(base64_decode('Tzo4OiJzdGRDbGFzcyI6Mjp7czoxNToieGVfdmFsaWRhdG9yX2lkIjtzOjMxOiJtb2R1bGVzL2FkZG9uL3RwbC9zZXR1cF9hZGRvbi8xIjtzOjEzOiJ4ZV9ydW5fbWV0aG9kIjtzOjE1OiJub19ydW5fc2VsZWN0ZWQiO30=')); @include($addon_file);
}}}
$after_time = microtime(true);
$addon_time_log = new stdClass();
$addon_time_log->caller = $called_position;
$addon_time_log->called = "pop_up";
$addon_time_log->called_extension = "pop_up";
writeSlowlog("addon",$after_time-$before_time,$addon_time_log);
$before_time = microtime(true);
$rm = '';
$ml = array(
);
$addon_file = './addons/resize_image/resize_image.addon.php';
if(file_exists($addon_file)){
if($rm === 'no_run_selected'){
if(!isset($ml[$_m])){
unset($addon_info); $addon_info = unserialize(base64_decode('')); @include($addon_file);
}}else{
if(isset($ml[$_m]) || count($ml) === 0){
unset($addon_info); $addon_info = unserialize(base64_decode('')); @include($addon_file);
}}}
$after_time = microtime(true);
$addon_time_log = new stdClass();
$addon_time_log->caller = $called_position;
$addon_time_log->called = "resize_image";
$addon_time_log->called_extension = "resize_image";
writeSlowlog("addon",$after_time-$before_time,$addon_time_log);