<?php
/* modules/Import/language/he_il.lang.php */
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
  'LBL_IMPORT_MODULE_NO_DIRECTORY' => 'הספריה',
  'LBL_IMPORT_MODULE_NO_DIRECTORY_END' => 'לא קיימת או לא ניתנת לגישה',
  'LBL_IMPORT_MODULE_ERROR_NO_UPLOAD' => 'הקובץ לא הועלה בהצלחה. יכול להיות שקובץ ה- \'upload_max_filesize\' setting in your php.ini נקבע לספר קטן יותר.',
  'LBL_IMPORT_MODULE_ERROR_LARGE_FILE' => 'הקובץ גדול מידי. המקסימום הוא:',
  'LBL_IMPORT_MODULE_ERROR_LARGE_FILE_END' => 'KB. שנה את $sugar_config[\'upload_maxsize\'] ב- config.php',
  'LBL_MODULE_NAME' => 'יבא',
  'LBL_TRY_AGAIN' => 'נסה שוב',
  'LBL_ERROR' => 'הערה:',
  'ERR_MULTIPLE' => 'מספר עמודות הוגדרו עם שם שדה זהה.',
  'ERR_MISSING_REQUIRED_FIELDS' => 'חסרים שדות הכרחיים:',
  'ERR_SELECT_FULL_NAME' => 'לא נית לבחור שם מלא שהשם הפרטי ושם המשפחה נבחרו.',
  'ERR_SELECT_FILE' => 'בחר קובץ להעלאה.',
  'LBL_SELECT_FILE' => 'בחר קובץ:',
  'LBL_CUSTOM' => 'מותאם',
  'LBL_CUSTOM_CSV' => 'התאם פסיק תוחם קובץ',
  'LBL_CSV' => 'פסיק תוחם קובץ',
  'LBL_TAB' => 'תו תוחם קובץ',
  'LBL_CUSTOM_DELIMETED' => 'התאם תחימת קובץ',
  'LBL_CUSTOM_DELIMETER' => 'התאמת תוחם',
  'LBL_CUSTOM_TAB' => 'התאם תו תוחם קובץ',
  'LBL_DONT_MAP' => '--- אל תמפה את הקובץ הזה ---',
  'LBL_STEP_1_TITLE' => 'צעד 1: בחר את המקור',
  'LBL_WHAT_IS' => 'מהו מקור המידע?',
  'LBL_MICROSOFT_OUTLOOK' => 'מייקרוסופט אאוטלוק',
  'LBL_ACT' => 'פעל!',
  'LBL_ACT_2005' => 'פעל! 2005',
  'LBL_SALESFORCE' => 'Salesforce.com',
  'LBL_MY_SAVED' => 'המקורות השמורים שלי:',
  'LBL_PUBLISH' => 'פורסם',
  'LBL_DELETE' => 'מחק',
  'LBL_PUBLISHED_SOURCES' => 'מקורות מפורסמים:',
  'LBL_UNPUBLISH' => 'לא מפורסמים',
  'LBL_NEXT' => 'הבא >',
  'LBL_BACK' => 'חזור <',
  'LBL_STEP_2_TITLE' => 'צעד 2: העלה קובץ יצוא',
  'LBL_HAS_HEADER' => 'יש כותרת.',
  'LBL_NUM_1' => '1.',
  'LBL_NUM_2' => '2.',
  'LBL_NUM_3' => '3.',
  'LBL_NUM_4' => '4.',
  'LBL_NUM_5' => '5.',
  'LBL_NUM_6' => '6.',
  'LBL_NUM_7' => '7.',
  'LBL_NUM_8' => '8.',
  'LBL_NUM_9' => '9.',
  'LBL_NUM_10' => '10.',
  'LBL_NUM_11' => '11.',
  'LBL_NUM_12' => '12',
  'LBL_NOTES' => 'תזכורות:',
  'LBL_NOW_CHOOSE' => 'עכשיו בחר קובץ ליבוא',
  'LBL_IMPORT_OUTLOOK_TITLE' => 'Microsoft Outlook 98 and 2000 יכו ליצא נתונים אשר ערכם מופרד ע"י פסיק אשר יכול לשמש ליבא מידע לתוך המערכת. ליצא את הנתונים שלך מהאאוטלוק, עקוב אחר הצעדים הבאים מתחת:',
  'LBL_OUTLOOK_NUM_1' => 'התחל אאוטלוק',
  'LBL_OUTLOOK_NUM_2' => 'בחר את תפריט הקובץ, אח"כ את היבוא והיצוא...תפריט בחירה',
  'LBL_OUTLOOK_NUM_3' => 'בחר \'יצא לקובץ\' ובחר \'הבא\'.',
  'LBL_OUTLOOK_NUM_4' => 'בחר \'ערך מורפרד ע"י פסיק\' והקלק \'הבא\'. שים לב: אולי תאלץ להתקין את מרכיבי היצוא.',
  'LBL_OUTLOOK_NUM_5' => 'בחר את תיקיית \'אנשי הקשר\'  ובחר \'הבא\'. אתה יכול לבחור תיקיית אנשי קשר שונה אם אנשי הקשר שלך שמורים שתקיות שונות.',
  'LBL_OUTLOOK_NUM_6' => 'בחר שם קובץ והקלק \'הבא\'.',
  'LBL_OUTLOOK_NUM_7' => 'בחר \'סיים\'.',
  'LBL_IMPORT_ACT_TITLE' => 'פעל! יכול ליצא מידע אשר נמצא בפורמט הפרדת פסיק אשר יכול לשמש ליבוא נתונים למערכת. ליצא את הנתונים שלך מפעל! עקוב אחר הצעדים מטה:',
  'LBL_ACT_NUM_1' => 'שגר ACT!',
  'LBL_ACT_NUM_2' => 'בחר את תפריט הקובץ, את תפריט אופציית החלפת הנתונים, אח"כ יצא..אופציית התפריט',
  'LBL_ACT_NUM_3' => 'בחר את סוג הקובץ תיחום קובץ',
  'LBL_ACT_NUM_4' => 'בחר שם הקובץ ומיקומו למידע המיוצא והקלק \'הבא\'.',
  'LBL_ACT_NUM_5' => 'בחר \'רשומות אנשי קשר בלבד\'.',
  'LBL_ACT_NUM_6' => 'הקלק על כפתור ה\'אופציות\'.',
  'LBL_ACT_NUM_7' => 'בחר ב\'פסיק\' כתו המפריד שדות',
  'LBL_ACT_NUM_8' => 'בחר את אופציית ה\'כן, יצא שמות קובץ\' והקלק OK.',
  'LBL_ACT_NUM_9' => 'הקלק \'הבא\'',
  'LBL_ACT_NUM_10' => 'בחר \'כל הרשומות\' והקלק \'סיום\'.',
  'LBL_IMPORT_SF_TITLE' => 'Salesforce.com יכול ליצא נתונים בפורמט הפרדת ערך בפסיק אשר יכול לשמש ליבוא נתונים לתוך המערכת. על מנת ליצא את הנתונים מ- Salesforce.com עקוב אחר הצעדים הבאים למטה:',
  'LBL_SF_NUM_1' => 'פתח את הבראוזר, לך ל- http://www.salesforce.com, ותתחבר עם כתובת המייל שלך והסיסמא',
  'LBL_SF_NUM_2' => 'הקלק על "דוחות"  בתפריט העליון',
  'LBL_SF_NUM_3' => 'ליצא חשבונות: הקלק על הלינק של "חשבונות פעילים". ליצא אנשי קשר: הקלק על הלינק "רשימת הדיוור".',
  'LBL_SF_NUM_4' => 'צעד 1: בחר את סוג הדוח, בחר  את הדוח שמאורגן בצורת טבלה והקלק על \'הבא\'',
  'LBL_SF_NUM_5' => 'צעד 2: בחר את עמודות הדוח, בחר את העמודות אשר ברצונך ליצא והקלק \'הבא\'',
  'LBL_SF_NUM_6' => 'צעד 3: בחר את "סיכום מידע"  והקלק \'הבא\'',
  'LBL_SF_NUM_7' => 'צעד 4: בחר את עמודות הדוח והקלק \'הבא\'',
  'LBL_SF_NUM_8' => 'צעד 5: בחר את הקריטריה של הדוח שלך, בתאריך התחלה,בחר את חלון הזמן מספיק רחב על מנת ליצא את מאגר הנתונים שלך. אתה יכול ליצא תת קבוצה של מאגרי המידע ע"י שימוש מתקדם בקריטריה. כאשר סיימת הקלק "הרץ דוח".',
  'LBL_SF_NUM_9' => 'הדוח יווצר והעמוד יציג את סטטוס ההיווצרות של הדוח: הושלם. עכשיו בחר את אופציית "יצא לאקסל"',
  'LBL_SF_NUM_10' => 'ב"יצא דוח" באופציית בחירת פורמט היצוא בחר " תיחום ע"י פסיק CSV והקלק \'יצא\'',
  'LBL_SF_NUM_11' => 'עכשיו יפתח POP UP על מנת לשמור את השינויים על המחשב.',
  'LBL_IMPORT_CUSTOM_TITLE' => 'הרבה אפליקציות יאפשרו לך ליצא נתונים דרך "יצוא נתוני קובץ ע"י תיחום פסיק CSV". לרוב האפליקציות פועלות לפי השלבים הבאים:',
  'LBL_CUSTOM_NUM_1' => 'הפעל את האפליקציה ופתח את קובץ הנתונים',
  'LBL_CUSTOM_NUM_2' => 'בחר את "שמור בשם"  או "יצא" תפריט אפשרויות',
  'LBL_CUSTOM_NUM_3' => 'שמור את הקובץ כCSV או בפורמט הפרדת ערך ע"י פסיק',
  'LBL_IMPORT_TAB_TITLE' => 'אפליקציות רבות יאפשרו לך ליצא נתונים דרך "יצוא נתוני קובץ ע"י תיחום תוית CSV". לרוב האפליקציות פועלות לפי השלבים הבאים:',
  'LBL_TAB_NUM_1' => 'הפעל את האפליקציה ופתח את קובץ הנתונים',
  'LBL_TAB_NUM_2' => 'בחר את "שמור בשם"  או "יצא" תפריט אפשרויות',
  'LBL_TAB_NUM_3' => 'שמור את הקובץ כTSV או בפורמט הפרדת ערך ע"י פסיק',
  'LBL_STEP_3_TITLE' => 'צעד 3: אשר שדות ויבא',
  'LBL_SELECT_FIELDS_TO_MAP' => 'ברשימה מתחת בחר את השדות בקובץ היבוא שלך שייבואו לתוך השדות שבחרת במערכת. כאשר סיימת הקלק "יבא עכשיו".',
  'LBL_DATABASE_FIELD' => 'שדה בסיס נתונים',
  'LBL_HEADER_ROW' => 'שורת כותרת',
  'LBL_ROW' => 'שורה',
  'LBL_SAVE_AS_CUSTOM' => 'שמור כמיפוי מותאם.',
  'LBL_CONTACTS_NOTE_1' => 'או שם משפחה או שם מלא חייבים להיות חלק מהמיפוי על מנת לשמור אותו.',
  'LBL_CONTACTS_NOTE_2' => 'אם שם מלא נשמר אז שם פרטי ושם משפחה לא יכנסו למיפוי. ',
  'LBL_CONTACTS_NOTE_3' => 'אם שם מלא נבחר למיפוי, אז המידע בשם המלא יופרד לשם פרטי ומשפחה כאשר יקלט ל-DB.',
  'LBL_CONTACTS_NOTE_4' => 'שדה כתובת רחוב 2" ו- "כתובת רחוב 3" ישורשרו ביחד עם כתובת הרחוב הראשית כאשר יקלטו ל- DB.',
  'LBL_ACCOUNTS_NOTE_1' => 'שם בסיס נתונים חייב להיבחר למיפוי.',
  'LBL_ACCOUNTS_NOTE_2' => 'שדה כתובת רחוב 2" ו- "כתובת רחוב 3" ישורשרו ביחד עם כתובת הרחוב הראשית כאשר יקלטו ל- DB.',
  'LBL_OPPORTUNITIES_NOTE_1' => 'שם הזדמנות, שם חשבון, תאריך סגירה, ושלב מכירה הם שדות חובה.',
  'LBL_IMPORT_NOW' => 'יבא עכשיו',
  'LBL_' => '',
  'LBL_CANNOT_OPEN' => 'לא יכול לפתוח את קובץ היבוא לקריאה',
  'LBL_NOT_SAME_NUMBER' => 'לא היה מספר שדות שהים לשורה בקובץ שלך',
  'LBL_NO_LINES' => 'לא היו שורות בקובץ היבוא שלך',
  'LBL_FILE_ALREADY_BEEN_OR' => 'קובץ היבוא עובד כבר או לא קיים',
  'LBL_SUCCESS' => 'הצלחה:',
  'LBL_SUCCESSFULLY' => 'יובא בהצלחה',
  'LBL_LAST_IMPORT_UNDONE' => 'היבוא לא הושלם',
  'LBL_NO_IMPORT_TO_UNDO' => 'לא היו קבצי יבוא לבטל',
  'LBL_FAIL' => 'נכשל:',
  'LBL_RECORDS_SKIPPED' => 'שדות מסויימים דולגו מכיוון שהיה חסר להם שדה הכרחי אחד או יותר',
  'LBL_IDS_EXISTED_OR_LONGER' => 'שדות מסויימים דולגו מכיוון  שהערך החד ערכי שלהם קיים או ארוך מ- 36 תווים.',
  'LBL_RESULTS' => 'תוצאות',
  'LBL_IMPORT_MORE' => 'יבא עוד',
  'LBL_FINISHED' => 'הסתיים',
  'LBL_UNDO_LAST_IMPORT' => 'בטל את היבוא האחרון',
  'LBL_LAST_IMPORTED' => 'האחרון שיובא',
  'ERR_MULTIPLE_PARENTS' => 'יוכל להיות רק ערך חד ערכי אחד מוגדר',
  'LBL_DUPLICATES' => 'נמצאו כפילויות',
  'LBL_DUPLICATE_LIST' => 'הורד רשימת כפילויות',
  'LBL_UNIQUE_INDEX' => 'בחר ערך להשוואת כפילויות',
);

?>
