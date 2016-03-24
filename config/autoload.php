<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package Con4gis_forum
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	'C4GForumBackend'             => 'system/modules/con4gis_forum/C4GForumBackend.php',
	'C4GForumHelper'              => 'system/modules/con4gis_forum/C4GForumHelper.php',
	'C4GForumSubscription'        => 'system/modules/con4gis_forum/C4GForumSubscription.php',
	'C4gForumSingleFileUpload'    => 'system/modules/con4gis_forum/C4gForumSingleFileUpload.php',

	// Lib
	'C4GUtils'                    => 'system/modules/con4gis_forum/lib/C4GUtils.php',
	'C4GTags'                     => 'system/modules/con4gis_forum/widgets/C4GTags.php',
	'C4gForumModel'               => 'system/modules/con4gis_forum/models/C4gForumModel.php',

	// Models
    'C4gForumPost'                => 'system/modules/con4gis_forum/models/C4gForumPost.php',
    'C4gForumMember'              => 'system/modules/con4gis_forum/models/C4gForumMember.php',
    'C4gForumSession'             => 'system/modules/con4gis_forum/models/C4gForumSession.php',

	// Modules
	'C4gForumAjaxApi'             => 'system/modules/con4gis_forum/modules/api/C4gForumAjaxApi.php',
	'Module_c4g_forum'            => 'system/modules/con4gis_forum/Module_c4g_forum.php',
	'Module_c4g_forum_breadcrumb' => 'system/modules/con4gis_forum/Module_c4g_forum_breadcrumb.php',

    // Widgets
    'Avatar'                      => 'system/modules/con4gis_forum/widgets/Avatar.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'be_tag_widget'            => 'system/modules/con4gis_forum/templates/backend/widget',
	'mod_c4g_forum'            => 'system/modules/con4gis_forum/templates',
	'c4g_subscription'         => 'system/modules/con4gis_forum/templates/mail',
	'mod_c4g_forum_breadcrumb' => 'system/modules/con4gis_forum/templates',
	'mod_c4g_forum_plainhtml'  => 'system/modules/con4gis_forum/templates',
    'forum_user_data'          => 'system/modules/con4gis_forum/templates/partials',
    'member_grouped'           => 'system/modules/con4gis_forum/templates/member'
));
