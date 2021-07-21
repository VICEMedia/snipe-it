<?php

return array(
    'ad'				        => 'Active Directory',
    'ad_domain'				    => 'Active Directory domene',
    'ad_domain_help'			=> 'Dette er noen ganger det samme som e-post domene, men ikke alltid.',
    'ad_append_domain_label'    => 'Append domain name',
    'ad_append_domain'          => 'Append domain name to username field',
    'ad_append_domain_help'     => 'User isn\'t required to write "username@domain.local", they can just type "username".' ,
    'admin_cc_email'            => 'CC e-post',
    'admin_cc_email_help'       => 'Hvis du vil sende en kopi av innsjekk-/utsjekkeposter som sendes til brukere til en ekstra epostadresse, skriv den inn her. La ellers feltet stå tomt.',
    'is_ad'				        => 'Dette er en Active Directory server',
    'alert_email'				=> 'Send varslinger til',
    'alerts_enabled'			=> 'Varslinger aktivert',
    'alert_interval'			=> 'Terskel for utløpende varslinger (dager)',
    'alert_inv_threshold'		=> 'Terskel for eiendelsvarslinger',
    'allow_user_skin'           => 'Allow user skin',
    'allow_user_skin_help_text' => 'Checking this box will allow a user to override the UI skin with a different one.' ,
    'asset_ids'					=> 'Eiendels-IDer',
    'audit_interval'            => 'Audit intervall',
    'audit_interval_help'       => 'Hvis du regelmessig må fysisk overvåke dine eiendeler, angi intervallet i måneder.',
    'audit_warning_days'        => 'Audit terskelverdi for advarsel',
    'audit_warning_days_help'   => 'Hvor mange dager i forveien bør vi advare deg når eiendeler forfaller for overvåking?',
    'auto_increment_assets'		=> 'Generer automatisk økende eiendels-IDer',
    'auto_increment_prefix'		=> 'Prefiks (valgfritt)',
    'auto_incrementing_help'    => 'Aktiver først automatisk øking av eiendels-IDer for å velge dette alternativet',
    'backups'					=> 'Sikkerhetskopier',
    'barcode_settings'			=> 'Strekkodeinnstillinger',
    'confirm_purge'			    => 'Bekreft rensking',
    'confirm_purge_help'		=> 'Enter the text "DELETE" in the box below to purge your deleted records. This action cannot be undone and will PERMANENTLY delete all soft-deleted items and users. (You should make a backup first, just to be safe.)',
    'custom_css'				=> 'Egendefinert CSS',
    'custom_css_help'			=> 'Legg til egendefinert CSS. Ikke ta med taggene &lt;style&gt;&lt;/style&gt;.',
    'custom_forgot_pass_url'	=> 'Egendefinert passord tilbakestillings-URL',
    'custom_forgot_pass_url_help'	=> 'Erstatter den innebygde glemt passord-URLen i innloggingsbildet. Nyttig for å sende brukere til intern eller leid LDAP passordgjenopprettingsfunksjonalitet. Vil deaktivere den lokale glemt passord-funksjonaliteten.',
    'dashboard_message'			=> 'Dashboardmelding',
    'dashboard_message_help'	=> 'Denne teksten vises på dashbordet for alle som har tillatelse til å vise oversikten.',
    'default_currency'  		=> 'Standardvaluta',
    'default_eula_text'			=> 'Standard EULA',
    'default_language'			=> 'Standardspråk',
    'default_eula_help_text'	=> 'Du kan også knytte tilpassede EULAer til bestemte eiendelskategorier.',
    'display_asset_name'        => 'Vis eiendelsnavn',
    'display_checkout_date'     => 'Vis utsjekksdato',
    'display_eol'               => 'Vis levetid i tabellvisning',
    'display_qr'                => 'Vis Qr-kode',
    'display_alt_barcode'		=> 'Vis 1D strekkode',
    'email_logo'                => 'Email Logo',
    'barcode_type'				=> '2D strekkodetype',
    'alt_barcode_type'			=> '1D strekkodetype',
    'email_logo_size'       => 'Square logos in email look best. ',
    'eula_settings'				=> 'EULA-innstillinger',
    'eula_markdown'				=> 'Denne EULAen tillater <a href="https://help.github.com/articles/github-flavored-markdown/">Github Flavored markdown</a>.',
    'favicon'                   => 'Favicon',
    'favicon_format'            => 'Accepted filetypes are ico, png, and gif. Other image formats may not work in all browsers.',
    'favicon_size'          => 'Favicons should be square images, 16x16 pixels.',
    'footer_text'               => 'Ekstra bunnteksttekst ',
    'footer_text_help'          => 'Denne teksten vil fremstå i høyre del av bunnteksten. Lenker er tillatt ved å bruke <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>.
Linjeskift, topptekst, bilder, osv. kan føre til uventede resultater.',
    'general_settings'			=> 'Generelle innstillinger',
    'generate_backup'			=> 'Generer Sikkerhetskopi',
    'header_color'              => 'Overskriftsfarge',
    'info'                      => 'Disse innstillingene lar deg tilpasse enkelte aspekter av installasjonen din.',
    'label_logo'                => 'Label Logo',
    'label_logo_size'           => 'Square logos look best - will be displayed in the top right of each asset label. ',
    'laravel'                   => 'Laravel-versjon',
    'ldap_enabled'              => 'LDAP aktivert',
    'ldap_integration'          => 'LDAP Integrering',
    'ldap_settings'             => 'LDAP Instillinger',
    'ldap_login_test_help'      => 'Skriv inn et gyldig LDAP brukernavn og passord fra samme base DN som du anga ovenfor for å teste at LDAP-innlogging er riktig konfigurert. DU MÅ LAGRE DINE OPPDATERTE LDAP-INNSTILLINGER FØRST.',
    'ldap_login_sync_help'      => 'Tester at LDAP kan synkronisere. Feil i LDAP autentiseringsspørringen din kan før til at brukere ikke kan logge inn. DU MÅ LAGRE DINE OPPDATERTE LDAP-INNSTILLINGER FØRST.',
    'ldap_server'               => 'LDAP Server',
    'ldap_server_help'          => 'Dette bør starte med ldap:// (for ukryptert eller TLS) eller ldaps:// (for SSL)',
    'ldap_server_cert'			=> 'Validering av LDAP SSL sertifikat',
    'ldap_server_cert_ignore'	=> 'Godta ugyldig SSL sertifikat',
    'ldap_server_cert_help'		=> 'Kryss av denne boksen hvis du bruker et selv-signert SSL sertifikat og vil akkseptere et ugyldig sertifikat.',
    'ldap_tls'                  => 'Bruk TLS',
    'ldap_tls_help'             => 'Kryss av denne hvis du kjører STARTTLS på LDAP-serveren. ',
    'ldap_uname'                => 'LDAP Bundet brukernavn',
    'ldap_dept'                 => 'LDAP Department',
    'ldap_phone'                => 'LDAP Telephone Number',
    'ldap_jobtitle'             => 'LDAP Job Title',
    'ldap_country'              => 'LDAP Country',
    'ldap_pword'                => 'LDAP Bind passord',
    'ldap_basedn'               => 'Base Bind DN',
    'ldap_filter'               => 'LDAP Filter',
    'ldap_pw_sync'              => 'LDAP-passord Sync',
    'ldap_pw_sync_help'         => 'Ta bort kryss på denne boksen hvis du ikke vil at LDAP passord skal holdes synkronisert med lokale passord. Ved å skru av dette er det mulig at brukerne ikke vil klare å logge på om de ikke får tak i LDAP serveren.',
    'ldap_username_field'       => 'Brukernavn Felt',
    'ldap_lname_field'          => 'Etternavn',
    'ldap_fname_field'          => 'LDAP Fornavn',
    'ldap_auth_filter_query'    => 'LDAP autentisering spørring',
    'ldap_version'              => 'LDAP Versjon',
    'ldap_active_flag'          => 'LDAP aktive flag',
    'ldap_activated_flag_help'  => 'This flag is used to determine whether a user can login to Snipe-IT and does not affect the ability to check items in or out to them.',
    'ldap_emp_num'              => 'LDAP ansattnummer',
    'ldap_email'                => 'LDAP E-post',
    'license'                  => 'Programvarelisens',
    'load_remote_text'          => 'Eksterne Skript',
    'load_remote_help_text'		=> 'Denne Snipe-IT-installasjonen kan laste skript fra Internett.',
    'login_note'                => 'Logg inn melding',
    'login_note_help'           => 'Eventuelt inkludere et par setninger på logg inn skjermen, for eksempel for å hjelpe mennesker som har funnet en mistet eller stjålet enhet. Dette feltet godtar <a href="https://help.github.com/articles/github-flavored-markdown/"> Github flavored markdown</a>',
    'login_remote_user_text'    => 'Fjernbruker pålogging valg',
    'login_remote_user_enabled_text' => 'Aktiver innlogging med Remote User Header',
    'login_remote_user_enabled_help' => 'Aktiverer autentisering via REMOTE_USER headeren som beskrevet i "Common Gateway Interface (rfc3875)"',
    'login_common_disabled_text' => 'Deaktiver andre godkjenningsmekanismer',
    'login_common_disabled_help' => 'Deaktiverer andre autentiseringsmekanismer. Aktiver dette valget kun hvis du er sikker på at din REMOTE_USER innlogging allerede fungerer',
    'login_remote_user_custom_logout_url_text' => 'Tilpasset utloggingsadresse',
    'login_remote_user_custom_logout_url_help' => 'Hvis en URL angis her blir brukerne videresendt til denne URLen etter utlogging fra Snipe-IT. Dette er nyttig for korrekt lukking av autentiseringssesjoner hos din autentiseringsleverandør.',
    'login_remote_user_header_name_text' => 'Custom user name header',
    'login_remote_user_header_name_help' => 'Use the specified header instead of REMOTE_USER',
    'logo'                    	=> 'Logo',
    'logo_print_assets'         => 'Bruk i Print',
    'logo_print_assets_help'    => 'Bruk branding på utskrivbare eiendelslister ',
    'full_multiple_companies_support_help_text' => 'Vis kun eiendeler til bedriften brukere (inkl administratorer) er knyttet til.',
    'full_multiple_companies_support_text' => 'Full støtte for flere bedrifter',
    'show_in_model_list'   => 'Vis i Model nedtrekksmeny',
    'optional'					=> 'valgfri',
    'per_page'                  => 'Resultater pr side',
    'php'                       => 'PHP-versjon',
    'php_gd_info'               => 'Du må installere php-gd for å vise QR-koder. Se installasjonsinstruksjoner.',
    'php_gd_warning'            => 'PHP bildebehandling og GD-plugin er IKKE installert.',
    'pwd_secure_complexity'     => 'Passordkompleksitet',
    'pwd_secure_complexity_help' => 'Velg hvilken passord kompleksitet du ønsker å håndheve.',
    'pwd_secure_min'            => 'Passord minimum antall tegn',
    'pwd_secure_min_help'       => 'Minimum permitted value is 8',
    'pwd_secure_uncommon'       => 'Forhindre vanlige passord',
    'pwd_secure_uncommon_help'  => 'Dette vil forhindre brukere fra å bruke vanlige passord fra de vanligste 10 000 passord som er rapportert.',
    'qr_help'                   => 'Aktiver QR-koder først for å velge denne',
    'qr_text'                   => 'Tekst QR-kode',
    'saml_enabled'              => 'SAML enabled',
    'saml_integration'          => 'SAML Integration',
    'saml_sp_entityid'          => 'Entity ID',
    'saml_sp_acs_url'           => 'Assertion Consumer Service (ACS) URL',
    'saml_sp_sls_url'           => 'Single Logout Service (SLS) URL',
    'saml_sp_x509cert'          => 'Public Certificate',
    'saml_sp_metadata_url'      => 'Metadata URL',
    'saml_idp_metadata'         => 'SAML IdP Metadata',
    'saml_idp_metadata_help'    => 'You can specify the IdP metadata using a URL or XML file.',
    'saml_attr_mapping_username' => 'Attribute Mapping - Username',
    'saml_attr_mapping_username_help' => 'NameID will be used if attribute mapping is unspecified or invalid.',
    'saml_forcelogin_label'     => 'SAML Force Login',
    'saml_forcelogin'           => 'Make SAML the primary login',
    'saml_forcelogin_help'      => 'You can use \'/login?nosaml\' to get to the normal login page.',
    'saml_slo_label'            => 'SAML Single Log Out',
    'saml_slo'                  => 'Send a LogoutRequest to IdP on Logout',
    'saml_slo_help'             => 'This will cause the user to be first redirected to the IdP on logout. Leave unchecked if the IdP doesn\'t correctly support SP-initiated SAML SLO.',
    'saml_custom_settings'      => 'SAML Custom Settings',
    'saml_custom_settings_help' => 'You can specify additional settings to the onelogin/php-saml library. Use at your own risk.',
    'setting'                   => 'Innstilling',
    'settings'                  => 'Innstillinger',
    'show_alerts_in_menu'       => 'Vis varsler i toppmenyen',
    'show_archived_in_list'     => 'Arkiverte eiendeler',
    'show_archived_in_list_text'     => 'Vis arkiverte eiendeler i "alle eiendeler" utlisting',
    'show_assigned_assets'      => 'Show assets assigned to assets',
    'show_assigned_assets_help' => 'Display assets which were assigned to the other assets in View User -> Assets, View User -> Info -> Print All Assigned and in Account -> View Assigned Assets.',
    'show_images_in_email'     => 'Vis bilder i e-post',
    'show_images_in_email_help'   => 'Uncheck this box if your Snipe-IT installation is behind a VPN or closed network and users outside the network will not be able to load images served from this installation in their emails.',
    'site_name'                 => 'Nettstedsnavn',
    'slack_botname'             => 'Slack botnavn',
    'slack_channel'             => 'Slack-kanal',
    'slack_endpoint'            => 'Slack endepunkt',
    'slack_integration'         => 'Slack-innstillinger',
    'slack_integration_help'    => 'Slack integration is optional, however the endpoint and channel are required if you wish to use it. To configure Slack integration, you must first <a href=":slack_link" target="_new" rel="noopener">create an incoming webhook</a> on your Slack account. Click on the <strong>Test Slack Integration</strong> button to confirm your settings are correct before saving. ',
    'slack_integration_help_button'    => 'Du vil se en testknapp etter at du lagrer Slack-informasjonen.',
    'slack_test_help'           => 'Test om Slack-integrasjonen din er riktig konfigurert. DU MÅ LAGRE DINE OPPDATERTE SLACK-INNSTILLINGER FØRST.',
    'snipe_version'  			=> 'Snipe-IT-versjon',
    'support_footer'            => 'Støtte Footer Lenker ',
    'support_footer_help'       => 'Angi hvem som kan se lenker til Snipe-IT supportinformasjon og brukermanual',
    'version_footer'            => 'Versjon i Footer ',
    'version_footer_help'       => 'Angi hvem som kan se Snipe-IT versjon og build-nummer.',
    'system'                    => 'Systeminformasjon',
    'update'                    => 'Oppdater innstillinger',
    'value'                     => 'Verdi',
    'brand'                     => 'Merkevare',
    'web_brand'                 => 'Web Branding Type',
    'about_settings_title'      => 'Om Innstillinger',
    'about_settings_text'       => 'Disse innstillingene lar deg tilpasse enkelte aspekter av installasjonen din.',
    'labels_per_page'           => 'Etiketter per side',
    'label_dimensions'          => 'Etikettstørrelsen (inches)',
    'next_auto_tag_base'        => 'Neste automatiske økning',
    'page_padding'              => 'Side marger (inches)',
    'privacy_policy_link'       => 'Link til personvernregler',
    'privacy_policy'            => 'Personvernerklæring',
    'privacy_policy_link_help'  => 'Angi en URL i dette feltet for å inkludere en lenke til personvern-policy i applikasjonsbunntekst og i alle eposter som dette systemet sender ut. Støtter GDPR. ',
    'purge'                     => 'Tømme slettede poster',
    'labels_display_bgutter'    => 'Etikett bunnmarg',
    'labels_display_sgutter'    => 'Etikett sidemarg',
    'labels_fontsize'           => 'Label skriftstørrelse',
    'labels_pagewidth'          => 'Etikett arkbredde',
    'labels_pageheight'         => 'Etikett arkhøyde',
    'label_gutters'        => 'Etikett tegnavstand (tommer)',
    'page_dimensions'        => 'Sidedimensjon (tommer)',
    'label_fields'          => 'Etikett synlige felter',
    'inches'        => 'tommer',
    'width_w'        => 'b',
    'height_h'        => 'h',
    'show_url_in_emails'                => 'Link til Snipe-IT i e-post',
    'show_url_in_emails_help_text'      => 'Fjern markeringen i denne boksen hvis du ikke vil koble tilbake til Snipe-IT-installasjonen i e-postboksene dine. Nyttig hvis de fleste av brukerne aldri logger inn.',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => 'Maks miniatyrbilde høyde',
    'thumbnail_max_h_help'   => 'Maksimal høyde i piksler som miniatyrbilder kan vise i visningen liste. Min 25, maks 500.',
    'two_factor'        => 'To-faktor autentisering',
    'two_factor_secret'        => 'To-faktor kode',
    'two_factor_enrollment'        => 'To-faktor registrering',
    'two_factor_enabled_text'        => 'Aktiver to-faktor autentisering',
    'two_factor_reset'        => 'Tilbakestill to-faktor hemmelighet',
    'two_factor_reset_help'        => 'Tving brukeren til å legge til enheten på nytt i Google Authenticator. Dette er nyttig hvis brukerens enhet er mistet eller stjålet. ',
    'two_factor_reset_success'          => 'To-faktor enhet resatt',
    'two_factor_reset_error'          => 'Reset av to-faktor enhet feilet',
    'two_factor_enabled_warning'        => 'Aktivering av to-faktor autentisering hvis ikke allerede aktivert vil øyeblikkelig tvinge deg til å autentisere med enhet som er aktivert i Google Authenticator. Du vil ha mulighet til å aktivere enheten din hvis ingen er aktivert fra før.',
    'two_factor_enabled_help'        => 'Dette vil slå på to-faktor autentisering med Google Authenticator.',
    'two_factor_optional'        => 'Selektiv (brukere kan aktivere eller deaktivere hvis tillatt)',
    'two_factor_required'        => 'Påkrevd for alle brukere',
    'two_factor_disabled'        => 'Deaktivert',
    'two_factor_enter_code'	=> 'Skriv inn to-faktor kode',
    'two_factor_config_complete'	=> 'Send kode',
    'two_factor_enabled_edit_not_allowed' => 'Systemansvarlig tillater ikke at du redigerer denne innstillingen.',
    'two_factor_enrollment_text'	=> "To-faktor autentisering er påkrevd, men enheten din har ikke blitt aktivert for dette enda. Åpne Google Authenticator-appen og scan inn QR-koden nedenfor for å aktivere. Når du har aktivert enheten din, skriv inn koden nedenfor",
    'require_accept_signature'      => 'Kreve signatur',
    'require_accept_signature_help_text'      => 'Aktivering av denne funksjonen ville forlange brukernes å fysisk logge ut for å akseptere en eiendel.',
    'left'        => 'venstre',
    'right'        => 'høyre',
    'top'        => 'topp',
    'bottom'        => 'bunn',
    'vertical'        => 'vertikal',
    'horizontal'        => 'horisontal',
    'unique_serial'                => 'Unike serienumre',
    'unique_serial_help_text'                => 'Håndhever at  eiendelsserienumre er unike',
    'zerofill_count'        => 'Lengden på ID-merker, inkludert zerofill',
    'username_format_help'   => 'This setting will only be used by the import process if a username is not provided and we have to generate a username for you.',
);
