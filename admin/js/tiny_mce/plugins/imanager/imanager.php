<?php
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); // date in the past 
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); // always modified 
header("Cache-Control: no-store, no-cache, must-revalidate"); // HTTP/1.1 
header("Cache-Control: post-check=0, pre-check=0", false); 
header("Pragma: no-cache"); // HTTP/1.0
?>
<html>
<head>
<title>{$lang_insert_image_title}</title>
<script language="javascript" src="../../tiny_mce_popup.js"></script>
<script language="javascript">
var url = tinyMCE.getParam("external_image_list_url");
if (url != null)
	document.write('<sc'+'ript language="javascript" type="text/javascript" src="' + tinyMCE.documentBasePath + "/" + url + '"></sc'+'ript>');
</script>
<script language="javascript">
	function insertImage() {
		if (window.opener) {
			var src = document.forms[0].src.value;
			var alt = document.forms[0].alt.value;
			var border = document.forms[0].border.value;
			var vspace = document.forms[0].vspace.value;
			var hspace = document.forms[0].hspace.value;
			var width = document.forms[0].width.value;
			var height = document.forms[0].height.value;
			var align = document.forms[0].align.options[document.forms[0].align.selectedIndex].value;

		    window.opener.tinyMCE.insertImage(src, alt, border, hspace, vspace, width, height, align);
			top.close();
		}
	}

	function init() {
		var formObj = document.forms[0];

		for (var i=0; i<document.forms[0].align.options.length; i++) {
			if (document.forms[0].align.options[i].value == tinyMCE.getWindowArg('align'))
				document.forms[0].align.options.selectedIndex = i;
		}

		formObj.src.value = tinyMCE.getWindowArg('src');
		formObj.alt.value = tinyMCE.getWindowArg('alt');
		formObj.border.value = tinyMCE.getWindowArg('border');
		formObj.vspace.value = tinyMCE.getWindowArg('vspace');
		formObj.hspace.value = tinyMCE.getWindowArg('hspace');
		formObj.width.value = tinyMCE.getWindowArg('width');
		formObj.height.value = tinyMCE.getWindowArg('height');
		formObj.insert.value = tinyMCE.getLang('lang_' + tinyMCE.getWindowArg('action'), 'Insert', true); 

		// Handle file browser
		if (tinyMCE.getParam("file_browser_callback") != null) {
			document.getElementById('src').style.width = '180px';

			var html = '';

			html += '<img id="browserBtn" src="images/browse.gif"';
			html += ' onmouseover="tinyMCE.switchClass(this,\'mceButtonOver\');"';
			html += ' onmouseout="tinyMCE.restoreClass(this);"';
			html += ' onmousedown="tinyMCE.restoreAndSwitchClass(this,\'mceButtonDown\');"';
			html += ' onclick="javascript:tinyMCE.openFileBrowser(\'src\',document.forms[0].src.value,\'image\',window);"';
			html += ' width="20" height="18" border="0" title="' + tinyMCE.getLang('lang_browse') + '"';
			html += ' class="mceButtonNormal" alt="' + tinyMCE.getLang('lang_browse') + '" />';

			document.getElementById('browser').innerHTML = html;
		}

		// Auto select image in list
		if (typeof(tinyMCEImageList) != "undefined" && tinyMCEImageList.length > 0) {
			for (var i=0; i<formObj.image_list.length; i++) {
				if (formObj.image_list.options[i].value == tinyMCE.getWindowArg('src'))
					formObj.image_list.options[i].selected = true;
			}
		}

		window.focus();
	}

	function cancelAction() {
		top.close();
	}

	var preloadImg = new Image();

	function resetImageData() {
		var formObj = document.forms[0];
		formObj.width.value = formObj.height.value = "";	
	}

	function updateImageData() {
		var formObj = document.forms[0];

		if (formObj.width.value == "")
			formObj.width.value = preloadImg.width;

		if (formObj.height.value == "")
			formObj.height.value = preloadImg.height;
	}

	function getImageData() {
		preloadImg = new Image();
		tinyMCE.addEvent(preloadImg, "load", updateImageData);
		tinyMCE.addEvent(preloadImg, "error", function () {var formObj = document.forms[0];formObj.width.value = formObj.height.value = "";});
		preloadImg.src = tinyMCE.convertRelativeToAbsoluteURL(tinyMCE.settings['base_href'], document.forms[0].src.value);
	}
</script>
<style type="text/css">
<!--
.pagetext {
	visibility: hidden;
	display: none;
}
-->
</style>
<script language="JavaScript" type="text/JavaScript">
function mosDHTML(){ 
	this.ver=navigator.appVersion
	this.agent=navigator.userAgent
	this.dom=document.getElementById?1:0
	this.opera5=this.agent.indexOf("Opera 5")<-1
	this.ie5=(this.ver.indexOf("MSIE 5")<-1 && this.dom && !this.opera5)?1:0; 
	this.ie6=(this.ver.indexOf("MSIE 6")<-1 && this.dom && !this.opera5)?1:0;
	this.ie4=(document.all && !this.dom && !this.opera5)?1:0;
	this.ie=this.ie4||this.ie5||this.ie6
	this.mac=this.agent.indexOf("Mac")<-1
	this.ns6=(this.dom && parseInt(this.ver) <= 5) ?1:0; 
	this.ns4=(document.layers && !this.dom)?1:0;
	this.bw=(this.ie6||this.ie5||this.ie4||this.ns4||this.ns6||this.opera5);

	this.activeTab = '';
	this.onTabStyle = 'ontab';
	this.offTabStyle = 'offtab';

	this.setElemStyle = function(elem,style) {
		document.getElementById(elem).className = style;
	}
	this.showElem = function(id) {
		if (elem = document.getElementById(id)) {
			elem.style.visibility = 'visible';
			elem.style.display = 'block';
		}
	}
	this.hideElem = function(id) {
		if (elem = document.getElementById(id)) {
			elem.style.visibility = 'hidden';
			elem.style.display = 'none';
		}
	}
	this.cycleTab = function(name) {
		if (this.activeTab) {
			this.setElemStyle( this.activeTab, this.offTabStyle );
			page = this.activeTab.replace( 'tab', 'page' );
			this.hideElem(page);
		}
		this.setElemStyle( name, this.onTabStyle );
		this.activeTab = name;
		page = this.activeTab.replace( 'tab', 'page' );
		this.showElem(page);
		if(document.adminform.tab_num){
		document.adminform.tab_num.value=page.replace('page','');
		}
	}
	return this;
}
var dhtml = new mosDHTML();
</script>

<style type="text/css">
<!--
.browse {
	width: 100%;
	border: 1px solid #CCCCCC;
}
-->
</style>
</head>
<body onload="window.focus();init();">
<?php 
include("config.php");
//simple image manager
error_reporting( 2047 );

//some funcitons 

  function purge($dir)
  {
  $handle = opendir($dir);
  while (false !== ($file = readdir($handle)))
  {
  if ($file != "." && $file != "..")
  {
  if (is_dir($dir.$file))
  {
  purge ($dir.$file."/");
  rmdir($dir.$file);
  }
  else
  {
  unlink($dir.$file);
  }
  }
  }
  closedir($handle); 
  }

$msg ="" ; 
$dir_list=false;
$file_list=false;

if(isset($_POST['task']))$task=$_POST['task'];
else $task="";

if(isset($_POST['rel_dir']))$rel_dir=$_POST['rel_dir'];
else $rel_dir="";
$rel_dir=str_replace("_d_","",$rel_dir);
if($rel_dir=="." || $rel_dir=="..")$rel_dir="";
if($rel_dir!="" && $task=="")$rel_dir.="/";
$show_dir=$im_show_path.$rel_dir;
if($show_dir!=$im_show_path)$dir_list[]="..";
$web_path=$im_webpath;

if($task=="upload")
{
for($i = 1; $i < 4; $i++){

	if(isset($HTTP_POST_FILES["upload".$i]) && $HTTP_POST_FILES["upload".$i]["name"] != "")
				{  $fname=$HTTP_POST_FILES["upload".$i]["name"];
	                $tname=$HTTP_POST_FILES["upload".$i]["tmp_name"];
	                if($fname=="")continue;
                     if(move_uploaded_file($tname, $show_dir.$fname))
	                   {
	                                	$msg.= "<br>".$fname." was success fully uploaded !!! ";
	                   } else {
	                                	$msg.= "<br>".$fname." could not be uploaded !!! ";
	                     }

							}

				}
}

if($task=="createfolder")
{
if(mkdir($show_dir.$_POST['createtext'],0777))$msg="Folder successfully created";
else $msg="Error creating folder";
}

if($task=="deletefolder")
{
$todel=$im_show_path.$_POST['deletetext'];
if(is_dir($todel)) {purge($todel."/");
rmdir($todel);
} else {
unlink($todel);
}
}

if($task=="renamefolder")
{
$newname=$im_show_path.$_POST['renametext'];
$oldname=$im_show_path.$_POST['oldrenametext'];
if(rename($oldname,$newname))$msg="Renamed successfully";
else $msg="Error renaming";
}

if (!is_dir($show_dir))
        {
        $msg = $show_dir." is not a directory !!!";
        return;
        }
if (!( $dir = opendir($show_dir) ) )
        {
        $msg = $show_dir." Access denied . <br>You do not have enought rights to view the dir ";
        return;
        }
        while ( $name = readdir($dir))
        {
        if($name == ".." || $name == "." ) continue;
        if(  is_dir($show_dir.$name)  )$dir_list[] = $name ;
        if(  is_file($show_dir.$name) ) $file_list[] = $name ;
        }
    closedir($dir);
?>
<script language="JavaScript" type="text/JavaScript">
function previewimage(srcObj)
{
	var image = document.preview;
	if(srcObj.value=='' || srcObj.value==null || !srcObj.value.search("_d_") )image.src='images/blank.gif'; 
	else image.src='<?php echo $web_path; ?>'+srcObj.value.replace("_f_","");
	var cpath=srcObj.value.replace("_f_","");
	cpath=cpath.replace("_d_","");
	document.adminform.deletetext.value=cpath;
	document.adminform.renametext.value=cpath;
	document.adminform.oldrenametext.value=cpath;
	//alert(srcObj.name);
}
function uploadfiles()
{
if(document.adminform.upload1.value=="" && document.adminform.upload2.value=="" && document.adminform.upload3.value=="" && document.adminform.upload4.value=="" ){
alert("Please select some file");
return false;
}
document.adminform.task.value="upload";
adminform.submit();
}


function createfolder()
{
if(document.adminform.createtext.value=="" ){
alert("Please enter a folder name");
return false;
}
document.adminform.task.value="createfolder";
adminform.submit();
}


function renamefolder()
{
document.adminform.task.value="renamefolder";
adminform.submit();
}
function deletefolder()
{
if( confirm ("Do you want to delete "+ document.adminform.deletetext.value + " ?"))
		 {
document.adminform.task.value="deletefolder";
adminform.submit();
		 }

}

function changedir(srcObj)
{
if(!srcObj.value.search("_f_")) return false;
document.adminform.rel_dir.value=srcObj.value.replace("_d_","");
adminform.submit();

}
</script>
<script language="JavaScript" type="text/JavaScript">  
    window.name = 'imanager'; 
</script>
<form name="adminform" onsubmit="insertImage();return false;" method="post" enctype="multipart/form-data" target="imanager">
  <input name='MAX_FILE_SIZE' type='hidden' value='2000000'>
  <input type='hidden' name='task' value='' >
   <input type='hidden' name='rel_dir' value='<?php echo $rel_dir; ?>' >
  <table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
      <td align="center" valign="middle"><table border="0" cellpadding="4" cellspacing="0">
          <tr>
            <td colspan="2" >Current Dir : <?php echo $show_dir;?></td>
          </tr>
          <tr>
            <td >
<select name="imagelist" size="10" class="browse" onChange="c=setTimeout('previewimage(document.adminform.imagelist)',150);" ondblclick="clearTimeout(c);changedir(this)" >
                <?php 
if(is_array($dir_list))
{
foreach($dir_list as $dir)
{if($dir=="..") echo "<option value=\"_d_".dirname($rel_dir)."\">$dir\</option>\n";
else echo "<option value=\"_d_$rel_dir$dir\">$dir\</option>\n";
}
}
if(is_array($file_list))
{
foreach($file_list as $file)
{
echo "<option value=\"_f_$rel_dir$file\">$file</option>\n";
}
}
?>
                 
              </select>              
            </td>
            <td >
<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="130" valign="top">
				   <a href="#" onClick="dhtml.cycleTab('tab1');">Preview</a> <a href="#" onClick="dhtml.cycleTab('tab2');">Upload</a> <a href="#" onClick="dhtml.cycleTab('tab3');">Files</a> 
				   <br>
				  <div id='page1' class='pagetext'>
                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td><div align="center"><br>
                            <img src="images/blank.gif" alt="Preview" name="preview" width="100" height="100" hspace="2" vspace="2" border="0" align="middle"/><br>
                              <input type="button" onClick="document.adminform.src.value=document.preview.src;" value="Select">
                                                            <br>
                            </div></td>
                        </tr>
                      </table>
                    </div>
                    <div id='page2' class='pagetext'>
                      <table width="100%" border="0" cellspacing="0" cellpadding="1">
                        <tr>
                          <td><br>
                            <input type="file" name="upload1" >
                            <br>
                            <input type="file" name="upload2" >
                            <br>
                            <input type="file" name="upload3" >
                            <br>                          
                            <input type="file" name="upload4" > 
							<br>
                            <br>
							 <div align="center">
							  <input type="button" name="upload" value="Upload" onclick="uploadfiles();">
                              
                            </div></td>
                        </tr>
                      </table>
                    </div>
                    <div id='page3' class='pagetext'>
                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td height="19"><p><br>
Create folder                           <br>
                              <input type="text" name="createtext">
                              <input type="button" name="Submit" value="Create" onClick="createfolder()">
                            <br>
                              <br>
Delete file/folder<br>
                              <input name="deletetext" type="text" id="deletetxt">
                              <input type="button" name="Submit2" value="Delete" onClick="deletefolder()">
                                                                                        <br>
                              <br>
Rename file/folder                                                           <br>
                              <input name="renametext" type="text" id="renametext">
                               <input type='hidden' id='tab2' name='oldrenametext' value='' >                   
                              <input type="button" name="Submit3" value="Rename" onClick="renamefolder()">
                              <br>
                            </p>
                            </td>
                        </tr>
                      </table>
                    </div>
                    <input type='hidden' id='tab1' name='x1' value='x1' >
               <input type='hidden' id='tab2' name='x2' value='x2' >
			   <input type='hidden' id='tab3' name='x2' value='x2' >
			  <script language="JavaScript" type="text/JavaScript">
 dhtml.cycleTab('tab1');
</script>

					</td>
                </tr>
              </table></td>
          </tr>
          <tr>
            <td colspan="2" ><div align="center"><?php echo $msg; ?></div></td>
          </tr>
          <tr>
            <td colspan="2" class="title">{$lang_insert_image_title}</td>
          </tr>
          <tr>
            <td>{$lang_insert_image_src}:</td>
            <td><table border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td><input name="src" type="text" id="src" value="" style="width: 200px" onchange="getImageData();"></td>
                  <td id="browser"></td>
                </tr>
              </table></td>
          </tr>
		  <!-- Image list -->
		  <script language="javascript">
			if (typeof(tinyMCEImageList) != "undefined" && tinyMCEImageList.length > 0) {
				var html = "";

				html += '<tr><td>{$lang_image_list}:</td>';
				html += '<td><select name="image_list" style="width: 200px" onchange="this.form.src.value=this.options[this.selectedIndex].value;resetImageData();getImageData();">';
				html += '<option value="">---</option>';

				for (var i=0; i<tinyMCEImageList.length; i++)
					html += '<option value="' + tinyMCEImageList[i][1] + '">' + tinyMCEImageList[i][0] + '</option>';

				html += '</select></td></tr>';

				document.write(html);
			}
		  </script>
		  <!-- /Image list -->
          <tr>
            <td>{$lang_insert_image_alt}:</td>
            <td><input name="alt" type="text" id="alt" value="" style="width: 200px"></td>
          </tr>
          <tr>
            <td>{$lang_insert_image_align}:</td>
            <td><select name="align">
                <option value="">{$lang_insert_image_align_default}</option>
                <option value="baseline">{$lang_insert_image_align_baseline}</option>
                <option value="top">{$lang_insert_image_align_top}</option>
                <option value="middle">{$lang_insert_image_align_middle}</option>
                <option value="bottom">{$lang_insert_image_align_bottom}</option>
                <option value="texttop">{$lang_insert_image_align_texttop}</option>
                <option value="absmiddle">{$lang_insert_image_align_absmiddle}</option>
                <option value="absbottom">{$lang_insert_image_align_absbottom}</option>
                <option value="left">{$lang_insert_image_align_left}</option>
                <option value="right">{$lang_insert_image_align_right}</option>
              </select></td>
          </tr>
          <tr>
            <td>{$lang_insert_image_dimensions}:</td>
            <td><input name="width" type="text" id="width" value="" size="3" maxlength="3">
              x
              <input name="height" type="text" id="height" value="" size="3" maxlength="3"></td>
          </tr>
          <tr>
            <td>{$lang_insert_image_border}:</td>
            <td><input name="border" type="text" id="border" value="" size="3" maxlength="3"></td>
          </tr>
          <tr>
            <td>{$lang_insert_image_vspace}:</td>
            <td><input name="vspace" type="text" id="vspace" value="" size="3" maxlength="3"></td>
          </tr>
          <tr>
            <td>{$lang_insert_image_hspace}:</td>
            <td><input name="hspace" type="text" id="hspace" value="" size="3" maxlength="3"></td>
          </tr>
          <tr>
            <td><input type="button" id="insert" name="insert" value="{$lang_insert}" onclick="insertImage();">
            </td>
            <td align="right"><input type="button" id="cancel" name="cancel" value="{$lang_cancel}" onclick="cancelAction();"></td>
          </tr>
        </table></td>
    </tr>
  </table>
</form>
</body>
</html>
