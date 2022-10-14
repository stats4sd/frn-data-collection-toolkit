
# FRN Data Collection Toolkit
A platform for researchers to share instruments, methods, and improve harmonisation of data collection with and for Farmer Research Networks.

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

## Setup Local Environment
1.	Clone repo: `git@github.com:stats4sd/frn-data-collection-toolkit.git frn-data`
2.	Copy `.env.example` as a new file and call it `.env`
3.	Update variables in `.env` file to match your local environment:
    a.	Check APP_URL is correct
    b.	Update DB_DATABASE (name of the local MySQL database to use), DB_USERNAME (local MySQL username) and DB_PASSWORD (local MySQL password)
4.	Create a local MySQL database with the same name used in the `.env` file
5.	Run the following setup commands in the root project folder:
```
composer install
php artisan key:generate
npm install
npm run dev
```
6.	Migrate the database: `php aritsan migrate:fresh --seed`
