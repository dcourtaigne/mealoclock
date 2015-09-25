<?php

	$w_routes = array(
    ['GET', '/', 'Read#home', 'home'],
    ['GET', '/about', 'Read#about', 'about'],
    ['GET', '/events', 'Read#showEventsPage', 'events'],
    ['GET', '/[vege|vegan|ssgluten|sslactose:com]', 'Read#showComPage', 'eventsbycom'],
    ['GET', '/event/[i:id]', 'Read#showEvent', 'event'],

    ['GET|POST', '/event/[create|edit:action]/[i:id]?', 'Create#editEvent', 'editEvent'],
    ['GET|POST', '/contact', 'Create#contact', 'contact'],

    ['POST', '/login', 'Users#login', 'login'],
    ['POST|GET', '/logout', 'Users#logout', 'logout'],
    ['POST', '/signup', 'Users#signup', 'signup'],
    ['GET', '/profile/[i:id]', 'Users#userProfile', 'userProfile'],
    ['GET|POST', '/myaccount/profile', 'Users#updateProfile', 'updateProfile'],


    ['GET', '/eventAjax', 'Read#getEventsAjax', 'eventsajax'],
    ['GET', '/eventAjaxCom', 'Read#getEventsAjaxCom', 'eventsajaxcom']

	);
