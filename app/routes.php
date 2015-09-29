<?php

	$w_routes = array(
    ['GET', '/', 'Read#home', 'home'],
    ['GET', '/about', 'Read#about', 'about'],
    ['GET', '/events', 'Read#showEventsPage', 'events'],
    ['GET', '/[vege|vegan|ssgluten|sslactose:com]', 'Read#showComPage', 'eventsbycom'],
    ['GET', '/event/[i:id]', 'Read#showEvent', 'event'],

    ['GET|POST', '/event/[create|edit:action]/[i:id]?', 'Create#editEvent', 'editEvent'],
    ['POST', '/event/attend', 'Create#eventRequest', 'eventRequest'],
    ['POST', '/event/cancel', 'Create#eventCancelRequest', 'eventCancelRequest'],
    ['GET|POST', '/contact', 'Create#contact', 'contact'],
    ['GET|POST','/comment','Create#comment', 'comment'],

    ['POST', '/login', 'Users#login', 'login'],
    ['POST|GET', '/logout', 'Users#logout', 'logout'],
    ['POST', '/signup', 'Users#signup', 'signup'],
    ['GET', '/profile/[i:id]', 'Users#userProfile', 'userProfile'],
    ['GET|POST', '/myaccount/profile', 'Users#updateProfile', 'updateProfile'],
    ['GET', '/myaccount/myevents', 'Users#displayEvents', 'myEvents'],
    ['GET', '/myaccount/eventrequests', 'Users#getEventRequests', 'getEventRequest'],


    ['GET', '/eventAjax', 'Read#getEventsAjax', 'eventsajax'],
    ['GET', '/eventAjaxCom', 'Read#getEventsAjaxCom', 'eventsajaxcom'],
    ['POST', '/uploadphoto/event/[i:id]', 'Create#uploadPhotoEvent', 'uploadPhotoEvent'],
    ['POST', '/uploadphoto/profile/[i:id]', 'Users#uploadPhotoProfile', 'uploadPhotoProfile']

	);
