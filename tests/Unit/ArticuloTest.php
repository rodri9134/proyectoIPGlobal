<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ArticuloTest
{
    use RefreshDatabase;
      public function test_create_articulo()

      {
        $data = [
        'title' => 'prueba20',
        'body' => 'Lorep isum'
      ];
        $response = $this->post('/api/posts',$data);

        $response
            ->assertStatus(201)
            ->assertJson(['created' => true])
            ->assertDatabaseHas('articulos', $data);
      }

}
