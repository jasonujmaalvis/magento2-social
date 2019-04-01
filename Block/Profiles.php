<?php
/**
 * Alvis Social
 *
 * @category    Alvis
 * @package     Alvis_Social
 * @author      Jason Ujma-Alvis
 * @copyright   Copyright (c) 2019 Jason Ujma-Alvis (https://jason.codes)
 * @license     http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */
namespace Alvis\Social\Block;

use \Magento\Framework\View\Element\Template;

class Profiles extends Template
{
    /**
     * @var \Alvis\Social\Helper\Data
     */
    protected $_helper;

    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param array                                            $data
     * @param \Alvis\Social\Helper\Data                        $helper
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        array $data = [],
        \Alvis\Social\Helper\Data $helper
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
