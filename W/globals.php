<?php

//espace de nom global
namespace {

	/**
	 * print_r coké
	 * @param  mixed $var La variable a déboger
	 */
	function debug($var)
	{
		echo '<pre style="padding: 10px; font-family: Consolas, Monospace; background-color: #000; color: #FFF;">';
		print_r($var);
		echo '</pre>';
	}

	/**
	 * Retourne l'instance de l'application depuis l'espace global
	 * @return \W\App L'application
	 */
	function getApp()
	{
		if (!empty($GLOBALS['app'])){
			return $GLOBALS['app'];
		}

		return null;
	}

	function formatTime($timeHMS){
		$timeHM = substr($timeHMS, 0, 5);
		$formatedTime = str_replace(':','h',$timeHM);
		return $formatedTime;
	}

	function formatDateFR($date){
		setlocale (LC_TIME, 'fr_FR.utf8','fra');
    $timestamp = strtotime($date);
    $dateFR = strftime("%d %B %Y", $timestamp);
    return $dateFR;
	}

}
