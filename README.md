PHP Typography
==============

This is an updated version of the [original PHP Typography project](http://kingdesk.com/projects/php-typography/) by KINGdesk, updated to be PSR-0 compatible and available for use with Composer.

Example Input:

	<p>This is an example of the PHP Typography project.</p>

	<p>It was release in 2009, and helps improve web typography.</p>

	<p>It "replaces characters" and adds wrapper spans for adjusting the appearance & style of a page.</p>

Example Output:

	<p>This is an exam­ple of the <span class="caps">PHP</span> Typog­ra­phy project.</p>

	<p>It was release in <span class="numbers">2009</span>, and helps improve web typography.</p>

	<p>It “replaces char­ac­ters” and adds wrap­per spans for adjust­ing the appear­ance <span class="amp">&amp;</span> style of a page.</p>


The original documentation is below.

-----

## Features

PHP Typography is a PHP based solution to greatly improve web typography. It features the following capabilities (including granular control):

- Hyphenation
- Spacing control, including: gluing values to units, widow protection, and forced internal wrapping of long URLs & email addresses.
- Intelligent character replacement, including smart handling of: quote marks ( “foo” ), dashes ( foo – bar ), ellipses ( … ), trademarks ( ™ ), math symbols ( 1024×768 ), fractions ( 12⁄23 ), and ordinal suffixes ( 3rd )
- CSS hooks for styling: ampersands (class `amp`), acronyms (class `caps`), numbers (class `numbers`), initial single quotes (class `quo`), and initial double quotes & guillemets (class `dquo`).

This project merges, builds upon, and generalizes the functionality of wp-​​Typogrify, wp-​​Hyphenate and SmartyPants.


## Implementation

While complication is added when manipulating the many options, implementing PHP Typography can be as easy as this:

	<?php
	$html = "raw HTML here... ";

	include('path/to/php-typography.php');
	$typo = new phpTypography();
	$html = $typo->process($html);

	echo $html;
	?>

PHP Typography is designed for easy integration with plugin architectures of PHP based content management systems. It has already been ported to WordPress and Zikula CMS. We would like to see other developers pick up this code and implement it for other CMSs. Specifically:

- Drupal
- Joomla
- Expression Engine

If you are a developer for these (or any other PHP based CMS), the heavy lifting is done. You just need to hook it into your CMS.


## Requirements

PHP Typography has the following requirements:

- The host server must run PHP 5 or later
- Text must be encoded UTF-​​8
- All markup must be valid xHTML, specifically:
	* Every element must be closed,
	* Every attribute must have a value enclosed in quotes, and
	* Tag names and attributes must be lowercase.
