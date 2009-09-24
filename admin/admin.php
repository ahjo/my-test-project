<?php
error_reporting(E_ALL);
if ( isset ( $action ) )
{
if( $action == "logout" ){ include("admin/logout.php"); return; }
}
if(!isset($_SESSION['admin']))$action="login"; else if ( !isset ( $action )) $action= "main" ;
if( $action == "login" ){ include("admin/login.php"); return; }
include_once("inc/initdb.php");


if( $action == "main" ){ include("admin/head.php");include("admin/main.php");include("admin/tail.php"); return; }
if( $action == "history" ){ include("admin/head.php");include("admin/history.php");include("admin/tail.php"); return; }
if( $action == "edit" ){ include("admin/head.php");include("admin/edit.php");include("admin/tail.php"); return; }
if( $action == "editg" ){ include("admin/head.php");include("admin/editg.php");include("admin/tail.php"); return; }
if( $action == "sendmail" ){ include("admin/head.php");include("admin/sendmail.php");include("admin/tail.php"); return; }
if( $action == "about" ){ include("admin/head.php");include("admin/about.php");include("admin/tail.php"); return; }
if( $action == "help" ){ include("admin/head.php");include("admin/help.php");include("admin/tail.php"); return; }


if( $action == "editwin" ){ include("admin/editwin.php"); return; }
if( $action == "import" ){ include("admin/import.php"); return; }
if( $action == "preview" ){ include("admin/preview.php"); return; }
if( $action == "diag" ){ include("admin/diagnostics.php"); return; }
if( $action == "vote" ){ include("admin/vote.php"); return; }
if( $action == "send" ){ include("admin/send.php"); return; }
if( $action == "export" ){ include("admin/export.php"); return; }
if( $action == "search" ){ include("admin/search.php"); return; }
if( $action == "edit_email" ){ include("admin/edit_email.php"); return; }
?>