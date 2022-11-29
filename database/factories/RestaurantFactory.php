<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RestaurantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $vendor = $this->faker->numberBetween(1,38);
        return [
            //
            
            'name'=> $this->faker->name(),
            'phone' => $this->faker->unique()->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
            'logo' => '2021-05-18-60a3e590d6811.png',
            'latitude'=>'30.558018',
            'longitude'=>'31.0140308',
            'address'=>'dsjsahdjsadas',
            'footer_text'=>'hello',
            'minimum_order'=>0,
            'delivery_charge'=> 15,
            'comission'=>0,
//'currency'=>'BDT',
            'opening_time'=>null,
            'closeing_time'=>null,
            //'cash_on_delivery'=>0,
            'status'=>1,
            'vendor_id'=>$vendor
    

        ];
    }
}
