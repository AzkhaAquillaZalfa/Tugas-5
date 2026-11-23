<?php

namespace Tests\Feature;

use App\Models\Biodata;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertOk()
            ->assertSee('Selamat datang di halaman biodata saya!')
            ->assertSee('Nama Anda');
    }

    public function test_admin_can_update_the_public_biodata(): void
    {
        $response = $this->put('/admin', [
            'welcome_message' => 'Halo, selamat datang!',
            'name' => 'Siti Aminah',
            'nickname' => 'Siti',
            'birth_place' => 'Bandung',
            'birth_date' => '2000-01-15',
            'address' => 'Jl. Merdeka',
            'email' => 'siti@example.com',
            'phone' => '08123456789',
            'education' => 'Universitas Contoh',
            'hobby' => 'Membaca',
            'about' => 'Saya senang belajar.',
        ]);

        $response->assertRedirect('/admin');
        $this->assertDatabaseHas('biodata', [
            'name' => 'Siti Aminah',
            'welcome_message' => 'Halo, selamat datang!',
        ]);

        $this->get('/')
            ->assertOk()
            ->assertSee('Halo, selamat datang!')
            ->assertSee('Siti Aminah')
            ->assertSee('Universitas Contoh');
    }

    public function test_admin_rejects_invalid_email_without_changing_biodata(): void
    {
        $biodata = Biodata::profile();

        $this->from('/admin')->put('/admin', [
            'welcome_message' => 'Pesan baru',
            'name' => 'Nama Baru',
            'email' => 'bukan-email',
        ])->assertRedirect('/admin')
            ->assertSessionHasErrors('email');

        $this->assertDatabaseHas('biodata', [
            'id' => $biodata->id,
            'name' => 'Nama Anda',
        ]);
    }
}
