<?php
/* modules/UpgradeWizard/language/he_il.lang.php */
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
  'DESC_MODULES_INSTALLED' => 'המודולים הבאים הותקנו:',
  'DESC_MODULES_QUEUED' => 'המודולים הבאים מוכנים להתקנה:',
  'ERR_UW_CANNOT_DETERMINE_GROUP' => 'אינו יכול לקבוע קבוצה',
  'ERR_UW_CANNOT_DETERMINE_USER' => 'אינו יכול לקבוע בעלים',
  'ERR_UW_CONFIG_WRITE' => 'שגיאה בעידכון config.php עם אינפורמצית גירסה חדשה',
  'ERR_UW_CONFIG' => 'אנא הכן לעצמך קובץ config.php אפשרי בפני כתיבה וטען דף זה.',
  'ERR_UW_DIR_NOT_WRITABLE' => 'ספריה אינה מאופשרת כתיבה',
  'ERR_UW_FILE_NOT_COPIED' => 'קובץ לא הועתק',
  'ERR_UW_FILE_NOT_DELETED' => 'בעייה בהסרת חבילה',
  'ERR_UW_FILE_NOT_READABLE' => 'קובץ אינו קריא',
  'ERR_UW_FILE_NOT_WRITABLE' => 'קובץ אינו יכול להיות מועבר או לכתוב ל',
  'ERR_UW_FLAVOR_2' => 'שודרג טעם.',
  'ERR_UW_FLAVOR' => 'SugarCRM מערכת טעם.',
  'ERR_UW_LOG_FILE_UNWRITABLE' => '.עדכן Wizard.log אינו ניתן ליצירהכתיבה ל. בבקשה תקן אישורים בספריית מערכת SugarCRM',
  'ERR_UW_MYSQL_VERSION' => 'SugarCRM דורש MySQL גירסה 4.1.2 או חדש יותר. נמצא:',
  'ERR_UW_NO_FILE_UPLOADED' => 'בבקשה ציין קובץ ונסה שוב!',
  'ERR_UW_NO_FILES' => 'הערה שגיאה, לא נמצאו קבצים לבדיקה.',
  'ERR_UW_NO_MANIFEST' => 'קובץ דחוס לא נמצא קובץ manifest.php. לא יכול להמשיך.',
  'ERR_UW_NO_VIEW' => 'נבחרה תצוגה לא פעילה',
  'ERR_UW_NO_VIEW2' => 'תצוגה לא מוגדרת. בבקשה פנה לדף אדמיניסטרטור בכדי להגיע לדף זה.',
  'ERR_UW_NOT_VALID_UPLOAD' => 'לא תקף להעלה',
  'ERR_UW_ONLY_PATCHES' => 'באפשרותך להעלות רק PATCHES בדף זה.',
  'ERR_UW_PREFLIGHT_ERRORS' => 'שגיאות נמצאו במהלך בדיקת Preflight',
  'ERR_UW_UPLOAD_ERR' => 'הראה שגיאה במהלך העלאת הקובץ, אנא נסה שוב!',
  'ERR_UW_VERSION' => 'גירסת מערכת SugarCRM',
  'ERR_UW_WRONG_TYPE' => 'דף זה אינו להרצה',
  'LBL_BUTTON_BACK' => 'קודם',
  'LBL_BUTTON_CANCEL' => 'בטל',
  'LBL_BUTTON_DELETE' => 'מחק חבילה',
  'LBL_BUTTON_DONE' => 'הסתיים',
  'LBL_BUTTON_INSTALL' => 'שדרוג טרום טיסה',
  'LBL_BUTTON_NEXT' => 'הבא',
  'LBL_BUTTON_RECHECK' => 'בדוק שוב',
  'LBL_UPLOAD_UPGRADE' => 'העלה ועדכן:',
  'LBL_UW_BACKUP_FILES_EXIST_TITLE' => 'גיבוי קובץ',
  'LBL_UW_BACKUP_FILES_EXIST' => 'קבצים מגובים מהעידכון אינם נמצאים ב',
  'LBL_UW_BACKUP' => 'גיבוי קובץ',
  'LBL_UW_CANCEL_DESC' => 'אשף העידכון בוטל. כל הקבצים הזמניים והעלאת הקבצים הדחוסים נמחקו. לחץ "הבא" בכדי לאתחל את אשף העידכון',
  'LBL_UW_CHARSET_SCHEMA_CHANGE' => 'שינויי סכמת סט התווים',
  'LBL_UW_CHECK_ALL' => 'בדוק הכל',
  'LBL_UW_CHECKLIST' => 'צעדי עידכון',
  'LBL_UW_COMMIT_ADD_TASK_DESC_1' => 'קבצי גיבוי נתונים חדשים במקומם של נתונים קיימים, נמצאים בספריה זו.',
  'LBL_UW_COMMIT_ADD_TASK_DESC_2' => 'מזג ידנית קבצים אלה:',
  'LBL_UW_COMMIT_ADD_TASK_NAME' => 'תהליך עידכון: מזג קבצים ידנית',
  'LBL_UW_COMMIT_ADD_TASK_OVERVIEW' => 'אנא השתמש בשיטה אחרת שהכי מוכרת לך כדי למזג קבצים אלה. עד שזה יבוצע, התקנת מערכת ה SugarCRM תמצא בעמדה לא ברורה, והעידכון לא הושלם.',
  'LBL_UW_COMPLETE' => 'הושלם',
  'LBL_UW_COMPLIANCE_ALL_OK' => 'כל דרישת הגדרות המערכת מרוצות',
  'LBL_UW_COMPLIANCE_CALLTIME' => 'הגדרות PHP. זמן העברת שיחות הופנה',
  'LBL_UW_COMPLIANCE_CURL' => 'מודול cURL',
  'LBL_UW_COMPLIANCE_IMAP' => 'IMAP מודול',
  'LBL_UW_COMPLIANCE_MBSTRING' => 'MBStrings מודול',
  'LBL_UW_COMPLIANCE_MEMORY' => 'הגדרות PHP. הגבלת זיכרון',
  'LBL_UW_COMPLIANCE_MSSQL_MAGIC_QUOTES' => 'שרת MS SQL ו PHP Magic Quotes GPC',
  'LBL_UW_COMPLIANCE_MYSQL' => 'מינימום גירסת MySQL',
  'LBL_UW_COMPLIANCE_PHP_INI' => 'מיקומו של php.ini',
  'LBL_UW_COMPLIANCE_PHP_VERSION' => 'מינימום גירסת PHP',
  'LBL_UW_COMPLIANCE_SAFEMODE' => 'הגדרות PHP: מצב בטוח',
  'LBL_UW_COMPLIANCE_TITLE' => 'בדיקת הגדרות שרת',
  'LBL_UW_COMPLIANCE_TITLE2' => 'הגדרות שהובחנו',
  'LBL_UW_COMPLIANCE_XML' => 'ניתוח XML',
  'LBL_UW_COPIED_FILES_TITLE' => 'קבצים הועתקו בהצלחה',
  'LBL_UW_CUSTOM_TABLE_SCHEMA_CHANGE' => 'סכמת שינויים לטבלה מותאמת',
  'LBL_UW_DB_CHOICE1' => 'עדכן אשף שרץ ב SQL',
  'LBL_UW_DB_CHOICE2' => 'שאילתות SQL ידניות',
  'LBL_UW_DB_INSERT_FAILED' => 'השיבוץ נכשל - השווה תוצאות שונות',
  'LBL_UW_DB_ISSUES_PERMS' => 'הרשאות מאגר נתונים',
  'LBL_UW_DB_ISSUES' => 'נושאי מאגר נתונים',
  'LBL_UW_DB_METHOD' => 'שיטות עידכון מאגר נתונים',
  'LBL_UW_DB_NO_ADD_COLUMN' => 'שנה טבלה[טבלה] צרף עמודה[עמודה]',
  'LBL_UW_DB_NO_CHANGE_COLUMN' => 'שנה טבלה[טבלה] שנה עמודה[עמודה]',
  'LBL_UW_DB_NO_CREATE' => 'צור טבלה [טבלה]',
  'LBL_UW_DB_NO_DELETE' => 'מחק מ [טבלה]',
  'LBL_UW_DB_NO_DROP_COLUMN' => 'שנה טבלה [טבלה] הורד עמודה [עמודה]',
  'LBL_UW_DB_NO_DROP_TABLE' => 'הורד טבלה [טבלה]',
  'LBL_UW_DB_NO_ERRORS' => 'כל הזכויות מותרות',
  'LBL_UW_DB_NO_INSERT' => 'הכנס לתוך [טבלה]',
  'LBL_UW_DB_NO_SELECT' => 'בחר [X] מ [טבלה]',
  'LBL_UW_DB_NO_UPDATE' => 'עדכן [טבלה]',
  'LBL_UW_DB_PERMS' => 'זכויות הכרחיות',
  'LBL_UW_DESC_MODULES_INSTALLED' => 'עידכונים אלה הותקנו:',
  'LBL_UW_END_DESC' => 'כל הכבוד, המערכת שלך עודכנה',
  'LBL_UW_END_DESC2' => 'אם בחרת בהרצה ידנית בכל שלב כמו קובץ ממוזג או שאילתת SQL, נא עשה זאת עכשיו.המערכת שלך תהיה במצב לא יציב עד שצעדים אלה יושלמו.',
  'LBL_UW_REPAIR_INDEX' => 'למען שיפור ביצועיי בסיס הנתונים, בבקשה תפעיל את תסריט אינדקס התיקון',
  'LBL_UW_FILE_DELETED' => 'הוסר',
  'LBL_UW_FILE_GROUP' => 'קבוצה',
  'LBL_UW_FILE_ISSUES_PERMS' => 'אישור קובץ',
  'LBL_UW_FILE_ISSUES' => 'נושא הקובץ',
  'LBL_UW_FILE_NEEDS_DIFF' => 'קובץ דורש Diff ידני',
  'LBL_UW_FILE_NO_ERRORS' => 'כל הקבצים ניתנים לכתיבה',
  'LBL_UW_FILE_OWNER' => 'בעלים',
  'LBL_UW_FILE_PERMS' => 'רשות',
  'LBL_UW_FILE_UPLOADED' => 'הועלו',
  'LBL_UW_FILE' => 'שם קובץ',
  'LBL_UW_FILES_QUEUED' => 'עידכונים מוכנים להתקנה',
  'LBL_UW_FILES_REMOVED' => 'קבצים אלה יוסרו מהמערכת שלך',
  'LBL_UW_FROZEN' => 'יש להשלים צעד נוסף לפני המשך.',
  'LBL_UW_HIDE_DETAILS' => 'הסתר פרטים',
  'LBL_UW_IN_PROGRESS' => 'בתהליך',
  'LBL_UW_INCLUDING' => 'כולל',
  'LBL_UW_INCOMPLETE' => 'לא הושלם',
  'LBL_UW_INSTALL' => 'התקן קובץ',
  'LBL_UW_MANUAL_MERGE' => 'מיזוג קובץ',
  'LBL_UW_MODULE_READY_UNINSTALL' => 'מודול מוכן להסרה. לחץ "בצע" בכדי להמשיך בהתקנה',
  'LBL_UW_MODULE_READY' => 'מודול מוכן להתקנה, לחץ "בצע" בכדי להמשיך בהתקנה',
  'LBL_UW_NO_INSTALLED_UPGRADES' => 'לא התגלה שום רישום עידכון',
  'LBL_UW_NONE' => 'ללא',
  'LBL_UW_NOT_AVAILABLE' => 'לא זמין',
  'LBL_UW_OVERWRITE_DESC' => 'כל הקבצים ששונו יהיו בכתב נתונים חדשים במקומם של נתונים קיימים - כולל קוד ערוך ושינוי תבנית שערכת. אתה בטוח שברצונך להמשיך? ',
  'LBL_UW_OVERWRITE_FILES_CHOICE1' => 'עבור על כל הקבצים',
  'LBL_UW_OVERWRITE_FILES_CHOICE2' => 'מיזוג ידני- שמור הכל',
  'LBL_UW_OVERWRITE_FILES' => 'מיזוג שיטה',
  'LBL_UW_PATCH_READY' => 'העידכון מוכן להמשך. לחץ כל כפתור "בצע" שלמטה כדי להשלים את תהליך השידרוג.',
  'LBL_UW_PATCH_READY2' => 'שים לב: תוכנית שהותאמה אישית נמצאה: לקובץ(קבצים) הבא יש שדות חדשים או מסכים ששונו שהותאמו אישית אושר ע"י הסטודיו. העידכון שאתה עומד להתקין מכיל שינויים לגבי קובץ(קבצים). בשביל כל קובץ שתוכל     *[בררת מחדל] החזק את גירסתך על ידי השארת תיבת הסימון ריקה. שינויי העידכון התעלמו. או *אשר את הקבצים המעודכנים על ידי בחירת התיבה. התוכנית האישית שלך צריכה להיות מאושרת שוב ע"י הסטודיו.',
  'LBL_UW_PREFLIGHT_ADD_TASK' => 'צור משימה עבור מיזוג ידני',
  'LBL_UW_PREFLIGHT_COMPLETE' => 'בדוק טרום טיסה',
  'LBL_UW_PREFLIGHT_DIFF' => 'הבדיל',
  'LBL_UW_PREFLIGHT_EMAIL_REMINDER' => 'שלח לעצמך תזכורת דואר אלקטרוני לגבי מיזוג ידני',
  'LBL_UW_PREFLIGHT_FILES_DESC' => 'הקבצים המצוינים למטה שונו. בטל סימון לפריטים שדורשים מיזוג ידני.כל סידור ידני שהתגלה אוטומטי סומן כמבוטל, בדוק את אלו ששוכתבו',
  'LBL_UW_PREFLIGHT_NO_DIFFS' => 'לא זקוק לקובץ מיזוג ידני ',
  'LBL_UW_PREFLIGHT_NOT_NEEDED' => 'לא מצריך',
  'LBL_UW_PREFLIGHT_PRESERVE_FILES' => 'שמירת קבצים אוטומטית',
  'LBL_UW_PREFLIGHT_TESTS_PASSED' => 'כל בדיקות הטרום טיסה עברו. לחץ "הבא" בכדי לבצע שינויים אלו',
  'LBL_UW_PREFLIGHT_TOGGLE_ALL' => 'העדף את כל הקבצים',
  'LBL_UW_REBUILD_TITLE' => 'בנה שוב תוצאה',
  'LBL_UW_SCHEMA_CHANGE' => 'שינויי סכמה',
  'LBL_UW_SHOW_COMPLIANCE' => 'הראה הגדרות שנתגלו',
  'LBL_UW_SHOW_DB_PERMS' => 'הראה הרשאות חסרות בבסיס הנתונים',
  'LBL_UW_SHOW_DETAILS' => 'הראה פרטים',
  'LBL_UW_SHOW_DIFFS' => 'הראה קבצים שדורשים מיזוג ידני',
  'LBL_UW_SHOW_NW_FILES' => 'הראה קבצים אם הרשאות לא תקינות',
  'LBL_UW_SHOW_SCHEMA' => 'הראה שינוי סכמת שינוי תפריט',
  'LBL_UW_SHOW_SQL_ERRORS' => 'הראה שאילתות פגומות',
  'LBL_UW_SHOW' => 'הראה',
  'LBL_UW_SKIPPED_FILES_TITLE' => 'קבצים שדולגו',
  'LBL_UW_SKIPPING_FILE_OVERWRITE' => 'עבור על קובץ ששוכתב - מיזוג ידני נבחר.',
  'LBL_UW_SQL_RUN' => 'בדוק כאשר SQL הורץ באופן ידני',
  'LBL_UW_START_DESC' => 'ברוך הבא למערכת אשף עידכון SugarCRM. אשף זה מתוכנן לעזור לאדמיניסטרטורים כאשר הם מעדכנים את מערכת הSugarCRM לדוגמא ',
  'LBL_UW_START_DESC2' => 'אנו מאוד ממליצים',
  'LBL_UW_START_UPGRADED_UW_DESC' => 'עידכון האשף החדש יתחיל מחדש את תהליך העידכון. ',
  'LBL_UW_START_UPGRADED_UW_TITLE' => 'ברוך הבר לאשף העידכון החדש',
  'LBL_UW_SYSTEM_CHECK_CHECKING' => 'עכשיו בודק, חכה בבקשה. פעולה זו עלולה להמשך למעלה מ 30 שניות.',
  'LBL_UW_SYSTEM_CHECK_FILE_CHECK_START' => 'חפש קבצים רלוונטים לבדיקה',
  'LBL_UW_SYSTEM_CHECK_FILES' => 'קבצים',
  'LBL_UW_SYSTEM_CHECK_FOUND' => 'נמצא',
  'LBL_UW_TITLE_CANCEL' => 'בטל',
  'LBL_UW_TITLE_COMMIT' => 'בצע שידרוג',
  'LBL_UW_TITLE_END' => 'תידרוך',
  'LBL_UW_TITLE_PREFLIGHT' => 'בדיקת טרום טיסה',
  'LBL_UW_TITLE_START' => 'התחלה',
  'LBL_UW_TITLE_SYSTEM_CHECK' => 'בדיקות מערכת',
  'LBL_UW_TITLE_UPLOAD' => 'העלה עדכן',
  'LBL_UW_TITLE' => 'עדכן אשף',
  'LBL_UW_UNINSTALL' => 'הסר',
);

?>
