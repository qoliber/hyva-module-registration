<?php
/**
 * Created by Qoliber
 *
 * @category    Qoliber
 * @package     Qoliber_HyvaModuleRegistration
 * @author      Jakub Winkler <jwinkler@qoliber.com>
 */

declare(strict_types=1);

namespace Qoliber\HyvaModuleRegistration\Observer;

use Magento\Framework\Component\ComponentRegistrar;
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class RegisterModulesForHyva implements ObserverInterface
{
    /** @var \Magento\Framework\Component\ComponentRegistrar  */
    private ComponentRegistrar $componentRegistrar;

    /**
     * @param \Magento\Framework\Component\ComponentRegistrar $componentRegistrar
     * @param string[] $moduleList
     */
    public function __construct(
        ComponentRegistrar $componentRegistrar,
        protected array $moduleList = []
    ) {
        $this->componentRegistrar = $componentRegistrar;
    }

    /**
     * Execute
     *
     * @param \Magento\Framework\Event\Observer $observer
     * @return void
     */
    public function execute(Observer $observer): void
    {
        $config = $observer->getData('config');
        $extensions = $config->hasData('extensions') ? $config->getData('extensions') : [];

        foreach ($this->moduleList as $module) {
            $path = $this->componentRegistrar->getPath(ComponentRegistrar::MODULE, $module);

            if ($path) {
                $extensions[] = ['src' => substr($path, strlen(BP) + 1)];
            }
        }

        $config->setData('extensions', $extensions);
    }
}
