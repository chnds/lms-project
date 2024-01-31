<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;
use App\Models\Lead;
use App\Models\User;

class LeadApiTest extends TestCase
{
    use RefreshDatabase;

    protected $user;

    public function setUp(): void
    {
        parent::setUp();
    
        Artisan::call('migrate');
        
        $this->user = User::factory()->create([
            'email' => 'test@example.com',
        ]);
    }

    protected function authenticate()
    {
        $token = $this->user->createToken('Test Token')->plainTextToken;
        Auth::login($this->user);
        return $token;
    }

    public function testCanListLeads()
    {
        $token = $this->authenticate();

        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->getJson('/api/leads');

        $response->assertStatus(200);
    }

    public function testCanCreateLead()
    {
        $token = $this->authenticate();

        $leadData = Lead::factory()->make()->toArray();

        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->postJson('/api/leads', $leadData);

        $response->assertStatus(201);
    }

    public function testCanShowLead()
    {
        $token = $this->authenticate();

        $lead = Lead::factory()->create();

        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->getJson("/api/leads/{$lead->id}");

        $response->assertStatus(200);
    }

    public function testCanUpdateLead()
    {
        $token = $this->authenticate();

        $lead = Lead::factory()->create();
        $updatedData = ['nome' => 'New Name', 'email' => 'newemail@newemail.com'];

        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->putJson("/api/leads/{$lead->id}", $updatedData);

        $response->assertStatus(200);
    }

    public function testCanDeleteLead()
    {
        $token = $this->authenticate();

        $lead = Lead::factory()->create();

        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->deleteJson("/api/leads/{$lead->id}");

        $response->assertStatus(200);
    }
}
