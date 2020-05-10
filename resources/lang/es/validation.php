<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => ':attribute debe ser aceptado.',
    // 'accepted'             => 'The :attribute must be accepted.',
    'active_url'           => ':attribute no es una URL valida.',
    // 'active_url'           => 'The :attribute is not a valid URL.',
    'after'                => ':attribute debe ser una fecha posterior a :date.',
    // 'after'                => 'The :attribute must be a date after :date.',
    'after_or_equal'       => ':attribute debe ser igual o posterior a :date.',
    // 'after_or_equal'       => 'The :attribute must be a date after or equal to :date.',
    'alpha'                => ':attribute solo puede contener letras.',
    // 'alpha'                => 'The :attribute may only contain letters.',
    'alpha_dash'           => ':attribute solo puede contener letras, números o guiones.',
    // 'alpha_dash'           => 'The :attribute may only contain letters, numbers, and dashes.',
    'alpha_num'            => ':attribute solo puede contener letras y números.',
    // 'alpha_num'            => 'The :attribute may only contain letters and numbers.',
    'array'                => ':attribute debe ser un array.',
    // 'array'                => 'The :attribute must be an array.',
    'before'               => ':attribute debe ser una fecha previa a :date.',
    // 'before'               => 'The :attribute must be a date before :date.',
    'before_or_equal'      => ':attribute debe ser una fecha previa o igual a:date.',
    // 'before_or_equal'      => 'The :attribute must be a date before or equal to :date.',
    'between'              => [
        'numeric' => ':attribute debe ser un valor entre :min y :max.',
        // 'numeric' => 'The :attribute must be between :min and :max.',
        'file'    => ':attribute debe ser un valor entre :min y :max kilobytes.',
        // 'file'    => 'The :attribute must be between :min and :max kilobytes.',
        'string'  => ':attribute debe ser un valor entre :min y :max caracteres.',
        // 'string'  => 'The :attribute must be between :min and :max characters.',
        'array'   => ':attribute debe ser un valor entre :min y :max items.',
        // 'array'   => 'The :attribute must have between :min and :max items.',
    ],
    'boolean'              => 'El valor de :attribute debe ser "true" o "false".',
    // 'boolean'              => 'The :attribute field must be true or false.',
    'confirmed'            => 'La confirmación de :attribute no concuerda.',
    // 'confirmed'            => 'The :attribute confirmation does not match.',
    'date'                 => ':attribute no es una fecha valida.',
    // 'date'                 => 'The :attribute is not a valid date.',
    'date_format'          => ':attribute debe tener el formato :format.',
    // 'date_format'          => 'The :attribute does not match the format :format.',
    'different'            => ':attribute y :other deben ser diferentes.',
    // 'different'            => 'The :attribute and :other must be different.',
    'digits'               => ':attribute debe tener :digits dígitos.',
    // 'digits'               => 'The :attribute must be :digits digits.',
    'digits_between'       => ':attribute debe tener entre :min y :max dígitos.',
    // 'digits_between'       => 'The :attribute must be between :min and :max digits.',
    'dimensions'           => ':attribute contiene dimensiones invalidas.',
    // 'dimensions'           => 'The :attribute has invalid image dimensions.',
    'distinct'             => 'El campo :attribute contiene valores duplicados.',
    // 'distinct'             => 'The :attribute field has a duplicate value.',
    'email'                => ':attribute debe ser un correo electrónico valido.',
    // 'email'                => 'The :attribute must be a valid email address.',
    'exists'               => ':attribute es invalido.',
    // 'exists'               => 'The selected :attribute is invalid.',
    'file'                 => ':attribute debe ser un archivo.',
    // 'file'                 => 'The :attribute must be a file.',
    'filled'               => ':attribute debe tener un valor.',
    // 'filled'               => 'The :attribute field must have a value.',
    'image'                => ':attribute debe ser una imagen.',
    // 'image'                => 'The :attribute must be an image.',
    'in'                   => 'La selección :attribute es invalida.',
    // 'in'                   => 'The selected :attribute is invalid.',
    'in_array'             => 'El campo :attribute no existe en :other.',
    // 'in_array'             => 'The :attribute field does not exist in :other.',
    'integer'              => ':attribute debe ser un número.',
    // 'integer'              => 'The :attribute must be an integer.',
    'ip'                   => ':attribute debe ser una direccion IP valida.',
    // 'ip'                   => 'The :attribute must be a valid IP address.',
    'json'                 => ':attribute debe ser un JSON valido.',
    // 'json'                 => 'The :attribute must be a valid JSON string.',
    'max'                  => [
        'numeric' => ':attribute no puede ser mayor a :max.',
        // 'numeric' => 'The :attribute may not be greater than :max.',
        'file'    => ':attribute no puede ser mayor a :max kilobytes.',
        // 'file'    => 'The :attribute may not be greater than :max kilobytes.',
        'string'  => ':attribute no puede tener mas de :max caracteres.',
        // 'string'  => 'The :attribute may not be greater than :max characters.',
        'array'   => ':attribute no puede tener mas de :max items.',
        // 'array'   => 'The :attribute may not have more than :max items.',
    ],
    'mimes'                => ':attribute debe ser un archivo del tipo: :values.',
    // 'mimes'                => 'The :attribute must be a file of type: :values.',
    'mimetypes'            => ':attribute debe ser un archivo del tipo: :values.',
    // 'mimetypes'            => 'The :attribute must be a file of type: :values.',
    'min'                  => [
        'numeric' => ':attribute debe ser de al menos :min.',
        // 'numeric' => 'The :attribute must be at least :min.',
        'file'    => ':attribute debe tener, al menos, :min kilobytes.',
        // 'file'    => 'The :attribute must be at least :min kilobytes.',
        'string'  => ':attribute debe tener, al menos, :min caracteres.',
        // 'string'  => 'The :attribute must be at least :min characters.',
        'array'   => ':attribute debe tener al menos :min items.',
        // 'array'   => 'The :attribute must have at least :min items.',
    ],
    'not_in'               => 'El campo :attribute es invalido.',
    // 'not_in'               => 'The selected :attribute is invalid.',
    'numeric'              => ':attribute debe ser un número.',
    // 'numeric'              => 'The :attribute must be a number.',
    'present'              => ':attribute no puede estar vació.',
    // 'present'              => 'The :attribute field must be present.',
    'regex'                => 'El formato de :attribute es invalido.',
    // 'regex'                => 'The :attribute format is invalid.',
    'required'             => ':attribute es requerido.',
    // 'required'             => 'The :attribute field is required.',
    'required_if'          => 'El campo :attribute es requerido cuando :other sea :value.',
    // 'required_if'          => 'The :attribute field is required when :other is :value.',
    'required_unless'      => 'El campo :attribute es requerido, a menos que :values contenga el valor :other.',
    // 'required_unless'      => 'The :attribute field is required unless :other is in :values.',
    'required_with'        => 'El campo :attribute es requerido cuando :values este definido.',
    // 'required_with'        => 'The :attribute field is required when :values is present.',
    'required_with_all'    => ':attribute es requerido si :values contiene un valor.',
    // 'required_with_all'    => 'The :attribute field is required when :values is present.',
    'required_without'     => 'El campo :attribute es requerido si :values vació.',
    // 'required_without'     => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'El campo :attribute es requerido si :values esta/n vaciós.',
    // 'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same'                 => ':attribute y :other deben ser iguales.',
    // 'same'                 => 'The :attribute and :other must match.',
    'size'                 => [
        'numeric' => ':attribute debe ser de :size.',
        // 'numeric' => 'The :attribute must be :size.',
        'file'    => ':attribute debe ser de :size kilobytes.',
        // 'file'    => 'The :attribute must be :size kilobytes.',
        'string'  => ':attribute  debe ser de :size caracteres.',
        // 'string'  => 'The :attribute must be :size characters.',
        'array'   => ':attribute debe contener :size items.',
        // 'array'   => 'The :attribute must contain :size items.',
    ],
    'string'               => ':attribute debe ser un string.',
    // 'string'               => 'The :attribute must be a string.',
    'timezone'             => ':attribute debe ser una zona valida.',
    // 'timezone'             => 'The :attribute must be a valid zone.',
    'unique'               => ':attribute ya existe en nuestra base de datos.',
    // 'unique'               => 'The :attribute has already been taken.',
    'uploaded'             => ':attribute fallo!.',
    // 'uploaded'             => 'The :attribute failed to upload.',
    'url'                  => 'El campo :attribute es invalido.',
    // 'url'                  => 'The :attribute format is invalid.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
