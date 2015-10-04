<?php

namespace SONUser\Fixture;

use Doctrine\Common\DataFixtures\AbstractFixture,
    Doctrine\Common\Persistence\ObjectManager;

use SONUser\Entity\User;

class LoadUser extends AbstractFixture{

    public function load(ObjectManager $manager) {
        $user = new User();
        $user->setNome("Danilo")
                ->setEmail("danilo.dorotheu@live.com")
                ->setPassword(123456)
                ->setActive(TRUE);
        
        $manager->persist($user);
        
        $user = new User();
        $user->setNome("Admin")
                ->setEmail("admin@son.com")
                ->setPassword(123456)
                ->setActive(TRUE);
        
        $manager->persist($user);
        
        $manager->flush();
    }

}
