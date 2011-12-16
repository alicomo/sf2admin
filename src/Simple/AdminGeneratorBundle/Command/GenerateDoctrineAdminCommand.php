<?php


/**
 * Description of GenerateDoctrineAdminCommand
 *
 * @author Muhammadali Shaduli
 */

namespace Simple\AdminGeneratorBundle\Command;

use Sensio\Bundle\GeneratorBundle\Generator\DoctrineCrudGenerator;

class GenerateDoctrineAdminCommand extends \Sensio\Bundle\GeneratorBundle\Command\GenerateDoctrineCrudCommand
{
    protected function configure()
    {
        parent::configure();
        $this->setName('doctrine:generate:admin');
    }

    protected function getGenerator()
    {
        $generator = new DoctrineCrudGenerator($this->getContainer()->get('filesystem'), $this->getTheme());
        $this->setGenerator($generator);
        return parent::getGenerator();
    }
    
    
    protected function getTheme() {
        $theme = $this->getContainer()->getParameter('simple_admin_generator.theme');
        if(file_exists('../app/Resources/skeleton/'.$theme.'/crud')) {
            return '../app/Resources/skeleton/'.$theme.'/crud';
        }
        else {
            return __DIR__.'/../Resources/skeleton/'.$theme.'/crud';
        }
        
    }
}


