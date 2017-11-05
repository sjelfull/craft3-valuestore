<?php
/**
 * Valuestore plugin for Craft CMS 3.x
 *
 * Easily store some loose values into files
 *
 * @link      https://superbig.co
 * @copyright Copyright (c) 2017 Superbig
 */

namespace superbig\valuestore;

use superbig\valuestore\services\ValuestoreService as ValuestoreServiceService;
use superbig\valuestore\variables\ValuestoreVariable;

use Craft;
use craft\base\Plugin;
use craft\services\Plugins;
use craft\events\PluginEvent;
use craft\web\twig\variables\CraftVariable;

use yii\base\Event;

/**
 * Class Valuestore
 *
 * @author    Superbig
 * @package   Valuestore
 * @since     1.0.0
 *
 * @property  ValuestoreServiceService $valuestoreService
 */
class Valuestore extends Plugin
{
    // Static Properties
    // =========================================================================

    /**
     * @var Valuestore
     */
    public static $plugin;

    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function init ()
    {
        parent::init();
        self::$plugin = $this;

        Event::on(
            CraftVariable::class,
            CraftVariable::EVENT_INIT,
            function (Event $event) {
                /** @var CraftVariable $variable */
                $variable = $event->sender;
                $variable->set('valuestore', ValuestoreVariable::class);
            }
        );

        Craft::info(
            Craft::t(
                'valuestore',
                '{name} plugin loaded',
                [ 'name' => $this->name ]
            ),
            __METHOD__
        );
    }

    // Protected Methods
    // =========================================================================

}
