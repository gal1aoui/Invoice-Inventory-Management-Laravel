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

    'accepted'             => 'Le champ :attribute doit être accepté.',
    'active_url'           => 'Le champ :attribute n’est pas une URL valide.',
    'after'                => 'Le champ :attribute doit être une date postérieure à :date.',
    'after_or_equal'       => 'Le champ :attribute doit être une date postérieure ou égale à :date.',
    'alpha'                => 'Le champ :attribute ne peut contenir que des lettres.',
    'alpha_dash'           => 'Le champ :attribute ne peut contenir que des lettres, des chiffres et des tirets.',
    'alpha_num'            => 'Le champ :attribute ne peut contenir que des lettres et des chiffres.',
    'array'                => 'Le champ :attribute doit être un tableau.',
    'before'               => 'Le champ :attribute doit être une date antérieure à :date.',
    'before_or_equal'      => 'Le champ :attribute doit être une date antérieure ou égale à :date.',
    'between'              => [
        'numeric' => 'Le champ :attribute doit être compris entre :min et :max.',
        'file'    => 'Le champ :attribute doit être compris entre :min et :max kilooctets.',
        'string'  => 'Le champ :attribute doit être compris entre :min et :max caractères.',
        'array'   => 'Le champ :attribute doit avoir entre :min et :max éléments.',
    ],
    'boolean'              => 'Le champ :attribute doit être vrai ou faux.',
    'confirmed'            => 'La confirmation du champ :attribute ne correspond pas.',
    'date'                 => 'Le champ :attribute n’est pas une date valide.',
    'date_format'          => 'Le champ :attribute ne correspond pas au format :format.',
    'different'            => 'Les champs :attribute et :other doivent être différents.',
    'digits'               => 'Le champ :attribute doit comporter :digits chiffres.',
    'digits_between'       => 'Le champ :attribute doit comporter entre :min et :max chiffres.',
    'dimensions'           => 'Le champ :attribute a des dimensions d’image non valides.',
    'distinct'             => 'Le champ :attribute contient une valeur en double.',
    'email'                => 'Le champ :attribute doit être une adresse email valide.',
    'exists'               => 'Le champ :attribute sélectionné est invalide.',
    'file'                 => 'Le champ :attribute doit être un fichier.',
    'filled'               => 'Le champ :attribute est requis.',
    'image'                => 'Le champ :attribute doit être une image.',
    'in'                   => 'Le champ :attribute sélectionné est invalide.',
    'in_array'             => 'Le champ :attribute n’existe pas dans :other.',
    'integer'              => 'Le champ :attribute doit être un entier.',
    'ip'                   => 'Le champ :attribute doit être une adresse IP valide.',
    'ipv4'                 => 'Le champ :attribute doit être une adresse IPv4 valide.',
    'ipv6'                 => 'Le champ :attribute doit être une adresse IPv6 valide.',
    'json'                 => 'Le champ :attribute doit être une chaîne JSON valide.',
    'max'                  => [
        'numeric' => 'La valeur de :attribute ne peut pas être supérieure à :max.',
        'file'    => 'Le fichier de :attribute ne peut pas être plus grand que :max kilo-octets.',
        'string'  => 'La chaîne de caractères de :attribute ne peut pas contenir plus de :max caractères.',
        'array'   => 'Le tableau de :attribute ne peut pas contenir plus de :max éléments.',
    ],
    'mimes'                => 'Le fichier de :attribute doit être du type : :values.',
    'mimetypes'            => 'Le fichier de :attribute doit être du type : :values.',
    'min'                  => [
        'numeric' => 'La valeur de :attribute doit être supérieure ou égale à :min.',
        'file'    => 'Le fichier de :attribute doit avoir une taille minimale de :min kilo-octets.',
        'string'  => 'La chaîne de caractères de :attribute doit contenir au moins :min caractères.',
        'array'   => 'Le tableau de :attribute doit contenir au moins :min éléments.',
    ],
    'not_in'               => 'La sélection de :attribute est invalide.',
    'numeric'              => 'La valeur de :attribute doit être un nombre.',
    'present'              => 'Le champ :attribute doit être présent.',
    'regex'                => 'Le format de :attribute est invalide.',
    'required'             => 'Le champ :attribute est obligatoire.',
    'required_if'          => 'Le champ :attribute est obligatoire lorsque :other est :value.',
    'required_unless'      => 'Le champ :attribute est obligatoire sauf si :other est dans :values.',
    'required_with'        => 'Le champ :attribute est obligatoire lorsque :values est présent.',
    'required_with_all'    => 'Le champ :attribute est obligatoire lorsque :values sont tous présents.',
    'required_without'     => 'Le champ :attribute est obligatoire lorsque :values n\'est pas présent.',
    'required_without_all' => 'Le champ :attribute est obligatoire lorsqu\'aucune de ces valeurs :values n\'est présente.',
    'same'                 => ':attribute et :other doivent correspondre.',
    'size'                 => [
        'numeric' => ':attribute doit avoir une taille de :size.',
        'file'    => ':attribute doit avoir une taille de :size kilo-octets.',
        'string'  => ':attribute doit contenir :size caractères.',
        'array'   => ':attribute doit contenir :size éléments.',
    ],
    'string'               => ':attribute doit être une chaîne de caractères.',
    'timezone'             => ':attribute doit être un fuseau horaire valide.',
    'unique'               => ':attribute est déjà pris.',
    'uploaded'             => 'Le téléchargement de :attribute a échoué.',
    'url'                  => 'Le format de :attribute est invalide.',

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
