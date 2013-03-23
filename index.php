<?php
include('lib/PHPTypography/PHPTypography.php');
include('lib/PHPTypography/Parser/ParseHTML.php');
include('lib/PHPTypography/Parser/ParseText.php');

$text	= new \PHPTypography\PHPTypography();

$input	= <<<EOD
<p>This is an example of the PHP Typography project.</p>

<p>It was release in 2009, and helps improve web typography.</p>

<p>It "replaces characters" and adds wrapper spans for adjusting the appearance & style of a page.</p>
EOD;

$output	= $text->process($input);

echo '<pre>'.htmlspecialchars($output);


