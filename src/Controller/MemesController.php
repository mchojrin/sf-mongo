<?php

namespace App\Controller;

use Doctrine\ODM\MongoDB\DocumentManager;
use App\Document\Meme;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MemesController extends AbstractController
{
    #[Route('/memes', name: 'memes')]
    public function index(DocumentManager $documentManager): Response
    {
        $cursor = $documentManager
            ->getDocumentCollection(Meme::class)
            ->find()
            ;

        return $this->json([
            'memes' => $cursor->toArray(),
        ]);
    }
}
