<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Ps.Works',
            'Task',
            [
                
            ],
            // non-cacheable actions
            [
                
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    task {
                        iconIdentifier = works-plugin-task
                        title = LLL:EXT:works/Resources/Private/Language/locallang_db.xlf:tx_works_task.name
                        description = LLL:EXT:works/Resources/Private/Language/locallang_db.xlf:tx_works_task.description
                        tt_content_defValues {
                            CType = list
                            list_type = works_task
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'works-plugin-task',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:works/Resources/Public/Icons/user_plugin_task.svg']
			);
		
    }
);
