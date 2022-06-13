<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            // 'password' => $this->passwordRules(),
            // 'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
            ])->validate();
            
            return User::create([
                'name' => $input['name'],
                'email' => $input['email'],
                'documento' => $input['documento'],
                'empresa' => $input['empresa'],
                'cargo' => $input['cargo'],
                'celular' => $input['celular'],
                'driver_id' => $input['driver_id'],
                'driver' => $input['redsocial'],
                'nivel_planta' => $input['nivel_planta'],
                'nivel_mantenimiento' => $input['nivel_mantenimiento'],
                'areas_interes' => $input['areas_interes'],
                'presupuesto' => isset($input['presupuesto']) ? $input['presupuesto']:'' ,
                'relacionskf' => isset($input['relacionskf']) ? $input['relacionskf']:'' ,
                // 'productosferia' => $input['productosferia'],
                'productosferia_servicio' => isset($input['productosferia_servicio']) ? $input['productosferia_servicio']:'',
                'productosferia_tecnologia' => isset($input['productosferia_tecnologia']) ? $input['productosferia_tecnologia']:'',
                'productosferia_remanufac' => isset($input['productosferia_remanufac']) ? $input['productosferia_remanufac']:'',
                'productosferia_recondoil' => isset($input['productosferia_recondoil']) ? $input['productosferia_recondoil']:'',
                'productosferia_sis_lubrica' => isset($input['productosferia_sis_lubrica']) ? $input['productosferia_sis_lubrica']:'',
                'tipocontacto' => $input['tipocontacto'],
            // 'password' => Hash::make($input['password']),
        ]);
    }
}
