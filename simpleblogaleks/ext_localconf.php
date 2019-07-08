<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Ion2s.Simpleblogaleks',
            'Bloglisting',
            [
                'Blog' => 'list, addForm, add, show, updateForm, update, delete, deleteForm'
            ],
            // non-cacheable actions
            [
                'Blog' => 'list, addForm, add, show, updateForm, update, delete, deleteForm'
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    bloglisting {
                        iconIdentifier = simpleblogaleks-plugin-bloglisting
                        title = LLL:EXT:simpleblogaleks/Resources/Private/Language/locallang_db.xlf:tx_simpleblogaleks_bloglisting.name
                        description = LLL:EXT:simpleblogaleks/Resources/Private/Language/locallang_db.xlf:tx_simpleblogaleks_bloglisting.description
                        tt_content_defValues {
                            CType = list
                            list_type = simpleblogaleks_bloglisting
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'simpleblogaleks-plugin-bloglisting',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:simpleblogaleks/Resources/Public/Icons/user_plugin_bloglisting.svg']
			);
		
    }
);
