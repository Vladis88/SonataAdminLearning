<?php

namespace App\Admin;

use App\Entity\State;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Form\Type\ModelType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

/**
 * Class CityAdmin
 */
class CityAdmin extends AbstractAdmin
{
    /**
     * @param \Sonata\AdminBundle\Form\FormMapper $form
     */
    protected function configureFormFields(FormMapper $form)
    {
        $form
            ->with('Content', ['class' => 'col-md-9'])
            ->add('title', TextType::class)
            ->add('number', NumberType::class)
            ->add('isBig', CheckboxType::class, [
                'required' => false,
            ])
            ->end()
            ->with('Meta data', ['class' => 'col-md-3'])
            ->add('state', ModelType::class, [
                'class' => State::class,
                'property' => 'title',
            ])
            ->end();
    }

    /**
     * @param \Sonata\AdminBundle\Datagrid\DatagridMapper $filter
     */
    protected function configureDatagridFilters(DatagridMapper $filter)
    {
        $filter->add('title')
            ->add('isBig');
    }

    /**
     * @param \Sonata\AdminBundle\Datagrid\ListMapper $list
     */
    protected function configureListFields(ListMapper $list)
    {
        $list->addIdentifier('title')
            ->addIdentifier('isBig');
    }


}