<?php

use App\PageContent;
use Illuminate\Database\Seeder;

class PageContentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pageContent = new PageContent;
        $pageContent->page_id = 1;
        $pageContent->image = '5.jpg';
        $pageContent->text = '<h1><strong>HERZLICH WILLKOMMEN</strong></h1><h2><strong><span style="color: #000000;">AUF UNSERER WEBSEITE.&nbsp;</span><br /></strong></h2><h3><strong>WIR SIND IHR ANPRECHPARTNER&nbsp;<br />F&Uuml;R LOGISTIK IN DER SCHWEIZ.</strong></h3>';
        $pageContent->page_code_id = 1;
        $pageContent->save();

        $pageContent = new PageContent;
        $pageContent->page_id = 1;
        $pageContent->title = 'Kompetent';
        $pageContent->text = '<p>Unsere Kunden geniessen von unseren Erfahrungen und Fachkenntnissen.</p>';
        $pageContent->page_code_id = 2;
        $pageContent->save();

        $pageContent = new PageContent;
        $pageContent->page_id = 1;
        $pageContent->title = 'Partnerschaftlich';
        $pageContent->text = '<p>Wir pflegen unsere langj&auml;hrigen Partnerschaften und freuen uns auch Sie in Zukunft als unseren Partner und Kunden begr&uuml;ssen zu d&uuml;rfen.</p>';
        $pageContent->page_code_id = 3;
        $pageContent->save();

        $pageContent = new PageContent;
        $pageContent->page_id = 1;
        $pageContent->title = 'Effizient';
        $pageContent->text = '<p>Eine schnelle und umweltfreundliche Lieferung mit unserer Flotte hat bei uns oberste Priorit&auml;t.</p>';
        $pageContent->page_code_id = 4;
        $pageContent->save();

        $pageContent = new PageContent;
        $pageContent->page_id = 2;
        $pageContent->image = '1.jpg';
        $pageContent->text = '<p>Wir besch&auml;ftigen im Moment 16 Fahrzeuge von Lieferwagen bis H&auml;nger Zug und Sattelschlepper f&uuml;r die St&uuml;ckgutverteilung in der Schweiz.</p>
<p>Bedient wird t&auml;glich die ganze Schweiz ausser das Wallis, den Tessin und Graub&uuml;nden. Diese 3 Regionen beliefern wir mit unseren regionalen Partnern innert 48 Stunden.</p>
<ul>
<li>Unser Umschlagslager hat eine Grundfl&auml;che von rund 2000 m2</li>
<li>Zus&auml;tzlich Stellpl&auml;tze in den Regalen 1100 Paletten</li>
<li>B&uuml;hne f&uuml;r Lager oder kommisionier Arbeiten 350 m2</li>
<li>Rampenpl&auml;tze f&uuml;r Kleinfahrzeuge 4</li>
<li>Rampenpl&auml;tze f&uuml;r LKW\'s 15</li>
</ul>
<p>Der komplette Lagerraum ist vom Zollamt Pratteln f&uuml;r externe Spediteure als zugelassener Empf&auml;nger abgenommen und bewilligt.</p>
<p>Gerne erarbeiten wir Ihnen, eine auf Ihre Bed&uuml;rfnisse ausgearbeitete Offerte f&uuml;r unsere Dienstleistungen zur Verf&uuml;gung.</p>';
        $pageContent->page_code_id = 5;
        $pageContent->save();

        $pageContent = new PageContent;
        $pageContent->page_id = 3;
        $pageContent->image = '4.jpg';
        $pageContent->text = '<h1>Kein Weg ist zu schwer</h1>';
        $pageContent->page_code_id = 6;
        $pageContent->save();

        $pageContent = new PageContent;
        $pageContent->page_id = 4;
        $pageContent->image = 'road_sign_rectangal_blank.png';
        $pageContent->title = 'Transport Schweiz';
        $pageContent->text = '';
        $pageContent->page_code_id = 7;
        $pageContent->save();

        $pageContent = new PageContent;
        $pageContent->page_id = 4;
        $pageContent->image = 'road_sign_rectangal_blank.png';
        $pageContent->title = 'Lagerung'; 
        $pageContent->text = '';
        $pageContent->page_code_id = 7;
        $pageContent->save();
    }
}
