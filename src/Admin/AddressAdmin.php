<?php

namespace App\Admin;

use App\Entity\City;
use App\Entity\State;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Form\Type\ModelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

/**
 * Class AddressAdmin
 */
class AddressAdmin extends AbstractAdmin
{
    /**
     * @param \Sonata\AdminBundle\Form\FormMapper $form
     */
    protected function configureFormFields(FormMapper $form)
    {
        $form
            ->with('Meta data', ['class' => 'col-md-3'])
            ->add('city', ModelType::class, [
                'class' => City::class,
                'property' => 'title'
            ])
            ->add('state', ModelType::class, [
                'class' => State::class,
                'property' => 'title',
            ])
            ->end()
            ->with('Content', ['class' => 'col-md-9'])
            ->add('street', TextType::class)
            ->add('apartment', TextType::class)
            ->add('zipCode', TextType::class)
            ->end();
    }

    /**
     * @param \Sonata\AdminBundle\Datagrid\DatagridMapper $filter
     */
    protected function configureDatagridFilters(DatagridMapper $filter)
    {
        $filter
            ->add('city.title')
            ->add('city.isBig')
            ->add('state.title')
            ->add('street')
            ->add('apartment')
            ->add('zipCode');

    }

    /**
     * @param \Sonata\AdminBundle\Datagrid\ListMapper $list
     */
    protected function configureListFields(ListMapper $list)
    {
        $list->addIdentifier('city.title');
        $list->addIdentifier('city.isBig');
        $list->addIdentifier('state.title');
        $list->addIdentifier('street');
        $list->addIdentifier('apartment');
        $list->addIdentifier('zipCode');
    }

}