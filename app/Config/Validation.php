<?php

namespace Config;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var array
	 */
	public $ruleSets = [
		\CodeIgniter\Validation\Rules::class,
		\CodeIgniter\Validation\FormatRules::class,
		\CodeIgniter\Validation\FileRules::class,
		\CodeIgniter\Validation\CreditCardRules::class,
		\App\libraries\Validation\myCustomRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	public $sampleValidation = [
		'sampleInput' => [
			'label' => 'the sample input value inside validation config',
			'rules' => 'required|myCustomRules[others]',
		],
		'anyInput' => [
			'label' => 'the any input value inside validation config',
			'rules' => 'required',
		],
	];
	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------
}
