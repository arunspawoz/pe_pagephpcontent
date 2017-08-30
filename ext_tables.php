<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	$_EXTKEY,
	'Phpcontent',
	'Page PHP Content'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Page PHP Content Element');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_pepagephpcontentelement_domain_model_phpcontent', 'EXT:pe_pagephpcontentelement/Resources/Private/Language/locallang_csh_tx_pepagephpcontentelement_domain_model_phpcontent.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_pepagephpcontentelement_domain_model_phpcontent');
