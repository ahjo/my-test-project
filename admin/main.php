<?php if(!isset($_SESSION['admin'])){echo 'Hacking attempted'; return ;} ?>
<table width="770" border="0" align="center" cellpadding="0" cellspacing="0" background="admin/images/interface/bgmaintable.gif">
    <tr>
      <td width="21">&nbsp;</td>
      <td><table width="98%" border="0" cellpadding="0" cellspacing="1" bgcolor="FFFFFF">
        <tr>
          <td>
            <form name="form" method="post" action="admin.php">
              <input name="action" type="hidden" id="action" value="main">
              <input name="change" type="hidden" id="change" value="true">
              <strong> </strong>
              <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>

                  <td class="h3">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td height="25" class="h3"><?php echo $lang_main_settings; ?></td>
                        <td valign="bottom"><div align="right" class="f8"><?php echo $lang_main_global; ?></div></td>
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
              <script language="javascript" src="admin/js/dhtml.js"></script>
              <br>
              <table width="90%" border="0" align="center" cellpadding="4" cellspacing="1">
                <tr>
                  <td width="10"><strong>
                    <script language="JavaScript" type="text/JavaScript">
         function diag()
                 {
         var diag_win="admin.php?action=diag";
         var win=window.open(diag_win,"diag",'scrollbars=no,width=400,height=300');
                 win.focus();
                 }
                  function vote()
                 {
         var vote_win="admin.php?action=vote";
         var win=window.open(vote_win,"vote",'scrollbars=no,width=400,height=300');
                 win.focus();
                 }


      </script>
                  </strong></td>
                  <td>
                    <div align="right"><strong> </strong>
                        <table border="0">
                          <tr>
                            <td><img src="admin/images/script_icon.gif" width="16" height="16"></td>
                            <td><span class="menulink2" id="tab1" onClick="dhtml.cycleTab(this.id)"><a href="#dummy"><?php echo $lang_main_script; ?></a></span> </td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><img src="admin/images/database_icon.gif" width="16" height="16"></td>
                            <td class="menulink2" id="tab2" onClick="dhtml.cycleTab(this.id)"><a href="#dummy"><?php echo $lang_main_database; ?></a></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><img src="admin/images/email_icon.gif" width="16" height="16"></td>
                            <td class="menulink2" id="tab3" onClick="dhtml.cycleTab(this.id)"><a href="#dummy"><?php echo $lang_main_email; ?></a></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><img src="admin/images/logout.gif" width="20" height="20"></td>
                            <td class="menulink2" id="tab4" onClick="dhtml.cycleTab(this.id)"><a href="#dummy"><?php echo $lang_main_security; ?></a></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><img src="admin/images/server_icon.gif" width="16" height="16"></td>
                            <td class="menulink2" id="tab5" onClick="dhtml.cycleTab(this.id)"><a href="#dummy"><?php echo $lang_main_server; ?></a></td>
                          </tr>
                        </table>
                  </div></td>
                </tr>
              </table>
              <p><a name="program"></a></p>
              <div id="page1" class="pagetext">
                <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>

                    <td bgcolor="#FFFFFF"><table width="100%" border="0" bgcolor="#FFFFFF">
                        <tr>
                            <td><p><span class="h3"><?php echo $lang_main_script; ?></span><strong><br>
                          </strong><span class="f8"><?php echo $lang_main_script_about; ?></span></p></td>
                        </tr>
                        <tr>
                          <td colspan="2"><br><table width="95%" border="0" align="center" cellpadding="0" cellspacing="0" background="admin/images/interface/spacer_horizontal.gif">
                              <tr>
                                <td width="612"><img src="admin/images/interface/spacer_horizontal.gif" width="1" height="1"></td>
                              </tr>
                            </table>
                              <br>
                              <table width="100%" border="0" cellpadding="0" cellspacing="10">
                                <tr>
                                  <td width="18">
                                    <DIV onMouseover="ddrivetip('<?php echo $lang_main_website_help; ?>', '#EFEFEF')";
                  onMouseout="hideddrivetip()"><img src="admin/images/question.gif" width="16" height="16" alt="" border=0> </div></td>
                                  <td width="50%"><?php echo $lang_main_website; ?></td>
                                  <td width="50%"><input name="nwebsite" type="text" class="textbox" id="nwebsite" value="<?php echo $website; ?>" size="40" maxlength="80"></td>
                                </tr>
                                <tr>
                                  <td width="18">
                                    <DIV onMouseover="ddrivetip('<?php echo $lang_main_relative_help; ?>', '#EFEFEF')";
                  onMouseout="hideddrivetip()"><img src="admin/images/question.gif" width="16" height="16" alt="" border=0> </div></td>
                                  <td><?php echo $lang_main_relative; ?></td>
                                  <td><input name="nmain_dir" type="text" class="textbox" id="nmain_dir" value="<?php echo $main_dir; ?>" size="40" maxlength="80"></td>
                                </tr>
                                <tr>
                                  <td>
                                    <DIV onMouseover="ddrivetip('<?php echo $lang_main_string_help; ?>', '#EFEFEF')";
                  onMouseout="hideddrivetip()"><img src="admin/images/question.gif" width="16" height="16" alt="" border=0> </div></td>
                                  <td><?php echo $lang_main_string; ?></td>
                                  <td><input name="nrelative_string" type="text"  class="textbox" value="<?php echo $relative_string; ?>" size="40" maxlength="200"></td>
                                </tr>
                                <tr>
                                  <td>
                                    <DIV onMouseover="ddrivetip('<?php echo $lang_main_absolute_path_help; ?>', '#EFEFEF')";
                  onMouseout="hideddrivetip()"><img src="admin/images/question.gif" width="16" height="16" alt="" border=0> </div></td>
                                  <td><?php echo $lang_main_absolute_path; ?></td>
                                  <td><input name="nabsolute_path" type="text"  class="textbox" value="<?php echo $absolute_path; ?>" size="40" maxlength="200"></td>
                                </tr>
                                <tr>
                                  <td><DIV onMouseover="ddrivetip('<?php echo $lang_main_Language_help; ?>', '#EFEFEF')";
                  onMouseout="hideddrivetip()"><img src="admin/images/question.gif" width="16" height="16" alt="" border=0></div></td>
                                  <td><?php echo $lang_main_Language; ?></td>
                                  <td><select name="nlang" class="textbox" id="nlang"  >
                                      <?php
                                if(!($dir=opendir("lang/")))
                                          {
                                          echo "Error : Unable to access the templates directory !!!</body></html>";
                                          return;
                                          }
                                        $total_entries=0;
                                  while ( $name = readdir($dir))
                                                {
                                                if( $name=="." || $name==".." )continue;
                            if( is_file( "lang/".$name ))
                                                {
                                                $selected="";
                                                if(isset($lang) && ( $lang==$name ))
                                                {
                                                $selected="selected";
                                                }
                                                $show_name=str_replace("lang_","",$name);
                                                $show_name=str_replace(".php","",$show_name);
                                                $show_name=ucwords($show_name);
                                                echo '<option value="'.$name.'" '.$selected .' >'.$show_name.'</option>';
                                                }
                                        }
                                        ?>
                                  </select></td>
                                </tr>
                            </table></td>
                  </tr>
        </table></td>

                  </tr>
                </table>
              </div>
              <p><a name="database"></a> </p>
              <div id="page2" class="pagetext">
                <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>

                    <td bgcolor="#FFFFFF">
                      <table width="100%" border="0" bgcolor="#FFFFFF">
                        <tr>
                          <td><span class="h3"><?php echo $lang_main_databaseset; ?></span><br>
                              <span class="f8"><?php echo $lang_main_databasesetex; ?></span></td>
                        </tr>
                        <tr>
                          <td colspan="2"><br>
                            <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0" background="admin/images/interface/spacer_horizontal.gif">
                              <tr>
                                <td width="612"><img src="admin/images/interface/spacer_horizontal.gif" width="1" height="1"></td>
                              </tr>
                            </table>
                            <br>
                          <script language="JavaScript" type="text/JavaScript">
                            switchdb=new cardView("pdata","tdata",false);

                            function change_database()
                            {
                            switch(document.form.ndatabase.value)
                            {
                            case "custom":
                            switchdb.cycleTab('tdata1');
                            break;

                            default :
                            switchdb.cycleTab('tdata2');
                            break;
                            }
                            }
                          </script>
                            <table width="95%" border="0" align="center" cellpadding="5" cellspacing="0">
                              <tr>
                                <td width="20%">Select Database </td>
                                <td width="80%"><select name="ndatabase" class="textbox" id="ndatabase" onChange="javascript:change_database();">
                                    <option value="mysql" <?php if($database=="mysql")echo " selected "; ?> >MySQL</option>
                                    <option value="postgres7" <?php if($database=="postgres7")echo " selected "; ?> >PostgreSQL</option>
                                    <option value="mssql" <?php if($database=="mssql")echo " selected "; ?> >MS SQL Server</option>
                                    <option value="custom" <?php if($database=="custom")echo " selected "; ?> >Custom</option>
                                </select></td>
                              </tr>
                            </table>
                            <table width="95%" border="0" align="center" cellpadding="5" cellspacing="0">
                              <tr>
                                <td></td>
                              </tr>
                            </table>
                            <table width="100%" align="center" cellpadding="0" cellspacing="10" >
                              <tr>
                                <td width="18">
                                  <DIV onMouseover="ddrivetip('<?php echo $lang_main_hostname_help; ?>', '#EFEFEF')";
                  onMouseout="hideddrivetip()"><img src="admin/images/question.gif" width="16" height="16" alt="" border=0> </div></td>
                                <td width="50%"><?php echo $lang_main_hostname; ?></td>
                                <td width="50%">
                                  <input name="ndbhostname" type="text" class="textbox" id="ndbhostname" value="<?php echo $dbhostname; ?>" size="40" maxlength="200">
                                </td>
                              </tr>
                              <tr>
                                <td><DIV onMouseover="ddrivetip('<?php echo $lang_main_databaseuser_help; ?>', '#EFEFEF')";
                  onMouseout="hideddrivetip()"><img src="admin/images/question.gif" width="16" height="16" alt="" border=0></div></td>
                                <td><?php echo $lang_main_databaseuser; ?></td>
                                <td><input name="ndbusername" type="text" class="textbox" id="ndbusername2" value="<?php echo $dbusername; ?>" size="40" maxlength="200"></td>
                              </tr>
                              <tr>
                                <td><DIV onMouseover="ddrivetip('<?php echo $lang_main_databasepass_help; ?>', '#EFEFEF')";
                  onMouseout="hideddrivetip()"><img src="admin/images/question.gif" width="16" height="16" alt="" border=0></div></td>
                                <td><?php echo $lang_main_databasepass; ?></td>
                                <td><input name="ndbpassword" type="text" class="textbox" id="ndbpassword2" value="<?php echo $dbpassword; ?>" size="40" maxlength="200"></td>
                              </tr>
                              <tr>
                                <td><DIV onMouseover="ddrivetip('<?php echo $lang_main_databasename_help; ?>', '#EFEFEF')";
                  onMouseout="hideddrivetip()"><img src="admin/images/question.gif" width="16" height="16" alt="" border=0></div></td>
                                <td><?php echo $lang_main_databasename; ?></td>
                                <td><input name="ndbname" type="text" class="textbox"  value="<?php echo $dbname; ?>" size="40" maxlength="200"></td>
                              </tr>
                            </table>
                            <div id="pdata1" class="pagetext">
                              <table width="100%" align="center" cellpadding="0" cellspacing="10">
                                <tr>
                                  <td width="18">
                                    <DIV onMouseover="ddrivetip('<?php echo $lang_main_hostname_help; ?>', '#EFEFEF')";
                  onMouseout="hideddrivetip()"><img src="admin/images/question.gif" width="16" height="16" alt="" border=0> </div></td>
                                  <td width="50%">Table Name</td>
                                  <td width="50%">
                                    <input name="ndbtable" type="text" class="textbox" value="<?php echo $dbtable; ?>" size="40">
                                  </td>
                                </tr>
                                <tr>
                                  <td><DIV onMouseover="ddrivetip('<?php echo $lang_main_hostname_help; ?>', '#EFEFEF')";
                  onMouseout="hideddrivetip()"><img src="admin/images/question.gif" width="16" height="16" alt="" border=0> </div></td>
                                  <td>Username field name</td>
                                  <td><input name="nuserfield" type="text" class="textbox" id="userfield" value="<?php echo $userfield; ?>" size="40"></td>
                                </tr>
                                <tr>
                                  <td><DIV onMouseover="ddrivetip('<?php echo $lang_main_hostname_help; ?>', '#EFEFEF')";
                  onMouseout="hideddrivetip()"><img src="admin/images/question.gif" width="16" height="16" alt="" border=0> </div></td>
                                  <td>Email Field name </td>
                                  <td><input name="nemailfield" type="text" class="textbox" id="emailfield" value="<?php echo $emailfield; ?>" size="40"></td>
                                </tr>
                              </table>
                            </div>
                            <div id="pdata2" class="pagetext"> </div></td>
                        </tr>
                    </table></td>

                  </tr>
                </table>
              </div>
              <p><a name="email"></a> </p>
              <div id="page3" class="pagetext">
                <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td bgcolor="#FFFFFF">
                      <table width="100%" border="0" bgcolor="#FFFFFF">
                        <tr>
                          <td><span class="h3"><?php echo $lang_main_email; ?></span><br>
                              <span class="f8"><?php echo $lang_main_emailex; ?></span></td>
                        </tr>
                        <tr>
                          <td colspan="2"><br><table width="95%" border="0" align="center" cellpadding="0" cellspacing="0" background="admin/images/interface/spacer_horizontal.gif">
                              <tr>
                                <td width="612"><img src="admin/images/interface/spacer_horizontal.gif" width="1" height="1"></td>
                              </tr>
                            </table>
                              <br>
                              <table width="100%" border="0" cellpadding="0" cellspacing="10">
                                <tr>
                                  <td width="18">
                                    <DIV onMouseover="ddrivetip('<?php echo $lang_main_emailname_help; ?>', '#EFEFEF')";
                  onMouseout="hideddrivetip()"><img src="admin/images/question.gif" width="16" height="16" alt="" border=0> </div></td>
                                  <td width="50%"><?php echo $lang_main_emailname; ?></td>
                                  <td width="50%"><input name="nemail_name" type="text" class="textbox" id="nemail_name" value="<?php echo $email_name; ?>" size="40"></td>
                                </tr>
                                <tr>
                                  <td width="18">
                                    <DIV onMouseover="ddrivetip('<?php echo $lang_main_emailadress_help; ?>', '#EFEFEF')";
                  onMouseout="hideddrivetip()"><img src="admin/images/question.gif" width="16" height="16" alt="" border=0> </div></td>
                                  <td><?php echo $lang_main_emailadress; ?></td>
                                  <td><input name="nemail_email" type="text" class="textbox" id="nemail_email" value="<?php echo $email_email; ?>" size="40"></td>
                                </tr>
                                <tr>
                                  <td width="18">
                                    <DIV onMouseover="ddrivetip('<?php echo $lang_main_thankstitle_help; ?>', '#EFEFEF')";
                  onMouseout="hideddrivetip()"><img src="admin/images/question.gif" width="16" height="16" alt="" border=0> </div></td>
                                  <td><?php echo $lang_main_thankstitle; ?></td>
                                  <td><input name="nemail_thank_title" type="text" class="textbox" id="nemail_thank_title" value="<?php echo $email_thank_title; ?>" size="40"></td>
                                </tr>
                                <tr>
                                  <td width="18">
                                    <DIV onMouseover="ddrivetip('<?php echo $lang_main_thanksmessage_help; ?>', '#EFEFEF')";
                  onMouseout="hideddrivetip()"><img src="admin/images/question.gif" width="16" height="16" alt="" border=0> </div></td>
                                  <td><?php echo $lang_main_thanksmessage; ?></td>
                                  <td><textarea style="BACKGROUND-COLOR: #EEEEEE; SCROLLBAR-TRACK-COLOR: #EEEEEE; SCROLLBAR-ARROW-COLOR: black;" name="nemail_thank_message" cols="60" rows="4" class="textbox" id="textarea"><?php echo pnline($email_thank_message); ?></textarea></td>
                                </tr>
                                <tr>
                                  <td width="18">
                                    <DIV onMouseover="ddrivetip('<?php echo $lang_main_unsubscribe_help; ?>', '#EFEFEF')";
                  onMouseout="hideddrivetip()"><img src="admin/images/question.gif" width="16" height="16" alt="" border=0> </div></td>
                                  <td><?php echo $lang_main_unsubscribe; ?></td>
                                  <td><textarea style="BACKGROUND-COLOR: #EEEEEE; SCROLLBAR-TRACK-COLOR: #EEEEEE; SCROLLBAR-ARROW-COLOR: black;" name="nemail_unsubscribe_message" cols="60" rows="4" class="textbox" id="textarea2"><?php echo pnline($email_unsubscribe_message); ?></textarea></td>
                                </tr>
                                <tr>
                                  <td width="18">
                                    <DIV onMouseover="ddrivetip('<?php echo $lang_main_verify_help; ?>', '#EFEFEF')";
                  onMouseout="hideddrivetip()"><img src="admin/images/question.gif" width="16" height="16" alt="" border=0> </div></td>
                                  <td><?php echo $lang_main_verify; ?></td>
                                  <td><textarea style="BACKGROUND-COLOR: #EEEEEE; SCROLLBAR-TRACK-COLOR: #EEEEEE; SCROLLBAR-ARROW-COLOR: black;" name="nemail_verify_message" cols="60" rows="5" class="textbox" id="textarea3"><?php echo pnline($email_verify_message); ?></textarea></td>
                                </tr>
                              </table>
                              <table width="100%" border="0" cellpadding="0" cellspacing="10">
                                <tr>
                                  <td width="18">
                                    <DIV onMouseover="ddrivetip('<?php echo $lang_main_includeunsubscribe_help; ?>', '#EFEFEF')";
                  onMouseout="hideddrivetip()"><img src="admin/images/question.gif" width="16" height="16" alt="" border=0> </div></td>
                                  <td width="50%"><?php echo $lang_main_includeunsubscribe; ?></td>
                                  <td width="50%">
                                    <input type="radio" name="nemail_unsubscribe" value="yes" <?php if($email_unsubscribe=="yes") echo"checked"; ?>>
                                    <?php echo $lang_yes; ?>
                                    <input name="nemail_unsubscribe" type="radio" value="no" <?php if($email_unsubscribe=="no") echo"checked"; ?>>
                                    <?php echo $lang_no; ?> </td>
                                </tr>
                                <tr>
                                  <td width="18">
                                    <DIV onMouseover="ddrivetip('<?php echo $lang_main_thankmail_help; ?>', '#EFEFEF')";
                  onMouseout="hideddrivetip()"><img src="admin/images/question.gif" width="16" height="16" alt="" border=0> </div></td>
                                  <td><?php echo $lang_main_thankmail; ?></td>
                                  <td><input type="radio" name="nemail_thank" value="yes" <?php if($email_thank=="yes") echo"checked"; ?>>
                                      <?php echo $lang_yes; ?>
                                      <input name="nemail_thank" type="radio" value="no" <?php if($email_thank=="no") echo"checked"; ?>>
                                      <?php echo $lang_no; ?> </td>
                                </tr>
                                <tr>
                                  <td width="18">
                                    <DIV onMouseover="ddrivetip('<?php echo $lang_main_verification_help; ?>', '#EFEFEF')";
                  onMouseout="hideddrivetip()"><img src="admin/images/question.gif" width="16" height="16" alt="" border=0> </div></td>
                                  <td><?php echo $lang_main_verification; ?></td>
                                  <td><input type="radio" name="nemail_verify" value="yes" <?php if($email_verify=="yes") echo"checked"; ?>>
                                      <?php echo $lang_yes; ?>
                                      <input name="nemail_verify" type="radio" value="no" <?php if($email_verify=="no") echo"checked"; ?>>
                                      <?php echo $lang_no; ?> </td>
                                </tr>
                                <tr>
                                  <td width="18">
                                    <DIV onMouseover="ddrivetip('<?php echo $lang_main_images_help; ?>', '#EFEFEF')";
                  onMouseout="hideddrivetip()"><img src="admin/images/question.gif" width="16" height="16" alt="" border=0> </div></td>
                                  <td><?php echo $lang_main_images; ?></td>
                                  <td><input type="radio" name="nemail_images" value="yes" <?php if($email_images=="yes") echo"checked"; ?>>
                                      <?php echo $lang_yes; ?>
                                      <input name="nemail_images" type="radio" value="no" <?php if($email_images=="no") echo"checked"; ?>>
                                      <?php echo $lang_no; ?> </td>
                                </tr>
<?
                                /*
                                modify by moises to add select charset iso
                                */
?>
                                <tr>
                                  <td width="18">
                                    <DIV onMouseover="ddrivetip('<?php echo $lang_main_charsetiso_help; ?>', '#EFEFEF')";
                  onMouseout="hideddrivetip()"><img src="admin/images/question.gif" width="16" height="16" alt="" border=0> </div></td>
                                  <td><?php echo $lang_main_charset; ?></td>
                                  <td>
                                  <select name="ncharsettype" id="charsettype">
                                  <?
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
                                  </td>
                                </tr>
                                <tr>
                                  <td width="18">
                                    <DIV onMouseover="ddrivetip('<?php echo $lang_main_priority_help; ?>', '#EFEFEF')";
                  onMouseout="hideddrivetip()"><img src="admin/images/question.gif" width="16" height="16" alt="" border=0> </div></td>
                                  <td><?php echo $lang_priority_text; ?></td>
                                  <td>
                                  <select name="npriorityemail" id="npriorityemail">
                                          <option value="1" <?php if ((isset($priorityemail)) && ($priorityemail==1)){ echo "selected"; }?>><?echo $lang_priority_high?></option>
                                          <option value="3"<?php if (((isset($priorityemail)) && ($priorityemail==3)) || (!isset($priorityemail))){ echo "selected"; }?>><?echo $lang_priority_normal?></option>
                                          <option value="5"<?php if ((isset($priorityemail)) && ($priorityemail==5)){ echo "selected"; }?>><?echo $lang_priority_low?></option>
                                  </select>
                                  </td>
                                </tr>
                            </table></td>
                        </tr>
                    </table></td>

                  </tr>
                </table>
              </div>
              <p><a name="security"></a> </p>
              <div id="page4" class="pagetext">
                <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td bgcolor="#FFFFFF">
                      <table width="100%" border="0" bgcolor="#FFFFFF">
                        <tr>
                                                  <td><span class="h3"><?php echo $lang_main_security; ?></span><br>
                            <span class="f8"><?php echo $lang_main_securityex; ?></span></td>
                        </tr>
                        <tr>
                          <td colspan="2"><br>
                            <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0" background="admin/images/interface/spacer_horizontal.gif">
                              <tr>
                                <td width="612"><img src="admin/images/interface/spacer_horizontal.gif" width="1" height="1"></td>
                              </tr>
                            </table>
                            <br>
                            <table width="100%" border="0" cellpadding="0" cellspacing="10">
                              <tr>
                                <td width="18">
                                  <DIV onMouseover="ddrivetip('<?php echo $lang_main_username_help; ?>', '#EFEFEF')";
                  onMouseout="hideddrivetip()"><img src="admin/images/question.gif" width="16" height="16" alt="" border=0> </div></td>
                                <td width="312"><?php echo $lang_main_username; ?></td>
                                <td width="310"><input name="nusername" type="text" class="textbox" id="nusername2" value="<?php echo $user; ?>" size="40" maxlength="200"></td>
                              </tr>
                              <tr>
                                <td width="18">
                                  <DIV onMouseover="ddrivetip('<?php echo $lang_main_password_help; ?>', '#EFEFEF')";
                  onMouseout="hideddrivetip()"><img src="admin/images/question.gif" width="16" height="16" alt="" border=0> </div></td>
                                <td><?php echo $lang_main_password; ?></td>
                                <td><input name="npassword" type="text" class="textbox" id="npassword5" value="<?php echo $pass; ?>" size="40" maxlength="200"></td>
                              </tr>
                          </table></td>
                        </tr>
                    </table></td>

                  </tr>
                </table>
              </div>
              <p><a name="security"></a> </p>
              <div id="page5" class="pagetext">
                <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td bgcolor="#FFFFFF">
                      <table width="100%" border="0" bgcolor="#FFFFFF">
                        <tr>
                          <td ><span class="h3"><?php echo $lang_main_mailserver; ?></span><br>
                              <span class="f8"><?php echo $lang_main_mailserverex; ?></span></td>
                        </tr>
                        <tr>
                          <td colspan="2"><br>
                            <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0" background="admin/images/interface/spacer_horizontal.gif">
                              <tr>
                                <td width="612"><img src="admin/images/interface/spacer_horizontal.gif" width="1" height="1"></td>
                              </tr>
                            </table>
                            <br>
                            <table width="100%" border="0" cellpadding="0" cellspacing="10">
                              <tr>
                                <td width="18" valign="top">
                                  <DIV onMouseover="ddrivetip('<?php echo $lang_main_selectmethod_help; ?>', '#EFEFEF')";
                  onMouseout="hideddrivetip()"><img src="admin/images/question.gif" width="16" height="16" alt="" border=0> </div></td>
                                <td width="312" valign="top"><?php echo $lang_main_selectmethod; ?></td>
                                <td width="310" valign="top"><p>
                                    <label>
                                    <input class="menulink2" id="stab1" onClick="sdhtml.scycleTab(this.id)" name="mserver" type="radio" value="php" <?php if($mserver=="php") echo 'checked'; ?> >
                              - PHP's mail function </label>
                                    <br>
                                    <label>
                                    <input class="menulink2" id="stab2" onClick="sdhtml.scycleTab(this.id)" type="radio" name="mserver" value="sendmail" <?php if($mserver=="sendmail") echo 'checked'; ?> >
                              - Sendmail </label>
                                    <br>
                                    <label>
                                    <input class="menulink2" id="stab3" onClick="sdhtml.scycleTab(this.id)" type="radio" name="mserver" value="smtp" <?php if($mserver=="smtp") echo 'checked'; ?> >
                              - SMTP</label>
                                </p></td>
                              </tr>
                              <tr>
                                <td colspan="3">
                                  <div id="spage1" class="pagetext">
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                      <tr>
                                        <td width="18">&nbsp;</td>
                                        <td width="644">&nbsp;</td>
                                      </tr>
                                    </table>
                                  </div>
                                  <div id="spage2" class="pagetext">
                                    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                                      <tr>
                                        <td width="3%">
                                          <DIV onMouseover="ddrivetip('<?php echo $lang_main_sendmail_help; ?>', '#EFEFEF')";
                  onMouseout="hideddrivetip()"><img src="admin/images/question.gif" width="16" height="16" alt="" border=0> </div></td>
                                        <td width="52%"><?php echo $lang_main_sendmail; ?></td>
                                        <td width="45%">
                                          <input name="sendmail_string" type="text" class="textbox" id="sendmail_string" value="<?php echo $sendmail_string; ?>" size="40">
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                      </tr>
                                    </table>
                                  </div>
                                  <div id="spage3" class="pagetext">
                                    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                                      <tr>
                                        <td width="3%">
                                          <DIV onMouseover="ddrivetip('<?php echo $lang_main_smtpserver_help; ?>', '#EFEFEF')";
                  onMouseout="hideddrivetip()"><img src="admin/images/question.gif" width="16" height="16" alt="" border=0> </div></td>
                                        <td width="52%"><?php echo $lang_main_smtpserver; ?></td>
                                        <td width="45%">
                                          <input name="smtp_string" type="text" class="textbox" id="amtp_s" value="<?php echo $smtp_string; ?>" size="40">
                                        </td>
                                      </tr>
                                      <tr>
                                        <td><img src="images/interface/spacer.gif" width="1" height="10"></td>
                                        <td></td>
                                        <td></td>
                                      </tr>
                                      <tr>
                                        <td><DIV onMouseover="ddrivetip('<?php echo $lang_main_smtpauthentication_help; ?>', '#EFEFEF')";
                  onMouseout="hideddrivetip()"><img src="admin/images/question.gif" width="16" height="16" alt="" border=0> </div></td>
                                        <td><?php echo $lang_main_smtpauthentication; ?> </td>
                                        <td><p>
                                            <label>
                                            <input name="smtp_auth" type="radio" value="yes" <?php if($smtp_auth=="yes") echo 'checked'; ?>>
                                            <?php echo $lang_yes; ?></label>
                                            <label>
                                            <input type="radio" name="smtp_auth" value="no"<?php if($smtp_auth=="no") echo 'checked'; ?>>
                                            <?php echo $lang_no; ?></label>
                                            <br>
                                        </p></td>
                                      </tr>
                                      <tr>
                                        <td><img src="images/interface/spacer.gif" width="1" height="10"></td>
                                        <td></td>
                                        <td></td>
                                      </tr>
                                      <tr>
                                        <td><DIV onMouseover="ddrivetip('<?php echo $lang_main_smtpuser_help; ?>', '#EFEFEF')";
                  onMouseout="hideddrivetip()"> </div></td>
                                        <td><?php echo $lang_main_smtpuser; ?></td>
                                        <td>
                                          <input name="smtp_username" type="text" class="textbox" id="smtp_username" value="<?php echo $smtp_username; ?>" size="40"></td>
                                      </tr>
                                      <tr>
                                        <td><img src="images/interface/spacer.gif" width="1" height="10"></td>
                                        <td></td>
                                        <td></td>
                                      </tr>
                                      <tr>
                                        <td>&nbsp;</td>
                                        <td><?php echo $lang_main_smtppass; ?></td>
                                        <td>
                                          <input name="smtp_password" type="password" class="textbox" id="smtp_password" value="<?php echo $smtp_password; ?>" size="40"></td>
                                      </tr>
                                    </table>
                                </div></td>
                              </tr>
                          </table></td>
                        </tr>
                    </table></td>

                  </tr>
                </table>
              </div>
              <br>
              <table width="80%" border="0" align="center">
                <tr>
                  <td>
                    <div align="center">
                      <table border="0" cellpadding="0" cellspacing="0"  onClick="javascript:document.form.submit()" style="cursor: pointer; cursor: hand;">
                        <tr>
                          <td><img src="admin/images/button_l.gif" width="9" height="24"></td>
                          <td width="70" background="admin/images/button_m.gif">
                            <div align="center"><strong><font color="#FFFFFF"><?php echo $lang_main_update; ?></font></strong></div></td>
                          <td><img src="admin/images/button_r.gif" width="8" height="24"></td>
                        </tr>
                      </table>
                  </div></td>
                </tr>
              </table>
            </form>
            <span class="menulink2" id="stab4" onClick="dhtml.cycleTab(this.id)">&nbsp;</span> <span class="menulink2" id="stab5" onClick="dhtml.cycleTab(this.id)">&nbsp;</span>
            <script language="javascript" type="text/javascript">
        dhtml.cycleTab('tab1');
        <?php
        if($mserver=="php") echo 'sdhtml.scycleTab(\'stab1\');';
        if($mserver=="sendmail") echo 'sdhtml.scycleTab(\'stab2\');';
        if($mserver=="smtp") echo 'sdhtml.scycleTab(\'stab3\');';
        if($database=="custom")echo 'switchdb.cycleTab(\'tdata1\');';

        ?>
        </script>
      </table></td>
      <td width="20">&nbsp;</td>
    </tr>
</table>