<?php
/**
 * Valuestore plugin for Craft CMS 3.x
 *
 * Easily store some loose values into files
 *
 * @link      https://superbig.co
 * @copyright Copyright (c) 2017 Superbig
 */

namespace superbig\valuestore\variables;

use superbig\valuestore\Valuestore;

use Craft;

/**
 * @author    Superbig
 * @package   Valuestore
 * @since     1.0.0
 */
class ValuestoreVariable
{
    // Public Methods
    // =========================================================================

    /**
     * @param null $filename
     *
     * @return null|\Spatie\Valuestore\Valuestore
     */
    public function create ($filename = null)
    {
        return Valuestore::$plugin->valuestoreService->create($filename);
    }
}
