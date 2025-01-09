# This is my package add-faq

[![Latest Version on Packagist](https://img.shields.io/packagist/v/shefoo10/add-faq.svg?style=flat-square)](https://packagist.org/packages/shefoo10/add-faq)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/shefoo10/add-faq/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/shefoo10/add-faq/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/shefoo10/add-faq/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/shefoo10/add-faq/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/shefoo10/add-faq.svg?style=flat-square)](https://packagist.org/packages/shefoo10/add-faq)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/add_FAQ.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/add_FAQ)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require shefoo10/add-faq

php artisan add-faq:install
```
## Expected Output
```text
Publishing migrations...

 Would you like to run the migrations now? (yes/no) [no]:
 > yes

Running migrations...

   INFO  Running migrations.

  2025_01_09_224821_create_f_a_q_s_table ...................................................... 22.33ms DONE

Publishing service provider...
add-faq has been installed!

   INFO  Publishing [add-faq-model] assets.

  Copying file [C:\Users\DONATELO\IdeaProjects\add_FAQ\Models\FAQ.php] to [C:\Users\DONATELO\IdeaProjects\{ Project Name }\app\Models\FAQ.php]  DONE

 Which panel do you want to install the package for? [admin]:
 > admin

File [path / to / { Project Name } \app\Filament/Admin/Resources/FAQResource.php] Added to Admin Panel
File [path / to / { Project Name } \app\Filament/Admin/Resources/FAQResource/Pages/CreateFAQ.php] Added to Admin Panel
File [path / to / { Project Name } \app\Filament/Admin/Resources/FAQResource/Pages/EditFAQ.php] Added to Admin Panel
File [path / to / { Project Name } \app\Filament/Admin/Resources/FAQResource/Pages/ListFAQs.php] Added to Admin Panel

```

