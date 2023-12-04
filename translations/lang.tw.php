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
//  Module:  translations/lang.tw.php
//
//  Purpose: Taiwan Language File
//
//  Translation: Jared Morris, May 2015
//
////////////////////////////////////////////////////////////////////////////////
/**
* Please note: we can use unencoded characters like ö, é etc here as we use 
* the html5 doctype with utf8 encoding in the application's header 
* (in views/_header.php). To add new languages simply copy this file,
* and create a language switch in your root files.
*/

$lang = array();

// testing message
$lang['MESSAGE_BETA_TESTING'] = '漢語的翻譯網頁是beta測試。如果您看到一個錯誤的翻譯，就請聯繫我們！';
//  LINK THIS NEW STRING TO THE WEBSITE
// Chinese translation pages are beta testing. If you see an error in translation, please contact us! ';
// 
// login & registration classes

$lang['MESSAGE_ACCOUNT_LOGIN'] = '請登錄 or register new account at the 登錄 Page link to the right';
$lang['MESSAGE_ACCOUNT_NOT_ACTIVATED'] = '您的賬戶 will be activated with this form and then verified with a confirmation email.';
$lang['MESSAGE_CAPTCHA_WRONG'] = '錯的Captcha!';
$lang['MESSAGE_COOKIE_INVALID'] = 'Invalid cookie';
$lang['MESSAGE_DATABASE_ERROR'] = '數據庫連接問題。';
$lang['MESSAGE_EMAIL_ALREADY_EXISTS'] = "This email address is already registered. 如果您不可以記得，就應該點擊\'忘記了我的密碼\'。";
$lang['MESSAGE_EMAIL_CHANGE_FAILED'] = 'Sorry, 您的email changing failed.';
$lang['MESSAGE_EMAIL_CHANGED_SUCCESSFULLY'] = '您的email address has been changed successfully. New email address is ';
$lang['MESSAGE_EMAIL_EMPTY'] = '電子郵件不能為空。';
$lang['MESSAGE_EMAIL_INVALID'] = '您的email address is not in a valid email format';
$lang['MESSAGE_EMAIL_SAME_LIKE_OLD_ONE'] = 'Sorry, that email address is the same as 您的current one. Please choose another one.';
$lang['MESSAGE_EMAIL_TOO_LONG'] = '電子郵件長度不能超過64個字。';
$lang['MESSAGE_LINK_PARAMETER_EMPTY'] = '空鏈接參數數據。';
$lang['MESSAGE_LOGGED_OUT'] = 'You have been logged out.';
// The "login failed"-message is a security improved feedback that doesn't show a potential attacker if the user exists or not
$lang['MESSAGE_LOGIN_FAILED'] = '登錄失敗。';
$lang['MESSAGE_OLD_PASSWORD_WRONG'] = '您的舊密碼錯了。';
$lang['MESSAGE_PASSWORD_BAD_CONFIRM'] = '密碼不符';
$lang['MESSAGE_PASSWORD_CHANGE_FAILED'] = '對不起， 您的更改密碼失敗了。';
$lang['MESSAGE_PASSWORD_CHANGED_SUCCESSFULLY'] = '密碼更改成功！';
$lang['MESSAGE_PASSWORD_EMPTY'] = '密碼字段空';
$lang['MESSAGE_PASSWORD_RESET_MAIL_FAILED'] = '密碼重置郵件未發送成功。錯誤： ';
$lang['MESSAGE_PASSWORD_RESET_MAIL_SUCCESSFULLY_SENT'] = '密碼重置郵件發送成功！';
$lang['MESSAGE_PASSWORD_TOO_SHORT'] = '密碼須多於六個字符';
$lang['MESSAGE_PASSWORD_WRONG'] = '錯的密碼。 再試一次。';
$lang['MESSAGE_PASSWORD_WRONG_3_TIMES'] = '您輸入錯誤密碼次數已多於三次，請在30秒後重試。';
$lang['MESSAGE_REGISTRATION_ACTIVATION_NOT_SUCCESSFUL'] = '對不起,無此ID或驗證碼在這裡……';
$lang['MESSAGE_REGISTRATION_ACTIVATION_SUCCESSFUL'] = '激活成功! 您現在可以登錄了！';
$lang['MESSAGE_REGISTRATION_FAILED'] = '您的註冊失敗了，請返回重新嘗試。';
$lang['MESSAGE_RESET_LINK_HAS_EXPIRED'] = '您的剩餘鏈接到期了，請在一小時內使用複位鏈接。';
$lang['MESSAGE_VERIFICATION_MAIL_ERROR'] = '對不起，我們不能給你發證明郵件，您的賬戶沒有被創建。';
$lang['MESSAGE_VERIFICATION_MAIL_NOT_SENT'] = '證明郵件沒有發送成功！錯誤： ';
$lang['MESSAGE_VERIFICATION_MAIL_SENT'] = '您的賬戶已經成功創建，我們將給您發送電子郵件。請點擊郵件中的申請鏈接。';
$lang['MESSAGE_USER_DOES_NOT_EXIST'] = 'This user does not exist';
$lang['MESSAGE_USERNAME_BAD_LENGTH'] = '用戶名 cannot be shorter than 2 or longer than 64 characters';
$lang['MESSAGE_USERNAME_CHANGE_FAILED'] = 'Sorry, 您的chosen 用戶名 renaming failed';
$lang['MESSAGE_USERNAME_CHANGED_SUCCESSFULLY'] = '您的用戶名 has been changed successfully. 新的用戶名是 - ';
$lang['MESSAGE_USERNAME_EMPTY'] = '用戶名 field was empty';
$lang['MESSAGE_USERNAME_EXISTS'] = '對不起，那個用戶名已經使用了。 請選擇另外一個。';
$lang['MESSAGE_USERNAME_INVALID'] = '新的用户名只能由字母和数字组成，必须为2～64字。 例如： azAZ09)';
$lang['MESSAGE_USERNAME_SAME_LIKE_OLD_ONE'] = '對不起，那個用戶名是一樣的您的當前用戶名。請選擇另外一個。';
//  Common Wording/Messages in Pages
$lang['MESSAGE_WELCOME'] = '歡迎';
$lang['MESSAGE_CARINA'] = '協同太陽能影像處理';
$lang['MESSAGE_LOG_IN_PAGE'] = '登錄頁面';
$lang['MESSAGE_CONSTELLATION'] = '星座';
$lang['MESSAGE_CONSTELLATION_INTRO'] = "船底(Carina)星座位于南部的天空，它包含了夜空中第二亮的星星。";
$lang['MESSAGE_AIM'] = '我們的目的';
$lang['MESSAGE_AIM_DEDICATION'] = '專用';
$lang['MESSAGE_AIM_INTRO'] = '為了創建一個open-source的互聯網應用（web app）那將收集冕洞的寶貴數據。';
$lang['MESSAGE_LOBO'] = "大家是";
$lang['MESSAGE_LOBO_INTRO'] = "新墨西哥大學的電氣和計算機工程師想介紹CARINA！";
$lang['MESSAGE_MISSION'] = '我們的使命';
$lang['MESSAGE_CARINA_MISSION'] = 'CARINA使命宣言';
$lang['MESSAGE_MISSION_1'] = '這個專案的目標是提供一個協作的互聯網應用(web app)中,用戶將能夠注釋太陽觀測圖像。'
        . '                   在圖像中用戶將使用滑鼠沿日冕洞週邊單擊。注釋的資料將與各自的圖像關聯,使圖像提供者有了進一步分析的可能。';
$lang['MESSAGE_MISSION_2'] = '天文領域需要這種類型的協同技術。在這個太陽注釋應用程式的幫助下,'
        . '                   科學家們將有能力交流想法和更好地瞭解導致這些日冕物質拋射的太陽動力。';
//MESSAGE_MISSION_1/2 translations provided by Yangyang (Nicole) Sun。
// views
$lang['WORDING_BACK_TO_LOGIN'] = '返回登錄頁面';
$lang['WORDING_BACK_TO_HOME'] = '返回首頁';
$lang['WORDING_CHANGE_EMAIL'] = '更改電子郵件';
$lang['WORDING_CHANGE_PASSWORD'] = '更改密碼';
$lang['WORDING_CHANGE_USERNAME'] = '更改用戶名';
$lang['WORDING_CURRENTLY'] = '目前';
$lang['WORDING_EDIT_USER_DATA'] = '編輯用戶數據';
$lang['WORDING_EDIT_YOUR_CREDENTIALS'] = '您登錄了。您可以在這裡更改您的證書。';
$lang['WORDING_FORGOT_MY_PASSWORD'] = '我忘記了我的密碼';
$lang['WORDING_LOGIN'] = '登錄';
$lang['WORDING_LOGOUT'] = '註銷';
$lang['WORDING_NEW_EMAIL'] = '新電子郵件';
$lang['WORDING_NEW_PASSWORD'] = '新密碼';
$lang['WORDING_NEW_PASSWORD_REPEAT'] = 'Repeat 新的密碼';

///// CHECK THIS ONE 也必須是
$lang['WORDING_NEW_USERNAME'] = '新的用户名只能由字母和数字组成，必须为2～64字。 （例如： azAZ09）';
///// CHECK THIS ONE 也必須是

$lang['WORDING_OLD_PASSWORD'] = '您的舊密碼';
$lang['WORDING_PASSWORD'] = '密碼';
$lang['WORDING_PROFILE_PICTURE'] = '您的資料圖片(從gravatar):';
$lang['WORDING_REGISTER'] = '註冊';
$lang['WORDING_REGISTER_NEW_ACCOUNT'] = '註冊一個新賬戶';
$lang['WORDING_REGISTRATION_CAPTCHA'] = '請輸入驗證碼。';
$lang['WORDING_REGISTRATION_EMAIL'] = "電子郵件 (please provide a real 電子郵件 address, you'll get a verification mail with an activation link)";
$lang['WORDING_REGISTRATION_PASSWORD'] = '密碼(min. 6 characters!)';
$lang['WORDING_REGISTRATION_PASSWORD_REPEAT'] = 'Password repeat';
$lang['WORDING_REGISTRATION_USERNAME'] = '用戶名 (只能有字母和數字, 2-64字)';
$lang['WORDING_REMEMBER_ME'] = '保存我登錄（2週）。';
$lang['WORDING_REQUEST_PASSWORD_RESET'] = "請求密碼重置！輸入用戶名，您會收到指示郵件。";
$lang['WORDING_RESET_PASSWORD'] = 'Reset 我的密碼';
$lang['WORDING_SUBMIT_NEW_PASSWORD'] = '提交新的密碼';
$lang['WORDING_USERNAME'] = '用戶名';
$lang['WORDING_YOU_ARE_LOGGED_IN_AS'] = '您登錄為 - ';
$lang['WORDING_ADMIN_LOGIN'] = '網站管理員登錄場';
// MENU
$lang['WORDING_MENU_HOME_PAGE'] = '主頁';
$lang['WORDING_MENU_GALLERY'] = '畫廊';
$lang['WORDING_MENU_SERVICES'] = '服務的';
$lang['WORDING_MENU_HELP'] = '援助';
$lang['WORDING_MENU_CONTACT'] = '聯繫我們';
//  LANGUAGE FLAG TAGS
$lang['LANGUAGE_FLAG_ENGLISH'] = '英語';
$lang['LANGUAGE_FLAG_GREEK'] = '希臘語';
$lang['LANGUAGE_FLAG_ITALIAN'] = '意大利語';
$lang['LANGUAGE_FLAG_SPANISH'] = '西班牙語';
$lang['LANGUAGE_FLAG_CATALAN'] = '加泰羅尼亞語';
$lang['LANGUAGE_FLAG_PORTUGUESE'] = '葡萄牙語';
$lang['LANGUAGE_FLAG_TAGALOG'] = '他加祿語';
$lang['LANGUAGE_FLAG_CHINESET'] = '中文（傳統漢字）';
$land['LANGUAGE_FLAG_CHINESEMAIN'] = '中文（簡體漢字）'; 
//  SERVICES PAGE
$lang['WORDING_OUR_SERVICES'] = '我們的服務';
$lang['WORDING_UPLOAD_A_PHOTO'] = '上傳圖像';
$lang['WORDING_UPLOAD_DESCRIPTION'] = ' - This section will let the user upload an image location from an '
        . 'external source for annotations. Will save the location in the users database for future work.';
$lang['WORDING_ANNOTATE_DEMO'] = 'Annotate DEMO Image';
$lang['WORDING_ANNOTATE_DEMO_DETAILS'] = 'Practice Annotating Administrator Supplied Image';
$lang['WORDING_SOLAR_RESOURCES'] ='太陽能動力學、圖像資源';
$lang['WORDING_SOLAR_RESOURCES_DETAILS'] = " - 研究，並找到圖像批註。";
$lang['WORDING_SOLAR_RESOURCES_LINK_1'] ='SDO | 太陽能動力學天文台';
$lang['WORDING_SOLAR_RESOURCES_LINK_2'] ='SDO | 瀏覽圖片目錄的';
$lang['WORDING_SOLAR_RESOURCES_LINK_3'] ='美國宇航局太陽能動力學天文台';
$lang['WORDING_SOLAR_RESOURCES_LINK_4'] ='斯坦福太陽能中心';
$lang['WORDING_SOLAR_RESOURCES_LINK_5'] ='SOHO - 太陽和日光圈天文台';
$lang['WORDING_BROWSE_FOR_IMAGE'] = 'Browse Album To Select Image';
$lang['WORDING_BROWSE_IMAGE_DESCRIPTION'] = " - 選擇在畫廊的圖像。";
$lang['WORDING_COLLABORATE'] = '合作';
$lang['WORDING_COLLABORATE_DESCRIPTION'] = " - 聯繫其他用戶討論圖像。";
$lang['WORDING_MY_PROFILE'] = '我的資料';
$lang['WORDING_MY_PROFILE_DESCRIPTION'] = " - 更新用戶資料信息";
$lang['WORDING_DATA_EXPORT'] = "出口註釋";
$lang['WORDING_DATA_EXPORT_DETAILS'] = " - Output annotation data into CSV formatted file.  User prompted for output file location.";
//  GALLERY PAGE
$lang['WORDING_LATEST_IMAGE'] = '最近的圖像';
$lang['WORDING_ARCHIVE_SUMMARY'] = '案卷匯總';
$lang['WORDING_COMPLETE_ARCHIVE_SOLAR_IMAGES'] = '太陽能圖像按年份和月份完整的檔案。';
$lang['WORDING_PREVIOUS_YEARS'] = '昔年';
$lang['WORDING_ARCHIVE'] = '案卷';
//  ANNOTATE PHOTO PAGE
$lang['WORDING_ANNOTATE_PHOTO'] = '批注圖像';
$lang['WORDING_OPERATIONS'] = 'OPERATIONS:  ';
$lang['WORDING_ANNOTATE'] = '批注';
$lang['WORDING_DELETE_LAST_ANNOTATION_POINT'] = '刪除最近的註解點';
$lang['WORDING_DELETE_ALL_POINTS'] = '刪除所有點';
$lang['MESSAGE_ARE_YOU_CERTAIN'] = '您絕對有把握？！';
$lang['MESSAGE_CLICK_ANNOTATE_TO_RESUME'] = '點擊批註恢復。 ';
$lang['WORDING_ANNOTATION_SAVE'] = '保存';
$lang['WORDING_ANNOTATION_CANCEL'] = '取消';
$lang['WORDING_ANNOTATION_SUBMIT'] = '提交批註的';
$lang['WORDING_ANNOTATION_REQUEST'] = '要求批註的';
$lang['WORDING_ANNOTATION_QUIT'] = 'Return to Services - ALL ANNOTATIONS DISCARDED';
$lang['WORDING_CONNECT'] = '畫線段';
//  ANNOTATION DATA RETRIEVE
$lang['MESSAGE_ANNOTATION_DATA_RETRIEVED'] = '圖像文件的註釋數據檢索了: ';
//  HELP PAGE
$lang['WORDING_HELP_WHAT_IS'] = '一個冕洞是什麽？';
$lang['WORDING_HELP_WHAT_IS_DETAILS'] = '太陽日冕是不均勻的。日冕深色、低溫的部分被稱為日冕洞。
                                         在這低溫，深色部分附近的氣壓和能量低於周圍的區域。
                                         正因為如此,太陽的磁場會彎成弓狀,導致太陽粒子以太陽風的形式逃離太陽。
                                         如果日冕洞不斷變大，這對地球來說是不利的。';
// thanks to 甘雯露 for the above

$lang['WORDING_HELP_WHAT_DOES'] = '船底星座與太陽有什麼關係？';
$lang['WORDING_HELP_WHAT_DOES_DETAILS'] = 'CARINA utilizes the large userbase of the internet to study, analyze,
                                 and most importantly annotate images of the sun to make records of these 
                                 coronal holes. The annotations of these images are recorded in a database 
                                 where they can later be analyzed. Knowing what our sun is doing is vital to 
                                 understanding solar weather to protect our satellites, power and communication 
                                 systems, and other vital electronic systems.';
$lang['WORDING_HELP_HOW_DO'] = 'How do I start?';
$lang['WORDING_HELP_HOW_DO_DETAILS'] = '首先創建一個免費賬戶. 您在這裡可以登錄，然後access the
                                   suite of tools in the services tab. 您在那裡可以 Edit our profile 
                                   information, upload a photo, annotate a photo, export annotation data, and 
                                   access the #carina IRC chatroom on Mibbit.';
$lang['WORDING_HELP_UPLOADING'] = 'Uploading a Photo';
$lang['WORDING_HELP_UPLOADING_DETAILS'] = 'Within the services tab clicking the Upload a Photo link will take you
                                           to the upload page where you can select the desired file and upload it.';
$lang['WORDING_HELP_ANNOTATE'] = 'Annotate a Photo';
$lang['WORDING_HELP_ANNOTATE_DETAILS'] = 'Clicking on the Browse Album to Select Image link or Browse Album to
                                          Select Image from the Services page will take 您to the annotation 
                                          tool. From here 您可以 select an image to annotate and begin looking 
                                          for coronal holes. Start by placing 您的mouse cursor over the image. 
                                          您的mouse coordinates are seen in real time above the image. Click 
                                          and place waypoints around the coronal holes in the image. 您可以 delete 
                                          您的last waypoint, clear all points, connect points, and request 
                                          annotattions. Showing connections on the waypoints is helpful to seeing 
                                          the coronal hole. 如果你滿意您的勞動，就click Submit Annotations 
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
$lang['WORDING_CONTACT_TAB_TITLE'] = "聯繫我們";
$lang['WORDING_CONTACT_FORM'] = "聯繫表格";
$lang['WORDING_CONTACT_NAME'] = "姓名:";
$lang['WORDING_CONTACT_EMAIL'] = "電子郵件:";
$lang['WORDING_CONTACT_MESSAGE'] = "信息:";
$lang['WORDING_CONTACT_CLEAR'] = "清除";
$lang['WORDING_CONTACT_SEND'] = "發送";
// FOOTER
$lang['WORDING_UNM'] = "新墨西哥大學 - 年級2014 - 2015";
$lang['WORDING_SDP-SIC'] = "高級設計工程 - 協同太陽能影像";
$lang['WORDING_TEAM'] = "團體";
$lang['WORDING_UNM-SDPW'] = "新墨西哥大學高級設計工程的網站";







