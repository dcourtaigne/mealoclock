<?php

	$w_routes = array(
    ['GET', '/', 'Read#home', 'home'],
    ['GET', '/about', 'Read#about', 'about'],
    ['GET', '/events', 'Read#getEvents', 'events'],
    ['GET', '/[vege|vegan|ssgluten|sslactose:com]', 'Read#getEventsbyCom', 'eventsbycom'],
    ['GET|POST', '/create_event', 'Create#createEvent', 'createEvent'],
    ['POST', '/login', 'Users#login', 'login'],
    ['POST|GET', '/logout', 'Users#logout', 'logout'],
    ['POST', '/signup', 'Users#signup', 'signup'],
	['GET', '/eventAjax', 'Read#getEventsAjax', 'eventsajax'],
	);
