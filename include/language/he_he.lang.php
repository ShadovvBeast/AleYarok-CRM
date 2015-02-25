<?phpif(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');/********************************************************************************* * The contents of this file are subject to the SugarCRM Public License Version * 1.1.3 ("License"); You may not use this file except in compliance with the * License. You may obtain a copy of the License at http://www.sugarcrm.com/SPL * Software distributed under the License is distributed on an "AS IS" basis, * WITHOUT WARRANTY OF ANY KIND, either express or implied.  See the License * for the specific language governing rights and limitations under the * License. * * All copies of the Covered Code must include on each user interface screen: *    (i) the "Powered by SugarCRM" logo and *    (ii) the SugarCRM copyright notice * in the same form as they appear in the distribution.  See full license for * requirements. * * The Original Code is: SugarCRM Open Source * The Initial Developer of the Original Code is SugarCRM, Inc. * Portions created by SugarCRM are Copyright (C) 2004-2006 SugarCRM, Inc.; * All Rights Reserved. * Contributor(s): uniscape@mac.com, .. ********************************************************************************//********************************************************************************* * Description: Defines the Hebrew language pack for the base application. * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc. All Rights * Reserved. Contributor(s): uniscape@mac.com, .. * *******************************************************************************/
//the left value is the key stored in the db and the right value is the display value
//to translate, only modify the right value in each key/value pair

$app_list_strings = array (
//'Contacts' => 'אנשי קשר' ,
'language_pack_name' => 'עברית - Hebrew' ,

'moduleList' =>   array (
'Home' => 'ראשי' ,
'Dashboard' => 'Панель' ,
'Contacts' => 'אנשי קשר' ,
'Accounts' => 'לקוחות' ,
'Opportunities' => 'עסקאות' ,
'Cases' => 'Дела' ,
'Notes' => 'הערות' ,
'Calls' => 'שיחות' ,
'Emails' => 'E-mail' ,
'Meetings' => 'פגישות' ,
'Tasks' => 'משימות' ,
'Calendar' => 'לוח שנה' ,
'Leads' => 'Предварительные контакты'    ,
'Activities' => 'Мероприятия' ,
'Bugs' => 'Ошибки' ,
'Feeds' => 'RSS-ленты' ,
'iFrames' => 'Мой портал' ,
'TimePeriods' => 'Периоды времени' ,
'Project' => 'פרוייקטים' ,
'ProjectTask' => 'משימות הפרוייקט' ,
'Campaigns' => 'Кампании' ,
'Documents' => 'מסמכים' ,
'Sync' => 'Синхронизация' ,

'Users' => 'משתמשים' ,
'Releases' => 'Выпуски' ,
'Prospects' => 'Адресаты' ,
'Queues' => 'Очереди' ,
'EmailMarketing' => 'Рассылка E-mail' ,
'EmailTemplates' => 'Шаблоны E-mail' ,
'ProspectLists' => 'Списки адресатов'    ,
'SavedSearch' => 'Сохраненные условия поиска',
        ),

'moduleListSingular' =>   array (
'Home' => 'ראשי' ,
'Dashboard' => 'Панель' ,
'Contacts' => 'אנשי קשר' ,
'Accounts' => 'לקוחות' ,
'Opportunities' => 'עסקאות' ,
'Cases' => 'Дела' ,
'Notes' => 'הערות' ,
'Calls' => 'שיחות' ,
'Emails' => 'E-mail' ,
'Meetings' => 'פגישות' ,
'Tasks' => 'משימות' ,
'Calendar' => 'לוח שנה' ,
'Leads' => 'Предварительные контакты'    ,
'Activities' => 'Мероприятия' ,
'Bugs' => 'Ошибки' ,
'Feeds' => 'RSS-ленты' ,
'iFrames' => 'Мой портал' ,
'TimePeriods' => 'Периоды времени' ,
'Project' => 'פרוייקטים' ,
'ProjectTask' => 'משימות הפרוייקט' ,
'Campaigns' => 'Кампании' ,
'Documents' => 'מסמכים' ,
'Sync' => 'Синхронизация' ,
'Users' => 'משתמשים' ,
        ),

'checkbox_dom' => array (
'' => '' ,
'1' => 'Да' ,
'2' => 'Нет'    ,
  ),

'Analyst' => 'Аналитик' ,

'account_type_dom' =>   array (
'' => '' ,
'Analyst' => 'Аналитик' ,
'Competitor' => 'Конкурент' ,
'Customer' => 'Клиент' ,
'Integrator' => 'Интегратор' ,
'Investor' => 'Инвестор' ,
'Partner' => 'Партнер' ,
'Press' => 'Пресса' ,
'Prospect' => 'Адресат' ,
'Reseller' => 'Реселлер' ,
'Other' => 'Другое'    ,
  ),
  
'Apparel' => 'Одежда' ,

'industry_dom' =>   array (
'' => '' ,
'Apparel' => 'Одежда' ,
'Banking' => 'Банковское дело' ,
'Biotechnology' => 'Биотехнологии' ,
'Chemicals' => 'Химическая промышленность' ,
'Communications' => 'Связь' ,
'Construction' => 'Строительство' ,
'Consulting' => 'Консалтинг' ,
'Education' => 'Образование' ,
'Electronics' => 'Электроника' ,
'Energy' => 'Энергетика' ,
'Engineering' => 'Инженерия' ,
'Entertainment' => 'Развлечения' ,
'Environmental' => 'Экология' ,
'Finance' => 'Финансы' ,
'Government' => 'Правительство' ,
'Healthcare' => 'Здравоохранение' ,
'Hospitality' => 'Гостиничное дело' ,
'Insurance' => 'Страховое дело' ,
'Machinery' => 'Машиностроение' ,
'Manufacturing' => 'Производство' ,
'Media' => 'Медиа' ,
'Not For Profit' => 'Неприбыльные' ,
'Recreation' => 'Отдых' ,
'Retail' => 'Торговля' ,
'Shipping' => 'Перевозки' ,
'Technology' => 'Технологии' ,
'Telecommunications' => 'Телекоммуникации' ,
'Transportation' => 'Транспорт' ,
'Utilities' => 'Общественно полезная' ,
'Other' => 'Другое'    ,
  ),
  
'source_default_key' => '' ,

'lead_source_dom' =>   array (
'' => '' ,
'Cold Call' => 'Обычный звонок' ,
'Existing Customer' => 'Существующий клиент' ,
'Self Generated' => 'Самопроизвольный' ,
'Employee' => 'Сотрудник' ,
'Partner' => 'Партнер' ,
'Public Relations' => 'PR-деятельность' ,
'Direct Mail' => 'Прямые рассылки' ,
'Conference' => 'Конференция' ,
'Trade Show' => 'Спец.выставка' ,
'Web Site' => 'Сайт' ,
'Word of mouth' => 'Разговор' ,
'Email' => 'E-mail' ,
'Campaign'=>'Кампания',
'Other' => 'Другое'    ,
  ),
  
'opportunity_type_dom' =>   array (
'' => '' ,
'Existing Business' => 'Существующий бизнес' ,
'New Business' => 'Новый бизнес'    ,
  ),
  
'roi_type_dom' =>    array (
'Revenue' => 'Доход',
'Investment'=>'Инвестиция',
'Expected_Revenue'=>'Ожидаемый доход',
'Budget'=>'Бюджет',
   ),
   
 //Note:  do not translate opportunity_relationship_type_default_key
// it is the key for the default opportunity_relationship_type_dom value
'opportunity_relationship_type_default_key' => 'Primary Decision Maker' ,

'opportunity_relationship_type_dom' =>   array (
'' => '' ,
'Primary Decision Maker' => 'Ответственный за основные решения' ,
'Business Decision Maker' => 'Ответственный за бизнес-решения' ,
'Business Evaluator' => 'Бизнес-оценщик' ,
'Technical Decision Maker' => 'Ответственный за тех. решения' ,
'Technical Evaluator' => 'Технический оценщик' ,
'Executive Sponsor' => 'Генеральный спонсор' ,
'Influencer' => 'Влияющий' ,
'Other' => 'Другое'    ,
  ),
  
//Note:  do not translate case_relationship_type_default_key
//it is the key for the default case_relationship_type_dom value
'case_relationship_type_default_key' => 'Primary Contact' ,

'case_relationship_type_dom' =>   array (
'' => '' ,
'Primary Contact' => 'Основной контакт' ,
'Alternate Contact' => 'Альтернативный контакт'    ,
  ),
  
'payment_terms' =>   array (
'' => '' ,
'Net 15' => 'Сеть 15' ,
'Net 30' => 'Сеть 30'    ,
  ),
  
'sales_stage_default_key' => 'Prospecting' ,

'sales_stage_dom' =>   array (
'Prospecting' => 'Разведка' ,
'Qualification' => 'Оценка' ,
'Needs Analysis' => 'Анализ потребностей' ,
'Value Proposition' => 'Оценочное предложение' ,
'Id. Decision Makers' => 'Выявление лиц, принимающих решения' ,
'Perception Analysis' => 'Анализ реакции' ,
'Proposal/Price Quote' => 'Предложение/Цена' ,
'Negotiation/Review' => 'Согласование/Пересмотр' ,
'Closed Won' => 'Закрыто с успехом' ,
'Closed Lost' => 'Закрыто с потерями'
  ),
  
'sales_probability_dom' =>   array (
'Prospecting' => '10' ,
'Qualification' => '20' ,
'Needs Analysis' => '25' ,
'Value Proposition' => '30' ,
'Id. Decision Makers' => '40' ,
'Perception Analysis' => '50' ,
'Proposal/Price Quote' => '65' ,
'Negotiation/Review' => '80' ,
'Closed Won' => '100' ,
'Closed Lost' => '0' ,
  ),
  
'activity_dom' =>   array (
'Call' => 'Звонок' ,
'Meeting' => 'Встреча' ,
'Task' => 'Задача' ,
'Email' => 'E-mail' ,
'Note' => 'Примечание'    ,
  ),
  
'salutation_dom' => 	  array (
'' => '' ,
'Mr.' => 'Г-н.' ,
'Ms.' => 'Г-жа.' ,
//'Mrs.' => 'Гж.' ,
'Dr.' => 'Док.' ,
'Prof.' => 'Проф.'    ,
	  ),
	  
//time is in seconds; the greater the time the longer it takes;
'reminder_max_time' => 3600,

'reminder_time_options' => array(
  60=> 'за 1 минуту',
  300=> 'за 5 минут',
  600=> 'за 10 минут',
  900=> 'за 15 минут',
  1800=> 'за 30 минут',
  3600=> 'за 1 час',
	 ),
	 
'task_priority_default' => 'Medium' ,

'task_priority_dom' =>   array (
'High' => 'Высокий' ,
'Medium' => 'Средний' ,
'Low' => 'Низкий'    ,
  ),
  
'task_status_default' => 'Not Started' ,

'task_status_dom' =>   array (
'Not Started' => 'Не начата' ,
'In Progress' => 'В процессе' ,
'Completed' => 'Завершена' ,
'Pending Input' => 'В ожидании' ,
'Deferred' => 'Отложена'    ,
  ),
  
'meeting_status_default' => 'Planned' ,

'meeting_status_dom' =>   array (
'Planned' => 'Запланировано' ,
'Held' => 'Состоялась' ,
'Not Held' => 'Не состоялась'    ,
  ),
  
'call_status_default' => 'Planned' ,

'call_status_dom' =>   array (
'Planned' => 'Запланирован' ,
'Held' => 'Состоялся' ,
'Not Held' => 'Не состоялся'    ,
  ),
  
'call_direction_default' => 'Outbound' ,

'call_direction_dom' =>   array (
'Inbound' => 'Входящий' ,
'Outbound' => 'Исходящий'    ,
  ),
  
'lead_status_dom' =>   array (
'' => '' ,
'New' => 'Новый' ,
'Assigned' => 'Назначенный' ,
'In Process' => 'В процессе' ,
'Converted' => 'Преобразован' ,
'Recycled' => 'Повторный' ,
'Dead' => '"Мёртвый"'    ,
  ),
  
'lead_status_noblank_dom' =>   array (
'New' => 'Новый' ,
'Assigned' => 'Назначенный' ,
'In Process' => 'В процессе' ,
'Converted' => 'Преобразован' ,
'Recycled' => 'Повторный' ,
'Dead' => '"Мёртвый"'    ,
  ),
  
 //Note:  do not translate case_status_default_key
//it is the key for the default case_status_dom value
'case_status_default_key' => 'New' ,

'case_status_dom' =>   array (
'New' => 'Новый' ,
'Assigned' => 'Назначенный' ,
'Closed' => 'Закрытое' ,
'Pending Input' => 'В ожидании' ,
'Rejected' => 'Отвергнутое'    ,
'Duplicate' => 'Дублировать' ,
  ),
  
'case_priority_default_key' => 'P2' ,

'case_priority_dom' =>   array (
'P1' => 'Высокий' ,
'P2' => 'Средний' ,
'P3' => 'Низкий'    ,
  ),
  
'user_status_dom' =>   array (
'Active' => 'Активен' ,
'Inactive' => 'Не активен' ,
  ),
  
'employee_status_dom' =>   array (
'Active' => 'Активен' ,
'Terminated' => 'Уволен' ,
'Leave of Absence' => 'В отпуске'    ,
  ),
  
'messenger_type_dom' =>   array (
'' => '' ,
'MSN' => 'MSN' ,
'Yahoo!' => 'Yahoo!' ,
'AOL' => 'AOL'    ,
  ),

'project_task_priority_options' => array (
'High' => 'Высокий' ,
'Medium' => 'Средний' ,
'Low' => 'Низкий'    ,
  ),
  
'project_task_status_options' => array (
'Not Started' => 'Не начата' ,
'In Progress' => 'В процессе' ,
'Completed' => 'Завершена' ,
'Pending Input' => 'В ожидании' ,
'Deferred' => 'Отложена'    ,
  ),
	
'project_task_utilization_options' => array (
'0' => '' ,
'25' => '25' ,
'50' => '50' ,
'75' => '75' ,
'100' => '100'    ,
  ),
  
//Note:  do not translate record_type_default_key
//it is the key for the default record_type_module value
'record_type_default_key' => 'Accounts' ,

'record_type_display' =>   array (
'' => '',
'Accounts' => 'לקוחות' ,
'Opportunities' => 'עסקאות' ,
'Cases' => 'Дела' ,
'Leads' => 'Предварительные контакты'   ,
'Contacts' => 'אנשי קשר' ,
'Bugs' => 'Ошибки' ,
'Project' => 'פרוייקטים' ,
'ProjectTask' => 'משימות הפרוייקט' ,
'Tasks' => 'משימות' ,
'Prospects' => 'Адресат',
  ),

'record_type_display_notes' =>   array (
'Accounts' => 'לקוחות' ,
'Contacts' => 'אנשי קשר' ,
'Opportunities' => 'עסקאות' ,
'Cases' => 'Дела' ,
'Leads' => 'Предварительные контакты'    ,
'Bugs' => 'Ошибки' ,
'Emails' => 'E-mail' ,
'Project' => 'פרוייקטים' ,
'ProjectTask' => 'משימות הפרוייקט' ,
'Meetings' => 'פגישות' ,
'Calls' => 'שיחות' ,
  ),

'quote_type_dom' =>   array (
'Quotes' => 'Сметы' ,
'Orders' => 'Заказ'    ,
  ),

'default_quote_stage_key' => 'Draft' ,

'quote_stage_dom' =>   array (
'Draft' => 'Черновик' ,
'Negotiation' => 'Согласование' ,
'Delivered' => 'Поставлено' ,
'On Hold' => 'Ведется' ,
'Confirmed' => 'Подтверждено' ,
'Closed Accepted' => 'Закрыто допустимо' ,
'Closed Lost' => 'Закрыто с потерями' ,
'Closed Dead' => 'Закрыто с прекращением'    ,
  ),
  
'default_order_stage_key' => 'Pending' ,

'order_stage_dom' =>   array (
'Pending' => 'В ожидании' ,
'Confirmed' => 'Подтверждено' ,
'On Hold' => 'Ведется' ,
'Shipped' => 'Отгружено' ,
'Cancelled' => 'Отменено'    ,
  ),

//Note:  do not translate quote_relationship_type_default_key
//it is the key for the default quote_relationship_type_dom value
'quote_relationship_type_default_key' => 'Primary Decision Maker' ,

'quote_relationship_type_dom' =>   array (
'' => '' ,
'Primary Decision Maker' => 'Ответственный за основные решения' ,
'Business Decision Maker' => 'Ответственный за бизнес-решения' ,
'Business Evaluator' => 'Бизнес-оценщик' ,
'Technical Decision Maker' => 'Ответственный за тех. решения' ,
'Technical Evaluator' => 'Технический оценщик' ,
'Executive Sponsor' => 'Генеральный спонсор' ,
'Influencer' => 'Влияющий' ,
'Other' => 'Другое'    ,
  ),
  
'layouts_dom' =>   array (
'Standard' => 'Стандартно' ,
'Invoice' => 'Контрагент' ,
'Terms' => 'Термины оплаты'    ,
  ),

'bug_priority_default_key' => 'Medium' ,
'bug_priority_dom' =>   array (
'Urgent' => 'Неотложный' ,
'High' => 'Высокий' ,
'Medium' => 'Средний' ,
'Low' => 'Низкий'    ,
  ),
  
'bug_resolution_default_key' => '' ,

'bug_resolution_dom' =>   array (
'' => '' ,
'Accepted' => 'Принято' ,
'Duplicate' => 'Дублировать' ,
'Fixed' => 'Исправлено' ,
'Out of Date' => 'Устарело' ,
'Invalid' => 'Не ошибка' ,
'Later' => 'Отложено'    ,
  ),
  
'bug_status_default_key' => 'New' ,

'bug_status_dom' =>   array (
'New' => 'Новая' ,
'Assigned' => 'Назначенная' ,
'Closed' => 'Закрытая' ,
'Pending' => 'В ожидании' ,
'Rejected' => 'Отвергнутая'    ,
  ),
  
'bug_type_default_key' => 'Bug' ,
'bug_type_dom' =>   array (
'Defect' => 'Ошибка' ,
'Feature' => 'Особенность'    ,
  ),

'source_default_key' => '' ,

'source_dom' =>   array (
'' => '' ,
'Internal' => 'Внутренний' ,
'Forum' => 'Форум' ,
'Web' => 'Веб' ,
'InboundEmail' => 'E-mail'    ,
  ),

'product_category_default_key' => '' ,

'product_category_dom' =>   array (
'' => '' ,
'Accounts' => 'לקוחות' ,
'Activities' => 'Мероприятия' ,
'Bug Tracker' => 'Ошибки' ,
'Calendar' => 'לוח שנה' ,
'Calls' => 'שיחות' ,
'Campaigns' => 'Кампании' ,
'Cases' => 'Дела' ,
'Contacts' => 'אנשי קשר' ,
'Currencies' => 'Валюта' ,
'Dashboard' => 'Панель' ,
'Documents' => 'מסמכים' ,
'Emails' => 'E-mail' ,
'Feeds' => 'RSS-ленты' ,
'Forecasts' => 'Прогнозы' ,
'Help' => 'Помощь' ,
'Home' => 'ראשי' ,
'Leads' => 'Предварительные контакты'    ,
'Meetings' => 'פגישות' ,
'Notes' => 'הערות' ,
'Opportunities' => 'עסקאות' ,
'Outlook Plugin' => 'Outlook-плагин' ,
'Product Catalog' => 'Каталог продуктов' ,
'Products' => 'Продукты' ,
'Projects' => 'פרוייקטים' ,
'Quotes' => 'Сметы' ,
'Releases' => 'Выпуски' ,
'RSS' => 'RSS-ленты' ,
'Studio' => 'Студия' ,
'Upgrade' => 'Обновить' ,
'Users' => 'משתמשים' ,
  ),

/*Added entries 'Queued' and 'Sending' for 4.0 release..*/
'campaign_status_dom' =>   array (
'' => '' ,
'Planning' => 'Планируется' ,
'Active' => 'Активна' ,
'Inactive' => 'Неактивна' ,
'Complete' => 'Завершена' ,
'In Queue' => 'В очереди' ,
'Sending' => 'Отсылается'    ,
  ),
  
'campaign_type_dom' =>   array (
'' => '' ,
'Telesales' => 'Телепродажи' ,
'Mail' => 'Почта' ,
'Email' => 'E-mail' ,
'Print' => 'Печать' ,
'Web' => 'Веб' ,
'Radio' => 'Радио' ,
'Television' => 'Телевидение'    ,
'NewsLetter' => 'Бюллетень',
  ),

'newsletter_frequency_dom' =>   array (
'' => '',
'Weekly' => 'Еженедельно',
'Monthly' => 'Ежемесячно',
'Quarterly' => 'Ежеквартально',
'Annually' => 'Ежегодно',
  ),

'notifymail_sendtype' =>   array (
'sendmail' => 'sendmail' ,
'SMTP' => 'SMTP'    ,
  ),
  
'dom_timezones' => array (
      '-12' => '(GMT - 12) Международная западная линия раздела дат' ,
      '-11' => '(GMT - 11) Самоа' ,
      '-10' => '(GMT - 10) Гавайи' ,
      '-9' => '(GMT - 9) Аляска' ,
      '-8' => '(GMT - 8) Сан-Франциско' ,
      '-7' => '(GMT - 7) Феникс' ,
      '-6' => '(GMT - 6) Саскачевань' ,
      '-5' => '(GMT - 5) Нью-Йорк' ,
      '-4' => '(GMT - 4) Сантьяго' ,
      '-3' => '(GMT - 3) Буэнос-Айрес' ,
      '-2' => '(GMT - 2) Средняя Атлантика' ,
      '-1' => '(GMT - 1) Азоры' ,
      '0' => '(GMT)' ,
      '1' => '(GMT + 1) Мадрид' ,
      '2' => '(GMT + 2) Афины' ,
      '3' => '(GMT + 3) Москва' ,
      '4' => '(GMT + 4) Кабул' ,
      '5' => '(GMT + 5) Екатеринбург' ,
      '6' => '(GMT + 6) Астана' ,
      '7' => '(GMT + 7) Бангкок' ,
      '8' => '(GMT + 8) Перт' ,
      '9' => '(GMT + 9) Сеул' ,
      '10' => '(GMT + 10) Брисбан' ,
      '11' => '(GMT + 11) Соломон. ост.' ,
      '12' => '(GMT + 12) Окленд'
  ),

      'dom_cal_month_long' => array (
      '0' => '' ,
      '1' => 'Январь' ,
      '2' => 'Февраль' ,
      '3' => 'Март' ,
      '4' => 'Апрель' ,
      '5' => 'Май' ,
      '6' => 'Июнь' ,
      '7' => 'Июль' ,
      '8' => 'Август' ,
      '9' => 'Сентябрь' ,
      '10' => 'Октябрь' ,
      '11' => 'Ноябрь' ,
      '12' => 'Декабрь'
  ),

'dom_meridiem_lowercase'=> array(
'am'=>"am",
'pm'=>"pm"
  ),
  
'dom_meridiem_uppercase'=> array(
'AM'=>'AM',
'PM'=>'PM'
  ),
  
'dom_report_types' => array (
'tabular' => 'Строки и столбцы' ,
'summary' => 'Итог' ,
'detailed_summary' => 'Детальный итог'    ,
  ),
        
'dom_email_types' => array (
'out' => 'Отослано' ,
'archived' => 'Архив' ,
'draft' => 'Черновик' ,
'inbound' => 'Входящее'    ,
'campaign'  => 'Кампания'
  ),
	
'dom_email_status' => array (
'archived' => 'Архив' ,
'closed' => 'Закрытое' ,
'draft' => 'В черновиках' ,
'read' => 'Прочитано' ,
'replied' => 'Отвечено' ,
'sent' => 'Отослано' ,
'send_error' => 'Ошибка отсылки' ,
'unread' => 'Не прочитано'    ,
  ),

'dom_email_server_type' => array (
'' => '' ,
'imap' => 'IMAP' ,
'pop3' => 'POP3'    ,
  ),
  
'dom_mailbox_type' => array (
'' => '' ,
'pick' => 'Создать дело/предварительный контакт/контакт' ,
'bug' => 'Добавить ошибку' ,
'support' => 'Создать дело' ,
'contact' => 'Создать контакт'    ,
'sales' => 'Создать предв. контакт' ,
'task' => 'Создать задачу' ,
'bounce' => 'Возврат'    ,
	),
	
'dom_email_distribution' => array (
'' => '' ,
'direct' => 'Прямое назначение' ,
'roundRobin' => 'По циклу' ,
'leastBusy' => 'Наименее занятой'    ,
	),
	
'dom_email_errors' => array (
1 => 'Выбирайте только одного пользователя, когда напрямую работаете с назначенными записями.',
2 => 'Вы должны назначать только выбранные записи, когда напрямую работаете с назначенными записями.',
	),
	
'dom_email_bool' => array (
'bool_true' => 'Да' ,
'bool_false' => 'Нет'    ,
	),
	
'dom_int_bool' => array (
1 => 'Да',
0 => 'Нет',
	),
	
'dom_switch_bool' => array (
'on' => 'Да' ,
'off' => 'Нет' ,
'' => 'Нет' ,
        ),
        
'dom_email_link_type'	=> array(
'' => '' ,
'sugar' => 'Почтовый клиент SugarCRM' ,
'mailto' => 'Внешний почтовый клиент'
        ),

'dom_email_editor_option' => array (
'' => '' ,
'html' => 'HTML-сообщение' ,
'plain' => 'Текстовое сообщение'
        ),

'schedulers_times_dom' => array (
'not run' => 'Время запуска прошло, не выполняем.' ,
'ready' => 'Готово' ,
'in progress' => 'В процессе' ,
'failed' => 'Неудачно' ,
'completed' => 'Завершено' ,
'no curl' => 'Не запускалось: cURL не доступен'    ,
	),

'forecast_schedule_status_dom' =>  array (
'Active' => 'Активен' ,
'Inactive' => 'Не активен' ,
  ),
  
'forecast_type_dom' =>  array (
'Direct' => 'Прямой' ,
'Rollup' => 'Сдвинутый'    ,
  ),

'document_category_dom' =>   	array (
'' => '' ,
'Marketing' => 'Маркетинг' ,
'Knowledege Base' => 'База знаний' ,
'Sales' => 'Продажи'    ,
  ),

'document_subcategory_dom' =>  	array (
'' => '' ,
'Marketing Collateral' => 'Маркетинг' ,
'Product Brochures' => 'Брошюры продуктов' ,
'FAQ' => 'ЧаВо' ,
  ),

'document_status_dom' =>   	array (
'Active' => 'Активен' ,
'Draft' => 'Набросок' ,
'FAQ' => 'ЧаВо' ,
'Expired' => 'Просрочен' ,
'Under Review' => 'Рассматривается' ,
'Pending' => 'В ожидании' ,
  ),
  
'document_template_type_dom' =>   array(
'' => '' ,
'mailmerge' => 'Слияние писем' ,
'eula' => 'EULA' ,
'nda' => 'NDA' ,
'license' => 'Лицензионное соглашение'    ,
  ),
  
'dom_meeting_accept_options' =>   	array (
'accept' => 'Принят' ,
'decline' => 'Отклонен' ,
'tentative' => 'Условно'    ,
  ),
  
'dom_meeting_accept_status' =>   	array (
'accept' => 'Принят' ,
'decline' => 'Отклонен' ,
'tentative' => 'Условно'    ,
'none' => 'Нет'    ,
  ),



// deferred
/* QUEUES MODULE DOMs
'queue_type_dom' => array(
'Users' => 'משתמשים' ,
'Mailbox' => 'Mailbox',
),
*/

//prospect list type dom
'prospect_list_type_dom' =>   array (
'default' => 'По умолчанию' ,
'seed' => 'Начальная' ,
'exempt_domain' => 'Спрятанное - по домену' ,
'exempt_address' => 'Спрятанное - по email-адресу' ,
'exempt' => 'Свободная' ,
'test' => 'Проверочная'    ,
  ),

'email_marketing_status_dom' =>   array (
'' => '' ,
'active' => 'Активна' ,
'inactive' => 'Не активна'    ,
  ),

'campainglog_activity_type_dom' =>   array (
'' => '' ,
'targeted' => 'Отосланные/попытки отправки' ,
'send error' => 'Ошибки - другое' ,
'invalid email' => 'Ошибки - неверный адрес' ,
'link' => 'Кол-во нажатий на ссылку' ,
'viewed' => 'Просмотренные сообщения' ,
'removed' => 'Кол-во отписок' ,
'lead' => 'Созданные предв. контакты' ,
'contact' => 'Созданные контакты'    ,
  ),

'campainglog_target_type_dom' =>   array (
'Contacts' => 'אנשי קשר' ,
'Users' => 'משתמשים' ,
'Prospects' => 'Адресаты' ,
'Leads' => 'Предв. контакты'    ,
  ),

'merge_operators_dom' => array (
'like'=>'Содержит',
'exact'=>'Точно',
'start'=>'Начинается с',
  ),

'custom_fields_merge_dup_dom'=> array (
0=>'Выкл.',
1=>'Вкл.',
  ),

'navigation_paradigms' => array(
'm'=>'Модули',
'gm'=>'Сгруппированные модули',
  ),
  
'projects_priority_options' => array (
'high' => 'Высокий',
'medium' => 'Средний',
'low' => 'Низкий',
  ),

'projects_status_options' => array (
'notstarted' => 'Не начат',
'inprogress' => 'В процессе',
'completed' => 'Завершен',
  ),

);


$app_strings = array (

'ERR_CREATING_FIELDS' => 'Ошибка заполнения полей с подробностями: ' ,
'ERR_CREATING_TABLE' => 'Ошибка создания таблицы: ' ,
'ERR_DELETE_RECORD' => 'Номер записи надо определить для удаления контакта.' ,
'ERR_EXPORT_DISABLED' => 'Экспорт выключен.',
'ERR_EXPORT_TYPE' => 'Ошибка, экспорт не выполнен. ',
'ERR_INVALID_AMOUNT' => 'Пожалуйста, введите правильную сумму.' ,
'ERR_INVALID_DATE_FORMAT' => 'Формат даты должен быть: гггг-мм-дд' ,
'ERR_INVALID_DATE' => 'Пожалуйста, введите правильную дату.' ,
'ERR_INVALID_DAY' => 'Пожалуйста, введите правильный день.' ,
'ERR_INVALID_EMAIL_ADDRESS' => 'Неверный адрес e-mail.' ,
//'ERR_INVALID_FILE_REFERENCE' => 'Неверная ссылка на файл.',
// ERR_INVALID_FILE_REFERENCE - отображается в ANSI-кодировке
'ERR_INVALID_FILE_REFERENCE' => 'INVALID FILE REFERENCE.',
'ERR_INVALID_HOUR' => 'Пожалуйста, введите правильный час.' ,
'ERR_INVALID_MONTH' => 'Пожалуйста, введите правильный месяц.' ,
'ERR_INVALID_TIME' => 'Пожалуйста, введите правильное время.' ,
'ERR_INVALID_YEAR' => 'Пожалуйста, введите правильные 4 цифры года.' ,
'ERR_NEED_ACTIVE_SESSION' => 'Для экспорта контента необходима активная сессия.',
'ERR_NOT_ADMIN' => 'Неавторизованный доступ к панели администратора.',
'ERR_MISSING_REQUIRED_FIELDS' => 'Пропущено обязательное поле:' ,
'ERR_INVALID_VALUE' => 'Неверное значение:',
'ERR_NO_SUCH_FILE' =>'Файл не существует.',
'ERR_NO_SINGLE_QUOTE' => 'Не может использовать одинарные кавычки для ',
'ERR_NOTHING_SELECTED' => 'Пожалуйста, сделайте выбор перед тем, как продолжить.' ,
'ERR_OPPORTUNITY_NAME_DUPE' => 'Сделка с именем %s уже существует.  Пожалуйста, введите другое имя.' ,
'ERR_OPPORTUNITY_NAME_MISSING' => 'Имя сделки не указано. Пожалуйста, введите имя сделки.' ,
'ERR_POTENTIAL_SEGFAULT' => 'A potential Apache segmentation fault was detected.  Please notify your system administrator to confirm this problem and have her/him report it to SugarCRM.',
'ERR_SELF_REPORTING' => 'Сотрудник не может отчитываться перед самим собой.' ,
'ERR_SINGLE_QUOTE' => 'В данном поле нельзя использовать одинарные кавычки. Пожалуйста, измените значение.',
'ERR_SQS_NO_MATCH_FIELD' => 'неверно для поля: ' ,
'ERR_SQS_NO_MATCH' => 'Не выбрано' ,


'LBL_ACCOUNT' => 'Контрагент' ,
'LBL_ACCOUNTS' => 'לקוחות' ,
'LBL_ACCUMULATED_HISTORY_BUTTON_KEY' => 'H' ,
'LBL_ACCUMULATED_HISTORY_BUTTON_LABEL' => 'Смотреть краткий отчет' ,
'LBL_ACCUMULATED_HISTORY_BUTTON_TITLE' => 'Смотреть краткий отчет [Alt+H]' ,
'LBL_ADD_BUTTON_KEY' => 'A' ,
'LBL_ADD_BUTTON_TITLE' => 'Добавить [Alt+A]' ,
'LBL_ADD_BUTTON' => 'Добавить' ,
'LBL_ADD_DOCUMENT' => 'Добавить документ' ,
'LBL_ADD_TO_PROSPECT_LIST_BUTTON_KEY' => 'L' ,
'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL' => 'Добавить в список адресатов' ,
'LBL_ADD_TO_PROSPECT_LIST_BUTTON_TITLE' => 'Добавить в список адресатов' ,
'LBL_ADDITIONAL_DETAILS_CLOSE_TITLE' => 'Закрыть' ,
'LBL_ADDITIONAL_DETAILS_CLOSE' => 'Закрыть' ,
'LBL_ADDITIONAL_DETAILS' => 'Подробности' ,
'LBL_ADMIN' => 'Администрирование' ,
'LBL_ALT_HOT_KEY' => 'Alt+' ,
'LBL_ARCHIVE' => 'Архивация' ,
'LBL_ASSIGNED_TO_USER' => 'Ответственный(ая)' ,
'LBL_ASSIGNED_TO' => 'Ответственный(ая): ' ,
'LBL_BACK' => 'Назад' ,
'LBL_BILL_TO_ACCOUNT' => 'Выставлен счет' ,
'LBL_BILL_TO_CONTACT' => 'Выставлено для контактного лица' ,
'LBL_BROWSER_TITLE' => 'Система SugarCRM' ,
'LBL_BUGS' => 'Ошибки' ,
'LBL_BY' => 'для' ,
'LBL_CALLS' => 'שיחות' ,
'LBL_CAMPAIGNS_SEND_QUEUED' => 'Разослать очередь сообщений кампании' ,
'LBL_CANCEL_BUTTON_KEY' => 'X' ,
'LBL_CANCEL_BUTTON_LABEL' => 'Отказаться' ,
'LBL_CANCEL_BUTTON_TITLE' => 'Отказаться [Alt+X]' ,
'LBL_CASE' => 'Дело' ,
'LBL_CASES' => 'Дела' ,
'LBL_CHANGE_BUTTON_KEY' => 'G' ,
'LBL_CHANGE_BUTTON_LABEL' => 'Изменять' ,
'LBL_CHANGE_BUTTON_TITLE' => 'Изменить [Alt+G]' ,
'LBL_CHARSET' => 'windows-1251' ,
'LBL_CHECKALL' => 'Отметить все' ,
'LBL_CLEAR_BUTTON_KEY' => 'C' ,
'LBL_CLEAR_BUTTON_LABEL' => 'Очистить' ,
'LBL_CLEAR_BUTTON_TITLE' => 'Очистить [Alt+C]' ,
'LBL_CLEARALL' => 'Очистить все' ,
'LBL_CLOSE_WINDOW' => 'Закрыть окно' ,
'LBL_CLOSEALL_BUTTON_KEY' => 'Q' ,
'LBL_CLOSEALL_BUTTON_LABEL' => 'Закрыть все' ,
'LBL_CLOSEALL_BUTTON_TITLE' => 'Закрыть все [Alt+I]' ,
'LBL_CLOSE_AND_CREATE_BUTTON_LABEL' => 'Закрыть и создать новую',
'LBL_CLOSE_AND_CREATE_BUTTON_TITLE' => 'Закрыть и создать новую [Alt+C]',
'LBL_CLOSE_AND_CREATE_BUTTON_KEY' => 'C',
'LBL_COMPOSE_EMAIL_BUTTON_KEY' => 'L' ,
'LBL_COMPOSE_EMAIL_BUTTON_LABEL' => 'Сформировать E-mail' ,
'LBL_COMPOSE_EMAIL_BUTTON_TITLE' => 'Сформировать E-mail [Alt+L]' ,
'LBL_CONTACT_LIST' => 'Список контактов' ,
'LBL_CONTACT' => 'Контакт' ,
'LBL_CONTACTS' => 'אנשי קשר' ,
'LBL_CREATE_BUTTON_LABEL' => 'Создать' ,
'LBL_CREATED_BY_USER' => 'Создано пользователем' ,
'LBL_CREATED' => 'Создано' ,
'LBL_CURRENT_USER_FILTER' => 'Только мои записи:' ,
'LBL_DATE_ENTERED' => 'Создано:' ,
'LBL_DATE_MODIFIED' => 'Последнее изменение:' ,
'LBL_DELETE_BUTTON_KEY' => 'D' ,
'LBL_DELETE_BUTTON_LABEL' => 'Удалить' ,
'LBL_DELETE_BUTTON_TITLE' => 'Удалить [Alt+D]' ,
'LBL_DELETE_BUTTON' => 'Удалить' ,
'LBL_DELETE' => 'Удалить' ,
'LBL_DELETED' => 'Удалено' ,
'LBL_DIRECT_REPORTS' => 'Отчеты' ,
'LBL_DONE_BUTTON_KEY' => 'X' ,
'LBL_DONE_BUTTON_LABEL' => 'Сделано' ,
'LBL_DONE_BUTTON_TITLE' => 'Сделать [Alt+X]' ,
'LBL_DST_NEEDS_FIXIN' => 'Приложению требуется исправление дневного времени. Пожалуйста, перейдите по ссылке <a href="index.php?module=Administration&action=DstFix">Восстановление</a> в панели администратора и используйте ссылку "Исправление дневного времени".' ,
'LBL_DUPLICATE_BUTTON_KEY' => 'U' ,
'LBL_DUPLICATE_BUTTON_LABEL' => 'Дублировать' ,
'LBL_DUPLICATE_BUTTON_TITLE' => 'Дублировать [Alt+U]' ,
'LBL_DUPLICATE_BUTTON' => 'Дублировать' ,
'LBL_EDIT_BUTTON_KEY' => 'E' ,
'LBL_EDIT_BUTTON_LABEL' => 'Править' ,
'LBL_EDIT_BUTTON_TITLE' => 'Править [Alt+E]' ,
'LBL_EDIT_BUTTON' => 'Править' ,
'LBL_VIEW_BUTTON_KEY' => 'V' ,
'LBL_VIEW_BUTTON_LABEL' => 'Просмотр' ,
'LBL_VIEW_BUTTON_TITLE' => 'Просмотр [Alt+V]' ,
'LBL_VIEW_BUTTON' => 'Просмотр' ,
'LBL_EMAIL_PDF_BUTTON_KEY' => 'M' ,
'LBL_EMAIL_PDF_BUTTON_LABEL' => 'Отослать в формате PDF' ,
'LBL_EMAIL_PDF_BUTTON_TITLE' => 'Отослать в формате PDF [Alt+M]' ,
'LBL_EMAILS' => 'E-mail' ,
'LBL_EMPLOYEES' => 'Сотрудники' ,
'LBL_ENTER_DATE' => 'Ввод даты' ,
'LBL_EXPORT_ALL' => 'Экспортировать всё' ,
'LBL_EXPORT' => 'Экспорт' ,
'LBL_GO_BUTTON_LABEL' => 'Поехали ...',
'LBL_HIDE' => 'Скрыть' ,
'LBL_ID' => 'Код' ,
'LBL_IMPORT_PROSPECTS' => 'Импорт адресатов' ,
'LBL_IMPORT' => 'Импорт' ,
'LBL_IMPORT_STARTED' => 'Импорт начат: ',
'LBL_MISSING_CUSTOM_DELIMITER' => 'Должен быть указан разделитель.',
'LBL_LAST_VIEWED' => 'Последние просмотры' ,
'LBL_LEADS' => 'Предварительные контакты' ,
'LBL_CAMPAIGN' => 'Кампания:',
'LBL_CAMPAIGN_ID'=>'Код кампании',

'LBL_LIST_ACCOUNT_NAME' => 'Имя контрагента' ,
'LBL_LIST_ASSIGNED_USER' => 'Пользователь' ,
'LBL_LIST_CONTACT_NAME' => 'Контактное имя' ,
'LBL_LIST_CONTACT_ROLE' => 'Контактная роль' ,
'LBL_LIST_EMAIL' => 'E-mail' ,
'LBL_LIST_NAME' => 'Имя' ,
'LBL_LIST_OF' => 'от' ,
'LBL_LIST_PHONE' => 'Тел.' ,
'LBL_LIST_USER_NAME' => 'Логин' ,
'LBL_LISTVIEW_MASS_UPDATE_CONFIRM' => 'Вы действительно хотите обновить весь список?' ,
'LBL_LISTVIEW_NO_SELECTED' => 'Пожалуйста, выберите хотя бы одну запись' ,
'LBL_LISTVIEW_TWO_REQUIRED' => 'Пожалуйста, выберите хотя бы 2 записи.',
'LBL_LISTVIEW_OPTION_CURRENT' => 'Текущая страница' ,
'LBL_LISTVIEW_OPTION_ENTIRE' => 'Весь список' ,
'LBL_LISTVIEW_OPTION_SELECTED' => 'Выбранные записи' ,
'LBL_LISTVIEW_SELECTED_OBJECTS' => 'Выбрано:' ,

'LBL_LOCALE_NAME_EXAMPLE_FIRST' => 'Афиноген',
'LBL_LOCALE_NAME_EXAMPLE_LAST' => 'Пупкин',
'LBL_LOCALE_NAME_EXAMPLE_SALUTATION' => 'Гн.',

'LBL_LOGOUT' => 'Выход' ,
'LBL_MAILMERGE_KEY' => 'M' ,
'LBL_MAILMERGE' => 'Слияние писем' ,
'LBL_MASS_UPDATE' => 'Массовое обновление' ,
'LBL_MEETINGS' => 'פגישות' ,
'LBL_MEMBERS' => 'Члены' ,
'LBL_MODIFIED_BY_USER' => 'Изменено пользователем' ,
'LBL_MODIFIED' => 'Изменено' ,
'LBL_MY_ACCOUNT' => 'Мои настройки' ,
'LBL_NAME' => 'Имя' ,
'LBL_NEW_BUTTON_KEY' => 'N' ,
'LBL_NEW_BUTTON_LABEL' => 'Создать' ,
'LBL_NEW_BUTTON_TITLE' => 'Создать [Alt+N]' ,
'LBL_NEXT_BUTTON_LABEL' => 'Далее' ,
'LBL_NONE' => '--Нет--' ,
'LBL_NOTES' => 'Заметки' ,
'LBL_OPENALL_BUTTON_KEY' => 'O' ,
'LBL_OPENALL_BUTTON_LABEL' => 'Открыть все' ,
'LBL_OPENALL_BUTTON_TITLE' => 'Открыть все [Alt+O]' ,
'LBL_OPENTO_BUTTON_KEY' => 'T' ,
'LBL_OPENTO_BUTTON_LABEL' => 'Открыть для: ' ,
'LBL_OPENTO_BUTTON_TITLE' => 'Открыть для: [Alt+T]' ,
'LBL_OPPORTUNITIES' => 'עסקאות' ,
'LBL_OPPORTUNITY_NAME' => 'Имя сделки' ,
'LBL_OPPORTUNITY' => 'Сделка' ,
'LBL_OR' => 'OR' ,
'LBL_PERCENTAGE_SYMBOL' => '%' ,
'LBL_PRODUCT_BUNDLES' => 'Набор продуктов' ,
'LBL_PRODUCT_BUNDLES' => 'Набор продуктов' ,
'LBL_PRODUCTS' => 'Продукты' ,
'LBL_PROJECT_TASKS' => 'משימות הפרוייקט' ,
'LBL_PROJECTS' => 'פרוייקטים' ,
'LBL_PROJECTS' => 'פרוייקטים' ,
'LBL_QUOTE_TO_OPPORTUNITY_KEY' => 'O' ,
'LBL_QUOTE_TO_OPPORTUNITY_LABEL' => 'Создать сделку из ссылки' ,
'LBL_QUOTE_TO_OPPORTUNITY_TITLE' => 'Создать сделку из ссылки [Alt+O]' ,
'LBL_QUOTES_SHIP_TO' => 'Сметы для' ,
'LBL_QUOTES' => 'Сметы' ,
'LBL_RELATED_RECORDS' => 'Родственные записи' ,
'LBL_REMOVE' => 'Удалить' ,
'LBL_REQUIRED_SYMBOL' => '*' ,
'LBL_SAVE_BUTTON_KEY' => 'S' ,
'LBL_SAVE_BUTTON_LABEL' => 'Сохранить' ,
'LBL_SAVE_BUTTON_TITLE' => 'Сохранить [Alt+S]' ,
'LBL_SAVE_AS_BUTTON_KEY' => 'A',
'LBL_SAVE_AS_BUTTON_LABEL' => 'Сохранить как',
'LBL_SAVE_AS_BUTTON_TITLE' => 'Сохранить как [Alt+A]',
'LBL_FULL_FORM_BUTTON_KEY' => 'F',
'LBL_FULL_FORM_BUTTON_LABEL' => 'Показать все поля формы',
'LBL_FULL_FORM_BUTTON_TITLE' => 'Показать все поля формы [Alt+F]',
'LBL_SAVE_NEW_BUTTON_KEY' => 'V' ,
'LBL_SAVE_NEW_BUTTON_LABEL' => 'Сохранить и создать новый' ,
'LBL_SAVE_NEW_BUTTON_TITLE' => 'Сохранить и создать новый [Alt+V]' ,
'LBL_SEARCH_BUTTON_KEY' => 'Q' ,
'LBL_SEARCH_BUTTON_LABEL' => 'Искать' ,
'LBL_SEARCH_BUTTON_TITLE' => 'Искать [Alt+Q]' ,
'LBL_SEARCH' => 'Поиск' ,
'LBL_SELECT_BUTTON_KEY' => 'T' ,
'LBL_SELECT_BUTTON_LABEL' => 'Выбрать' ,
'LBL_SELECT_BUTTON_TITLE' => 'Выбрать [Alt+T]' ,
'LBL_SELECT_CONTACT_BUTTON_KEY' => 'T' ,
'LBL_SELECT_CONTACT_BUTTON_LABEL' => 'Выбрать контакт' ,
'LBL_SELECT_CONTACT_BUTTON_TITLE' => 'Выбрать контакт [Alt+T]' ,
'LBL_GRID_SELECTED_FILE' => 'выбранный файл',
'LBL_GRID_SELECTED_FILES' => 'выбранные файлы',
'LBL_SELECT_REPORTS_BUTTON_LABEL' => 'Выбрать отчет' ,
'LBL_SELECT_REPORTS_BUTTON_TITLE' => 'Выбрать отчет' ,
'LBL_SELECT_USER_BUTTON_KEY' => 'U' ,
'LBL_SELECT_USER_BUTTON_LABEL' => 'Выбрать пользователя' ,
'LBL_SELECT_USER_BUTTON_TITLE' => 'Выбрать пользователя [Alt+U]' ,
'LBL_SERVER_RESPONSE_RESOURCES' => 'Ресурсы, использованные для создания данной страницы (запросы, файлы)' ,
'LBL_SERVER_RESPONSE_TIME_SECONDS' => 'секунд.' ,
'LBL_SERVER_RESPONSE_TIME' => 'Время ответа сервера:' ,
'LBL_SHIP_TO_ACCOUNT' => 'Отправлено контрагенту' ,
'LBL_SHIP_TO_CONTACT' => 'Отправлено для контактного лица' ,
'LBL_SHORTCUTS' => 'Меню' ,
'LBL_SHOW' => 'Показать' ,
'LBL_SQS_INDICATOR' => '' ,
'LBL_STATUS_UPDATED' => 'Ваш статус для этого события был обновлен!' ,
'LBL_STATUS' => 'Статус:' ,
'LBL_SUBJECT' => 'Тема' ,
'LBL_SYNC' => 'Синхронизация' ,
'LBL_SYNC' => 'Синхронизация' ,
'LBL_TABGROUP_ALL' => 'Все',
'LBL_TABGROUP_ACTIVITIES' => 'Мероприятия',
'LBL_TABGROUP_COLLABORATION' => 'Cовместная работа',
'LBL_TABGROUP_HOME' => 'ראשי',
'LBL_TABGROUP_MARKETING' => 'Маркетинг',
'LBL_TABGROUP_MY_PORTALS' => 'Мои порталы',
'LBL_TABGROUP_OTHER' => 'Другое',
'LBL_TABGROUP_REPORTS' => 'Отчеты',
'LBL_TABGROUP_SALES' => 'Продажи',
'LBL_TABGROUP_SUPPORT' => 'Поддержка',
'LBL_TABGROUP_TOOLS' => 'Сервис',
'LBL_TASKS' => 'משימות' ,
'LBL_TEAMS_LINK' => 'Команда' ,
'LBL_THOUSANDS_SYMBOL' => 'K' ,
'LBL_TRACK_EMAIL_BUTTON_KEY' => 'K' ,
'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Архив E-mail' ,
'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Архив E-mail [Alt+K]' ,
'LBL_UNAUTH_ADMIN' => 'Неавторизованный доступ к администрированию' ,
'LBL_UNDELETE_BUTTON_LABEL' => 'Восстановить' ,
'LBL_UNDELETE_BUTTON_TITLE' => 'Восстановить [Alt+D]' ,
'LBL_UNDELETE_BUTTON' => 'Восстановить' ,
'LBL_UNDELETE' => 'Восстановить' ,
'LBL_UNSYNC' => 'Рассинхронизация' ,
'LBL_UPDATE' => 'Обновить' ,
'LBL_USER_LIST' => 'Список пользователей ' ,
'LBL_USERS_SYNC' => 'Синхронизация пользователей' ,
'LBL_USERS' => 'משתמשים' ,
'LBL_VIEW_PDF_BUTTON_KEY' => 'P' ,
'LBL_VIEW_PDF_BUTTON_LABEL' => 'Печать в PDF-формате' ,
'LBL_VIEW_PDF_BUTTON_TITLE' => 'Печать в PDF-формате [Alt+P]' ,

'LNK_ABOUT' => 'О нас' ,
'LNK_ADVANCED_SEARCH' => 'Расширенный поиск' ,
'LNK_BASIC_SEARCH' => 'Базовый поиск' ,
'LNK_SAVED_VIEWS' => 'Сохраненные условия поиска',
'LNK_DELETE_ALL' => 'убр. все' ,
'LNK_DELETE' => 'удал.' ,
'LNK_EDIT' => 'править' ,
'LNK_GET_LATEST' => 'Получить последнюю версию' ,
'LNK_GET_LATEST_TOOLTIP' => 'Заменить последней версией' ,
'LNK_HELP' => 'Помощь' ,
'LNK_LIST_END' => 'Конец' ,
'LNK_LIST_NEXT' => 'След.' ,
'LNK_LIST_PREVIOUS' => 'Пред.' ,
'LNK_LIST_RETURN' => 'Вернуться к списку' ,
'LNK_LIST_START' => 'Начало' ,
'LNK_LOAD_SIGNED' => 'Подпись' ,
'LNK_LOAD_SIGNED_TOOLTIP' => 'Заменить подписанным документом' ,
'LNK_PRINT' => 'Печать' ,
'LNK_REMOVE' => 'убр.' ,
'LNK_RESUME' => 'Продолжить' ,
'LNK_VIEW_CHANGE_LOG' => 'Смотреть журнал изменений' ,

'NTC_CLICK_BACK' => 'Пожалуйста, нажмите на кнопку возврата в браузере и исправьте ошибку.' ,
'NTC_DATE_FORMAT' => '(yyyy-mm-dd)' ,
'NTC_DATE_TIME_FORMAT' => '(yyyy-mm-dd 24:00)' ,
'NTC_DELETE_CONFIRMATION_MULTIPLE' => 'Вы уверены, что хотите удалить выбранные(ую) записи(ь)?' ,
'NTC_DELETE_CONFIRMATION' => 'Вы уверены, что хотите удалить эту запись?' ,
'NTC_LOGIN_MESSAGE' => 'Пожалуйста, введите Ваше имя и пароль' ,
'NTC_NO_ITEMS_DISPLAY' => 'нет' ,
'NTC_REMOVE_CONFIRMATION' => 'Вы уверены, что хотите удалить эту связь?' ,
'NTC_REQUIRED' => '-  поля, обязательные для заполнения' ,
'NTC_SUPPORT_SUGARCRM' => 'Поддержка системы SugarCRM пожертвованиями через PayPal - быстро, свободно и безопасно!' ,
'NTC_TIME_FORMAT' => '(24:00)' ,
'NTC_WELCOME' => 'Добро пожаловать,' ,
'NTC_YEAR_FORMAT' => '(yyyy) ' ,
'LOGIN_LOGO_ERROR' => 'Пожалуйста, замените логотипы SugarCRM' ,
'ERROR_FULLY_EXPIRED' => 'Ваша лицензия заканчивается через 30 дней и должна быть обновлена. Только администраторы могут войти в систему.' ,
'ERROR_LICENSE_EXPIRED' => 'Ваша лицензия SugarCRM нуждается в обновлении. Только администраторы могут войти в систему.'  ,
'ERROR_LICENSE_VALIDATION'=> 'Ваша лицензия SugarCRM нуждается в подтверждении. Только администраторы могут войти в систему',
'ERROR_NO_RECORD' => 'Ошибка получения записи. Вероятно эта запись удалена, или у вас недостаточно прав для ее просмотра.',
'LBL_DUP_MERGE'=>'Найдены дублирующиеся записи',
'LBL_MANAGE_SUBSCRIPTIONS'=>'Управление подписками',
'LBL_MANAGE_SUBSCRIPTIONS_FOR'=>'Управление подписками для ',
'LBL_SUBSCRIBE'=>'Подписаться',
'LBL_UNSUBSCRIBE'=>'Отписаться',

     // Ajax status strings
    'LBL_LOADING' => 'Загрузка ...',
    'LBL_SAVING_LAYOUT' => 'Сохранение макета ...',
    'LBL_SAVED_LAYOUT' => 'Макет сохранен',
    'LBL_SAVED' => 'Сохранено',
    'LBL_SAVING' => 'Сохраняется',
    'LBL_FAILED' => 'Ошибка сохранения!',
    'LBL_DISPLAY_COLUMNS' => 'Отображать колонки',
    'LBL_HIDE_COLUMNS' => 'Спрятать колонки',
    'LBL_SEARCH_CRITERIA' => 'Условие поиска',
    'LBL_SAVED_VIEWS' => 'Saved Views',
    'LBL_PROCESSING_REQUEST'=>'Выполняется ...',
    'LBL_REQUEST_PROCESSED'=>'Готово',

    'LBL_MERGE_DUPLICATES'  => 'Объединить дубликаты',
    'LBL_SAVED_SEARCH_SHORTCUT' => 'Сохраненные условия поиска',
    'LBL_SEARCH_POPULATE_ONLY'=> 'Выполните поиск, используя вышеуказанную форму',
    'LBL_DETAILVIEW'=>'Подробно',
    'LBL_LISTVIEW'=>'Список',
    'LBL_EDITVIEW'=>'Редактирование',
    'LBL_SEARCHFORM'=>'Форма поиска',
    'LBL_SAVED_SEARCH_ERROR' => 'Пожалуйста, укажите название сохраняемого условия.',
    'LBL_DISPLAY_LOG' => 'Показать журнал',
    'ERROR_JS_ALERT_SYSTEM_CLASS' => 'Система',
    'ERROR_JS_ALERT_TIMEOUT_TITLE' => 'Продолжительность сессии',
    'ERROR_JS_ALERT_TIMEOUT_MSG_1' => 'Ваша сессия закончится через 2 минуты. Пожалуйста, сохраните разультаты работы.',

    'ERROR_JS_ALERT_TIMEOUT_MSG_2' =>'Время вашей сессии истекло.',
    'MSG_JS_ALERT_MTG_REMINDER_AGENDA' => "\nПовестка: ",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING' => 'Встреча',
    'MSG_JS_ALERT_MTG_REMINDER_CALL' => 'Звонок',
    'MSG_JS_ALERT_MTG_REMINDER_TIME' => 'Время: ',
    'MSG_JS_ALERT_MTG_REMINDER_LOC' => 'Место: ',
    'MSG_JS_ALERT_MTG_REMINDER_DESC' => 'Описание: ',
    'MSG_JS_ALERT_MTG_REMINDER_MSG' => "\nНажмите кнопку 'ОК' для просмотра этой встречи или нажмите на кнопку 'Отмена' для того, чтобы отклонить это сообщение.",

    // contextMenu strings
    'LBL_ADD_TO_FAVORITES' => 'Добавить в избранное',
    'LBL_CREATE_CONTACT' => 'Создать контакт',
    'LBL_CREATE_CASE' => 'Создать дело',
    'LBL_CREATE_NOTE' => 'Создать примечание',
    'LBL_CREATE_OPPORTUNITY' => 'Создать сделку',
    'LBL_SCHEDULE_CALL' => 'Запланировать звонок',
    'LBL_SCHEDULE_MEETING' => 'Запланировать встречу',
    'LBL_CREATE_TASK' => 'Создать задачу',
    'LBL_REMOVE_FROM_FAVORITES' => 'Удалить из избранного',
    
    //web to lead
    'LBL_GENERATE_WEB_TO_LEAD_FORM' => 'Создать форму',
    'LBL_SAVE_WEB_TO_LEAD_FORM' =>'Сохранить Web-форму предв. контакта',

    'LBL_PLEASE_SELECT' => 'Пожалуйста, выберите',
    'LBL_REDIRECT_URL'=>'Переадресация URL',
    'LBL_RELATED_CAMPAIGN' =>'Связано с кампанией',
    'LBL_ADD_ALL_LEAD_FIELDS' => 'Добавить все поля',
    'LBL_REMOVE_ALL_LEAD_FIELDS' => 'Удалить все поля',
    'LBL_ONLY_IMAGE_ATTACHMENT' => 'Возможно добавить только графическое вложение',
    'LBL_TRAINING' => 'Обучение',

);
?>