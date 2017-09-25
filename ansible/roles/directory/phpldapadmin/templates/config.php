<?php
$config->custom->session['blowfish'] = '{{ pla_blowfish }}';
$config->custom->appearance['page_title'] = '{{ ldap_name }}';
$config->custom->appearance['friendly_attrs'] = array(
	'facsimileTelephoneNumber' => 'Fax',
	'gid'                      => 'Group',
	'mail'                     => 'Email',
	'telephoneNumber'          => 'Telephone',
	'uid'                      => 'User Name',
	'userPassword'             => 'Password'
);
$servers = new Datastore();
$servers->newServer('ldap_pla');
$servers->setValue('server','name','{{ ldap_name }}');
$servers->setValue('auto_number','min',array('uidNumber'=>10000,'gidNumber'=>10000));
$servers->setValue('server','host','localhost');
$servers->setValue('server','port',389);
$servers->setValue('server','base',array('{{ ldap_basedn }}'));
$servers->setValue('login','auth_type','session');
$servers->setValue('login','bind_id','{{ ldap_rootdn }}');
$servers->setValue('login','bind_pass','{{ ldap_root_password_clear }}');
// $servers->setValue('server','tls',false);
$servers->setValue('appearance','password_hash','ssha');
?>