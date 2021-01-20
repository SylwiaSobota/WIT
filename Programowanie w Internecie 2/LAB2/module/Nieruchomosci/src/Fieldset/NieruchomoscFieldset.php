<?php

namespace Nieruchomosci\Fieldset;

use Doctrine\Common\Persistence\ObjectManager;
use DoctrineModule\Form\Element\ObjectMultiCheckbox;
use DoctrineModule\Form\Element\ObjectSelect;
use Doctrine\Laminas\Hydrator\DoctrineObject as DoctrineHydrator;
use Nieruchomosci\Entity\Komunikacja;
use Nieruchomosci\Entity\Miasto;
use Nieruchomosci\Entity\Nieruchomosc;
use Laminas\Form\Fieldset;
use Laminas\InputFilter\InputFilterProviderInterface;
use Laminas\Validator\Digits;
use Laminas\I18n\Validator\IsFloat;

class NieruchomoscFieldset extends Fieldset implements InputFilterProviderInterface
{

    public function __construct(ObjectManager $objectManager)
    {
        parent::__construct('nieruchomosc');

        $this->setHydrator(new DoctrineHydrator($objectManager, Nieruchomosc::class))
             ->setObject(new Nieruchomosc());

        $this->add([
            'type' => 'radio',
            'name' => 'typ_oferty',
            'options' => [
                'label' => 'Typ oferty',
                'value_options' => [
                    'S' => 'sprzedaż',
                    'W' => 'wynajem'
                ],
            ],
        ]);
        $this->add([
            'type' => ObjectSelect::class,
            'name' => 'miasto',
            'options' => [
                'label' => 'Miasto',
                'object_manager' => $objectManager,
                'target_class' => Miasto::class,
                'property' => 'nazwa',
                'empty_option' => '-- wybierz --',
            ],
        ]);
        $this->add([
            'type' => 'text',
            'name' => 'powierzchnia',
            'options' => [
                'label' => 'Powierzchnia'
            ],
        ]);
        $this->add([
            'type' => 'text',
            'name' => 'cena',
            'options' => [
                'label' => 'Cena'
            ],
        ]);
        $this->add([
            'type' => 'text',
            'name' => 'cena_m2',
            'options' => [
                'label' => 'Cena m2'
            ],
        ]);
        $this->add([
            'type' => ObjectMultiCheckbox::class,
            'name' => 'opcjekomunikacji',
            'options' => [
                'label' => 'Komunikacja',
                'object_manager' => $objectManager,
                'target_class' => Komunikacja::class,
                'property' => 'nazwa',
            ],
        ]);
    }

    public function getInputFilterSpecification()
    {
        return [
            'typ_oferty' => [
                'required' => true
            ],
            'powierzchnia' => [
                'required' => true,
                'validators' => [
                    new IsFloat(['locale' => 'en']),
                        ['name' => 'GreaterThan', 'options' => ['min' => 0]],
                ]
            ],
            'cena' => [
                'required' => true,
                'validators' => [
                    new Digits(),
                        ['name' => 'GreaterThan', 'options' => ['min' => 0]],
                ]
            ],
            'cena_m2' => [
                'required' => true,
                'validators' => [
                    new Digits(),
                        ['name' => 'GreaterThan', 'options' => ['min' => 0]],
                ]
            ],
            'opcjekomunikacji' => [
                'required' => false,
            ]
        ];
    }

}
