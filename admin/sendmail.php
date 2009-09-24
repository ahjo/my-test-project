<?php if(!isset($_SESSION['admin'])){echo 'Hacking attempted'; return ;} ?>
<?php
  //error_reporting(0);
  $attach="";
  $attachmime="";
    if(!isset($task_id))$task_id=-1;
    if(!isset($stage))
   {
     if(isset($redo) && $redo=="true")
{
   include("temp/email.php");
  }
 }
else if($stage==2 )
   {
 if(isset($sendemail) && $task_id==-1)
{
    $query="INSERT INTO wiml_history ( group_id, email_address, date, subject, text_message, html_message, template, emailfrom, charsetiso,priority,total_emails,total_sends) VALUES ( 0 , '' ,";
    $query.=" '".time()."', ";
    $query.=" '".addslashes($subject)."', ";
    $query.=" '".addslashes($messagetext)."', ";
    $query.=" '".addslashes($messagehtml)."', ";
    if(isset($template)){$query.=" '".$template_name."', ";}
    else $query.=" '',";
    $query.=" '".addslashes($emailfrom)."', ";
    $query.=" '".addslashes($charsettype)."', ";
    $query.=" '".addslashes($priorityemail)."', ";
    $query.=" '0', "; //total emails
    $query.=" '0'  )"; // total envios
    //echo $query;
    $conn->Execute($query);
    $task_id=$conn->Insert_ID();
    //echo $query;
    echo $conn->ErrorMsg();
  }
    if(isset($sendemail) && $task_id!=-1)
    {
    $query="UPDATE wiml_history SET ";
    $query.="  subject='".addslashes($subject)."', ";
    $query.=" text_message='".addslashes($messagetext)."', ";
    $query.=" html_message='".addslashes($messagehtml)."', ";
    if(isset($template)){$query.=" template='".$template_name."', ";}
    else $query.=" template='', ";
    $query.=" emailfrom='".addslashes($emailfrom)."', ";
    $query.=" charsetiso='".addslashes($charsettype)."', ";
    $query.=" priority='".addslashes($priorityemail)."', ";
    $query.=" total_emails='".addslashes("0")."', ";
    $query.=" total_sends='".addslashes("0")."' ";
    $query.=" WHERE id = ".$task_id;
    $conn->Execute($query);
    //echo $query;
    echo $conn->ErrorMsg();
  }
 }
    else if($stage==3)
 {
    if(isset($sendemail))
 {
    $query="UPDATE wiml_history SET  ";
    if($database == "custom" )
 {
    $query.=" group_id = -3 ";
    $query.=" WHERE id = ".$task_id;
 }else
 {
    if($send_to=='group')$query.=" group_id = $group_id, ";
    else if($send_to=='all')$query.=" group_id = -1, ";
    else $query.=" group_id = -2, ";
    if($send_to=='single')$query.=" email_address = '$email_id' ";
    else $query.="  email_address = '' ";
    $query.=" WHERE id = ".$task_id;
 }
    $conn->Execute($query);
    //echo $query;
    echo $conn->ErrorMsg();
 }
}
    $drs=$conn->Execute("SELECT * FROM wiml_history WHERE id = $task_id");
    if ($drs){
    $drow=$drs->GetArray();
};
?>
  <script language="JavaScript" type="text/JavaScript">
      function check()
      {
        if(document.form.subject.value=="")
      {
        alert ("<?php echo $lang_sendmail_suberror; ?>");
        return false;
      }
        else if( ( document.form.messagetext.value=="" ) && (document.form.messagehtml.value=="") )
      {
        alert ("<?php echo $lang_sendmail_fillerror; ?>");
        return false;
      } else if(document.form.emailfrom.value=="")
      {
        alert ("<?php echo $lang_sendmail_fromerror; ?>");
        return false;
      }
        else
      {
        document.form.submit();
      }
    }
  </script>
<table width="770" border="0" align="center" cellpadding="0" cellspacing="0" background="admin/images/interface/bgmaintable.gif">
  <tr>
    <td width="20">&nbsp;</td>
    <td><table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td class="h3">
          <table width="100%" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td height="25" class="h3"><?php echo $lang_sendmail_send; ?></td>
              <td height="25" valign="bottom"><div align="right" class="f8"><?php echo $lang_sendmail_sendex; ?></div></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td></td>
      </tr>
      <tr bgcolor="#0066CC">
        <td colspan="2"><img src="images/interface/spacer.gif" width="1" height="1"></td>
      </tr>
    </table>
      <strong>
      <script language="JavaScript" type="text/JavaScript">
      function refresh()
      {
       window.location="admin.php?action=sendmail";
      }
         function send()
       {
         var diag_win="admin.php?action=send";
         var win=window.open(diag_win,"diag",'scrollbars=no,width=400,height=300');
       win.focus();
       }
       function edit_popup()
       {
          var edit_win='admin.php?action=editwin';
        var win=window.open(edit_win,"Editor_window",'scrollbars=no,width=650,height=500');
        win.focus();
       }

         </script>
      </strong><br>
      <br>
      <?php
if(!isset($stage))
{
?>
      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>

          <td bgcolor="#FFFFFF"><form name="form" method="post" action="admin.php?action=sendmail&stage=2" onSubmit="javascript:return check(this); ">
          <?//miro si es del history, si es asi le pongo en el email_id la direccion
          if (isset($history)){$email_id=$drow[0]['email_address'];};?>
          <?if (isset($email_id)){?>
          <input type="hidden" name="email_id" value="<?echo $email_id;?>">
          <?};
          if (isset($send_to)){?>
          <input type="hidden" name="send_to" value="<?echo $send_to;?>">
          <?}
          if (isset($group_id)){?>
          <input type="hidden" name="group_id" value="<?echo $group_id;?>">
          <?};?>
              <table width="100%" border="0" bgcolor="#FFFFFF">
                <tr>
                  <td width="87%"><span class="h3"><?php echo $lang_sendmail_send; ?> ( <?php echo $lang_sendmail_stage1; ?> )</span><br>
                      <span class="f8"><?php echo $lang_sendmail_sendselect; ?></span></td>
                </tr>
              </table><br>
              <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0" background="admin/images/interface/spacer_horizontal.gif">
                <tr>
                  <td width="612"><img src="admin/images/interface/spacer_horizontal.gif" width="1" height="1"></td>
                </tr>
              </table>
              <br>
              <table width="90%" border="0" align="center">
                <tr>
              <td width="10%"><DIV onMouseover="ddrivetip('<?php echo $lang_main_emailname_help.". ".$lang_main_emailadress; ?>', '#EFEFEF')"; onMouseout="hideddrivetip()"><img src="admin/images/question.gif" width="16" height="16" alt="" border=0> </div></td>
                  <td width="15%"><?php echo $lang_sendmail_from; ?> : </td>
                  <td width="75%"><input name="emailfrom" type="text" class="textbox" id="emailfrom4" value="<?php if(isset($history)){echo $drow[0]['emailfrom'];} else { echo $email_name; ?> &lt;<? echo $email_email;?>&gt;<?};?>" size="90" maxlength="100"> </td>
                </tr>
                <tr>
                <td width="10%"><DIV onMouseover="ddrivetip('<?php echo $lang_main_charsetiso_help; ?>', '#EFEFEF')"; onMouseout="hideddrivetip()"><img src="admin/images/question.gif" width="16" height="16" alt="" border=0> </div></td>
                <td width="15%" nowrap><?php echo $lang_main_charset; ?> : </td>

                <td width="75%"><select name="charsettype" id="charsettype">
        <?
          if (!isset($charsettype)){$charsettype="iso-8859-1";};
          if (isset($history)){
         $charsettype=$drow[0]['charsetiso'];
        };
        //echo " el charset es $charsettype";
          for ($charseti=1;$charseti <= 16 ;$charseti++){
          $selected= ($charsettype=="iso-8859-$charseti") ? " Selected":"";

          echo"<option value=\"iso-8859-$charseti\"$selected>".$lang_charsetiso[$charseti]."</option>";
        };
        //pongo los otros tipos de Mensajes como son texto, etc
        echo"<option value=\"utf-8\"";if ($charsettype=="utf-8") echo " Selected";echo ">".$lang_charsetiso[25]."</option>";
        echo"<option value=\"win1256\"";if ($charsettype=="win1256")echo " Selected";echo ">".$lang_charsetiso[26]."</option>";
        echo"<option value=\"cp-866\"";if ($charsettype=="cp-866")echo" Selected"; echo ">".$lang_charsetiso[27]."</option>";
        echo"<option value=\"tis-620\"";if ($charsettype=="tis-620")echo" Selected";echo ">".$lang_charsetiso[28]."</option>";
        echo"<option value=\"euc\"";if ($charsettype=="euc")echo" Selected"; echo">".$lang_charsetiso[29]."</option>";
        echo"<option value=\"sjis\"";if ($charsettype=="sjis")echo" Selected";echo">".$lang_charsetiso[30]."</option>";
        echo"<option value=\"euc-kr\"";if ($charsettype=="euc-kr")echo" Selected";echo">".$lang_charsetiso[31]."</option>";
        echo"<option value=\"koi8-r\"";if ($charsettype=="koi8-r")echo" Selected";echo">".$lang_charsetiso[32]."</option>";
        echo"<option value=\"gb2312\"";if ($charsettype=="gb2312")echo" Selected";echo">".$lang_charsetiso[33]."</option>";
        echo"<option value=\"big5\"";if ($charsettype=="big5")echo" Selected";echo">".$lang_charsetiso[34]."</option>";
        echo"<option value=\"windows-1251\"";if ($charsettype=="windows-1251")echo" Selected";echo">".$lang_charsetiso[35]."</option>";
    ?>
   </select>
 <a href="http://en.wikipedia.org/wiki/ISO_8859" target="_blank"><img src="admin/images/question.gif" alt="Click here to find out more about the charset options" width="16" height="16" border="0"></a>
 </td>
                </tr>
                 <tr>
                 <td width="10%"><DIV onMouseover="ddrivetip('<?php echo $lang_main_priority_help ?>', '#EFEFEF')"; onMouseout="hideddrivetip()"><img src="admin/images/question.gif" width="16" height="16" alt="" border=0> </div></td>
                  <td nowrap><?php echo $lang_priority_text; ?>:</td>
                  <td>
                  <?
                     if (isset($history)){
                     $priorityemail=$drow[0]['priority'];
                   };

                  ?>
                  <select name="priorityemail" id="priorityemail">
        <option value="1" <?php if ((isset($priorityemail)) && ($priorityemail==1)){ echo "selected"; }?>><?echo $lang_priority_high?></option>
        <option value="3"<?php if (((isset($priorityemail)) && ($priorityemail==3)) || (!isset($priorityemail))){ echo "selected"; }?>><?echo $lang_priority_normal?></option>
        <option value="5"<?php if ((isset($priorityemail)) && ($priorityemail==5)){ echo "selected"; }?>><?echo $lang_priority_low?></option>
          </select>  </td>
                </tr>
                <tr>
          <td width="10%"><DIV onMouseover="ddrivetip('<?php echo $lang_sendmail_subject; ?>', '#EFEFEF')"; onMouseout="hideddrivetip()"><img src="admin/images/question.gif" width="16" height="16" alt="" border=0> </div></td>
                  <td><?php echo $lang_sendmail_subject; ?>:</td>
                  <td><input name="subject" type="text" class="textbox" id="subject4" value="<?php if(isset($history))echo $drow[0]['subject'] ?>" size="90"  maxlength="250"></td>
                </tr>
              </table>
              <script language="javascript" src="admin/js/dhtml.js"></script>
              <br>
              <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td><table border="0" align="right">
                      <tr>
                        <td><img src="admin/images/textonly_icon.gif" width="20" height="20"></td>
                        <td><span class="menulink2" id="tab1" onClick="dhtml.cycleTab(this.id)" style="cursor: pointer; cursor: hand;"><a href="#dummy"><?php echo $lang_sendmail_text; ?></a></span></td>
                        <td >&nbsp;&nbsp;&nbsp;</td>
                        <td><img src="admin/images/html_icon.gif" width="20" height="20"></td>
                        <td class="menulink2" id="tab2" onClick="dhtml.cycleTab(this.id)" style="cursor: pointer; cursor: hand;"><a href="#dummy">HTML Version</a> </td>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                      </tr>
                    </table>
                      <div align="right"></div></td>
                </tr>
              </table>
              <br>
              <div id="page1" class="pagetext">
                <table width="90%" border="0" align="center">
                  <tr>
                    <td>
                      <table width="100%" border="0">
                        <tr>
                          <td><?php echo $lang_sendmail_textversion; ?></td>
                          <td><div align="right">
                              <script language="JavaScript" type="text/JavaScript">
                              function paste_text()
                              {
                              var doc=document.form.draft_name_text.value;
                              //modify to add html text too
                              if(doc=="")return;
                              //alert(doc);
                              var doc_html=doc.replace('text','html');
                              //alert(doc_html);
                              paste_html(doc_html);
                                <?php
            if(!($dir=opendir("admin/drafts/")))
                 {
                 echo "$lang_sendmail_errordrafts; </body></html>";
              return;
                 }
               $total_entries=0;

              while ( $name = readdir($dir))
                  {
                  if( $name=="." || $name==".." )continue;
                       if( is_file( "admin/drafts/".$name ))
                  {
                        if(strstr($name,"text"))
                  {
                        $fp=fopen("admin/drafts/".$name,"r");
                  $draft_content=fread($fp,filesize("admin/drafts/".$name));
                  fclose($fp);
                  echo "if(doc==\"$name\"){\ndocument.form.messagetext.value=document.form.messagetext.value+\"";
                        $draft_content=str_replace("\r\n","\\n",$draft_content);
                        //Modify by Moises Hdez.
                        $draft_content=str_replace("\n","\\n",$draft_content);
                        $draft_content=str_replace("\r","\\n",$draft_content);
                        $draft_content=str_replace("\n\r","\\n",$draft_content);
                  $draft_content=str_replace("<br>","",$draft_content);
                  echo $draft_content;
                  echo "\";}\n";
                  }
                  }
               }
?>
}
                              </script>
                              <select name="draft_name_text" class="textbox" id="select">
                                <option selected><?php echo $lang_sendmail_selectdraft; ?></option>
                                <?php
            if(!($dir=opendir("admin/drafts/")))
                 {
                 echo "$lang_sendmail_errordrafts; </body></html>";
              return;
                 }
               $total_entries=0;

              while ( $name = readdir($dir))
                  {
                  if( $name=="." || $name==".." )continue;
                       if( is_file( "admin/drafts/".$name ))
                  {
                        if(strstr($name,"text"))
                  {
                  $sname=str_replace("draft_","",$name);
                  $sname=str_replace("_text.php","",$sname);
                  $sname=str_replace("_"," ",$sname);

                  echo '<option value="'.$name.'"  >'.$sname.'</option>';
                  }
                  }
               }
               ?>
                              </select>
                              <input name="Button" type="button" class="textbox" value="Paste" onClick="javascript:paste_text();">
                          </div></td>
                        </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td>
                      <textarea name="messagetext" cols="110" rows="15" class="textbox" id="textarea" ><?php if(isset($history))echo $drow[0]['text_message']; ?></textarea></td>
                  </tr>
                </table>
                <br>
                <br>
              </div>
              <div id="page2" class="pagetext">
                <table width="90%" border="0" align="center">
                  <tr>
                    <td>
                      <table width="100%" border="0">
                        <tr>
                          <td><?php echo $lang_sendmail_htmlversion; ?></td>
                          <td><div align="right">
                              <script language="JavaScript" type="text/JavaScript">
                              function paste_html(doc_html)
                              {
                              //alert("paste_html");
                              if (doc_html){
                              var doc=doc_html
                              } else {
                              var doc=document.form.draft_name_html.value;
                              };
                              //alert(doc);
                              if(doc=="")return;
                                <?php
            if(!($dir=opendir("admin/drafts/")))
                 {
                 echo "$lang_sendmail_errordrafts; </body></html>";
              return;
                 }
               $total_entries=0;

              while ( $name = readdir($dir))
                  {
                  if( $name=="." || $name==".." )continue;
                       if( is_file( "admin/drafts/".$name ))
                  {
                        if(strstr($name,"html"))
                  {
                        $fp=fopen("admin/drafts/".$name,"r");
                  $draft_content=fread($fp,filesize("admin/drafts/".$name));
                  fclose($fp);
                  echo "if(doc==\"$name\"){\ndocument.form.messagehtml.value=document.form.messagehtml.value+\"";
                        $draft_content=str_replace("\r\n","\\n",$draft_content);
                        //Modify by Moises Hdez.
                        $draft_content=str_replace("\n","\\n",$draft_content);
                        $draft_content=str_replace("\r","\\n",$draft_content);
                        $draft_content=str_replace("\n\r","\\n",$draft_content);
                  //$draft_content=str_replace("<br>","",$draft_content);
                  echo $draft_content;
                  echo "\";}\n";
                  }
                  }
               }
               ?>
}
                              </script>
                              <select name="draft_name_html" class="textbox" id="select2">
                                <option selected><?php echo $lang_sendmail_selectdraft; ?></option>
                                <?php
            if(!($dir=opendir("admin/drafts/")))
                 {
                 echo "$lang_sendmail_errordrafts; </body></html>";
              return;
                 }
               $total_entries=0;

              while ( $name = readdir($dir))
                  {
                  if( $name=="." || $name==".." )continue;
                       if( is_file( "admin/drafts/".$name ))
                  {
                        if(strstr($name,"html"))
                  {
                  $sname=str_replace("draft_","",$name);
                  $sname=str_replace("_html.php","",$sname);
                  $sname=str_replace("_"," ",$sname);
                  echo '<option value="'.$name.'"  >'.$sname.'</option>';
                  }
                  }
               }
               ?>
                              </select>
                              <input name="Button3" type="button" class="textbox" value="Paste" onClick="javascript:paste_html()">
                          </div></td>
                        </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td width="63%">
                      <textarea name="messagehtml" cols="110" rows="15" class="textbox" id="textarea3"><?php if(isset($history))echo $drow[0]['html_message'] ?></textarea>
                      <br><span><a href="javascript:edit_popup()" class="menulink2"><?php echo $lang_sendmail_wysiwyg; ?></a> </span></td>
                  </tr>
                  <tr>
                    <td>
                      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0" id="50">
                        <tr>
                        </tr>
                        <tr>

                          <td bgcolor="#FFFFFF">
                            <table width="95%" border="0" align="center">
                              <tr>
                                <td>
                                <script language="JavaScript" type="text/JavaScript">
                                function template_box()
                                {
                                if(document.form.template.checked=="1")
                                   {
                                   document.getElementById("template_box").style.display="block";
                                   updatePreview(at_number);
                                   }else
                                   {
                                   document.getElementById("template_box").style.display="none";
                                   }
                                }
                                var at_file= new Object();
                                var at_name= new Object();
                                var at_author= new Object();
                                var at_desc= new Object();
                                var at_home= new Object();
                                var at_number = new Number(0);

                               <?php
            if(!($dir=opendir("admin/templates/")))
                 {
                 echo "Error : Unable to access the templates directory !!!</body></html>";
                 return;
                 }
               $total_entries=0;
               /* we will dislplay 3 templates at a time */
              while ( $name = readdir($dir))
                  {
                  if( $name=="." || $name==".." )continue;
                       if( is_dir( "admin/templates/".$name ))
                  {
                  //$selected="";
                        include("admin/templates/".$name."/info.php");
                  echo "at_file[$total_entries]=new String('$name');\n";
                  echo "at_name[$total_entries]=new String('$t_name');\n";
                  echo "at_author[$total_entries]=new String('$t_author');\n";
                  echo "at_desc[$total_entries]=new String('$t_desc');\n";
                  echo "at_home[$total_entries]=new String('$t_home');\n";
                  $total_entries++;
                  }
               }
               echo "var at_number_max = new Number(".($total_entries-1).");";
?>
              function updatePreview(num)
               {
               //alert("change");
               document.preview.src="admin/templates/"+at_file[num]+"/"+"preview.jpg";
               document.getElementById("t_name").innerHTML=at_name[num];
               document.getElementById("t_author").innerHTML=at_author[num];
               document.getElementById("t_desc").innerHTML=at_desc[num];
               document.getElementById("t_home").innerHTML=at_home[num];
               document.forms[0].template_name.value=at_file[num];
               //alert("test val : " +document.forms[0].template_name);
              }
               function template_next()
              {
               at_number++;
               if(at_number>at_number_max)at_number=0;
               updatePreview(at_number);
              }
               function at_next()
              {
               at_number++;
               if(at_number>at_number_max)at_number=0;
              }
               function template_previous()
              {
               at_number--;
               if(at_number<0)at_number=at_number_max;
               updatePreview(at_number);
              }
               //updatePreview(0);
      </script>
                                  <input name="template" type="checkbox" id="template" value="true" <?php if((isset($history)) && (strlen($drow[0]['template'])>0) )echo 'checked'; ?> onClick="template_box()">
                                  <?php echo $lang_sendmail_usetemplate; ?>
                                  <input type="hidden" name="template_name" id="template_name2" value="tttttt">
                                </td>
                              </tr>
                            </table>
                            <div id="template_box"  style="display:none">
                              <table width="95%" border="0" align="center">
                                <tr>
                                  <td height="89">
                                    <table width="200" border="0">
                                      <tr>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                      </tr>
                                      <tr>
                                        <td width="16"><img src="admin/images/previous_icon.gif" width="16" height="16"  onClick="javascript:template_previous();" style="cursor: pointer; cursor: hand;"></td>
                                        <td><table border="0" align="center" cellpadding="2" cellspacing="0">
                                            <tr>
                                              <td width="12%"><div align="center"> <img src="admin/images/notemplate.gif" alt="No Preview Availible" name="preview" ></div></td>
                                            </tr>
                                        </table></td>
                                        <td width="16"><img src="admin/images/next_icon.gif" width="16" height="16" onClick="javascript:template_next();" style="cursor: pointer; cursor: hand;"></td>
                                      </tr>
                                      <tr>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                      </tr>
                                  </table></td>
                                  <td width="54%">
                                    <table width="100%" border="0">
                                      <tr>
                                        <td width="40%" class="f8"><?php echo $lang_sendmail_templateName; ?></td>
                                        <td width="60%" class="f8">: <span id="t_name"><?php echo $lang_sendmail_templateNone; ?></span></td>
                                      </tr>
                                      <tr>
                                        <td class="f8"><?php echo $lang_sendmail_TemplateAuthor; ?></td>
                                        <td class="f8">: <span id="t_author"><?php echo $lang_sendmail_templateNone; ?></span></td>
                                      </tr>
                                      <tr>
                                        <td class="f8"><?php echo $lang_sendmail_templateDescription; ?></td>
                                        <td class="f8">: <span id="t_desc"><?php echo $lang_sendmail_templateNone; ?></span></td>
                                      </tr>
                                      <tr>
                                        <td class="f8"><?php echo $lang_sendmail_templateHomepage; ?></td>
                                        <td class="f8"> : <span id="t_home"><?php echo $lang_sendmail_templateNone; ?></span></td>
                                      </tr>
                                  </table></td>
                                </tr>
                                <tr>
                                  <td colspan="2">
                                    <div align="center"><?php echo $lang_sendmail_helptemplate; ?></div></td>
                                </tr>
                              </table>
                                                          <?php if((isset($history)) && (strlen($drow[0]['template'])>0) ) {?>
                       <script language="JavaScript" type="text/JavaScript">
                       template_box();
                        while(1)
                       {
                       if(at_file[at_number]=='<?php echo $drow[0]['template']; ?>')
                          {updatePreview(at_number); break; } else
                        {  at_next();
                        if(at_number>25)break;
                         }
                       }
                       </script>
                        <?php } ?>
                          </div></td>

                        </tr>
                        <tr>
                        </tr>
                    </table></td>
                  </tr>
                </table>
              </div>
              <br>
              <a name="attach"></a>
              <script language="javascript" type="text/javascript">
   dhtml.cycleTab('tab1');
      </script>
              <input name="sendemail" type="hidden" id="sendemail3" value="true">
              <input name="task_id1" type="hidden"  value="<?php if(isset($task_id)) echo $task_id; else echo -1;?>">
              <strong> </strong> <br>
              <table width="90%" border="0" align="center">
                <tr>
                  <td><div align="center">
                      <table border="0" cellpadding="0" cellspacing="0"  onClick="javascript:check()" style="cursor: pointer; cursor: hand;">
                        <tr>
                          <td><img src="admin/images/button_l.gif" width="9" height="24"></td>
                          <td width="70" background="admin/images/button_m.gif">
                            <div align="center"><strong><font color="#FFFFFF"><?php echo $lang_sendmail_nextbutton; ?></font></strong></div></td>
                          <td><img src="admin/images/button_r.gif" width="8" height="24"></td>
                        </tr>
                      </table>
                  </div></td>
                </tr>
              </table>
              <br>
          </form></td>

        </tr>
        <tr>
        </tr>
      </table>
      <?php
      } else if ($stage==2) {
      ?>
      <?if (isset($email_id)){?>
      <input type="hidden" name="email_id" value="<?echo $email_id;?>">
      <?};
      if (isset($send_to)){?>
      <input type="hidden" name="send_to" value="<?echo $send_to;?>">
      <?}
      if (isset($group_id)){?>
      <input type="hidden" name="group_id" value="<?echo $group_id;?>">
      <?};?>

      <?php if($database=="custom"){} else { ?>
      <script language="javascript" src="admin/js/dhtml.js"></script>
      <?php }
      ?>
      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>

          <td bgcolor="#FFFFFF"><form name="form1" method="post" action="admin.php?action=sendmail&stage=3" >
              <table width="100%" border="0" bgcolor="#FFFFFF">
                <tr>
                  <td width="87%"><span class="h3"><?php echo $lang_sendmail_send; ?> ( <?php echo $lang_sendmail_stage2; ?> )</span><br>
                      <span class="f8"><?php echo $lang_sendmail_sendselect; ?></span></td>
                </tr>
              </table><br>
              <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0" background="admin/images/interface/spacer_horizontal.gif">
                <tr>
                  <td width="612"><img src="admin/images/interface/spacer_horizontal.gif" width="1" height="1"></td>
                </tr>
              </table>
              <br>
              <table width="90%" border="0" align="center">
                <tr>
                  <td width="15%"><strong><?php echo $lang_sendmail_from; ?></strong></td>
                  <td width="85%"> : <?php echo htmlspecialchars($drow[0]['emailfrom']);?></td>
                </tr>
                <tr>
                  <td><strong><?php echo $lang_sendmail_subject; ?></strong></td>
                  <td>: <?php echo $drow[0]['subject'] ?> </td>
                </tr>
              </table>
              <br>
              <br>
              <table width="90%" border="0" align="center">
                <tr>
                  <td><?php echo $lang_sendmail_textversion_view; ?> </td>
                </tr>
                <tr>
                  <td><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" background="admin/images/interface/spacer_horizontal.gif">
                      <tr>
                        <td width="612"><img src="admin/images/interface/spacer_horizontal.gif" width="1" height="1"></td>
                      </tr>
                    </table>
                      <br>
                      <?php echo str_replace("\n","<br>",$drow[0]['text_message']); ?><br>
                      <br>
                  </td>
                </tr>
              </table>
              <br>
              <br>
              <table width="90%" border="0" align="center">
                <tr>
                  <td><?php echo $lang_sendmail_htmlversion_view; ?></td>
                </tr>
                <tr>
                  <td width="63%"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" background="admin/images/interface/spacer_horizontal.gif">
                      <tr>
                        <td width="612"><img src="admin/images/interface/spacer_horizontal.gif" width="1" height="1"></td>
                      </tr>
                    </table>
                      <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" background="admin/images/interface/spacer_horizontal.gif">
                        <tr>
                          <td width="612"><img src="admin/images/interface/spacer_horizontal.gif" width="1" height="1"></td>
                        </tr>
                      </table>
                      <br>
                      <?php
           if(strlen($drow[0]['template']))
           {
           $template=$drow[0]['template'];
           $fp=fopen("admin/templates/".$template."/email.htm","r");
           $html=fread($fp,filesize("admin/templates/".$template."/email.htm"));
           fclose($fp);
           $html=str_replace("{content}",$drow[0]['html_message'],$html);
           $html=str_replace("{ulink}","<a href=\"".$website.$main_dir."unsubscribe ID\">",$html);
           $html=str_replace("{/ulink}","</a>",$html);
           $html=str_replace("images/",$website.$main_dir."admin/templates/".$template."/images/",$html);
           echo $html;}else{
           echo $drow[0]['html_message'] ;
           }


           ?>
                      <br>
                      <br>
                  </td>
                </tr>
              </table>
              <br>
              <a name="attach"></a> <br>
              <table width="90%" border="0" align="center">
                <tr>
                  <td><strong><?php echo $lang_sendmail_to; ?></strong></td>
                </tr>
                <tr>
                  <td>
                    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" background="admin/images/interface/spacer_horizontal.gif">
                      <tr>
                        <td width="612"><img src="admin/images/interface/spacer_horizontal.gif" width="1" height="1"></td>
                      </tr>
                    </table>
                    <?php if($database=="custom") { ?>
                    <table width="100%" border="0" cellspacing="5" cellpadding="5">
                      <tr>
                        <td width="18">&nbsp;</td>
                        <td width="644"><div align="center"><?php echo $lang_sendmail_everyone; ?></div></td>
                      </tr>
                    </table>
                    <?php } else { ?>
                    <table width="100%" border="0" cellpadding="0" cellspacing="10">
                      <tr>
                        <td width="18" valign="top"></td>
                        <td width="312" valign="top">&nbsp;</td>
                        <td width="310" valign="top"><p>
                            <label>
                            <input class="menulink2" id="tab1" onClick="dhtml.cycleTab(this.id)" name="send_to" type="radio" value="single" <?php if($mserver=="php") echo 'checked'; ?> >
        - <?php echo $lang_sendmail_single; ?></label>
                            <br>
                            <label>
                            <input class="menulink2" id="tab2" onClick="dhtml.cycleTab(this.id)" type="radio" name="send_to" value="group" <?php if(($mserver=="sendmail") or (isset($send_to))) echo 'checked';?> >
        - <?php echo $lang_sendmail_group; ?></label>
                            <br>
                            <label>
                            <input class="menulink2" id="tab3" onClick="dhtml.cycleTab(this.id)" type="radio" name="send_to" value="all" <?php if($mserver=="smtp") echo 'checked'; ?> >
        - <?php echo $lang_sendmail_every; ?></label>

                        </p></td>
                      </tr>
                      <tr>
                        <td colspan="3">
                          <div id="page3" class="pagetext">
                            <table width="100%" border="0" cellspacing="5" cellpadding="5">
                              <tr>
                                <td width="18">&nbsp;</td>
                                <td width="644"><div align="center"><?php echo $lang_sendmail_everyone; ?></div></td>
                              </tr>
                            </table>
                          </div>
                          <div id="page1" class="pagetext">
                            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                              <tr>
                                <td width="5%">
                                  <DIV onMouseover="ddrivetip('<?php echo $lang_sendmail_emailID_help; ?>', '#EFEFEF')";
                  onMouseout="hideddrivetip()"><img src="admin/images/question.gif" width="16" height="16" alt="" border=0> </div></td>
                                <td width="48%"><?php echo $lang_sendmail_emailID; ?></td>
                                <td width="47%">
                               <input type="text" name="email_id" id="email_id" value="<? if (isset($email_id)){ echo $email_id;};?>" size="40" class="textbox">
                                </td>
                              </tr>
                            </table>
                          </div>
                          <div id="page2" class="pagetext">
                            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                              <tr>
                                <td width="5%">
                                  <DIV onMouseover="ddrivetip('<?php echo $lang_sendmail_group_help; ?>', '#EFEFEF')";
                  onMouseout="hideddrivetip()"><img src="admin/images/question.gif" width="16" height="16" alt="" border=0> </div></td>
                                <td width="48%"><?php echo $lang_sendmail_group; ?></td>
                                <td width="47%"><select name="group_id" class="textbox" >
                                    <option><?php echo $lang_edit_jump_group; ?></option>
                                    <?php
                                    $rs=&$conn->Execute('SELECT  *  FROM  wiml_mailgroup');
                                    $rows=$rs->GetArray();
                                    foreach($rows as $row)
                                    {
                                    $selected_group=($group_id == $row['id']) ? " selected":"";
                                    echo '<option value="'.$row['id'].'" '.$selected_group.' >'.$row['name'].'</option>';
                                    }
                                    ?>
                                  </select>
                                </td>
                              </tr>
                            </table>
                        </div></td>
                      </tr>
                    </table>
                    <script language="javascript" type="text/javascript">
                    <?
                    //if send_to to the group file
                    //si se le dio enviar mensaje al grupo desde la pagina grupos

                    if (isset($send_to)){?>
                    dhtml.cycleTab('tab2');
                    <?} else {;?>
                    dhtml.cycleTab('tab1');
                    <?};?>
      </script>
                    <?php } ?>
                  </td>
                </tr>
              </table>
              <input name="sendemail2" type="hidden" id="sendemail23" value="true">
              <strong>
              <input name="MAX_FILE_SIZE2" type="hidden" id="MAX_FILE_SIZE23" value="1000000">
              </strong>
              <input name="sendemail" type="hidden"  value="true">
              <input name="task_id" type="hidden"  value="<?php echo $task_id; ?>">
              <br>
              <table width="90%" border="0" align="center">
                <tr>
                  <td><div align="center">
                      <table border="0">
                        <tr>
                          <td>
                            <table border="0" cellpadding="0" cellspacing="0"  onClick="javascript:back1()" style="cursor: pointer; cursor: hand;">
                              <tr>
                                <td><img src="admin/images/button_l.gif" width="9" height="24"></td>
                                <td width="70" background="admin/images/button_m.gif">
                                  <div align="center"><strong><font color="#FFFFFF"><?php echo $lang_sendmail_backbutton; ?></font></strong></div></td>
                                <td><img src="admin/images/button_r.gif" width="8" height="24"></td>
                              </tr>
                          </table></td>
                          <td><script language="JavaScript" type="text/JavaScript">
                          function check1()
                          {
                          <?php if($database=="custom") echo "document.form1.submit();\r\n"; else { ?>
                          if(document.form1.send_to[0].checked=="1")
                        {
                          if(document.form1.email_id.value=="")
                        {
                          alert ("<?php echo $lang_sendmail_single_error ?>");
                          return false;
                        }
                          document.form1.submit();
                        }
                          else if (document.form1.send_to[1].checked=="1")
                        {
                          if(document.form1.group_id.value=="")
                        {
                          alert ("<?php echo $lang_sendmail_group_error ?>");
                          return false;
                        }
                          document.form1.submit();
                        }
                          else if (document.form1.send_to[2].checked=="1")
                        {
                          document.form1.submit();
                        }
                          <?php } ?>
                        }
                          function back1()
                        {
                          document.form1.action="admin.php?action=sendmail&history=true&task_id=<?php echo $task_id; ?>";
                          document.form1.submit();
}
      </script>
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                          <td>
                            <table border="0" cellpadding="0" cellspacing="0"  onClick="javascript:check1()" style="cursor: pointer; cursor: hand;">
                              <tr>
                                <td><img src="admin/images/button_l.gif" width="9" height="24"></td>
                                <td width="70" background="admin/images/button_m.gif">
                                  <div align="center"><strong><font color="#FFFFFF"><?php echo $lang_sendmail_sendbutton; ?></font></strong></div></td>
                                <td><img src="admin/images/button_r.gif" width="8" height="24"></td>
                              </tr>
                          </table></td>
                        </tr>
                      </table>
                  </div></td>
                </tr>
              </table>
              <br>
          </form></td>

        </tr>
        <tr>
        </tr>
      </table>
      <?php
}else if($stage==3)
{
?>
      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
        </tr>
        <tr>

          <td bgcolor="#FFFFFF"><form name="form" method="post" action="admin.php?action=sendmail&stage=3" onSubmit="javascript:return check(this); ">
              <table width="100%" border="0" bgcolor="#FFFFFF">
                <tr>
                  <td width="87%"><span class="h3"><?php echo $lang_sendmail_send; ?> ( <?php echo $lang_sendmail_stage3; ?> )</span><br>
                      <span class="f8"><?php echo $lang_sendmail_sendselect; ?></span></td>
                </tr>
              </table><br><br>
              <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0" background="admin/images/interface/spacer_horizontal.gif">
                <tr>
                  <td width="612"><img src="admin/images/interface/spacer_horizontal.gif" width="1" height="1"></td>
                </tr>
              </table>
              <br>
              <center>
                <iframe height="200" width="400" src="admin.php?action=send&task_id=<?php echo $task_id; ?>" frameborder="0" scrolling="no"></iframe>
              </center>
              <br>
              <p></p>
          </form></td>

        </tr>
        <tr>
        </tr>
      </table>
      <?php } ?></td>
    <td width="20">&nbsp;</td>
  </tr>
</table>