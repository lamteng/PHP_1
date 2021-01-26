<?php

// Take the two arrays below
	// Would be nice to see if you can merge them together

// Then output the results for each person in a clean UI
	// This can be in boxes, table, panels etc, however you feel the design would work best
	// Keep it clean. I just want to see how your HTML & CSS is put togteher 

// I would like to see each person and their information
// I would then also like to see each persons pets under their personal information

// Take into consideration,
	// 1. Some people may not have a pet
	// 2. Some people may have more than 1 pet
	// 3. Some people may not have a gender
	// 4. You may have pets for people that dont exist
	// 5. The list of people within the layout needs to be alphabetical via the name
	// 6. Think about things like, If you had a lable for Gender but the gender was null, would you hide the lable or show it?


// Here is an example of a basic card layout.

//	-------------------------------------------------
//	|												|
//	|	Name: 			Tom 						|
//	|	Age:			32							|
//	|	Gender:			Male 						|
//	|	Show Size:		10 							|
//	|												|
//	|	-----------------------------------------	|
//	|												|
//	|	PETS 										|
//	|												|
//	|	A Dog called Paul who is 3 years old 		|
//	|	A Cat called Felix who is 8 years old 		|
//	|												|
//	-------------------------------------------------


// Please write comments for each part of your code and why you are using it



$people = [
   [
   		'id' => 1,
		'name' => 'Tom',
		'age' => 32,
		'gender' => 'male',
		'shoe_size' => 10
   ],
   [
   		'id' => 2,
		'name' => 'Kate',
		'age' => 22,
		'gender' => 'female',
		'shoe_size' => 6
   ],
   [
   		'id' => 3,
		'name' => 'Jane',
		'age' => 27,
		'gender' => 'female',
		'shoe_size' => 7.5
   ],
   [
   		'id' => 4,
		'name' => 'Matt',
		'age' => 44,
		'gender' => '',
		'shoe_size' => 11
   ]
];

$pets = [
   [
   		'pet_id' => 1,
   		'person_id' => 1,
		'name' => 'paul',
		'age' => 3,
		'type' => 'dog'
   ],
   [
   		'pet_id' => 2,
   		'person_id' => 1,
		'name' => 'felix',
		'age' => 8,
		'type' => 'cat'
   ],
   [
   		'pet_id' => 3,
   		'person_id' => 2,
		'name' => 'paul',
		'age' => 6,
		'type' => 'fish'
   ],
   [
   		'pet_id' => 4,
   		'person_id' => 3,
		'name' => 'paul',
		'age' => 12,
		'type' => 'snake'
   ],
   [
   		'pet_id' => 5,
   		'person_id' => 22,
		'name' => 'rouge',
		'age' => 2,
		'type' => 'hamster'
   ]
];


