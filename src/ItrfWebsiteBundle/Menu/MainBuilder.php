<?php

namespace ItrfWebsiteBundle\Menu;

use Knp\Menu\FactoryInterface;

//use Symfony\Component\DependencyInjection\ContainerAwareTrait;

/**
 * @SuppressWarnings(PHPMD.UnusedFormalParameter)
 */
class MainBuilder
{


    /**
     * @TODO
     */
    public function moreVertMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('more_vert');

        $menu->addChild('About', array('route' => 'mdi_home', 'attributes' => array('class' => 'mdl-menu__item mdi-menu__item')));
        $menu->addChild('Contact', array('route' => 'mdi_home', 'attributes' => array('class' => 'mdl-menu__item mdi-menu__item')));
        $menu->addChild('Policies', array('route' => 'mdi_home', 'attributes' => array('class' => 'mdl-menu__item mdi-menu__item')));

        return $menu;
    }


    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('drawer');

        $menu->addChild(
            'news',
            array(
             'route'      => 'homepage',
             'label'      => '<i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i>Accueil',
             'attributes' => array('class' => 'mdl-navigation__link'),
             'extras'     => array(
                              'safe_label'         => true,
                              'translation_domain' => 'itrf-main-menu',
                             ),
            )
        );

        $menu->addChild(
            'news',
            array(
             'route'      => 'homepage',
             'label'      => '<i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i>Accueil',
             'attributes' => array('class' => 'mdl-navigation__link'),
             'extras'     => array(
                              'safe_label'         => true,
                              'translation_domain' => 'itrf-main-menu',
                             ),
            )
        );

        return $menu;
    }


}
