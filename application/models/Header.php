<?php
/**
 * Header Fz
 * @author Rene Faustino Gabriel Junior <renefgj@gmail.com> (Analista-Desenvolvedor)
 * @copyright Copyright (c) 2014 - sisDOC.com.br
 * @access public
 * @version v.0.14.21
 * @package _class
 * @subpackage _class_header_fz.php
 */

class header extends CI_Model {
	var $charcod = "UTF-8"; 
	/* var $charcod = "ISO-8859-1"; */
	var $title = '';
	var $google_id = '';
	/* Ex: UA-12712904-10 */
	var $login_api = '';
	var $http = '/fz/';

	function foot() {
		return ('');
	}

	function head($title='') {
		$cr = chr(13) . chr(10);
		$pth = base_url();
		$http = $pth;

		header('Content-type: text/html; charset=' . $this -> charcod);
		$sx = '';
		$sx .= '<head>' . $cr;
		$sx .= '<META HTTP-EQUIV=Refresh CONTENT="3600; URL=' . $http . 'logout">' . $cr;
		$sx .= '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
		$sx .= '<meta name="description" content="">' . $cr;
		$sx .= '<link rel="shortcut icon" type="image/x-icon" href="' . $http . 'favicon.png" />' . $cr;

		/* Style */
//		$style = array('style_cab.css', 'prj_style.css', 'fonts_cicpg.css', 'fz_style_menus.css', 'fz_style_ballon.css', 'fz_style_table.css');
		$style = array('style_cab.css', 'fonts_cicpg.css');
		for ($r = 0; $r < count($style); $r++) { $sx .= '<link rel="STYLESHEET" type="text/css" href="' . $http . 'css/' . $style[$r] . '">' . $cr;
		}
		/* Java script */
		$js = array('jquery-1.7.1.js', 'jquery.maskedinput.js', 'scrooling.js', 'jquery.autocomplete.js');
		for ($r = 0; $r < count($js); $r++) { $sx .= '<script type="text/javascript" src="' . $http . 'js/' . $js[$r] . '"></script>' . $cr;
		}

		$sx .= '<title>' . $title . '</title>' . $cr;
		$sx .= '</head>';

		$LANG = 'pt_BR';
		return ($sx);
	}

	function cab_extend() {
		$sx .= '<div>';
		$sx .= '</div>';
		return ($sx);
	}

	function cab() {
		$sx = $this -> head();
		//$sx .= $this -> api_google;
		return ($sx);
	}

	function menus_basic() {
		global $http;
		$link = array('', '', '', '', '', '', '', '', '', '');
		$title = array('teste1', 'teste2', 'teste3', 'teste4');
		$link = array($http . 'pre_cadastro/pre_cadA.php', $http . 'pre_cadastro/pre_cadB.php', $http . 'pre_cadastro/pre_cadC.php', $http . 'pre_cadastro/pre_cadD.php');
		for ($r = 0; $r < count($title); $r++) {
			$xlink = trim($link[$r]);
			$xlinka = '';
			if (strlen($xlink) > 0) {
				$xlink = '<A HREF="' . $link[$r] . '">';
				$xlinka = '</A>';
			}
			$sx .= $xlink;
			$sx .= ' <img src="' . $http . 'img/icone_fz_basic' . $r . 'a.png" height="45" border=0 
							onmouseover="$(this).attr(\'src\',\'' . $http . 'img/icone_fz_basic' . $r . '.png\');" 
							onmouseout="$(this).attr(\'src\',\'' . $http . 'img/icone_fz_basic' . $r . 'a.png\');"
							title = "' . $title[$r] . '"
							>';
			$sx .= $xlinka;
		}

		return ($sx);

	}

}
?>