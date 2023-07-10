<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class AuthController extends AbstractController
{
    #[Route('/auth', name: 'app_auth')]
    public function index(Request $request): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/AuthController.php',
        ]);
    }

    /**
     * 注册
     */
    #[Route('/api/register', name: 'auth-register', methods: ['post'])]
    public function register(Request $request, UserPasswordHasherInterface $hasher, EntityManagerInterface $entityManager): JsonResponse
    {
        $username = $request->get("username");
        $mobile = $request->get("mobile");
        $password = $request->get("password");

        // TODO validator

        $user = new User();

        $user->setUsername($username)->setMobile($mobile);

        // 密码
        $hashPassword = $hasher->hashPassword($user, $password);
        $user->setPassword($hashPassword);

        // 保存
        $entityManager->persist($user);
        $entityManager->flush();

        return $this->json([
            "user_id" => $user->getId(),
        ]);
    }
}
