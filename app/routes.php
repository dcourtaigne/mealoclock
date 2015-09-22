<?php

	$w_routes = array(
    ['GET', '/', 'Read#home', 'home'],
    ['GET', '/about', 'Read#about', 'about'],
    ['GET', '/events', 'Read#getEvents', 'events'],
    ['GET', '/[vege|vegan|ssgluten|sslactose:com]', 'Read#getEventsbyCom', 'eventsbycom'],
    ['POST', '/login', 'Member#login', 'login'],
    ['POST', '/signup', 'Create#signup', 'signup'],
		['GET', '/eventAjax', 'Read#getEventsAjax', 'eventsajax'],
	);
