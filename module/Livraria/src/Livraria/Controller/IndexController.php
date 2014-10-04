<?php

namespace Livraria\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController {

    public function indexAction() {
        $categoriaService = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager')
                ->getRepository("Livraria\Entity\Categoria");
        $categorias = $categoriaService->findAll();
//        $categorias = 'kjlh';
        return new ViewModel(array('categorias' => $categorias));
    }

}
