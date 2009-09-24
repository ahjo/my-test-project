<?php if(!isset($_SESSION['admin'])) {echo ' Hacking Attempted '; return; } ?><!------- Start of HTML Code ------->
<div align="center">
  <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="30"><div align="center"><img src="admin/images/help.gif" width="20" height="20"></div></td>
      <td class="h3"> <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td class="h3">Help</td>
            <td valign="bottom"><div align="right" class="f8">Some help
                about the script .</div></td>
          </tr>
        </table></td>
    </tr>
    <tr>
      <td width="30"><img src="images/interface/spacer.gif" width="1" height="10"></td>
      <td></td>
    </tr>
    <tr bgcolor="#0066CC">
      <td colspan="2"><img src="images/interface/spacer.gif" width="1" height="1"></td>
    </tr>
  </table>
  <br>
  <br>
  <div align="center">
    <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="10" height="10"><img src="admin/images/interface/top_left_corner.png" width="10" height="10" /></td>
        <td background="admin/images/interface/top_line.png"></td>
        <td width="10" height="10"><img src="admin/images/interface/top_right_corner.png" width="10" height="10" /></td>
      </tr>
      <tr>
        <td background="admin/images/interface/left_line.png"></td>
        <td bgcolor="#FFFFFF"><div align="right">
          <table width="750" border="0" align="center" cellpadding="0" cellspacing="2">
            <tr>
              <td><table width="100%" border="0" cellpadding="5" cellspacing="0" bgcolor="#FFFFFF">
                  <tr>
                    <td>
                      <table width="100%" border="0" cellpadding="2" cellspacing="0" bgcolor="#000000">
                        <tr>
                          <td><font color="#FFFFFF">EZS Mailing List / Newsletter Manager ( ver 1.3) HELP </font></td>
                        </tr>
                      </table>
                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td><div align="right"></div></td>
                        </tr>
                      </table>
                      <br>
                      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="f7f7f7">
                        <tr>
                          <td width="20%"><strong>Welcome </strong></td>
                          <td width="80%"><em><font color="#666666">Table of content .</font></em></td>
                        </tr>
                        <tr bgcolor="#FFFFFF">
                          <td>&nbsp;</td>
                          <td><p><a href="#about">&#8226; About </a><br>
                                  <a href="#about">&#8226; </a><a href="#disclamer">Disclaimer</a><br>
                                  <a href="#about">&#8226; </a><a href="#installation">Installation </a><br>
                                  <a href="#about">&#8226; </a><a href="#usage">Usage</a><br>
                                  <a href="#about">&#8226; </a><a href="#support">Support </a><br>
                                  <a href="#about">&#8226; </a><a href="#history">History</a><br>
                          </p></td>
                        </tr>
                      </table>
                      <br>
                      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="f7f7f7">
                        <tr>
                          <td width="20%"><strong><a name="about"></a>About </strong></td>
                          <td width="80%"><em><font color="#666666">About the script </font></em></td>
                        </tr>
                        <tr bgcolor="#FFFFFF">
                          <td>&nbsp;</td>
                          <td><p><br>
                    EZS Mailing list manager was built to provide a centralized mailing list / newsletter system for small to medium website . Its simple yet quite powerfull . It support the standard subscribe and un-subscribe , remote verification , unsubscribe links , attachments and other such features . The best of all the total integration is less than 6 lines of code and can run with or without a database .<br>
                                        <br>
                    The various features are : </p>
                              <ul>
                                <li>Very simple integration into existing design .</li>
                                <li>Can run with or without a database .</li>
                                <li>Deletion , settings , editing and other options from a centralized control panel .</li>
                                <li>Suited for a small to medium web site . </li>
                                <li>Good looking and fun to work with .<br>
                                </li>
                            </ul></td>
                        </tr>
                      </table>
                      <br>
                      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr bgcolor="f7f7f7">
                          <td width="20%"><strong><a name="disclamer"></a>Disclaimer</strong></td>
                          <td width="80%"><font color="#666666"><em>Copyrights and warnings . </em></font></td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td><br>
                  This script is a property of NGCoders.com . You are free to use it , modify it and make changes as you like without the removal of copyright information and the link to <a href="http://www.webinsta.com"><strong>NGCoders.com</strong></a> . You are allowed to redistribute the script freely without consent , with the condition that copyright information and links to ngcoders.com remain intact . <br>
                                    <br>
                                    <font color="#FF3300">* USE IT AT YOUR OWN RISK *</font></td>
                        </tr>
                      </table>
                      <br>
                      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr bgcolor="f7f7f7">
                          <td width="20%"><strong><a name="installation"></a>Installation </strong></td>
                          <td width="80%"><em><font color="#666666">How to install . </font></em></td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td> To install the script unzip the script in an directory . Now simply run the install.php in the install directory . Once installation is completed see the <em><strong>index.php</strong></em> provided on how to integrate the script . Mainly it is simply taking the form code fro the main page and pasting that code into your page . Other settings and control can be accessed admin.php in the script directory . <br>
                                    <br>
                  Please change the permissions on these two files to world read and write ..
                  <ul>
                    <li><strong>data/email.txt </strong>( The main csv database file )</li>
                    <li><strong>globals.php </strong>( main file in which settings are stored )</li>
                    <li><strong>temp/</strong> ( the temp directory where temprory files are created ) </li>
                  </ul>
                  <p> Also if you want to change the storage file rename the main.txt and make appropriate changes through control panel or global.php .</p></td>
                        </tr>
                      </table>
                      <br>
                      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr bgcolor="f7f7f7">
                          <td width="20%"><strong><a name="usage"></a>Usage </strong></td>
                          <td width="80%"><font color="#666666"><em>How to use .</em></font></td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>
                            <p>Its very simple to use this script so i don't feel writing a usage column . <br>
                                        <br>
                    To put up a simple mail box paste the following code in you html file . <br>
                                        <br>
                                        <textarea name="textarea" cols="50" rows="5" wrap="OFF"><?php include("maillist/mailbar.php");?>
                    </textarea>
                                        <br>
                    where maillist is the dir of the script . <br>
                    <br>
                    And put the following code in your main page ( when the variable <br>
                    $page=mail the script will be called to add the address ) The varialble<br>
                    is defined by the relative string example &quot;index.php?page=mail&quot; which<br>
                    you enter in the settings in the administrator panel .<br>
                    <textarea name="textarea3" cols="50" rows="5"><?php
/* $_GET['page'] for register_globals = off */
if(isset ($_GET['page']))
{
if ($_GET['page'] == "mail")
{include("maillist/mailmain.php");					}
}else {
/* include( your title page"); */
print(":Your Main Page Goes Here :");
}
?>
</textarea>
                            </p>
                            <p>In case you want to use the MySQL interface later on you can create the tables <br>
                    simply by typing the following at SQL prompt .<br>
                    <textarea name="textarea2" cols="50" wrap="OFF">create table maillist (email VARCHAR(50) , date VARCHAR(15),ip VARCHAR(20) )</textarea>
                          </p></td>
                        </tr>
                      </table>
                      <br>
                      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr bgcolor="f7f7f7">
                          <td width="20%"><strong><a name="support"></a>Support </strong></td>
                          <td width="80%"><em><font color="#666666">If you have a problem .</font></em></td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>
                            <p>Support is through our [ <a href="http://www.webinsta.com/index.php?page=forum&category=php"><strong>forum</strong></a> ] . If its really urgent limited support through ( <a href="mailto:admin@ngcoders.com"><strong>admin@ngcoders.com</strong></a> )</p></td>
                        </tr>
                      </table>
                      <br>
                      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr bgcolor="f7f7f7">
                          <td width="20%"><strong><a name="history"></a>History </strong></td>
                          <td width="80%"><em><font color="#666666">Previous versions and bug fixes .</font></em></td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td><p>Version 1.1<br>
                    Released on 29 - 1 - 2003<br>
                    - SQL support <br>
                    - Comes with a installer <br>
                    - Globals off is no problem now .<br>
                    - Magic Quotes problem removed .<br>
                    - No more timeouts ( unique refreshing page to send emails ). <br>
                    - New code for sending attachments . <br>
                    - Removed some textarea bugs .</p>
                              <p> Version 1.0 <br>
                    Released on 9 - 1 - 2003<br>
                    - Totally new GUI with help from Ceasar Feijen &lt;info@cfconsultancy.nl&gt;<br>
                    - Lots of bug fixes ( and better documentation ) <br>
                    - Support for HTML and Text email with mixed type support also <br>
                    - Searching and remote verification corrected .<br>
                    - Corrected the log in problem .<br>
                    - Major function and code updates . <br>
                    - A simple diagnostic and vote window also added .</p>
                              <p>Version 0.3<br>
                    Released on 7 - 12 - 2003 <br>
                    <br>
                    Version 0.1 <br>
                    Subscribe support and simple interface ready .</p>
                              <br>
                          </td>
                        </tr>
                      </table>
                      <p>&nbsp;</p></td>
                  </tr>
              </table></td>
            </tr>
          </table>
            </div></td>
        <td background="admin/images/interface/right_line.png"></td>
      </tr>
      <tr>
        <td width="10" height="10" background="admin/images/interface/bottom_left_corner.png"></td>
        <td background="admin/images/interface/bottom_line.png"></td>
        <td width="10" height="10" background="admin/images/interface/bottom_right_corner.png"></td>
      </tr>
    </table>
    <br>
  </div>
</div>