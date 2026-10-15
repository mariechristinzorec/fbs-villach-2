<?php
/**
 * Bearbeitbare Startinhalte als Blöcke.
 *
 * @package FBS_Villach_2
 */

defined( 'ABSPATH' ) || exit;

/**
 * Block-Vorlagen der Seiten. Platzhalter {{...}} werden beim Anlegen ersetzt.
 *
 * @return array
 */
function fbs_block_vorlagen() {
	return array(
		'impressum'   => '<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Kontakt- &amp; Adressdaten</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><b>Adresse</b><br>Fachberufsschule Villach 2<br>Tiroler Straße 23<br>9500 Villach</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><b>Telefon &amp; Fax</b><br>Telefon: 04242 56257-200<br>Fax: 04242 56257-203</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><b>E-Mail</b><br>villach2@bs.ksn.at</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Leiter</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>BD Ing. Alfred Madrutter, BEd</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Für den Inhalt verantwortlich</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>BD Ing. Alfred Madrutter, BEd</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Kontakt</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Fragen zur Website richten Sie bitte an die oben genannte E-Mail-Adresse. Informationen zum Umgang mit Ihren Daten finden Sie in der <a href="{{url_datenschutz}}">Datenschutzerklärung</a>.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>© 2026 Fachberufsschule Villach 2</p>
<!-- /wp:paragraph -->',
		'datenschutz' => '<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Einleitung und Überblick</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Mit dieser Datenschutzerklärung informieren wir Sie darüber, welche personenbezogenen Daten wir verarbeiten, wenn Sie unsere Website besuchen, und welche Rechte Sie haben. Diese Website sammelt so wenige Daten wie möglich.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Anwendungsbereich</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Diese Datenschutzerklärung gilt für die Website der Fachberufsschule Villach 2. Für andere Websites, auf die wir verlinken, gelten deren eigene Datenschutzerklärungen.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Rechtsgrundlagen</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Wir verarbeiten personenbezogene Daten nur, wenn eine Rechtsgrundlage nach der Datenschutz-Grundverordnung (DSGVO) besteht. Das sind insbesondere Ihre Einwilligung (Art. 6 Abs. 1 lit. a DSGVO), die Erfüllung rechtlicher Pflichten (Art. 6 Abs. 1 lit. c DSGVO) und unser berechtigtes Interesse an einem sicheren Betrieb der Website (Art. 6 Abs. 1 lit. f DSGVO). Ergänzend gilt das österreichische Datenschutzgesetz (DSG).</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Kontaktdaten des Verantwortlichen</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Fachberufsschule Villach 2<br>BD Ing. Alfred Madrutter, BEd<br>Tiroler Straße 23, 9500 Villach<br>Telefon: 04242 56257-200<br>E-Mail: villach2@bs.ksn.at<br>Impressum: <a href="{{url_impressum}}">Impressum</a></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Speicherdauer</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Wir speichern personenbezogene Daten nur so lange, wie es für den jeweiligen Zweck nötig ist oder gesetzliche Aufbewahrungspflichten es verlangen. Danach werden sie gelöscht.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Ihre Rechte laut DSGVO</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Sie haben das Recht auf Auskunft (Art. 15), Berichtigung (Art. 16), Löschung (Art. 17), Einschränkung der Verarbeitung (Art. 18), Datenübertragbarkeit (Art. 20) und Widerspruch (Art. 21). Eine erteilte Einwilligung können Sie jederzeit widerrufen. Wenden Sie sich dazu an die oben genannte Adresse.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Österreichische Datenschutzbehörde</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Wenn Sie glauben, dass die Verarbeitung Ihrer Daten gegen das Datenschutzrecht verstößt, können Sie sich bei der Österreichischen Datenschutzbehörde beschweren: Barichgasse 40–42, 1030 Wien, <a href="https://www.dsb.gv.at">www.dsb.gv.at</a>.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Datenübertragung in Drittländer</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Diese Website wird in Österreich gehostet. Eine Übertragung Ihrer Daten in Länder außerhalb der EU findet beim Besuch der Website nicht statt.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Sicherheit der Datenverarbeitung</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Wir treffen technische und organisatorische Maßnahmen, um Ihre Daten zu schützen. Die Website verwendet keine Kontaktformulare und keine Kommentarfunktion, dadurch fallen kaum Daten an.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">TLS-Verschlüsselung mit https</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Die Website wird ausschließlich verschlüsselt über https übertragen. Sie erkennen das am Schloss-Symbol in der Adresszeile Ihres Browsers.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Kommunikation</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Wenn Sie uns per Telefon oder E-Mail kontaktieren, verarbeiten wir Ihre Angaben, um Ihre Anfrage zu bearbeiten. Nach Abschluss der Anfrage löschen wir die Daten, sofern keine gesetzliche Aufbewahrungspflicht besteht.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Cookies</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Für Besucher*innen setzt diese Website keine Cookies und verwendet keine Analyse-, Tracking- oder Werbedienste. Deshalb gibt es auch kein Cookie-Banner. Nur wenn sich Mitarbeiter*innen der Schule zur Bearbeitung der Website anmelden, setzt WordPress technisch notwendige Anmelde-Cookies.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Webhosting</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Die Website wird bei easyname GmbH, Canettistraße 5/10, 1100 Wien (<a href="https://www.easyname.at">www.easyname.at</a>) in Österreich gehostet. Beim Aufruf einer Seite speichert der Server automatisch technische Daten wie Ihre IP-Adresse, Datum und Uhrzeit, die aufgerufene Seite und den verwendeten Browser. Das ist nötig, um die Website sicher auszuliefern und Angriffe abzuwehren (berechtigtes Interesse, Art. 6 Abs. 1 lit. f DSGVO). Diese Daten werden nach <mark>[Speicherdauer laut easyname ergänzen, z. B. 14 Tagen]</mark> gelöscht.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Schriften</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Die verwendeten Schriften sind direkt auf dieser Website gespeichert. Es wird keine Verbindung zu Google Fonts oder anderen Anbietern aufgebaut.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Online-Kartendienste und externe Links</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Wir binden keine Karten oder Videos ein. Der Link „Anfahrt in Google Maps“ öffnet die Website von Google erst, wenn Sie ihn anklicken. Ab dann gilt die <a href="https://policies.google.com/privacy?hl=de">Datenschutzerklärung von Google</a>. Dasselbe gilt für Links zu Moodle und zur Website der FBS Villach 1.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Fotos und Namen</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Namen und Fotos von Lehrer*innen und Schüler*innen veröffentlichen wir nur mit deren Einwilligung (Art. 6 Abs. 1 lit. a DSGVO). Die Einwilligung kann jederzeit widerrufen werden.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Erklärung verwendeter Begriffe</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><b>Personenbezogene Daten</b> sind alle Informationen, die sich auf eine bestimmte Person beziehen, etwa Name, E-Mail-Adresse oder IP-Adresse.<br><b>Einwilligung</b> ist Ihre freiwillige und eindeutige Zustimmung zu einer bestimmten Verarbeitung Ihrer Daten.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Stand: Oktober 2026</p>
<!-- /wp:paragraph -->',
	);
}
