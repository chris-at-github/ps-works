<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Ps.Works',
            'Task',
            'Works Task'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('works', 'Configuration/TypoScript', 'Works');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_works_domain_model_task', 'EXT:works/Resources/Private/Language/locallang_csh_tx_works_domain_model_task.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_works_domain_model_task');

    }
);
