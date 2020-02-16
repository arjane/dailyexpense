<?php

return [
		'user-management' => [		'title' => 'User management',		'fields' => [		],	],
		'roles' => [		'title' => 'Roles',		'fields' => [			'title' => 'Title',		],	],
		'users' => [		'title' => 'Users',		'fields' => [			'name' => 'Name',			'email' => 'Email',			'password' => 'Password',			'role' => 'Role',			'remember-token' => 'Remember token',		],	],
		'expense-management' => [		'title' => 'Expense Management',		'fields' => [		],	],
		'expense-category' => [		'title' => 'Expense Categories',		'fields' => [			'name' => 'Name',			'created-by' => 'Created by',		],	],
		'income-category' => [		'title' => 'Income categories',		'fields' => [			'name' => 'Name',			'created-by' => 'Created by',		],	],
		'income' => [		'title' => 'Income',		'fields' => [			'income-category' => 'Income Category',			'entry-date' => 'Entry date',			'amount' => 'Amount',			'created-by' => 'Created by',		],	],
		'expense' => [		'title' => 'Expenses',		'fields' => [			'expense-category' => 'Expense Category',			'entry-date' => 'Entry date',			'amount' => 'Amount',			'created-by' => 'Created by',		],	],
		'monthly-report' => [		'title' => 'Monthly report',		'fields' => [		],	],
		'currency' => [		'title' => 'Currency',		'fields' => [			'title' => 'Title',			'symbol' => 'Symbol',			'money-format' => 'Money format',			'created-by' => 'Created by',		],	],
	'qa_create' => 'Létrehozás',
	'qa_save' => 'Mentés',
	'qa_edit' => 'Szerkesztés',
	'qa_view' => 'Megtekintés',
	'qa_update' => 'Frissítés',
	'qa_list' => 'Lista',
	'qa_no_entries_in_table' => 'Nincs bejegyzés a táblában',
	'qa_logout' => 'Kijelentkezés',
	'qa_add_new' => 'Új hozzáadása',
	'qa_are_you_sure' => 'Biztosan így legyen?',
	'qa_back_to_list' => 'Vissza a listához',
	'qa_dashboard' => 'Vezérlőpult',
	'qa_delete' => 'Törlés',
	'qa_custom_controller_index' => 'Egyedi vezérlő index.',
	'qa_restore' => 'Visszaállítás',
	'qa_permadel' => 'Végleges törlés',
	'qa_all' => 'Összes',
	'qa_trash' => 'Törlés',
	'qa_delete_selected' => 'Kijelölt(ek) törlése',
	'qa_category' => 'Kategória',
	'qa_categories' => 'Kategóriák',
	'qa_sample_category' => 'Minta kategória',
	'qa_questions' => 'Kérdések',
	'qa_question' => 'Kérdés',
	'qa_answer' => 'Válasz',
	'qa_sample_question' => 'Minta kérdés',
	'qa_sample_answer' => 'Minta válasz',
	'qa_faq_management' => 'GYIK kezelése',
	'qa_administrator_can_create_other_users' => 'Admin (létrehozhat felhasználókat)',
	'qa_simple_user' => 'Felhasználó',
	'qa_title' => 'Cím',
	'qa_roles' => 'Szerepkörök',
	'qa_role' => 'Szerepkör',
	'qa_user_management' => 'Felhasználók kezelése',
	'qa_users' => 'Felhasználók',
	'qa_user' => 'Felhasználó',
	'qa_name' => 'Név',
	'qa_email' => 'Email',
	'qa_password' => 'Jelszó',
	'qa_permissions' => 'Jogosultságok',
	'qa_user_actions' => 'Tevékenységek',
	'qa_action' => 'Tevékenység',
	'qa_time' => 'Idő',
	'qa_description' => 'Leírás',
	'qa_coupons' => 'Kupon',
	'qa_code' => 'Kód',
	'qa_projects' => 'Projektek',
	'qa_reports' => 'Jelentések',
	'qa_project' => 'Projekt',
	'qa_start_time' => 'Kezdés ideje',
	'qa_end_time' => 'Befejezés ideje',
	'qa_companies' => 'Cégek',
	'qa_company_name' => 'Cég neve',
	'qa_address' => 'Cím',
	'qa_website' => 'Honlap',
	'qa_contacts' => 'Kapcsolatok',
	'qa_company' => 'Cég',
	'qa_first_name' => 'Vezetéknév',
	'qa_last_name' => 'Keresztnév',
	'qa_phone' => 'Telefonszám',
	'qa_phone1' => 'Telefonszám 1',
	'qa_phone2' => 'Telefonszám 2',
	'qa_skype' => 'Skype',
	'qa_photo' => 'Kép (max 8mb)',
	'qa_category_name' => 'Kategória neve',
	'qa_product_management' => 'Termékek kezelése',
	'qa_products' => 'Termékek',
	'qa_product_name' => 'Termék neve',
	'qa_price' => 'Ár',
	'qa_tags' => 'Címkék',
	'qa_tag' => 'Címke',
	'qa_photo1' => 'Kép1',
	'qa_photo2' => 'Kép2',
	'qa_photo3' => 'Kép3',
	'qa_calendar' => 'Naptár',
	'qa_statuses' => 'Állapotok',
	'qa_coupon_management' => 'Kuponok kezelése',
	'qa_time_management' => 'Idő kezelése',
	'qa_expense_category' => 'Kiadás kategória',
	'qa_expense_categories' => 'Kiadás kategóriák',
	'qa_expense_management' => 'Kiadások kezelése',
	'qa_expenses' => 'Kiadások',
	'qa_expense' => 'Kiadás',
	'qa_entry_date' => 'Bejegyzés kelte',
	'qa_amount' => 'Összeg',
	'qa_income_categories' => 'Bevétel kategória',
	'qa_monthly_report' => 'Havi jelentés',
	'qa_contact_management' => 'Kapcsolatok kezelése',
	'qa_task_management' => 'Feladatok kezelése',
	'qa_tasks' => 'Feladatok',
	'qa_status' => 'Állapot',
	'qa_attachment' => 'Csatolmány',
	'qa_due_date' => 'Határidő',
	'qa_assigned_to' => 'Felelős',
	'qa_currency' => 'Pénznem',
	'qa_current_password' => 'Jelenlegi jelszó',
	'qa_new_password' => 'Új jelszó',
	'qa_password_confirm' => 'Új jelszó újra',
	'qa_dashboard_text' => 'Sikeresen bejelentkezett!',
	'qa_forgot_password' => 'Elfelejtette a jelszavát?',
	'qa_remember_me' => 'Emlékezz rám',
	'qa_login' => 'Bejelentkezés',
	'qa_change_password' => 'Jelszó megváltoztatása',
	'qa_csv' => 'CSV',
	'qa_print' => 'Nyomtatás',
	'qa_excel' => 'Excel',
	'qa_copy' => 'Másolás',
	'qa_colvis' => 'Oszlop láthatósága',
	'qa_pdf' => 'PDF',
	'qa_reset_password' => 'Jelszó törlése',
	'qa_reset_password_woops' => '<strong>Hoppá!</strong> Hiba volt a bevitt adatokban:',
	'qa_email_line1' => 'Azért kapta ezt az emailt, mivel  egy kérést kaptunk a fiókja jelszavának a törlésére.',
	'qa_email_line2' => 'Ha nem Ön kezdeményezte, akkor kérjük, hagyja figyelmen kívül ezt az emailt.',
	'qa_email_greet' => 'Üdvözlöm!',
	'qa_email_regards' => 'Üdvözlettel',
	'qa_confirm_password' => 'Jelszó megerősítése',
	'qa_if_you_are_having_trouble' => 'Ha valamiért nem tudna rákattintani ',
	'qa_copy_paste_url_bellow' => 'a gombra, akkor másolja be a böngészőjébe az alábbi URL-t:',
	'qa_please_select' => 'Válasszon',
	'qa_register' => 'Regisztráció',
	'qa_registration' => 'Regisztráció',
	'qa_not_approved_title' => 'Nincs jóváhagyva',
	'qa_not_approved_p' => 'Az adminisztrátor még nem hagyta jóvá a fiókját. Kérjük, várjon türelemmel és próbálja meg később újra.',
	'qa_there_were_problems_with_input' => 'Hiba volt a bevitt adatokban',
	'qa_whoops' => 'Hoppá!',
	'qa_csvImport' => 'CSV importálás',
	'qa_csv_file_to_import' => 'Importálandó CSV fájl',
	'qa_parse_csv' => 'CSV elemzés',
	'qa_remember_token' => 'Emlékezzen a tokenre',
	'qa_action_id' => 'Tevékenység id',
	'qa_campaign' => 'Kampány',
	'qa_campaigns' => 'Kampányok',
	'qa_valid_from' => 'Érvényesség kezdete',
	'qa_valid_to' => 'Érvényesség vége',
	'qa_discount_amount' => 'Kedvezmény összege',
	'qa_discount_percent' => 'Kedvezmény százaléka',
	'qa_coupons_amount' => 'Kupon mennyisége',
	'qa_redeem_time' => 'Beváltás ideje',
	'qa_time_entries' => 'Időbejegyzések',
	'qa_work_type' => 'Munka típusa',
	'qa_work_types' => 'Munka típusok',
	'qa_assets' => 'Eszközök',
	'qa_asset' => 'Eszköz',
	'qa_serial_number' => 'Sorozatszám',
	'qa_location' => 'Helyszín',
	'qa_locations' => 'Helyszínek',
	'qa_assigned_user' => 'Felelős (felhasználó)',
	'qa_notes' => 'Megjegyzés',
	'qa_assets_history' => 'Előzmények',
	'qa_assets_management' => 'Eszközök kezelése',
	'qa_slug' => 'Link',
	'qa_content_management' => 'Tartalom kezelése',
	'qa_text' => 'Szöveg',
	'qa_excerpt' => 'Kivonat',
	'qa_featured_image' => 'Kiemelt kép',
	'qa_pages' => 'Oldalak',
	'qa_axis' => 'Tengely',
	'qa_show' => 'Mutat',
	'qa_group_by' => 'Csoportosítás',
	'qa_chart_type' => 'Grafikon típusa',
	'qa_create_new_report' => 'Új jelentés',
	'qa_no_reports_yet' => 'Nincsenek jelentések.',
	'qa_created_at' => 'Létrehozva',
	'qa_updated_at' => 'Frissítve',
	'qa_deleted_at' => 'Törölve',
	'qa_reports_x_axis_field' => 'X tengely - válasszon egy dátum/idő mezőt',
	'qa_reports_y_axis_field' => 'Y tengely - válasszon egy szám mezőt',
	'qa_select_crud_placeholder' => 'Válassza ki valamelyik CRUD-ot',
	'qa_select_dt_placeholder' => 'Válassza ki valamelyik dátum/idő mezőt',
	'qa_aggregate_function_use' => 'Összegző funkció használata',
	'qa_x_axis_group_by' => 'X tengely csoportosítás',
	'qa_x_axis_field' => 'X tengely mező (dátum/idő)',
	'qa_y_axis_field' => 'Y tengely mező',
	'qa_is_created' => 'létrehozva',
	'qa_is_updated' => 'frissítve',
	'qa_is_deleted' => 'törölve',
	'qa_notifications' => 'Megjegyzések',
	'qa_notify_user' => 'Felhasználó értesítése',
	'qa_create_new_notification' => 'Új értesítés',
	'qa_stripe_transactions' => 'Stripe tranzakciók',
	'qa_upgrade_to_premium' => 'Frissítés Prémiumra',
	'qa_messages' => 'Üzenetek',
	'qa_you_have_no_messages' => 'Nincsenek üzenetek.',
	'qa_all_messages' => 'Összes üzenet',
	'qa_new_message' => 'Új üzenet',
	'qa_outbox' => 'Kimenő',
	'qa_inbox' => 'Bejövő',
	'qa_recipient' => 'Címzett',
	'qa_subject' => 'Tárgy',
	'qa_message' => 'Üzenet',
	'qa_send' => 'Küldés',
	'qa_reply' => 'Válasz',
	'qa_calendar_sources' => 'Naptár forrása',
	'qa_new_calendar_source' => 'Naptár forrás létrehozása',
	'qa_crud_title' => 'Crud címe',
	'qa_crud_date_field' => 'Crud dátum mező',
	'qa_prefix' => 'Előtag',
	'qa_label_field' => 'Címke mező',
	'qa_suffix' => 'Utótag',
	'qa_no_calendar_sources' => 'Nincs naptár',
	'qa_crud_event_field' => 'Esemény címke mező',
	'qa_create_new_calendar_source' => 'Új naptár forrás létrehozása',
	'qa_edit_calendar_source' => 'Szerkesztés',
	'qa_client_management' => 'Ügyfelek kezelése',
	'qa_client_management_settings' => 'Ügyfelek kezelése beállítások',
	'qa_country' => 'Ország',
	'qa_client_status' => 'Ügyfél állapota',
	'qa_clients' => 'Ügyfelek',
	'qa_client_statuses' => 'Ügyfél állapotai',
	'qa_currencies' => 'Pénznemek',
	'qa_main_currency' => 'Elsődleges pénznem',
	'qa_documents' => 'Dokumentumok',
	'qa_file' => 'Fájl',
	'qa_income_source' => 'Bevételi forrás',
	'qa_income_sources' => 'Bevételi források',
	'qa_fee_percent' => 'Díj százalék',
	'qa_note_text' => 'Megjegyzés szöveg',
	'qa_client' => 'Ügyfél',
	'qa_start_date' => 'Kezdés dátuma',
	'qa_budget' => 'Költségvetés',
	'qa_project_status' => 'Projekt állapota',
	'qa_project_statuses' => 'Projekt állapotai',
	'qa_transactions' => 'Tranzakciók',
	'qa_transaction_types' => 'Tranzakció típusok',
	'qa_transaction_type' => 'Tranzakció típus',
	'qa_transaction_date' => 'Tranzakció dátum',
	'qa_file_contains_header_row' => 'Tartalmaz a fájl fejléc sort?',
	'qa_import_data' => 'Adatok importálása',
	'qa_imported_rows_to_table' => ':rows sor importálva a :table táblába',
	'qa_integer_float_placeholder' => 'Válasszon egy integer/float mezőt.',
	'qa_change_notifications_field_1_label' => 'Email értesítő küldése felhasználónak',
	'qa_change_notifications_field_2_label' => 'Amikor belép a CRUD',
	'qa_select_users_placeholder' => 'Válasszon ki egy felhasználót',
	'qa_when_crud' => 'Amikor CRUD',
	'qa_action_model' => 'Tevékenység model',
	'quickadmin_title' => 'Laravel Expense Manager',
];