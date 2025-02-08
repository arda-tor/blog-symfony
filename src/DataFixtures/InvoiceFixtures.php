<?php

namespace App\DataFixtures;

use App\Entity\Invoice;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class InvoiceFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $invoice = new Invoice();
        $invoice->setCompanyName('Brosoft');
        $invoice->setCompanyStreet('Piontkowska');
        $invoice->setCompanyStreetNumber('21');
        $invoice->setCompanyStreetFlatNumber('13D');
        $invoice->setCompanyCity('Poznań');
        $invoice->setCompanyPostCode('80-460');
        $invoice->setCreated(new \DateTime());
        $invoice->setUpdated(new \DateTime());
        $invoice->setEmail('ator@cdv.pl');
        $invoice->setPhone('123456789');
        $invoice->setTaxNumber('1234567890');

        $manager->persist($invoice);
        $manager->flush();
    }
}
