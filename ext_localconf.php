<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'PublicEnragement.' . $_EXTKEY,
	'Phpcontent',
	array(
		'PHPContent' => 'list',
		
	),
	// non-cacheable actions
	array(
		'PHPContent' => 'list',
		
	)
);
