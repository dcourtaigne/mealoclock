<?php

	$w_routes = array(
    ['GET', '/', 'Read#home', 'home'],
    ['GET', '/about', 'Read#about', 'about'],
    ['GET', '/events', 'Read#showEventsPage', 'events'],
    ['GET', '/[vege|vegan|ssgluten|sslactose:com]', 'Read#showComPage', 'eventsbycom'],

    ['GET|POST', '/create_event', 'Create#createEvent', 'createEvent'],

    ['POST', '/login', 'Users#login', 'login'],
    ['POST|GET', '/logout', 'Users#logout', 'logout'],
    ['POST', '/signup', 'Users#signup', 'signup'],
    ['GET', '/profile', 'Users#userProfile', 'userProfile'],
    ['GET|POST', '/updateprofile', 'Users#updateProfile', 'updateProfile'],


    ['GET', '/eventAjax', 'Read#getEventsAjax', 'eventsajax'],
	['GET', '/eventAjaxCom', 'Read#getEventsAjaxCom', 'eventsajaxcom'],
	);
