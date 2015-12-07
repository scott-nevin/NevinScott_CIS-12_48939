<?php
# -------------------------------------------------------------------
# License and copyright:
#
# This program is designed and copyrighted by
# Aaron Colman on August 5, 2004 under the terms 
# of the GPL provided under gpl.txt
#
# For more information visit http://www.ibasics.biz
# or write me at aaron@ibasics.biz
#
# I will be updating this software as time goes
# on, if you want the newest version... that's 
# where you need to go.
#
# No warranty of any kind is implied or expressed.
# Neither fitness for a purpose nor warranty of 
# merchantability. You alone are liable for your
# own actions with this script. If something goes 
# wrong it's your fault and you get to deal with 
# the consequences. Not I! If you don't agree with
# these terms then don't use this script.
# -------------------------------------------------------------------
# Get URL-based and absolute-based directory and filename.
$thisfile_URL = "http://".$_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF'];
$thisdir_URL  = substr($thisfile_URL, 0, strrpos($thisfile_URL, '/')).'/';
$thisfile_ABS = $_SERVER['SCRIPT_FILENAME'];
$thisdir_ABS  =  substr($thisfile_ABS, 0, strrpos($thisfile_ABS, '/')).'/';
# -------------------------------------------------------------------
# ***** CONFIGURATION SETTINGS *****

# The Email address you want results mailed to.
$email_to_send_to = '';

# The name of the survey. What do you want to call it?
$name_of_survey = 'Test Survey';

# Template files to load. The opening template, the close template.
# The template displayed before the survey form is printed and
# The template displayed after the email is sent. Or leave empty.
$open_template         = $thisdir_ABS."templates/sss.open.php";
$close_template        = $thisdir_ABS."templates/sss.close.php";
$survey_heading_page   = $thisdir_ABS."templates/sss.head.php";
$survey_complete_page  = $thisdir_ABS."templates/sss.done.php";

# The charset being used for all messages sent out. ISO-8859-1 by default,
# but you can use anything you want (Unicode, etc).
$charset = 'ISO-8859-1';

# -------------------------------------------------------------------

# ----------------------- Survey Form Information -------------------
# Type: checkbox
# Deft: Y or N for default check.
#
# Type: radio
# Deft: Default selected option
# Opts: Array of option values
#
# Type: select
# Deft: Default selected option
# Opts: Array of option values
#
# Type: text
# Deft: Default field text
# Opts: maxl, size - Maxlength and field size
#
# Type: textarea
# Deft: Default textarea field text
# Opts: rows, cols - row size, column size
#
# $hidden is an array of hidden fields.
# key being the name of the field, value as the value.
#
# $button_text is the submit button text
# -------------------------------------------------------------------

# ***** SAMPLE DATA *****

$question['1']['type'] = 'text';
$question['1']['desc'] = 'Test Text';
$question['1']['deft'] = 'Blah';
$question['1']['opts']['maxl'] = '30';
$question['1']['opts']['size'] = '10';

$question['2']['type'] = 'checkbox';
$question['2']['desc'] = 'Check Test 1';
$question['2']['deft'] = 'y';

$question['3']['type'] = 'checkbox';
$question['3']['desc'] = 'Check Test 2';
$question['3']['deft'] = 'n';

$question['4']['type'] = 'radio';
$question['4']['desc'] = 'Radio Test';
$question['4']['deft'] = '2';
$question['4']['opts'][] = 'Option 1';
$question['4']['opts'][] = 'Option 2';
$question['4']['opts'][] = 'Option 3';

$question['5']['type'] = 'select';
$question['5']['desc'] = 'Select Test';
$question['5']['deft'] = '2';
$question['5']['opts'][] = 'Option 1';
$question['5']['opts'][] = 'Option 2';
$question['5']['opts'][] = 'Option 3';

$question['6']['type'] = 'textarea';
$question['6']['desc'] = 'Textarea Test';
$question['6']['deft'] = 'Default Junk';
$question['6']['opts']['rows'] = '10';
$question['6']['opts']['cols'] = '30';

$hidden['test1'] = "TEST!";
$hidden['test2'] = "TESTO!";
$button_text     = 'Send it!';

# -------------------------------------------------------------------
function my_remove_slashes($st) {
  if (get_magic_quotes_gpc()) { return stripslashes($st); }
  else { return $st; }
}

function security_filter($st) {
   $attribs = 'javascript:|onclick|ondblclick|onmousedown|onmouseup|onmouseover|'.
              'onmousemove|onmouseout|onkeypress|onkeydown|onkeyup';

   $st = my_remove_slashes($st);
   $st = stripslashes(preg_replace("/$attribs/i", 'forbidden', $st));
   $st = strip_tags($st);
   $st = htmlentities($st);
   return $st;
}
# -------------------------------------------------------------------

if (!(empty($open_template))) { include($open_template); }

if (isset($_POST['button'])) {
   foreach ($_POST as $key => $value) {
     if ($key != 'button') {
        if (preg_match('/^hidden_(.*)/i',$key)) {
           $value = security_filter($value);
           $key = trim(strstr($key,'_'),'_');

           if (isset($hidden[$key])) { 
               $hidden_data[$key] = $value; 
           }
        }
        else {
           if (isset($question[$key])) {
               $value = security_filter($value);
               if ($question[$key]['type'] == 'checkbox') { $value = "YES"; }
               $results[$key] = $value;
           }
        }
     }
   }

   # Now that the responses are processed, prepare the email.

   $msg  = "----------------- User Info -----------------\n\n";
   $msg .= "Sent from: ".$_SERVER['REMOTE_HOST']." [".$_SERVER['REMOTE_ADDR']."] \n";
   $msg .= "Coming from (referer): ".$_SERVER['HTTP_REFERER']."\n";
   $msg .= "Using (user agent): ".$_SERVER['HTTP_USER_AGENT']."\n\n";
   $msg .= "---------------------------------------------\n\n";

   if (isset($question)) {
      $lineflag = FALSE;
      foreach ($results as $key => $value) {
         if ($lineflag == FALSE) { 
              $msg .= "----------------- Questions -----------------\n\n";
              $lineflag = TRUE;
         }
         $msg .= "Question: ". $key ." - ". $question[$key]['desc'] ."\n";
         $msg .= "Response: ". $value . "\n\n";
      }
      $msg .= "---------------------------------------------\n";
   }
   
   $msg .= "\n";

   if (isset($hidden_data)) {
      $lineflag = FALSE;
      foreach ($hidden_data as $key => $value) {
         if ($lineflag == FALSE) { 
              $msg .= "---------------- Hidden vars ----------------\n\n";
              $lineflag = TRUE;
         }
         $msg .= $key ." - ". $value ."\n";
      }
      $msg .= "\n---------------------------------------------\n";
   }

   # Prep and send email.
   $headers  = "Return-Path: $email_to_send_to\r\n";
   $headers .= "From: $name_of_survey processor < $email_to_send_to >\r\n";
   $headers .= "Content-type: text/plain; charset=$charset\r\n";
   mail($email_to_send_to, $name_of_survey . " mailer", $msg, $headers);

   # Include template file.
   if (!(empty($survey_complete_page))) { include($survey_complete_page); }
}

else {

     if (!(empty($survey_heading_page))) { include($survey_heading_page); }

     print "<form action=\"$thisfile_URL\" method=\"POST\"> \n";

     foreach ($question as $key => $value) {
         $type = strtolower($question[$key]['type']);
         $desc = $question[$key]['desc'];
         $deft = $question[$key]['deft'];
         $opts = $question[$key]['opts'];

         print $desc."\n";
         
         if ($type == "checkbox") {
              if (strtolower($deft) == 'y') { $box_value = "1"; $CHECKED = ' CHECKED'; }
                 else { $box_value = "0"; $CHECKED = ''; }
              print "<input type=\"checkbox\" name=\"$key\" value=\"$box_value\"$CHECKED>\n<br>";
         }

         if ($type == "radio") {
            print "<br>\n";
            $i = 1;
            foreach ($opts as $opt_key => $opt_value) {
                if ($deft == $i) { $CHECKED = " checked=\"checked\""; } 
                   else { $CHECKED = ''; }

                print "<input type=\"RADIO\" name=\"$key\" value=\"$opt_value\"$CHECKED> - $opt_value <br>\n";
                $i++;
            }
         }

         if ($type == "select") {
             print "<br>\n";
             print "<select name=\"$key\">\n";

             $i = 1;
             foreach ($opts as $opt_key => $opt_value) {
                 if ($deft == $i) { $CHECKED = ' SELECTED'; } 
                     else { $CHECKED = ''; }
                     print "<option value=\"$opt_value\"$CHECKED>$opt_value</option>\n";
                 $i++;
             }
             print "</select><br>\n";
         }

         if ($type == "text") {
             print "<br>\n";
             $size = $opts['size'];
             $maxl = $opts['maxl'];
             print "<input maxlength=\"$maxl\" size=\"$size\" name=\"$key\" value=\"$deft\"><br>\n";
         }

         if ($type == "textarea") {
             print "<br>\n";
             $colz = $opts['cols'];
             $rowz = $opts['rows'];
             print "<textarea name=\"$key\" rows=\"$rowz\" cols=\"$colz\">$deft</textarea><br>\n";
         }

       # Spacing between survey questions -----------

       print "<br>\n";

       # --------------------------------------------

     }

     foreach ($hidden as $key => $value) {
        print "<input type=\"hidden\" name=\"hidden_$key\" value=\"$value\">\n";
     }

     print "<input type=\"submit\" name=\"button\" value=\"$button_text\">\n";
     print " &nbsp; -- &nbsp; \n";
     print "<INPUT TYPE=\"reset\" VALUE=\"Clear\">\n";
     print "</form>";
     print "<center><font size=\"2\">Powered by <A HREF=\"http://www.ibasics.biz/sss\">Super Simple Survey</A></font></center><br>\n";
}

if (!(empty($close_template))) { include($close_template); }
?>