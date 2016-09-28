<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // formindex
        if (0 === strpos($pathinfo, '/test') && preg_match('#^/test/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'formindex')), array (  '_controller' => 'Formation\\FormationBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/etudiant')) {
            // etudiant
            if (rtrim($pathinfo, '/') === '/etudiant') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_etudiant;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'etudiant');
                }

                return array (  '_controller' => 'Formation\\FormationBundle\\Controller\\EtudiantController::indexAction',  '_route' => 'etudiant',);
            }
            not_etudiant:

            // etudiant_create
            if ($pathinfo === '/etudiant/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_etudiant_create;
                }

                return array (  '_controller' => 'Formation\\FormationBundle\\Controller\\EtudiantController::createAction',  '_route' => 'etudiant_create',);
            }
            not_etudiant_create:

            // etudiant_new
            if ($pathinfo === '/etudiant/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_etudiant_new;
                }

                return array (  '_controller' => 'Formation\\FormationBundle\\Controller\\EtudiantController::newAction',  '_route' => 'etudiant_new',);
            }
            not_etudiant_new:

            // etudiant_show
            if (preg_match('#^/etudiant/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_etudiant_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'etudiant_show')), array (  '_controller' => 'Formation\\FormationBundle\\Controller\\EtudiantController::showAction',));
            }
            not_etudiant_show:

            // etudiant_edit
            if (preg_match('#^/etudiant/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_etudiant_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'etudiant_edit')), array (  '_controller' => 'Formation\\FormationBundle\\Controller\\EtudiantController::editAction',));
            }
            not_etudiant_edit:

            // etudiant_update
            if (preg_match('#^/etudiant/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_etudiant_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'etudiant_update')), array (  '_controller' => 'Formation\\FormationBundle\\Controller\\EtudiantController::updateAction',));
            }
            not_etudiant_update:

            // etudiant_delete
            if (preg_match('#^/etudiant/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_etudiant_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'etudiant_delete')), array (  '_controller' => 'Formation\\FormationBundle\\Controller\\EtudiantController::deleteAction',));
            }
            not_etudiant_delete:

        }

        if (0 === strpos($pathinfo, '/format')) {
            if (0 === strpos($pathinfo, '/formateur')) {
                // formateur
                if (rtrim($pathinfo, '/') === '/formateur') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_formateur;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'formateur');
                    }

                    return array (  '_controller' => 'Formation\\FormationBundle\\Controller\\FormateurController::indexAction',  '_route' => 'formateur',);
                }
                not_formateur:

                // formateur_create
                if ($pathinfo === '/formateur/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_formateur_create;
                    }

                    return array (  '_controller' => 'Formation\\FormationBundle\\Controller\\FormateurController::createAction',  '_route' => 'formateur_create',);
                }
                not_formateur_create:

                // formateur_new
                if ($pathinfo === '/formateur/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_formateur_new;
                    }

                    return array (  '_controller' => 'Formation\\FormationBundle\\Controller\\FormateurController::newAction',  '_route' => 'formateur_new',);
                }
                not_formateur_new:

                // formateur_show
                if (preg_match('#^/formateur/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_formateur_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'formateur_show')), array (  '_controller' => 'Formation\\FormationBundle\\Controller\\FormateurController::showAction',));
                }
                not_formateur_show:

                // formateur_edit
                if (preg_match('#^/formateur/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_formateur_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'formateur_edit')), array (  '_controller' => 'Formation\\FormationBundle\\Controller\\FormateurController::editAction',));
                }
                not_formateur_edit:

                // formateur_update
                if (preg_match('#^/formateur/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_formateur_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'formateur_update')), array (  '_controller' => 'Formation\\FormationBundle\\Controller\\FormateurController::updateAction',));
                }
                not_formateur_update:

                // formateur_delete
                if (preg_match('#^/formateur/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_formateur_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'formateur_delete')), array (  '_controller' => 'Formation\\FormationBundle\\Controller\\FormateurController::deleteAction',));
                }
                not_formateur_delete:

            }

            if (0 === strpos($pathinfo, '/formation')) {
                // formation
                if (rtrim($pathinfo, '/') === '/formation') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_formation;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'formation');
                    }

                    return array (  '_controller' => 'Formation\\FormationBundle\\Controller\\FormationController::indexAction',  '_route' => 'formation',);
                }
                not_formation:

                // formation_create
                if ($pathinfo === '/formation/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_formation_create;
                    }

                    return array (  '_controller' => 'Formation\\FormationBundle\\Controller\\FormationController::createAction',  '_route' => 'formation_create',);
                }
                not_formation_create:

                // formation_new
                if ($pathinfo === '/formation/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_formation_new;
                    }

                    return array (  '_controller' => 'Formation\\FormationBundle\\Controller\\FormationController::newAction',  '_route' => 'formation_new',);
                }
                not_formation_new:

                // formation_show
                if (preg_match('#^/formation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_formation_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'formation_show')), array (  '_controller' => 'Formation\\FormationBundle\\Controller\\FormationController::showAction',));
                }
                not_formation_show:

                // formation_edit
                if (preg_match('#^/formation/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_formation_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'formation_edit')), array (  '_controller' => 'Formation\\FormationBundle\\Controller\\FormationController::editAction',));
                }
                not_formation_edit:

                // formation_update
                if (preg_match('#^/formation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_formation_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'formation_update')), array (  '_controller' => 'Formation\\FormationBundle\\Controller\\FormationController::updateAction',));
                }
                not_formation_update:

                // formation_delete
                if (preg_match('#^/formation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_formation_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'formation_delete')), array (  '_controller' => 'Formation\\FormationBundle\\Controller\\FormationController::deleteAction',));
                }
                not_formation_delete:

            }

        }

        if (0 === strpos($pathinfo, '/inscription')) {
            // inscription
            if (rtrim($pathinfo, '/') === '/inscription') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_inscription;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'inscription');
                }

                return array (  '_controller' => 'Formation\\FormationBundle\\Controller\\InscriptionController::indexAction',  '_route' => 'inscription',);
            }
            not_inscription:

            // inscription_create
            if ($pathinfo === '/inscription/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_inscription_create;
                }

                return array (  '_controller' => 'Formation\\FormationBundle\\Controller\\InscriptionController::createAction',  '_route' => 'inscription_create',);
            }
            not_inscription_create:

            // inscription_new
            if ($pathinfo === '/inscription/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_inscription_new;
                }

                return array (  '_controller' => 'Formation\\FormationBundle\\Controller\\InscriptionController::newAction',  '_route' => 'inscription_new',);
            }
            not_inscription_new:

            // inscription_show
            if (preg_match('#^/inscription/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_inscription_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'inscription_show')), array (  '_controller' => 'Formation\\FormationBundle\\Controller\\InscriptionController::showAction',));
            }
            not_inscription_show:

            // inscription_edit
            if (preg_match('#^/inscription/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_inscription_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'inscription_edit')), array (  '_controller' => 'Formation\\FormationBundle\\Controller\\InscriptionController::editAction',));
            }
            not_inscription_edit:

            // inscription_update
            if (preg_match('#^/inscription/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_inscription_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'inscription_update')), array (  '_controller' => 'Formation\\FormationBundle\\Controller\\InscriptionController::updateAction',));
            }
            not_inscription_update:

            // inscription_delete
            if (preg_match('#^/inscription/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_inscription_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'inscription_delete')), array (  '_controller' => 'Formation\\FormationBundle\\Controller\\InscriptionController::deleteAction',));
            }
            not_inscription_delete:

        }

        if (0 === strpos($pathinfo, '/s')) {
            if (0 === strpos($pathinfo, '/salle')) {
                // salle
                if (rtrim($pathinfo, '/') === '/salle') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_salle;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'salle');
                    }

                    return array (  '_controller' => 'Formation\\FormationBundle\\Controller\\SalleController::indexAction',  '_route' => 'salle',);
                }
                not_salle:

                // salle_create
                if ($pathinfo === '/salle/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_salle_create;
                    }

                    return array (  '_controller' => 'Formation\\FormationBundle\\Controller\\SalleController::createAction',  '_route' => 'salle_create',);
                }
                not_salle_create:

                // salle_new
                if ($pathinfo === '/salle/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_salle_new;
                    }

                    return array (  '_controller' => 'Formation\\FormationBundle\\Controller\\SalleController::newAction',  '_route' => 'salle_new',);
                }
                not_salle_new:

                // salle_show
                if (preg_match('#^/salle/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_salle_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'salle_show')), array (  '_controller' => 'Formation\\FormationBundle\\Controller\\SalleController::showAction',));
                }
                not_salle_show:

                // salle_edit
                if (preg_match('#^/salle/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_salle_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'salle_edit')), array (  '_controller' => 'Formation\\FormationBundle\\Controller\\SalleController::editAction',));
                }
                not_salle_edit:

                // salle_update
                if (preg_match('#^/salle/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_salle_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'salle_update')), array (  '_controller' => 'Formation\\FormationBundle\\Controller\\SalleController::updateAction',));
                }
                not_salle_update:

                // salle_delete
                if (preg_match('#^/salle/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_salle_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'salle_delete')), array (  '_controller' => 'Formation\\FormationBundle\\Controller\\SalleController::deleteAction',));
                }
                not_salle_delete:

            }

            if (0 === strpos($pathinfo, '/session')) {
                // session
                if (rtrim($pathinfo, '/') === '/session') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_session;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'session');
                    }

                    return array (  '_controller' => 'Formation\\FormationBundle\\Controller\\SessionController::indexAction',  '_route' => 'session',);
                }
                not_session:

                // session_create
                if ($pathinfo === '/session/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_session_create;
                    }

                    return array (  '_controller' => 'Formation\\FormationBundle\\Controller\\SessionController::createAction',  '_route' => 'session_create',);
                }
                not_session_create:

                // session_new
                if ($pathinfo === '/session/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_session_new;
                    }

                    return array (  '_controller' => 'Formation\\FormationBundle\\Controller\\SessionController::newAction',  '_route' => 'session_new',);
                }
                not_session_new:

                // session_show
                if (preg_match('#^/session/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_session_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'session_show')), array (  '_controller' => 'Formation\\FormationBundle\\Controller\\SessionController::showAction',));
                }
                not_session_show:

                // session_edit
                if (preg_match('#^/session/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_session_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'session_edit')), array (  '_controller' => 'Formation\\FormationBundle\\Controller\\SessionController::editAction',));
                }
                not_session_edit:

                // session_update
                if (preg_match('#^/session/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_session_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'session_update')), array (  '_controller' => 'Formation\\FormationBundle\\Controller\\SessionController::updateAction',));
                }
                not_session_update:

                // session_delete
                if (preg_match('#^/session/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_session_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'session_delete')), array (  '_controller' => 'Formation\\FormationBundle\\Controller\\SessionController::deleteAction',));
                }
                not_session_delete:

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
