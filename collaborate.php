<?php
////////////////////////////////////////////////////////////////////////////////
//
//  University of New Mexico - School Year 2014 - 2015
//  Senior Design Project - Solar Image Collaboration
//
//  CARINA - Collaborative Solar Imaging Annotation
//
//  Sponsor - Professor Pattichis
//
//  Team - Patrick Lopez PM, Conner Dolan, Edward Sadzewicz, 
//         Cody Shell, Jaclynn Wakley
//
////////////////////////////////////////////////////////////////////////////////
//
//  Module:  collaborate.php
//
//  Purpose: View setup for collaborate service
//
////////////////////////////////////////////////////////////////////////////////
include_once 'config/lang_config.php';
include_once 'translations/' . $lang_file;
/*
  //- Begin config of Mibbit widget - Edit below as required.
  $mibbitframe['widgeturi']="http://widget.mibbit.com/"; #Only change this if Mibbit Widget URL changes (Unlikely) - Do not add a "?".
  $mibbitframe['height']="600px"; #Set this to the desired height of Mibbit widget
  $mibbitframe['width']="800px"; #Set this to the desired width of Mibbit widget
  $mibbit['authmethod']="nickserv"; #Set this to the nickname authentication method (as per Mibbit widget specs)
  $mibbit['autoConnect']="false"; #Set this to true if you would like Mibbit to automatically connect (Not recommended)
  $mibbit['channel']="#Main"; #Set this to the room(s) you would like the user to join, if more than one, separate by comma ie. #Main,#Test
  $mibbit['charset']="UTF-8"; #Set this to the default character set (Recommended: UTF-8)
  $mibbit['customloading']="Connecting to a random URChat server"; #Set this to a custom message displayed to user whilst attempting to connect
  $mibbit['customprompt']="Welcome to URChat"; #Set this to a custom message displayed on the initial Mibbit widget screen
  $mibbit['debug']="false"; #Set to true to show debug window (not recommended for live websites)
  $mibbit['nick']="Guest_?????"; #Set this to the default nickname, a "?" generates a random number
  $mibbit['noServerMotd']="false"; #Set to true to hide the server MOTD file
  $mibbit['noServerNotices']="false"; #Set to true to hide server notices
  $mibbit['noServerTab']="false"; #Set to false to show the server tab in Mibbit widget
  $mibbit['promptChannelKey']="false"; #Set to true to ask user for channel key
  $mibbit['promptPass']="true"; #Set to true to ask user to enter nickname password
  $mibbit['server']="irc.urchat.net"; #Set this to your server
  $mibbit['settings']=""; #Set this to your Mibbit widget preferences settings key (if you have one)
  //- End config of Mibbit widget - YOU SHOULD NOT THE SECTION BELOW BELOW UNLESS YOU KNOW WHAT YOU ARE DOING!!!
  foreach ($mibbit as $key => $value) {
  $mibbitframe['widgetparams']=$mibbitframe['widgetparams'].$key."=".rawurlencode($value)."&";
  }
  echo "<iframe name=\"chatFrame\" style=\"height:".$mibbitframe['height'].";width:".$mibbitframe['width'].";\" frameborder=\"0\" src=\"".$mibbitframe['widgeturi']."?".$mibbitframe['widgetparams']."\"></iframe>";
 */
?>
<!DOCTYPE html>
<html>
  <title>Carina | CHAT</title>
  <frameset cols="66.6%,33.4%">
    <frame src="gallery.php" name="frame1">
      <frameset rows="60%, 40%">
        <frame src="MySkype.html" name="frame2">
          <frame src="chat.php" name="frame3">
            </frameset>                                 
            </frameset>
            </html>