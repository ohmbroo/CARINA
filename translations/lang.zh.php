<?php
////////////////////////////////////////////////// //////////////////////////////
//
// University of New Mexico - School Year 2014 - 2015
// Senior Design Project - Solar Image Collaboration
//
// CARINA - Collaborative Solar Imaging Annotation
//
// Sponsor - Professor ​​Pattichis
//
// Team - Patrick Lopez PM, Conner Dolan, Edward Sadzewicz,
// Cody Shell, Jaclynn Wakley
//
////////////////////////////////////////////////// //////////////////////////////
//
// Module: translations/lang.zh.php  NOTE: "zh" is the chinese code for "cn"
//
// Purpose: Traditional Chinese Language File
//
// Translation: Jared Morris, May 2015
//
////////////////////////////////////////////////// //////////////////////////////
/**
* Please note: we can use unencoded characters like ö, é etc here as we use
* the html5 doctype with utf8 encoding in the application's header
* (in views/_header.php). To add new languages​​ simply copy this file,
* and create a language switch in your root files.
*/

$lang = array();

// testing message
$lang['MESSAGE_BETA_TESTING'] = '汉语的翻译网页是beta测试。如果您看到一个错误的翻译，就请联系我们！ ';
// LINK THIS NEW STRING TO THE WEBSITE
// Chinese translation pages are beta testing. If you see an error in translation, please contact us! ';
//
// login & registration classes

$lang['MESSAGE_ACCOUNT_LOGIN'] = '请登录or register new account at the 登录Page link to the right';
$lang['MESSAGE_ACCOUNT_NOT_ACTIVATED'] = '您的账户will be activated with this form and then verified with a confirmation email.';
$lang['MESSAGE_CAPTCHA_WRONG'] = '错的Captcha!';
$lang['MESSAGE_COOKIE_INVALID'] = 'Invalid cookie';
$lang['MESSAGE_DATABASE_ERROR'] = '数据库连接问题。 ';
$lang['MESSAGE_EMAIL_ALREADY_EXISTS'] = "This email address is already registered. Please use the \"忘了我的口令\" page if you don't remember it.";
$lang['MESSAGE_EMAIL_CHANGE_FAILED'] = 'Sorry, 您的email changing failed.';
$lang['MESSAGE_EMAIL_CHANGED_SUCCESSFULLY'] = '您的email address has been changed successfully. New email address is ';
$lang['MESSAGE_EMAIL_EMPTY'] = '电子邮件不能为空。 ';
$lang['MESSAGE_EMAIL_INVALID'] = '您的email address is not in a valid email format';
$lang['MESSAGE_EMAIL_SAME_LIKE_OLD_ONE'] = 'Sorry, that email address is the same as 您的current one. Please choose another one.';
$lang['MESSAGE_EMAIL_TOO_LONG'] = '电子邮件长度不能超过64个字。 ';
$lang['MESSAGE_LINK_PARAMETER_EMPTY'] = '空链接参数数据。 ';
$lang['MESSAGE_LOGGED_OUT'] = 'You have been logged out.';
// The "login failed"-message is a security improved feedback that doesn't show a potential attacker if the user exists or not
$lang['MESSAGE_LOGIN_FAILED'] = '登录失败。 ';
$lang['MESSAGE_OLD_PASSWORD_WRONG'] = '您的旧密码错了。 ';
$lang['MESSAGE_PASSWORD_BAD_CONFIRM'] = '密码不符';
$lang['MESSAGE_PASSWORD_CHANGE_FAILED'] = '对不起， 您的更改密码失败了。 ';
$lang['MESSAGE_PASSWORD_CHANGED_SUCCESSFULLY'] = '密码更改成功！ ';
$lang['MESSAGE_PASSWORD_EMPTY'] = '密码字段空';
$lang['MESSAGE_PASSWORD_RESET_MAIL_FAILED'] = 'Password reset mail NOT successfully sent! Error: ';
$lang['MESSAGE_PASSWORD_RESET_MAIL_SUCCESSFULLY_SENT'] = 'Password reset mail successfully sent!';
$lang['MESSAGE_PASSWORD_TOO_SHORT'] = 'Password has a minimum length of 6 characters';
$lang['MESSAGE_PASSWORD_WRONG'] = '错的密码。再试一次。 ';
$lang['MESSAGE_PASSWORD_WRONG_3_TIMES'] = 'You have entered an incorrect password 3 or more times already. Please wait 30 seconds to try again.';
$lang['MESSAGE_REGISTRATION_ACTIVATION_NOT_SUCCESSFUL'] = 'Sorry, no such id/verification code combination here...';
$lang['MESSAGE_REGISTRATION_ACTIVATION_SUCCESSFUL'] = 'Activati​​on was successful! 您现在可以登录了！ ';
$lang['MESSAGE_REGISTRATION_FAILED'] = '您的注册失败了，请返回重新尝试。 ';
$lang['MESSAGE_RESET_LINK_HAS_EXPIRED'] = '您的剩余链接到期了，请在一小时内使用复位链接。 ';
$lang['MESSAGE_VERIFICATION_MAIL_ERROR'] = '对不起，我们不能给你发证明邮件，您的账户没有被创建。 ';
$lang['MESSAGE_VERIFICATION_MAIL_NOT_SENT'] = '证明邮件没有发送成功！错误： ';
$lang['MESSAGE_VERIFICATION_MAIL_SENT'] = '您的账户has been created successfully and we have sent you an email. Please click the VERIFICATION LINK within that mail.';
$lang['MESSAGE_USER_DOES_NOT_EXIST'] = 'This user does not exist';
$lang['MESSAGE_USERNAME_BAD_LENGTH'] = '用户名cannot be shorter than 2 or longer than 64 characters';
$lang['MESSAGE_USERNAME_CHANGE_FAILED'] = 'Sorry, 您的chosen 用户名renaming failed';
$lang['MESSAGE_USERNAME_CHANGED_SUCCESSFULLY'] = '您的用户名has been changed successfully. 新的用户名是- ';
$lang['MESSAGE_USERNAME_EMPTY'] = '用户名field was empty';
$lang['MESSAGE_USERNAME_EXISTS'] = '对不起，那个用户名已经使用了。请选择另外一个。 ';
$lang['MESSAGE_USERNAME_INVALID'] = '新的用户名只能由字母和数字组成，必须为2～64字。例如： azAZ09)';
$lang['MESSAGE_USERNAME_SAME_LIKE_OLD_ONE'] = '对不起，那个用户名是一样的您的当前用户名。请选择另外一个。 ';
// Common Wording/Messages in Pages
$lang['MESSAGE_WELCOME'] = '欢迎';
$lang['MESSAGE_CARINA'] = '协同太阳能影像处理';
$lang['MESSAGE_LOG_IN_PAGE'] = '登录页面';
$lang['MESSAGE_CONSTELLATION'] = '星座';
$lang['MESSAGE_CONSTELLATION_INTRO'] = "船底(Carina)星座位于南部的天空，它包含了夜空中第二亮的星星。";
$lang['MESSAGE_AIM'] = '我们的目的';
$lang['MESSAGE_AIM_DEDICATION'] = '专用';
$lang['MESSAGE_AIM_INTRO'] = 'To create an open-source web application that will collect valuable data on coronal holes.';
$lang['MESSAGE_LOBO'] = "Everyone's a";
$lang['MESSAGE_LOBO_INTRO'] = "新墨西哥大学的电气和计算机工程师想介绍Carina！";
$lang['MESSAGE_MISSION'] = '我们的使命';
$lang['MESSAGE_CARINA_MISSION'] = 'CARINA使命宣言';
$lang['MESSAGE_MISSION_1'] = 'The objective of this project is to provide a collaborative
                            internet application (web app) in which users will be able
                            to annotate solar observational images. Users will use a mouse
                            to click along the perimeter of coronal holes in the images.
                            The annotated data will be joined with its respective image
                            and made available for further analysis by the image provider.';
$lang['MESSAGE_MISSION_2'] = 'The astronomical field is in need of this type of collaborative
                            technology. With the help of this solar annotation application,
                            scientists will have the capacity to exchange ideas and better
                            understand the dynamics of the sun that lead to these coronal mass ejections.';
// views
$lang['WORDING_BACK_TO_LOGIN'] = '返回登录页面';
$lang['WORDING_BACK_TO_HOME'] = '返回首页';
$lang['WORDING_CHANGE_EMAIL'] = '更改电子邮件';
$lang['WORDING_CHANGE_PASSWORD'] = '更改密码';
$lang['WORDING_CHANGE_USERNAME'] = '更改用户名';
$lang['WORDING_CURRENTLY'] = '目前';
$lang['WORDING_EDIT_USER_DATA'] = 'Edit user data';
$lang['WORDING_EDIT_YOUR_CREDENTIALS'] = '您登录了。您可以在这里更改您的证书。 ';
$lang['WORDING_FORGOT_MY_PASSWORD'] = '我忘记了我的密码';
$lang['WORDING_LOGIN'] = '登录';
$lang['WORDING_LOGOUT'] = '注销';
$lang['WORDING_NEW_EMAIL'] = '新电子邮件';
$lang['WORDING_NEW_PASSWORD'] = '新密码';
$lang['WORDING_NEW_PASSWORD_REPEAT'] = 'Repeat 新的密码';

///// CHECK THIS ONE 也必须是
$lang['WORDING_NEW_USERNAME'] = '新的用户名只能由字母和数字组成，必须为2～64字。 （例如： azAZ09）';
///// CHECK THIS ONE 也必须是

$lang['WORDING_OLD_PASSWORD'] = '您的旧密码';
$lang['WORDING_PASSWORD'] = '密码';
$lang['WORDING_PROFILE_PICTURE'] = '您的资料图片(从gravatar):';
$lang['WORDING_REGISTER'] = '注册';
$lang['WORDING_REGISTER_NEW_ACCOUNT'] = '注册一个新账户';
$lang['WORDING_REGISTRATION_CAPTCHA'] = 'Please enter these characters';
$lang['WORDING_REGISTRATION_EMAIL'] = "电子邮件(please provide a rea​​l 电子邮件addr​​ess, you'll get a verification mail with an activati​​on link)";
$lang['WORDING_REGISTRATION_PASSWORD'] = '密码(min. 6 characters!)';
$lang['WORDING_REGISTRATION_PASSWORD_REPEAT'] = 'Password repeat';
$lang['WORDING_REGISTRATION_USERNAME'] = '用户名(只能有字母和数字, 2-64字)';
$lang['WORDING_REMEMBER_ME'] = '保存我登录（2周）。 ';
$lang['WORDING_REQUEST_PASSWORD_RESET'] = "Request a 密码reset. Enter 您的用户名and you'll get a mail with instructions:";
$lang['WORDING_RESET_PASSWORD'] = 'Reset 我的密码';
$lang['WORDING_SUBMIT_NEW_PASSWORD'] = '提交新的密码';
$lang['WORDING_USERNAME'] = '用户名';
$lang['WORDING_YOU_ARE_LOGGED_IN_AS'] = '您登录为- ';
$lang['WORDING_ADMIN_LOGIN'] = '网站管理员登录场';
// MENU
$lang['WORDING_MENU_HOME_PAGE'] = '主页';
$lang['WORDING_MENU_GALLERY'] = '画廊';
$lang['WORDING_MENU_SERVICES'] = '服务的';
$lang['WORDING_MENU_HELP'] = '援助';
$lang['WORDING_MENU_CONTACT'] = '联系我们';
// LANGUAGE FLAG TAGS
$lang['LANGUAGE_FLAG_ENGLISH'] = '英语';
$lang['LANGUAGE_FLAG_GREEK'] = '希腊语';
$lang['LANGUAGE_FLAG_ITALIAN'] = '意大利语';
$lang['LANGUAGE_FLAG_SPANISH'] = '西班牙语';
$lang['LANGUAGE_FLAG_CATALAN'] = '加泰罗尼亚语';
$lang['LANGUAGE_FLAG_PORTUGUESE'] = '葡萄牙语';
$lang['LANGUAGE_FLAG_TAGALOG'] = '他加禄语';
$lang['LANGUAGE_FLAG_CHINESET'] = '中文（传统汉字）';
$land['LANGUAGE_FLAG_CHINESEMAIN'] = '中文（简化汉字）';
// SERVICES PAGE
$lang['WORDING_OUR_SERVICES'] = '我们的服务';
$lang['WORDING_UPLOAD_A_PHOTO'] = '上传图像';
$lang['WORDING_UPLOAD_DESCRIPTION'] = ' - This section will let the user upload an image location from an ' . "external source for annotations. Will save the location in the users database for future work.";
$lang['WORDING_ANNOTATE_DEMO'] = 'Annotate DEMO Image';
$lang['WORDING_ANNOTATE_DEMO_DETAILS'] = 'Practice Annotating Administrator Supplied Image';
$lang['WORDING_SOLAR_RESOURCES'] ='太阳能动力学、图像资源';
$lang['WORDING_SOLAR_RESOURCES_DETAILS'] = " - 研究，并找到图像批注。";
$lang['WORDING_SOLAR_RESOURCES_LINK_1'] ='SDO | 太阳能动力学天文台';
$lang['WORDING_SOLAR_RESOURCES_LINK_2'] ='SDO | 浏览图片目录的';
$lang['WORDING_SOLAR_RESOURCES_LINK_3'] ='美国宇航局太阳能动力学天文台';
$lang['WORDING_SOLAR_RESOURCES_LINK_4'] ='斯坦福太阳能中心';
$lang['WORDING_SOLAR_RESOURCES_LINK_5'] ='SOHO - 太阳和日光圈天文台';
$lang['WORDING_BROWSE_FOR_IMAGE'] = 'Browse Album To Select Image';
$lang['WORDING_BROWSE_IMAGE_DESCRIPTION'] = " - Select an image in albums to annotate.";
$lang['WORDING_COLLABORATE'] = '合作';
$lang['WORDING_COLLABORATE_DESCRIPTION'] = " - 联系其他用户讨论图像。";
$lang['WORDING_MY_PROFILE'] = '我的资料';
$lang['WORDING_MY_PROFILE_DESCRIPTION'] = " - Update user profile information.";
$lang['WORDING_DATA_EXPORT'] = "出口注释";
$lang['WORDING_DATA_EXPORT_DETAILS'] = " - Output annotation data into CSV formated file. User prompted for output file location.";
// GALLERY PAGE
$lang['WORDING_LATEST_IMAGE'] = '最近的图像';
$lang['WORDING_ARCHIVE_SUMMARY'] = '案卷汇总';
$lang['WORDING_COMPLETE_ARCHIVE_SOLAR_IMAGES'] = '太阳能图像按年份和月份完整的档案。 ';
$lang['WORDING_PREVIOUS_YEARS'] = '昔年';
$lang['WORDING_ARCHIVE'] = '案卷';
// ANNOTATE PHOTO PAGE
$lang['WORDING_ANNOTATE_PHOTO'] = '批注图像';
$lang['WORDING_OPERATIONS'] = 'OPERATIONS: ';
$lang['WORDING_ANNOTATE'] = '批注';
$lang['WORDING_DELETE_LAST_ANNOTATION_POINT'] = '删除最近的注解点';
$lang['WORDING_DELETE_ALL_POINTS'] = '删除所有点';
$lang['MESSAGE_ARE_YOU_CERTAIN'] = '您绝对有把握？ ！ ';
$lang['MESSAGE_CLICK_ANNOTATE_TO_RESUME'] = '点击批注恢复。 ';
$lang['WORDING_ANNOTATION_SAVE'] = '保存';
$lang['WORDING_ANNOTATION_CANCEL'] = '取消';
$lang['WORDING_ANNOTATION_SUBMIT'] = '提交批注的';
$lang['WORDING_ANNOTATION_REQUEST'] = '要求批注的';
$lang['WORDING_ANNOTATION_QUIT'] = 'Return to Services - ALL ANNOTATIONS DISCARDED';
$lang['WORDING_CONNECT'] = 'Enable Connect Annotations';
// ANNOTATION DATA RETRIEVE
$lang['MESSAGE_ANNOTATION_DATA_RETRIEVED'] = '图像文件的注释数据检索了: ';
// HELP PAGE
$lang['WORDING_HELP_WHAT_IS'] = '一个冕洞是什么？ ';
$lang['WORDING_HELP_WHAT_IS_DETAILS'] = '太阳日冕是不均匀的。日冕深色、低温的部分被称为日冕洞。
                                         在这低温，深色部分附近的气压和能量低于周围的区域。
                                         正因为如此,太阳的磁场会弯成弓状,导致太阳粒子以太阳风的形式逃离太阳。
                                         如果日冕洞不断变大，这对地球来说是不利的。 ';
// WORDING_HELP_WHAT_IS_DETAILS Translation provided by 雯露甘

//CARINA关于太阳是什么？ ?
$lang['WORDING_HELP_WHAT_DOES'] = 'What does CARINA have to do with the sun?';
//CARINA关于太阳是什么？ ?

$lang['WORDING_HELP_WHAT_DOES_DETAILS'] = 'Carina utilizes the large userbase of the internet to study, analyze,
                                 and most importantly annotate images of the sun to make records of these
                                 coronal holes. The annotations of these images are recorded in a database
                                 where they can later be analyzed. Knowing what our sun is doing is vital to
                                 understanding solar weather to protect our satellites, power and communication
                                 systems, and other vital electronic systems.';
$lang['WORDING_HELP_HOW_DO'] = 'How do I start?';
$lang['WORDING_HELP_HOW_DO_DETAILS'] = '首先创建一个免费账户. 您在这里可以登录，然后access the
                                   suite of tools in the services tab. 您在那里可以Edit our profile
                                   information, upload a photo, annotate a photo, export annotation data, and
                                   access the #carina IRC chatroom on Mibbit.';
$lang['WORDING_HELP_UPLOADING'] = 'Uploading a Photo';
$lang['WORDING_HELP_UPLOADING_DETAILS'] = 'Within the services tab clicking the Upload a Photo link will take 您
                                           to the upload page where 您可以select the desired file and upload it.';
$lang['WORDING_HELP_ANNOTATE'] = 'Annotate a Photo';
$lang['WORDING_HELP_ANNOTATE_DETAILS'] = 'Clicking on the Browse Album to Select Image link or Browse Album to
                                          Select Image from the Services page will take 您to the annotation
                                          tool. From here 您可以select an image to annotate and begin looking
                                          for coronal holes. Start by placing 您的mouse cursor over the image.
                                          您的mouse coordinates are seen in real time above the image. Click
                                          and place waypoints around the coronal holes in the image. 您可以delete
                                          您的last waypoint, clear all points, connect points, and request
                                          annotattions. Showing connections on the waypoints is helpful to seeing
                                          the coronal hole. 如果你满意您的劳动，就click Submit Annotations
                                          to write 您的annotations to the database.';
$lang['WORDING_HELP_COMMUNICATE'] = 'Communicate With Others in the IRC';
$lang['WORDING_HELP_COMMUNICATE_DETAILS'] = 'What better way to get help and questions answered than communicating
                                             with peers. The Colaboration link on the Services tab will take 您to
                                             the colaboration page with a link to access the #carina chatroom on the
                                             right hand side. The chatroom will pop out in a new window. From here
                                             您can use an auto-generated nickname or make 您的own unique one. While
                                             online you can speak with others in the main chatroom, or PM (Personal
                                             Message) individuals. Click HERE to launch the #carina IRC Chatroom.';
$lang['WORDING_HELP_EXPORTING'] = 'Exporting Annotation Data';
$lang['WORDING_HELP_EXPORTING_DETAILS'] = 'The contents of the annotation database can be exported for further analysis.';
// CONTACT US TAB
$lang['WORDING_CONTACT_TAB_TITLE'] = "联系我们";
$lang['WORDING_CONTACT_FORM'] = "联系表格";
$lang['WORDING_CONTACT_NAME'] = "姓名:";
$lang['WORDING_CONTACT_EMAIL'] = "电子邮件:";
$lang['WORDING_CONTACT_MESSAGE'] = "信息:";
$lang['WORDING_CONTACT_CLEAR'] = "清除";
$lang['WORDING_CONTACT_SEND'] = "发送";
// FOOTER
$lang['WORDING_UNM'] = "新墨西哥大学- 年级2014 - 2015";
$lang['WORDING_SDP-SIC'] = "高级设计工程- 协同太阳能影像";
$lang['WORDING_TEAM'] = "团体";
$lang['WORDING_UNM-SDPW'] = "新墨西哥大学高级设计工程的网站";