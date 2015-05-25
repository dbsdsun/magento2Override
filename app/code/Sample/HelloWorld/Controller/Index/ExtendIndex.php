<?php
/**
 * Created by PhpStorm.
 * User: wsun
 * Date: 19/05/2015
 * Time: 3:26 PM
 */
namespace Sample\HelloWorld\Controller\Index;

class ExtendIndex extends \Magento\Cms\Controller\Index\Index
{
    /**
     * Index action
     *
     * @return $this
     */
    public function execute($coreRoute = null)
    {
        $this->messageManager->addSuccess('Message from new controller.');
        return parent::execute($coreRoute);
    }
}