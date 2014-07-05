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
 * This is built using the Clean template to allow for new theme's using
 * Moodle's new Bootstrap theme engine
 *
 *
 * @package   theme_essential
 * @copyright 2013 Julian Ridden
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/* Core */
$string['configtitle'] = 'Essential';
$string['pluginname'] = 'Essential';
$string['choosereadme'] = '
<div class="clearfix">
<div class="well">
<h2>Essential</h2>
<p><img class=img-polaroid src="essential/pix/screenshot.jpg" /></p>
</div>
<div class="well">
<h3>Over Essential</h3>
<p>Essential is een aangepast Moodle bootstrap thema dat stylen en renderers van haar moeder themas erft.</p>
<h3>Afhankelijkheden</h3>
<p>Dit thema is gebaseerd op het Bootstrap thema welke ontwikkeld is door:<br>
Stuart Lamour, Mark Aberdour, Paul Hibbitts en Mary Evans.</p>
<h3>Thema Credits</h3>
<p>Origineel Auteur: Julian Ridden<br>
Werk in Juli 2014 overgenomen door:<br>
Gareth J. Barnard<br>
David Bezemer<br>
</p>
</div></div>';

/* Algemeen */
$string['genericsettings'] = 'Algemene Instellingen';
$string['autohide'] = 'Schakel automatisch verbergen in';
$string['autohidedesc'] = 'Automatisch verbergen is gemaakt om Moodle minder overweldigend te laten zijn. Wanneer Bewerken is ingeschakeld worden de iconen alleen getoond als hier met de muis over heen gegaan wordt.';
$string['editicons'] = 'Bewerk Iconen V2';
$string['editiconsdesc'] = 'Deze optie schakelt FontAwesome in om gekleurde en beter vormgegeven bewerk iconen te tonen. Momenteel werkt dit niet correct samen met de Automatisch verbergen optie.';
$string['customcss'] = 'Aanvullende CSS';
$string['customcssdesc'] = 'Als er aanvullende CSS vereist is kan dit in het onderstaande tekstvak worden ingevoerd, en zal automatisch op iedere pagina ingevoegd worden.';

$string['footnote'] = 'Voetnoot';
$string['footnotedesc'] = 'Tekst welke in dit veld wordt ingevoegd zal op iedere pagina in de voetnoot worden weergegeven.';
$string['invert'] = 'Navigatie in negatief';
$string['invertdesc'] = 'Wisselt tekst en achtergrond kleur voor de navigatie balk boven in het scherm.';

$string['logo'] = 'Logo';
$string['logodesc'] = 'Upload hier je eigen logo. Indien je een logo upload vervangt dit automatisch het standaard logo en het gekozen icoon.';

$string['fontselect'] = 'Font kiezer';
$string['fontselectdesc'] = 'Kies hier uit de lijst met beschikbare fonts.';
$string['bootstrapcdn'] = 'FontAwesome laden van CDN';
$string['bootstrapcdndesc'] = 'Indien ingeschakeld zal FontAwesome van het Bootstrap CDN geladen worden. Deze optie kan ingeschakeld worden als iconen niet correct worden geladen.';

$string['copyright'] = 'Copyright';
$string['copyrightdesc'] = 'Naam van je organisatie om als copyright houder te tonen.';

$string['profilebarcustomtitle'] = 'Aangepaste profielbalk titel';
$string['profilebarcustomtitledesc'] = 'Voer hier indien gewenst een aangepaste title in voor de profielbalk.';

$string['contactinfo'] = 'Contact informatie';
$string['contactinfodesc'] = 'Voer hier je contact informatie in.';
$string['siteicon'] = 'Site afbeelding';
$string['siteicondesc'] = 'Als je geen logo hebt kun je hier een icoon invullen om op de plaats van het logo te tonen. De volledige lijst staat op <a href="http://fortawesome.github.io/Font-Awesome/cheatsheet/" target="_new">hier</a>. Voer het gedeelte achter "fa-" hier in.';
$string['yourprofile'] = 'Je profiel';
$string['headerprofilepic'] = 'Toon afbeelding van gebruiker';
$string['headerprofilepicdesc'] = 'Indien ingeschakeld wordt de afbeelding van de gebruiker getoond.';

$string['layout'] = 'Gebruik standaard cursus layout';
$string['layoutdesc'] = 'Dit thema is ontwikkeld om beide kolommen met blokken aan ��n kan te tonen. Als je de Moodle standaard prettiger vind kun je deze optie inschakelen om de oude drie kolommen layout terug te krijgen.';
$string['frontpageblocks'] = 'Uitlijning van voorpagina blokken';
$string['frontpageblocksdesc'] = 'Hier kun je de uitlijning van de blokken op de voorpagina kiezen.';
$string['left'] = 'Links';
$string['right'] = 'Rechts';
$string['perfinfo'] = 'Performance informatie';
$string['perfinfodesc'] = 'Voor veel sites is de volledige performance informatie t� veel. Indien ingeschakeld worden minimale gegevens onderaan iedere pagina getoond.';
$string['perf_max'] = 'Gedetailleerd';
$string['perf_min'] = 'Minimaal';
$string['sideregionsmaxwidth'] = 'Beperk maximale breedte voor de blok regio\'s';
$string['sideregionsmaxwidthdesc'] = 'Dit thema heeft een vloeiende breedte. Op brede schermen kunnen de zij blokken groter worden dan gewenst. Door deze optie in te schakelen wordt de maximale breedte beperkt.';
$string['visibleadminonly'] = 'Blokken in deze regio worden alleen aan beheerders getoond';
$string['backtotop'] = 'Naar boven';
$string['nextsection'] = 'Volgende sectie';
$string['previoussection'] = 'Vorige sectie';
$string['pagewidth'] = 'Kies pagina breedte';
$string['pagewidthdesc'] = 'Kies uit de lijst met beschikbare breedtes om de site breedte in te stellen.';
$string['fixedwidthwide'] = 'Vaste breedte - breed';
$string['fixedwidthnarrow'] = 'Vaste breedte - smal';
$string['variablewidth'] = 'Volledige breedte';
$string['alwaysdisplay'] = 'Altijd tonen';
$string['displaybeforelogin'] = 'Alleen voor inloggen tonen';
$string['displayafterlogin'] = 'Alleen na inloggen tonen';
$string['dontdisplay'] = 'Nooit tonen';

/* CustomMenu */
$string['custommenuheading'] = 'Aangepast menu';
$string['custommenuheadingsub'] = 'Voeg additionele functionaliteit toe aan het aangepaste menu.';
$string['custommenudesc'] = 'De instellingen maken het mogelijk om dynamische functionaliteit toe te voegen aan het aangepaste menu (ook bekend als het Dropdown menu).';

$string['mydashboardinfo'] = 'Aangepast gebruikers dashboard';
$string['mydashboardinfodesc'] = 'Toont een lijst met veelgebruikte opties.';
$string['displaymydashboard'] = 'Toon dashboard';
$string['displaymydashboarddesc'] = 'Toon een lijst met dashboard links in het aangepaste menu.';

$string['mycoursesinfo'] = 'Automatische cursus lijst';
$string['mycoursesinfodesc'] = 'Toont een lijst met alle cursussen waar een gebruiker in ingeschreven is.';
$string['displaymycourses'] = 'Toon ingeschreven cursussen';
$string['displaymycoursesdesc'] = 'Toon ingeschreven cursussen in het aangepaste menu.';

$string['mycoursetitle'] = 'Naamgeving';
$string['mycoursetitledesc'] = 'Verander de naamgeving voor het "Mijn cursussen" menu hieronder.';
$string['mycourses'] = 'Mijn cursussen';
$string['myunits'] = 'Mijn lessen';
$string['mymodules'] = 'Mijn modules';
$string['myclasses'] = 'Mijn klassen';
$string['allcourses'] = 'Alle cursussen';
$string['allunits'] = 'Alle lessen';
$string['allmodules'] = 'Alle modules';
$string['allclasses'] = 'Alle klassen';
$string['noenrolments'] = 'Geen cursusinschrijving bekend';

/* My Dashboard custommenu dropdown */
$string['mydashboard'] = 'Mijn dashboard';

/* Navbar Seperator */
$string['navbarsep'] = 'Kruimelpad scheidingsteken';
$string['navbarsepdesc'] = 'Hier kun je het symbool dat gebruikt wordt om het kruimelpad te scheiden aanpassen.';
$string['nav_thinbracket'] = 'Dunne blokhaak';
$string['nav_doublebracket'] = 'Dubbele dunne blokhaak';
$string['nav_thickbracket'] = 'Dikke blokhaak';
$string['nav_slash'] = 'Slash';
$string['nav_pipe'] = 'Verticaal streepje';

/* Regions */
$string['region-side-post'] = 'Rechts';
$string['region-side-pre'] = 'Links';
$string['region-home-left'] = 'Home (links)';
$string['region-home-middle'] = 'Home (midden)';
$string['region-home-right'] = 'Home (rechts)';
$string['region-footer-left'] = 'Voetnoot (links)';
$string['region-footer-middle'] = 'Voetnoot (midden)';
$string['region-footer-right'] = 'Voetnoot (rechts)';
$string['region-hidden-dock'] = 'Verborgen';

/* Colours */
$string['colorheading'] = 'Kleurinstellingen';
$string['colorheadingsub'] = 'Kies hier de kleuren die je in je thema wil gebruiken.';
$string['colordesc'] = 'Hieronder staan de verschillende instellingen om veel van de gebruikte kleuren in dit thema aan te passen.';

$string['slidecolors'] = 'Slideshow kleuren';
$string['slidecolorsdesc'] = 'Verander de kleuren van de slideshow';

$string['footercolors'] = 'Voetnoot kleuren';
$string['footercolorsdesc'] = 'Verander de kleuren van de voetnoot';

$string['themecolor'] = 'Thema kleuren';
$string['themecolordesc'] = 'Welke kleur wil je het thema hebben? Dit heeft invloed op meerdere componenten binnen Moodle en bepaalt de basis kleur voor je thema.';
$string['themehovercolor'] = 'Thema hover kleuren';
$string['themehovercolordesc'] = 'Welke kleuren moeten de hovers in het thema hebben? Dit wordt bijvoorbeeld gebruikt voor links.';
$string['footercolor'] = 'Voetnoot achtergrondkleur';
$string['footercolordesc'] = 'Stel hier de kleur in voor de achtergrond van de voetnoot regio.';
$string['footersepcolor'] = 'Voetnoot scheidingskleur';
$string['footersepcolordesc'] = 'Hier kun je de kleur van de scheidingslijnen instellen.';
$string['footertextcolor'] = 'Voetnoot tekstkleur';
$string['footertextcolordesc'] = 'Stel hier de kleur in van de tekst in de voetnoot.';
$string['footerurlcolor'] = 'Voetnoot link kleur';
$string['footerurlcolordesc'] = 'Stel hier de kleur van de links in de voetnoot in.';
$string['footerhovercolor'] = 'Voetnoot link hover kleur';
$string['footerhovercolordesc'] = 'Stel hier de kleur in voor de links in de voetnoot als je er met de muis op zweeft.';
$string['footerheadingcolor'] = 'Voetnoot titelkleur';
$string['footerheadingcolordesc'] = 'Stel hier de kleur in van de titel van de voetnoot.';
$string['pagebackground'] = 'Pagina achtergrondafbeelding';
$string['pagebackgrounddesc'] = 'Upload hier je achtergrond afbeelding. Deze achtergrond afbeelding zal op alle pagina\'s getoond worden. Als je geen afbeelding upload wordt hier een vaste kleur voor gebruikt.';

/* Alternate Color Switcher */
$string['alternativethemecolors'] = 'Alternatieve themakleur {$a}';
$string['alternativethemecolorsdesc'] = 'Definieer de alternatieve kleurschema\'s.';

$string['enablealternativethemecolors'] = 'Schakel alternatief kleurschema {$a} in';
$string['enablealternativethemecolorsdesc'] = 'Indien ingeschakeld krijgen gebruikers de keuze om alternatief kleurschema {$a}te kiezen.';
$string['alternativecolors'] = 'Alternatieve kleurschema {$a}';
$string['alternativethemecolor'] = 'Alternatieve themakleur {$a}';
$string['alternativethemecolordesc'] = 'Welke kleur moet het thema in alternatief kleurschema {$a} zijn?';
$string['alternativethemename'] = 'Naam voor kleurschema {$a}';
$string['alternativethemenamedesc'] = 'Voer hier de naam van alternatief kleurschema {$a} in.';
$string['alternativethemecolorname'] = 'Naam van alternatief kleurschema {$a}';
$string['alternativethemecolornamedesc'] = 'Geef een herkenbare naam op voor dit alternatieve kleurschema.';
$string['alternativethemehovercolor'] = 'Alternative Theme Hover Colour {$a}';
$string['alternativethemehovercolordesc'] = 'Welke kleur moet er gebruikt worden voor hovers in alternatief kleurschema {$a}?';

/* Frontpage Settings */
$string['frontcontentheading'] = 'Voorpagina instellingen';
$string['frontcontentheadingsub'] = 'Stel hier de verschillende onderdelen voor de voorpagina in.';
$string['frontcontentdesc'] = 'Dit voegt een speciaal blok in tussen de slideshow en de marketing blokken waar je eigen content kan plaatsen.';

$string['usefrontcontent'] = 'Voorpagina content inschakelen';
$string['usefrontcontentdesc'] = 'Indien ingeschakeld wordt de inhoud van dit blok tussen de slidehsow en marketing blokken weergegeven.';

$string['frontcontentarea'] = 'Voorpagina content';
$string['frontcontentareadesc'] = 'De inhoud van dit blik wordt over de gehele breedte van de pagina tussen de slidehsow en marketing blokken weergegeven.';

$string['frontpagemiddleblocks'] = 'Voorpagina midden blokken inschakelen';
$string['frontpagemiddleblocksdesc'] = 'Indien ingeschakeld worden er drie blokken weergegeven onder de marketing blokken.';

/* Slideshow */
$string['slideshowheading'] = 'Voorpagina slideshow';
$string['slideshowheadingsub'] = 'Een dynamische slideshow voor de voorpagina';
$string['slideshowdesc'] = 'Indien ingeschakeld wordt er een dynamische slideshow met maximaal 4 slides getoond om belangrijke informatie aantrekkelijk weer te geven.';

$string['toggleslideshow'] = 'Slideshow inschakelen';
$string['toggleslideshowdesc'] = 'Kies hier of je de slideshow in wil schakelen.';

$string['hideonphone'] = 'Toon slideshow op mobiele appraten';
$string['hideonphonedesc'] = 'Kies hier of je de slideshow ook op mobiele apparaten wil tonen.';
$string['readmore'] = 'Lees verder';

$string['slidecolor'] = 'Slide tekstkleur';
$string['slidecolordesc'] = 'Kies hier de kleur van de hoofdtekst op de slide.';
$string['slideheadercolor'] = 'Slide koptekstkleur';
$string['slideheadercolordesc'] = 'Kies hier de kleur voor de koptekst.';
$string['slidebuttoncolor'] = 'Slide buttonkleur';
$string['slidebuttoncolordesc'] = 'Kies hier de kleur voor de "Lees verder" knop.';

$string['slideshowvariant'] = 'Slideshow ontwerp';
$string['slideshowvariantdesc'] = 'Kies de stijl voor de slideshow.';
$string['slideshow1'] = 'Kleine afbeelding rechts';
$string['slideshow2'] = 'Grote achtergrond afbeelding';

$string['slideshowTitle'] = 'Slideshow';
$string['slideinfodesc'] = 'Personaliseer hier je slides.';
$string['slide1'] = 'Slide 1';
$string['slide2'] = 'Slide 2';
$string['slide3'] = 'Slide 3';
$string['slide4'] = 'Slide 4';
$string['slide5'] = 'Slide 5';

$string['slidetitle'] = 'Slide titel';
$string['slidetitledesc'] = 'Voer een titel in voor je slide.';
$string['slideimage'] = 'Slide afbeelding';
$string['slideimagedesc'] = 'Gebruik hier een transparante png (formaat is 256px x 256px voor de kleine afbeelding, en 300px x 1200px voor de achtergrond afbeelding)';
$string['slidecaption'] = 'Slide tekst';
$string['slidecaptiondesc'] = 'Voer hier de tekst in die op de slide getoond zal worden.';
$string['slideurl'] = 'Slide link';
$string['slideurldesc'] = 'Voer hier in waar de link achter "Verder lezen" naar moet verwijzen.';
$string['slideurltarget'] = 'Link doel';
$string['slideurltargetdesc'] = 'Voer hier in hoe de link geopend moet worden';
$string['slideurltargetself'] = 'Open in huidige pagina';
$string['slideurltargetnew'] = 'Open in nieuwe pagina';
$string['slideurltargetparent'] = 'Open in hoofdframe';

/* Marketing Spots */
$string['marketingheading'] = 'Marketing blokken';
$string['marketinginfodesc'] = 'Configureer hier de marketing blokken.';
$string['marketingheadingsub'] = 'De marketing blokken zijn drie blokken op de voorpagina waarin informatie en links getoond worden.';
$string['marketingheight'] = 'Hoogte van de marketing afbeeldingen';
$string['marketingheightdesc'] = 'Als je afbeeldingen wil tonen in de marketing blokken kun je hier de hoogte instellen.';
$string['marketingdesc'] = 'Dit thema bevat de optie om drie marketing blokken te tonen onder de slideshow. Dit geeft je de mogelijkheid om direct informatie te tonen aan gebruikers, ook zonder dat deze ingelogd zijn. Dit is handig voor als je specifieke cursussen wil uitlichten.';

$string['togglemarketing'] = 'Marketing blokken inschakelen';
$string['togglemarketingdesc'] = 'Kies hier of je de marketing blokken wil tonen.';

$string['marketing1'] = 'Marketing blok 1';
$string['marketing2'] = 'Marketing blok 2';
$string['marketing3'] = 'Marketing blok 3';

$string['marketingtitle'] = 'Titel';
$string['marketingtitledesc'] = 'Marketing blok titel.';
$string['marketingicon'] = 'Icoon';
$string['marketingicondesc'] = 'Naam van het iccon dat je wil gebruiken. Kies uit de lijst <a href="http://fortawesome.github.io/Font-Awesome/cheatsheet/" target="_new">hier</a>. Voor de naam in achter "fa-", bijvoorbeeld "star".';
$string['marketingimage'] = 'Afbeelding';
$string['marketingimagedesc'] = 'This provides the option of displaying an image above the text in the marketing spot';
$string['marketingcontent'] = 'Content';
$string['marketingcontentdesc'] = 'Content to display in the marketing box. Keep it short and sweet.';
$string['marketingbuttontext'] = 'Link Text';
$string['marketingbuttontextdesc'] = 'Text to appear on the button.';
$string['marketingbuttonurl'] = 'Link URL';
$string['marketingbuttonurldesc'] = 'URL the button will point to.';

/* Social Networks */
$string['socialheading'] = 'Social Networking';
$string['socialheadingsub'] = 'Engage your users with Social Networking';
$string['socialdesc'] = 'Provide direct links to the core social networks that promote your brand.  These will appear in the header of every page.';
$string['socialnetworks'] = 'Social Networks';
$string['facebook'] = 'Facebook URL';
$string['facebookdesc'] = 'Enter the URL of your Facebook page. (i.e http://www.facebook.com/mycollege)';

$string['twitter'] = 'Twitter URL';
$string['twitterdesc'] = 'Enter the URL of your Twitter feed. (i.e http://www.twitter.com/mycollege)';

$string['googleplus'] = 'Google+ URL';
$string['googleplusdesc'] = 'Enter the URL of your Google+ profile. (i.e http://plus.google.com/107817105228930159735)';

$string['linkedin'] = 'LinkedIn URL';
$string['linkedindesc'] = 'Enter the URL of your LinkedIn profile. (i.e http://www.linkedin.com/company/mycollege)';

$string['youtube'] = 'YouTube URL';
$string['youtubedesc'] = 'Enter the URL of your YouTube channel. (i.e http://www.youtube.com/mycollege)';

$string['flickr'] = 'Flickr URL';
$string['flickrdesc'] = 'Enter the URL of your Flickr page. (i.e http://www.flickr.com/mycollege)';

$string['vk'] = 'VKontakte URL';
$string['vkdesc'] = 'Enter the URL of your Vkontakte page. (i.e http://www.vk.com/mycollege)';

$string['skype'] = 'Skype Account';
$string['skypedesc'] = 'Enter the Skype username of your organisations Skype account';

$string['pinterest'] = 'Pinterest URL';
$string['pinterestdesc'] = 'Enter the URL of your Pinterest page. (i.e http://pinterest.com/mycollege)';

$string['instagram'] = 'Instagram URL';
$string['instagramdesc'] = 'Enter the URL of your Instagram page. (i.e http://instagram.com/mycollege)';

$string['website'] = 'Website URL';
$string['websitedesc'] = 'Enter the URL of your own website. (i.e http://www.pukunui.com)';

/* Category Icons */
$string['categoryiconheading'] = 'Icon based Category Display';
$string['categoryiconheadingsub'] = 'Use icons to represent your categories';
$string['categoryicondesc'] = 'If enabled this will allow you to set icons for each category of course.';

$string['usecategoryicon'] = 'Enable Category Icons';
$string['usecategoryicondesc'] = 'Use custom icons for categories';

$string['defaultcategoryicon'] = 'Default Category Icons';
$string['defaultcategoryicondesc'] = 'Set a default category icon';

$string['categoryiconinfo'] = 'Set Custom Category Icons';
$string['categoryiconinfodesc'] = 'Each icon is set by "category ID". You get these by looking at the URL or each category.';

$string['categoryicon'] = 'Category';

/* Mobile Apps */
$string['mobileappsheading'] = 'Mobile Apps';
$string['mobileappsheadingsub'] = 'Link to your App to get your students using Mobiles';
$string['mobileappsdesc'] = 'Have you got a web app on the App Store or Google Play Store?  Provide a link here so your users can grab the apps online';

$string['android'] = 'Android (Google Play)';
$string['androiddesc'] = 'Prove a URL to your mobile App on the Google Play Store.  If you do not have one of your own maybe consider linking to the free official Moodle Mobile app.';

$string['ios'] = 'iPhone/iPad (App Store)';
$string['iosdesc'] = 'Prove a URL to your mobile App on the App Store.  If you do not have one of your own maybe consider linking to the free official Moodle Mobile app.';

/* iOS Icons */
$string['iosicon'] = 'iOS Homescreen Icons';
$string['iosicondesc'] = 'The them does provide a default icon for iOS and android homescreens. You can upload your custom icons if you wish.';

$string['iphoneicon'] = 'iPhone/iPod Touch Icon (Non Retina)';
$string['iphoneicondesc'] = 'Icon should be a PNG files sized 57px by 57px';

$string['iphoneretinaicon'] = 'iPhone/iPod Touch Icon (Retina)';
$string['iphoneretinaicondesc'] = 'Icon should be a PNG files sized 114px by 114px';

$string['ipadicon'] = 'iPad Icon (Non Retina)';
$string['ipadicondesc'] = 'Icon should be a PNG files sized 72px by 72px';

$string['ipadretinaicon'] = 'iPad Icon (Retina)';
$string['ipadretinaicondesc'] = 'Icon should be a PNG files sized 144px by 144px';

/* Google Analytics */
$string['analyticsheading'] = 'Google Analytics';
$string['analyticsheadingsub'] = 'Powerful analytics from Google';
$string['analyticsdesc'] = 'Here you can enable Google Analytics for your moodle site. You will need to sign up for a free account at the Google Analytics site (<a href="http://analytics.google.com" target="_blank">http://analytics.google.com</a>)';

$string['useanalytics'] = 'Enable Google Analytics';
$string['useanalyticsdesc'] = 'Enable or disable Google analytics functionaliy.';

$string['analyticsid'] = 'Your Tracking ID';
$string['analyticsiddesc'] = 'Enter the provided Tracking ID. Typically formatted like UA-XXXXXXXX-X';

$string['analyticsclean'] = 'Send Clean URLs';
$string['analyticscleandesc'] = 'This fantastic feature was created by <a href="https://moodle.org/user/profile.php?id=281671" target="_blank">Gavin Henrick</a> and <a href="https://moodle.org/user/view.php?id=907814" target="_blank">Bas Brands</a> and is implemented in this theme. Rather than standard Moodle URLs the theme will send out clean URLs making it easier to identify the page and provide advanced reporting. More information on using this feature and its uses can be <b><a href="http://www.somerandomthoughts.com/blog/2012/04/18/ireland-uk-moodlemoot-analytics-to-the-front/" target="_blank">found here</a></b>.';

/* Alerts */
$string['alertsheading'] = 'User Alerts';
$string['alertsheadingsub'] = 'Display important messages to your users on the frontpage';
$string['alertsdesc'] = 'This will display an alert (or multiple) in three different styles to your users on the Moodle frontpage. Please remember to disable these when no longer needed.';

$string['enablealert'] = 'Enable Alert';
$string['enablealertdesc'] = 'Enable or disable alerts';

$string['alert1'] = 'First Alert';
$string['alert2'] = 'Second Alert';
$string['alert3'] = 'Third Alert';

$string['alerttitle'] = 'Title';
$string['alerttitledesc'] = 'Main title/heading for your alert';

$string['alerttype'] = 'Level';
$string['alerttypedesc'] = 'Set the appropriate alert level/type to best inform your users';

$string['alerttext'] = 'Alert Text';
$string['alerttextdesc'] = 'What is the text you wish to display in your alert';

$string['alert_info'] = 'Information';
$string['alert_warning'] = 'Warning';
$string['alert_general'] = 'Announcement';

$string['ie7message'] = '<p id="ie7message">Sorry, this site requires <strong>Internet Explorer 8</strong> or higher to display and function correctly.  Please update your browser via Windows Update, or <a href="http://windows.microsoft.com/en-au/internet-explorer/download-ie" target="_blank">download the latest version here</a>.  Alternatively, you can try installing the <a href="http://www.google.com/chromeframe" target="_blank">ChromeFrame plugin</a> which may solve some of the issues experienced in older browsers.  If using IE8 or above you may have Compatibility Mode switched on, turn this off to display this website correctly.  If you continue having problems accessing this website or the updates mentioned above, please contact your Helpdesk for further assistance.</p>';