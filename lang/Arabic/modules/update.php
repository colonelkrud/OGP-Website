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

include('litefm.php');
define('curl_needed', "هذه الصفحة تتطلب PHP curl module .");
define('no_access', "أنت بحاجة إلى صلاحيات الأدمن للدخول إلى هذه الصفحة.");
define('dwl_update', "تحميل التحديث...");
define('dwl_complete', "تم التحميل");
define('install_update', "تثبيت التحديث...");
define('update_complete', "تم التحديث");
define('ignored_files', "%s ملف تم تجاهله");
define('not_updated_files_blacklisted', "لم يتم تحديث / تثبيت الملفات (القائمة السوداء):<br>%s");
define('latest_version', "احدث اصدار");
define('panel_version', "نسخة اللوحة");
define('update_now', "تحديث الان");
define('the_panel_is_up_to_date', "اللوحة محدثة لاخر إصدار.");
define('files_overwritten', "%s ملف استبدل");
define('files_not_overwritten', "%s files are NOT overwritten due to blacklist");
define('can_not_update_non_writable_files', "لايمكن تحديث الملفات/المجلدات التالية لانها غير قابلة لإستبدال");
define('dwl_failed', "رابط التحميل غير متوفر: \"%s\".<br>جرب مجدداً في وقت لاحق.");
define('temp_folder_not_writable', "لا يمكن وضع التنزيل، لأن أباتشي ليس لديه إذن كتابة في المجلد المؤقت للنظام (%s).");
define('base_dir_not_writable', "لا يمكن تحديث اللوحة، لأن أباتشي ليس لديه إذن الكتابة على مجلد \"%s\".");
define('new_files', "%s ملف جديد");
define('updated_files', "تحديث الملفات:<br>%s");
define('select_mirror', "إختر مرآه");
define('view_changes', "شاهد التغيرات");
define('get_x_revison_messages_may_take_some_time', "Get %s revision message(s) may take some time.");
define('updating_modules', "تحديث الموديولات");
define('updating_finished', "انتهى التحديث");
define('updated_module', "تحديث الموديول : '%s'.");
define('blacklist_files', "ملفات القائمة السوداء");
define('blacklist_files_info', "لن يتم تحديث كافة الملفات المعلمة.");
define('save_to_blacklist', "حفظ إلى القائمة السوداء");
define('no_new_updates', "لا توجد تحديثات جديدة");
define('module_file_missing', "الدليل مفقود في ملف module.php.");
define('query_failed', "أخفق تنفيذ طلب البحث");
define('query_failed_2', "إلى قاعدة البيانات.");
define('missing_zip_extension', "The php-zip extension is not loaded. Please, enable it to use the Update module.");
?>