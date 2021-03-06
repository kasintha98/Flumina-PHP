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
                <p>Statistik-Cookies ??bermitteln uns anonymisierte Statistiken ??ber die Website-Nutzung unserer User,
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
                    <span><b>Datenschutzerkl??rung</b></span>
                </h2>
                <h3>
                    <span><b>1. Datenschutz auf einen Blick</b></span>
                </h3>
                <h4>
                    <span><b>Allgemeine Hinweise</b></span>
                </h4>
                <p>
                    <span>Die folgenden Hinweise geben einen einfachen ??berblick dar??ber, was mit Ihren
                        personenbezogenen Daten passiert, wenn Sie unsere Website besuchen. </span>
                </p>
                <p>
                    <span>Personenbezogene Daten sind alle Daten, mit denen Sie pers??nlich identifiziert werden k??nnen.
                        Ausf??hrliche Informationen zum Thema Datenschutz entnehmen Sie unserer unter diesem Text
                        aufgef??hrten Datenschutzerkl??rung. </span>
                </p>
                <h3>
                    <span><b>Datenerfassung auf unserer Website</b></span>
                </h3>
                <h4>
                    <span><b>Wer ist verantwortlich f??r die Datenerfassung auf dieser Website?</b></span>
                </h4>
                <p>
                    <span>Die Datenverarbeitung auf dieser Website erfolgt durch den Websitebetreiber. Dessen
                        Kontaktdaten k??nnen Sie dem Impressum dieser Website entnehmen.</span>
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
                    <span class="s1"><b>Wof??r nutzen wir Ihre Daten?</b></span>
                </h4>
                <p class="p1">
                    <span class="s1">Ein Teil der Daten wird erhoben, um eine fehlerfreie Bereitstellung der Website zu
                        gew??hrleisten. Andere Daten k??nnen zur Analyse Ihres Nutzerverhaltens verwendet werden.</span>
                </p>
                <h4 class="p1">
                    <span class="s1"><b>Welche Rechte haben Sie bez??glich Ihrer Daten?</b></span>
                </h4>
                <p class="p1">
                    <span class="s1">Sie haben jederzeit das Recht unentgeltlich Auskunft ??ber Herkunft, Empf??nger und
                        Zweck Ihrer gespeicherten personenbezogenen Daten zu erhalten. Sie haben au??erdem ein Recht, die
                        Berichtigung, Sperrung oder L??schung dieser Daten zu verlangen. Hierzu sowie zu weiteren Fragen
                        zum Thema Datenschutz k??nnen Sie sich jederzeit unter der im Impressum angegebenen Adresse an
                        uns wenden. Des Weiteren steht Ihnen ein Beschwerderecht bei der zust??ndigen Aufsichtsbeh??rde
                        zu.</span>
                </p>
                <h4 class="p1">
                    <span class="s1"><b>Analyse-Tools und Tools von Drittanbietern</b></span>
                </h4>
                <p class="p1">
                    <span class="s1">Beim Besuch unserer Website kann Ihr Surf-Verhalten statistisch ausgewertet werden.
                        Das geschieht vor allem mit Cookies und mit sogenannten Analyseprogrammen. Die Analyse Ihres
                        Surf-Verhaltens erfolgt in der Regel anonym; das Surf-Verhalten kann nicht zu Ihnen
                        zur??ckverfolgt werden. Sie k??nnen dieser Analyse widersprechen oder sie durch die Nichtbenutzung
                        bestimmter Tools verhindern. Detaillierte Informationen dazu finden Sie in der folgenden
                        Datenschutzerkl??rung.</span>
                </p>
                <p class="p1">
                    <span class="s1">Sie k??nnen dieser Analyse widersprechen. ??ber die Widerspruchsm??glichkeiten werden
                        wir Sie in dieser Datenschutzerkl??rung informieren.</span>
                </p>
                <h3 class="p1">
                    <span class="s1"><b>2. Allgemeine Hinweise und Pflichtinformationen</b></span>
                </h3>
                <h4 class="p1">
                    <span class="s1"><b>Datenschutz</b></span>
                </h4>
                <p class="p1">
                    <span class="s1">Die Betreiber dieser Seiten nehmen den Schutz Ihrer pers??nlichen Daten sehr ernst.
                        Wir behandeln Ihre personenbezogenen Daten vertraulich und entsprechend der gesetzlichen
                        Datenschutzvorschriften sowie dieser Datenschutzerkl??rung.</span>
                </p>
                <p class="p1">
                    <span class="s1">Wenn Sie diese Website benutzen, werden verschiedene personenbezogene Daten
                        erhoben. Personenbezogene Daten sind Daten, mit denen Sie pers??nlich identifiziert werden
                        k??nnen. Die vorliegende Datenschutzerkl??rung erl??utert, welche Daten wir erheben und wof??r wir
                        sie nutzen. Sie erl??utert auch, wie und zu welchem Zweck das geschieht.</span>
                </p>
                <p class="p1">
                    <span class="s1">Wir weisen darauf hin, dass die Daten??bertragung im Internet (z.B. bei der
                        Kommunikation per E-Mail) Sicherheitsl??cken aufweisen kann. Ein l??ckenloser Schutz der Daten vor
                        dem Zugriff durch Dritte ist nicht m??glich.</span>
                </p>
                <h4 class="p1">
                    <span class="s1"><b>Hinweis zur verantwortlichen Stelle</b></span>
                </h4>
                <p class="p1">
                    <span class="s1">Die verantwortliche Stelle f??r die Datenverarbeitung auf dieser Website ist:</span>
                </p>
                <p class="p1">
                    <span class="s1">FLUMINA GmbH<br></span>
                    <span class="s1">Blarerstra??e 56<br></span>
                    <span class="s1">78462 Konstanz</span>
                </p>
                <p class="p1">
                    <span class="s1">Gesch??ftsf??hrung: Mauritius Geiger</span>
                </p>
                <p class="p1">
                    <span class="s1">Telefon: +49-7531-122-9806</span>
                </p>
                <p class="p3">
                    <span class="s2">E-Mail: <a href="mailto:info@flumina.de">
                            <span class="s3">info@flumina.de</span></a></span>
                </p>
                <p class="p1">
                    <span class="s1">Verantwortliche Stelle ist die nat??rliche oder juristische Person, die allein oder
                        gemeinsam mit anderen ??ber die Zwecke und Mittel der Verarbeitung von personenbezogenen Daten
                        (z.B. Namen, E-Mail-Adressen o. ??.) entscheidet.</span>
                </p>
                <h4 class="p1">
                    <span class="s1"><b>Widerruf Ihrer Einwilligung zur Datenverarbeitung</b></span>
                </h4>
                <p class="p1">
                    <span class="s1">Viele Datenverarbeitungsvorg??nge sind nur mit Ihrer ausdr??cklichen Einwilligung
                        m??glich. Sie k??nnen eine bereits erteilte Einwilligung jederzeit widerrufen. Dazu reicht eine
                        formlose Mitteilung per E-Mail an uns. Die Rechtm????igkeit der bis zum Widerruf erfolgten
                        Datenverarbeitung bleibt vom Widerruf unber??hrt.</span>
                </p>
                <h4 class="p1">
                    <span class="s1"><b>Beschwerderecht bei der zust??ndigen Aufsichtsbeh??rde</b></span>
                </h4>
                <p class="p1">
                    <span class="s1">Im Falle datenschutzrechtlicher Verst????e steht dem Betroffenen ein Beschwerderecht
                        bei der zust??ndigen Aufsichtsbeh??rde zu. Zust??ndige Aufsichtsbeh??rde in datenschutzrechtlichen
                        Fragen ist der Landesdatenschutzbeauftragte des Bundeslandes, in dem unser Unternehmen seinen
                        Sitz hat. Eine Liste der Datenschutzbeauftragten sowie deren Kontaktdaten k??nnen folgendem Link
                        entnommen werden: <a
                            href="https://www.bfdi.bund.de/DE/Infothek/Anschriften_Links/anschriften_links-node.html">
                            <span
                                class="s4">https://www.bfdi.bund.de/DE/Infothek/Anschriften_Links/anschriften_links-node.html</span></a>.</span>
                </p>
                <h4 class="p1">
                    <span class="s1"><b>Recht auf Daten??bertragbarkeit</b></span>
                </h4>
                <p class="p1">
                    <span class="s1">Sie haben das Recht, Daten, die wir auf Grundlage Ihrer Einwilligung oder in
                        Erf??llung eines Vertrags automatisiert verarbeiten, an sich oder an einen Dritten in einem
                        g??ngigen, maschinenlesbaren Format aush??ndigen zu lassen. Sofern Sie die direkte ??bertragung der
                        Daten an einen anderen Verantwortlichen verlangen, erfolgt dies nur, soweit es technisch machbar
                        ist.</span>
                </p>
                <h4 class="p1">
                    <span class="s1"><b>SSL- bzw. TLS-Verschl??sselung</b></span>
                </h4>
                <p class="p1">
                    <span class="s1">Diese Seite nutzt aus Sicherheitsgr??nden und zum Schutz der ??bertragung
                        vertraulicher Inhalte, wie zum Beispiel Bestellungen oder Anfragen, die Sie an uns als
                        Seitenbetreiber senden, eine SSL-bzw. TLS-Verschl??sselung. Eine verschl??sselte Verbindung
                        erkennen Sie daran, dass die Adresszeile des Browsers von ???http://??? auf ???https://??? wechselt und
                        an dem Schloss-Symbol in Ihrer Browserzeile.</span>
                </p>
                <p class="p1">
                    <span class="s1">Wenn die SSL- bzw. TLS-Verschl??sselung aktiviert ist, k??nnen die Daten, die Sie an
                        uns ??bermitteln, nicht von Dritten mitgelesen werden.</span>
                </p>
                <h4 class="p1">
                    <span class="s1"><b>Auskunft, Sperrung, L??schung</b></span>
                </h4>
                <p class="p1">
                    <span class="s1">Sie haben im Rahmen der geltenden gesetzlichen Bestimmungen jederzeit das Recht auf
                        unentgeltliche Auskunft ??ber Ihre gespeicherten personenbezogenen Daten, deren Herkunft und
                        Empf??nger und den Zweck der Datenverarbeitung und ggf. ein Recht auf Berichtigung, Sperrung oder
                        L??schung dieser Daten. Hierzu sowie zu weiteren Fragen zum Thema personenbezogene Daten k??nnen
                        Sie sich jederzeit unter der im Impressum angegebenen Adresse an uns wenden.</span>
                </p>
                <h4 class="p1">
                    <span class="s1"><b>Widerspruch gegen Werbe-Mails</b></span>
                </h4>
                <p class="p1">
                    <span class="s1">Der Nutzung von im Rahmen der Impressumspflicht ver??ffentlichten Kontaktdaten zur
                        ??bersendung von nicht ausdr??cklich angeforderter Werbung und Informationsmaterialien wird
                        hiermit widersprochen. Die Betreiber der Seiten behalten sich ausdr??cklich rechtliche Schritte
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
                    <span class="s1">Die meisten der von uns verwendeten Cookies sind so genannte ???Session-Cookies???. Sie
                        werden nach Ende Ihres Besuchs automatisch gel??scht. Andere Cookies bleiben auf Ihrem Endger??t
                        gespeichert bis Sie diese l??schen. Diese Cookies erm??glichen es uns, Ihren Browser beim n??chsten
                        Besuch wiederzuerkennen.</span>
                </p>
                <p class="p1">
                    <span class="s1">Sie k??nnen Ihren Browser so einstellen, dass Sie ??ber das Setzen von Cookies
                        informiert werden und Cookies nur im Einzelfall erlauben, die Annahme von Cookies f??r bestimmte
                        F??lle oder generell ausschlie??en sowie das automatische L??schen der Cookies beim Schlie??en des
                        Browser aktivieren. Bei der Deaktivierung von Cookies kann die Funktionalit??t dieser Website
                        eingeschr??nkt sein.</span>
                </p>
                <p class="p1">
                    <span class="s1">Cookies, die zur Durchf??hrung des elektronischen Kommunikationsvorgangs oder zur
                        Bereitstellung bestimmter, von Ihnen erw??nschter Funktionen (z.B. Warenkorbfunktion)
                        erforderlich sind, werden auf Grundlage von Art. 6 Abs. 1 lit. f DSGVO gespeichert. Der
                        Websitebetreiber hat ein berechtigtes Interesse an der Speicherung von Cookies zur technisch
                        fehlerfreien und optimierten Bereitstellung seiner Dienste. Soweit andere Cookies (z.B. Cookies
                        zur Analyse Ihres Surfverhaltens) gespeichert werden, werden diese in dieser
                        Datenschutzerkl??rung gesondert behandelt.</span>
                </p>
                <h4 class="p1">
                    <span class="s1"><b>Server-Log-Dateien</b></span>
                </h4>
                <p class="p1">
                    <span class="s1">Der Provider der Seiten erhebt und speichert automatisch Informationen in so
                        genannten Server-Log-Dateien, die Ihr Browser automatisch an uns ??bermittelt. Dies sind:</span>
                </p>
                <ul class="ul1">
                    <li class="li4"><span class="s5">Browsertyp und Browserversion</span></li>
                    <li class="li4"><span class="s5">verwendetes Betriebssystem</span></li>
                    <li class="li4"><span class="s5">Referrer URL</span></li>
                    <li class="li4"><span class="s5">Hostname des zugreifenden Rechners</span></li>
                    <li class="li4"><span class="s5">Uhrzeit der Serveranfrage</span></li>
                    <li class="li4"><span class="s5">IP-Adresse</span></li>
                </ul>
                <p class="p1"><span class="s1">Eine Zusammenf??hrung dieser Daten mit anderen Datenquellen wird nicht
                        vorgenommen.</span></p>
                <p class="p1"><span class="s1">Grundlage f??r die Datenverarbeitung ist Art. 6 Abs. 1 lit. f DSGVO, der
                        die Verarbeitung von Daten zur Erf??llung eines Vertrags oder vorvertraglicher Ma??nahmen
                        gestattet.</span></p>
                <h4 class="p1"><span class="s1"><b>Kontaktformular</b></span></h4>
                <div class="page" title="Page 1">
                    <div class="layoutArea">
                        <div class="column">
                            <p>Unsere Website bietet an mehreren Stellen die Mo??glichkeit, direkt mit uns in Kontakt zu
                                treten. Mit dem Absenden des Kontaktformulars oder einer Email an uns erkla??ren Sie sich
                                mit der Verarbeitung und Speicherung
                                Ihrer eingegebenen Daten (insbesondere Ihrer E-Mailadresse) einverstanden. Die von Ihnen
                                dabei an uns u??bermittelten Daten verarbeiten wir ausschlie??lich bis zur Erreichung des
                                jeweiligen Zwecks Ihrer Kontaktaufnahme,
                                maximal jedoch bis zu 7 Tage nach Zweckerreichung. Dieser Verarbeitung ko??nnen Sie
                                jederzeit mit Wirkung fu??r die Zukunft widersprechen. Nutzen Sie hierfu??r bitte unsere
                                Kontaktdaten im Impressum.</p>
                            <p>Die Rechtsgrundlage fu??r die Nutzung der von Ihnen durch die Kontaktaufnahme an uns
                                u??bermittelten Daten ist Art. 6 Abs. 1 S. 1 Buchstabe a) DSGVO (Einwilligung der
                                betroffenen Person). Ihre Einwilligung ko??nnen
                                Sie jederzeit mit Wirkung fu??r die Zukunft widerrufen.</p>
                        </div>
                    </div>
                </div>
                <h4 class="p1"><span class="s1"><b>Verarbeiten von Daten (Kunden- und Vertragsdaten)</b></span></h4>
                <p class="p1"><span class="s1">Wir erheben, verarbeiten und nutzen personenbezogene Daten nur, soweit
                        sie f??r die Begr??ndung, inhaltliche Ausgestaltung oder ??nderung des Rechtsverh??ltnisses
                        erforderlich sind (Bestandsdaten). Dies erfolgt auf Grundlage von Art. 6 Abs. 1 lit. b DSGVO,
                        der die Verarbeitung von Daten zur Erf??llung eines Vertrags oder vorvertraglicher Ma??nahmen
                        gestattet. Personenbezogene Daten ??ber die Inanspruchnahme unserer Internetseiten
                        (Nutzungsdaten) erheben, verarbeiten und nutzen wir nur, soweit dies erforderlich ist, um dem
                        Nutzer die Inanspruchnahme des Dienstes zu erm??glichen oder abzurechnen.</span></p>
                <p class="p1"><span class="s1">Die erhobenen Kundendaten werden nach Abschluss des Auftrags oder
                        Beendigung der Gesch??ftsbeziehung gel??scht. Gesetzliche Aufbewahrungsfristen bleiben
                        unber??hrt.</span></p>
                <h3 class="p1" id="analyzingTools"><span class="s1"><b>4. Analyse Tools und Werbung</b></span></h3>
                <p><strong>Nutzung von Google Analytics</strong></p>
                <p>Wir verwenden Google Analytics, um die Website-Nutzung zu analysieren. Die daraus gewonnenen Daten
                    werden genutzt, um unsere Website sowie Werbema??nahmen zu optimieren.</p>
                <p>Google Analytics ist ein Webanalysedienst, der von&nbsp;<em>Google Inc.</em>&nbsp;(1600 Amphitheatre
                    Parkway, Mountain View, CA 94043, United States) betrieben und bereitgestellt wird. Google
                    verarbeitet die Daten zur Website-Nutzung
                    in unserem Auftrag und verpflichtet sich vertraglich zu Ma??nahmen, um die Vertraulichkeit der
                    verarbeiteten Daten zu gew??hrleisten.</p>
                <p>W??hrend Ihres Website-Besuchs werden u.a. folgende Daten aufgezeichnet:</p>
                <ul>
                    <li>Aufgerufene Seiten</li>
                    <li>Die Erreichung von ???Website-Zielen??? (z.B. Kontaktanfragen)</li>
                    <li>Ihr Verhalten auf den Seiten&nbsp;(beispielsweise Klicks, Scroll-Verhalten und Verweildauer)
                    </li>
                    <li>Ihr ungef??hrer Standort (Land und Stadt)</li>
                    <li>Ihre IP-Adresse (in gek??rzter Form, sodass keine eindeutige Zuordnung m??glich ist)</li>
                    <li>Technische Informationen wie Browser, Internetanbieter, Endger??t und Bildschirmaufl??sung</li>
                    <li>Herkunftsquelle Ihres Besuchs (d.h. ??ber welche Website bzw. ??ber welches Werbemittel Sie zu uns
                        gekommen sind)</li>
                </ul>
                <p>Diese Daten werden an einen Server von Google in den USA ??bertragen. Google beachtet dabei die
                    Datenschutzbestimmungen des ???EU-US Privacy Shield???-Abkommens.</p>
                <p>Google Analytics speichert Cookies in Ihrem Webbrowser f??r die Dauer von zwei&nbsp;Jahren seit Ihrem
                    letzten Besuch. Diese Cookies enthaltene eine zufallsgenerierte User-ID, mit der Sie bei zuk??nftigen
                    Website-Besuchen
                    wiedererkannt werden k??nnen.</p>
                <p>Die aufgezeichneten Daten werden zusammen mit der zufallsgenerierten User-ID gespeichert, was die
                    Auswertung pseudonymer Nutzerprofile erm??glicht.&nbsp;Diese nutzerbezogenen Daten werden automatisch
                    nach 14 Monaten gel??scht.&nbsp;Sonstige
                    Daten bleiben in aggregierter Form unbefristet gespeichert.</p>
                <p>Sollten Sie mit der Erfassung nicht einverstanden sein, k??nnen Sie diese mit der einmaligen
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
                <p class="p1"><span class="s1">Wenn Sie in Ihrem YouTube-Account eingeloggt sind, erm??glichen Sie
                        YouTube, Ihr Surfverhalten direkt Ihrem pers??nlichen Profil zuzuordnen. Dies k??nnen Sie
                        verhindern, indem Sie sich aus Ihrem YouTube-Account ausloggen.</span></p>
                <p class="p1"><span class="s1">Die Nutzung von YouTube erfolgt im Interesse einer ansprechenden
                        Darstellung unserer Online-Angebote. Dies stellt ein berechtigtes Interesse im Sinne von Art. 6
                        Abs. 1 lit. f DSGVO dar.</span></p>
                <p class="p1"><span class="s1">Weitere Informationen zum Umgang mit Nutzerdaten finden Sie in der
                        Datenschutzerkl??rung von YouTube unter: <a
                            href="https://www.google.de/intl/de/policies/privacy"><span
                                class="s4">https://www.google.de/intl/de/policies/privacy</span></a>.</span>
                </p>
                <h4 class="p1"><span class="s1"><b>Google Web Fonts</b></span></h4>
                <p class="p1"><span class="s1">Diese Seite nutzt zur einheitlichen Darstellung von Schriftarten so
                        genannte Web Fonts, die von Google bereitgestellt werden. Beim Aufruf einer Seite l??dt Ihr
                        Browser die ben??tigten Web Fonts in ihren Browsercache, um Texte und Schriftarten korrekt
                        anzuzeigen.</span></p>
                <p class="p1"><span class="s1">Zu diesem Zweck muss der von Ihnen verwendete Browser Verbindung zu den
                        Servern von Google aufnehmen. Hierdurch erlangt Google Kenntnis dar??ber, dass ??ber Ihre
                        IP-Adresse unsere Website aufgerufen wurde. Die Nutzung von Google Web Fonts erfolgt im
                        Interesse einer einheitlichen und ansprechenden Darstellung unserer Online-Angebote. Dies stellt
                        ein berechtigtes Interesse im Sinne von Art. 6 Abs. 1 lit. f DSGVO dar.</span></p>
                <p class="p1"><span class="s1">Wenn Ihr Browser Web Fonts nicht unterst??tzt, wird eine Standardschrift
                        von Ihrem Computer genutzt.</span></p>
                <p class="p1"><span class="s1">Weitere Informationen zu Google Web Fonts finden Sie unter <a
                            href="https://developers.google.com/fonts/faq"><span
                                class="s4">https://developers.google.com/fonts/faq</span></a> und in der
                        Datenschutzerkl??rung
                        von Google: <a href="https://www.google.com/policies/privacy/"><span
                                class="s4">https://www.google.com/policies/privacy/</span></a>.</span>
                </p>
                <h4 class="p1"><span class="s1"><b>Google Maps</b></span></h4>
                <p class="p1"><span class="s1">Diese Seite nutzt ??ber eine API den Kartendienst Google Maps. Anbieter
                        ist die Google Inc., 1600 Amphitheatre Parkway, Mountain View, CA 94043, USA.</span></p>
                <p class="p1"><span class="s1">Zur Nutzung der Funktionen von Google Maps ist es notwendig, Ihre IP
                        Adresse zu speichern. Diese Informationen werden in der Regel an einen Server von Google in den
                        USA ??bertragen und dort gespeichert. Der Anbieter dieser Seite hat keinen Einfluss auf diese
                        Daten??bertragung.</span></p>
                <p class="p1"><span class="s1">Die Nutzung von Google Maps erfolgt im Interesse einer ansprechenden
                        Darstellung unserer Online-Angebote und an einer leichten Auffindbarkeit der von uns auf der
                        Website angegebenen Orte. Dies stellt ein berechtigtes Interesse im Sinne von Art. 6 Abs. 1 lit.
                        f DSGVO dar.</span></p>
                <p class="p1"><span class="s1">Mehr Informationen zum Umgang mit Nutzerdaten finden Sie in der
                        Datenschutzerkl??rung von Google: <a href="https://www.google.de/intl/de/policies/privacy/"><span
                                class="s4">https://www.google.de/intl/de/policies/privacy/</span></a>.</span>
                </p>
                <h4 class="p1"><span class="s1"><b>Icons</b></span></h4>
                <p class="p1"><span class="s1">Diese Seite nutzt zur einheitlichen Darstellung Icons, die von
                        verschiedenen Dienstleistern bereitgestellt werden. Beim Aufruf einer Seite l??dt Ihr Browser die
                        entsprechenden Ressourcen, von externen Quellen, um die Icons korrekt anzuzeigen. Zu diesem
                        Zweck muss der von Ihnen verwendete Browser Verbindung zu den Servern der technischen
                        Dienstleister aufnehmen. Hierdurch erlangt der Dienstleister Kenntnis dar??ber, dass ??ber Ihre
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