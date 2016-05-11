# ChangeLog

## Version 5.2.14 (Nov 1st 2015)
* Allow addresses with IDN (Internationalized Domain Name) in PHP 5.3+, thanks to @fbonzon
* Allow access to POP3 errors
* Make all POP3 private properties and methods protected
* **SECURITY** Fix vulnerability that allowed email addresses with line breaks (valid in RFC5322) to pass to SMTP, permitting message injection at the SMTP level. Mitigated in both the address validator and in the lower-level SMTP class. Thanks to Takeshi Terada.
* Updated Brazilian Portuguese translations (Thanks to @phelipealves)

## Version 5.2.13 (Sep 14th 2015)
* Rename internal oauth class to avoid name clashes
* Improve Estonian translations

## Version 5.2.12 (Sep 1st 2015)
* Fix incorrect composer package dependencies
* Skip existing embedded image `cid`s in `msgHTML`

## Version 5.2.11 (Aug 31st 2015)
* Don't switch to quoted-printable for long lines if already using base64
* Fixed Travis-CI config when run on PHP 7
* Added Google XOAUTH2 authentication mechanism, thanks to @sherryl4george
* Add address parser for RFC822-format addresses
* Update MS Office MIME types
* Don't convert line breaks when using quoted-printable encoding
* Handle MS Exchange returning an invalid empty AUTH-type list in EHLO
* Don't set name or filename properties on MIME parts that don't have one

## Version 5.2.10 (May 4th 2015)
* Add custom header getter
* Use `application/javascript` for .js attachments
* Improve RFC2821 compliance for timelimits, especially for end-of-data
* Add Azerbaijani translations (Thanks to @mirjalal)
* Minor code cleanup for robustness
* Add Indonesian translations (Thanks to @ceceprawiro)
* Avoid `error_log` Debugoutput naming clash
* Add ability to parse server capabilities in response to EHLO (useful for SendGrid etc)
* Amended default values for WordWrap to match RFC
* Remove html2text converter class (has incompatible license)
* Provide new mechanism for injecting html to text converters
* Improve pointers to docs and support in README
* Add example file upload script
* Refactor and major cleanup of EasyPeasyICS, now a lot more usable
* Make set() method simpler and more reliable
* Add Malay translation (Thanks to @nawawi)
* Add Bulgarian translation (Thanks to @mialy)
* Add Armenian translation (Thanks to Hrayr Grigoryan)
* Add Slovenian translation (Thanks to Klemen Tušar)
* More efficient word wrapping
* Add support for S/MIME signing with additional CA certificate (thanks to @IgitBuh)
* Fix incorrect MIME structure when using S/MIME signing and isMail() (#372)
* Improved checks and error messages for missing extensions
* Store and report SMTP errors more consistently
* Add MIME multipart preamble for better Outlook compatibility
* Enable TLS encryption automatically if the server offers it
* Provide detailed errors when individual recipients fail
* Report more errors when connecting
* Add extras classes to composer classmap
* Expose stream_context_create options via new SMTPOptions property
* Automatic encoding switch to quoted-printable if message lines are too long
* Add Korean translation (Thanks to @ChalkPE)
* Provide a pointer to troubleshooting docs on SMTP connection failure

## Version 5.2.9 (Sept 25th 2014)
* **Important: The autoloader is no longer autoloaded by the PHPMailer class**
* Update html2text from https://github.com/mtibben/html2text
* Improve Arabic translations (Thanks to @tarekdj)
* Consistent handling of connection variables in SMTP and POP3
* PHPDoc cleanup
* Update composer to use PHPUnit 4.1
* Pass consistent params to callbacks
* More consistent handling of error states and debug output
* Use property defaults, remove constructors
* Remove unreachable code
* Use older regex validation pattern for troublesome PCRE library versions
* Improve PCRE detection in older PHP versions
* Handle debug output consistently, and always in UTF-8
* Allow user-defined debug output method via a callable
* msgHTML now converts data URIs to embedded images
* SMTP::getLastReply() will now always be populated
* Improved example code in README
* Ensure long filenames in Content-Disposition are encoded correctly
* Simplify SMTP debug output mechanism, clarify levels with constants
* Add SMTP connection check example
* Simplify examples, don't use mysql* functions

## Version 5.2.8 (May 14th 2014)
* Increase timeout to match RFC2821 section 4.5.3.2 and thus not fail greetdelays, fixes #104
* Add timestamps to default debug output
* Add connection events and new level 3 to debug output options
* Chinese language update (Thanks to @binaryoung)
* Allow custom Mailer types (Thanks to @michield)
* Cope with spaces around SMTP host specs
* Fix processing of multiple hosts in connect string
* Added Galician translation (Thanks to @donatorouco)
* Autoloader now prepends
* Docs updates
* Add Latvian translation (Thanks to @eddsstudio)
* Add Belarusian translation (Thanks to @amaksymiuk)
* Make autoloader work better on older PHP versions
* Avoid double-encoding if mbstring is overloading mail()
* Add Portuguese translation (Thanks to @Jonadabe)
* Make quoted-printable encoder respect line ending setting
* Improve Chinese translation (Thanks to @PeterDaveHello)
* Add Georgian translation (Thanks to @akalongman)
* Add Greek translation (Thanks to @lenasterg)
* Fix serverHostname on PHP < 5.3
* Improve performance of SMTP class
* Implement automatic 7bit downgrade
* Add Vietnamese translation (Thanks to @vinades)
* Improve example images, switch to PNG
* Add Croatian translation (Thanks to @hrvoj3e)
* Remove setting the Return-Path and deprecate the Return-path property - it's just wrong!
* Fix language file loading if CWD has changed (@stephandesouza)
* Add HTML5 email validation pattern
* Improve Turkish translations (Thanks to @yasinaydin)
* Improve Romanian translations (Thanks to @aflorea)
* Check php.ini for path to sendmail/qmail before using default
* Improve Farsi translation (Thanks to @MHM5000)
* Don't use quoted-printable encoding for multipart types
* Add Serbian translation (Thanks to ajevremovic at gmail.com)
* Remove useless PHP5 check
* Use SVG for build status badges
* Store MessageDate on creation
* Better default behaviour for validateAddress

## Version 5.2.7 (September 12th 2013)
* Add Ukrainian translation from @Krezalis
* Support for do_verp
* Fix bug in CRAM-MD5 AUTH
* Propagate Debugoutput option to SMTP class (@Reblutus)
* Determine MIME type of attachments automatically
* Add cross-platform, multibyte-safe pathinfo replacement (with tests) and use it
* Add a new 'html' Debugoutput type
* Clean up SMTP debug output, remove embedded HTML
* Some small changes in header formatting to improve IETF msglint test results
* Update test_script to use some recently changed features, rename to code_generator
* Generated code actually works!
* Update SyntaxHighlighter
* Major overhaul and cleanup of example code
* New PHPMailer graphic
* msgHTML now uses RFC2392-compliant content ids
* Add line break normalization function and use it in msgHTML
* Don't set unnecessary reply-to addresses
* Make fakesendmail.sh a bit cleaner and safer
* Set a content-transfer-encoding on multiparts (fixes msglint error)
* Fix cid generation in msgHTML (Thanks to @digitalthought)
* Fix handling of multiple SMTP servers (Thanks to @NanoCaiordo)
* SMTP->connect() now supports stream context options (Thanks to @stanislavdavid)
* Add support for iCal event alternatives (Thanks to @reblutus)
* Update to Polish language file (Thanks to Krzysztof Kowalewski)
* Update to Norwegian language file