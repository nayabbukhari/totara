<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'scorm', language 'sv', branch 'MOODLE_22_STABLE'
 *
 * @package   scorm
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activation'] = 'Aktivering';
$string['activityloading'] = 'Du kommer automatiskt att bli vidarekopplad till aktiviteten i ';
$string['activitypleasewait'] = 'Aktiviteten laddas, var snäll och vänta...';
$string['advanced'] = 'Avancerad';
$string['allowapidebug'] = 'Aktivera debugging och spårning av API (ställ in "fånga in"-maskaren med apidebugmask)';
$string['allowtypeexternal'] = 'Aktivera paket av extern typ';
$string['allowtypeimsrepository'] = 'Aktivera typen IMS-paket';
$string['allowtypelocalsync'] = 'Aktivera nedladdad pakettyp';
$string['apidebugmask'] = ' "Fånga in"-maskare för API  - använd ett enkelt regex på <username>:<activityname> t ex admin:.* det kommer att debugga endast för admin användare';
$string['areacontent'] = 'Innehållsfiler';
$string['areapackage'] = 'Paketfil';
$string['asset'] = 'Tillgång';
$string['assetlaunched'] = 'Tillgång - visad';
$string['attempt'] = 'försök';
$string['attempt1'] = '1 försök';
$string['attempts'] = 'Försök';
$string['attemptsx'] = '{$a} försök';
$string['attr_error'] = 'Olämpligt värde för attributet ({$a->attr}) i taggen {$a->tag}.';
$string['autocontinue'] = 'Fortsätt automatiskt';
$string['autocontinuedesc'] = 'Det här alternativet anger standard för automatisk fortsättning för aktiviteten. ';
$string['autocontinue_help'] = '<p><b>Forts&auml;tt automatiskt</b></p>

<p>Om "Forts&auml;tt automatiskt" &auml;r aktiverat (Ja) s&aring; kommer n&auml;sta tillg&auml;ngliga SCORM att automatiskt startas n&auml;r  den f&ouml;reg&aring;ende &auml;r slutf&ouml;rd.</p>

<p>Om detta inte &auml;r aktiverat (Nej) m&aring;ste anv&auml;ndaren sj&auml;lv anv&auml;nda knappen "Forts&auml;tt" f&ouml;r att g&aring; vidare. </p>';
$string['averageattempt'] = 'Medel av försök';
$string['badmanifest'] = 'Några fel med manifestet: se loggarna över fel';
$string['badpackage'] = 'Det angivna paketet/manifestet är inte giltigt. Kontrollera det och försök igen.';
$string['browse'] = 'Bläddra';
$string['browsed'] = 'Genombläddrad';
$string['browsemode'] = 'Läge för förhandsgranskning';
$string['browserepository'] = 'Bläddra i arkivet';
$string['cannotfindsco'] = 'Det gick inte att hitta någon SCO. ';
$string['chooseapacket'] = 'Välj eller uppdatera ett SCORM-paket';
$string['completed'] = 'Slutfört';
$string['confirmloosetracks'] = 'Varning! Paketet verkar ha blivit ändrat eller modifierat. Om strukturen på paketet har ändrats så kan vissa användares spår komma att gå förlorade under uppdateringsprocessen.';
$string['contents'] = 'Innehåll';
$string['coursepacket'] = 'Kurspaket';
$string['coursestruct'] = 'Struktur på kurs';
$string['currentwindow'] = 'Aktuellt fönster';
$string['datadir'] = 'Fel i filsystemet: det går inte att skapa en datakatalog för kursen';
$string['deleteallattempts'] = 'Ta bort alla fösök på SCORM';
$string['deleteattemptcheck'] = 'Är Du helt säker på att Du vill ta bort de här försöken helt och hållet?';
$string['details'] = 'Detaljerad SCO spårning';
$string['directories'] = 'Visa katalogens länkar';
$string['display'] = 'Visa';
$string['displayattemptstatus'] = 'Visa status angående försök';
$string['displayattemptstatusdesc'] = 'Det här alternativet anger hur status angående försök ska visas. ';
$string['displayattemptstatus_help'] = 'Om detta är aktiverat så kommer resultat och betyg för försök att visas på "outline"-sidan för SCORM. ';
$string['displaycoursestructure'] = 'Visa kursens struktur på ingångssidan';
$string['displaycoursestructuredesc'] = 'Det här alternativet anger hur(uvida) kursstrukturen ska visas på ingångssidan (eller inte). ';
$string['displaycoursestructure_help'] = 'Om detta är aktiverat så kommer tabellen över innehåll att visas på "outline"-sidan för SCORM. ';
$string['displaydesc'] = 'Det här alternativet anger huruvida paketet för en viss aktivitet ska ska visas eller inte.';
$string['domxml'] = 'DOMXML externt bibliotek';
$string['duedate'] = 'Sista inskickningsdatum';
$string['element'] = 'Element';
$string['enter'] = 'Mata in';
$string['entercourse'] = 'Mata in en SCORM-kurs';
$string['errorlogs'] = 'Logg över fel';
$string['everyday'] = 'Varje dag';
$string['everytime'] = 'Varje gång som det används';
$string['exceededmaxattempts'] = 'Du har redan använt samtliga tillåtna försök.';
$string['exit'] = 'Avsluta SCORM-kurs';
$string['exitactivity'] = 'Avsluta aktivitet';
$string['expired'] = 'Den här aktiviteten är tyvärr avslutad den {$a} och den är inte längre tillgänglig';
$string['external'] = 'Tajming för uppdatering av externa paket';
$string['failed'] = 'Det fungerade inte';
$string['finishscorm'] = 'Om Du är färdig med visningen av den här resursen, {$a}';
$string['finishscormlinkname'] = 'klicka här för att återgå till kurssidan';
$string['firstaccess'] = 'Första tillfället att använda';
$string['firstattempt'] = 'Första försöket';
$string['forcecompleted'] = 'Framtvinga ett fullföljande';
$string['forcecompleteddesc'] = 'Det här alternativet anger huruvida framtvingande av fullföljande ska gälla eller inte';
$string['forcejavascript'] = 'Tvinga användarna att aktivera JavaScript';
$string['forcenewattempt'] = 'Framtvinga ett nytt försök';
$string['forcenewattemptdesc'] = 'Det här alternativet anger vad som ska gälla angående framtvingande av nytt försök.';
$string['found'] = 'Manifestet hittades';
$string['frameheight'] = 'Det här alternativet ställer in höjden på ramen på en SCO';
$string['framewidth'] = 'Den här inställningen avgör standardbredden på en SCO-ram';
$string['fullscreen'] = 'Fyll hela skärmen';
$string['general'] = 'Allmänna data';
$string['gradeaverage'] = 'Medelbetyg/omdöme';
$string['gradeforattempt'] = 'Betyg/omdöme för försök';
$string['gradehighest'] = 'Högsta betyg/omdöme';
$string['grademethod'] = 'Metod för betyg/omdömen';
$string['grademethoddesc'] = 'Det här alternativet anger vilken metod för betygssättning som ska gälla för en aktivitet.';
$string['grademethod_help'] = 'De resultat av en SCORM/AICC aktivitet som visas på sidan för betyg kan graderas med många olika mått:

* Lärobjekt - Antalet genomförda/godkända lärobjekt för aktiviteten. Maxvärdet är det totala antalet lärobjekt.
* Högsta betyget - Det högsta resultat som har uppnåtts av användare i alla godkända lärobjekt.
* Medelbetyg - Medelvärdet av alla resultat.
* Sammanlagt betyg - Alla resultat läggs ihop. ';
$string['gradescoes'] = 'Lärobjekt ';
$string['gradesum'] = 'Summera betyg/omdöme(n)';
$string['height'] = 'Höjd';
$string['hidden'] = 'Dold';
$string['hidebrowse'] = 'Dölj knappen för förhandsgranskning';
$string['hidebrowsedesc'] = 'Det här alternativet anger huruvida läget för förhandsgranskning ska aktiveras eller inte.';
$string['hidebrowse_help'] = '<p>Om det här alternativet är inställt till "Ja" så kommer  knappen Förhandsgranska sidan för visning av ett SCORM/AICC-paket att döljas.</p>

<p>Studenterna/eleverna/deltagarna/de lärande kan välja att förhandsgranska aktiviteten eller försöka att genomföra den på normalt sätt. </p>

<p>När ett lärobjekt är förhandsgranskat så kommer det att markeras med  <img src="<?php echo $CFG->wwwroot.\'/mod/scorm/pix/browsed.gif\' ?>" alt="<?php print_string(\'browsed\',\'scorm\') ?>" title="<?php print_string(\'browsed\',\'scorm\') ?>" /> ikonen för "förhandsgranskat".</p>';
$string['hideexit'] = 'Dölj länken \'avsluta\'';
$string['hidenav'] = 'Dölj knapparna för navigation';
$string['hidenavdesc'] = 'Det här alternativet anger huruvida knapparna för navigation ska visas eller inte. ';
$string['hidereview'] = 'Dölj knappen \'Visa igen\'';
$string['hidetoc'] = 'Visa inte kursstrukturen i spelarens fönster';
$string['hidetocdesc'] = 'Det här alternativet anger huruvida kursstrukturen (Innehållet) ska visas i SCORM-spelaren eller inte. ';
$string['highestattempt'] = 'Högsta försöket';
$string['identifier'] = 'Identifierare för fråga';
$string['incomplete'] = 'Inte komplett';
$string['info'] = 'Info';
$string['interactions'] = 'Interaktioner';
$string['last'] = 'Senaste åtkomst den';
$string['lastaccess'] = 'Senaste tillfället att använda';
$string['lastattempt'] = 'Senaste försöket';
$string['lastattemptlock'] = 'Lås efter det sista försöket';
$string['lastattemptlockdesc'] = 'Det här alternativet anger standardvärdet för låsningen efter det avslutande försöket. ';
$string['location'] = 'Visa en rad som visar placeringen';
$string['max'] = 'Max resultat';
$string['maximumattempts'] = 'Antal försök';
$string['maximumattempts_help'] = '<p>Här anger du det antal försök som användarna får göra<br />Det fungerar bara med SCORM1.2- och AICC-paket. SCORM2004 har ett eget sätt att definiera max antal försök.</p>';
$string['maximumgradedesc'] = 'Det här alternativet anger maxbetyget för en aktivitet. ';
$string['menubar'] = 'Visa menyraden';
$string['min'] = 'Min resultat';
$string['missing_attribute'] = 'Saknat attribut {$a->attr} i taggen {$a->tag}';
$string['missingparam'] = 'Ett element som är obligatoriskt saknas eller felaktigt.';
$string['missing_tag'] = 'Saknad tagg {$a->tag}';
$string['mode'] = 'Läge';
$string['modulename'] = 'Scormpaket';
$string['modulenameplural'] = 'Scormpaket (flera)';
$string['navigation'] = 'Navigation';
$string['newattempt'] = 'Påbörja ett nytt försök';
$string['next'] = 'Fortsätt';
$string['noactivity'] = 'Inget att rapportera';
$string['noattemptsallowed'] = 'Antal tillåtna försök';
$string['noattemptsmade'] = 'Antal försök som Du har genomfört';
$string['no_attributes'] = 'Taggen {$a->tag} måste ha attribut';
$string['no_children'] = 'Taggen {$a->tag} måste ha barn';
$string['nolimit'] = 'Obegränsade försök';
$string['nomanifest'] = 'Kunde inte hitta manifest';
$string['noprerequisites'] = 'Du har tyvärr inte uppnått tillräckligt många av förkunskapskraven för att få tillgång till det här lärobjektet.';
$string['noreports'] = 'Ingen rapport att visa';
$string['normal'] = 'Normal';
$string['noscriptnoscorm'] = 'Din webbläsare stödjer inte javaskript eller så är javaskript inte aktiverat. Därför är det inte säkert att data från det här SCORM-paketet kommer att spelas upp eller sparas på ett korrekt sätt.';
$string['notattempted'] = 'Inget försök';
$string['not_corr_type'] = 'Felaktig matchning av datatyp för taggen  {$a->tag}';
$string['objectives'] = 'Mål';
$string['onchanges'] = 'Närhelst som det ändras';
$string['optallstudents'] = 'alla användare';
$string['optattemptsonly'] = 'endast användare som gjort försök';
$string['options'] = 'Alternativ (inte tillgängliga i alla typer av webbläsare)';
$string['optnoattemptsonly'] = 'Endast användare som inte har gjort några försök';
$string['organization'] = 'Organisation';
$string['organizations'] = 'Organisationer';
$string['othersettings'] = 'Kompletterande inställningar';
$string['othertracks'] = 'Andra spår';
$string['package'] = 'Paketfil';
$string['packagedir'] = 'Fel i filsystemet: det går inte att skapa en katalog för paketet';
$string['packagefile'] = 'Ingen paketfil har angivits';
$string['package_help'] = '<p><b>Paketfiler</b></p>

<p>Paketet &auml;r en specifik fil med ett <b>zip</b> (eller pif) som filnamnstill&auml;gg och som inneh&aring;ller giltiga filer som definierar kurser av typen AICC eller SCORM.</p>

<p>Ett <b>SCORM</b> paket m&aring;ste inneh&aring;lla en fil med namnet  <b>imsmanifest.xml</b > som ska ligga i roten p&aring; den zippade filen. Imsmanifestet inneh&aring;ller en beskrivning av SCORM-kursens struktur, placeringen av resurser och m&aring;nga andra saker.</p>

<p>Ett <b>AICC</b>-paket definieras  av &aring;tskilliga filer (mellan 4 och 7) med definierade filnamnstill&auml;gg.
   H&auml;r kan Du se vad filnamnstill&auml;ggen betyder:</p>
   <ul>
	<li>CRS - \'Course Description file\' - fil som beskriver kursen (obligatorisk)</li>
	<li>AU  - \'Assignable Unit file\' (obligatorisk)</li>
	<li>DES - \'Descriptor file\' (obligatorisk)</li>
	<li>CST - \'Course Structure file\' - fil som beskriver kursens struktur (obligatorisk)</li>
	<li>ORE - \'Objective Relationship file\' - fil f&ouml;r relationer mellan m&aring;l(valfritt)</li>
	<li>PRE - \'Prerequisites file\' - fil f&ouml;r f&ouml;rkunskaper (valfritt)</li>
	<li>CMP - \'Completition Requirements file\' - fil som inneh&aring;ller krav p&aring; fullf&ouml;ljande  (valfritt)</li>
   </ul>';
$string['packageurl'] = 'URL';
$string['pagesize'] = 'Storlek på sida';
$string['passed'] = 'Genomförd';
$string['php5'] = 'PHP 5 (DOMXML ursprungligt (native) bibliotek)';
$string['pluginadministration'] = 'Administration av SCORM/AICC';
$string['pluginname'] = 'SCORM-paket';
$string['popup'] = 'Öppna den aktuella SCO i ett nytt fönster';
$string['popupmenu'] = 'I en nedrulllningsmeny';
$string['popupopen'] = 'Öppna paketet i ett nytt fönster';
$string['position_error'] = '{$a->tag} taggen kan inte vara "child" till {$a->parent} taggen';
$string['preferencespage'] = 'Preferenser endast för denna sida';
$string['preferencesuser'] = 'Preferenser för den här rapporten';
$string['prev'] = 'Föregående';
$string['raw'] = 'Råa data för resultat';
$string['regular'] = 'Normalt manifest';
$string['report'] = 'Rapport';
$string['reportcountattempts'] = '{$a->nbresults} resultat ({$a->nbusers} users)';
$string['resizable'] = 'Tillåt användaren att ändra storleken på fönstret';
$string['result'] = 'Resultat';
$string['results'] = 'Resultat';
$string['review'] = 'Visa igen';
$string['reviewmode'] = 'Läge för granskning';
$string['scoes'] = 'Lärobjekt';
$string['score'] = 'Resultat';
$string['scormclose'] = 'Tills';
$string['scormcourse'] = 'Lärokurs';
$string['scorm:deleteresponses'] = 'Ta bort försök med SCORM';
$string['scormloggingoff'] = 'Loggning av API är avaktiverat';
$string['scormloggingon'] = 'Loggning av API är aktiverat';
$string['scormopen'] = 'Öppen';
$string['scormresponsedeleted'] = 'Tog bort försök  av användare';
$string['scorm:savetrack'] = 'Spara spårning';
$string['scorm:skipview'] = 'Hoppa över översikten';
$string['scormtype'] = 'Typ';
$string['scorm:viewreport'] = 'Visa rapporter';
$string['scorm:viewscores'] = 'Visa resultat';
$string['scrollbars'] = 'Tillåt användaren att rulla fönstret';
$string['selectall'] = 'Välj alla';
$string['selectnone'] = 'Avmarkera alla';
$string['show'] = 'Visa';
$string['sided'] = 'På sidan';
$string['skipview'] = 'Student kan hoppa över sidan som visar innehållets struktur';
$string['skipview_help'] = '<p>Om du lägger till ett paket med bara ett lärobjekt i så kan du välja att automatiskt hoppa över sidan som visar strukturen på innehållet när användare klickar på en SCORM-aktivitet på kursens sida.</p>

<p>Du kan välja:</p>

   <ul>
       <li> Hoppa <strong>Aldrig</strong> över sidan som visar strukturen på innehållet.</li> 
       <li> hoppa över sidan som visar strukturen på innehållet endast <strong>Vid första visningen</strong> (den första gången som användaren visar SCORM-paketet).</li> 
       <li> Hoppa <strong>Alltid</strong> över sidan som visar strukturen på innehållet.</li> 
   </ul>';
$string['stagesize'] = 'Storlek på ram/fönster';
$string['stagesize_help'] = '<p>De här två inställningarna definierar höjden och bredden på ramen för lärobjektet.</p>';
$string['started'] = 'Storlek på scen';
$string['status'] = 'Status';
$string['statusbar'] = 'Visa statusraden';
$string['student_response'] = 'Svarsreaktion';
$string['suspended'] = 'Avstängd';
$string['syntax'] = 'Syntaxfel';
$string['tag_error'] = 'Okänd tagg ({$a->tag}) med detta innehåll: {$a->value}';
$string['time'] = 'Tid';
$string['title'] = 'Titel';
$string['toc'] = 'Innehåll';
$string['toolbar'] = 'Visa verktygsraden';
$string['too_many_attributes'] = 'Taggen {$a->tag} har för många attribut';
$string['too_many_children'] = 'Taggen {$a->tag} har för många barn';
$string['totaltime'] = 'Tid';
$string['trackingloose'] = 'VARNING: spårningsdata till detta SCORM-paket kommer att försvinna!';
$string['type'] = 'Typ';
$string['unziperror'] = 'Ett fel inträffade i samband med att paketet skulle packas upp.';
$string['updatefreq'] = 'Intervall då automatisk uppdatering ska ske';
$string['validateascorm'] = 'Validera ett SCORM-paket';
$string['validation'] = 'Resultat av validering';
$string['validationtype'] = 'Den här inställningen innebär att  DOMXML-biblioteket används för att validera SCORM-manifesten. Om Du inte vet hur du ska göra så behåll det markerade valet.';
$string['value'] = 'Värde';
$string['versionwarning'] = 'Den här versionen av manifestet är äldre än 1.3, varning vid {$a->tag} taggen';
$string['viewallreports'] = 'Visa rapporter för {$a} försök';
$string['viewalluserreports'] = 'Visa rapporter för {$a} användare';
$string['whatgrade'] = 'Bedömning/betygssättning av försök';
$string['whatgrade_help'] = '<p>När du tillåter att användare att göra flera försök så kan du välja hur du ska använda resultatet av försöken när de ska infogas i betygskatalogen.</p>';
$string['width'] = 'Bredd';
$string['window'] = 'ram/fönster';