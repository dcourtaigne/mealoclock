<?php

	$w_routes = array(
    ['GET', '/', 'Read#home', 'home'],
    ['GET', '/about', 'Read#about', 'about'],
    ['GET', '/events', 'Read#getEvents', 'events'],
    ['GET', '/[vege|vegan|ssgluten|sslactose:com]', 'Read#getEventsbyCom', 'eventsbycom'],
    ['POST', '/login', 'Create#login', 'login'],
    ['POST|GET', '/logout', 'Create#logout', 'logout'],
    ['POST', '/signup', 'Create#signup', 'signup'],
		['GET', '/eventAjax', 'Read#getEventsAjax', 'eventsajax'],
	);
