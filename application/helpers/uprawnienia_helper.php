<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	if ( ! function_exists('is_admin')){
		function is_admin(){
			$CI =& get_instance();
			return $CI->session->userdata('is_admin');
		}		
	}

	if ( ! function_exists('is_logged')){
		function is_logged(){
			$CI =& get_instance();
			return $CI->session->userdata('is_logged');
		}	
	}
	
	if ( ! function_exists('login')){
		function login(){
			$CI =& get_instance();
			return $CI->session->userdata('login');
		}	
	}
	
	
	if ( ! function_exists('email')){
		function email(){
			$CI =& get_instance();
			return $CI->session->userdata('email');
		}	
	}	
	
	if ( ! function_exists('is_client')){
		function is_client(){
			$CI =& get_instance();
			return $CI->session->userdata('is_client');
		}	
	}	
	
	if ( ! function_exists('client_name')){
		function client_name(){
			$CI =& get_instance();
			return $CI->session->userdata('client_name');
		}	
	}
	
	if ( ! function_exists('id_client')){
		function id_client(){
			$CI =& get_instance();
			return $CI->session->userdata('id_client');
		}	
	}
	
	if ( ! function_exists('id_user')){
		function id_user(){
			$CI =& get_instance();
			return $CI->session->userdata('id_user');
		}	
	}