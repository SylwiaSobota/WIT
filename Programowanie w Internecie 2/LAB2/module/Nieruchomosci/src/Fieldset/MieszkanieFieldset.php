<?php

namespace Nieruchomosci\Fieldset;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Laminas\Hydrator\DoctrineObject as DoctrineHydrator;
use Nieruchomosci\Entity\Mieszkanie;
use Laminas\Form\Fieldset;
use Laminas\InputFilter\InputFilterProviderInterface;
use Laminas\Validator\Digits;

class MieszkanieFieldset extends Fieldset implements InputFilterProviderInterface
{
    public function __construct(ObjectManager $objectManager)
    {
        parent::__construct('mieszkanie');

        $this->setHydrator(new DoctrineHydrator($objectManager, Mieszkanie::class))
             ->setObject(new Mieszkanie());

        $nieruchomoscFieldset = new NieruchomoscFieldset($objectManager);
        $this->add($nieruchomoscFieldset);

        $this->add([
            'type' => 'text',
            'name' => 'pietro',
            'options' => [
                'label' => 'Piętro'
            ],
        ]);
        $this->add([
            'type' => 'text',
            'name' => 'liczba_pieter',
            'options' => [
                'label' => 'Liczba pięter'
            ],
        ]);
        $this->add([
            'type' => 'text',
            'name' => 'rok_budowy',
            'options' => [
                'label' => 'Rok budowy'
            ],
        ]);
    }

    public function getInputFilterSpecification()
    {
        return [
            'pietro' => [
                'required' => true,
                'validators' => [
                    new Digits(),
                        ['name' => 'GreaterThan', 'options' => ['min' => 0]],
                ]
            ],
            'liczba_pieter' => [
                'required' => true,
                'validators' => [
                    new Digits(),
                        ['name' => 'GreaterThan', 'options' => ['min' => 0]],
                ]
            ],
            'rok_budowy' => [
                'required' => true,
                'validators' => [
                    new Digits(),
                        ['name' => 'GreaterThan', 'options' => ['min' => 0]],
                ]
            ],
        ];
    }

}
