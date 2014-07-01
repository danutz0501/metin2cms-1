<?php

return array(

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

	"accepted"             => ":attribute trebuie sa fie acceptat.",
	"active_url"           => ":attribute nu este un URL valid.",
	"after"                => ":attribute trebuie sa fie o data dupa data :date.",
	"alpha"                => ":attribute poate contine doar litere.",
	"alpha_dash"           => ":attribute poate contine doar litere, numere, si linii.",
	"alpha_num"            => ":attribute poate contine doar litere si numere.",
	"array"                => ":attribute trebuie sa fie un vector.",
	"before"               => ":attribute trebuie sa fie o data inainte de data :date.",
	"between"              => array(
		"numeric" => ":attribute trebuie sa fie intre :min si :max.",
		"file"    => ":attribute trebuie sa fie intre :min si :max kilo octeti.",
		"string"  => ":attribute trebuie sa fie intre :min si :max caractere.",
		"array"   => ":attribute trebuie sa contina intre :min si :max elemente.",
	),
	"confirmed"            => "Confirmarea :attribute nu coincide.",
	"date"                 => ":attribute nu este o data valida.",
	"date_format"          => ":attribute nu coincide cu formatul :format.",
	"different"            => ":attribute si :other trebuie sa fie diferite.",
	"digits"               => ":attribute trebuie sa contina :digits cifre.",
	"digits_between"       => ":attribute trebuie sa contina intre :min si :max cifre.",
	"email"                => ":attribute trebuie sa fie o adresa valida de email.",
	"exists"               => ":attribute selectat este invalid.",
	"image"                => ":attribute trebuie sa fie o imagine.",
	"in"                   => ":attribute selectat este invalid.",
	"integer"              => ":attribute trebuie sa fie un numar intreg.",
	"ip"                   => ":attribute trebuie sa fie o adresa de IP valida.",
	"max"                  => array(
		"numeric" => ":attribute nu trebuie sa fie mai mare decat :max.",
		"file"    => ":attribute nu trebuie sa fie mai mare de :max kilo octeti.",
		"string"  => ":attribute nu trebuie sa aiba mai mult de :max caractere.",
		"array"   => ":attribute nu trebuie sa aiba mai mult de :max elemente.",
	),
	"mimes"                => ":attribute trebuie sa fie un fisier de tipul: :values.",
	"min"                  => array(
		"numeric" => ":attribute trebuie sa fie cel putin :min.",
		"file"    => ":attribute trebuie sa aiba cel putin :min kilo octeti.",
		"string"  => ":attribute trebuie sa aiba cel putin :min caractere.",
		"array"   => ":attribute trebuie sa aiba cel putin :min elemente.",
	),
	"not_in"               => ":attribute selectat este invalid.",
	"numeric"              => ":attribute trebuie sa fie un numar.",
	"regex"                => ":attribute are un format invalid.",
	"required"             => "Campul :attribute este obligatoriu.",
	"required_if"          => "Campul :attribute este obligatoriu cand :other este :value.",
	"required_with"        => "Campul :attribute este obligatoriu cand :values este present.",
	"required_with_all"    => "Campul :attribute este obligatoriu cand :values este prezent.",
	"required_without"     => "Campul :attribute este obligatoriu cand :values nu este prezent.",
	"required_without_all" => "Campul :attribute este obligatoriu cand niciuna dintre :values nu sunt prezente.",
	"same"                 => ":attribute si :other trebuie sa coincida.",
	"size"                 => array(
		"numeric" => ":attribute trebuie sa aiba :size.",
		"file"    => ":attribute trebuie sa aiba :size kilo octeti.",
		"string"  => ":attribute trebuie sa aiba :size charactere.",
		"array"   => ":attribute trebuie sa contina :size elemente.",
	),
	"unique"               => ":attribute introdus este deja luat.",
	"url"                  => "Formatul :attribute este invalid.",

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

	'custom' => array(
		'attribute-name' => array(
			'rule-name' => 'custom-message',
		),
	),

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

	'attributes' => array(
        'email' => 'Adresa de email'
    ),

);
