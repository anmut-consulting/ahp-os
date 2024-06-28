# AHP-OS

AHP-OS is a php program package for the Analytic Hierarchy Process, a 
mathematical tool to support rational decision making. It is an online
tool written in php with a web browser interface, where users can 
register, login and define their own decision hierarchies.
Example: [bpmsg.com/ahp](https://bpmsg.com/ahp/)

Php package (c) Klaus D Goepel, 2013-2024

## AHP-OS Features

* Flexible definition of decision hierarchies as text input, following
  a simple syntax with multi-language support using Unicode character 
  coding,
* Weight calculation (hierarchy mode) and alternative evaluation 
 (alternative mode) using the AHP eigenvector method,
* Pairwise comparison input, highlighting the top-3 most inconsistent 
  judgments,
* Partial judgments,
* A posteriori application of different AHP judgment scales,
* Group decision making using weighted geometric mean aggregation of 
 individual judgments (WGM-AIJ),
* Group consensus calculation based on Shannon α and β-entropy,
* Weight uncertainty estimation using Monte Carlo simulation,
* Sensitivity analysis,
* Weighted sum model (WSM) and weighted product model (WPM) for the
  aggregation of alternatives,
* Export of input and result data as comma separated value (CSV) files
  for further processing or presentation in a spreadsheet program,
* Export/Import of AHP-Projects and priorities as json text files.
* Group consensus cluster analysis (still experimental)

### Languages
Currently language files for English, German, Spanish, Portugese Turkish 
and Russian are included. They can be found in the sub-directory
`language/xx` with xx = en, de, es, pt, tr, ru.

## Installation

In your http root directory:
`git clone https://github.com/bpmsg/ahp-os.git ahp`
Create a `config.php` file, or duplicate the `config-sample.php` file
in the `includes` directory and rename it to `config.php`.
Edit/modify `includes/config.php` to set your database and mail 
parameters. Set permission for `config.php` to 640.
Run "composer install" to install dependencies.

As a database, either **`sqlite`** or **`mysql`** (MariaDB) can be 
defined. If you expect to have less than hundred users, sqlite will 
work fine. Using `mysql`, create an empty database first.
**Note: Please ensure that php PDO drivers are enabled.** 
You can check with phpinfo() under PDO, PDO support. 
Run `db/ahp-sql-create.php` to create the necessary tables and triggers.

AHP-OS is tested to run with PHP version 7.2, 7.3, and 7.4.9, 
sqlite 3.22 and 5.5.5-10.3.29-MariaDB.

## Usage

Run your web browser and open `http://your-web-root/ahp/`
In order to use the package, you need to create a user account
by registering on the web interface.


A complete manual and quick reference guide can be found in the `docs` 
folder. Mathematical background and details about the implementation
are published in:

> Goepel, K.D. (2018). Implementation of an Online Software Tool for 
> the Analytic Hierarchy Process (AHP-OS). 
> International Journal of the Analytic Hierarchy Process, 
> Vol. 10 Issue 3 2018, pp 469-487,
> [link](https://doi.org/10.13033/ijahp.v10i3.590)

## User administration

The `ADMIN` user is defined by the user id given in the `config.php` 
file. The package allows to administer users. Users, not active over a 
period of 90 days (can be set in `includes/login/do/do-user-admin`, 
`$daysInactive`), can be deactivated by the administrator and an 
optional email with a reactivation link will be sent. If their account 
is  not activated within 48 hours (set with `$daysNotActivated`), 
the complete user account with all data can be deleted by the 
admninistrator. 

## Limitations

Defined in config.php:
* WLMAX   = 60 word length of nodes and leafs
* CRITMAX = 20 max. number of criteria per node
* ALTAHP  = 20 number of alternatives
* SESSIONLMT = 50 number of projects per user
* NVAR = 1000 variaton of judgments (Monte Carlo)

Defined in class ahphier.php:
* TXT_MAX = 6000 characters defining the hierarchy
* NODE_CNT = 50 number of nodes
* LEAF_MAX = 100 number of leafs in the hierarchy

## Directory structure

The working directory (`ahp`) should be a subdirectory of
the web root directory.

```
ahp-\
     |-- ahp.php (Main page)
     |-- ahp-calc.php (AHP priority calculator)
     |-- ahp-calc1.php
     |-- ahp-cluster.php
     |-- ahp-hierarchy.php (AHP hierarchies)
     |-- ahp-hiercalc.php
     |-- ahp-hiergini.php
     |-- ahp-news.php (Latest news)
     |-- ahp-alt.php
     |-- ahp-alt1.php
     |-- ahp-altcalc.php
     |-- ahp-g-input.php
     |-- ahp-group.php (AHP results)
     |-- ahp-group-graph.php (diagram output)
     |-- ahp-project-import.php (Import project from json file)
     |-- ahp-session-admin.php (AHP project administration)
     |-- ahp-user-recover.php (Recover user from a backup database)
     |-- cl-graph  (diagram output for ahp-cluster)
     |-- maintenance.php
     |-- index.php (entry page)
     |-- composer.json
     |
     |-- classes-\
     |           AhpCalc (Eigenvector of DM)
     |           AhpCalcIo (extends AhpCalc, html/csv i/o)
     |           AhpCluster.php (group consensus cluster analysis)
     |           AhpColors (html coloring)
     |           AhpDb (database functions)
     |           AhpGroup (group result calculation)
     |           AhpHier (Decision hierarchies)
     |           AhpHierAlt (extends AhpHier for alternatives)
     |           (JsCheck) by Gustav Eklundh
     |           PhpUtil (General functions)
     |           WebHtml (header/footer for html output)
     |-- db -\ 
     |        ahp_os.db (sqlite database when used)
     |        ahp-sql-create (for installation only,
     |                        generates sql tables & triggers)
     |--includes-\
     |            (config.php to be generated by user)
     |            config-sample.php (Sample configuration file)
     |            footer.html
     |            header.html
     |            showCaptcha.php
     |            showCaptchaTxt.php
     |            style.css (style sheet)
     |            fonts --- times_new_yorker.ttf
     |            |
     |            |--login ------AhpAdmin (class, extends LoginAdmin)
     |            |              form.donations
     |            (phpgraphlib)  form.edit
     |-- docs                    form.login-hl
     |                           form.newdon
     |-- images -- AHP-icon      form.registration
     |             ahp-os-icon   form.UserAdminMenu
     |                           Login.php (class)
     |--js -- ahp-group          LoginAdmin.php (class, extends Login)
     |        ahp-session-admin  LoginDE/EN/ES/PT (language texts)
     |        btnred             Registration.php (class)
     |        cfm                |
     |        cfmdef              \
     |        delcfm               do -do-dbIntegrity
     |        lvecfm                   do-donor-admin
     |        sh-part                  do-edit
     |        webFont                  do-log
     |        letmein                  do-register
     |        jQuery.3.6.0             do-reset-pw
     |                                 do-user-admin (user administr.)
     |
     |--language -- de/en -- AhpCalcXX, AhpDbXX, AhpXX, AhpGroupXX
     |              es/pt    AhpGroupResXX, AhpHierarchyXX,
     |              tr/ru    AhpHierXX, AhpHierginiXX, AhpNewsXX,
     |--views (html menus)   AhpPrioCalcXX, AhpSessionAdminXX
     |--vendor (will contain phpMailer)
```
## Dependencies
The source code includes the source of a modified `phpgraphlib` by 
Elliott Brueggeman and `jscheck` by Gustav Eklundh to check, whether
JavaScript is enabled for the browser. `PHPMailer` in the vendor 
directory is used for email sending.

## SQL database structure and triggers
There are 6 tables in the database, 4 of them to store ahp data:
* users: user data
* projects: project data 
* pwc: pairwise comparisons of participants
* alternatives: ahp alternative names

### Tables
```
users           user_id (primary, ai)
                user_name unique,
projects        project_id (primary, ai), 
                project_sc (unique), 
                project_author (foreign key users,user_name)
pwc             project_sc (foreign key projects.project_sc)
                pwc_id (primary, ai)
alternatives    project_sc (foreign key projects.project_sc)
audit           a_id (primary, ai)
donations       tr_no (primary, ai)
```
### Triggers
In the audit table entries are triggered by user and admin actions:
```
a_trg   a_act (activity)
U       User login
        Failed login
        User activated
        User deactivated
        Change of remember me token
        New user name
        Change of user email
        Password change
        Password reset
        Other
I       New user registration
D       User deleted
```
Clean audit table will delete all "Other" entries.
## License
The work is published under GNU GENERAL PUBLIC LICENSE Version 3.

## Work in progress!

2022-01-28 - First version added to svn  
2022-02-17 - Import/Export function for projects added
             ToDo: translation, move menu to views  
2022-03-01 - Group consensus cluster analysis added (experimental)  
2023-12-30 - Turkish translation, text field lenth for criteria set to 99  
2024-06-28 - Russian translation added

