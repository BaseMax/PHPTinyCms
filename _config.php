<?
/**
 *
 * @Name : PHPTinyCms
 * @Version : 1.0
 * @Programmer : Max
 * @Date : 2019-10-25
 * @Released under : https://github.com/BaseMax/PHPTinyCms/blob/master/LICENSE
 * @Repository : https://github.com/BaseMax/PHPTinyCms
 *
 **/
if(count(get_included_files()) == ((version_compare(PHP_VERSION, '5.0.0', '>='))?1:0) ){exit('Restricted Access!');}
$db->connect("localhost", "host_username", "host_pass");
$db->db="database_name";
