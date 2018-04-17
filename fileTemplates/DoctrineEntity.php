<?php

namespace Trinet\Time\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Trinet\Time\Repository\Doctrine${EntityName}Repository")
 * @ORM\Table(name="${TableName}")
 */
class ${EntityName} implements EntityInterface
{
    use IdTrait, CompanyTrait;

}

