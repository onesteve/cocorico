<?php

/*
 * This file is part of the Cocorico package.
 *
 * (c) Cocolabs SAS <contact@cocolabs.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cocorico\CoreBundle\DataFixtures\ORM;

use Cocorico\PageBundle\Entity\Page;
use Cocorico\PageBundle\Entity\PageTranslation;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class PageFixtures extends Fixture
{

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        //Page Who we are
        $page = new Page();
        $page->setPublished(true);

        $page->translate('en')->setMetaTitle('Who we are?');
        $page->translate('fr')->setMetaTitle('Qui sommes nous?');
        $page->translate('de')->setMetaTitle('Wer sind wir?');

        $page->translate('en')->setTitle('Who we are?');
        $page->translate('fr')->setTitle('Qui sommes nous?');
        $page->translate('de')->setTitle('Wer sind wir?');

        $page->translate('en')->setMetaDescription('in progress');
        $page->translate('fr')->setMetaDescription('en cours');
        $page->translate('de')->setMetaDescription('in bearbeitung');

        $page->translate('en')->setDescription(
            '<p>We are Cocorico of course!</p>
            <h3>What is it?</h3>
            <p>Cocorico is an open source project dedicated to building a powerful (and free) solution for rental and service marketplaces.</p>
            <h3>Who&rsquo;s paying for all of this?</h3>
            <p><a href="http://www.sofracs.com" target="_blank" title="marketplace solution">SOFRACS</a>&nbsp;is. They are a Paris based web agency specialised in building collaborative marketplaces for the rental and service industry. Over the years they decided to share their work by funding the development of Cocorico.</p>
            <h3>What did you use to build Cocorico?</h3>
            <p>Cocorico is based on Symfony 2.</p>
            <h3>Where can I get it?</h3>
            <p>Here: <a target="_blank" href="https://github.com/Cocolabs-SAS/cocorico">https://github.com/Cocolabs-SAS/cocorico</a></p>
            <h3>Do you have a mascot?</h3>
            <p>Here&rsquo;s a video of our cute hen &ldquo;Cocotte&rdquo;: <a href="http://cocorico.rocks/">http://cocorico.rocks/</a></p>
            '
        );
        $page->translate('fr')->setDescription(
            '<p>Nous sommes Cocorico bien s&ucirc;r !</p>
            <h3>Qu&#39;est-ce que c&#39;est?</h3>
            <p>Cocorico est un projet open source d&eacute;di&eacute; &agrave; la r&eacute;alisation d&#39;une solution puissante (et gratuite) pour les places de march&eacute; collaboratives (ou pas &agrave; vrai dire).</p>
            <h3>Qui finance tout &ccedil;a ?</h3>
            <p>La <a href="http://www.sofracs.com" title="création de marketplace">SOFRACS</a>. C&rsquo;est une agence web bas&eacute;e &agrave; Paris sp&eacute;cialis&eacute;e dans la r&eacute;alisation de places de march&eacute; collaboratives de location, de services, et de vente. Au fil des ans, ils ont d&eacute;cid&eacute; de partager leurs connaissances en finan&ccedil;ant le d&eacute;veloppement de Cocorico.</p>
            <h3>Qu&rsquo;utilisez-vous sur Cocorico ?</h3>
            <p>Cocorico utilise Symfony 2.</p>
            <h3>O&ugrave; puis-je l&rsquo;obtenir?</h3>
            <p>Ici : <a target="_blank" href="https://github.com/Cocolabs-SAS/cocorico">https://github.com/Cocolabs-SAS/cocorico</a></p>
            <h3>Avez-vous une mascotte ?</h3>
            <p>Voici une vid&eacute;o de &quot;Cocotte&quot;&nbsp;: <a href="http://cocorico.rocks/">http://cocorico.rocks/</a></p>'
        );
        $page->translate('de')->setDescription(
            '<p>Wir sind nat&uuml;rlich Cocorico!</p>
            <h3>Was ist es?</h3>
            <p>Cocorico ist ein Open-Source-Projekt, das sich zum Ziel gesetzt hat, eine leistungsstarke (und kostenlose) Lösung f&uuml;r Miet- und Servicem&auml;rkte zu entwickeln.</p>
            <h3>Wer bezahlt das alles?</h3>
            <p>Es ist <a href="http://www.sofracs.com" target="_blank" title="marketplace solution">SOFRACS</a>&nbsp;. Sie sind eine in Paris ans&auml;ssige Webagentur, die sich auf den Aufbau von Marktpl&auml;tzen f&uuml;r die Miet- und Dienstleistungsbranche spezialisiert hat. Im Laufe der Jahre beschlossen sie, ihre Arbeit durch die Finanzierung der Entwicklung von Cocorico zu teilen.</p>
            <h3>Was hast du benutzt, um Cocorico zu bauen?</h3>
            <p>Cocorico basiert auf Symfony 2.</p>
            <h3>Wo kann ich das bekommen ?</h3>
            <p>Hier: <a target="_blank" href="https://github.com/Cocolabs-SAS/cocorico">https://github.com/Cocolabs-SAS/cocorico</a></p>
            <h3>Hast du ein Maskottchen?</h3>
            <p>Hier ist ein Video von unserer s&uuml;&szlig;en Henne &ldquo;Cocotte&rdquo;: <a href="http://cocorico.rocks/">http://cocorico.rocks/</a></p>
            '
        );


        //Page How it Works
        $page1 = new Page();
        $page1->setPublished(true);

        $page1->translate('en')->setMetaTitle('How it works?');
        $page1->translate('fr')->setMetaTitle('Comment ca marche?');
        $page1->translate('de')->setMetaTitle('Wie es funktioniert?');

        $page1->translate('en')->setTitle('How it works?');
        $page1->translate('fr')->setTitle('Comment ca marche?');
        $page1->translate('de')->setTitle('Wie es funktioniert?');

        $page1->translate('en')->setMetaDescription('in progress');
        $page1->translate('fr')->setMetaDescription('en cours');
        $page1->translate('de')->setMetaDescription('in bearbeitung');

        $page1->translate('en')->setDescription('in progress');
        $page1->translate('fr')->setDescription('en cours');
        $page1->translate('de')->setDescription('in bearbeitung');

        //Page The team
        $page2 = new Page();
        $page2->setPublished(true);

        $page2->translate('en')->setMetaTitle('The team');
        $page2->translate('fr')->setMetaTitle('L\'équipe');
        $page2->translate('de')->setMetaTitle('Das team');

        $page2->translate('en')->setTitle('The team');
        $page2->translate('fr')->setTitle('L\'équipe');
        $page2->translate('de')->setTitle('Das team');

        $page2->translate('en')->setMetaDescription('in progress');
        $page2->translate('fr')->setMetaDescription('en cours');
        $page2->translate('de')->setMetaDescription('Das team');

        $page2->translate('en')->setDescription('in progress');
        $page2->translate('fr')->setDescription('en cours');
        $page2->translate('de')->setDescription('in bearbeitung');

        //Page FAQ
        $page3 = new Page();
        $page3->setPublished(true);

        $page3->translate('en')->setMetaTitle('FAQ');
        $page3->translate('fr')->setMetaTitle('FAQ');
        $page3->translate('de')->setMetaTitle('FAQ');

        $page3->translate('en')->setTitle('FAQ');
        $page3->translate('fr')->setTitle('FAQ');
        $page3->translate('de')->setTitle('FAQ');

        $page3->translate('en')->setMetaDescription('in progress');
        $page3->translate('fr')->setMetaDescription('en cours');
        $page3->translate('de')->setMetaDescription('in bearbeitung');

        $page3->translate('en')->setDescription('in progress');
        $page3->translate('fr')->setDescription('en cours');
        $page3->translate('de')->setDescription('in bearbeitung');


        //Page Legal notices
        $page4 = new Page();
        $page4->setPublished(true);

        $page4->translate('en')->setMetaTitle('Legal notices');
        $page4->translate('fr')->setMetaTitle('Mentions légales');
        $page4->translate('de')->setMetaTitle('Rechtliche hinweise');

        $page4->translate('en')->setTitle('Legal notices');
        $page4->translate('fr')->setTitle('Mentions légales');
        $page4->translate('de')->setTitle('Rechtliche hinweise');

        $page4->translate('en')->setMetaDescription('in progress');
        $page4->translate('fr')->setMetaDescription('en cours');
        $page4->translate('de')->setMetaDescription('in bearbeitung');

        $page4->translate('en')->setDescription('in progress');
        $page4->translate('fr')->setDescription('en cours');
        $page4->translate('de')->setDescription('in bearbeitung');


        $page5 = new Page();
        $page5->setPublished(true);

        $page5->translate('en')->setMetaTitle('Terms of use');
        $page5->translate('fr')->setMetaTitle('Conditions générales d\'utilisation');
        $page5->translate('de')->setMetaTitle('Nutzungsbedingungen');

        $page5->translate('en')->setTitle('Terms of use');
        $page5->translate('fr')->setTitle('Conditions générales d\'utilisation');
        $page5->translate('de')->setTitle('Nutzungsbedingungen');

        $page5->translate('en')->setMetaDescription('in progress');
        $page5->translate('fr')->setMetaDescription('en cours');
        $page5->translate('de')->setMetaDescription('in bearbeitung');

        $page5->translate('en')->setDescription('in progress');
        $page5->translate('fr')->setDescription('en cours');
        $page5->translate('de')->setDescription('in bearbeitung');

        $manager->persist($page);
        $manager->persist($page1);
        $manager->persist($page2);
        $manager->persist($page3);
        $manager->persist($page4);
        $manager->persist($page5);

        $page->mergeNewTranslations();
        $page1->mergeNewTranslations();
        $page2->mergeNewTranslations();
        $page3->mergeNewTranslations();
        $page4->mergeNewTranslations();
        $page5->mergeNewTranslations();

        $manager->flush();

        /** @var PageTranslation $translation */
        foreach ($page->getTranslations() as $i => $translation) {
            $translation->generateSlug();
        }
        foreach ($page1->getTranslations() as $i => $translation) {
            $translation->generateSlug();
        }
        foreach ($page2->getTranslations() as $i => $translation) {
            $translation->generateSlug();
        }
        foreach ($page3->getTranslations() as $i => $translation) {
            $translation->generateSlug();
        }
        foreach ($page4->getTranslations() as $i => $translation) {
            $translation->generateSlug();
        }
        foreach ($page5->getTranslations() as $i => $translation) {
            $translation->generateSlug();
        }
        $manager->persist($page);
        $manager->persist($page1);
        $manager->persist($page2);
        $manager->persist($page3);
        $manager->persist($page4);
        $manager->persist($page5);

        $manager->flush();

        $this->addReference('who-we-are', $page);
        $this->addReference('how-it-works', $page1);
        $this->addReference('the-team', $page2);
        $this->addReference('faq', $page3);
        $this->addReference('legal-notice', $page4);
        $this->addReference('terms-of-use', $page5);

    }


}
