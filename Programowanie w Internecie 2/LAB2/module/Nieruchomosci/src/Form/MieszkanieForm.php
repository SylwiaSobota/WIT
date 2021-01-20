<?php

namespace Nieruchomosci\Form;

use Doctrine\Common\Persistence\ObjectManager;
use Laminas\Form\Form;
use Nieruchomosci\Fieldset;

class MieszkanieForm extends Form
{
    public function __construct(ObjectManager $objectManager)
    {
        parent::__construct('mieszkanie-form');

        $mieszkanieFieldset = new Fieldset\MieszkanieFieldset($objectManager);
        $mieszkanieFieldset->setUseAsBaseFieldset(true);
        $this->add($mieszkanieFieldset);

        $this->add([
            'type' => 'submit',
            'name' => 'zapisz',
            'attributes' => [
                'value' => 'Zapisz',
                'class' => 'btn btn-primary'
            ]
        ]);
    }

}
