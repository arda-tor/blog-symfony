<?php


namespace App\Tests\Command;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;

class GenerateReportCommandTest extends KernelTestCase
{
    public function testExecute(): void
    {

        $kernel = self::bootKernel();


        $application = new Application($kernel);


        $command = $application->find('app:generate-report');


        $commandTester = new CommandTester($command);


        $commandTester->execute([]);


        $output = $commandTester->getDisplay();
        $this->assertStringContainsString('Report generated successfully!', $output);


        $statusCode = $commandTester->getStatusCode();
        $this->assertEquals(0, $statusCode);
    }
}
