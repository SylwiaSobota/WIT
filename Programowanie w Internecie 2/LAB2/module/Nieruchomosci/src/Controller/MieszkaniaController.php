<?php

namespace Nieruchomosci\Controller;

use Doctrine\Common\Persistence\ObjectManager;
use Nieruchomosci\Form\MieszkanieForm;
use Laminas\Mvc\Controller\AbstractActionController;
use Nieruchomosci\Entity;

class MieszkaniaController extends AbstractActionController
{
    private MieszkanieForm $mieszkanieForm;
    private ObjectManager $objectManager;

    /**
     * MieszkaniaController constructor.
     * @param MieszkanieForm $mieszkanieForm
     */
    public function __construct(ObjectManager $objectManager, MieszkanieForm $mieszkanieForm)
    {
        $this->mieszkanieForm = $mieszkanieForm;
        $this->objectManager = $objectManager;
    }

    public function listaAction()
    {
        $mieszkania = $this->objectManager->getRepository(Entity\Mieszkanie::class)->pobierzWszystko();
        return ['mieszkania' => $mieszkania];
    }

    public function dodajAction()
    {
        $mieszkanie = new Entity\Mieszkanie();
        $this->mieszkanieForm->bind($mieszkanie);

        if ($this->getRequest()->isPost()) {
            $dane = $this->getRequest()->getPost();
            $this->mieszkanieForm->setData($dane);

            if ($this->mieszkanieForm->isValid()) {
                $this->objectManager->persist($mieszkanie);
                $this->objectManager->flush();

                $this->redirect()->toRoute('nieruchomosci');
            }
        }

        return ['form' => $this->mieszkanieForm];
    }
}
