<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| MIME TYPES
| -------------------------------------------------------------------
| This file contains an array of mime types.  It is used by the
| Upload class to help identify allowed file types.
|
*/

$mimes = array(	'hqx'	=>	'application/mac-binhex40',
				'cpt'	=>	'application/mac-compactpro',
				'csv'	=>	array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'application/vnd.ms-excel', 'text/anytext', 'text/plain'),
				'bin'	=>	'application/macbinary',
				'dms'	=>	'application/octet-stream',
				'lha'	=>	'application/octet-stream',
				'lzh'	=>	'application/octet-stream',
				'exe'	=>	array('application/octet-stream', 'application/x-msdownload'),
				'class'	=>	'application/octet-stream',
				'psd'	=>	'application/x-photoshop',
				'so'	=>	'application/octet-stream',
				'sea'	=>	'application/octet-stream',
				'dll'	=>	'application/octet-stream',
				'oda'	=>	'application/oda',
				'pdf'	=>	array('application/pdf', 'application/x-download'),
				'ai'	=>	'application/postscript',
				'eps'	=>	'application/postscript',
				'ps'	=>	'application/postscript',
				'smi'	=>	'application/smil',
				'smil'	=>	'application/smil',
				'mif'	=>	'application/vnd.mif',
				'xls'	=>	array('application/excel', 'application/vnd.ms-excel', 'application/msexcel', 'application/vnd.ms-office'),
				'xl'	=>	'application/excel',
				'xlt'	=>	'application/vnd.ms-excel',
				'xla'	=>	'application/vnd.ms-excel',
				'ppt'	=>	array('application/powerpoint', 'application/vnd.ms-powerpoint', 'application/mspowerpoint', 'application/ms-powerpoint', 'application/mspowerpnt', 'application/vnd-mspowerpoint', 'application/x-powerpoint', 'application/x-m', 'application/msword',  'application/vnd.ms-office'),
				'pot'	=>	array('application/vnd.ms-powerpoint', 'application/msword', 'application/vnd.ms-office'),
				'pps'	=>	array('application/vnd.ms-powerpoint', 'application/msword', 'application/vnd.ms-office'),
				'ppa'	=>	array('application/vnd.ms-powerpoint', 'application/msword', 'application/vnd.ms-office'),
				'wbxml'	=>	'application/wbxml',
				'wmlc'	=>	'application/wmlc',
				'dcr'	=>	'application/x-director',
				'dir'	=>	'application/x-director',
				'dxr'	=>	'application/x-director',
				'dvi'	=>	'application/x-dvi',
				'gtar'	=>	'application/x-gtar',
				'gz'	=>	array('application/x-gzip', 'application/gzip'),
				'php'	=>	'application/x-httpd-php',
				'php4'	=>	'application/x-httpd-php',
				'php3'	=>	'application/x-httpd-php',
				'phtml'	=>	'application/x-httpd-php',
				'phps'	=>	'application/x-httpd-php-source',
				'js'	=>	'application/x-javascript',
				'swf'	=>	'application/x-shockwave-flash',
				'sit'	=>	'application/x-stuffit',
				'tar'	=>	'application/x-tar',
				'tgz'	=>	array('application/x-tar', 'application/x-gzip-compressed'),
				'xhtml'	=>	'application/xhtml+xml',
				'xht'	=>	'application/xhtml+xml',
				'zip'	=>  array('application/x-zip', 'application/zip', 'application/x-zip-compressed'),
				'mid'	=>	'audio/midi',
				'midi'	=>	'audio/midi',
				'mpga'	=>	'audio/mpeg',
				'mp2'	=>	'audio/mpeg',
				'mp3'	=>	array('audio/mpeg', 'audio/mpg', 'audio/mpeg3', 'audio/mp3', 'application/octet-stream'),
				'aif'	=>	'audio/x-aiff',
				'aiff'	=>	'audio/x-aiff',
				'aifc'	=>	'audio/x-aiff',
				'ram'	=>	'audio/x-pn-realaudio',
				'rm'	=>	'audio/x-pn-realaudio',
				'rpm'	=>	'audio/x-pn-realaudio-plugin',
				'ra'	=>	'audio/x-realaudio',
				'rv'	=>	'video/vnd.rn-realvideo',
				'wav'	=>	array('audio/x-wav', 'audio/wave', 'audio/wav'),
				'bmp'	=>	array('image/bmp', 'image/x-windows-bmp'),
				'gif'	=>	'image/gif',
				'jpeg'	=>	array('image/jpeg', 'image/pjpeg'),
				'jpg'	=>	array('image/jpeg', 'image/pjpeg'),
				'jpe'	=>	array('image/jpeg', 'image/pjpeg'),
				'png'	=>	array('image/png',  'image/x-png'),
				'tiff'	=>	'image/tiff',
				'tif'	=>	'image/tiff',
				'css'	=>	'text/css',
				'html'	=>	'text/html',
				'htm'	=>	'text/html',
				'shtml'	=>	'text/html',
				'txt'	=>	'text/plain',
				'text'	=>	'text/plain',
				'log'	=>	array('text/plain', 'text/x-log'),
				'rtx'	=>	'text/richtext',
				'rtf'	=>	'text/rtf',
				'xml'	=>	array('text/xml', 'application/xml'),
				'xsl'	=>	'text/xml',
				'mpeg'	=>	'video/mpeg',
				'mpg'	=>	'video/mpeg',
				'mpe'	=>	'video/mpeg',
				'qt'	=>	'video/quicktime',
				'mov'	=>	'video/quicktime',
				'avi'	=>	'video/x-msvideo',
				'wmv'	=>	array('video/x-ms-wmv', 'video/x-ms-asf'),
				'movie'	=>	'video/x-sgi-movie',
				'doc'	=>	array('application/msword','application/doc', 'appl/text', 'application/vnd.msword', 'application/vnd.ms-word', 'application/winword', 'application/word', 'application/x-msw6', 'application/x-msword', 'application/vnd.ms-office'),
				'docm'	=>	array('application/vnd.ms-word.document.macroEnabled.12', 'application/msword', 'application/vnd.ms-office'),
				'docx'	=>	array('application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/zip', 'application/msword', 'application/vnd.ms-office'),
				'dot'	=>	array('application/msword', 'application/vnd.ms-office'),
				'dotm'	=>	array('application/vnd.ms-word.template.macroEnabled.12', 'application/msword', 'application/vnd.ms-office'),
				'dotx'	=>	array('application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/msword', 'application/vnd.ms-office'),
				'pptx'	=>	array('application/vnd.openxmlformats-officedocument.presentationml.presentation', 'application/zip', 'application/vnd.ms-powerpoint', 'application/vnd.ms-office'),
				'potx'	=>	array('application/vnd.openxmlformats-officedocument.presentationml.template', 'application/vnd.ms-powerpoint', 'application/vnd.ms-office'),
				'ppsx'	=>	array('application/vnd.openxmlformats-officedocument.presentationml.slideshow', 'application/vnd.ms-powerpoint', 'application/vnd.ms-office'),
				'ppam'	=>	array('application/vnd.ms-powerpoint.addin.macroEnabled.12', 'application/vnd.ms-powerpoint', 'application/vnd.ms-office'),
				'pptm'	=>	array('application/vnd.ms-powerpoint.presentation.macroEnabled.12', 'application/vnd.ms-powerpoint', 'application/vnd.ms-office'),
				'potm'	=>	array('application/vnd.ms-powerpoint.template.macroEnabled.12', 'application/vnd.ms-powerpoint', 'application/vnd.ms-office'),
				'ppsm'	=>	array('application/vnd.ms-powerpoint.slideshow.macroEnabled.12', 'application/vnd.ms-powerpoint', 'application/vnd.ms-office'),
				'xlsx'	=>	array('application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'application/zip', 'application/vnd.ms-excel', 'application/vnd.ms-office'),
				'xltx'	=>	array('application/vnd.openxmlformats-officedocument.spreadsheetml.template', 'application/vnd.ms-excel', 'application/vnd.ms-office'),
				'xlsm'	=>	array('application/vnd.ms-excel.sheet.macroEnabled.12', 'application/vnd.ms-excel', 'application/vnd.ms-office'),
				'xltm'	=>	array('application/vnd.ms-excel.template.macroEnabled.12', 'application/vnd.ms-excel', 'application/vnd.ms-office'),
				'xlam'	=>	array('application/vnd.ms-excel.addin.macroEnabled.12', 'application/vnd.ms-excel', 'application/vnd.ms-office'),
				'xlsb'	=>	array('application/vnd.ms-excel.sheet.binary.macroEnabled.12', 'application/vnd.ms-excel', 'application/vnd.ms-office'),
				'word'	=>	array('application/msword', 'application/octet-stream', 'application/vnd.ms-word', 'application/vnd.ms-office'),
				'eml'	=>	'message/rfc822',
				'json' => array('application/json', 'text/json')
			);


/* End of file mimes.php */
/* Location: ./application/config/mimes.php */
