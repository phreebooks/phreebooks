<?php
/*
 * Language translation for Bizuno module
 *
 * NOTICE OF LICENSE
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.TXT.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/OSL-3.0
 *
 * DISCLAIMER
 * Do not edit or add to this file if you wish to upgrade Bizuno to newer
 * versions in the future. If you wish to customize Bizuno for your
 * needs please refer to http://www.phreesoft.com for more information.
 *
 * @name       Bizuno ERP
 * @author     Dave Premo, PhreeSoft <support@phreesoft.com>
 * @copyright  2008-2018, PhreeSoft Inc.
 * @license    http://opensource.org/licenses/OSL-3.0  Open Software License (OSL 3.0)
 * @version    3.x Last Update: 2018-04-23
 * @filesource /locale/en_US/module/bizuno/language.php
 */

$lang = [
    'title' => 'Bizuno ERP',
    'description' => 'Bizuno ERP core application. <b>NOTE: This is a core module and cannot be removed!</b>',
    // Installation
    'email_new_user_subject' => 'Welcome to Bizuno',
    //You will receive an email from us momentarily with a special ONE-TIME link to the Bizuno NEW Member Log-in page so you can instantly activate your membership. If you do not receive your confirmation email, contact us at biznerds@phreesoft.com. If you are using a spam filter on your email, please be sure that email coming from biznerds@phreesoft.com is directed to your inbox. If you do not, you may miss important subscription information, like your membership activation link.
	'email_new_portal_body' => 'Welcome to Bizuno,<br /><br />%s has added you to the list of users that have access to their business, %s. You will need to set your password before you can log into Bizuno. Please go to <a href="%s">%s</a> to initialize your account.<br />You will need to enter your confirmation code along with a new password. Your confirmation code will expire in 48 hours: <br /><b>%s</b>',
	'email_new_user_body' => 'Welcome to Bizuno,<br /><br />%s has added you to the list of users that have access to their business, %s. Since you already have an Bizuno username, all you have to do is go to the portal <a href="%s">%s</a> and log in using your current credentials.',
    'account_verified' => 'Your credentials have been verified at PhreeSoft. Any purchases you have made in our store should now be ready to download and install.',
    // Settings
    'set_timezone' => 'Set your locale/timezone to base your posted entries.',
    'set_password_min' => 'Sets the minimum password length. Longer passwords lead to a more secure website. Minimum value is 8.',
	'set_max_rows' => 'Sets the default number of rows to show for table listings. Minimun value 10, maximum value 100.',
	'set_session_max' => 'Sets the maximum session time to automatically log out user when inactive in minutes. A value of zero keeps session alive automatically. Minimum value is 5 minutes and maximum value is 300 minutes.',
	'set_number_precision' => 'Precision for decimal values [Default: 2]',
	'set_number_prefix' => 'Sets the prefix for positive numeric values',
	'set_number_suffix' => 'Sets the suffix for positive numeric values',
	'set_number_decimal' => 'Decimal separator for numeric values',
	'set_number_thousand' => 'Thousands separator for numeric values',
	'set_number_neg_pfx' => 'Sets the prefix for negative numeric values',
	'set_number_neg_sfx' => 'Sets the suffix for negative numeric values',
	'set_date_short' => 'Sets the format for calendar dates',
	'set_newLogo' => 'Select an image to upload to use as a new logo',
	'set_gl_receivables' => 'Default Accounts Receivables account for API order imports. Typically an Accounts Receivable type account. If this is left blank, the default accounts receivable account for customers set in the PhreeBooks module will be used.',
	'set_gl_sales' => 'Default account to use for sales transactions. Typically an Income type account. If this is left blank, the default sales account for customers set in the PhreeBooks module will be used.',
    'set_gl_discount' => 'Default account to use for sales discounts. This account will also be used for imbalances between the submitted total and the calculated total. Typically a Sales/Income type account',
    'set_gl_tax' => 'Default account to use for Sales Tax collected. The sales tax passed should be equal to the calculated value based on the default rate specified below.',
    'set_tax_rate_id' => 'Default tax rate to apply to orders where a Sales Tax value is submitted.',
    'set_smtp_enable' => 'Enable sending Bizuno emails through your SMTP server. By default Bizuno uses it\'s internal mail capability, all emails will originate from the PhreeSoft servers with the return host srv*.phreesoft.com.',
    'set_smtp_host' => 'SMTP Host, i.e. mail.mybusiness.com',
    'set_smtp_port' => 'SMTP Port (Default 587 for TLS security, set to 26 for non-secure)',
    'set_smtp_user' => 'SMTP Account User Name',
    'set_smtp_pass' => 'SMTP Account Password',
    // Labels
    'edit_dashboard' => 'Add/Remove Dashboards for menu: %s',
    'next_cust_id_num' => 'Next Customer ID Number',
    'next_shipment_num'=> 'Next Shipment Number',
	'next_vend_id_num' => 'Next Vendor ID Number',
    'password_now' => 'Current Password',
    'desc_security_fill' => 'Fill ALL Security Settings To:',
    // Messages
	'roles_restrict' => 'Do not allow access through the www.bizuno.com portal. i.e. For internal use only, members of this role cannot access your business.',
	'msg_module_delete_confirm' => 'Are you sure you want to un-install this module. All database data and files associated with this module will be lost!',
	'msg_module_upgraded' => 'Successfully upgraded module %s to release %s',
    'msg_upgrade_success' => 'The upgrade was successful! Press OK to close this message and log out of Bizuno to clear your cache.',
	'msg_encryption_changed' => 'The encryption key has been changed.',
	'msg_restore_confirm' => 'Warning! This operation will delete and re-write the database. Are you sure you want to continue?',
	'msg_restore_success' => 'Restore complete! Press OK to complete the restore, log out and return to the welcome screen.',
	'msg_backup_success' => 'Your backup is ready to download from the list below.',
	'msg_add_dashboards' => 'Add more dashboards to this menu..',
	'msg_no_shipments_found' => 'No shipments have been found that have shipped on this date!',
    'msg_new_user' => 'Congratulations! Your business has been created.<br /><br />
        Since you already have an account, click <a href="%s">HERE</a> to access the portal, log in and get started. You new business will be named My Business and should be changed during installation. If you have any questions, please out a support ticket (if logged into Bizuno) or email us at biznerds@phreesoft.com.<br />
        We hope you enjoy the application.<br><br>The PhreeSoft Development Team.',
    // Error Messages
    'err_install_module_exists' => 'Module %s is already installed! The installation was skipped.',
	'err_role_undefined' => 'The role is a required field! Please select a role for this user.',
	'err_delete_user' => 'You cannot delete the user account that you are logged in as!',
    'err_encryption_not_set' => 'The encryption key has not been set! To set a key, go to My Company -> Settings -> Bizuno tab -> Bizuno Settings -> Tools tab.',
    // General
   	'table_stats' => 'Table Statistics',
	'dashboard_columns' => 'Dashboard Columns',
    'icon_set' => 'Icon Set',
    'store_id' => 'Sets the home store in multiple store businesses. Used for reports and listings for store stock levels, contacts, etc.',
    'restrict_store' => 'Restrict user to a specific store, All for no restrictions, Select store to restrict viewable activity to a specific store.',
    'restrict_user' => 'Restrict the user to only see sales/purchases registered to them. Affects Customer Manager, Vendor Manager, Sales and Purchases and related Banking. More filtering is also possible for extensions and other core Bizuno functions.',
    // Buttons
	'btn_security_clean' => 'Clean Data Security Values',
    // Portal
    'intro'       => 'We just need a little more information to get you set up. Please select from the choices below and press the Next icon. If you are not sure, not to worry, most of these can be changed through the administrator settings. It takes about 10 seconds to build your databases and you will be ready to go.',
    'bizuno_install_title' => 'Welcome to Bizuno',
    'biz_title'   => 'Enter a short name to call your business: ',
    'biz_lang'    => 'Set your default language: ',
    'biz_currency'=> 'Set your default currency: ',
    'biz_chart'   => 'Pick a default chart of accounts to use:',
    'biz_fy'      => 'Pick a fiscal year to get going:',
    'wrong_email' => 'Could not find e-mail address for your user.',
    'request_pass'=> 'Your password reset request has been sent to your email address!',
    'email_sub_request' => 'Lost Password Reset',
    'email_request_pass' => 'Dear %s,<br> We have received a request to reset your password please go to <a href="%s">%s</a> and type in the reset code.<br>If you have not sent this request ignore this e-mail.<br>Your reset code: %s',
    'pass_does_not_match' => 'The passwords do not match.',
    'plz_fill' => 'Please fill out the entire form.',
    'wrong_code_time' => "This is the wrong code or time expired.",
    'password_changed' => 'Your password has been successfully changed.',
    // PhreeForm processing/separators
//    'pf_proc_cur_exc' => 'Convert to Currency',
    'pf_proc_json' => 'JSON Decode',
    'pf_proc_neg' => 'Negate',
	'pf_proc_lc' => 'Lowercase',
	'pf_proc_uc' => 'Uppercase',
	'pf_proc_date' => 'Formatted Date',
	'pf_proc_today' => "Today's Date",
	'pf_proc_rnd2d' => 'Round (2 decimal)',
	'pf_proc_n2wrd' => 'Number to Words',
	'pf_proc_null0' => 'Null if Zero',
	'pf_proc_blank' => 'Blank Out Data',
	'pf_proc_yesbno' => 'Yes - Blank No',
	'pf_proc_printed' => 'Printed Flag',
	'pf_proc_precise' => 'Precise',
	'pf_proc_rep_id' => 'Sales Rep',
    'pf_cur_null_zero' => 'Currency (Null if Zero)',
	'pf_sep_comma'  => 'Comma (,)',
	'pf_sep_commasp'=> 'Comma-Space',
	'pf_sep_newline'=> 'Line Break',
	'pf_sep_semisp' => 'Semicolon-space',
	'pf_sep_delnl'  => 'Skip Blank-Line Break',
	'pf_sep_space1' => 'Single Space',
	'pf_sep_space2' => 'Double Space',
    // Extra fields
	'custom_field_manager' => 'Custom Field Manager',
	'xf_lbl_field' => 'Field Name',
	'xf_lbl_field_tip' => 'Fieldnames must be database compliant, they cannot contain spaces or special characters and must be 64 characters or less.',
	'xf_lbl_label' => 'Label to display with field',
    'xf_lbl_tag' => 'Tag used for Import/Export',
	'xf_lbl_tab' => 'Tab Member (Selection must be from the pull down list, add new tabs in Bizuno Settings)',
	'xf_lbl_tab_tip' => 'Additional tabs may be created in My Business -> Settings -> Extra Tabs',
	'xf_lbl_group' => 'Group Member',
	'xf_lbl_order' => 'Sort Order (within tab/group)',
	'xf_lbl_text' => 'Text Field',
    'xf_lbl_html' => 'HTML Field',
	'xf_lbl_text_length' => 'Maximum number of characters',
	'xf_lbl_link_url' => 'Link (URL)',
	'xf_lbl_link_image' => 'Link (Image)',
	'xf_lbl_link_inventory' => 'Link (Inventory Image)',
	'xf_lbl_int' => 'Integer',
	'xf_lbl_float' => 'Floating Point Number',
	'xf_lbl_db_float' => 'Single Precision',
	'xf_lbl_db_double' => 'Double Precision',
	'xf_lbl_checkbox_multi' => 'Checkbox (Multiple Entry)',
	'xf_lbl_select' => 'Dropdown List',
	'xf_lbl_data_list' => 'DataList (text field with suggestions)',
	'xf_lbl_radio' => 'Radio Button',
	'xf_lbl_radio_default' => 'Enter choices formatted as follows:<br />opt1:desc1;opt2:desc2;opt3:desc3<br />Key:<br />optX = The value to place into the database<br />descX = Textual description of the choice<br />Note: The first entry will be the default.',
	'xf_lbl_checkbox' => 'Check Box<br />(Yes or No Choice)',
	'xf_lbl_datetime' => 'Date and Time',
	'xf_lbl_timestamp' => 'DB Timestamp',
	'xf_err_field_exists' => 'Cannot rename field as the new field name already exists in the table!',
	'xf_msg_edit_warn' => 'WARNING: If the field type or properties of the field type are changed, data loss may occur! Specifically, shortening text field lengths (will truncate data) or changing types (e.g. text to integer will drop all non-numeric characters) may result in data loss.',
    // API Settings
    'cart_sync' => '%s Product',
    'cart_cat' => '%s Category Path',
    // API and Import/Export
    'upload_all' => 'Slowest - All Data (Including Images)',
    'upload_images' => 'Faster - All Data (Except Images)',
    'sync_title' => 'Synchronize Products',
    'sync_delete' => 'Delete items from cart',
    'status_title' => 'Confirm Shipments',
    'upload_title' => 'Product Bulk Upload',
    'upload_item' => 'Upload to %s',
    'upload_info' => 'Bulk upload all products selected to be displayed in the %s e-commerce site. Images are not included unless the checkbox is checked.',
    'sync_info' => 'Synchronize active products from the Bizuno database (set to show in the catalog and active) with current listings from %s. Any SKUs that should not be listed on the cart are displayed. They need to be removed from the cart manually through the admin interface.',
    'status_info' => 'Confirms all shipments on the date selected from the Shipping Manager and sets the status in %s. Completed orders and partially shipped orders are updated. Email notifications to the customer are not sent.',
    'status_date' => 'For orders shipped on:',
    'price_sheet_desc' => 'Price Sheet to use, if any, for uploading product pricing.',
    'test_cart' => 'Test if bizuno can connect to your cart.',
    'default_mode' => 'Default server to use',
    'url_desc' => 'URL of the cart Administrator. No trailing slash please.',
    'tax_id_desc' => 'Sales Tax Rate to apply collected tax to.',
	'api_desc' => 'The following modules have defined scripts to handle importing and exporting of data into Bizuno. Each module will contain more detailed information regarding it capabilities.',
	'desc_encrypt_config' => 'Set the encryption key to use if \'Encryption Enabled\' is turned on. If setting for the first time, the old encryption key is blank.',
	'desc_security_clean' => 'This tool cleans all data security values with a expiration date prior to a selected date. WARNING: This operation cannot be undone!',
	'desc_backup' => 'Backup creates a zip compressed download file that contains the database information for your business. If selected, the business data files can also be included. Note: including the business data files will increase the download file size and take longer to process.',
	'desc_backup_all' => 'Include Business Data Files (larger download, longer wait)',
	'desc_audit_log_clean' => 'Cleaning out the audit log will remove all other records up to and including the selected date. It is recommended that the audit log be backed up prior to cleaning out the historical data.',
	'desc_status_seq_change' => 'Changes to the sequencing can be made here.<br />Note 1: Bizuno does not allow duplicate sequences, be sure the new starting sequence will not conflict with any currently posted values.<br />Note 2: The entry for next_deposit_num is generated by the system and uses the current date with a prefix based on the payment method selected.<br />Note 3: The entry for next_check_num can be set at the payment screen prior to posting a payment and will continue from the entered value.',
	'desc_security_clean_date' => 'Clean all values with expiration date before:',
    // Backup/Restore
    'queries' => 'Queries',
    'audit_log_backup' => 'Backup and Clean Transaction History',
	'audit_log_backup_desc' => 'This operation creates a downloaded backup of your transaction history stored in your audit log database file. Downloading and cleaning this database table will help keep the database size down and reduce business backup file sizes. Backing up this log is recommended before cleaning out to preserve PhreeBooks transaction history.',
    'bizuno_upgrade' => 'Bizuno Upgrade',
    'bizuno_upgrade_desc' => 'Upgrade to the latest version of Bizuno with a push of a button. Before doing this, please make a backup of your business, download it to your local machine and make sure all users are not using the system.',
    // Profile
    'gmail_address' => 'Enter your Google email address if you plan on using Google integration (Calendar, etc.). Note that your browser must also be logged into your Google account under the same email address for the calendar to load.',
    'gmail_zone' => 'Select the Geozone to use as the Google Calendar default',
    // Reminder dashboard
    'reminders' => 'Reminders',
    'frequency' => 'Frequency',
    'start_date' => 'Date Created',
    'next_date' => 'Next Reminder',
    'reminder_edit' => 'Reminder Editor',
    'reminder_desc' => 'Enter the information below, All fields are required.',
    // Support Ticket
    'ticket_desc' => 'Use this form to request support from the PhreeSoft support team. Please select a reason to help us properly route your request.',
	'ticket_attachment' => 'A document or picture may be attached to help clarify your request.',
	'ticket_question' => 'Question',
	'ticket_bug' => 'Found a Bug',
	'ticket_suggestion' => 'Suggestion',
	'ticket_my_account' => 'My Account',
    // Tools
    'admin_status_update' => 'Change Various Reference Numbers',
	'admin_encrypt_update' => 'Create/Change Encryption Key',
	'admin_encrypt_old' => 'Current Encryption key',
	'admin_encrypt_new' => 'New Encryption key',
	'admin_encrypt_confirm' => 'Re-enter new key ',
    'admin_fix_comments' => 'Check/Repair database comments to latest structure',
    'desc_update_comments' => '<p>This tool iterrates through your database tables to update the comments used to set positioning, styling and formatting the database fields. Generally this tool does not need to be run more than once or only after recommended by PhreeSoft after an update. If no changes are necessary, this tool will not touch your database.</p><p>Remember to backup your database before running this tool.</p>',
	'db_engine' => 'DB Engine',
	'db_rows' => 'Number of Rows',
	'db_collation' => 'Collation',
	'db_next_id'   => 'Next Row ID',
	'new_tab' => 'New Custom Tab',
	'new_tab_desc' => 'Select the Module/Table to create a new tab in and click Next.',
        // Install notes
    'note_bizuno_install_1' => 'PRIORITY LOW: Create an account at www.PhreeSoft.com, if you do not have one, and then enter your credentials in your Bizuno Business under: Account (Login Name) -> Settings -> Bizuno tab -> Bizuno Settings icon -> Settings tab -> My PhreeSoft Account accordion.',
];