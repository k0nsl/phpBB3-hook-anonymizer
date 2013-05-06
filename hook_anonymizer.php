<?php
/**
 * Copyright (C) 2013 by k0nsl (i.am@k0nsl.org)
*/

/**
 * @ignore
 */
if (!defined('IN_PHPBB'))
{
   exit;
}

/**
 * This hook injects the anonymizer code
 */
function hook_inject_anonymizer(&$hook)
{
   /* should I simply echo the JS stuff here, or..? */
}

/**
 * We want it only on normal pages and not administrative ones.
 */
if (!defined('ADMIN_START'))
{
   $phpbb_hook->register(array('template', 'display'), 'hook_inject_anonymizer');
}