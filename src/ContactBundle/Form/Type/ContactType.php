<?php
namespace ContactBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
			->add('firstname')
			->add('lastname')
			->add('job')
			->add('email')
			->add('telephone')
			->add('address')
			->add('website')
			->add('save', SubmitType::class, array('label' => 'Submit'))
			->getForm();
        ;
    }

}
