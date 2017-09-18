<?php
$CONFIG = array (
  'instanceid' => 'oc{{ 4645865462|random(seed="ansible_fqdn") }}',
  'passwordsalt' => '{{ 839470129377893029784932|random(seed="ansible_fqdn") }}',
  'secret' => '{{ 430295761096703982029802927375029342578|random(seed="ansible_fqdn") }}',
  'trusted_domains' =>
  array (
    0 => '{{ ansible_fqdn }}',
    1 => '{{ ansible_hostname }}',
    2 => '{{ inventory_hostname }}',
    3 => '{{ ansible_default_ipv4.address }}',
  ),
  'datadirectory' => '/var/www/html/nextcloud/data',
  'overwrite.cli.url' => 'http://{{ ansible_fqdn }}/nextcloud',
  'dbtype' => 'mysql',
  'version' => '12.0.2.0',
  'dbname' => 'nextcloud',
  'dbhost' => 'localhost',
  'dbport' => '',
  'dbtableprefix' => 'oc_',
  'dbuser' => '{{ nextcloud_db.username }}',
  'dbpassword' => '{{ nextcloud_db.password }}',
  'installed' => true,
);
