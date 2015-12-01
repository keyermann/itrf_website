<?php

namespace ItrfWebsiteBundle\Menu;

use Knp\Menu\FactoryInterface;

/**
 * @SuppressWarnings(PHPMD.UnusedFormalParameter)
 */
class MainBuilder
{


    /**
     * @TODO
     */
    public function moreVertMenu(FactoryInterface $factory)
    {
        $menu = $factory->createItem('more_vert');

        $menu->addChild(
            'faq',
            array(
             'route'      => 'homepage',
             'label'      => 'FAQ',
             'attributes' => array('class' => 'mdl-menu__item mdi-menu__item'),
             'extras'     => array(
                              'safe_label'         => true,
                              'translation_domain' => 'itrf-more-vert-menu',
                             ),
            )
        );

        $menu->addChild(
            'site_map',
            array(
             'route'      => 'homepage',
             'label'      => 'Carte du site',
             'attributes' => array('class' => 'mdl-menu__item mdi-menu__item'),
             'extras'     => array(
                              'safe_label'         => true,
                              'translation_domain' => 'itrf-more-vert-menu',
                             ),
            )
        );

        $menu->addChild(
            'about',
            array(
             'route'      => 'homepage',
             'label'      => 'À propos',
             'attributes' => array('class' => 'mdl-menu__item mdi-menu__item'),
             'extras'     => array(
                              'safe_label'         => true,
                              'translation_domain' => 'itrf-more-vert-menu',
                             ),
            )
        );

        return $menu;
    }


    public function mainMenu(FactoryInterface $factory)
    {
        $menu = $factory->createItem('drawer');

        $menu->addChild(
            'news',
            array(
             'route'      => 'homepage',
             'label'      => '<i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i>ITRS & ITRF',
             'attributes' => array('class' => 'mdl-navigation__link'),
             'extras'     => array(
                              'safe_label'         => true,
                              'translation_domain' => 'itrf-main-menu',
                             ),
            )
        );

        $menu->addChild(
            'products',
            array(
             'route'      => 'homepage',
             'label'      => '<i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">layers</i>Produits ITRF',
             'attributes' => array('class' => 'mdl-navigation__link'),
             'extras'     => array(
                              'safe_label'         => true,
                              'translation_domain' => 'itrf-main-menu',
                             ),
            )
        );

        $menu->addChild(
            'domes',
            array(
             'route'      => 'homepage',
             'label'      => '<i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">gps_fixed</i>Numéro DOMES',
             'attributes' => array('class' => 'mdl-navigation__link'),
             'extras'     => array(
                              'safe_label'         => true,
                              'translation_domain' => 'itrf-main-menu',
                             ),
            )
        );

        $menu->addChild(
            'iers_network',
            array(
             'route'      => 'homepage',
             'label'      => '<i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">language</i>Réseau IERS',
             'attributes' => array('class' => 'mdl-navigation__link'),
             'extras'     => array(
                              'safe_label'         => true,
                              'translation_domain' => 'itrf-main-menu',
                             ),
            )
        );

        $menu->addChild(
            'itrf_coord',
            array(
             'route'      => 'homepage',
             'label'      => '<i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">place</i>Coordonnées ITRF',
             'attributes' => array('class' => 'mdl-navigation__link'),
             'extras'     => array(
                              'safe_label'         => true,
                              'translation_domain' => 'itrf-main-menu',
                             ),
            )
        );

        $menu->addChild(
            'itrf_mailing',
            array(
             'route'      => 'homepage',
             'label'      => '<i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">mail_outline</i>Liste de diffusion',
             'attributes' => array('class' => 'mdl-navigation__link'),
             'extras'     => array(
                              'safe_label'         => true,
                              'translation_domain' => 'itrf-main-menu',
                             ),
            )
        );

        $menu->addChild(
            'links',
            array(
             'route'      => 'homepage',
             'label'      => '<i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">link</i>Liens',
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
