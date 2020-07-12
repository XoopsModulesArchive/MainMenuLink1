<?php

//****************************************************************************
// MainMenuLink v.1.0 | Xoops Module by Tank | July 2007
// Website: http://www.classyinternational.com
// 
//****************************************************************************

//  ------------------------------------------------------------------------ //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //
?>


 <form name="admin" id="admin" action="update.php" method="post" />
    <table cellspacing="1" width="100%">
      <tbody>        
        <tr align="center">
          <td colspan="2" class="odd"><div align="left">
          <img src="../images/MainMenuLink1.png" width="92" height="52" alt="Main Menu Link by Tank" />
          </div></td>
        </tr>
        <tr align="left">
          <td class="odd"><span class="odd">
          <b>Configuration for MainMenuLink1 module</b></span></td>
          <td class="odd"><div align="right"><a href="help.php" target="_blank">Help</a></div></td>
        </tr>
        <tr align="left">
          <td class="even">URL (desired destination)</td>
          <td class="even"><input name="url" id="url" size="50" maxlength="255" value="<?php echo $url ?>" type="text" /></td>
        </tr>
        <tr align="left">
          <td class="even">&nbsp;</td>
          <td class="even">&nbsp;</td>
        </tr>
        <tr align="left">
          <td class="odd"></td>
          <td class="odd"><input name="button" id="button" value="Apply Changes" type="submit" /></td>
        </tr>
      </tbody>
    </table>
  </form>

