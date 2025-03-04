<?php

namespace App\DataFixtures;
use App\Entity\Evenement;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class EvenementFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $evenements = [
            ['date' => '1960-08-17', 'titre' => 'Indépendance du Gabon'],
            ['date' => '1961-01-01', 'titre' => 'Élection de Léon Mba comme président'],
            ['date' => '1964-02-17', 'titre' => 'Tentative de coup d\'État au Gabon'],
            ['date' => '1967-11-28', 'titre' => 'Albert-Bernard Bongo devient président'],
            ['date' => '2021-02-17', 'titre' => 'Début du concert de casseroles réprimé'],
            ['date' => '2023-08-30', 'titre' => 'Restauration de l\'État au Gabon'],
            ['date' => '2023-08-30', 'titre' => 'Nomination du général OLIGUI NGUEMA Brice Clotaire comme Président de la transition'],
        ];

        foreach ($evenements as $data) {
            $evenement = new Evenement();
            $evenement->setDate(new \DateTime($data['date']));
            $evenement->setTitre($data['titre']);
            $manager->persist($evenement);
        }

        $manager->flush();
    }
}
