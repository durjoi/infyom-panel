<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\cidade;

class cidadeApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_cidade()
    {
        $cidade = factory(cidade::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/cidades', $cidade
        );

        $this->assertApiResponse($cidade);
    }

    /**
     * @test
     */
    public function test_read_cidade()
    {
        $cidade = factory(cidade::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/cidades/'.$cidade->id
        );

        $this->assertApiResponse($cidade->toArray());
    }

    /**
     * @test
     */
    public function test_update_cidade()
    {
        $cidade = factory(cidade::class)->create();
        $editedcidade = factory(cidade::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/cidades/'.$cidade->id,
            $editedcidade
        );

        $this->assertApiResponse($editedcidade);
    }

    /**
     * @test
     */
    public function test_delete_cidade()
    {
        $cidade = factory(cidade::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/cidades/'.$cidade->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/cidades/'.$cidade->id
        );

        $this->response->assertStatus(404);
    }
}
