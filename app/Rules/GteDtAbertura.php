<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class GteDtAbertura implements Rule
{
    private $dt_abertura;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($dt_abertura)
    {
        $this->dt_abertura = $dt_abertura;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return date($this->dt_abertura) <= date($value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Essa data deve ser maior ou igual à data inicial.';
    }
}
