<?php
defined('TYPO3_MODE') || die();

call_user_func(function()
{
    /**
     * Temporary variables
     */
    $extensionKey = 'the_praktikum_projekt1';

    /**
     * Default TypoScript for ThePraktikumProjekt1
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript',
        'The Praktikum Projekt 1'
    );
});
