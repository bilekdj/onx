<?php

namespace Tests\Feature;

use App\Models\Customer;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CustomerControllerTest extends TestCase
{

    use RefreshDatabase;


    public function test_index_method_returns_correct_view()
    {
        $response = $this->get(route('customers.index'));

        $response->assertViewIs('customers.index');

    }

    public function test_create_method_returns_correct_view()
    {

        $response = $this->get(route('customers.create'));

        $response->assertViewIs('customers.create');
    }

    public function test_store_method_creates_new_customer()
    {

        $data = [
            'name' => 'Janek',
            'surname' => 'Kowalski',
            'email' => 'janek@kowalski.pl',
            'phone' => '100200300',
            'address' => 'Rynek 1',
        ];
        $response = $this->post(route('customers.store'), $data);

        $this->assertCount(1, Customer::all());
        $this->assertDatabaseHas('customers', $data);
        $response->assertRedirect(route('customers.index'));

    }

    public function test_show_method_returns_correct_view()
    {

        $customer = Customer::factory()->create();

        $response = $this->get(route('customers.show', $customer->id));

        $response->assertViewIs('customers.show');
        $response->assertViewHas('customer', $customer);
    }

    public function test_update_method_updates_customer()
    {

        $customer = Customer::factory()->create();

        $data = [
            'name' => 'Bartek',
            'surname' => 'Nowak',
            'email' => 'bartek@nowak.pl',
            'phone' => '200300400',
            'address' => 'Rynek 2',
        ];

        $response = $this->put(route('customers.update', $customer), $data);
        $this->assertDatabaseHas('customers', $data);
        $response->assertRedirect(route('customers.index'));
    }

    public function test_destroy_method_deletes_customer()
    {

        $customer = Customer::factory()->create();
        $response = $this->delete(route('customers.destroy', ['customer' => $customer]));

        $this->assertCount(0, Customer::all());
        $response->assertRedirect(route('customers.index'));


    }


}
