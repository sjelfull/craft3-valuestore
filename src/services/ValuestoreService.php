<?php
/**
 * Valuestore plugin for Craft CMS 3.x
 *
 * Easily store some loose values into files
 *
 * @link      https://superbig.co
 * @copyright Copyright (c) 2017 Superbig
 */

namespace superbig\valuestore\services;

use Craft;
use craft\base\Component;
use Spatie\Valuestore\Valuestore;
use superbig\valuestore\models\ValuestoreModel;
use craft\helpers\FileHelper;

/**
 * @author    Superbig
 * @package   Valuestore
 * @since     1.0.0
 */
class ValuestoreService extends Component
{
    // Public Methods
    // =========================================================================

    /**
     * Create a Valuestore instance
     *
     * @param null $filename
     *
     * @return null|Valuestore
     */
    public function create ($filename = null)
    {
        if ( !$filename ) return null;

        $path = Craft::$app->path->getStoragePath() . DIRECTORY_SEPARATOR . 'valuestore' . DIRECTORY_SEPARATOR;

        if ( !file_exists($path) && !is_dir($path) ) {
            FileHelper::createDirectory($path);
        }

        return Valuestore::make($path . $filename);
    }
}
