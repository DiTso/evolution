<?php
/**
 * MODX Installer language file
 *
 * @author MEGU, yamamoto, TxO
 * @version 1.0.13
 * @date 31/12/2013
 *
 * @language Japanese
 * @package modx
 * @subpackage installer
 *
 * Please commit your language changes on Transifex (https://www.transifex.com/projects/p/modx-evolution/) or on GitHub (https://github.com/modxcms/evolution).
 */
$_lang["agree_to_terms"] = 'ライセンスが規定する諸条件を確認しインストールを実行してください';
$_lang["alert_database_test_connection"] = 'データベースを作成、またはデータベースの接続テストを行う必要があります';
$_lang["alert_database_test_connection_failed"] = 'データベースに接続できません。';
$_lang["alert_enter_adminconfirm"] = '管理者パスワードと確認パスワードが一致しません。';
$_lang["alert_enter_adminlogin"] = '管理者のユーザー名を入力してください';
$_lang["alert_enter_adminpassword"] = '管理者のパスワードを入力してください';
$_lang["alert_enter_database_name"] = 'データベース名を入力してください';
$_lang["alert_enter_host"] = 'データベースサーバのホスト名を入力してください';
$_lang["alert_enter_login"] = 'データベースのユーザー名を入力してください';
$_lang["alert_server_test_connection"] = 'サーバー接続をテストしてください';
$_lang["alert_server_test_connection_failed"] = 'サーバー接続テストが失敗しました';
$_lang["alert_table_prefixes"] = 'テーブルのプレフィックスはアルファベットのみ使えます。';
$_lang["all"] = '全て選択';
$_lang["and_try_again"] = 'これらのエラーを修正し、右下の「再チェック」ボタンをクリックしてください。';
$_lang["and_try_again_plural"] = 'これらのエラーを修正し、右下の「再チェック」ボタンをクリックしてください。';
$_lang["begin"] = '開始';
$_lang["btnback_value"] = '戻る';
$_lang["btnclose_value"] = 'インストール終了';
$_lang["btnnext_value"] = '進む';
$_lang["cant_write_config_file"] = '設定ファイルを生成できませんでした。以下をコピーしてconfig.inc.phpに反映してください ';
$_lang["cant_write_config_file_note"] = 'Once that\'s been done, you can log into MODX Admin by pointing your browser at YourSiteName.com/[+MGR_DIR+]/.';
$_lang["checkbox_select_options"] = '拡張機能の選択:';
$_lang["checking_if_cache_exist"] = '<span class="mono">/assets/cache</span>ディレクトリの存在チェック(なければ転送に失敗しています): ';
$_lang["checking_if_cache_file_writable"] = 'ファイル<span class="mono">/assets/cache/siteCache.idx.php</span>の書き込み属性(606などに設定): ';
$_lang["checking_if_cache_file2_writable"] = 'ファイル<span class="mono">/assets/cache/sitePublishing.idx.php</span>の書き込み属性(606などに設定): ';
$_lang["checking_if_cache_writable"] = '<span class="mono">/assets/cache</span>ディレクトリの書き込み属性(707などに設定): ';
$_lang["checking_if_config_exist_and_writable"] = 'Checking if <span class="mono">/[+MGR_DIR+]/includes/config.inc.php</span> exists and is writable: ';
$_lang["checking_if_export_exists"] = '<span class="mono">/assets/export</span>ディレクトリの存在(なければ転送に失敗しています): ';
$_lang["checking_if_export_writable"] = '<span class="mono">/assets/export</span>ディレクトリの書き込み属性(707などに設定): ';
$_lang["checking_if_images_exist"] = '<span class="mono">/assets/images</span>,<span class="mono">/assets/files</span>,<span class="mono">/assets/flash</span>, <span class="mono">/assets/media</span>,<span class="mono">/assets/backup</span>,<span class="mono">/assets/.thumbs</span>ディレクトリの存在(なければ転送に失敗しています): ';
$_lang["checking_if_images_writable"] = '<span class="mono">/assets/images</span>,<span class="mono">/assets/files</span>,<span class="mono">/assets/flash</span>, <span class="mono">/assets/media</span>,<span class="mono">/assets/backup</span>,<span class="mono">/assets/.thumbs</span>ディレクトリの書き込み属性(707などに設定): ';
$_lang["checking_mysql_strict_mode"] = 'Checking MySQL for strict sql_mode: ';
$_lang["checking_mysql_version"] = 'MySQLのバージョン: ';
$_lang["checking_php_version"] = 'PHPのバージョンチェック: ';
$_lang["checking_registerglobals"] = 'Register_Globalsの設定: ';
$_lang["checking_registerglobals_note"] = 'Register_Globalsがオンになっていると、サイトはXSS攻撃の対象としてさらされるため非常に危険です。特に必要がなければオフにしてください。.htaccessに「php_flag register_globals off」と記述を加えることでオフに設定できます。';
$_lang["checking_sessions"] = 'セッション情報が正常に構成されるかどうか: ';
$_lang["checking_table_prefix"] = 'Tableプリフィックスの設定 `';
$_lang["chunks"] = 'チャンク';
$_lang["config_permissions_note"] = 'For new Linux/Unix installs, please create a blank file named <span class="mono">config.inc.php</span> in the <span class="mono">/[+MGR_DIR+]/includes/</span> directory with file permissions set to 0666.';
$_lang["connection_screen_collation"] = '照合順序(エンコード指定含む):<br />※utf8_general_ciを<br />おすすめします';
$_lang["connection_screen_connection_method"] = '接続時の文字セットの扱い:';
$_lang["connection_screen_database_connection_information"] = 'データベース設定';
$_lang["connection_screen_database_connection_note"] = 'データベース名を入力してください。データベース作成権限がある場合は、ここで指定した名前でデータベースが作成されます。<br />文字セットの扱いは「SET CHARACTER SET」、接続照合順序は「utf8_general_ci」をおすすめします。<br />※MySQL4.1未満ではこれらのエンコード設定を無視して日本語を扱います。';
$_lang["connection_screen_database_host"] = 'データベースホスト名:';
$_lang["connection_screen_database_info"] = 'データベース設定';
$_lang["connection_screen_database_login"] = 'データベース接続ログイン名:';
$_lang["connection_screen_database_name"] = 'データベース名:';
$_lang["connection_screen_database_pass"] = 'データベース接続パスワード:';
$_lang["connection_screen_database_test_connection"] = 'ここをクリックして、データベースのテストを行なってください。<br />（※権限がある場合は、この操作でデータベースを新規に作成できます）';
$_lang["connection_screen_default_admin_email"] = 'email:';
$_lang["connection_screen_default_admin_login"] = 'ログイン名(半角英数字):';
$_lang["connection_screen_default_admin_note"] = 'デフォルトの管理アカウントを作成します。メールアドレスはパスワード再発行の際に必要となるので、タイプミスがないよう気をつけてください。';
$_lang["connection_screen_default_admin_password"] = 'パスワード:';
$_lang["connection_screen_default_admin_password_confirm"] = 'パスワード(確認入力):';
$_lang["connection_screen_default_admin_user"] = 'デフォルトの管理アカウント作成';
$_lang["connection_screen_defaults"] = '管理アカウントの初期設定';
$_lang["connection_screen_server_connection_information"] = 'データベースホストへの接続';
$_lang["connection_screen_server_connection_note"] = 'データベースサーバのホスト名・ログイン名・パスワードを入力し、「ここをクリック」をクリックし接続テストをしてください。<br />ポート番号を指定する場合は「ホスト名:ポート番号」とします(例：localhost:3306)。<br />※MODX本体はMySQL4.0.2以上をサポートしますが、MySQL4.1未満ではAjaxSearchなど同梱アドオンの一部の機能が制限されます。ご注意ください。<br />※通常の運用ではWebサーバがデータベースサーバを兼ねるためホスト名は<a href="http://www.google.com/search?q=localhost&lr=lang_ja" target="_blank">「localhost」</a>となりますが、さくらインターネット・ロリポップ・エックスサーバーなどメジャーなレンタルサーバでは専用のサーバを指定するケースが多いです。ご確認ください。';
$_lang["connection_screen_server_test_connection"] = 'ここをクリックして、接続テストを行ってください。';
$_lang["connection_screen_table_prefix"] = 'Tableプリフィクス:';
$_lang["creating_database_connection"] = 'データベース接続: ';
$_lang["database_alerts"] = 'データベースの警告';
$_lang["database_connection_failed"] = 'データベース接続に異常があります';
$_lang["database_connection_failed_note"] = 'データベースのログイン設定を確認し、再びチェックを試してください。';
$_lang["database_use_failed"] = 'データベースを選択できません。データベース名を確認してください。';
$_lang["database_use_failed_note"] = 'データベースのユーザー権限を確認してください。';
$_lang["default_language"] = '管理画面で使用する言語';
$_lang["default_language_description"] = '管理画面で使用する言語を選択してください。(※Japanese-eucを選択するとプリインストールされるサンプルコンテンツやアドオンの説明文は文字化けしますのでご注意ください。アドオンの機能は利用できます。)';
$_lang["depedency_create"] = 'Depedency created';
$_lang["depedency_update"] = 'Depedency updated';
$_lang["during_execution_of_sql"] = ' during the execution of SQL statement ';
$_lang["encoding"] = 'utf-8';
$_lang["error"] = 'エラー';
$_lang["errors"] = 'エラー';
$_lang["failed"] = '確認してください';
$_lang["guid_set"] = 'GUID set';
$_lang["help"] = 'Help!';
$_lang["help_link"] = 'http://modxcms-jp.com/howto/rserver.html';
$_lang["help_title"] = 'インストールで困ったらココをチェック(MODXフォーラム)';
$_lang["iagree_box"] = '<b><a href="../assets/docs/license.txt" target="_blank">このライセンス(GPL2)</a>で規定される諸条件に同意します。</b></p><p><a href="http://www.opensource.jp/gpl/gpl.ja.html" target="_blank">GPL2ライセンスの日本語訳はこちらにあります。</a>この翻訳には法的効力はないため、<b>厳密な法的検証が必要な場合</b>は必ず英語の原文をご確認ください。';
$_lang["install"] = 'インストール';
$_lang["install_overwrite"] = 'インストール - ';
$_lang["install_results"] = 'インストールを実行しました。';
$_lang["install_update"] = 'インストール／アップデート';
$_lang["installation_error_occured"] = '<span style="font-weight:bold;color:red;">インストール中に以下のエラーが発生しました。</span>';
$_lang["installation_install_new_copy"] = '新規インストール - ';
$_lang["installation_install_new_note"] = 'すでにMODXをインストールしている場合はデータを上書きします。<br />※Tableプリフィクスが異なる場合を除く';
$_lang["installation_mode"] = 'インストールの選択';
$_lang["installation_new_installation"] = '新規インストール';
$_lang["installation_note"] = '<strong>はじめに:</strong>管理画面にログインできたら、まずは管理画面右上のヘルプをご確認ください。';
$_lang["installation_successful"] = '<span style="color:#080;font-size:22px;">インストールは無事に成功しました。</span>';
$_lang["installation_upgrade_advanced"] = 'カスタムアップデート<br /><small>(データベース設定をアップデートできます)</small>';
$_lang["installation_upgrade_advanced_note"] = 'データベース設定の変更を伴うアップデート(MySQL4→MySQL5など)が必要な場合はこちらを選んでください。config.inc.phpのデータベース接続情報一式を更新します。<br />';
$_lang["installation_upgrade_existing"] = '通常アップデート';
$_lang["installation_upgrade_existing_note"] = 'ファイルとデータベースをアップデートします。';
$_lang["installed"] = 'インストールしました';
$_lang["installing_demo_site"] = 'サンプルサイトのインストール: ';
$_lang["language_code"] = 'ja';
$_lang["loading"] = '処理中...';
$_lang["modules"] = 'モジュール';
$_lang["modx_footer1"] = '&copy; 2005-2013 the <a href="http://www.modx.com/" target="_blank" style="color: green; text-decoration:underline">MODX</a> Content Management Framework (CMF) project. All rights reserved. MODX is licensed under the GNU GPL.';
$_lang["modx_footer2"] = 'MODX is free software.  We encourage you to be creative and make use of MODX in any way you see fit. Just make sure that if you do make changes and decide to redistribute your modified MODX, that you keep the source code free!';
$_lang["modx_install"] = 'MODX &raquo; インストール';
$_lang["modx_requires_php"] = ', PHP5.0.0以上を推奨します(4.3.8以上であれば動作しますがセキュリティ面に問題があります)';
$_lang["mysql_5051"] = ' MySQL server version is 5.0.51!';
$_lang["mysql_5051_warning"] = 'MySQL 5.0.51には不具合が確認されています。MySQLのアップデートをおすすめします。';
$_lang["mysql_version_is"] = ' Version ';
$_lang["no"] = 'いいえ';
$_lang["none"] = '全ての選択を解除';
$_lang["not_found"] = '見つかりません';
$_lang["ok"] = '問題なし';
$_lang["optional_items"] = 'インストールオプションの選択';
$_lang["optional_items_note"] = 'オプションを選択してください:<br /><br />初めてMODXを試す人は、全てチェックを入れましょう。<br />※日本チームより：「サンプルサイト」は内容が古く、検証も不十分です。興味がある場合のみ、参考程度にお試しください。';
$_lang["php_security_notice"] = '<legend>セキュリティ警告</legend><p>このサーバ上で稼働しているPHPには重大な問題があります。MODXの稼働自体には問題はありませんが、このバージョンのPHPには報告されている脆弱性がいくつか存在し、MODXに限らずさまざまなPHPアプリを通じて多数の攻撃にさらされてきました。バージョン4.3.8より古いPHPは深刻な脆弱性を抱えています。この機会にPHPのアップデートをおすすめします。</p>';
$_lang["please_correct_error"] = 'があります。';
$_lang["please_correct_errors"] = 'があります。';
$_lang["plugins"] = 'プラグイン';
$_lang["preinstall_validation"] = 'インストール前の状態確認';
$_lang["recommend_setting_change_title"] = 'Recommended Setting Change';
$_lang["recommend_setting_change_validate_referer_confirmation"] = 'Setting change: <em>Validate HTTP_REFERER headers?</em>';
$_lang["recommend_setting_change_validate_referer_description"] = 'Your site is not configured to validate the HTTP_REFERER of incoming requests to the Manager. We strongly recommend enabling this setting to reduce the risk of a CSRF (Cross Site Request Forgery) attack.';
$_lang["remove_install_folder_auto"] = 'インストールディレクトリを自動的に削除する<br />※この操作はサーバ設定によっては実行されないことがあります。<br />削除できなかった場合は、管理画面ログイン時に太文字で警告が表示されますので、手作業で削除してください。';
$_lang["remove_install_folder_manual"] = '管理画面にログインする前に、&quot;<b>install</b>&quot; フォルダを必ず削除してください。';
$_lang["retry"] = '再チェック';
$_lang["running_database_updates"] = '実行中のデータベースのアップデート: ';
$_lang["sample_web_site"] = 'サンプルサイト';
$_lang["sample_web_site_note"] = '<span style="font-style:normal;">※このサンプルサイトは内容が古く検証も不十分なので、現状ではMODXの仕組みの理解にはあまり役立ちません。テスト目的のダミーコンテンツなどとして、必要に応じてお試しください。</span>';
$_lang["session_problem"] = 'サーバー接続に問題が発生しました。問題修正のために、サーバー管理者へ相談してください。';
$_lang["session_problem_try_again"] = '再試行しますか？';
$_lang["setup_cannot_continue"] = '上記理由のため、セットアップを継続できません。';
$_lang["setup_couldnt_install"] = '選択されたテーブルをインストール/変更できませんでした。';
$_lang["setup_database"] = 'セットアップ結果<br />';
$_lang["setup_database_create_connection"] = 'データベース接続: ';
$_lang["setup_database_create_connection_failed"] = 'データベース接続に失敗しました!';
$_lang["setup_database_create_connection_failed_note"] = 'データベースのログイン情報を確認して再試行してください。';
$_lang["setup_database_creating_tables"] = '必要なテーブルの作成: ';
$_lang["setup_database_creation"] = 'Creating database `';
$_lang["setup_database_creation_failed"] = 'データベース作成に失敗しました';
$_lang["setup_database_creation_failed_note"] = ' - データベースを作成できませんでした';
$_lang["setup_database_creation_failed_note2"] = '指定の名前のデータベースが見つからなかったためデータベースの作成を試みましたが、作成できませんでした。ホスティング会社がデータベースの作成を許可していないようです。ホスティング会社の手順に従ってデータベースを作成し、セットアップを再開してください。';
$_lang["setup_database_selection"] = 'データベース選択 `';
$_lang["setup_database_selection_failed"] = 'データベース選択が失敗しました';
$_lang["setup_database_selection_failed_note"] = 'データベースが存在しません。データベースの作成を試行します。';
$_lang["snippets"] = 'スニペット';
$_lang["some_tables_not_updated"] = 'いくつかのテーブルはアップデートされませんでした。修正などに起因しているようです。';
$_lang["status_checking_database"] = '...    データベースとのマッチング: ';
$_lang["status_connecting"] = ' DBホストとの接続テストの結果: ';
$_lang["status_failed"] = '接続できません';
$_lang["status_failed_could_not_create_database"] = 'データベースを作成できません';
$_lang["status_failed_database_collation_does_not_match"] = '問題があります - データベース側の照合順序のデフォルト値が「%s」になっています。phpMyAdminが利用できる場合は、該当データベースの「操作」タブで照合順序のデフォルト値を変更してください。';
$_lang["status_failed_table_prefix_already_in_use"] = '接続できません - このTableプリフィクスはすでに使われています。異なるTableプリフィクスを指定するか、phpMyAdminなどを利用し関連Tableを削除してください。';
$_lang["status_passed"] = '問題ありません';
$_lang["status_passed_database_created"] = 'データベースを作成できます';
$_lang["status_passed_server"] = '接続できます';
$_lang["strict_mode"] = ' MySQLがストリクトモードになっています。';
$_lang["strict_mode_error"] = 'ストリクトモードが無効である必要があります。my.cnfを編集することで、MySQLのモードを変更することができます。あるいは、サーバー管理者へお尋ねください。';
$_lang["summary_setup_check"] = '<strong>インストール実行前の最終チェックです。</strong>';
$_lang["system_configuration"] = 'System Configuration';
$_lang["system_configuration_validate_referer_description"] = 'The <strong>Validate HTTP_REFERER headers</strong> setting is recommended and can protect your site from CSRF attacks, but in some server configurations, can make your manager inaccessible.';
$_lang["table_prefix_already_inuse"] = ' - このテーブルプレフィックスはすでに使われています。';
$_lang["table_prefix_already_inuse_note"] = '異なるテーブルプリフィクスを指定するか、phpMyAdminなどを利用し関連テーブルを削除し、再びインストールを試してみてください。';
$_lang["table_prefix_not_exist"] = ' - 指定されたテーブルプレフィックスがデータベース内に存在していなかったため、インストールが完了しませんでした。正しいテーブルプリフィックスを指定し、再度実行してください。';
$_lang["table_prefix_not_exist_note"] = 'Setup couldn\'t install into the selected database, as it does not contain existing tables with the prefix you specified to be upgraded. Please choose an existing table prefix, and run Setup again.';
$_lang["templates"] = 'テンプレート';
$_lang["to_log_into_content_manager"] = 'To log into the Content Manager ([+MGR_DIR+]/index.php) you can click on the `Close` button.';
$_lang["toggle"] = '選択状態を反転';
$_lang['tvs'] = 'テンプレート変数';
$_lang["unable_install_chunk"] = 'チャンクをインストールできません';
$_lang["unable_install_module"] = 'モジュールをインストールできません';
$_lang["unable_install_plugin"] = 'プラグインをインストールできません';
$_lang["unable_install_snippet"] = 'スニペットをインストールできません';
$_lang["unable_install_template"] = 'テンプレートをインストールできません';
$_lang["upgrade_note"] = '<strong>注意:</strong>管理画面に無事にログインできたら、リソース(旧称・ドキュメント)および各種設定を日本語を含めて編集・保存し、文字化けが起きないかどうかを必ず確認してください。また管理画面内の「イベントログ」を開き、エラーの有無をご確認ください。';
$_lang["upgraded"] = 'アップデートしました';
$_lang["validate_referer_title"] = 'Validate HTTP_REFERER headers?';
$_lang["visit_forum"] = ' <a href="http://forum.modx.jp/" target="_blank">MODX フォーラム</a>';
$_lang["warning"] = '注意 ';
$_lang["welcome_message_start"] = 'インストールの種別を選択してください。';
$_lang["welcome_message_text"] = '心踊る、未知の領域へようこそ。ガイドに従ってインストールを進めましょう。MODXのインストールは簡単。インストーラの説明に従って、次へ次へと進めてください。<br /><br />このインストーラの手順に従うことにより、他のCMSとのデータベースの共有設定(Tableプリフィクス)や、サンプルコンテンツ及び、推奨される拡張機能のインストールを個別に選択できます。何も選択せずシンプルにコアのみをインストールすることもできます。また、すでに運用中のMODXをアップデートしたり、データベースの設定を変更することもできます。';
$_lang["welcome_message_welcome"] = 'MODXのインストールを開始します。';
$_lang["writing_config_file"] = 'config.inc.phpへの書き込み(設定情報): ';
$_lang["yes"] = 'はい';
$_lang["you_running_php"] = ' - You are running on PHP ';
?>