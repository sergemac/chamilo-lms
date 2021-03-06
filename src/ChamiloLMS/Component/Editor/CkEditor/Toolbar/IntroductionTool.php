<?php
/* For licensing terms, see /license.txt */

namespace ChamiloLMS\Component\Editor\CkEditor\Toolbar;

/**
 * Class IntroductionTool
 * @package ChamiloLMS\Component\Editor\CkEditor\Toolbar
 */
class IntroductionTool extends Basic
{
    public function getConfig()
    {
        $config['toolbarGroups'] = array(
//            array('name' => 'document',  'groups' =>array('mode', 'document', 'doctools')),
//            array('name' => 'clipboard',    'groups' =>array('clipboard', 'undo', )),
            //array('name' => 'editing',    'groups' =>array('clipboard', 'undo', )),
            //array('name' => 'forms',    'groups' =>array('clipboard', 'undo', )),
            '/',
            array('name' => 'basicstyles',    'groups' =>array('basicstyles', 'cleanup', )),
            array('name' => 'paragraph',    'groups' =>array('list', 'indent', 'blocks', 'align' )),
            array('name' => 'links'),
            array('name' => 'insert'),
            '/',
            array('name' => 'styles'),
            array('name' => 'colors'),
            array('name' => 'tools'),
            array('name' => 'others'),
            array('name' => 'mode')
        );

        $config['fullPage'] = true;
        //$config['height'] = '200';

        return $config;
    }
}
