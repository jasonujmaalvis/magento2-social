# Magento 2: Social
Simple module for keeping your social profile URLs in one manageable area.

## Installation
Recommended installation through composer, within your Magento root directory enter the following:

    composer require jasonalvis/magento2-social

Alternatively you can install manually by following these steps:

  1. Install the [magento2-core](https://github.com/jasonalvis/magento2-core) dependency module, following the [README](https://github.com/jasonalvis/magento2-core/blob/master/README.md)
  2. Now you can return to install this module, [download](https://github.com/jasonalvis/magento2-social/archive/master.zip) the repo zip file and extract
  3. You should have a folder called 'magento2-social-master'. Rename this folder to 'Social'
  4. Under your Magento site folder create a new directory 'app/code/JasonAlvis'
  5. Upload the module to this folder 'app/code/JasonAlvis/Social'    

## Enable the module

    php bin/magento module:enable JasonAlvis_Core
    php bin/magento module:enable JasonAlvis_Social

You may also need to re-compile:

    php bin/magento setup:upgrade
    php bin/magento setup:di:compile    

## Module configuration
The module configuration can be found through the main menu under Jason Alvis.

### Profiles
Current social media profiles available:

  * Twitter
  * Facebook
  * Instagram
  * Pinterest
  * GitHub

## Integration
By default profile links display in the footer.

Move xml block within your theme `<VendorName>/<ThemeName>/JasonAlvis_Social/layout/default.xml`:

```xml
<page xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="urn:magento:framework:View/Layout/etc/page_configuration.xsd">
    <body>
        <move element="jasonalvis_social.profiles" destination="main" after="-" />
    </body>
</page>
```

Remove xml block within your theme `<VendorName>/<ThemeName>/JasonAlvis_Social/layout/default.xml`:

```xml
<page xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="urn:magento:framework:View/Layout/etc/page_configuration.xsd">
    <body>
        <referenceContainer name="footer">
            <referenceBlock name="jasonalvis_social.profiles" remove="true" />
        </referenceContainer>
    </body>
</page>
```

Override the default templates within your theme create the following files:

    <VendorName>/<ThemeName>/JasonAlvis_Social/templates/profiles.phtml

The original contents of the files can be found under:

    <Root>/vendor/jasonalvis/magento2-social/view/frontend/templates/profiles.phtml
