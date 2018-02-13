<?php
/**
 * OSSMailScanner english translation.
 *
 * @copyright YetiForce Sp. z o.o
 * @license YetiForce Public License 3.0 (licenses/LicenseEN.txt or yetiforce.com)
 */
$languageStrings = [
    'OSSMailScanner' => 'Mail Scanner',
    'OSSMailScanner_manual' => 'Mail Scanner',
    'E-mail Accounts' => 'Email Accounts',
    'Action' => 'Action',
    'Desc' => 'Description',
    'username' => 'Username',
    'mail_host' => 'Server',
    'language' => 'Language',
    'nazwa' => 'Function name',
    'katalog' => 'File path',
    'opis' => 'Description',
    'CreatedEmail' => 'Create email message',
    'BindContacts' => 'Relate with Contacts',
    'BindAccounts' => 'Relate with Accounts',
    'BindLeads' => 'Relate with Leads',
    'BindSSalesProcesses' => 'Relate with Potentials',
    'BindHelpDesk' => 'Relate with HelpDesk',
    'BindProject' => 'Relate with Project',
    'BindServiceContracts' => 'Relate with Service Contracts',
    'BindCompetition' => 'Relate with Competition',
    'BindOSSEmployees' => 'Relate with Employee',
    'BindPartners' => 'Relate with Partner',
    'BindVendors' => 'Relate with Vendor',
    'BindCampaigns' => 'Relate with Campaign',
    'created_Accounts' => 'Create Account',
    'created_Contacts' => 'Create Contact',
    'CreatedHelpDesk' => 'Create HelpDesk',
    'update_HelpDesk' => 'Update HelpDesk',
    'update_Accounts' => 'Update Account',
    'update_Contacts' => 'Update Contact',
    'desc_CreatedEmail' => 'Add email message to crm.',
    'desc_BindCompetition' => 'Create relation of email message with competition record that contains email address.',
    'desc_BindOSSEmployees' => 'Create relation of email message with employee record that contains email address.',
    'desc_BindPartners' => 'Create relation of email message with partner record that contains email address.',
    'desc_BindVendors' => 'Create relation of email message with vendor record that contains email address.',
    'desc_BindContacts' => 'Create relation of email message with contact record that contains email address.',
    'desc_BindAccounts' => 'Create relation of email message with account record that has this email address.',
    'desc_BindLeads' => 'Create relation of email message with lead record that has this email address.',
    'desc_BindSSalesProcesses' => 'Create relation of email message with potential record based on prefix with number in subject.',
    'desc_BindHelpDesk' => 'Create relation of email message with helpdesk record based on prefix with number in subject.',
    'desc_BindProject' => 'Create relation of email message with project record based on prefix with number in subject.',
    'desc_BindServiceContracts' => 'Create relation of email message with project record based on account associated with email.',
    'desc_BindCampaigns' => 'Create relation of email message with campaign record based on prefix with number in subject.',
    'desc_created_Accounts' => 'Create Accounts Description',
    'desc_created_Contacts' => 'Create Contacts Description',
    'desc_CreatedHelpDesk' => 'Create HelpDesk Description.',
    'desc_update_HelpDesk' => 'Update HelpDesk Description',
    'desc_update_Accounts' => 'Update Accounts Description',
    'desc_update_Contacts' => 'Update Contacts Description',
    'Folder configuration' => 'Folder configuration',
    'Actions' => 'Actions',
    'MailView config' => 'configuration',
    'General Configuration' => 'General configuration',
    'Search email configuration' => 'Search email configuration',
    'LBL_TICKET_REOPEN' => 'Create/Open ticket',
    'LBL_OPEN_TICKET' => 'Open ticket and set "Wait for response" status',
    'LBL_CREATE_TICKET' => 'Create new ticket',
    'LBL_NO_ACTION' => 'Relate to current ticket (if relating action is added)',
    'LBL_CONFTAB_CHANGE_TICKET_STATUS' => 'What should the scanner do when we receive a mail regarding a ticket that has been closed?',
    'Alert_no_module_title' => 'This module was not found or is turned off.',
    'Alert_no_module_desc' => 'Scanner module requires that you install and activate OSSMail module. Check if this module is installed, if not you need to install it.',
    'Alert_no_accounts_title' => 'Email accounts not found',
    'Alert_no_accounts_desc' => 'To activate email scanner you need to first login to email account in OSSMail module.',
    'Alert_info_tab_actions' => 'File with email actions is located in: modules/OSSMailScanner/scanneractions/',
    'Alert_no_email_acconts' => 'Email accounts not found',
    'Alert_no_email_acconts_desc' => 'To configure the folders you need to login the first time to chosen mailbox.',
    'Alert_info_tab_email_search' => 'Choose fields that will be used to search for recipient of email message.',
    'Alert_info_tab_folder' => 'Choose folders that will be scanned while downloading email messages. ',
    'Alert_info_tab_accounts' => 'Choose what actions should be triggered for individual email accounts.',
    'Alert_info_tab_record_numbering' => 'Prefixes are used to relate email message with other data in crm. Relation of emails works only for modules that have configured prefix (it is not empty).',
    'Alert_active_cron' => 'Not active tasks in schedule.',
    'Alert_active_cron_desc' => 'Could not find tasks in schedule for scanner module or one of the tasks is inactive. For email scanner to work properly it needs to have all tasks active for scanning module (MailScannerAction, MailScannerVerification)',
    'Alert_active_crontime' => 'Incorrect frequency of schedule calls.',
    'Alert_active_crontime_desc' => 'Call frequency of "MailScannerAction" task should be at least twice the frequency of "MailScannerVerification" task',
    'All_folder' => 'All',
    'Received' => 'Received',
    'Sent' => 'Sent',
    'Spam' => 'Spam',
    'Trash' => 'Bin',
    'Function_list' => 'List of functions',
    'Folder_list' => 'List of folders',
    'Record Numbering' => 'Prefixes',
    'ConfigCustomRecordNumbering' => 'numbering configuration',
    'Module' => 'Module',
    'Alert_scanner_not_work' => 'No prefix, mail scanner is not working',
    'Roundcube config' => 'Roundcube configuration',
    'LBL_SAVE' => 'Save configuration',
    'Spam' => 'Spam',
    'JS_save_info' => 'Saved list of actions',
    'JS_saveuser_info' => 'User is saved',
    'LBL_SAVE_FOLDER_INFO' => 'Saved list of folders',
    'JS_save_fields_info' => 'Saved field list',
    'JS_save_config_info' => 'Configuration was saved',
    'Cron' => 'Cron',
    'RunCron' => 'Start manual scanning',
    'startTime' => 'Start time',
    'endTime' => 'End time',
    'status' => 'Status',
    'account' => 'Account',
    'action' => 'Action',
    'folder' => 'Folder',
    'count' => 'Emails checked',
    'who' => 'User',
    'OK' => 'ok',
    'In progress' => 'In realization',
    'Error' => 'Error',
    'email_to_notify' => 'Notification email',
    'time_to_notify' => 'Time to notify (min)',
    'StopCron' => 'Manually stop scanning',
    'Manually stopped' => 'Manually stopped',
    'stop_user' => 'Scanning stopped by',
    'Email_Subject' => 'Notification: CRON runs too long',
    'Email_Body' => 'Hello<br /><br />CRON is running too long, check if mail system works correctly.<br /><br />Greets Admin',
    'Email_FromName' => 'Mail Scanner',
    'JS_info_restart_ok' => 'Cron unlocked',
    'permissions_all' => 'Visible to all',
    'permissions_vtiger' => 'Based on vtiger permissions',
    'permissions_user_email' => 'Based on user address',
    'Permissions' => 'Permissions',
    'User' => 'User',
    'None' => 'Choose user',
    'User list' => 'List of users',
    'identities_name' => 'Identity name',
    'identities_adress' => 'Identity address',
    'identities_del' => 'Delete identity',
    'show_identities' => 'show identities',
    'IMAP_ERROR' => 'Cannot connect to e-mail server',
    'ERROR_ACTIVE_CRON' => 'Unable to turn on scanning because cron is currently active.',
    'Change ticket status' => 'Ticket status change',
    'Change_ticket_status' => 'Update ticket status',
    'Alert_info_conftab_change_ticket_status' => 'This option allows to change ticket status to "Replied" when Mail Scanner finds an email from a customer who sent this ticket.',
    'Action_DisabledModule' => 'Disable module',
    'Action_EnabledModule' => 'Enable module',
    'Action_UpdateModule' => 'Update module',
    'Action_InstallModule' => 'Install module',
    'Action_Bind' => 'Marked to bind',
    'Action_CronMailScanner' => 'Cron - Email scanning',
    'Action_CronBind' => 'Cron - Bind',
    'Action_ChangeType' => 'Change mail type',
    'AccontDeleteOK' => 'Deleted account',
    'No' => 'No',
    'LBL_MAIL_LOGS' => 'Mail Logs',
    'Group list' => 'Group list',
    'LBL_ACTIVE_MAIL' => 'Active',
    'LBL_INACTIVE_MAIL' => 'Inactive',
    'LBL_EXCEPTIONS' => 'Exceptions',
    'LBL_EXCEPTIONS_CREATING_EMAIL' => 'Addresses omitted while executing an action creating e-mail messages',
    'LBL_EXCEPTIONS_CREATING_TICKET' => 'Addresses omitted while executing an action creating tickets',
    'LBL_WRITE_AND_ENTER' => 'Enter the address and press enter',
    'ERR_NO_CONFIGURATION_FOLDERS' => 'No folder configuration',
    'LBL_SHOW_ACCOUNT_DETAILS' => 'Show account details',
    'LBL_EDIT_FOLDER_ACCOUNT' => 'Edit folders',
    'LBL_ALERT_EDIT_FOLDER' => 'Deleting the folder and adding it again will restart the mail scanner for selected folders.',
    'LBL_DELETE_ACCOUNT' => 'Delete account',
];
