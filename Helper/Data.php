<?php
/**
 * Jason Alvis Social
 *
 * @category    Jasonalvis
 * @package     Jasonalvis_Social
 * @author      Jason Alvis <hello@jasonalvis.co.uk>
 * @copyright   Copyright (c) 2016 Jason Alvis (http://jasonalvis.co.uk)
 * @license     http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */
namespace Jasonalvis\Social\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    /**
     * Core store config
     *
     * @var \Magento\Framework\App\Config\ScopeConfigInterface
     */
    protected $_scopeConfig;

    CONST PROFILES_ENABLED       = 'jasonalvis_social/profiles/enabled';
    CONST PROFILES_TWITTER_URL   = 'jasonalvis_social/profiles/twitter_url';
    CONST PROFILES_FACEBOOK_URL  = 'jasonalvis_social/profiles/facebook_url';
    CONST PROFILES_INSTAGRAM_URL = 'jasonalvis_social/profiles/instagram_url';
    CONST PROFILES_PINTEREST_URL = 'jasonalvis_social/profiles/pinterest_url';
    CONST PROFILES_GITHUB_URL    = 'jasonalvis_social/profiles/github_url';

    /**
     * @param \Magento\Framework\App\Config\ScopeConfigInterface $scopeInterface
     */
    public function __construct(
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeInterface
    ) {
        $this->_scopeConfig = $scopeInterface;
    }

    /**
     * Enabled
     * @return string
     */
    public function getEnabled()
    {
        return $this->_scopeConfig->getValue(self::PROFILES_ENABLED);
    }

    /**
     * Twitter url
     * @return string
     */
    public function getTwitterUrl()
    {
        return $this->_scopeConfig->getValue(self::PROFILES_TWITTER_URL);
    }

    /**
     * Facebook url
     * @return string
     */
    public function getFacebookUrl()
    {
        return $this->_scopeConfig->getValue(self::PROFILES_FACEBOOK_URL);
    }

    /**
     * Instagram url
     * @return string
     */
    public function getInstagramUrl()
    {
        return $this->_scopeConfig->getValue(self::PROFILES_INSTAGRAM_URL);
    }

    /**
     * Pinterest url
     * @return string
     */
    public function getPinterestUrl()
    {
        return $this->_scopeConfig->getValue(self::PROFILES_PINTEREST_URL);
    }

    /**
     * Github url
     * @return string
     */
    public function getGithubUrl()
    {
        return $this->_scopeConfig->getValue(self::PROFILES_GITHUB_URL);
    }
}

