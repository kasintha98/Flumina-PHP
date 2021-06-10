<?php
  session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Datenschutz</title>

    <link rel="stylesheet" type="text/css" href="css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/footer.css" />
    <link rel="stylesheet" type="text/css" href="css/searchbar.css">
    <link rel="stylesheet" type="text/css" href="css/media.css" />
    <link rel="stylesheet" type="text/css" href="css/language.css" />
    <link rel="stylesheet" type="text/css" href="css/privacy.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
</head>

<body>
    <!--Including top bar and navigation bar start-->
    <?php
                include './components/header.php'
    ?>
    <!--Including top bar and navigation bar end-->

    <!-- <div class="mainBackgroundHolder"
        style="height: 900vh; width: 100vw; overflow: hidden; position: absolute; top: 0;"></div> -->

    <!-- <div id="mainBackground" class="mainBackground"></div> -->
    <!-- Animation -->
    <!-- <canvas id="particleCanvas" class="particleCanvas" width="1848" height="949"></canvas> -->

    <main id="main" class="privacy-page" style='margin-top: 100px;'>
        <div class="container">
            <div class="privacy-page-header">
                <h2 class="privacy-page-title">
                    <strong>Cookie-Informationen</strong>
                </h2>
            </div>
            <div class="privacy-page-content">
                <h3 id="essentialCookies">Essenzielle Cookies</h3>
                <p>Essenzielle Cookies sind notwendig, um eine funktionierende Website zu garantieren.</p>
                <h4>Flumina Cookie-Einstellungen</h4>
                <div class="BorlabsCookie">
                    <h3>Essenzielle Cookies</h3>
                    <p>Essenzielle Cookies sind notwendig, um eine funktionierende Website zu garantieren.</p>
                    <h4>Flumina Cookie-Einstellungen</h4>
                </div>
                <div>
                    <table class="table table-borderless" style="border-color: #fff;">
                        <tbody>
                            <tr>
                                <th>Name</th>
                                <td>Flumina Cookie-Einstellungen</td>
                            </tr>
                            <tr>
                                <th>Provider</th>
                                <td>Flumina</td>
                            </tr>
                            <tr>
                                <th>Purpose</th>
                                <td>Speichert die Cookie-Einstellung des Benutzers.</td>
                            </tr>
                            <tr>
                                <th>Cookie Name</th>
                                <td>borlabs-cookie</td>
                            </tr>
                            <tr>
                                <th>Cookie Expiry</th>
                                <td>1 Year</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <h3>Statistiken</h3>
                <p>Statistik-Cookies übermitteln uns anonymisierte Statistiken über die Website-Nutzung unserer User,
                    welche wir zur Optimierung verwenden.</p>
                <h4>Google Analytics</h4>
                <div>
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th>Name</th>
                                <td>Google Analytics</td>
                            </tr>
                            <tr>
                                <th>Provider</th>
                                <td>Google LLC</td>
                            </tr>
                            <tr>
                                <th>Purpose</th>
                                <td>Google-Cookie zur Website-Anaylise. Generiert Statistiken zur Website-Nutzung.</td>
                            </tr>
                            <tr>
                                <th>Privacy Policy</th>
                                <td><a href="https://policies.google.com/privacy?hl=en" target="_blank"
                                        rel="nofollow noopener noreferrer">https://policies.google.com/privacy?hl=en</a>
                                </td>
                            </tr>
                            <tr>
                                <th>Cookie Name</th>
                                <td>_ga,_gat,_gid,1P_JAR</td>
                            </tr>
                            <tr>
                                <th>Cookie Expiry</th>
                                <td>2 Years</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <h2 id="dataProtection">
                    <span><b>Datenschutzerklärung</b></span>
                </h2>
                <h3>
                    <span><b>1. Datenschutz auf einen Blick</b></span>
                </h3>
                <h4>
                    <span><b>Allgemeine Hinweise</b></span>
                </h4>
                <p>
                    <span>Die folgenden Hinweise geben einen einfachen Überblick darüber, was mit Ihren
                        personenbezogenen Daten passiert, wenn Sie unsere Website besuchen. </span>
                </p>
                <p>
                    <span>Personenbezogene Daten sind alle Daten, mit denen Sie persönlich identifiziert werden können.
                        Ausführliche Informationen zum Thema Datenschutz entnehmen Sie unserer unter diesem Text
                        aufgeführten Datenschutzerklärung. </span>
                </p>
                <h3>
                    <span><b>Datenerfassung auf unserer Website</b></span>
                </h3>
                <h4>
                    <span><b>Wer ist verantwortlich für die Datenerfassung auf dieser Website?</b></span>
                </h4>
                <p>
                    <span>Die Datenverarbeitung auf dieser Website erfolgt durch den Websitebetreiber. Dessen
                        Kontaktdaten können Sie dem Impressum dieser Website entnehmen.</span>
                </p>
                <h4>
                    <span><b>Wie erfassen wir Ihre Daten?</b></span>
                </h4>
                <p class="p1">
                    <span class="s1">Ihre Daten werden zum einen dadurch erhoben, dass Sie uns diese mitteilen. Hierbei
                        kann es sich z.B. um Daten handeln, die Sie in ein Kontaktformular eingeben.</span>
                </p>
                <p class="p1">
                    <span class="s1">Andere Daten werden automatisch beim Besuch der Website durch unsere IT-Systeme
                        erfasst. Das sind vor allem technische Daten (z.B. Internetbrowser, Betriebssystem oder Uhrzeit
                        des Seitenaufrufs). Die Erfassung dieser Daten erfolgt automatisch, sobald Sie unsere Website
                        betreten.</span>
                </p>
                <h4 class="p1">
                    <span class="s1"><b>Wofür nutzen wir Ihre Daten?</b></span>
                </h4>
                <p class="p1">
                    <span class="s1">Ein Teil der Daten wird erhoben, um eine fehlerfreie Bereitstellung der Website zu
                        gewährleisten. Andere Daten können zur Analyse Ihres Nutzerverhaltens verwendet werden.</span>
                </p>
                <h4 class="p1">
                    <span class="s1"><b>Welche Rechte haben Sie bezüglich Ihrer Daten?</b></span>
                </h4>
                <p class="p1">
                    <span class="s1">Sie haben jederzeit das Recht unentgeltlich Auskunft über Herkunft, Empfänger und
                        Zweck Ihrer gespeicherten personenbezogenen Daten zu erhalten. Sie haben außerdem ein Recht, die
                        Berichtigung, Sperrung oder Löschung dieser Daten zu verlangen. Hierzu sowie zu weiteren Fragen
                        zum Thema Datenschutz können Sie sich jederzeit unter der im Impressum angegebenen Adresse an
                        uns wenden. Des Weiteren steht Ihnen ein Beschwerderecht bei der zuständigen Aufsichtsbehörde
                        zu.</span>
                </p>
                <h4 class="p1">
                    <span class="s1"><b>Analyse-Tools und Tools von Drittanbietern</b></span>
                </h4>
                <p class="p1">
                    <span class="s1">Beim Besuch unserer Website kann Ihr Surf-Verhalten statistisch ausgewertet werden.
                        Das geschieht vor allem mit Cookies und mit sogenannten Analyseprogrammen. Die Analyse Ihres
                        Surf-Verhaltens erfolgt in der Regel anonym; das Surf-Verhalten kann nicht zu Ihnen
                        zurückverfolgt werden. Sie können dieser Analyse widersprechen oder sie durch die Nichtbenutzung
                        bestimmter Tools verhindern. Detaillierte Informationen dazu finden Sie in der folgenden
                        Datenschutzerklärung.</span>
                </p>
                <p class="p1">
                    <span class="s1">Sie können dieser Analyse widersprechen. Über die Widerspruchsmöglichkeiten werden
                        wir Sie in dieser Datenschutzerklärung informieren.</span>
                </p>
                <h3 class="p1">
                    <span class="s1"><b>2. Allgemeine Hinweise und Pflichtinformationen</b></span>
                </h3>
                <h4 class="p1">
                    <span class="s1"><b>Datenschutz</b></span>
                </h4>
                <p class="p1">
                    <span class="s1">Die Betreiber dieser Seiten nehmen den Schutz Ihrer persönlichen Daten sehr ernst.
                        Wir behandeln Ihre personenbezogenen Daten vertraulich und entsprechend der gesetzlichen
                        Datenschutzvorschriften sowie dieser Datenschutzerklärung.</span>
                </p>
                <p class="p1">
                    <span class="s1">Wenn Sie diese Website benutzen, werden verschiedene personenbezogene Daten
                        erhoben. Personenbezogene Daten sind Daten, mit denen Sie persönlich identifiziert werden
                        können. Die vorliegende Datenschutzerklärung erläutert, welche Daten wir erheben und wofür wir
                        sie nutzen. Sie erläutert auch, wie und zu welchem Zweck das geschieht.</span>
                </p>
                <p class="p1">
                    <span class="s1">Wir weisen darauf hin, dass die Datenübertragung im Internet (z.B. bei der
                        Kommunikation per E-Mail) Sicherheitslücken aufweisen kann. Ein lückenloser Schutz der Daten vor
                        dem Zugriff durch Dritte ist nicht möglich.</span>
                </p>
                <h4 class="p1">
                    <span class="s1"><b>Hinweis zur verantwortlichen Stelle</b></span>
                </h4>
                <p class="p1">
                    <span class="s1">Die verantwortliche Stelle für die Datenverarbeitung auf dieser Website ist:</span>
                </p>
                <p class="p1">
                    <span class="s1">FLUMINA GmbH<br></span>
                    <span class="s1">Blarerstraße 56<br></span>
                    <span class="s1">78462 Konstanz</span>
                </p>
                <p class="p1">
                    <span class="s1">Geschäftsführung: Mauritius Geiger</span>
                </p>
                <p class="p1">
                    <span class="s1">Telefon: +49-7531-122-9806</span>
                </p>
                <p class="p3">
                    <span class="s2">E-Mail: <a href="mailto:info@flumina.de">
                            <span class="s3">info@flumina.de</span></a></span>
                </p>
                <p class="p1">
                    <span class="s1">Verantwortliche Stelle ist die natürliche oder juristische Person, die allein oder
                        gemeinsam mit anderen über die Zwecke und Mittel der Verarbeitung von personenbezogenen Daten
                        (z.B. Namen, E-Mail-Adressen o. Ä.) entscheidet.</span>
                </p>
                <h4 class="p1">
                    <span class="s1"><b>Widerruf Ihrer Einwilligung zur Datenverarbeitung</b></span>
                </h4>
                <p class="p1">
                    <span class="s1">Viele Datenverarbeitungsvorgänge sind nur mit Ihrer ausdrücklichen Einwilligung
                        möglich. Sie können eine bereits erteilte Einwilligung jederzeit widerrufen. Dazu reicht eine
                        formlose Mitteilung per E-Mail an uns. Die Rechtmäßigkeit der bis zum Widerruf erfolgten
                        Datenverarbeitung bleibt vom Widerruf unberührt.</span>
                </p>
                <h4 class="p1">
                    <span class="s1"><b>Beschwerderecht bei der zuständigen Aufsichtsbehörde</b></span>
                </h4>
                <p class="p1">
                    <span class="s1">Im Falle datenschutzrechtlicher Verstöße steht dem Betroffenen ein Beschwerderecht
                        bei der zuständigen Aufsichtsbehörde zu. Zuständige Aufsichtsbehörde in datenschutzrechtlichen
                        Fragen ist der Landesdatenschutzbeauftragte des Bundeslandes, in dem unser Unternehmen seinen
                        Sitz hat. Eine Liste der Datenschutzbeauftragten sowie deren Kontaktdaten können folgendem Link
                        entnommen werden: <a
                            href="https://www.bfdi.bund.de/DE/Infothek/Anschriften_Links/anschriften_links-node.html">
                            <span
                                class="s4">https://www.bfdi.bund.de/DE/Infothek/Anschriften_Links/anschriften_links-node.html</span></a>.</span>
                </p>
                <h4 class="p1">
                    <span class="s1"><b>Recht auf Datenübertragbarkeit</b></span>
                </h4>
                <p class="p1">
                    <span class="s1">Sie haben das Recht, Daten, die wir auf Grundlage Ihrer Einwilligung oder in
                        Erfüllung eines Vertrags automatisiert verarbeiten, an sich oder an einen Dritten in einem
                        gängigen, maschinenlesbaren Format aushändigen zu lassen. Sofern Sie die direkte Übertragung der
                        Daten an einen anderen Verantwortlichen verlangen, erfolgt dies nur, soweit es technisch machbar
                        ist.</span>
                </p>
                <h4 class="p1">
                    <span class="s1"><b>SSL- bzw. TLS-Verschlüsselung</b></span>
                </h4>
                <p class="p1">
                    <span class="s1">Diese Seite nutzt aus Sicherheitsgründen und zum Schutz der Übertragung
                        vertraulicher Inhalte, wie zum Beispiel Bestellungen oder Anfragen, die Sie an uns als
                        Seitenbetreiber senden, eine SSL-bzw. TLS-Verschlüsselung. Eine verschlüsselte Verbindung
                        erkennen Sie daran, dass die Adresszeile des Browsers von “http://” auf “https://” wechselt und
                        an dem Schloss-Symbol in Ihrer Browserzeile.</span>
                </p>
                <p class="p1">
                    <span class="s1">Wenn die SSL- bzw. TLS-Verschlüsselung aktiviert ist, können die Daten, die Sie an
                        uns übermitteln, nicht von Dritten mitgelesen werden.</span>
                </p>
                <h4 class="p1">
                    <span class="s1"><b>Auskunft, Sperrung, Löschung</b></span>
                </h4>
                <p class="p1">
                    <span class="s1">Sie haben im Rahmen der geltenden gesetzlichen Bestimmungen jederzeit das Recht auf
                        unentgeltliche Auskunft über Ihre gespeicherten personenbezogenen Daten, deren Herkunft und
                        Empfänger und den Zweck der Datenverarbeitung und ggf. ein Recht auf Berichtigung, Sperrung oder
                        Löschung dieser Daten. Hierzu sowie zu weiteren Fragen zum Thema personenbezogene Daten können
                        Sie sich jederzeit unter der im Impressum angegebenen Adresse an uns wenden.</span>
                </p>
                <h4 class="p1">
                    <span class="s1"><b>Widerspruch gegen Werbe-Mails</b></span>
                </h4>
                <p class="p1">
                    <span class="s1">Der Nutzung von im Rahmen der Impressumspflicht veröffentlichten Kontaktdaten zur
                        Übersendung von nicht ausdrücklich angeforderter Werbung und Informationsmaterialien wird
                        hiermit widersprochen. Die Betreiber der Seiten behalten sich ausdrücklich rechtliche Schritte
                        im Falle der unverlangten Zusendung von Werbeinformationen, etwa durch Spam-E-Mails, vor.</span>
                </p>
                <h3 class="p1">
                    <span class="s1"><b>3. Datenerfassung auf unserer Website</b></span>
                </h3>
                <h4 class="p1">
                    <span class="s1"><b>Cookies</b></span>
                </h4>
                <p class="p1">
                    <span class="s1">Die Internetseiten verwenden teilweise so genannte Cookies. Cookies richten auf
                        Ihrem Rechner keinen Schaden an und enthalten keine Viren. Cookies dienen dazu, unser Angebot
                        nutzerfreundlicher, effektiver und sicherer zu machen. Cookies sind kleine Textdateien, die auf
                        Ihrem Rechner abgelegt werden und die Ihr Browser speichert.</span>
                </p>
                <p class="p1">
                    <span class="s1">Die meisten der von uns verwendeten Cookies sind so genannte “Session-Cookies”. Sie
                        werden nach Ende Ihres Besuchs automatisch gelöscht. Andere Cookies bleiben auf Ihrem Endgerät
                        gespeichert bis Sie diese löschen. Diese Cookies ermöglichen es uns, Ihren Browser beim nächsten
                        Besuch wiederzuerkennen.</span>
                </p>
                <p class="p1">
                    <span class="s1">Sie können Ihren Browser so einstellen, dass Sie über das Setzen von Cookies
                        informiert werden und Cookies nur im Einzelfall erlauben, die Annahme von Cookies für bestimmte
                        Fälle oder generell ausschließen sowie das automatische Löschen der Cookies beim Schließen des
                        Browser aktivieren. Bei der Deaktivierung von Cookies kann die Funktionalität dieser Website
                        eingeschränkt sein.</span>
                </p>
                <p class="p1">
                    <span class="s1">Cookies, die zur Durchführung des elektronischen Kommunikationsvorgangs oder zur
                        Bereitstellung bestimmter, von Ihnen erwünschter Funktionen (z.B. Warenkorbfunktion)
                        erforderlich sind, werden auf Grundlage von Art. 6 Abs. 1 lit. f DSGVO gespeichert. Der
                        Websitebetreiber hat ein berechtigtes Interesse an der Speicherung von Cookies zur technisch
                        fehlerfreien und optimierten Bereitstellung seiner Dienste. Soweit andere Cookies (z.B. Cookies
                        zur Analyse Ihres Surfverhaltens) gespeichert werden, werden diese in dieser
                        Datenschutzerklärung gesondert behandelt.</span>
                </p>
                <h4 class="p1">
                    <span class="s1"><b>Server-Log-Dateien</b></span>
                </h4>
                <p class="p1">
                    <span class="s1">Der Provider der Seiten erhebt und speichert automatisch Informationen in so
                        genannten Server-Log-Dateien, die Ihr Browser automatisch an uns übermittelt. Dies sind:</span>
                </p>
                <ul class="ul1">
                    <li class="li4"><span class="s5">Browsertyp und Browserversion</span></li>
                    <li class="li4"><span class="s5">verwendetes Betriebssystem</span></li>
                    <li class="li4"><span class="s5">Referrer URL</span></li>
                    <li class="li4"><span class="s5">Hostname des zugreifenden Rechners</span></li>
                    <li class="li4"><span class="s5">Uhrzeit der Serveranfrage</span></li>
                    <li class="li4"><span class="s5">IP-Adresse</span></li>
                </ul>
                <p class="p1"><span class="s1">Eine Zusammenführung dieser Daten mit anderen Datenquellen wird nicht
                        vorgenommen.</span></p>
                <p class="p1"><span class="s1">Grundlage für die Datenverarbeitung ist Art. 6 Abs. 1 lit. f DSGVO, der
                        die Verarbeitung von Daten zur Erfüllung eines Vertrags oder vorvertraglicher Maßnahmen
                        gestattet.</span></p>
                <h4 class="p1"><span class="s1"><b>Kontaktformular</b></span></h4>
                <div class="page" title="Page 1">
                    <div class="layoutArea">
                        <div class="column">
                            <p>Unsere Website bietet an mehreren Stellen die Möglichkeit, direkt mit uns in Kontakt zu
                                treten. Mit dem Absenden des Kontaktformulars oder einer Email an uns erklären Sie sich
                                mit der Verarbeitung und Speicherung
                                Ihrer eingegebenen Daten (insbesondere Ihrer E-Mailadresse) einverstanden. Die von Ihnen
                                dabei an uns übermittelten Daten verarbeiten wir ausschließlich bis zur Erreichung des
                                jeweiligen Zwecks Ihrer Kontaktaufnahme,
                                maximal jedoch bis zu 7 Tage nach Zweckerreichung. Dieser Verarbeitung können Sie
                                jederzeit mit Wirkung für die Zukunft widersprechen. Nutzen Sie hierfür bitte unsere
                                Kontaktdaten im Impressum.</p>
                            <p>Die Rechtsgrundlage für die Nutzung der von Ihnen durch die Kontaktaufnahme an uns
                                übermittelten Daten ist Art. 6 Abs. 1 S. 1 Buchstabe a) DSGVO (Einwilligung der
                                betroffenen Person). Ihre Einwilligung können
                                Sie jederzeit mit Wirkung für die Zukunft widerrufen.</p>
                        </div>
                    </div>
                </div>
                <h4 class="p1"><span class="s1"><b>Verarbeiten von Daten (Kunden- und Vertragsdaten)</b></span></h4>
                <p class="p1"><span class="s1">Wir erheben, verarbeiten und nutzen personenbezogene Daten nur, soweit
                        sie für die Begründung, inhaltliche Ausgestaltung oder Änderung des Rechtsverhältnisses
                        erforderlich sind (Bestandsdaten). Dies erfolgt auf Grundlage von Art. 6 Abs. 1 lit. b DSGVO,
                        der die Verarbeitung von Daten zur Erfüllung eines Vertrags oder vorvertraglicher Maßnahmen
                        gestattet. Personenbezogene Daten über die Inanspruchnahme unserer Internetseiten
                        (Nutzungsdaten) erheben, verarbeiten und nutzen wir nur, soweit dies erforderlich ist, um dem
                        Nutzer die Inanspruchnahme des Dienstes zu ermöglichen oder abzurechnen.</span></p>
                <p class="p1"><span class="s1">Die erhobenen Kundendaten werden nach Abschluss des Auftrags oder
                        Beendigung der Geschäftsbeziehung gelöscht. Gesetzliche Aufbewahrungsfristen bleiben
                        unberührt.</span></p>
                <h3 class="p1" id="analyzingTools"><span class="s1"><b>4. Analyse Tools und Werbung</b></span></h3>
                <p><strong>Nutzung von Google Analytics</strong></p>
                <p>Wir verwenden Google Analytics, um die Website-Nutzung zu analysieren. Die daraus gewonnenen Daten
                    werden genutzt, um unsere Website sowie Werbemaßnahmen zu optimieren.</p>
                <p>Google Analytics ist ein Webanalysedienst, der von&nbsp;<em>Google Inc.</em>&nbsp;(1600 Amphitheatre
                    Parkway, Mountain View, CA 94043, United States) betrieben und bereitgestellt wird. Google
                    verarbeitet die Daten zur Website-Nutzung
                    in unserem Auftrag und verpflichtet sich vertraglich zu Maßnahmen, um die Vertraulichkeit der
                    verarbeiteten Daten zu gewährleisten.</p>
                <p>Während Ihres Website-Besuchs werden u.a. folgende Daten aufgezeichnet:</p>
                <ul>
                    <li>Aufgerufene Seiten</li>
                    <li>Die Erreichung von “Website-Zielen” (z.B. Kontaktanfragen)</li>
                    <li>Ihr Verhalten auf den Seiten&nbsp;(beispielsweise Klicks, Scroll-Verhalten und Verweildauer)
                    </li>
                    <li>Ihr ungefährer Standort (Land und Stadt)</li>
                    <li>Ihre IP-Adresse (in gekürzter Form, sodass keine eindeutige Zuordnung möglich ist)</li>
                    <li>Technische Informationen wie Browser, Internetanbieter, Endgerät und Bildschirmauflösung</li>
                    <li>Herkunftsquelle Ihres Besuchs (d.h. über welche Website bzw. über welches Werbemittel Sie zu uns
                        gekommen sind)</li>
                </ul>
                <p>Diese Daten werden an einen Server von Google in den USA übertragen. Google beachtet dabei die
                    Datenschutzbestimmungen des „EU-US Privacy Shield“-Abkommens.</p>
                <p>Google Analytics speichert Cookies in Ihrem Webbrowser für die Dauer von zwei&nbsp;Jahren seit Ihrem
                    letzten Besuch. Diese Cookies enthaltene eine zufallsgenerierte User-ID, mit der Sie bei zukünftigen
                    Website-Besuchen
                    wiedererkannt werden können.</p>
                <p>Die aufgezeichneten Daten werden zusammen mit der zufallsgenerierten User-ID gespeichert, was die
                    Auswertung pseudonymer Nutzerprofile ermöglicht.&nbsp;Diese nutzerbezogenen Daten werden automatisch
                    nach 14 Monaten gelöscht.&nbsp;Sonstige
                    Daten bleiben in aggregierter Form unbefristet gespeichert.</p>
                <p>Sollten Sie mit der Erfassung nicht einverstanden sein, können Sie diese mit der einmaligen
                    Installation des&nbsp;<a href="https://tools.google.com/dlpage/gaoptout?hl=de">Browser-Add-ons zur
                        Deaktivierung von Google Analytics</a> unterbinden oder hier deaktivieren:</p>
                <!-- TODO: Cookies -->
                <p><em>Quelle:&nbsp;<a href="https://traffic3.net/">traffic3.net</a></em></p>
                <h3 class="p1"><span class="s1"><b>5. Plugins und Tools</b></span></h3>
                <h4 class="p1"><span class="s1"><b>YouTube</b></span></h4>
                <p class="p1"><span class="s1">Unsere Website nutzt Plugins der von Google betriebenen Seite YouTube.
                        Betreiber der Seiten ist die YouTube, LLC, 901 Cherry Ave., San Bruno, CA 94066, USA.</span></p>
                <p class="p1"><span class="s1">Wenn Sie eine unserer mit einem YouTube-Plugin ausgestatteten Seiten
                        besuchen, wird eine Verbindung zu den Servern von YouTube hergestellt. Dabei wird dem
                        YouTube-Server mitgeteilt, welche unserer Seiten Sie besucht haben.</span></p>
                <p class="p1"><span class="s1">Wenn Sie in Ihrem YouTube-Account eingeloggt sind, ermöglichen Sie
                        YouTube, Ihr Surfverhalten direkt Ihrem persönlichen Profil zuzuordnen. Dies können Sie
                        verhindern, indem Sie sich aus Ihrem YouTube-Account ausloggen.</span></p>
                <p class="p1"><span class="s1">Die Nutzung von YouTube erfolgt im Interesse einer ansprechenden
                        Darstellung unserer Online-Angebote. Dies stellt ein berechtigtes Interesse im Sinne von Art. 6
                        Abs. 1 lit. f DSGVO dar.</span></p>
                <p class="p1"><span class="s1">Weitere Informationen zum Umgang mit Nutzerdaten finden Sie in der
                        Datenschutzerklärung von YouTube unter: <a
                            href="https://www.google.de/intl/de/policies/privacy"><span
                                class="s4">https://www.google.de/intl/de/policies/privacy</span></a>.</span>
                </p>
                <h4 class="p1"><span class="s1"><b>Google Web Fonts</b></span></h4>
                <p class="p1"><span class="s1">Diese Seite nutzt zur einheitlichen Darstellung von Schriftarten so
                        genannte Web Fonts, die von Google bereitgestellt werden. Beim Aufruf einer Seite lädt Ihr
                        Browser die benötigten Web Fonts in ihren Browsercache, um Texte und Schriftarten korrekt
                        anzuzeigen.</span></p>
                <p class="p1"><span class="s1">Zu diesem Zweck muss der von Ihnen verwendete Browser Verbindung zu den
                        Servern von Google aufnehmen. Hierdurch erlangt Google Kenntnis darüber, dass über Ihre
                        IP-Adresse unsere Website aufgerufen wurde. Die Nutzung von Google Web Fonts erfolgt im
                        Interesse einer einheitlichen und ansprechenden Darstellung unserer Online-Angebote. Dies stellt
                        ein berechtigtes Interesse im Sinne von Art. 6 Abs. 1 lit. f DSGVO dar.</span></p>
                <p class="p1"><span class="s1">Wenn Ihr Browser Web Fonts nicht unterstützt, wird eine Standardschrift
                        von Ihrem Computer genutzt.</span></p>
                <p class="p1"><span class="s1">Weitere Informationen zu Google Web Fonts finden Sie unter <a
                            href="https://developers.google.com/fonts/faq"><span
                                class="s4">https://developers.google.com/fonts/faq</span></a> und in der
                        Datenschutzerklärung
                        von Google: <a href="https://www.google.com/policies/privacy/"><span
                                class="s4">https://www.google.com/policies/privacy/</span></a>.</span>
                </p>
                <h4 class="p1"><span class="s1"><b>Google Maps</b></span></h4>
                <p class="p1"><span class="s1">Diese Seite nutzt über eine API den Kartendienst Google Maps. Anbieter
                        ist die Google Inc., 1600 Amphitheatre Parkway, Mountain View, CA 94043, USA.</span></p>
                <p class="p1"><span class="s1">Zur Nutzung der Funktionen von Google Maps ist es notwendig, Ihre IP
                        Adresse zu speichern. Diese Informationen werden in der Regel an einen Server von Google in den
                        USA übertragen und dort gespeichert. Der Anbieter dieser Seite hat keinen Einfluss auf diese
                        Datenübertragung.</span></p>
                <p class="p1"><span class="s1">Die Nutzung von Google Maps erfolgt im Interesse einer ansprechenden
                        Darstellung unserer Online-Angebote und an einer leichten Auffindbarkeit der von uns auf der
                        Website angegebenen Orte. Dies stellt ein berechtigtes Interesse im Sinne von Art. 6 Abs. 1 lit.
                        f DSGVO dar.</span></p>
                <p class="p1"><span class="s1">Mehr Informationen zum Umgang mit Nutzerdaten finden Sie in der
                        Datenschutzerklärung von Google: <a href="https://www.google.de/intl/de/policies/privacy/"><span
                                class="s4">https://www.google.de/intl/de/policies/privacy/</span></a>.</span>
                </p>
                <h4 class="p1"><span class="s1"><b>Icons</b></span></h4>
                <p class="p1"><span class="s1">Diese Seite nutzt zur einheitlichen Darstellung Icons, die von
                        verschiedenen Dienstleistern bereitgestellt werden. Beim Aufruf einer Seite lädt Ihr Browser die
                        entsprechenden Ressourcen, von externen Quellen, um die Icons korrekt anzuzeigen. Zu diesem
                        Zweck muss der von Ihnen verwendete Browser Verbindung zu den Servern der technischen
                        Dienstleister aufnehmen. Hierdurch erlangt der Dienstleister Kenntnis darüber, dass über Ihre
                        IP-Adresse unsere Website aufgerufen wurde. Die Nutzung dieser erfolgt im Interesse einer
                        einheitlichen und ansprechenden Darstellung unserer Online-Angebote. Dies stellt ein
                        berechtigtes Interesse im Sinne von Art. 6 Abs. 1 lit. f DSGVO dar.</span></p>

            </div>
        </div>
    </main>

    <!------------footer------------------------->
    <?php
                include './components/footer.php'
    ?>
    <!------------footer------------------------->

    <script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
    <script>
    $(document).ready(function() {
        $(".fa-search").click(function() {
            $(".icon").toggleClass("active");
            $("input[type='text']").toggleClass("active");
        });
    });
    </script>
    <script src="js/main.js"></script>
    <script src="js/nav.js"></script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="js/actions.js"></script>


</body>

</html>