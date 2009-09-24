<?php

$lang_charset= "iso-8859-1";
/*headder Bar */
$lang_head_settings="Indstillninger";
$lang_send_out_mail="Send mail";
$lang_edit_mailing_groups="Grupper";
$lang_edit_mailing_list="Mailingliste";
$lang_about="Om";
$lang_help="Hjælp";
$lang_history="Historie";
$lang_logout="Logaf";

/*logging setings */
$lang_login_manage="Easily manage you mailing lists";
$lang_login_username="Brugernavn";
$lang_login_passwords="Kodeord";

/*main setings */
$lang_tail_total="Total tilmeldinger:";
$lang_main_updated="Konfigurations filen blev opdateret";
$lang_main_settings="Indstillnings Panel";
$lang_main_global="Ændrer globale Indstilninger her";
$lang_main_vote="Stem";
$lang_main_diagnostics="Fejl repport";
$lang_main_script="Script Indstilninger";
$lang_main_database="Database";
$lang_main_email="Email Indstilninger";
$lang_main_security="Sikkerheds Indstilninger";
$lang_main_server="Mail Server";
$lang_main_script_about="Dette er de forskellige Indstilninger ser er krævet for at scriptet skal fungere korrekt. Læs readme filen for problemer. ";
$lang_main_website="Hjemmeside";
$lang_main_website_help="Navn på hjemmesiden med placering!";
$lang_main_relative="Relativ placering :";
$lang_main_relative_help="Dette er stien der fortæller hvor din Mailinglist er gemt!";
$lang_main_absolute_path="Absolutte placering :";
$lang_main_absolute_path_help="Dette er fil system placeringen ";
$lang_main_string="Relative String :";
$lang_main_string_help="Her er filnavnet hvor du kodede din Maillist med <B>?page=mail&</B> efter!";
$lang_main_rc4="Unique RC4 krypteret string :";
$lang_main_encrypt="Aktiver RC4 kryptering :";
$lang_main_encrypt_help="Vælg kryptering hvis du vil have kryptering i dine tekst filer";
$lang_main_popup_help="Hvis du vil lave registrering gennem et pop op vindue.  Også hvid du vil undgå den relative string.";
$lang_main_popup="Aktiver popup :";
$lang_main_rc4_help="Skriv her en unik RC$ sting som vil blive brugt til at kryptere records i dine tekst filer.";
$lang_main_Language="Vælg sprog :";
$lang_main_Language_help="Vælg sproget for forskellige ting";
$lang_main_databaseset="Database Indstilninger";
$lang_main_databasesetex="Vælg om du vil have en tekst fil eller MySQL baseret database. Hvis du senere hen vil opgradere din tekst fil database til MySQL baseret database skal du bare importere din email tekst fil ved at bruge PHPAdmin.";
$lang_main_mysql="Brug MySQL";
$lang_main_mysql_help="Hvis du vil bruge MySQL or bare text fil";
$lang_main_hostname="Hostnavn :";
$lang_main_hostname_help="Hostnavnet på database serveren";
$lang_main_databaseuser="Database Brugernavn :";
$lang_main_databaseuser_help="Dit brugernavn for at logge ind på databasen";
$lang_main_databasepass="Database Kodeord :";
$lang_main_databasepass_help="Dit kodeord for at logge ind på databasen";
$lang_main_databasename="Database navn:";
$lang_main_databasename_help="Navnet på databasen databsen i det table den er fremvist";
$lang_main_emailex="Here you specify how your emails are sent and you can change the various properties of your email. Also specify the extra facilities like unsubscribe link etc are included or not.";
$lang_main_emailname="Send email ved at bruge :";
$lang_main_emailname_help="Navnet på mailing list senderen!";
$lang_main_emailadress="Send email fra addressen :";
$lang_main_emailadress_help="Afsenders email addresse!";
$lang_main_thankstitle="Takke email titel :";
$lang_main_thankstitle_help="Email titel for Takke beskeden";
$lang_main_thanksmessage="Takke email besked :";
$lang_main_thanksmessage_help="Dette er beskeden der vil komme frem når en bruger har tilmeldt sig korrekt!";
$lang_main_unsubscribe="Afmeldings besked :";
$lang_main_unsubscribe_help="Det her er afmeldings beskeden! ";
$lang_main_verify="Godkend email afmelding :";
$lang_main_verify_help="Dette er beskeden der vil blive vedlagt for at godkænde din email tilmelding!";
$lang_main_includeunsubscribe="Vedlæg Afmeldings link :";
$lang_main_includeunsubscribe_help="Emailen vil vedlægge et afmeldings link sidst i mailen.";
$lang_yes="Ja";
$lang_no="Nej";
$lang_main_thankmail="Takke email :";
$lang_main_thankmail_help="Send Takke email ved registrering. ";
$lang_main_verification="Email godkendelse :";
$lang_main_verification_help="Tilmelderens email vil først blive tilmeldt når personen godkendt det fra en mail der er sendt til personen.";
$lang_main_htmlarea="Aktiver HTML område i sendmail formen";
$lang_main_htmlarea_help="Dette vil vise et HTML område i send formen.";
$lang_main_images="Vedlæg billeder i emailen :";
$lang_main_images_help="Hvis aktiveret, bliver billeder også sendt ellers bliver de linket tilbage.";
$lang_main_securityex="Dette er hvor du kan ændre brugernavn og kodeord som bliver brugt til at logge ind på administrator panelet af din mailingliste.";
$lang_main_username="Brugernavn :";
$lang_main_username_help="Dette brugernavn er til administrator login";
$lang_main_password="Kodeord :";
$lang_main_password_help="Dette kodeord er til administrator login";
$lang_main_mailserver="Mail Server";
$lang_main_mailserverex="Dette er hvor du kan vælge hvilken metode du vil bruge til at sende emails ud.  I de fleste tilfælde er PHP mail funktionen nok.";
$lang_main_selectmethod="Vælg metode for at sende mails :";
$lang_main_selectmethod_help="Vælg en metode for at sende emails ud";
$lang_main_sendmail="Sendmail placering";
$lang_main_sendmail_help="Udfyld sendmail placeringen her ovre";
$lang_main_smtpserver="SMTP Server navn";
$lang_main_smtpserver_help="Dette er addressen på SMTP server";
$lang_main_smtpauthentication="Godkendelse";
$lang_main_smtpauthentication_help="Hvis din SMTP server kræver godkendelse, så udfyld brugernavn og kodeord";
$lang_main_smtpuser="Bruger navn";
$lang_main_smtpuser_help="Bruger navn";
$lang_main_smtppass="Kodeord";
$lang_main_update="Opdater";

/*sendmail */
$lang_sendmail_suberror="Udfyld emnet på mailen";
$lang_sendmail_fillerror="Udfyld Html eller Tekst email";
$lang_sendmail_send="Send emailen ud";
$lang_sendmail_sendex="Send emailen ud. Du kan sende forskellige typer af emails her fra";
$lang_sendmail_sendselect="Vælg hvilken type email du vil sende og marker boksen der svarer dertil.";
$lang_sendmail_from="Fra";
$lang_sendmail_subject="Emne";
$lang_sendmail_text="Tekst Version";
$lang_sendmail_textversion="<strong>Tekst Version </strong>af emailen : <br> <font color=#999999>Skriv ren tekst version af din email her </font>";
$lang_sendmail_htmlversion="<strong>HTML Version</strong> af emailen : <br> <font color=#999999>Skriv eller sæt HTML koden til din email ind her</font>";
$lang_sendmail_textversion_view="<strong>Tekst Version </strong>af emailen : <br> ";
$lang_sendmail_htmlversion_view="<strong>HTML Version</strong> af emailen : <br> ";
$lang_sendmail_selecttemplate="Vælg et layout først";
$lang_sendmail_usetemplate="Brug Layouts";
$lang_sendmail_selecttemplate="Vælg et layout";
$lang_sendmail_selectdraft="Vælg draft";
$lang_sendmail_errortemplate="Error : Kan ikke få adgang til layout placeringen! !!";
$lang_sendmail_errordrafts="Error : Kan ikke åbne drafts placering! !!";
$lang_sendmail_helptemplate="Om hvordan man tilføjer og ændrer layouts læs hjælp. ";
$lang_sendmail_attachment="Vedhæft";
$lang_sendmail_sendbutton="Send";
$lang_sendmail_nextbutton="Næste";
$lang_sendmail_backbutton="Tilbage";
$lang_sendmail_stage1="Trin 1";
$lang_sendmail_stage2="Trin 2";
$lang_sendmail_stage3="Trin 3";
$lang_sendmail_to="Send email til ";
$lang_sendmail_to_help="Vælg hvor og til hvem du vil sende emailen ";
$lang_sendmail_emailID="Email ID";
$lang_sendmail_emailID_help="Skriv email addressen du vil sende til";
$lang_sendmail_group="Send emailen til gruppen";
$lang_sendmail_group_help="Vælg hvilken gruppe du vil sende emailen til";
$lang_sendmail_single_error="Du har ikke skrevet email addresse du vil sende emailen til";
$lang_sendmail_group_error="Du har ikke valgt hvilken gruppe du vil sende emailen til";
$lang_sendmail_wysiwyg="Klik her for at bruge en udvidet tekst editor";
$lang_sendmail_single="Til en enkelt email";
$lang_sendmail_group="Til en gruppe";
$lang_sendmail_every="Til alle";

/*edit sending */
$lang_send_wait="Vent venligst ... <br><br> Sender emails";
$lang_send_done="Forsendelse færdig !!<br><br>";
$lang_send_mailing="Webinsta Mailing list sender emails ...";

/*edit wysiwyg */
$lang_editwin_edit="Udvidet tekst editor";
$lang_editwin_help="Rediger HTML i HTML editoren her";

/*edit maillist members */
$lang_edit_list="Rediger Mailing Listen";
$lang_edit_listex="Du kan tilføje , søge og redigere email addresser her. ";
$lang_edit_new="Skriv den nye email addresse der skal tilføjes :";
$lang_edit_new_name="Skriv navnet for emailen der skal tilføjes :";
$lang_edit_nomailgroup="Vælg en mailing gruppe";
$lang_edit_expression="Skriv søgeordet du vil søge med i databasen";
$lang_edit_correct="Skriv den rigtige email :";
$lang_edit_correct_name="Skriv det rigtige navn :";
$lang_edit_delete="Vil du slette denne email addresse :";
$lang_edit_jump="---- Kvik Spring ----";
$lang_edit_jump_group="---- Vælg Gruppe ----";
$lang_edit_import="Importer";
$lang_edit_export="Exporter";
$lang_edit_add="Tilføj email addresse";
$lang_edit_search="Søg";
$lang_edit_refresh="Opdater";
$lang_edit_editdata="Rediger Databasen";
$lang_edit_editdataex="Vælg den handling du vil udføre med linket foran. ";
$lang_edit_submitted="Tilføjet den";
$lang_edit_ip="Ip Addresse";
$lang_edit_ipedit="Rediger";
$lang_edit_ipdelete="Slet";
$lang_edit_select="<Br><br><center>...Vælg en gruppe for ændringer...</center><Br><br>";

/*edit maillist members */
$lang_editg_deleted="<br><br><center>Gruppen <strong>{group}</strong> blev slettet! !!</center><br><br>";
$lang_editg_added="<br><br><center>Gruppen <strong>{group}</strong> blev tilføjet!!!</center><br><br>";
$lang_editg_added_error="<br><br><center>Gruppen <strong>{group}</strong> findes allerede! !!</center><br><br>";
$lang_editg_adit="<br><br><center>Gruppen <strong>{group}</strong> blev ændret! !!</center><br><br>";
$lang_editg_list="Rediger Mailing Grupper";
$lang_editg_listex="Du kan tilføje, søge og redigere Mailing grupper here ";
$lang_editg_new_name="Skriv navnet på den nye gruppe du vil tilføje";
$lang_editg_new="Skriv en unik ID for denne gruppe";
$lang_editg_expression="Skriv hvilken gruppe du vil søge i, i databasen";
$lang_editg_correct="Skriv den rigtige gruppe ID :";
$lang_editg_correct_name="Skriv det korrekte gruppe navn :";
$lang_editg_delete="Vil du slette denne gruppe :";
$lang_editg_jump="---- Kvik Spring ----";
$lang_editg_add="Tilføj Gruppe";
$lang_editg_search="Søg";
$lang_editg_refresh="Opdater";
$lang_editg_editdata="Rediger Databasen";
$lang_editg_editdataex="Vælg den handling du vil udføre med linket foran. ";
$lang_editg_ipedit="Rediger";
$lang_editg_ipdelete="Slet";
$lang_editg_subscribers="Tilmeldte";
$lang_editg_name="Gruppe navn ( ID )";

/*edit maillist history */
$lang_edith_title="Mailing historie";
$lang_edith_titlex="En liste med alle de sendte mails";
$lang_edith_editdata="Historie over sendte emails";
$lang_edith_editdataex="Vælg den handling du vil udføre med linket foran. ";
$lang_edith_date="Dato";
$lang_edith_edit="Gensend";
$lang_edith_to="Send til";
$lang_edith_delete="Slet";
$lang_edith_delete_history="Vil du slette mailen med navnet : ";
$lang_edith_subject="Emne ";

/*diagnostics */
$lang_diag_simple="Simpel Diagnose";
$lang_diag_simpleex="Denne side er et simpelt chek på om filer er skrivebeskyttede eller ej. ";
$lang_diag_status="Status";
$lang_diag_checking="Checkker / Fejl";
$lang_diag_globals="Hvis der sker er fejl er filen skrivebeskyttet. Du skal ændre skrive rettighedderne. ";

$lang_diag_temp="Hvis der sker en fejl så er temp. mappen skrivebeskyttet.  Du skal ændre skrive rettighedderne";

/*import */
$lang_import_adress="Importer email addresser";
$lang_import_adressex="Dette vil gøre det muligt for dig at tilføje email addresser med en tekst fil. ";
$lang_import_import="File der skal importeres";
$lang_import_import_help="Vælg filen fra hvor du vil importere email addresserne.  Email addresserne er gemt hver for sig på en linie i tekst filen. ";
$lang_import_next="Næste";
$lang_import_group="Importer ind i gruppe";
$lang_import_group_help="Dette er gruppen hvor email addresserne vil blive importeret ind i";
$lang_import_close="Luk";

/*mainnn inc files */
$lang_email_thanks="Tak for din registrering";
$lang_emailexist_error="Tilmeldings Fejl! !!";
$lang_emailexist_adress="Email addressen {email} findes allerede. ";
$lang_emailexist_adress_error="Email addressen {email} findes ikke i databasen.  ";
$lang_emailreg_verify="En email er blevet sendt til {email} Godkend din tilmeldelse ved at klikke på linket i mailen. ";
$lang_emailreg_done="Email addressen {email} er blevet tilføjet. ";
$lang_emailunreg_done="Email addressn {email} blev slettet. ";
$lang_emailremoved="Email addressen blet fjernet";
$lang_removed_adress="Email addressen {email} blev fjernet fra databasen.";

/*editor */
$lang_htmledit_cancel="Annuller";
$lang_htmledit_reset="Slet";
$lang_htmledit_save="Gem";


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