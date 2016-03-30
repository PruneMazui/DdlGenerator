<?php
namespace PruneMazui\DdlGeneratorTest\DataSouce;

use PruneMazui\DdlGenerator\DataSource\ExcelDataSource;
use PruneMazui\DdlGenerator\TableDefinition\TableDefinition;

class ExcelDataSourceTest extends \PHPUnit_Framework_TestCase
{
    private $base_config;

    protected function setUp()
    {
        $this->base_config = array(
            'filename' => __DIR__ . '/../../files/db_specifications.xlsx',
            'table_sheet' => 'テーブル定義',
        );
    }

    /**
     * @test
     */
    public function loadSuccessTest()
    {
        $config = $this->base_config;
        $data_source = new ExcelDataSource($config);
        $table_definition = $data_source->load();

        assertTrue($table_definition instanceof TableDefinition);

    }
}
