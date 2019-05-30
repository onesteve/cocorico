<?php


namespace Cocorico\CoreBundle\Event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ListingFormSubscriber implements EventSubscriberInterface
{
    /**
     * Add ISBN field
     *
     * @param ListingFormBuilderEvent $event
     * @throws \Exception
     */
    public function onListingNewFormBuild(ListingFormBuilderEvent $event)
    {
        $form = $event->getFormBuilder();

        $form->add(
            'isbn',
            TextType::class,
            array(
                'label' => 'ISBN',
                'mapped' => false,
            )
        );
    }


    public static function getSubscribedEvents()
    {
        return array(
            ListingFormEvents::LISTING_NEW_FORM_BUILD => array('onListingNewFormBuild', 1),
        );
    }

}