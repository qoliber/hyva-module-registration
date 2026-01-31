# Changelog

All notable changes to the Qoliber Hyva Module Registration will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/).

## [1.0.0] - 2025-10-10

### Added
- Stable release of Hyva Module Registration module
- Automatic registration of Qoliber modules for Hyva themes compatibility

### Changed
- Migrated from master to main branch as primary development branch
- Updated composer.json reference from "master" to "main"

## [1.0.0-rc1] - 2024-09-18

### Added
- Initial release candidate for Hyva Module Registration
- Created RegisterModulesForHyva observer (Observer/RegisterModulesForHyva.php)
- Automatically registers configured Qoliber modules with Hyva theme system
- Uses ComponentRegistrar to resolve module paths dynamically
- Listens to Hyva configuration events to inject module extensions
- Supports configurable module list via dependency injection
- Extracts module paths relative to Magento base directory (BP)
- Adds modules to Hyva's extensions configuration array
- Created etc/events.xml for observer registration
- Added etc/di.xml for module list configuration
- Set PHP version requirement to 8.1, 8.2, or 8.3
- Added dependency on magento/framework and hyva-themes/magento2-theme-module
- Configured PSR-4 autoloading for Qoliber\HyvaModuleRegistration namespace
- Set source repository to git@gitlab.qoliber.dev:qoliber/hyva-module-registration.git
- Set minimum-stability to "dev" for development flexibility

### Changed
- Updated module name in composer.json to qoliber/hyva-module-registration
