<?php namespace Tests\Repositories;

use App\Models\cidade;
use App\Repositories\cidadeRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class cidadeRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var cidadeRepository
     */
    protected $cidadeRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->cidadeRepo = \App::make(cidadeRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_cidade()
    {
        $cidade = factory(cidade::class)->make()->toArray();

        $createdcidade = $this->cidadeRepo->create($cidade);

        $createdcidade = $createdcidade->toArray();
        $this->assertArrayHasKey('id', $createdcidade);
        $this->assertNotNull($createdcidade['id'], 'Created cidade must have id specified');
        $this->assertNotNull(cidade::find($createdcidade['id']), 'cidade with given id must be in DB');
        $this->assertModelData($cidade, $createdcidade);
    }

    /**
     * @test read
     */
    public function test_read_cidade()
    {
        $cidade = factory(cidade::class)->create();

        $dbcidade = $this->cidadeRepo->find($cidade->id);

        $dbcidade = $dbcidade->toArray();
        $this->assertModelData($cidade->toArray(), $dbcidade);
    }

    /**
     * @test update
     */
    public function test_update_cidade()
    {
        $cidade = factory(cidade::class)->create();
        $fakecidade = factory(cidade::class)->make()->toArray();

        $updatedcidade = $this->cidadeRepo->update($fakecidade, $cidade->id);

        $this->assertModelData($fakecidade, $updatedcidade->toArray());
        $dbcidade = $this->cidadeRepo->find($cidade->id);
        $this->assertModelData($fakecidade, $dbcidade->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_cidade()
    {
        $cidade = factory(cidade::class)->create();

        $resp = $this->cidadeRepo->delete($cidade->id);

        $this->assertTrue($resp);
        $this->assertNull(cidade::find($cidade->id), 'cidade should not exist in DB');
    }
}
