****************************************************************************
 
         MainMenuLink v.1.0 | Xoops Module by Tank | July 2007
         Website: http://www.classyinternational.com
 
****************************************************************************

MainMenuLink is a XOOPS module that provides the ability to add a main menu item that links to a programmable URL.

Tested on XOOPS 2.0.16

Instructions:
1) After downloading and unzipping the package, you have a few options before uploading to your server.
2) Option 1: Upload the module as supplied with no modifications
             This option should be used if this is the first install of the module
   Option 2: Edit/modify files prior to upload 
             This option should be used if you have already installed this module
             and you are now installing another copy of this module. Refer to the
             "Instructions for file edits" section for making required changes to files
3) Be sure to set group and block permissions.
4) Go to admin page and configure the destination URL. The default value has been set to
   http://www.classyinternational.com during the module installation.
5) Modify the Menu Item label and it's order of appearance through the Modules admin page.

Instructions for file edits (when installing multiple copies of this module):
1) To allow for installing multiple copies of this module a number has been added to the module
   label. Each copy of the module must have a unique identifier.
2) Begin by relabeling the module directory. The directory name is currently MainMenuLink1.
   Change the directory name by right clicking the directory in File Explorer and selecting "Rename".
   Change the directory name to MainMenuLink2 (each copy you install you must increment the number
   at the end of the name). You will notice when looking in the images subdirectory there are enough 
   images supplied for creating a total of 9 copies of the module.
3) Implement the following edits 
     NOTE: I have listed all files so there is no confusion.
     NOTE: Edit examples change from "1" to "2" but use the number associated with how many copies
           have already been installed.

MainMenuLink2/index.php ...... No edits required

MainMenuLink2/xoops_version.php ...... 4 edits required

  Location: Line 30
  Before Edit: $modversion['name'] = "MainMenuLink1";
  After Edits: $modversion['name'] = "MainMenuLink2";

  Location: Line 37
  Before Edit: $modversion['image'] = "images/MainMenuLink1.png";
  After Edits: $modversion['image'] = "images/MainMenuLink2.png";

  Location: Line 38
  Before Edit: $modversion['dirname'] = "MainMenuLink1";
  After Edits: $modversion['dirname'] = "MainMenuLink2";

  Location: Line 53
  Before Edit: $modversion['tables'][0] = "MainMenuLink1";
  After Edits: $modversion['tables'][0] = "MainMenuLink2";

MainMenuLink2/sql/mysql.sql ...... 2 edits required

  Location: Line 3
  Before Edit: CREATE TABLE MainMenuLink1 (
  After Edits: CREATE TABLE MainMenuLink2 (

  Location: Line 7
  Before Edit: INSERT INTO MainMenuLink1 VALUES ('http://www.classyinternational.com/');
  After Edits: INSERT INTO MainMenuLink2 VALUES ('http://www.classyinternational.com/');
  
MainMenuLink2/language/english/mod_info.php ...... 3 edits required

  Location: Line 5
  Before Edit: define("_MI_MML1_MOD_NAME", "MainMenuLink v.1.0");
  After Edits: define("_MI_MML2_MOD_NAME", "MainMenuLink v.1.0");

  Location: Line 6
  Before Edit: define("_MI_MML1_MOD_TITLE", "MainMenuLink v.1.0");
  After Edits: define("_MI_MML2_MOD_TITLE", "MainMenuLink v.1.0");

  Location: Line 9
  Before Edit: define("_MI_MML1_MOD_DESC", "Module for providing Main Menu item that links to defined URL");
  After Edits: define("_MI_MML2_MOD_DESC", "Module for providing Main Menu item that links to defined URL");

MainMenuLink2/admin/admin_form.php ...... 2 edits required

  Location: Line 37
  Before Edit: <img src="../images/MainMenuLink1.png" width="92" height="52" alt="Main Menu Link by Tank" />
  After Edits: <img src="../images/MainMenuLink2.png" width="92" height="52" alt="Main Menu Link by Tank" />

  Location: Line 42
  Before Edit: <b>Configuration for MainMenuLink1 module</b></span></td>
  After Edits: <b>Configuration for MainMenuLink2 module</b></span></td>

MainMenuLink2/admin/index.php ...... No edits required

MainMenuLink2/admin/help.php ...... No edits required

MainMenuLink2/admin/menu.php ...... 1 edit required

  Location: Line 34
  Before Edit: $adminmenu[0]['title'] = _MI_MML1_MOD_TITLE;
  After Edits: $adminmenu[0]['title'] = _MI_MML2_MOD_TITLE;

MainMenuLink2/admin/update.php ...... 2 edits required

  Location: Line 49
  Before Edit: $result = mysql_query("UPDATE ".$xoopsDB->prefix("MainMenuLink1")." SET destinationURL='$url'");
  After Edits: $result = mysql_query("UPDATE ".$xoopsDB->prefix("MainMenuLink2")." SET destinationURL='$url'");

  Location: Line 51
  Before Edit: redirect_header("index.php",1,"MainMenuLink1 Parameter has been updated");
  After Edits: redirect_header("index.php",1,"MainMenuLink2 Parameter has been updated");
  
MainMenuLink2/admin/var_lookup.php ...... 1 edit required

  Location: Line 30
  Before Edit: $result = mysql_query( "SELECT * FROM ".$xoopsDB->prefix("MainMenuLink1")." " )
  After Edits: $result = mysql_query( "SELECT * FROM ".$xoopsDB->prefix("MainMenuLink2")." " )
  
Edits to convert the module to a unique entity have been completed.
