<?php
/**
 * Created by PhpStorm.
 * User: wsun
 * Date: 13/05/2015
 * Time: 5:02 PM
 */
namespace Sample\HelloWorld\Block;

use Magento\Framework\View\Element\Template;

class HelloTitle extends \Magento\Theme\Block\Html\Title
{
    public function __construct(Template\Context $context, array $data = [])
    {
        parent::__construct($context, $data);
    }

    public function getPageTitle()
    {
        return 'haha9999';
    }

    protected function _toHtml()
    {
        // $this->setModuleName($this->extractModuleName('Magento\Theme\Block\Html\Title'));
        return parent::_toHtml();
    }
}