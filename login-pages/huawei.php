<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge;chrome=1"><!-IE7 mode->
<meta http-equiv="Pragma" content="no-cache" />
<title></title>
<link href="/Cuscss/login.css?202106071419538557553184798"  media="all" rel="stylesheet" />
<link href="/Cuscss/english/frame.css?202106071419538557553184798"  media="all" rel="stylesheet" />
<script language="JavaScript" src="/resource/common/md5.js?202106071419538557553184798"></script>

<style type="text/css">
#first{
    background-color:white;
    height:25px;
    text-align: center;
    color: red;
    position:absolute;
    width: 380px;
    top: 312px;
}


#pwd_modify{
    border:1px solid #CCCCCC;
    width:650px;
    margin-left:600px;
    margin-top:140px;
    position:absolute;
    z-index:10;
    background:#FFFFFF;
    display:none;
}

#base_mask {
    width:100%;
    height:100%;
    position:absolute;
    left:0px;
    right:0px;
    z-index:2;  
    filter: alpha(opacity=60);
    -moz-opacity: 0.6;
    -khtml-opacity: 0.6;
    opacity: 0.8;
    background-color:#eeeeee;
    display:none;
}


</style>
</head>
<body onLoad="LoadFrame();">
<div id="base_mask" style=""></div>
<div  id="pwd_modify" style="display:none;">
    <div>
        <li style="position: relative;top:10px; width: 500px;left: 100px; list-style-type: none; color: red; font-weight: bold; font-size: 14px;"><div>The login password is the default one. Change it immediately.</div></li>
    </div>
    
    <div >
    <ul style="position:absolute; clear:both; list-style-type: none; top:30px; left:-38px; height:15px; line-height:30px; font-weight: bold; font-size: 12px;">
        <li style="position: relative; top: 0px; width: 130px;" ><div align="right">Old Password:</div></li>
            <li style="position: relative; top: 10px; width: 130px;" ><div align="right">New Password:</div></li>
            <li style="position: relative; top: 20px; width: 130px;" ><div align="right">Confirm Password:</div></li>
    </ul>

    <ul style="color:#FFFFFF; position:absolute; top:30px; left:94px; height:15px; list-style-type:none; line-height:30px;">
        <li ><input name="old_password" id="old_password"    type="password" autocomplete="off" size="20" style="position: absolute; top: 5px; font-size:13px; width:180px;" /></li>
            <li ><input name="new_password" id="new_password"  type="password" autocomplete="off" size="20" style="position: absolute; top: 45px; font-size: 13px; width:180px; " /></li>
            <li ><input name="confirm_password" id="confirm_password" type="password" autocomplete="off" size="20" style="position: absolute; top: 85px; font-size:13px; width:180px;" /></li>      
    </ul>
    
        <ul style="position:absolute; clear:both; list-style-type: none; top:30px; left:290px; height:15px; line-height:16px; font-size: 12px;">
        <li style="position: relative; top: 0px; width: 280px;" ><div align="left">1.The password must contain at least 6 characters.<br/>2.The password must contain at least two of the following combinations:Digit, uppercase letter, lowercase letter, Special characters (` ~ ! @ # $ % ^ & * ( ) - _ = + \\ | [ { } ] ; : ' \" < , . > / ?).<br/>3.The password cannot be any user name or user name in reverse order.</div></li>
        </ul>
    </div>
    <div id="modify_pwd_label" >
        <li style="position: relative;top:150px; width: 500px; list-style-type: none; color: red; font-weight: bold; font-size: 14px;"><div>Modify the wifi password</div></li>
    </div>
    <div id="modify_pwd_ssid1" >
        <ul style="position:absolute; clear:both; list-style-type: none; top:175px; left:-38px; height:15px; line-height:30px; font-weight: bold; font-size: 12px;">
            <li style="position: relative; top: 0px; width: 130px;" ><div id="ssid1_name_lebel" align="right"></div></li>
            <li style="position: relative; top: 0px; width: 130px;" ><div align="right">WiFi Password:</div></li>
        </ul>
        <ul style="color:#FFFFFF; position:absolute; top:175px; left:94px; height:15px; list-style-type:none; line-height:30px;">
            <li id="ssid1_name" style="position: absolute; top: 0px; font-size: 13px; width:180px; color: #000000; "></li>
            <li ><input name="ssid1_password" id="ssid1_password" type="password" autocomplete="off" size="20" style="position: absolute; top: 35px; font-size:13px; width:180px;" /></li>  
        </ul>
        <ul style="position:absolute; clear:both; list-style-type: none; top:175px; left:290px; height:15px; line-height:20px; font-size: 12px;">
            <li style="position: relative; top: 35px; width: 280px;" ><div align="left">(8-63 characters or 64 hexadecimal characters)</div></li>
        </ul>
        
    </div>
    <div id="modify_pwd_ssid2" >
        <ul style="position:absolute; clear:both; list-style-type: none; top:235px; left:-38px; height:15px; line-height:30px; font-weight: bold; font-size: 12px;">
            <li style="position: relative; top: 0px; width: 130px;" ><div align="right">5G WiFi SSID:</div></li>
            <li style="position: relative; top: 0px; width: 130px;" ><div align="right">WiFi Password:</div></li>
    </ul>
        <ul style="color:#FFFFFF; position:absolute; top:235px; left:94px; height:15px; list-style-type:none; line-height:30px;">
            <li id="ssid2_name" style="position: absolute; top: 0px; font-size: 13px; width:180px; color: #000000; "></li>
            <li ><input name="ssid2_password" id="ssid2_password" type="password" autocomplete="off" size="20" style="position: absolute; top: 35px; font-size:13px; width:180px;" /></li>
        </ul>
        <ul style="position:absolute; clear:both; list-style-type: none; top:235px; left:290px; height:15px; line-height:20px; font-size: 12px;">
            <li style="position: relative; top: 35px; width: 280px;" ><div align="left">(8-63 characters or 64 hexadecimal characters)</div></li>
        </ul>       
    </div>
    
    <div id="update" style="position: relative;">
        <div style="float: left; margin-top: 135px; margin-left: 180px;">
            <button id="button_update" style="width: 80px; height: 23px;" onclick="SubmitUpdate();" >Update</button>
            <div >&nbsp;</div>
        </div>
    </div>
    
</div>

<div id="main_wrapper">
        <div id="loginarea">
      
            <div id="logininfo">
                <div id="chooselag" class="changelanguageline" style="display:none;">
                    <div class="changelanguageleft"></div>
                    <div id="chooselagButton" class="changelanguageright"></div>
                </div>

                <div id="loginuser" class="contentItemlogin">
                    <div class="labelBoxlogin">
                        <span id="account" BindText="frame001"></span>
                        <span id="accountstc" BindText="frame001stc" style="display:none;"></span>
                    </div>
                    <div class="contenboxlogin"><input type="text" id="txt_Username" name="txt_Username" class="logininputcss" /></div>
                </div>

                <div id="loginpwd" class="contentItemlogin">
                    <div class="labelBoxlogin">
                        <span id="Password" BindText="frame002"></span>
                        <span id="Passwordstc" BindText="frame002stc" style="display:none;"></span>
                    </div>
                    <div class="contenboxlogin"><input type="password" autocomplete="off" id="txt_Password" name="txt_Password" class="logininputcss" autocomplete="off" /></div>
                </div>          
                <table id="tablecheckcode" border="0" cellpadding="0" cellspacing="0" width="100%" style="display: none">
                    <tr>
                        <td height="8"></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="labelBoxlogin" ><span id="Validate" BindText="frameValidate1"></span></div>
                            <div id="imgCheckCode" >
                                <img id="imgcode" >
                                <canvas id="canvasDrawImgcode" width="150" height="35" ></canvas>
                            </div>
                        </td>
                    </tr>
                </table>
                
                    <div class="accordion" id="accordion_help">
                        <div id="user_find" class="ember-view accordion-group">    
                            <div class="accordion-heading marginright_35">       
                                <div id="collapseinfo_1" class="text_center paddingright_15 index_page_font_color accordion-toggle text_underline">
                                    <span id="i18n-0" BindText="frame0161"></span>
                                </div>     
                            </div>    
                            
                            <div id="collapse_1" class="hide">       
                                <div class="accordion-inner">         
                                    <div class="rounddiv getaccount_part">           
                                        <div class="bodydiv rounddiv paddingtop_8 getaccount_part_body index_page_font_color" align="center"> &nbsp;&nbsp;&nbsp;
                                            <span id="i18n-1" BindText="frame017"></span>
                                        </div>           
                                        <div class="bodydiv rounddiv getaccount_info paddingbottom_20" align="center">               
                                            <div class="index_page_font_color text_left">
                                                <span id="i18n-2" BindText="frame018"></span>
                                            </div>
                                        </div>            
                                    </div>         
                                </div>      
                            </div>     
                        </div>
                        <div id="user_restore" class="ember-view accordion-group margintop_15">    
                            <div class="accordion-heading marginright_35">       
                                <div id="collapseinfo_2" class="text_center paddingright_15 index_page_font_color accordion-toggle text_underline">
                                    <span id="i18n-3" BindText="frame019"></span>
                                </div>     
                            </div>     
                            <div id="collapse_2" class="hide">       
                                <div class="accordion-inner">         
                                    <div class="rounddiv getaccount_part">           
                                        <div class="bodydiv rounddiv paddingtop_8 getaccount_part_body index_page_font_color"> &nbsp;&nbsp;&nbsp;
                                            <span id="i18n-4" BindText="frame020"></span>           
                                        </div>
                                        <div class="getaccount_info rounddiv">             
                                            <div class="bodydiv rounddiv">           
                                                <div class="text_left index_page_font_color" BindText="frame021">
                                                    
                                                </div>           
                                                <div class="text_left">
                                                    <font color="#FF0000">
                                                        <span id="i18n-5" BindText="frame022"></span>
                                                    </font>
                                                </div>           
                                            </div>          
                                        </div>         
                                    </div>       
                                </div>     
                            </div>
                        </div>
                    </div>
                
                
                <div id="loginbuttondiv" class="contentItemlogin">
                 
                </div>
                <div id="DivErrPage" class="contentItemlogin">
                    <div id="DivErrPagePlace" class="labelBoxlogin"></div>
                    <div id="DivErrIconPlace" class="contenboxlogin"><div id="DivErrIcon"></div><div id="DivErrPromt"></div></div>
                </div>
            </div>
        </div>
        <div id="greenline"></div>
        <div id="copyright">
        <div id="copyrightspace"></div>
        <div id="copyrightlog" style="display:none;"></div>
       
    </div>

    </div>

</body>
</html>
