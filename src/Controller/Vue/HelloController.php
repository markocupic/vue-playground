<?php

declare(strict_types=1);

/*
 * This file is part of Vue Playground.
 *
 * (c) Marko Cupic <m.cupic@gmx.ch>
 * @license GPL-3.0-or-later
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/markocupic/vue-playground
 */

namespace Markocupic\VuePlayground\Controller\Vue;

use Contao\FrontendUser;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment as Twig;

#[Route('/vue/hello', name: HelloController::class, defaults: ['_scope' => 'frontend', '_token_check' => true])]
class HelloController extends AbstractController
{
    public function __construct(
        private readonly Twig $twig,
        private readonly Security $security,
    ) {
    }

    public function __invoke(): Response
    {
        $user = $this->security->getUser();

        if ($user instanceof FrontendUser) {
            $firstname = $user->firstname;
            $lastname = $user->lastname;
        }

        return new Response(
            $this->twig->render('@MarkocupicVuePlayground/Vue/hello.html.twig', [
                'firstname' => $firstname ?? 'Arnold',
                'lastname' => $lastname ?? 'Schwarzenegger',
            ])
        );
    }
}
