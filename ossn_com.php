<?php
/**
 *    OpenSource-SocialNetwork
 *
 * @package   Speedtest
 * @author    TheDoggyBrad <admin@gosocial.x10.bz>
 * @copyright 2023 TheDoggyBrad
 * @license   OSSN License v4
 * @link      https://www.opensource-socialnetwork.org/licence/v4.0.html
 */
define('__speedtest__', ossn_route()->com . 'speedtest/');

function speedtest_init() {

	  if (ossn_isLoggedin()) {       
		
		ossn_extend_view('css/ossn.default', 'css/speedtest');
        
                     ossn_register_page('speedtest', 'speedtest_pages');
		
				ossn_register_sections_menu('newsfeed', array(

						'name' => 'speedtest',

						'text' => ossn_print('com:ossn:speedtest'),

						'url' => ossn_site_url('speedtest'),

						'section' => 'links',

				));
					
    }
}
function speedtest_pages($pages) {
  
						$title               = ossn_print('com:ossn:speedtest');
						
						$contents['content'] = ossn_plugin_view('pages/speedtest', array(

						));

						$content             = ossn_set_page_layout('newsfeed', $contents);

						echo ossn_view_page($title, $content);

}
ossn_register_callback('ossn', 'init', 'speedtest_init');
