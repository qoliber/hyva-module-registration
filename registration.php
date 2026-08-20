<?php
/**
 * Created by Qoliber
 *
 * @category    Qoliber
 * @package     Qoliber_HyvaModuleRegistration
 * @author      Jakub Winkler <jwinkler@qoliber.com>
 */

use Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(
    ComponentRegistrar::MODULE,
    'Qoliber_HyvaModuleRegistration',
    __DIR__
);
