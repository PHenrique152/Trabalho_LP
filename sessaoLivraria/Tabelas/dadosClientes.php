<?php

$dadosClientes = [

	'jpsilva@example.net' => [
		'nome' => 'João Paulo',
		'senha' => '$2y$10$XzFlPzI6.a717GlwpffoxezUAIKfOWyv/ZqlqTavBcsuKAySa8mLe',  // vYRYKZ
		'pedidos' => [
			[ 'título' => 'Buracos Negros',
			  'autor' => 'Stephen Hawking',
			  'capa' => 'https://images-na.ssl-images-amazon.com/images/I/51Um7Wo3fhL._SX285_BO1,204,203,200_.jpg',
			  'dataCompra' => new DateTime('2018-05-21'),
			  'valor' => 10.50 ],

			[ 'título' => 'Contato',
			  'autor' => 'Carl Sagan',
			  'capa' => 'https://m.media-amazon.com/images/I/912wtLFEmeL._AC_UL872_QL65_.jpg',
			  'dataCompra' => new DateTime('2017-09-04'),
			  'valor' => 34.15 ],

			[ 'título' => 'O Conto da Aia',
			  'autor' => 'Margaret Atwood',
			  'capa' => 'https://images-na.ssl-images-amazon.com/images/I/51X40Du9otL._SX331_BO1,204,203,200_.jpg',
			  'dataCompra' => new DateTime('2017-03-05'),
			  'valor' => 29.90 ]
		]
	],

	'claraad@example.com' => [
		'nome' => 'Clara de Almeida Duarte',
		'senha' => '$2y$10$LB1eDXWZ6QQAAKtUxxjN6.F3ZeFYUztd4gh8xK7LerRQ2HHKpLw/G', // dMrfzwJf
		'pedidos' => [
			[ 'título' => 'Fahrenheit 451',
			  'autor' => 'Ray Bradbury',
			  'capa' => 'https://images-na.ssl-images-amazon.com/images/I/41aW5nfbrQL._SL500_SR200,200_.jpg',
			  'dataCompra' => new DateTime('2018-02-19'),
			  'valor' => 25.90 ],

			[ 'título' => 'Harry Potter e a Pedra Filosofal',
			  'autor' => 'J. K. Rowling',
			  'capa' => 'https://images-na.ssl-images-amazon.com/images/I/81XKPL24stL._SL500_SR200,200_.jpg',
			  'dataCompra' => new DateTime('2017-09-23'),
			  'valor' => 32.90 ],

			[ 'título' => 'Mar Morto',
			  'autor' => 'Jorge Amado',
			  'capa' => 'https://m.media-amazon.com/images/I/81D1E3Zul3L._AC_UL872_QL65_.jpg',
			  'dataCompra' => new DateTime('2017-01-18'),
			  'valor' => 39.89 ]
		]
	],

	'rodco@example.net' => [
		'nome' => 'Rodrigo Coelho',
		'senha' => '$2y$10$WekdOL6MsBD7IhRm1xI1gO6pvhJ.1MvfKjZmxnvNFXEhhXvFBTDbm', // 6SaLKrgH
		'pedidos' => [
			[ 'título' => 'Mafalda - 10 Anos com Mafalda',
			  'autor' => 'Joaquín Salvador Lavado (Quino)',
			  'capa' => 'https://m.media-amazon.com/images/I/81sRkdG5BmL._AC_UL872_QL65_.jpg',
			  'dataCompra' => new DateTime('2018-03-02'),
			  'valor' => 35.90 ],

			[ 'título' => 'Peanuts Completo - Volume 6 (1961-1962)',
			  'autor' => 'Charles M. Schulz',
			  'capa' => 'https://m.media-amazon.com/images/I/51ILhClQWEL._AC_UL872_QL65_.jpg',
			  'dataCompra' => new DateTime('2017-02-19'),
			  'valor' => 25.90 ],

			[ 'título' => 'Bidu - Caminhos (Volume 1)',
			  'autor' => 'Mauricio de Sousa',
			  'capa' => 'https://m.media-amazon.com/images/I/51QH1Di35BL._AC_UL872_QL65_.jpg',
			  'dataCompra' => new DateTime('2016-09-04'),
			  'valor' => 15.90 ],

			[ 'título' => 'As Aventuras de Tintim - O Caranguejo das Pinças de Ouro',
			  'autor' => 'Hergé',
			  'capa' => 'https://m.media-amazon.com/images/I/81AsoUBCVOL._AC_UL872_QL65_.jpg',
			  'dataCompra' => new DateTime('2016-06-18'),
			  'valor' => 32.90 ],
		]
	]
];

?>