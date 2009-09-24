<?php

$lang_charset= "iso-8859-1";
/*headder Bar */
$lang_head_settings="Settings";
$lang_send_out_mail="Send mail";
$lang_edit_mailing_groups="Groups";
$lang_edit_mailing_list="Mailinglist";
$lang_about="About";
$lang_help="Help";
$lang_history="History";
$lang_logout="Logout";

/*logging setings */
$lang_login_manage="Easily manage you mailing lists";
$lang_login_username="Username";
$lang_login_passwords="Passwords";

/*main setings */
$lang_tail_total="Total subscribers:";
$lang_main_updated="The main configuration file was updated";
$lang_main_settings="Main Settings Panel";
$lang_main_global="Change the global settings over here";
$lang_main_vote="Vote";
$lang_main_diagnostics="Error report";
$lang_main_script="Script Settings";
$lang_main_database="Database";
$lang_main_email="Email Settings";
$lang_main_security="Security Settings";
$lang_main_server="Mail Server";
$lang_main_script_about="These are the various settings which are required for the script to operate properly. Please read the help incase you have any problems. ";
$lang_main_website="Website";
$lang_main_website_help="Name of the website with the root path!";
$lang_main_relative="Relative path :";
$lang_main_relative_help="This is the path telling where the Mailing list directory is stored!";
$lang_main_absolute_path="Absolute path :";
$lang_main_absolute_path_help="This is the file system path ";
$lang_main_string="Relative String :";
$lang_main_string_help="Here the file name where you embedded the maillist with <B>?page=mail&</B> behind it!";
$lang_main_rc4="Unique RC4 encrypt string :";
$lang_main_encrypt="Enblable RC4 encryption :";
$lang_main_encrypt_help="Select encryption if you want encryption enabled in your text files";
$lang_main_popup_help="If you want to do registrations through a popup window.  Also if you want to avoid the relative string.";
$lang_main_popup="Enable popup :";
$lang_main_rc4_help="Enter here a uniqe RC$ sting which will be used to encrypt records in your text file.";
$lang_main_Language="Select Language :";
$lang_main_Language_help="Please select the language for various things";
$lang_main_databaseset="Database Settings";
$lang_main_databasesetex="Please specify which type of database you want to use.";
$lang_main_mysql="Use MySQL";
$lang_main_mysql_help="If you want to use MySQL or simple text file";
$lang_main_hostname="Hostname :";
$lang_main_hostname_help="Hostname of the database server";
$lang_main_databaseuser="Database Username :";
$lang_main_databaseuser_help="Your username for loging into the database";
$lang_main_databasepass="Database Password :";
$lang_main_databasepass_help="Your password for loging into the database";
$lang_main_databasename="Database name:";
$lang_main_databasename_help="Name of the databse in which the table is present";
$lang_main_emailex="Here you specify how your emails are sent and you can change the various properties of your email. Also specify the extra facilities like unsubscribe link etc are included or not.";
$lang_main_emailname="Send Email using name :";
$lang_main_emailname_help="Name of the mailing list sender!";
$lang_main_emailadress="Send Email from the address :";
$lang_main_emailadress_help="Email adress of the sender!";
$lang_main_thankstitle="Thank you email title :";
$lang_main_thankstitle_help="Email titel for thank you messages";
$lang_main_thanksmessage="Thank you email Message :";
$lang_main_thanksmessage_help="This is the message that will be included when the user registers at your website after a successfull registration!";
$lang_main_unsubscribe="Unsubscribe message :";
$lang_main_unsubscribe_help="This is the unsubscribe message! ";
$lang_main_verify="Verify email subscription :";
$lang_main_verify_help="This is the message that will be included to verify your email subscription!";
$lang_main_includeunsubscribe="Include unsubscribe link :";
$lang_main_includeunsubscribe_help="The email will include an unsubscribe link in the end.";
$lang_yes="Yes";
$lang_no="No";
$lang_main_thankmail="Thank you email :";
$lang_main_thankmail_help="Send thank you email on registration. ";
$lang_main_verification="Email Verification :";
$lang_main_verification_help="The subscribers email will be added only after he has verfied it from a mail sent to him.";
$lang_main_htmlarea="Enable HTML area in sendmail form";
$lang_main_htmlarea_help="This will show an HTML area in the send form.";
$lang_main_images="Embedded images in email :";
$lang_main_images_help="If enabled images are also send otherwise they are linked back.";
$lang_main_securityex="This is where you can specify the username and password which is used to log into the administration panel of EZS mailing list.";
$lang_main_username="Username :";
$lang_main_username_help="This username is for the admin inlog";
$lang_main_password="Password :";
$lang_main_password_help="This password is for the admin inlog";
$lang_main_mailserver="Mail Server";
$lang_main_mailserverex="This is where you can specify the type of method you wish to use to send out emails.  In most cases the PHP mail function is enough.";
$lang_main_selectmethod="Select method for sending emails :";
$lang_main_selectmethod_help="Select a method for sending out emails";
$lang_main_sendmail="Sendmail Path";
$lang_main_sendmail_help="Please fill in the sendmail path over here";
$lang_main_smtpserver="SMTP Server name";
$lang_main_smtpserver_help="This is the address of the SMTP server";
$lang_main_smtpauthentication="Authentication";
$lang_main_smtpauthentication_help="If your SMTP server requires Authentication please fill in the username and password";
$lang_main_smtpuser="User name";
$lang_main_smtpuser_help="User name";
$lang_main_smtppass="Password";
$lang_main_update="Update";

/*sendmail */
$lang_sendmail_suberror="Please fill in the subject";
$lang_sendmail_fillerror="Please fill in the Html or Text email";
$lang_sendmail_send="Send out Email";
$lang_sendmail_sendex="Send out Email You can send various types of emails from here";
$lang_sendmail_sendselect="Please select the type of email you wish to send and fill in the appropiate box.";
$lang_sendmail_from="Email From";
$lang_sendmail_subject="Subject";
$lang_sendmail_text="Text Version";
$lang_sendmail_textversion="<strong>Text Version </strong>of Email : <br> <font color=#999999>Please enter the plain text version of your email here </font>";
$lang_sendmail_htmlversion="<strong>HTML Version</strong> of Email : <br> <font color=#999999>Please Paste or write the HTML code of the email here</font>";
$lang_sendmail_textversion_view="<strong>Text Version </strong>of Email : <br> ";
$lang_sendmail_htmlversion_view="<strong>HTML Version</strong> of Email : <br> ";
$lang_sendmail_selecttemplate="Please select a template first";
$lang_sendmail_usetemplate="Use Templates";
$lang_sendmail_selecttemplate="Select a template";
$lang_sendmail_selectdraft="Select a draft";
$lang_sendmail_errortemplate="Error : Unable to access the templates directory! !!";
$lang_sendmail_errordrafts="Error : Unable to open drafts directory! !!";
$lang_sendmail_helptemplate="On how to add and edit the templates please read help. ";
$lang_sendmail_attachment="Attachment";
$lang_sendmail_sendbutton="Send";
$lang_sendmail_nextbutton="Next";
$lang_sendmail_backbutton="Back";
$lang_sendmail_stage1="Stage 1";
$lang_sendmail_stage2="Stage 2";
$lang_sendmail_stage3="Stage 3";
$lang_sendmail_to="Send email to ";
$lang_sendmail_to_help="Please select here whou you want to send email to ";
$lang_sendmail_emailID="Email ID";
$lang_sendmail_emailID_help="Please enter the email you want to send email to";
$lang_sendmail_group="Send email to the group";
$lang_sendmail_group_help="Please select the roup you wish to send email to";
$lang_sendmail_single_error="You have not specified the email to send mail to";
$lang_sendmail_group_error="You have not specified the group to send mail to";
$lang_sendmail_wysiwyg="Click Here to edit in a rich text editor";
$lang_sendmail_single="To a single email";
$lang_sendmail_group="To a group";
$lang_sendmail_every="To every one";

/*edit sending */
$lang_send_wait="Please wait ... <br><br> Sending Emails";
$lang_send_done="Sending done !!<br><br>";
$lang_send_mailing="Webinsta Mailing list is sending Emails ...";

/*edit wysiwyg */
$lang_editwin_edit="Rich text editor";
$lang_editwin_help="Edit the HTML in a HTML editor over here";

/*edit maillist members */
$lang_edit_list="Edit Mailing List";
$lang_edit_listex="You can add , search and edit entries from here. ";
$lang_edit_new="Please enter the new email to be added :";
$lang_edit_new_name="Please enter the new name for the email to be added :";
$lang_edit_nomailgroup="Please select a mailing group";
$lang_edit_expression="Please enter the expression to be searched in the database";
$lang_edit_correct="Please enter the correct email :";
$lang_edit_correct_name="Please enter the correct name :";
$lang_edit_delete="Do you want to delete the entry :";
$lang_edit_jump="---- Quick Jump ----";
$lang_edit_jump_group="---- Select Group ----";
$lang_edit_import="Import";
$lang_edit_export="Export";
$lang_edit_add="Add Subscriber";
$lang_edit_search="Search";
$lang_edit_refresh="Refresh";
$lang_edit_editdata="Edit the Database";
$lang_edit_editdataex="Please select the operation you wish to perform by the link in front of it. ";
$lang_edit_submitted="Submitted on";
$lang_edit_ip="Ip Address";
$lang_edit_ipedit="Edit";
$lang_edit_ipdelete="Delete";
$lang_edit_select="<Br><br><center>...Please select a group for modifications...</center><Br><br>";

/*edit maillist members */
$lang_editg_deleted="<br><br><center>The group <strong>{group}</strong> was deleted successfully! !!</center><br><br>";
$lang_editg_added="<br><br><center>The group <strong>{group}</strong> was Added successfully!!!</center><br><br>";
$lang_editg_added_error="<br><br><center>The group <strong>{group}</strong> already exists! !!</center><br><br>";
$lang_editg_adit="<br><br><center>The group <strong>{group}</strong> was  edited! !!</center><br><br>";
$lang_editg_list="Edit Mailing Groups";
$lang_editg_listex="You can add , search and edit Mailing groups from here ";
$lang_editg_new_name="Please enter the name of new gourp to be added";
$lang_editg_new="Please enter a unque ID for the group";
$lang_editg_expression="Please enter the group to be searched in the database";
$lang_editg_correct="Please enter the correct group ID :";
$lang_editg_correct_name="Please enter the correct group name :";
$lang_editg_delete="Do you want to delete the group :";
$lang_editg_jump="---- Quick Jump ----";
$lang_editg_add="Add Group";
$lang_editg_search="Search";
$lang_editg_refresh="Refresh";
$lang_editg_editdata="Edit the Database";
$lang_editg_editdataex="Please select the operation you wish to perform by the link in front of it. ";
$lang_editg_ipedit="Edit";
$lang_editg_ipdelete="Delete";
$lang_editg_subscribers="Subscribers";
$lang_editg_name="Group Name ( ID )";

/*edit maillist history */
$lang_edith_title="Mailing history";
$lang_edith_titlex="A list of all the mails sent";
$lang_edith_editdata="History of emails sent";
$lang_edith_editdataex="Please select the operation you wish to perform by the link in front of it. ";
$lang_edith_date="Date";
$lang_edith_edit="Resend";
$lang_edith_to="Sent to";
$lang_edith_delete="Delete";
$lang_edith_delete_history="Do you want to delete task name : ";
$lang_edith_subject="Subject ";

/*diagnostics */
$lang_diag_simple="Simple Diagnostics";
$lang_diag_simpleex="This page is a simple check of wheather certain files are writable or not. ";
$lang_diag_status="Status";
$lang_diag_checking="Checking / Error";
$lang_diag_globals="If there is an error then the file not writable. Please change the permissions. ";

$lang_diag_temp="If there is an error then the temp. directory is not writable.  Please change the permissions";

/*import */
$lang_import_adress="Import email addresses";
$lang_import_adressex="This will allow you to import email address from a text file. ";
$lang_import_import="File to import";
$lang_import_import_help="Please select the file from which you want to import the email addresses.  The email addresses are simply stored line by line in the file. ";
$lang_import_next="Next";
$lang_import_group="Import into group";
$lang_import_group_help="This is the group into which emails will be imported";
$lang_import_close="Close";

/*mainnn inc files */
$lang_email_thanks="Thank you for registering";
$lang_emailexist_error="Subscription Error! !!";
$lang_emailexist_adress="The email address {email} already exists in the data base. ";
$lang_emailexist_adress_error="The email address {email} does not exist in the data base.  ";
$lang_emailreg_verify="An email has been sent to {email} please verify by clicking on the link in the email. ";
$lang_emailreg_done="The email address {email} was successfully added to the data base. ";
$lang_emailunreg_done="The email address {email} was success fully removed from the data base. ";
$lang_emailremoved="Email address removed";
$lang_removed_adress="The email address {email} was successfully removed from the database.";

/*editor */
$lang_htmledit_cancel="Cancel";
$lang_htmledit_reset="Reset";
$lang_htmledit_save="Save";


/*Search */
$lang_search_email="Emails Searchs";
$lang_search_emailex="Here, you can make an avanced search in the Email list";
$lang_search_group="Search in this groups: ";
$lang_search_group_help="The Search will be made in this group";
$lang_search_text="Search Text";
$lang_search="Search";
$lang_search_text_help="In order to look for ex. hotmail.com, try *@hotmail.com, it is used <strong>*</strong> like jokers, if you want to search for ex. webmaster, look for webmaster@*";
$lang_search_allgroups="On all Groups";
$lang_search_text_filter="Total Found";

/* addons*/
$lang_total_group_entries="Total Group Entries:";
$lang_email_name="Email ( Name )";
$lang_send_email="Send a Email";
$lang_show_all_group="Show All Groups";
$lang_see_group="Show Group";


/* charset iso */
$lang_charsetiso[1]="8859-1 - western Europe (Latin-1)";
$lang_charsetiso[2]="8859-2 - Eastern Europe (Latin-2)";
$lang_charsetiso[3]="8859-3 - Southeast of Europe & more (Latin-3)";
$lang_charsetiso[4]="8859-4 - Scandinavian/Balkan (Latin-4)";
$lang_charsetiso[5]="8859-5 - Latín/Cyrillic";
$lang_charsetiso[6]="8859-6 - Latín/Arab";
$lang_charsetiso[7]="8859-7 - Latín/Greek";
$lang_charsetiso[8]="8859-8 - Latín/Hebrew";
$lang_charsetiso[9]="8859-9 - Modification Latin-1 Turkish (Latin-5)";
$lang_charsetiso[10]="8859-10 - Lappish/Norway/Eskimo (Latin-6)";
$lang_charsetiso[11]="8859-11 - Thailand";
$lang_charsetiso[12]="8859-12 - Celtic (Latin-7)";
$lang_charsetiso[13]="8859-13 - Baltic (Latin-7)";
$lang_charsetiso[14]="8859-14 - Celtic (Latin-8)";
$lang_charsetiso[15]="8859-15 - Western Europe (Latin-9)";
$lang_charsetiso[16]="8859-16 - South-Eastern European (Latin-10)";
$lang_charsetiso[25]="UTF-8 - Unicode";
$lang_charsetiso[26]="WIN1256 - - Arabic & Persian HTML";//win1256
$lang_charsetiso[27]="CP-866 - Russia";
$lang_charsetiso[28]="TIS-620 - Thailand";
$lang_charsetiso[29]="EUC - Japanese";
$lang_charsetiso[30]="SJIS - Japanese";
$lang_charsetiso[31]="EUC-KR - Korea";
$lang_charsetiso[32]="KOI8-R - Russia";
$lang_charsetiso[33]="GB2312 - Chinese Simplified";
$lang_charsetiso[34]="BIG5 - Chinese Traditional";
$lang_charsetiso[35]="windows-1251 - Bulgaria";

/* new translations*/
$lang_sendmail_everyone="You have chosen to send email to every one in the database";
$lang_main_charsetiso_help="The type of Charset-iso for you email list";
$lang_main_charset="Charset-Iso To Send";
$lang_main_priority_help="The priority of the sending email list";
$lang_priority_text="Priority";
$lang_priority_high="High";
$lang_priority_normal="Normal";
$lang_priority_low="Low";
$lang_sendmail_fromerror="You forgot to fill in Email From";
$lang_sendmail_templateName="Template name";
$lang_sendmail_TemplateAuthor="Template Author";
$lang_sendmail_templateDescription="Description";
$lang_sendmail_templateHomepage="Homepage";
$lang_sendmail_templateNone="None";
?>