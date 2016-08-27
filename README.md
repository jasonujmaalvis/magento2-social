# Magento 2: Social
Simple module for keeping your social profile URLs in one manageable area.

## Installation
Recommended installation through composer, within your Magento root directory enter the following:

    composer require jasonalvis/magento2-social

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

Move xml block within your theme `<theme_dir>/Jasonalvis_Social/layout/default.xml`:

```xml
<page xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="urn:magento:framework:View/Layout/etc/page_configuration.xsd">
    <body>
        <move element="jasonalvis_social.profiles" destination="main" after="-" />
    </body>
</page>
```

Remove xml block within your theme `<theme_dir>/Jasonalvis_Social/layout/default.xml`:

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

    <theme_dir>/Jasonalvis_Social/templates/profiles.phtml

The original contents of the files can be found under:

    <root_dir>/vendor/jasonalvis/magento2-social/view/frontend/templates/profiles.phtml
