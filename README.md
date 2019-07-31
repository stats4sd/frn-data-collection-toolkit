
# FRN Data Collection Toolkit
_A platform for researchers to share instruments, methods, and improve harmonisation of data collection with and for Farmer Research Networks_

### Core Tenets:
1. Tools shared through the platform are not prescriptive. They are templates/ideas/tools for users to take, modify, improve on and make their own.
2. Available tools should encourage 'good practice' in both data collection and study design / planning. 
3. Available tools should include clear guidance, including:
    - What their intended purpose is
    - The structure / types of data that result from use of the tool
    - Key indicators that the data collected through the tool can calculate
    - Possible suggestions on how to contextualise the tool.
4. The platform itself should be easy to use:
    - It will initially be available online, so will be naturally targeted at internet-enabled researchers. 
    - The tools should be easy to find, search and filter through.
    - The platform will translated into multiple languages. There will be a mechanism for including more languages in the future.
5. The platform will accept and be able to manage ODK form modules and analogue tools; both qualitative and quantitative instruments.
6. The design of the platform will be sufficiently open to enable future development, e.g.:
    - enabling quick packaging of particular sets of tools onto portable media (USB Sticks, DVDs)
    - ability to quickly print packs of analogue materials for sharing and discussions offline / without computers.

## Setup Dev Environment

### Standard Laravel setup

In a terminal window, starting where-ever you put your local development sites:

```
git clone git@github.com:stats4sd/frn-data-collection-toolkit.git frn-data
cd frn-data
composer install
npm install
cp .env-example .env
```
Then, update the values in .env:

```
APP_URL=http://frn-data.test

DB_DATABASE=frndata
DB_USERNAME= ##your_local_mysql_username##
DB_PASSWORD= ##your_local_mysql_password##
```

Create the database: 
```
mysql -u ##your_local_mysql_username## -p 
(enter your password)
> create database frndata;
> exit;

```

Migrate:
```
php artisan migrate
```





