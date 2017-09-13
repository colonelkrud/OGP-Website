<?php
/*
 *
 * OGP - Open Game Panel
 * Copyright (C) 2008 - 2017 The OGP Development Team
 *
 * http://www.opengamepanel.org/
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 *
 */

define('add_new_remote_host', "Ajouter un nouveau hôte distant");
define('configured_remote_hosts', "Hôtes distants configurés");
define('remote_host', "Hôte distant");
define('remote_host_info', "L&apos;hôte distant doit avoir un nom d&apos;hôte (hostname) pingable!");
define('remote_host_port', "Port de l'hôte distant");
define('remote_host_port_info', "The port that is listened by the OGP Agent on remote host. Default: 12679.");
define('remote_host_name', "Nom de l'hôte distant");
define('ogp_user', "Nom d'utilisateur de l'Agent OGP");
define('remote_host_name_info', "Le nom de l&apos;hôte distant sera utilisé pour faciliter sa reconnaissance dans tout le Panneau.");
define('add_remote_host', "Ajouter un hôte distant");
define('remote_encryption_key', "Clé de chiffrement distante");
define('remote_encryption_key_info', "La clé de chiffrement distante est utilisé pour crypter les données entre le Panneau et l&apos;hôte distant (l&apos;Agent).<br>Cette clé doit être la même sur les deux machines.");
define('server_name', "Nom du serveur");
define('agent_ip_port', "IP:Port de l'Agent");
define('agent_status', "Statut de l'Agent");
define('ips', "IPs");
define('add_more_ips', "Si vous voulez entrer plus d'IPs, cliquez sur 'Définir IPs' quand tous les champs sont remplis et un champ vide apparaîtra.");
define('encryption_key_mismatch', "La clé de chiffrement ne correspond pas à celle de l'Agent. Veuillez vérifier la configuration de l'Agent.");
define('no_ip_for_remote_host', "Vous devez ajouter au moins une (1) adresse IP pour chaque hôte distant.");
define('note_remote_host', "A remote host is a server where the OGP Agent is running on. Each host can have multiple number of IP addresses on which users can bind servers to.");
define('ip_administration', "Administration IP &amp; Serveur :: Open Game Panel");
define('unknown_error', "Erreur inconnue - status_chk a retourné");
define('remote_host_user_name', "Utilisateur UNIX");
define('remote_host_user_name_info', "Utilisateur qui fait tourner l'Agent. Exemple: ogp_agent");
define('remote_host_ftp_ip', "IP FTP");
define('remote_host_ftp_ip_info', "The FTP server <b>IP</b> for the current Agent.");
define('remote_host_ftp_port', "FTP Port");
define('remote_host_ftp_port_info', "The FTP server <b>port</b> for the current Agent.");
define('view_log', "Voir le log");
define('status', "Statut");
define('stop_firewall', "Arrêter le Firewall (pare-feu)");
define('start_firewall', "Démarrer le Firewall (pare-feu)");
define('seconds', "Secondes");
define('reboot', "Redémarrer le Serveur Distant");
define('restart', "Redémarrer l'Agent");
define('confirm_reboot', "Etes-vous sûr de vouloir redémarrer physiquement la machine distante nommée '%s'?");
define('confirm_restart', "Are you sure you want to restart the Agent named '%s'?");
define('restarting', "Restarting Agent... Please wait.");
define('restarted', "Agent redémarré avec succès.");
define('reboot_success', "Le serveur nommé '%s' a été redémarré avec succès. Vous ne pourrez pas accéder au serveur tant qu'il n'est pas complètement redémarré.");
define('invalid_remote_host_id', "ID '%s' de l'hôte distant invalide.");
define('remote_host_removed', "Hôte distant '%s' supprimé avec succès.");
define('editing_remote_server', "Edition de l'hôte distant nommé '%s'");
define('remote_server_settings_changed', "Changement des paramètres pour le serveur distant '%s' effectué avec succès.");
define('save_settings', "Sauvegarder les paramètres");
define('set_ips', "Définir IPs");
define('remote_ip', "IP distante");
define('remote_ips_for', "IPs distantes pour le serveur '%s'");
define('ips_set_for_server', "IPs pour le serveur nommé '%s' définies avec succès.");
define('could_not_remove_ip', "Impossible de supprimer l'IP de la base de données.");
define('could_add_ip', "Peut ajouter l'IP du serveur distant à la base de données.");
define('areyousure_removeagent', "Are you sure you want to remove the Agent called");
define('areyousure_removeagent2', "et tous les serveurs qui lui sont reliés dans la base de données OGP?");
define('error_while_remove', "Erreur lors de la suppression du serveur distant.");
define('add_ip', "Ajouer IP");
define('remove_ip', "Supprimer IP");
define('edit_ip', "Editer IP");
define('wrote_changes', "Changements effectués avec succès.");
define('there_are_servers_running_on_this_ip', "Il y a des serveurs démarrés avec cette adresse IP.");
define('enter_ip_host', "Vous devez entrer une IP pour l'hôte distant.");
define('enter_valid_ip', "Vous devez entrer un port valide pour l'hôte distant. La valeur du port peut être comprise entre 0 et 65535, cependant les valeurs recommandées sont celles comprises entre 1024 et 65535.");
define('could_not_add_server', "Impossible d'ajouter le serveur");
define('to_db', "à la base de données.");
define('added_server', "Serveur ajouté");
define('with_port', "avec le port");
define('to_db_succesfully', "dans la base de données avec succès.");
define('unable_discover', "Impossible de découvrir automatiquement les IPs sur");
define('set_ip_manually', "Vous devez les entrer manuellement.");
define('found_ips', "IPs trouvés");
define('for_remote_server', "pour le serveur distant.");
define('failed_add_ip', "Impossible d'ajouter l'IP");
define('timeout', "Time Out");
define('timeout_info', "The time limit in seconds to get response from this Agent.");
define('use_nat', "Utiliser le NAT");
define('use_nat_info', "Activez le si votre serveur distant utlise les règles NAT.");
define('arrange_ports', "Arranger les ports");
define('assign_new_ports_range_for_ip', "Assigner nouvelle plage de ports pour l'IP %s");
define('assigned_port_ranges_for_ip', "Plages de ports assignées pour l'IP %s");
define('assigned_ports_for_ip', "Ports assignés pour l'IP %s");
define('unspecified_game_types', "Types de jeu non spécifié");
define('start_port', "Port de début:");
define('end_port', "Port de fin:");
define('port_increment', "Incrément de Port:");
define('total_assignable_ports', "Ports assignables au Total:");
define('available_range_ports', "Plage de ports disponible:");
define('assign_range', "Assigner plage");
define('edit_range', "Editer plage");
define('delete_range', "Supprimer plage");
define('home_id', "ID Serveur");
define('home_path', "Chemin du serveur");
define('game_type', "Type de Jeu");
define('port', "Port");
define('invalid_values', "Valeurs invalides.");
define('ports_in_range_already_arranged', "Ports dans la Plage déjà arrangés.");
define('ports_range_already_configured_for', "Plage de ports déjà configurée pour %s.");
define('ports_range_added_successfull_for', "Plage de ports ajoutée avec succès pour %s.");
define('ports_range_deleted_successfull', "Plage de ports supprimée avec succès.");
define('ports_range_edited_successfull_for', "Plage de ports éditée avec succès pour %s.");
define('editing_firewall_for_remote_server', "Editer le Firewall pour le serveur distant nommé '%s'");
define('default_allowed', "Autorisé par défaut");
define('allow_port_command', "Commande d'autorisation port");
define('deny_port_command', "Commande de blocage port");
define('allow_ip_port_command', "Commande d'autorisation IP:port");
define('deny_ip_port_command', "Commande de blocage IP:port");
define('enable_firewall_command', "Commande pour activer le Firewall");
define('disable_firewall_command', "Commande pour désactiver le Firewall");
define('get_firewall_status_command', "Commande pour le statut du Firewall");
define('reset_firewall_command', "Commande pour le Reset du Firewall");
define('firewall_status', "Statut du Firewall");
define('save_firewall_settings', "Enregistrer les paramètres du Firewall");
define('reset_firewall', "Reset du Firewall");
define('firewall_settings', "Paramètres du Firewall");
define('display_public_ip', "Adresse IP Publique par Défaut");
?>