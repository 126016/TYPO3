<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Ion2s.Simpleblogaleks',
            'Bloglisting',
            'Simpleblog(Frontendplugin)'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('simpleblogaleks', 'Configuration/TypoScript', 'Simple Blog Extension Aleksandra');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_simpleblogaleks_domain_model_blog', 'EXT:simpleblogaleks/Resources/Private/Language/locallang_csh_tx_simpleblogaleks_domain_model_blog.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_simpleblogaleks_domain_model_blog');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_simpleblogaleks_domain_model_post', 'EXT:simpleblogaleks/Resources/Private/Language/locallang_csh_tx_simpleblogaleks_domain_model_post.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_simpleblogaleks_domain_model_post');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_simpleblogaleks_domain_model_comment', 'EXT:simpleblogaleks/Resources/Private/Language/locallang_csh_tx_simpleblogaleks_domain_model_comment.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_simpleblogaleks_domain_model_comment');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_simpleblogaleks_domain_model_author', 'EXT:simpleblogaleks/Resources/Private/Language/locallang_csh_tx_simpleblogaleks_domain_model_author.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_simpleblogaleks_domain_model_author');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_simpleblogaleks_domain_model_tag', 'EXT:simpleblogaleks/Resources/Private/Language/locallang_csh_tx_simpleblogaleks_domain_model_tag.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_simpleblogaleks_domain_model_tag');

    }
);
