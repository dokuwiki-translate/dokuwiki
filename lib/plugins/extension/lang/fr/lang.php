<?php

/**
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 *
 * @author Schplurtz le Déboulonné <Schplurtz@laposte.net>
 * @author Pierre Henriot <pierre.henriot@gmail.com>
 * @author Damien Regad <dregad@mantisbt.org>
 * @author Yves Grandvalet <Yves.Grandvalet@laposte.net>
 * @author Carbain Frédéric <fcarbain@yahoo.fr>
 * @author Nicolas Friedli <nicolas@theologique.ch>
 */
$lang['menu']                  = 'Gestionnaire d\'extensions';
$lang['tab_plugins']           = 'Greffons installés';
$lang['tab_templates']         = 'Thèmes installés';
$lang['tab_search']            = 'Rechercher et installer';
$lang['tab_install']           = 'Installation manuelle';
$lang['notimplemented']        = 'Cette fonctionnalité n\'est pas encore installée';
$lang['pluginlistsaveerror']   = 'Une erreur s\'est produite lors de l\'enregistrement de la liste des greffons.';
$lang['unknownauthor']         = 'Auteur inconnu';
$lang['unknownversion']        = 'Version inconnue';
$lang['btn_info']              = 'Montrer plus d\'informations';
$lang['btn_update']            = 'Mettre à jour';
$lang['btn_uninstall']         = 'Désinstaller';
$lang['btn_enable']            = 'Activer';
$lang['btn_disable']           = 'Désactiver';
$lang['btn_install']           = 'Installer';
$lang['btn_reinstall']         = 'Réinstaller';
$lang['js']['reallydel']       = 'Vraiment désinstaller cette extension';
$lang['js']['display_viewoptions'] = 'Voir les options:';
$lang['js']['display_enabled'] = 'activé';
$lang['js']['display_disabled'] = 'désactivé';
$lang['js']['display_updatable'] = 'Mise à jour possible';
$lang['js']['close']           = 'Cliquer pour fermer';
$lang['js']['filter']          = 'Montrer uniquement les mises à jour possibles';
$lang['search_for']            = 'Rechercher l\'extension :';
$lang['search']                = 'Chercher';
$lang['extensionby']           = '<strong>%s</strong> de %s';
$lang['screenshot']            = 'Aperçu de %s';
$lang['popularity']            = 'Popularité : %s%%';
$lang['homepage_link']         = 'Documentation';
$lang['bugs_features']         = 'Bogues';
$lang['tags']                  = 'Étiquettes :';
$lang['author_hint']           = 'Chercher les extensions de cet auteur';
$lang['installed']             = 'Installés :';
$lang['downloadurl']           = 'Téléchargement :';
$lang['repository']            = 'Dépôt : ';
$lang['unknown']               = '<em>inconnu</em>';
$lang['installed_version']     = 'Version installée :';
$lang['install_date']          = 'Dernière mise à jour :';
$lang['available_version']     = 'Version disponible :';
$lang['compatible']            = 'Compatible avec :';
$lang['depends']               = 'Dépend de :';
$lang['similar']               = 'Similaire à :';
$lang['conflicts']             = 'En conflit avec :';
$lang['donate']                = 'Vous aimez ?';
$lang['donate_action']         = 'Payer un café à l\'auteur !';
$lang['repo_retry']            = 'Réessayer';
$lang['provides']              = 'Fournit :';
$lang['status']                = 'État :';
$lang['status_installed']      = 'installé';
$lang['status_not_installed']  = 'non installé';
$lang['status_protected']      = 'protégé';
$lang['status_enabled']        = 'activé';
$lang['status_disabled']       = 'désactivé';
$lang['status_unmodifiable']   = 'non modifiable';
$lang['status_plugin']         = 'greffon';
$lang['status_template']       = 'thème';
$lang['status_bundled']        = 'intégré';
$lang['msg_enabled']           = 'Greffon %s activé';
$lang['msg_disabled']          = 'Greffon %s désactivé';
$lang['msg_delete_success']    = 'Extension %s désinstallée.';
$lang['msg_delete_failed']     = 'Échec de la désinstallation de l\'extension %s';
$lang['msg_install_success']   = 'Installation réussie de l\'extension %s';
$lang['msg_update_success']    = 'Mise à jour réussie de l\'extension %s';
$lang['msg_upload_failed']     = 'Téléversement échoué';
$lang['msg_nooverwrite']       = 'L\'extension %s existe déjà et ne sera pas remplacée. Pour la remplacer, cocher l\'option de remplacement d\'extension.';
$lang['missing_dependency']    = 'Dépendance absente ou désactivée : %s';
$lang['found_conflict']        = 'Cette extension est indiquée comme conflictuelle avec les extensions installées suivantes : %s';
$lang['security_issue']        = 'Problème de sécurité : %s';
$lang['security_warning']      = 'Avertissement de sécurité : %s';
$lang['update_message']        = 'Message de mise à jour : %s';
$lang['wrong_folder']          = 'Greffon installé incorrectement : renommer le dossier du greffon "%s" en "%s".';
$lang['url_change']            = 'URL modifiée : L\'URL de téléchargement a changé depuis le dernier téléchargement. Vérifiez si l\'URL est valide avant de mettre à jour l\'extension.
Nouvelle URL : %s
Ancien : %s';
$lang['error_badurl']          = 'Les URL doivent commencer par http ou https';
$lang['error_dircreate']       = 'Impossible de créer le dossier temporaire pour le téléchargement.';
$lang['error_download']        = 'Impossible de télécharger le fichier : %s';
$lang['error_decompress']      = 'Impossible de décompresser le fichier téléchargé. C\'est peut être le résultat d\'une erreur de téléchargement, auquel cas vous devriez réessayer. Le format de compression est peut-être inconnu. Dans ce cas il vous faudra procéder à une installation manuelle.';
$lang['error_findfolder']      = 'Impossible d\'identifier le dossier de l\'extension. Vous devez procéder à une installation manuelle.';
$lang['error_copy']            = 'Une erreur de copie de fichier s\'est produite lors de l\'installation des fichiers dans le dossier <em>%s</em>. Il se peut que le disque soit plein, ou que les permissions d\'accès aux fichiers soient incorrectes. Il est possible que le greffon soit partiellement installé et que cela laisse votre installation de DokuWiki instable.';
$lang['error_copy_read']       = 'Impossible de lire le dossier %s';
$lang['error_copy_mkdir']      = 'Ne peut créer le dossier %s';
$lang['error_copy_copy']       = 'Ne peut copier %s en %s';
$lang['error_archive_read']    = 'Ne peut ouvrir l\'archive %s en lecture';
$lang['error_archive_extract'] = 'Impossible d\'extraire de l\'archive %s : %s';
$lang['error_uninstall_protected'] = 'Vous ne pouvez pas désinstaller l\'extension %s car elle est protégée';
$lang['error_uninstall_dependants'] = 'Impossible de désinstaller %s. %s en dépend.';
$lang['error_disable_protected'] = 'Vous ne pouvez pas désactiver l\'extension %s car elle est protégée';
$lang['error_disable_dependants'] = 'Impossible de désactiver %s. %s en dépend.';
$lang['error_nourl']           = 'Aucun URL de téléchargement pour l\'extension %s';
$lang['error_notinstalled']    = 'L\'extension %s n\'est pas installée';
$lang['error_alreadyenabled']  = 'L\'extension %s est déjà activée';
$lang['error_alreadydisabled'] = 'L\'extension %s est déjà désactivée';
$lang['error_minphp']          = 'L\'extension %s nécessite au moins PHP %s, mais ce wiki utilise PHP %s';
$lang['error_maxphp']          = 'L\'extension %s ne fonctionne qu\'avec PHP ≤ %s, mais ce wiki utilise %s';
$lang['noperms']               = 'Impossible d\'écrire dans le dossier des extensions.';
$lang['notplperms']            = 'Impossible d\'écrire dans le dossier des thèmes.';
$lang['nopluginperms']         = 'Impossible d\'écrire dans le dossier des greffons.';
$lang['git']                   = 'Cette extension a été installé via git, vous voudrez peut-être ne pas la mettre à jour ici.';
$lang['auth']                  = 'Votre configuration n\'utilise pas ce greffon d\'authentification. Vous devriez songer à le désactiver.';
$lang['install_url']           = 'Installez depuis l\'URL :';
$lang['install_upload']        = 'Téléversez l\'extension :';
$lang['repo_badresponse']      = 'Le référentiel d\'extensions a retourné une réponse invalide.';
$lang['repo_error']            = 'Le référentiel d\'extensions est injoignable. Veuillez vous assurer que votre serveur web est autorisé à contacter www.dokuwiki.org et vérifier ses paramètres de proxy.';
$lang['nossl']                 = 'Votre version de PHP semble ne pas prendre en charge SSL. Le téléchargement de nombreuses extensions va échouer.';
$lang['popularity_high']       = 'C\'est l\'une des extensions les plus populaires';
$lang['popularity_medium']     = 'Cette extension est tout à fait populaire';
$lang['popularity_low']        = 'Cette extension a suscité un certain intérêt';
$lang['details']               = 'Détails';
