<?php

return [
    'ad'				        => 'Active Directory',
    'ad_domain'				    => 'Active Directory -toimialue',
    'ad_domain_help'			=> 'Tämä on joskus sama kuin sähköpostiosoitteesi loppuosa, mutta ei aina.',
    'ad_append_domain_label'    => 'Lisää toimialueen nimi loppuun',
    'ad_append_domain'          => 'Lisää toimialueen nimi käyttäjänimikentän loppuun',
    'ad_append_domain_help'     => 'Käyttäjätunnusta ei tarvitse kirjoittaa muodossa "käyttätunnus@domain.local", pelkkä "käyttäjätunnus" riittää.',
    'admin_cc_email'            => 'Kopio sähköpostiosoite',
    'admin_cc_email_help'       => 'Mikäli haluat lähettää erilliseen sähköpostiosoitteeseen kopion käyttäjälle lähetettävästä sähköposti-ilmoituksesta palautuksiin/luovutuksiin liittyen, syötä se tähän. Muussa tapauksessa jätä kenttä tyhjäksi.',
    'admin_settings'            => 'Ylläpitäjän Asetukset',
    'is_ad'				        => 'Käytössä on Active Directory -palvelin',
    'alerts'                	=> 'Hälytykset',
    'alert_title'               => 'Päivitä ilmoitusasetukset',
    'alert_email'				=> 'Lähetä ilmoitukset',
    'alert_email_help'    => 'Sähköpostiosoitteet tai jakelulistat, joille haluat hälytysten tulla lähetetyiksi, pilkulla erotettuina',
    'alerts_enabled'			=> 'Sähköposti hälytykset käytössä',
    'alert_interval'			=> 'Kynnys ilmoituksille vanhentuvista (päivinä)',
    'alert_inv_threshold'		=> 'Varaston hälytysraja',
    'allow_user_skin'           => 'Salli käyttäjän määrittämä ulkoasu',
    'allow_user_skin_help_text' => 'Voit valita tässä voivatko käyttäjät määritellä haluamansa ulkoasun käyttöönsä.',
    'asset_ids'					=> 'Laitetunnisteet',
    'audit_interval'            => 'Tarkastusväli',
    'audit_interval_help'       => 'Jos sinun on säännöllisesti tarkastettava laitteesi fyysisesti, syötä käyttämäsi aikaväli kuukausina. Jos päivität tämän arvon, kaikki "Seuraavat tarkastuspäivät" laitteille, joilla on tuleva tarkastuspäivämäärä, päivitetään.',
    'audit_warning_days'        => 'Tarkastuksen ennakkovaroitus',
    'audit_warning_days_help'   => 'Kuinka monta päivää etukäteen varoitamme, kun laitteet on tarkoitus tarkastaa?',
    'auto_increment_assets'		=> 'Luo automaattisesti kasvavat laitetunnisteet',
    'auto_increment_prefix'		=> 'Etuliite (valinnainen)',
    'auto_incrementing_help'    => 'Valitaksesi tämän, ota ensin käyttöön automaattisesti kasvavat laitetunnisteet',
    'backups'					=> 'Varmuuskopiot',
    'backups_help'              => 'Luo, lataa ja palauta varmuuskopiota ',
    'backups_restoring'         => 'Palauta varmuuskopiosta',
    'backups_upload'            => 'Lataa varmuuskopio',
    'backups_path'              => 'Varmuuskopiot ovat tallennettuna palvelimelle polulla <code>:path</code>',
    'backups_restore_warning'   => 'Käytä palautuspainiketta <small><span class="btn btn-xs btn-warning"><i class="text-white fas fa-retweet" aria-hidden="true"></i></span></small> palauttaaksesi aiemman varmuuskopion. (Tämä ei tällä hetkellä toimi S3 tallennustilan tai Dockerin kanssa.)<br><br><strong>Koko :app_name tietokantasi ja kaikki ladatut tiedostot korvataan kokonaan</strong> sillä, mitä on varmuuskopiotiedostossa.  ',
    'backups_logged_out'         => 'Kaikki käyttäjät, mukaan lukien sinut, kirjataan ulos, kun palautus on valmis.',
    'backups_large'             => 'Hyvin suuret varmuuskopiot saattavat aiheuttaa aikakatkaisun palautusyrityksessä, ja ne saattaa täytyä vielä ajaa komentorivin kautta. ',
    'barcode_settings'			=> 'Viivakoodi asetukset',
    'confirm_purge'			    => 'Vahvista puhdistus',
    'confirm_purge_help'		=> 'Kirjoita alla olevaan kenttään teksti "DELETE" puhdistaaksesi poistetut tietueet. Tätä toimintoa ei voi kumota ja se poistaa kaikki "soft-deleted" poistetut kohteet ja käyttäjät. (Varmuuskopioi tiedot ensin, varmuuden vuoksi)',
    'custom_css'				=> 'Mukautettu CSS',
    'custom_css_help'			=> 'Anna haluamasi mukautettu CSS. Älä lisää &lt;style&gt;&lt;/style&gt; tunnisteita.',
    'custom_forgot_pass_url'	=> 'Mukautettu salasanan nollaus URL-osoite',
    'custom_forgot_pass_url_help'	=> 'Tämä korvaa sisäänrakennetun salasanan palautuspalvelun URL-osoitteen. Sen avulla voit ohjata käyttäjät organisaation sisäiseen tai isännöityyn LDAP-salasanan vaihtotoimintoon.',
    'dashboard_message'			=> 'Työpöydän viesti',
    'dashboard_message_help'	=> 'Tämä teksti esiintyy työpöydällä kaikille, joilla on oikeus tarkastella työpöytää.',
    'default_currency'  		=> 'Oletusvaluutta',
    'default_eula_text'			=> 'Yleiset käyttöehdot',
    'default_language'			=> 'Oletuskieli',
    'default_eula_help_text'	=> 'Voit myös liittää mukautettuja käyttöehtoja tiettyihin laitekategorioihin.',
    'acceptance_note'           => 'Add a note for your decision (Optional)',
    'display_asset_name'        => 'Näytä laitteen nimi',
    'display_checkout_date'     => 'Näytä luovutuspäivämäärä listauksessa',
    'display_eol'               => 'Näytä elinaika listauksessa',
    'display_qr'                => 'Näytä neliökoodit',
    'display_alt_barcode'		=> 'Näytä 1D viivakoodi',
    'email_logo'                => 'Sähköpostin logo',
    'barcode_type'				=> '2D viivakoodityyppi',
    'alt_barcode_type'			=> '1D viivakoodityyppi',
    'email_logo_size'       => 'Neliönmuotoiset logot näyttävät sähköpostissa parhailta. ',
    'enabled'                   => 'Käytössä',
    'eula_settings'				=> 'Käyttöehtojen asetukset',
    'eula_markdown'				=> 'Käyttäehdossa voi käyttää<a href="https://help.github.com/articles/github-flavored-markdown/">Github-merkintöjä</a>.',
    'favicon'                   => 'Favicon',
    'favicon_format'            => 'Hyväksytyt tiedostotyypit ovat ico, png ja gif. Muut kuvamuodot eivät välttämättä toimi kaikissa selaimissa.',
    'favicon_size'          => 'Faviconien tulee olla neliömuotoisia, 16x16 pikseliä.',
    'footer_text'               => 'Lisäys alatunnisteen tekstiin ',
    'footer_text_help'          => 'Tämä teksti esiintyy oikeanpuoleisessa alatunnisteessa. Linkkejä voi lisätä käyttämällä <a href="https://help.github.com/articles/github-flavored-markdown/">Github merkintätapaa</a>. Rivinvaihdot, otsikot, kuvat, jne. voivat johtaa epätoivottuihin tuloksiin.',
    'general_settings'			=> 'Yleiset asetukset',
    'general_settings_keywords' => 'yrityksen tuki, allekirjoitus, hyväksyminen, sähköpostimuoto, käyttäjänimi muodossa, kuvia, sivua, pikkukuvat, eula, gravatar, tos, kojelauta, yksityisyys',
    'general_settings_help'     => 'Oletuskäyttöehdot ja muuta',
    'generate_backup'			=> 'Luo varmuuskopio',
    'google_workspaces'         => 'Googlen Työtilat',
    'header_color'              => 'Yläosion logo',
    'info'                      => 'Näiden asetusten avulla voit mukauttaa tiettyjä toimintoja.',
    'label_logo'                => 'Tunnisteen logo',
    'label_logo_size'           => 'Neliönmuotoiset logot näyttävät parhailta - näytetään oikeassa yläkulmassa jokaisen laitetunnisteen kohdalla. ',
    'laravel'                   => 'Laravel-versio',
    'ldap'                      => 'LDAP',
    'ldap_default_group'        => 'Käyttöoikeuksien oletusryhmä',
    'ldap_default_group_info'   => 'Valitse ryhmä uusille synkronoiduille käyttäjille. Muista, että käyttäjä ottaa käyttöön käyttöoikeudet ryhmälle, jolle se on annettu.',
    'no_default_group'          => 'Ei Oletusryhmää',
    'ldap_help'                 => 'Ldap/Active Directory',
    'ldap_client_tls_key'       => 'Ldap Client Tls- Avain',
    'ldap_client_tls_cert'      => 'LDAP Asiakaspuolen TLS varmenne',
    'ldap_enabled'              => 'LDAP käytössä',
    'ldap_integration'          => 'LDAP integraatio',
    'ldap_settings'             => 'LDAP-asetukset',
    'ldap_client_tls_cert_help' => 'Client-Side TLS Certificate and Key for LDAP connection are usually useful only in Google Workspace configurations with "Secure LDAP".',
    'ldap_location'             => 'LDAP Sijainti',
'ldap_location_help'             => 'Ldap Location -kenttää tulee käyttää, jos tukikohdan Bind-nimisessä nimessä ei käytetä <strong>-yksikköä.</strong> Jätä tämä tyhjäksi, jos hakua käytetään.',
    'ldap_login_test_help'      => 'Syötä toimiva LDAP-käyttäjätunnus ja salasana määrittelemästäsi base DN: stä testataksesi LDAP-kirjautumisen toimivuutta. SINUN TULEE TALLENTAA UUDET LDAP ASETUKSET ENSIN.',
    'ldap_login_sync_help'      => 'Tämä testaa vain LDAP-synkronoinnin toimivuutta. Mikäli LDAP autentikointikysely on virheellinen, käyttäjät eivät voi kirjautua sisään. SINUN TULEE TALLENTAA UUDET ASETUKSET ENSIN.',
    'ldap_manager'              => 'LDAP Hallinta',
    'ldap_server'               => 'LDAP Palvelin',
    'ldap_server_help'          => 'This should start with ldap:// (for unencrypted) or ldaps:// (for TLS or SSL)',
    'ldap_server_cert'			=> 'LDAP SSL varmenteen varmennus',
    'ldap_server_cert_ignore'	=> 'Salli virheelliset SSL Varmenteet',
    'ldap_server_cert_help'		=> 'Valitse tämä, jos käytät itse allekirjoitettua SSL-varmennetta ja haluat hyväksyä virheellisen SSL-varmenteen.',
    'ldap_tls'                  => 'Käytä TLS:ää',
    'ldap_tls_help'             => 'Merkitse tämä vain, jos käynnistät STARTTLS: n LDAP-palvelimella. ',
    'ldap_uname'                => 'LDAP-sidonta käyttäjätunnus',
    'ldap_dept'                 => 'LDAP osasto',
    'ldap_phone'                => 'Ldap puhelinnumero',
    'ldap_jobtitle'             => 'LDAP tehtävänimike',
    'ldap_country'              => 'LDAP maa',
    'ldap_pword'                => 'LDAP-sidonta salasana',
    'ldap_basedn'               => 'Kohdehaaran DN',
    'ldap_filter'               => 'LDAP suodatin',
    'ldap_pw_sync'              => 'LDAP salasanan synkronointi',
    'ldap_pw_sync_help'         => 'Poista valinta, jos et halua säilyttää LDAP-salasanoja synkronoituna paikallisiin salasanoihin. Tällöin käyttäjät eivät voi kirjautua sisään, jos LDAP-palvelin ei jostain syystä ole tavoitettavissa.',
    'ldap_username_field'       => 'Käyttäjätunnus kenttä',
    'ldap_lname_field'          => 'Sukunimi',
    'ldap_fname_field'          => 'LDAP etunimi',
    'ldap_auth_filter_query'    => 'LDAP todennuskysely',
    'ldap_version'              => 'LDAP versio',
    'ldap_active_flag'          => 'LDAP-aktiivinen lippu',
    'ldap_activated_flag_help'  => 'Tätä arvoa käytetään määrittämään, voiko synkronoitu käyttäjä kirjautua Snipe-IT:lle. <strong>Se ei vaikuta kykyyn tarkistaa kohteita sisällä tai ulos niistä A, format@@1 , ja pitäisi olla <strong>attribuutin nimi</strong> AD/LDAP, <strong>ei arvo</strong>. <br><br>Jos tämä kenttä on asetettu kentän nimeksi, jota ei ole AD/LDAP:ssäsi, tai arvo AD/LDAP -kentässä on asetettu <code>0</code> tai <code>false</code>, <strong>käyttäjän kirjautuminen poistetaan käytöstä</strong>. Jos AD/LDAP -kentän arvo on määritetty <code>1</code> tai <code>true</code> tai <em>millä tahansa muulla tekstillä</em> tarkoittaa, että käyttäjä voi kirjautua sisään. Kun kenttä on tyhjä AD:ssäsi, kunnioitamme <code>userAccountControl</code> -attribuuttia, joka antaa yleensä keskeytymättömille käyttäjille mahdollisuuden kirjautua sisään.',
    'ldap_emp_num'              => 'LDAP henkilönumero',
    'ldap_email'                => 'LDAP sähköposti',
    'ldap_test'                 => 'Testaa LDAP',
    'ldap_test_sync'            => 'Testaa Ldap Synkronointi',
    'license'                   => 'Ohjelmistolisenssi',
    'load_remote'               => 'Load Remote Avatars',
    'load_remote_help_text'		=> 'Uncheck this box if your install cannot load scripts from the outside internet. This will prevent Snipe-IT from trying load avatars from Gravatar or other outside sources.',
    'login'                     => 'Kirjautumisyritykset',
    'login_attempt'             => 'Kirjautuminen Yritti',
    'login_ip'                  => 'Ip Osoite',
    'login_success'             => 'Onnistui?',
    'login_user_agent'          => 'Käyttäjän Agentti',
    'login_help'                => 'Luettelo yrityksestä kirjautua',
    'login_note'                => 'Kirjautumisviesti',
    'login_note_help'           => 'Voit lisätä muutamia lauseita kirjautumisruudulle, esimerkiksi neuvoaksesi heitä jotka ovat löytäneet kadonneen tai varastetun laitteen. Tässä kentässä voi käyttää <a href="https://help.github.com/articles/github-flavored-markdown/">Github-muotoiluja</a>',
    'login_remote_user_text'    => 'Etäkäyttäjän kirjautumisvaihtoehdot',
    'login_remote_user_enabled_text' => 'Salli kirjautuminen etäkäyttäjäkäyttäjän otsikolla',
    'login_remote_user_enabled_help' => 'Tämä vaihtoehto mahdollistaa autentikoinnin REMOTE_USER otsikolla "Common Gateway Interface (rfc3875)" määrityksen mukaisesti',
    'login_common_disabled_text' => 'Estä muut autentikointimenetelmät',
    'login_common_disabled_help' => 'Tämä vaihtoehto estää muut autentikointimenetelmät. Salli tämä vaihtoehto, jos olet varma REMOTE_USER kirjautumisen toimivuudesta',
    'login_remote_user_custom_logout_url_text' => 'Räätälöity uloskirjautumisen URL',
    'login_remote_user_custom_logout_url_help' => 'Jos URL on syötetty, käyttäjät ohjataan tähän URL-osoitteeseen uloskirjautumisen yhteydessä. Tämä on hyödyllinen esimerkiksi ulkoisen autentikointipalvelun käyttäjäistuntojen päättämisessä oikein.',
    'login_remote_user_header_name_text' => 'Mukautettu käyttäjänimen otsikko',
    'login_remote_user_header_name_help' => 'Käytä määritettyä headeria REMOTE_USERin sijaan',
    'logo'                    	=> 'Logo',
    'logo_print_assets'         => 'Käytä tulostuksessa',
    'logo_print_assets_help'    => 'Käytä brändäystä tulostettavissa nimikelistoissa ',
    'full_multiple_companies_support_help_text' => 'Käyttäjien (myös ylläpitäjien) rajoittaminen vain yritykselle kirjattuihin laitteisiin.',
    'full_multiple_companies_support_text' => 'Täysi monien yritysten tuki',
    'show_in_model_list'   => 'Näytä mallinvalinta-listoissa',
    'optional'					=> 'valinnainen',
    'per_page'                  => 'Tuloksia per sivu',
    'php'                       => 'PHP versio',
    'php_info'                  => 'PHP info',
    'php_overview'              => 'PHP',
    'php_overview_keywords'     => 'phpinfo, järjestelmä, tiedot',
    'php_overview_help'         => 'PHP järjestelmän tiedot',
    'php_gd_info'               => 'Sinun tulee asentaa php-gd paketti näyttääksesi QR-koodit, katso lisätietoja asennusohjeista.',
    'php_gd_warning'            => 'PHP Image Prosessing ja GD-lisäosia EI ole asennettuna.',
    'pwd_secure_complexity'     => 'Salasanan monimutkaisuus',
    'pwd_secure_complexity_help' => 'Valitse mikä tahansa salasanan monimutkaisuus sääntö, jonka haluat panna täytäntöön.',
    'pwd_secure_complexity_disallow_same_pwd_as_user_fields' => 'Salasana ei voi olla sama kuin etunimi, sukunimi, sähköposti tai käyttäjätunnus',
    'pwd_secure_complexity_letters' => 'Vaadi vähintään yksi kirjain',
    'pwd_secure_complexity_numbers' => 'Vaadi vähintään yksi numero',
    'pwd_secure_complexity_symbols' => 'Vaadi vähintään yksi symboli',
    'pwd_secure_complexity_case_diff' => 'Vaadi vähintään yksi iso kirjain ja yksi pieni kirjain',
    'pwd_secure_min'            => 'Salasanan minimimerkit',
    'pwd_secure_min_help'       => 'Pienin sallittu arvo on 8',
    'pwd_secure_uncommon'       => 'Estä yleisimmät salasanat',
    'pwd_secure_uncommon_help'  => 'Tämä estää käyttäjiä käyttämästä yleisimpiä 10 000 salasanaa, jotka on julkaistu tietovuodoissa.',
    'qr_help'                   => 'Ota ensin QR-koodit käyttöön valitaksesi tämän',
    'qr_text'                   => 'QR-koodin teksti',
    'saml'                      => 'SAML',
    'saml_title'                => 'Päivitä SAML-asetukset',
    'saml_help'                 => 'SAML- asetukset',
    'saml_enabled'              => 'SAML käytössä',
    'saml_integration'          => 'SAML Integraatio',
    'saml_sp_entityid'          => 'Entiteetin ID',
    'saml_sp_acs_url'           => 'Vakuutuksen kuluttajapalvelu (ACS) URL',
    'saml_sp_sls_url'           => 'Kertauloskirjautumispalvelu (SLS) URL',
    'saml_sp_x509cert'          => 'Julkinen SSL-varmenne',
    'saml_sp_metadata_url'      => 'Metadata URL',
    'saml_idp_metadata'         => 'SAML IdP Metadata',
    'saml_idp_metadata_help'    => 'Voit määritellä IdP metadatan käyttämällä URLia tai XML-tiedostoa.',
    'saml_attr_mapping_username' => 'Attribuuttien kohdennus - Käyttäjänimi',
    'saml_attr_mapping_username_help' => 'NameID:tä käytetään, jos attribuuttia on määrittelemätön tai virheellinen.',
    'saml_forcelogin_label'     => 'Pakoita SAML kirjautuminen',
    'saml_forcelogin'           => 'Tee SAML:sta ensisijainen kirjautumistapa',
    'saml_forcelogin_help'      => 'Voit käyttää osoitteessa \'/login?nosaml\' päästäksesi tavalliselle kirjautumissivulle.',
    'saml_slo_label'            => 'SAML kertauloskirjautuminen',
    'saml_slo'                  => 'Lähetä uloskirjautumispyyntö IdP:lle uloskirjauduttaessa',
    'saml_slo_help'             => 'Tämä johtaa siihen, että käyttäjä ohjataan aluksi IdP:hen uloskirjautuessa. Jätä valitsematta, jos IdP ei tue SP-aloitettua SAML SLO:ta.',
    'saml_custom_settings'      => 'SAML mukautetut asetukset',
    'saml_custom_settings_help' => 'Voit määrittää lisäasetuksia onelogin/php-saml kirjastoon. Käytä omalla vastuullasi.',
    'saml_download'             => 'Lataa Metatiedot',
    'setting'                   => 'Asetus',
    'settings'                  => 'Asetukset',
    'show_alerts_in_menu'       => 'Näytä ilmoitukset ylävalikossa',
    'show_archived_in_list'     => 'Arkistoidut laitteet',
    'show_archived_in_list_text'     => 'Näytä arkistoidut laitteet "Kaikki laitteet" listauksessa',
    'show_assigned_assets'      => 'Näytä laitteille kohdistetut laitteet',
    'show_assigned_assets_help' => 'Näytä laitteet, jotka on liitetty muihin laitteisiin näkymissä Näytä käyttäjä -> Laitteet, Näytä käyttäjä -> Tiedot-> Tulosta kaikki luovutetut , sekä sivulla Käyttäjätili -> Näytä luovutetut laitteet.',
    'show_images_in_email'     => 'Näytä kuvia sähköposteissa',
    'show_images_in_email_help'   => 'Poista tämä valinta, jos Snipe-IT asennus on toteutettu VPN: n avulla tai suljetussa verkossa, koska sähköposteissa käytetyt kuvat eivät voi latautua näkyviin sähköposteissa.',
    'site_name'                 => 'Sivuston nimi',
    'integrations'               => 'Integraatiot',
    'slack'                     => 'Slack',
    'general_webhook'           => 'Yleinen Webkoukku',
    'ms_teams'                  => 'Microsoft Teams',
    'webhook'                   => ':app',
    'webhook_presave'           => 'Testaa tallennettavaksi',
    'webhook_title'               => 'Päivitä Webkoukun Asetukset',
    'webhook_help'                => 'Integraation asetukset',
    'webhook_botname'             => ':app Botname',
    'webhook_channel'             => ':app Kanava',
    'webhook_endpoint'            => ':app Endpoint',
    'webhook_integration'         => ':app Asetukset',
    'webhook_test'                 =>'Testaa :app integraatiota',
    'webhook_integration_help'    => ':app integraatio on valinnainen, mutta päätepiste ja kanava vaaditaan, jos haluat käyttää sitä. Määrittääksesi :app integraation, sinun täytyy ensin <a href=":webhook_link" target="_new" rel="noopener">luoda saapuva webhook</a> :app tilillesi. Klikkaa <strong>Testaa :app Integration</strong> -painiketta varmistaaksesi, että asetuksesi ovat oikein ennen tallentamista. ',
    'webhook_integration_help_button'    => 'Kun olet tallentanut :app tietosi, ilmestyy testipainike.',
    'webhook_test_help'           => 'Testaa, onko sovelluksen :app integraatio määritetty oikein. SINUN TULEE TALLENTAA PÄIVÄNÄ :app ASETTINGS FIRST.',
    'snipe_version'  			=> 'Snipe-IT versio',
    'support_footer'            => 'Tuki-alatunnisteen linkit ',
    'support_footer_help'       => 'Määrittele, kuka voi nähdä linkit Snipe-IT tukipalvelun tietoihin ja käyttöohjeeseen',
    'version_footer'            => 'Versio alatunnisteessa ',
    'version_footer_help'       => 'Määrittele, kuka näkee Snipe-IT järjestelmän version ja käännöksen numeron.',
    'system'                    => 'Järjestelmän tiedot',
    'update'                    => 'Päivitä asetukset',
    'value'                     => 'Arvo',
    'brand'                     => 'Brändäys',
    'brand_keywords'            => 'footer, logo, tulostus, teema, iho, otsikko, värit, css',
    'brand_help'                => 'Logo, Sivuston Nimi',
    'web_brand'                 => 'Web-brändäyksen tyyppi',
    'about_settings_title'      => 'Tietoa asetuksista',
    'about_settings_text'       => 'Näiden asetusten avulla voit mukauttaa tiettyjä toimintoja.',
    'labels_per_page'           => 'Tunnisteita sivua kohden',
    'label_dimensions'          => 'Tunnisteen mitat (tuumaa)',
    'next_auto_tag_base'        => 'Seuraava tunnistenumero',
    'page_padding'              => 'Sivun marginaalit (tuumaa)',
    'privacy_policy_link'       => 'Linkki tietosuojaselosteeseen',
    'privacy_policy'            => 'Tietosuojaseloste',
    'privacy_policy_link_help'  => 'Jos osoite on määritelty, GDPR-vaatimusten mukaisesti kaikkien sähköpostien alatunnisteisiin lisätään linkki tietosuojaselosteeseen. ',
    'purge'                     => 'Puhdista poistetut tietueet',
    'purge_deleted'             => 'Tyhjennä Poistettu ',
    'labels_display_bgutter'    => 'Tunnisteen alamarginaali',
    'labels_display_sgutter'    => 'Tunnisteen sivumarginaali',
    'labels_fontsize'           => 'Tunnisteen fontin koko',
    'labels_pagewidth'          => 'Tunniste-arkin leveys',
    'labels_pageheight'         => 'Tunniste-arkin korkeus',
    'label_gutters'        => 'Tunnisteiden etäisyys (tuumaa)',
    'page_dimensions'        => 'Sivun mitat (tuumaa)',
    'label_fields'          => 'Tunnisteen kentät',
    'inches'        => 'tuumaa',
    'width_w'        => 'l',
    'height_h'        => 'k',
    'show_url_in_emails'                => 'Linkki Snipe-IT: hen sähköposteissa',
    'show_url_in_emails_help_text'      => 'Poista tämä valintaruutu, jos et halua linkata takaisin Snipe-IT-asennukseen sähköpostin alatunnisteisiin. Hyödyllinen, jos useimmat käyttäjät eivät koskaan kirjaudu sisään.',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => 'Pikkukuvan suurin korkeus',
    'thumbnail_max_h_help'   => 'Enimmäiskorkeus kuvapisteissä pikkukuville listanäkymässä. Min 25, max 500.',
    'two_factor'        => 'Kaksivaiheinen todentaminen',
    'two_factor_secret'        => 'MFA koodi',
    'two_factor_enrollment'        => 'Kaksivaiheisen tunnistautumisen käyttöönotto',
    'two_factor_enabled_text'        => 'Ota käyttöön kaksivaiheinen tunnistautuminen',
    'two_factor_reset'        => 'Nollaa MFA salaisuus',
    'two_factor_reset_help'        => 'Tämä pakottaa käyttäjän rekisteröimään laitteensa uudelleen niiden todennussovelluksella. Tämä voi olla hyödyllistä, jos heidän tällä hetkellä ilmoittautunut laite katoaa tai varastetaan. ',
    'two_factor_reset_success'          => 'MFA laite onnistuneesti nollattu',
    'two_factor_reset_error'          => 'MFA laitteen nollaus epäonnistui',
    'two_factor_enabled_warning'        => 'Kaksivaiheisen tunnistautumisen ottaminen käyttöön,, pakottaa sinut autentikoimaan Google Auth - laitteella. Voit lisätä sellaisen, jos sellaista ei ole vielä käytössä.',
    'two_factor_enabled_help'        => 'Ottaa käyttöön kaksivaiheisen todennuksen käyttämällä Google Authenticatoria.',
    'two_factor_optional'        => 'Valikoiva (Käyttäjät voivat ottaa käyttöön tai poistaa käytöstä)',
    'two_factor_required'        => 'Vaadittu kaikille käyttäjille',
    'two_factor_disabled'        => 'Ei käytössä',
    'two_factor_enter_code'	=> 'Syötä MFA koodi',
    'two_factor_config_complete'	=> 'Lähetä koodi',
    'two_factor_enabled_edit_not_allowed' => 'Järjestelmänvalvoja ei salli sinun muokata tätä asetusta.',
    'two_factor_enrollment_text'	=> "Kaksivaiheinen tunnistautuminen vaaditaan, mutta et ole rekisteröinyt itsellesi laitetta. Avaa Google Authenticator -sovellus ja skannaa alla oleva QR-koodi rekisteröidäksesi laitteesi. Kun olet rekisteröinyt laitteesi, kirjoita koodi",
    'require_accept_signature'      => 'Vaadi allekirjoitus',
    'require_accept_signature_help_text'      => 'Tämän ominaisuuden ottaminen käyttöön edellyttää käyttäjiltä allekirjoitusta hyväksymisen yhteydessä.',
    'left'        => 'vasen',
    'right'        => 'oikea',
    'top'        => 'ylä',
    'bottom'        => 'ala',
    'vertical'        => 'pystysuora',
    'horizontal'        => 'vaakasuora',
    'unique_serial'                => 'Yksilölliset sarjanumerot',
    'unique_serial_help_text'                => 'Vaadi laitteilta yksilölliset sarjanumerot',
    'zerofill_count'        => 'Laitetunnisteen pituus, mukaan lukien nollat',
    'username_format_help'   => 'Käytetään tietoja tuodessa, jos käyttäjänimeä ei ole annettu ja nimitietojen perusteella on luotava käyttäjälle käyttäjätunnus.',
    'oauth_title' => 'OAuth API Asetukset',
    'oauth_clients' => 'OAuth Clients',
    'oauth' => 'OAuth',
    'oauth_help' => 'Oauth Päätepisteen Asetukset',
    'oauth_no_clients' => 'You have not created any OAuth clients yet.',
    'oauth_secret' => 'Secret',
    'oauth_authorized_apps' => 'Authorized Applications',
    'oauth_redirect_url' => 'Redirect URL',
    'oauth_name_help' => ' Something your users will recognize and trust.',
    'oauth_scopes' => 'Scopes',
    'oauth_callback_url' => 'Your application authorization callback URL.',
    'create_client' => 'Create Client',
    'no_scopes' => 'No scopes',
    'asset_tag_title' => 'Päivitä Laitetunnisteen Asetukset',
    'barcode_title' => 'Päivitä Viivakoodin Asetukset',
    'barcodes' => 'Barcodes',
    'barcodes_help_overview' => 'Viivakoodi &amp; QR asetukset',
    'barcodes_help' => 'Tämä yrittää poistaa välimuistissa olevat viivakoodit. Tätä käytetään yleensä vain, jos viivakoodisi asetukset ovat muuttuneet, tai jos Snipe-IT URL on muuttunut. Viivakoodit luodaan uudelleen, kun niitä käytetään seuraavaksi.',
    'barcodes_spinner' => 'Yritä poistaa tiedostoja...',
    'barcode_delete_cache' => 'Poista Viivakoodin Välimuisti',
    'branding_title' => 'Päivitä Tuotemerkkien Asetukset',
    'general_title' => 'Päivitä Yleiset Asetukset',
    'mail_test' => 'Lähetä Testi',
    'mail_test_help' => 'Tämä yrittää lähettää testiviestin osoitteeseen :replyto.',
    'filter_by_keyword' => 'Suodata asettamalla avainsana',
    'security' => 'Turvallisuus',
    'security_title' => 'Päivitä Turvallisuusasetukset',
    'security_keywords' => 'salasana, salasanat, vaatimukset, kaksi tekijää, kaksiosainen tekijä, yhteiset salasanat, etäkirjautuminen, kirjaudu, todennus',
    'security_help' => 'Kaksikerroin, Salasanan Rajoitukset',
    'groups_keywords' => 'käyttöoikeudet, käyttöoikeusryhmät, valtuutus',
    'groups_help' => 'Tilin käyttöoikeusryhmät',
    'localization' => 'Lokalisointi',
    'localization_title' => 'Päivitä Lokalisoinnin Asetukset',
    'localization_keywords' => 'lokalisointi, valuutta, paikallinen, paikallinen, paikallinen, aikavyöhyke, kansainväliset, internatinalization, kieli, kielet, käännös',
    'localization_help' => 'Kieli, päivämäärän näyttö',
    'notifications' => 'Ilmoitukset',
    'notifications_help' => 'Sähköpostihälytykset Ja Tarkastusasetukset',
    'asset_tags_help' => 'Korotukset ja etuliitteet',
    'labels' => 'Tunnisteet',
    'labels_title' => 'Päivitä Tunnisteasetukset',
    'labels_help' => 'Tunnistekoot &amp; asetukset',
    'purge_keywords' => 'poista pysyvästi',
    'purge_help' => 'Puhdista poistetut tietueet',
    'ldap_extension_warning' => 'Se ei näytä LDAP laajennus on asennettu tai otettu käyttöön tällä palvelimella. Voit silti tallentaa asetuksesi, mutta sinun täytyy ottaa käyttöön LDAP laajennus PHP ennen LDAP synkronointia tai kirjautuminen toimii.',
    'ldap_ad' => 'LDAP/AD',
    'employee_number' => 'Työntekijän Numero',
    'create_admin_user' => 'Luo käyttäjä ::',
    'create_admin_success' => 'Onnistui! Ylläpitäjäsi on lisätty!',
    'create_admin_redirect' => 'Klikkaa tästä mennäksesi sovelluksesi kirjautumiseen!',
    'setup_migrations' => 'Tietokannan Siirrot ::',
    'setup_no_migrations' => 'Ei ollut mitään siirrettävää. Tietokantataulut on jo määritetty!',
    'setup_successful_migrations' => 'Tietokantataulusi on luotu',
    'setup_migration_output' => 'Siirron tuloste:',
    'setup_migration_create_user' => 'Seuraavaksi: Luo Käyttäjä',
    'ldap_settings_link' => 'Ldap Asetukset Sivu',
    'slack_test' => 'Testaa <i class="fab fa-slack"></i> Integraatio',
    'label2_enable'           => 'Uusi Tunniste Moottori',
    'label2_enable_help'      => 'Vaihda uuteen tarramoottoriin. <b>Huomautus: Sinun täytyy tallentaa tämä asetus ennen kuin asetat muita.</b>',
    'label2_template'         => 'Malli',
    'label2_template_help'    => 'Valitse, mitä sivupohjaa käytetään tunnisteen luomiseen',
    'label2_title'            => 'Otsikko',
    'label2_title_help'       => 'Otsikko näyttää tarroissa, jotka tukevat sitä',
    'label2_title_help_phold' => 'The placeholder <code>{COMPANY}</code> will be replaced with the asset&apos;s company name',
    'label2_asset_logo'       => 'Käytä Sisältölogoa',
    'label2_asset_logo_help'  => 'Use the logo of the asset&apos;s assigned company, rather than the value at <code>:setting_name</code>',
    'label2_1d_type'          => '1D Viivakoodin Tyyppi',
    'label2_1d_type_help'     => 'Muoto 1D-viivakoodeja varten',
    'label2_2d_type'          => '2D viivakoodityyppi',
    'label2_2d_type_help'     => 'Muoto 2D-viivakoodeja varten',
    'label2_2d_target'        => '2d-Viivakoodin Kohde',
    'label2_2d_target_help'   => 'URL-osoite, joka on 2D viivakoodipisteitä, kun skannattu',
    'label2_fields'           => 'Kentän Määritelmät',
    'label2_fields_help'      => 'Kentät voidaan lisätä, poistaa ja järjestää uudelleen vasemmassa sarakkeessa. Kussakin kentässä voidaan lisätä, poistaa ja järjestää uudelleen oikeaan sarakkeeseen useita vaihtoehtoja.',
    'help_asterisk_bold'    => 'Teksti, joka syötetään muodossa <code>**text**</code> näytetään lihavoituina',
    'help_blank_to_use'     => 'Jätä tyhjäksi käyttääksesi arvoa <code>:setting_name</code>',
    'help_default_will_use' => '<code>:default</code> will use the value from <code>:setting_name</code>. <br>Note that the value of the barcodes must comply with the respective barcode spec in order to be successfully generated. Please see <a href="https://snipe-it.readme.io/docs/barcodes">the documentation <i class="fa fa-external-link"></i></a> for more details. ',
    'default'               => 'Oletus',
    'none'                  => 'Ei Mitään',
    'google_callback_help' => 'Tämä tulisi syöttää takaisinsoittoosoitteeksi Google OAuth -sovellusasetuksissa organisaatiosi&apos;s <strong><a href="https://console.cloud.google.com/" target="_blank">Googlen kehittäjäkonsoli <i class="fa fa-external-link" aria-hidden="true"></i></a></strong>.',
    'google_login'      => 'Google Workspace -kirjautumisasetukset',
    'enable_google_login'  => 'Salli käyttäjien kirjautuminen Google Workspacen avulla',
    'enable_google_login_help'  => 'Käyttäjiä ei toimiteta automaattisesti. Heillä on oltava olemassa oleva tili täällä JA Google Workspacessa, ja heidän käyttäjänimensä on täsmäävä heidän Google Workspace -sähköpostiosoitteeseensa. ',
    'mail_reply_to' => 'Sähköpostin Vastausosoite',
    'mail_from' => 'Sähköposti Osoitteesta',
    'database_driver' => 'Tietokannan Ajuri',
    'bs_table_storage' => 'Taulukko Tallennustila',
    'timezone' => 'Timezone',
    'profile_edit'          => 'Edit Profile',
    'profile_edit_help'          => 'Allow users to edit their own profiles.',
    'default_avatar' => 'Upload default avatar',

];
