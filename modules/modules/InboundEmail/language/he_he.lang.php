<?php
/* modules/InboundEmail/language/he_il.lang.php */
if(!defined('sugarEntry'))define('sugarEntry', true);
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Public License Version
 * 1.1.3 ("License"); You may not use this file except in compliance with the
 * License. You may obtain a copy of the License at http://www.sugarcrm.com/SPL
 * Software distributed under the License is distributed on an "AS IS" basis,
 * WITHOUT WARRANTY OF ANY KIND, either express or implied.  See the License
 * for the specific language governing rights and limitations under the
 * License.
 *
 * All copies of the Covered Code must include on each user interface screen:
 *    (i) the "Powered by SugarCRM" logo and
 *    (ii) the SugarCRM copyright notice
 * in the same form as they appear in the distribution.  See full license for
 * requirements.
 *
 * The Original Code is: SugarCRM Open Source
 * Contributor: Lampada CRM 
 * David O'Keefe
 * info@lampadacrm.com.br
 *	
 * The Initial Developer of the Original Code is SugarCRM, Inc.
 * Portions created by SugarCRM are Copyright (C) 2004-2006 SugarCRM, Inc.;
 * All Rights Reserved.
 ********************************************************************************/

$mod_strings=array(
  'ERR_BAD_LOGIN_PASSWORD' => 'שם משתמש או סיסמא שגויים',
  'ERR_BODY_TOO_LONG' => 'rBody  הטקסט יותר מידי ארוך בכדי להכנס למייל. אנא קצר.',
  'ERR_INI_ZLIB' => 'לא מסוגל לסגור דחיסת Zlib זמנית. "הגדרות בדיקה עלולות להכשל.',
  'ERR_MAILBOX_FAIL' => 'לא יכול לאחזר תיבות מייל',
  'ERR_NO_IMAP' => 'לא נמצאו ספריות IMAP . אנא פתור זאת לפני שאתה ממשיך למיילים הנכנסים.',
  'ERR_NO_OPTS_SAVED' => 'לא נשמר אופטימום בהגדרות הדואר הנכנס של תיבת המייל. אנא בדוק את ההגדרות.',
  'ERR_TEST_MAILBOX' => 'אנא בדוק את ההגדרות שלך ונסה שוב.',
  'LBL_APPLY_OPTIMUMS' => 'הפעל אופטימום.',
  'LBL_ASSIGN_TO_USER' => 'מנה משתמש',
  'LBL_AUTOREPLY_OPTIONS' => 'אופציית השבה אוטומטית',
  'LBL_AUTOREPLY' => 'תבנית מענה אוטומוטי ',
  'LBL_BASIC' => 'התקנה בסיסית',
  'LBL_CASE_MACRO' => 'Case Macro',
  'LBL_CASE_MACRO_DESC' => 'קבע את המאקרו שישומש לניתוח וקישור ללינק. מיילים מיובאים פר תיק.',
  'LBL_CASE_MACRO_DESC2' => 'קבע את זה לכל ערך  אבל שמר את ה- "%1".',
  'LBL_CERT_DESC' => 'כפה ולידציה של תעודת האבטחה של שרת המייל- אל תשתמש אם הכניסה אוטומטית.',
  'LBL_CERT' => 'הכנס לתוקף תעודה.',
  'LBL_CLOSE_POPUP' => 'סגור חלון',
  'LBL_CREATE_NEW_GROUP' => '--צור קבוצת תיבת מייל בשמירה--',
  'LBL_CREATE_TEMPLATE' => 'צור',
  'LBL_DEFAULT_FROM_ADDR' => 'ברירת מחדל:',
  'LBL_DEFAULT_FROM_NAME' => 'ברירת מחדל:',
  'LBL_EDIT_TEMPLATE' => 'ערוך',
  'LBL_EMAIL_OPTIONS' => 'אפשרויות שליחת מייל',
  'LBL_FILTER_DOMAIN_DESC' => 'אל תשלח מענה אוטומוטי לדומיין הזה',
  'LBL_FILTER_DOMAIN' => 'אין מענה אוטומוטי לדומיין זה',
  'LBL_FIND_OPTIMUM_KEY' => 'f',
  'LBL_FIND_OPTIMUM_MSG' => 'מצא משתני חיבור לאופטימום',
  'LBL_FIND_OPTIMUM_TITLE' => 'מצא קונפיגורציית אופטימום',
  'LBL_FIND_SSL_WARN' => 'בדיקת SSL יכולה לקחת זמן רב. אנה המתן בסבלנות.',
  'LBL_FORCE_DESC' => 'IMAP/POP3 מסויימים דורשים סוויצ\'ים מיוחדים. סמן V אם ברצונך לכפות סוויץ\' שלילי כאשר יש חיבור. (לדוגמא: notls)',
  'LBL_FORCE' => 'Force Negative',
  'LBL_FOUND_MAILBOXES' => 'מצא את התיקיות השמישות הבאות. הקלק על אחת בכדי לבחור אותה:',
  'LBL_FOUND_OPTIMUM_MSG' => 'מצא הגדרות אופטימום. לחץ על הכפתור מטה על מנת לישם אותם על תיבת המייל שלך.',
  'LBL_FROM_ADDR' => 'כתובת השולח',
  'LBL_FROM_NAME_ADDR' => 'השב שם/ כתובת מייל',
  'LBL_FROM_NAME' => 'שם השולח',
  'LBL_GROUP_QUEUE' => 'העבר לקבוצה',
  'LBL_HOME' => 'בית',
  'LBL_LIST_MAILBOX_TYPE' => 'שימוש תיבת המייל',
  'LBL_LIST_NAME' => 'שם:',
  'LBL_LIST_SERVER_URL' => 'שרת מייל:',
  'LBL_LIST_STATUS' => 'סטטוס:',
  'LBL_LOGIN' => 'שם משתמש',
  'LBL_MAILBOX_DEFAULT' => 'מיילים נכנסים',
  'LBL_MAILBOX_SSL_DESC' => 'השתמש ב- SSL  כאשר מתחבר. אם זה לא עובד, בדוק שהתקנת הPHP שלך כוללת "--with-imap-ssl" בקונפיגורציה.',
  'LBL_MAILBOX_SSL' => 'השתמש ב- SSL',
  'LBL_MAILBOX_TYPE' => 'פעולות אפשריות',
  'LBL_MAILBOX' => 'תיקיה בהשגחה',
  'LBL_MARK_READ_DESC' => 'סמן הודעות שנקראו ביבוא על שרת המייל, אל תמחק ',
  'LBL_MARK_READ_NO' => 'מחק מיילים שסומנו לאחר יבוא',
  'LBL_MARK_READ_YES' => 'מיילים שנשארו בשרת לאחר יבוא',
  'LBL_MARK_READ' => 'השאר הודעות על השרת',
  'LBL_MODULE_NAME' => 'הגדרות מיילים נכנסים',
  'LBL_MODULE_TITLE' => 'מיילים נכנסים',
  'LBL_NAME' => 'שם',
  'LBL_NO_OPTIMUMS' => 'לא יכול למצוא אופטימום. אנא בדוק את ההגדרות ונסה שוב.',
  'LBL_ONLY_SINCE_DESC' => 'לא יכול לסנן הודעות חדשות / שנקראו כאשר משתמש ב- POP3, PHP 3. סימון הדגל מאפשר לבקשה לבדוק הודעות מהפעם האחרונה שנמשכו הודעות מתיבת המייל ',
  'LBL_ONLY_SINCE_NO' => 'לא. בדוק מול כל המיילים או שרת המיילים',
  'LBL_ONLY_SINCE_YES' => 'כן',
  'LBL_ONLY_SINCE' => 'יבא רק מהבדיקה האחרונה',
  'LBL_PASSWORD_CHECK' => 'בדיקת סיסמא',
  'LBL_PASSWORD' => 'סיסמא',
  'LBL_POP3_SUCCESS' => 'בדיקת התחברות POP3 עברה בהצלחה.',
  'LBL_POPUP_FAILURE' => 'בדיקת התחברות נכשלה. ההערה מצויינת מטה.',
  'LBL_POPUP_SUCCESS' => 'בדיקת ההתחברות הצליחה. ההגדרות שלך עובדות.',
  'LBL_POPUP_TITLE' => 'בדיקת הגדרות.',
  'LBL_PORT' => 'יציאת שרת המייל',
  'LBL_QUEUE' => 'רשימת המתנה של תיבת המייל',
  'LBL_SERVER_OPTIONS' => 'הגדרות מתקדמות',
  'LBL_SERVER_TYPE' => 'פרוטוקול שרת המייל',
  'LBL_SERVER_URL' => 'כתובת שרת מייל',
  'LBL_SSL_DESC' => 'אם שרת המייל שלך תומך בתושבת החיבור, אפשור תהליך זה יאלץ את חיבור SSL בתהליך יבוא המיילים.',
  'LBL_SSL' => 'השתמש ב- SSL ',
  'LBL_STATUS' => 'סטטוס',
  'LBL_SYSTEM_DEFAULT' => 'ברירת מחדל של המערכת',
  'LBL_TEST_BUTTON_KEY' => 'T',
  'LBL_TEST_BUTTON_TITLE' => 'בדיקה [Alt+T]',
  'LBL_TEST_SETTINGS' => 'בדיקת הגדרות',
  'LBL_TEST_SUCCESSFUL' => 'התחברות עברה בהצלחה.',
  'LBL_TEST_WAIT_MESSAGE' => 'אנא המתן בבקשה...',
  'LBL_TLS_DESC' => 'השתמש ב- Transport Layer Security כאשר ישנה התחברות לשרת המייל- השתמש בזה אך ורק אם שרת המייל שלך תומך בפרוטוקול זה.',
  'LBL_TLS' => 'השתמש ב- TLS',
  'LBL_WARN_IMAP_TITLE' => 'נוטרלו מיילים נכנסים',
  'LBL_WARN_IMAP' => 'הערות:',
  'LBL_WARN_NO_IMAP' => 'מיילים נכנסים לא יכולים לתפקד בלי ספריות ה- IMAP של הלקוח משולבים או מאופשרים עם מודל ה- PHP. אנא צור קשר עם האדמיניסטרטור בכדי לפתור זאת.',
  'LNK_CREATE_GROUP' => 'צור קבוצה חדשה.',
  'LNK_LIST_CREATE_NEW' => 'עקוב אחר תיבת המייל.',
  'LNK_LIST_MAILBOXES' => 'כל תיבות המייל',
  'LNK_LIST_QUEUES' => 'כל רשימות ההמתנה',
  'LNK_LIST_SCHEDULER' => 'מתזמנים',
  'LNK_LIST_TEST_IMPORT' => 'בדוק יבוא מיילים',
  'LNK_NEW_QUEUES' => 'צור רשימת המתנה חדשה',
  'LNK_SEED_QUEUES' => 'צפה ברשימת המתנה עפ"י צוות',
);

?>
