<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/co')) {
            // gsb_comptable_homepage
            if ('/comptable' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'gsb_comptable_homepage');
                }

                return array (  '_controller' => 'GSB\\ComptableBundle\\Controller\\DefaultController::indexAction',  '_route' => 'gsb_comptable_homepage',);
            }

            // gsb_accueil_connexion1
            if ('/connexion/comptable' === $pathinfo) {
                return array (  '_controller' => 'GSB\\AccueilBundle\\Controller\\DefaultController::comptableAction',  '_route' => 'gsb_accueil_connexion1',);
            }

            // fos_user_security_login
            if ('/connexion/visiteur' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_security_login;
                }

                return array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
            }
            not_fos_user_security_login:

        }

        // gsb_accueil_accueil1
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'gsb_accueil_accueil1');
            }

            return array (  '_controller' => 'GSB\\AccueilBundle\\Controller\\DefaultController::indexAction',  '_route' => 'gsb_accueil_accueil1',);
        }

        if (0 === strpos($pathinfo, '/visiteur')) {
            // gsb_visiteur_home1
            if ('/visiteur' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'gsb_visiteur_home1');
                }

                return array (  '_controller' => 'GSB\\VisiteurBundle\\Controller\\DefaultController::indexAction',  '_route' => 'gsb_visiteur_home1',);
            }

            if (0 === strpos($pathinfo, '/visiteur/etat/ajouter')) {
                // gsb_visiteur_etat-add
                if ('/visiteur/etat/ajouter' === $pathinfo) {
                    return array (  '_controller' => 'GSB\\VisiteurBundle\\Controller\\EtatController::addAction',  '_route' => 'gsb_visiteur_etat-add',);
                }

                // gsb_visiteur_etat-register
                if ('/visiteur/etat/ajouter/register' === $pathinfo) {
                    return array (  '_controller' => 'GSB\\VisiteurBundle\\Controller\\EtatController::registerAction',  '_route' => 'gsb_visiteur_etat-register',);
                }

            }

            // gsb_visiteur_etat-index
            if ('/visiteur/etat' === $pathinfo) {
                return array (  '_controller' => 'GSB\\VisiteurBundle\\Controller\\EtatController::indexAction',  '_route' => 'gsb_visiteur_etat-index',);
            }

            if (0 === strpos($pathinfo, '/visiteur/f')) {
                if (0 === strpos($pathinfo, '/visiteur/frais_forfait/ajouter')) {
                    // gsb_visiteur_frait_forfait-add
                    if ('/visiteur/frais_forfait/ajouter' === $pathinfo) {
                        return array (  '_controller' => 'GSB\\VisiteurBundle\\Controller\\FraisForfaitController::addAction',  '_route' => 'gsb_visiteur_frait_forfait-add',);
                    }

                    // gsb_visiteur_frais_forfait-register
                    if ('/visiteur/frais_forfait/ajouter/register' === $pathinfo) {
                        return array (  '_controller' => 'GSB\\VisiteurBundle\\Controller\\FraisForfaitController::registerAction',  '_route' => 'gsb_visiteur_frais_forfait-register',);
                    }

                }

                // gsb_visiteur_frais_forfait-index
                if ('/visiteur/frais_forfait' === $pathinfo) {
                    return array (  '_controller' => 'GSB\\VisiteurBundle\\Controller\\FraisForfaitController::indexAction',  '_route' => 'gsb_visiteur_frais_forfait-index',);
                }

                if (0 === strpos($pathinfo, '/visiteur/fiche_frais')) {
                    if (0 === strpos($pathinfo, '/visiteur/fiche_frais/ajouter')) {
                        // gsb_visiteur_fiche_frais-add
                        if ('/visiteur/fiche_frais/ajouter' === $pathinfo) {
                            return array (  '_controller' => 'GSB\\VisiteurBundle\\Controller\\FicheFraisController::addAction',  '_route' => 'gsb_visiteur_fiche_frais-add',);
                        }

                        // gsb_visiteur_fiche_frais-register
                        if ('/visiteur/fiche_frais/ajouter/register' === $pathinfo) {
                            return array (  '_controller' => 'GSB\\VisiteurBundle\\Controller\\FicheFraisController::registerAction',  '_route' => 'gsb_visiteur_fiche_frais-register',);
                        }

                    }

                    // gsb_visiteur_fiche_frais-listMois
                    if (0 === strpos($pathinfo, '/visiteur/fiche_frais/lister/mois') && preg_match('#^/visiteur/fiche_frais/lister/mois/(?P<mois>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'gsb_visiteur_fiche_frais-listMois')), array (  '_controller' => 'GSB\\VisiteurBundle\\Controller\\FicheFraisController::listMoisAction',));
                    }

                    // gsb_visiteur_fiche_frais-index
                    if ('/visiteur/fiche_frais' === $pathinfo) {
                        return array (  '_controller' => 'GSB\\VisiteurBundle\\Controller\\FicheFraisController::indexAction',  '_route' => 'gsb_visiteur_fiche_frais-index',);
                    }

                    // gsb_visiteur_fiche_frais-selectMois
                    if ('/visiteur/fiche_frais/rechercher/mois' === $pathinfo) {
                        return array (  '_controller' => 'GSB\\VisiteurBundle\\Controller\\FicheFraisController::selectMoisAction',  '_route' => 'gsb_visiteur_fiche_frais-selectMois',);
                    }

                }

            }

            elseif (0 === strpos($pathinfo, '/visiteur/ligne_frais_hors_forfait')) {
                if (0 === strpos($pathinfo, '/visiteur/ligne_frais_hors_forfait/ajouter')) {
                    // gsb_visiteur_ligne_frais_hors_forfait-add
                    if ('/visiteur/ligne_frais_hors_forfait/ajouter' === $pathinfo) {
                        return array (  '_controller' => 'GSB\\VisiteurBundle\\Controller\\LigneFraisHorsForfaitController::addAction',  '_route' => 'gsb_visiteur_ligne_frais_hors_forfait-add',);
                    }

                    // gsb_visiteur_ligne_frais_hors_forfait-register
                    if ('/visiteur/ligne_frais_hors_forfait/ajouter/register' === $pathinfo) {
                        return array (  '_controller' => 'GSB\\VisiteurBundle\\Controller\\LigneFraisHorsForfaitController::registerAction',  '_route' => 'gsb_visiteur_ligne_frais_hors_forfait-register',);
                    }

                }

                // gsb_visiteur_ligne_frais_hors_forfait-index
                if ('/visiteur/ligne_frais_hors_forfait' === $pathinfo) {
                    return array (  '_controller' => 'GSB\\VisiteurBundle\\Controller\\LigneFraisHorsForfaitController::indexAction',  '_route' => 'gsb_visiteur_ligne_frais_hors_forfait-index',);
                }

                // gsb_visiteur_ligne_frais_hors_forfait-update
                if (0 === strpos($pathinfo, '/visiteur/ligne_frais_hors_forfait/modifier') && preg_match('#^/visiteur/ligne_frais_hors_forfait/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gsb_visiteur_ligne_frais_hors_forfait-update')), array (  '_controller' => 'GSB\\VisiteurBundle\\Controller\\LigneFraisHorsForfaitController::updateAction',));
                }

                if (0 === strpos($pathinfo, '/visiteur/ligne_frais_hors_forfait/supprimer')) {
                    // gsb_visiteur_ligne_frais_hors_forfait-delete_verif
                    if (0 === strpos($pathinfo, '/visiteur/ligne_frais_hors_forfait/supprimer/verif') && preg_match('#^/visiteur/ligne_frais_hors_forfait/supprimer/verif/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'gsb_visiteur_ligne_frais_hors_forfait-delete_verif')), array (  '_controller' => 'GSB\\VisiteurBundle\\Controller\\LigneFraisHorsForfaitController::deleteVerifAction',));
                    }

                    // gsb_visiteur_ligne_frais_hors_forfait-delete
                    if (preg_match('#^/visiteur/ligne_frais_hors_forfait/supprimer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'gsb_visiteur_ligne_frais_hors_forfait-delete')), array (  '_controller' => 'GSB\\VisiteurBundle\\Controller\\LigneFraisHorsForfaitController::deleteAction',));
                    }

                }

            }

            elseif (0 === strpos($pathinfo, '/visiteur/ligne_frais_forfait')) {
                // gsb_visiteur_ligne_frais_forfait-add
                if ('/visiteur/ligne_frais_forfait/ajouter' === $pathinfo) {
                    return array (  '_controller' => 'GSB\\VisiteurBundle\\Controller\\LigneFraisForfaitController::addAction',  '_route' => 'gsb_visiteur_ligne_frais_forfait-add',);
                }

                // gsb_visiteur_ligne_frais_forfait-index
                if ('/visiteur/ligne_frais_forfait' === $pathinfo) {
                    return array (  '_controller' => 'GSB\\VisiteurBundle\\Controller\\LigneFraisForfaitController::indexAction',  '_route' => 'gsb_visiteur_ligne_frais_forfait-index',);
                }

                // gsb_visiteur_ligne_frais_forfait-register
                if ('/visiteur/ligne_frais_forfait/ajouter/register' === $pathinfo) {
                    return array (  '_controller' => 'GSB\\VisiteurBundle\\Controller\\LigneFraisForfaitController::registerAction',  '_route' => 'gsb_visiteur_ligne_frais_forfait-register',);
                }

                // gsb_visiteur_ligne_frais_forfait-update
                if (0 === strpos($pathinfo, '/visiteur/ligne_frais_forfait/modifier') && preg_match('#^/visiteur/ligne_frais_forfait/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gsb_visiteur_ligne_frais_forfait-update')), array (  '_controller' => 'GSB\\VisiteurBundle\\Controller\\LigneFraisForfaitController::updateAction',));
                }

            }

        }

        // gsb_visiteur_deconnexion
        if ('/deconnexion' === $pathinfo) {
            return array (  '_controller' => 'GSB\\VisiteurBundle\\Controller\\DefaultController::deconnexionAction',  '_route' => 'gsb_visiteur_deconnexion',);
        }

        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/login')) {
            // fos_user_security_login2
            if ('/login' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_security_login2;
                }

                return array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login2',);
            }
            not_fos_user_security_login2:

            // fos_user_security_check
            if ('/login_check' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_fos_user_security_check;
                }

                return array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
            }
            not_fos_user_security_check:

        }

        // fos_user_security_logout
        if ('/logout' === $pathinfo) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_user_security_logout;
            }

            return array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
        }
        not_fos_user_security_logout:

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile/' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_profile_show;
                }

                return array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

            // fos_user_change_password
            if ('/profile/change-password' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_change_password;
                }

                return array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

        }

        elseif (0 === strpos($pathinfo, '/inscription/visiteur')) {
            // fos_user_registration_register
            if ('/inscription/visiteur/' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_registration_register;
                }

                return array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
            }
            not_fos_user_registration_register:

            // fos_user_registration_check_email
            if ('/inscription/visiteur/check-email' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_registration_check_email;
                }

                return array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
            }
            not_fos_user_registration_check_email:

            if (0 === strpos($pathinfo, '/inscription/visiteur/confirm')) {
                // fos_user_registration_confirm
                if (preg_match('#^/inscription/visiteur/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_confirm;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                }
                not_fos_user_registration_confirm:

                // fos_user_registration_confirmed
                if ('/inscription/visiteur/confirmed' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_registration_confirmed;
                    }

                    return array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                }
                not_fos_user_registration_confirmed:

            }

        }

        elseif (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ('/resetting/request' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_resetting_request;
                }

                return array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_resetting_reset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
            }
            not_fos_user_resetting_reset:

            // fos_user_resetting_send_email
            if ('/resetting/send-email' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }

                return array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ('/resetting/check-email' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_resetting_check_email;
                }

                return array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
