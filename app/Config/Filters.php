<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Filters extends BaseConfig
{
	// Makes reading things below nicer,
	// and simpler to change out script that's used.
	public $aliases = [
		'csrf'     => \CodeIgniter\Filters\CSRF::class,
		'toolbar'  => \CodeIgniter\Filters\DebugToolbar::class,
		'honeypot' => \CodeIgniter\Filters\Honeypot::class,
		'filteradmin' => \App\Filters\filteradmin::class,
		'filtermhs' => \App\Filters\filtermhs::class,
		'filterdsn' => \App\Filters\filterdsn::class,
	];

	// Always applied before every request
	public $globals = [
		'before' => [
			//'honeypot'
			// 'csrf',
			'filteradmin' =>	['except' => [
				'auth', 'auth/*',
				'home', 'home/*',
				'/'
			]],

			'filtermhs' =>	['except' => [
				'auth', 'auth/*',
				'home', 'home/*',
				'/'
			]],

			'filterdsn' =>	['except' => [
				'auth', 'auth/*',
				'home', 'home/*',
				'/'
			]]

		],
		'after'  => [
			'toolbar',
			//'honeypot'
			'filteradmin' =>	['except' => [
				'admin', 'admin/*',
				'home', 'home/*',
				'/',
				'fakultas', 'fakultas/*',
				'gedung', 'gedung/*',
				'ruangan', 'ruangan/*',
				'prodi', 'prodi/*',
				'ta', 'ta/*',
				'matkul', 'matkul/*',
				'user', 'user/*',
				'dosen', 'dosen/*',
				'mhs', 'mhs/*',
				'kelas', 'kelas/*',
				'jadwal_ta', 'jadwal_ta/*',
			]],

			'filtermhs' =>	['except' => [
				'dasbor_mhs', 'dasbor_mhs/*',
				'home', 'home/*',
				'krs', 'krs/*',
				'/',

			]],

			'filterdsn' =>	['except' => [
				'dasbor_dsn', 'dasbor_dsn/*',
				'dosen', 'dosen/*',
				'home', 'home/*',
				'/',

			]],

		],
	];

	// Works on all of a particular HTTP method
	// (GET, POST, etc) as BEFORE filters only
	//     like: 'post' => ['CSRF', 'throttle'],
	public $methods = [];

	// List filter aliases and any before/after uri patterns
	// that they should run on, like:
	//    'isLoggedIn' => ['before' => ['account/*', 'profiles/*']],
	public $filters = [];
}
