<?php


namespace Megatronic\Cpanel\Setup;

use Magento\Framework\Setup;

class Installer implements Setup\SampleData\InstallerInterface {

    /**
     * @var \Magento\CmsSampleData\Model\Page
     */
    private $page;

    /**
     * @var \Magento\CmsSampleData\Model\Block
     */
    private $block;

    /**
     * @param \Megatronic\Cpanel\Model\Page $page
     * @param \Megatronic\Cpanel\Model\Block $block
     */
    public function __construct(
    \Megatronic\Cpanel\Model\Page $page, 
            \Megatronic\Cpanel\Model\Block $block
    ) {
        $this->page = $page;
        $this->block = $block;
    }

    /**
     * {@inheritdoc}
     */
    public function install() {

        //$this->page->install(['Megatronic_Cpanel::fixtures/pages/pages.csv']);
        $this->page->install(
                [

                    'Megatronic_Cpanel::cmspages/cms_pages.csv',
                ]
        );
        $this->block->install(
                [

                    'Megatronic_Cpanel::cmsblocks/cms_static_blocks.csv',
                ]
        );
    }

}
