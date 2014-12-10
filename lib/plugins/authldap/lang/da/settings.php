<?php

/**
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * 
 * @author Jens Hyllegaard <jens.hyllegaard@gmail.com>
 * @author soer9648 <soer9648@eucl.dk>
 * @author Søren Birk <sbi@eucl.dk>
 */
$lang['server']                = 'Din LDAP server. Enten værtsnavn (<code>localhost</code>) eller fuld kvalificeret URL (<code>ldap://server.tld:389</code>)';
$lang['port']                  = 'LDAP server port, hvis der ikke er angivet en komplet URL ovenfor.';
$lang['usertree']              = 'Hvor findes brugerkonti. F.eks. <code>ou=Personer, dc=server, dc=tld</code>';
$lang['grouptree']             = 'Hvor findes brugergrupper. F.eks. <code>ou=Grupper, dc=server, dc=tld</code>';
$lang['userfilter']            = 'LDAP-filter til søgning efter brugerkonti. F.eks. <code>(&amp;(uid=%{user})(objectClass=posixAccount))</code>';
$lang['groupfilter']           = 'LDAP-filter til søgning efter grupper. F.eks. <code>(&amp;(objectClass=posixGroup)(|(gidNumber=%{gid})(memberUID=%{user})))</code>';
$lang['version']               = 'Protokolversionen som skal bruges. Du skal muligvis angive dette som <code>3</code>';
$lang['starttls']              = 'Benyt TLS forbindelser?';
$lang['referrals']             = 'Skal henvisninger følges?';
$lang['bindpw']                = 'Kodeord til ovenstående bruger';
$lang['userscope']             = 'Begræns søgeområde for brugersøgning';
$lang['groupscope']            = 'Begræns søgeområde for gruppesøgning';
$lang['debug']                 = 'Vis yderligere debug output ved fejl';
