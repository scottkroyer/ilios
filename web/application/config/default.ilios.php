<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|====================================
| Ilios custom configuration options
|====================================
*/
/*
|--------------------------------------------------------------------------
| Institution Name
|--------------------------------------------------------------------------
|
*/
$config['ilios_institution_name'] = "%%ILIOS_INSTITUTION_NAME%%";

/*
|--------------------------------------------------------------------------
| Cron tasks log file
|--------------------------------------------------------------------------
|
| The full path to the logfile written to by the cron tasks
|
*/
$config['cron_log_file']    = "/web/ilios/cron/cron_log.txt";

/*
|--------------------------------------------------------------------------
| Event's reminders default setting
|--------------------------------------------------------------------------
|
| Number of days in advance of the event's date that a reminder alert
| should be sent out to users in the instructor groups.
|
| The default value is 7 days if this configuration variable is not set.
|
*/
$config['event_reminder_alert_in_days'] = 7;

/*
|--------------------------------------------------------------------------
| Visual alert threshold setting
|--------------------------------------------------------------------------
|
| Number of days that an offering or an Independent Learning Session
| should remain visually flagged on the calendar
| after it (or its parent session) has been updated last.
|
| If this variable is not set then a default value of 3 days is assumed by the system.
|
| Off-switch:
| turn off visual alert indicators in the calendar by setting
| this config option to a negative value.
|
*/
$config['visual_alert_threshold_in_days'] = 7;

/*
|--------------------------------------------------------------------------
| Default Language/Locale
|--------------------------------------------------------------------------
|
| There must exist an ilios_strings_XXXXXX.properties file for the below
|       setting of $config['ilios_default_lang_locale'] = "XXXXXX"
|
*/
$config['ilios_default_lang_locale'] = "en_US";

/*
|--------------------------------------------------------------------------
| Idle page timeout
|--------------------------------------------------------------------------
| Times the current page out after a configured amount of time.
| The default is 270,000 ms (45 mins).
| The calendar view for embedding does not have a page timer configured on it.
*/
$config['ilios_idle_page_timeout'] = 2700000;

/*
|--------------------------------------------------------------------------
| Authentication
|--------------------------------------------------------------------------
|
| ['ilios_authentication']
|     The name authentication system to use.
|     Options are:
|         "default"    Ilios-internal authentication (username/password)
|         "shibboleth" Shibboleth-based authentication (SSO)
|         "ldap"       LDAP based authentication
|     If not specified, then the "default" option is assumed.
*/
$config['ilios_authentication'] = 'default';

/*
|--------------------------------------------------------------------------
| Ilios-internal Authentication
|--------------------------------------------------------------------------
|
| ['ilios_authentication_internal_password_salt']
|     Salt for generating password hashes.
|     If no salt is provided then the passwords are hashed without it.
|
|     CAUTION:
|     Changing this value will require a password change for all existing users accounts
|     with login credentials in the ilios internal auth. store
*/
$config['ilios_authentication_internal_auth_salt'] = null;

/*
|--------------------------------------------------------------------------
| Shibboleth Authentication
|--------------------------------------------------------------------------
|
| ['ilios_authentication_shibboleth_user_id_attribute']
|     The name of the attribute passed by the Shibboleth IdP which is used to
|     authenticate users in Ilios. If users are to authenticate by their email
|     address, this should be the name of the attribute is assumed
|     to contain the email address.
|
| ['ilios_authentication_field_to_match']
|    The field in the 'authentication' or 'user' database table in Ilios against
|    which the received shibboleth value will be compared.  Currently, the allowed
|    values are 'email' and 'uc_uid', with 'email' being the default value
|
| ['ilios_authentication_shibboleth_logout_path']
|     Absolute path to the Shibboleth Logout Service location.
|
*/
$config['ilios_authentication_shibboleth_user_id_attribute'] = 'mail';
$config['ilios_authentication_field_to_match'] = 'email';
$config['ilios_authentication_shibboleth_logout_path'] = '/Shibboleth.sso/Logout';

/*
|--------------------------------------------------------------------------
| LDAP Authentication
|--------------------------------------------------------------------------
|
| ['ilios_ldap_authentication']['host']             LDAP server hostname or URL
                                                    e.g. "directory.university.edu"
                                                         "ldap://directory.university.edu:389"
| ['ilios_ldap_authentication']['port']             LDAP server port.
                                                    Will be ignored if 'host' is an URL.
| ['ilios_ldap_authentication']['bind_dn_template'] Bind DN template.
|                                                   use %s as placeholder for username substitution.
|                                                   e.g. 'cn=%s,ou=directory,dc=university,dc=edu'
*/
$config['ilios_ldap_authentication']['host'] = 'directory.university.edu';
$config['ilios_ldap_authentication']['port'] = 389;
$config['ilios_ldap_authentication']['bind_dn_template'] = 'cn=%s,ou=directory,dc=university,dc=edu';

/*
|--------------------------------------------------------------------------
| Curriculum Inventory Report Management/Export
|--------------------------------------------------------------------------
|
| ['curriculum_inventory_institution_domain'] ...
|    Part of the "domain" attribute of the <ReportID> element
|    From the spec:
|
|        domain
|            Defines the organization that is the source of the unique identifier. domain has the following format:
|                idd:domainname:localidentifier
|            Where:
|                domainname is internet domain name that is a valid URN authority (see RFC 3986 - URI)
|                and is owned by the organization issuing the unique ID.
|    Example:
|        $config['curriculum_inventory_institution_domain'] = 'ucsf.edu';
|
| ['curriculum_inventory_report_supporting_link'] ...
|    Optional "supporting link" for the curriculum. (<SupportingLink> element).
|    Leave empty or commented in if this value is to be omitted from reports.
|
|    From the spec:
|
|        A link to supporting information, such as a pictorial representation of the curriculum
|        or a document explaining the rationale behind the curriculum structure"
|
|    Example:
|        $config['curriculum_inventory_supporting_link_url'] ] = 'http://curriculum.example.edu/inventory'
|
| @link http://www.medbiq.org/sites/default/files/files/CurriculumInventorySpecification.pdf
*/
$config['curriculum_inventory_institution_domain'] = '%%ILIOS_INSTITUTION_DOMAIN%%';
$config['curriculum_inventory_supporting_link'] = '';
/*
|--------------------------------------------------------------------------
| Scheduled Task configuration
|--------------------------------------------------------------------------
|
| ['tasks'] container for task specific configuration
|
*/
$config['tasks'] = array(); // never comment out this line, code relies on this sub-array to exist.

/*
|--------------------------------------------------------------------------
| "Change Alert Notification Process" configuration
|--------------------------------------------------------------------------
|
| ['tasks']['change_alerts']             configuration container for change alerts notification process
| ['tasks']['change_alerts']['enabled']  "on/off" switch, set to TRUE to enable notification process, FALSE to turn it off
| ['tasks']['change_alerts']['debug']    "debug mode" switch, set to TRUE for additional log output.
|
*/
$config['tasks']['change_alerts'] = array();
$config['tasks']['change_alerts']['enabled'] = false;
$config['tasks']['change_alerts']['debug'] = false;

/*
|--------------------------------------------------------------------------
| "Teaching Reminder Alert Notification Process" configuration
|--------------------------------------------------------------------------
|
| ['tasks']['teaching_reminders']             configuration container for teaching reminder notification process
| ['tasks']['teaching_reminders']['enabled']  "on/off" switch, set to TRUE to enable notification process, FALSE to turn it off
|
*/
$config['tasks']['teaching_reminders'] = array();
$config['tasks']['teaching_reminders']['enabled'] = false;

/*
|--------------------------------------------------------------------------
| * "User Synchronization Process" configuration
|--------------------------------------------------------------------------
|
| ['tasks']['user_sync']                       configuration container for user sync process
| ['tasks']['user_sync']['enabled']            set to TRUE to enable sync, FALSE to turn it off
| ['tasks']['user_sync']['log_file_path']      absolute path to the log file
| ['tasks']['user_sync']['user_source_class']  classname of the external user source implementation
|
| * LDAP-based external user source configuration
|
| ['tasks']['user_sync']['ldap']               configuration container for LDAP user source
| ['tasks']['user_sync']['ldap']['host']       LDAP server host name or an URL
| ['tasks']['user_sync']['ldap']['port']       LDAP server port, only needed when 'host' contains a host name and not an URL.
| ['tasks']['user_sync']['ldap']['bind_dn']    LDAP bind DN
| ['tasks']['user_sync']['ldap']['password']   LDAP bind password
|
*/
$config['tasks']['user_sync'] = array();
$config['tasks']['user_sync']['enabled'] = false;
$config['tasks']['user_sync']['log_file_path'] = '/web/ilios/cron/user_sync.txt';
$config['tasks']['user_sync']['user_source_class'] = 'Ilios_UserSync_UserSource_Eds';
$config['tasks']['user_sync']['ldap'] = array();
$config['tasks']['user_sync']['ldap']['host'] = 'ldaps://%%USERSYNC_LDAP_HOSTNAME%%';
$config['tasks']['user_sync']['ldap']['port'] = 636;
$config['tasks']['user_sync']['ldap']['bind_dn'] = '%%USERSYNC_LDAP_BINDDN%%';
$config['tasks']['user_sync']['ldap']['password'] = '%%USERSYNC_LDAP_PASSWORD%%';
$config['tasks']['user_sync']['ldap']['active_student_filter'] = '%%USERSYNC_LDAP_ACTIVE_STUDENT_FILTER%%';
$config['tasks']['user_sync']['ldap']['former_student_filter'] = '%%USERSYNC_LDAP_FORMER_STUDENT_FILTER%%';

/*
|--------------------------------------------------------------------------
| "Scheduled Enrollment Export Task" configuration
|--------------------------------------------------------------------------
|
| * Enrollment Export Process task specific configuration
|
| ['tasks']['enrollment_export']                        configuration container for user sync process
| ['tasks']['enrollment_export']['enabled']             set to TRUE to enable sync, FALSE to turn it off
| ['tasks']['enrollment_export']['output_file_path']    absolute path of the export file
| ['tasks']['enrollment_export']['instructor_role']     string value that instructor role will map to;
| ['tasks']['enrollment_export']['instructor_schools']  a single school id or an array of school ids that have instructor enrollment export;
| ['tasks']['enrollment_export']['learner_role']        string value that learner role will map to;
| ['tasks']['enrollment_export']['learner_schools']     a single school id or an array of school ids that have learner enrollment export;
| ['tasks']['enrollment_export']['participant_role']    string value for participle role
| ['tasks']['enrollment_export']['participant_schools'] a single school id or an array of school ids for
|                                                       schools that have participant enrollments.
|
*/
$config['tasks']['enrollment_export'] = array();
$config['tasks']['enrollment_export']['enabled'] = false;
$config['tasks']['enrollment_export']['output_file_path'] = '/home/cleae/export/ilios_enrollment_list.csv';
$config['tasks']['enrollment_export']['instructor_role'] = 'editingteacher';
$config['tasks']['enrollment_export']['instructor_schools'] = range(2,5);
$config['tasks']['enrollment_export']['learner_role'] = 'student';
$config['tasks']['enrollment_export']['learner_schools'] = range(1,5);
$config['tasks']['enrollment_export']['participant_role'] = 'participant';
$config['tasks']['enrollment_export']['participant_schools'] = 1;

/*
|--------------------------------------------------------------------------
| Audit log dump, rotate, and prune configuration
|--------------------------------------------------------------------------
|
| * Audit log task specific configuration
|
| ['tasks']['audit_log']                            configuration container for user sync process
| ['tasks']['audit_log']['enabled']                 set to TRUE to enable audit log actions, FALSE to turn it off
| ['tasks']['audit_log']['daily_log_file_path']     Path to the file to store daily log files, FALSE to not store daily logs
| ['tasks']['audit_log']['history_log_file_path']   Path to the file to save historic logs before the are moved from the database
|                                                       FALSE to not keep historic logs
| ['tasks']['audit_log']['days_to_keep']            How many days of log entries to keep in the database, FALSE to never prune them
| ['tasks']['audit_log']['rotate_logs']             TRUE ilios will rotate and compress log files, FALSE this can be handled by the OS or sysadmins
|
*/
$config['tasks']['audit_log'] = array();
$config['tasks']['audit_log']['enabled'] = false;
$config['tasks']['audit_log']['daily_log_file_path'] = '/web/ilios/cron/daily_audit_logs.txt';
$config['tasks']['audit_log']['truncate_log_file_path'] = '/web/ilios/cron/audit_logs.txt';
$config['tasks']['audit_log']['days_to_keep'] = 90;
$config['tasks']['audit_log']['rotate_logs'] = false;

/*
|--------------------------------------------------------------------------
| Calender and Time Selection Option Overrides
|--------------------------------------------------------------------------
|
| Option overrides for the calendar interface and hours selection fields
|
| ['time_selection_increments_per_hour']
|   This sets the total increments per hour on the time-selection dropdown fields.  To display the time for every
|   15 minutes of an hour, set this value to '4' (60 / 4 = 15), for every 10 minutes, set to '6' (60 / 6 = 10), etc.
|
| ['time_selection_total_increments']
|   Set the total number of hours that will appear in the hours select list by setting the grand total of all minutes-
|   increments in the list. A select list showing '6am - 8pm' would be 15 total hours, so you could choose one of the
|   following:
|   60 (@ 4 increments/hour) - :00, :15, :30, :45
|   90 (@ 6 increments/hour) - :00, :10, :20, :30, :40, :50
|   180 (@ 12 increments/hour) - :00, :05, :10, :15, :20, :25, :30, :35, :40, :45, :50, :55
|
| ['time_selection_hours_offset']
|    The starting hour of the time selection list, offset from midnight ('6' = 06:00am)
|
| ['calendar_options_time_step']
|   Customize incremental stepping of the dhtmlx calender. This is calculated by dividing 1 hour (60 minutes) by the
|   number of increments per hour value set above.  If the increments per hour is 4, then the calendar interface will
|   allow selections of minutes of :00, :15, :30, :45 for each hour.  6 increments/hour will allow times :00, :10, :20,
|   :30, :40, :50 for each hour.
*/

$config['time_selection_increments_per_hour'] = 4;
$config['time_selection_total_increments'] = 60;
$config['time_selection_hours_offset'] = 6;

//NOTE: No need to change this value! 'calendar_options_time_step' is calculated automatically based on the values
//above.  We strongly recommend leaving the default value unchanged, as modification may result in unexpected behavior.
$config['calendar_options_time_step'] = (60 / $config['time_selection_increments_per_hour']);

/*
|--------------------------------------------------------------------------
| User uc_uid options
|--------------------------------------------------------------------------
|
| Option overrides for setting the users uc_uid options.  Currently, the only available options are maximum and minimum
| length. If the uid for an institution has one standardized length, set both values to match.
|
| ['uid_min_length']
|   Sets the minimum length allowed for users' uc_uid
|
| ['uid_max_length']
|   Sets the maximum length allowed for users' uc_uid
|
*/

$config['uid_min_length'] = 9;
$config['uid_max_length'] = 9;

/*
|--------------------------------------------------------------------------
| Google Analytics Options
|--------------------------------------------------------------------------
|
| If you wish to use google Analytics you must specify the tracking id for your site
|
| ['ga_tracking_id']
|   The ID provided by google
|
| ['ga_cookie_domain']
|   Can be left on auto for most sites
|
*/

$config['ga_tracking_id'] = null;
$config['ga_cookie_domain'] = 'auto';

/*
|--------------------------------------------------------------------------
| Ilios Revision
|--------------------------------------------------------------------------
|
| Timestamp created during the build process.
| Used primarily for browser cache busting.
|
*/
$config['ilios_revision'] = "%%ILIOS_REVISION%%";

/*
|--------------------------------------------------------------------------
| Assetic script aggregation
|--------------------------------------------------------------------------
|
| Set to TRUE to enable script aggregation.
| This is recommended for production environments.
*/
$config['script_aggregation_enabled'] = false;
