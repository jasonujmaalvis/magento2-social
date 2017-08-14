<?php
/**
 * Jason Alvis Social
 *
 * @category    Jasonalvis
 * @package     Jasonalvis_Social
 * @author      Jason Alvis
 * @copyright   Copyright (c) 2016 Jason Alvis (http://jasonalvis.co.uk)
 * @license     http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */
namespace Jasonalvis\Social\Block;

class Profiles extends \Magento\Framework\View\Element\Template
{
    /**
     * @var \Jasonalvis\Social\Helper\Data
     */
    protected $_helper;

    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param array                                            $data
     * @param \Jasonalvis\Social\Helper\Data                   $helper
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        array $data = [],
        \Jasonalvis\Social\Helper\Data $helper
    ) {
        $this->_helper = $helper;
        parent::__construct($context, $data);
    }

    /**
     * Twitter url
     * @return string
     */
    public function getTwitterUrl()
    {
        return $this->_helper->getTwitterUrl();
    }

    /**
     * Facebook url
     * @return string
     */
    public function getFacebookUrl()
    {
        return $this->_helper->getFacebookUrl();
    }

    /**
     * Instagram url
     * @return string
     */
    public function getInstagramUrl()
    {
        return $this->_helper->getInstagramUrl();
    }

    /**
     * Pinterest url
     * @return string
     */
    public function getPinterestUrl()
    {
        return $this->_helper->getPinterestUrl();
    }

    /**
     * Github url
     * @return string
     */
    public function getGithubUrl()
    {
        return $this->_helper->getGithubUrl();
    }

    /**
     * Render block html
     * @return string
     */
    protected function _toHtml()
    {
        if ($this->_helper->getEnabled()) {
            return parent::_toHtml();
        } else {
            return '';
        }
    }
}
