<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GrievanceAttachmentsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GrievanceAttachmentsTable Test Case
 */
class GrievanceAttachmentsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GrievanceAttachmentsTable
     */
    public $GrievanceAttachments;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.grievance_attachments'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('GrievanceAttachments') ? [] : ['className' => 'App\Model\Table\GrievanceAttachmentsTable'];
        $this->GrievanceAttachments = TableRegistry::get('GrievanceAttachments', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->GrievanceAttachments);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
