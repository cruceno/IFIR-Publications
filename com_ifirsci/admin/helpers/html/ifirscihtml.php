<?php 
// No direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

class JHTMLifirscihtml
{
    /**
     * Renders HTML hidden fields for given controller, task and layout
     */
    public static function hiddenfields($controller, $task='', $layout='default')
    {
        $str = '<input type="hidden" name="option" value="com_jresearch" />';

        if(is_string($controller))
                $str .= '<input type="hidden" name="controller" value="'.$controller.'" />';

        if(is_string($task))
                $str .= '<input type="hidden" name="task" value="'.$task.'" />';

        if(is_string($layout))
                $str .= '<input type="hidden" name="layout" value="'.$layout.'" />';

        return $str;
    }
}