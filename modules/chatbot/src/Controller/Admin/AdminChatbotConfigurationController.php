<?php

namespace ChatBot\Controller\Admin;

use Chatbot\Form\ChatbotShopHourType;
use Chatbot\Repository\ChatbotConfigurationRepository;
use Configuration;
use Doctrine\ORM\EntityManagerInterface;
use PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminChatbotConfigurationController extends FrameworkBundleAdminController
{
    /**
     * @param Request $request
     * @return RedirectResponse|Response|null
     */
    public function index(Request $request): Response
    {
        /** @var EntityManagerInterface $em */
        $em = $this->getDoctrine()->getManager();
        /** @var ChatbotConfigurationRepository $chatbotConfigurationRepository */
        $chatbotConfigurationRepository = $this->get('chatbot_configuration_repository');

        $forms = [];
        for ($i = 0; $i < count($this->getDayOfWeek()); $i++) {
            $form = $this->createform(ChatbotShopHourType::class, null, [
                'attr' => [
                    'id' => $this->getDayOfWeek()[$i]
                ],
            ]);

            $forms[] = $form;
            $form->handleRequest($request);
        }

        return $this->render('@Modules/chatbot/views/templates/admin/configure.html.twig', [
            'week' => array_map(function ($day) {
                return [
                    'id' => $day->getId(),
                    'isAvailable' => $day->getIsAvailable(),
                    'defaultMessage' => $day->getDefaultMessage(),
                    'timeStart' => !is_null($day->getTimeStart()) ? $day->getTimeStart()->format('Y-m-d\TH:i') : null,
                    'timeEnd' => !is_null($day->getTimeStart()) ? $day->getTimeEnd()->format('Y-m-d\TH:i') : null
                ];
            }, $chatbotConfigurationRepository->findByKeyPrefix('PS_CHATBOT')),
            'forms' => array_map(function ($form) {
                return $form->createView();
            }, $forms),
            'jsDir' => _PS_JS_DIR_
        ]);
    }

    private function getDayOfWeek()
    {
        $dayOfWeek = [];
        $date = new \DateTime('now');
        $date = $date->format('m/d/y');

        $datetime = \DateTime::createFromFormat('m/d/y', $date);
        $interval = new \DateInterval('P1D');

        if ($datetime->format('D') !== 'Mon') {
            $datetime->modify('last monday');
        }

        $week = new \DatePeriod($datetime, $interval, 6);
        foreach ($week as $day) {
            $dayOfWeek[] = $day->format('D');
        }

        return $dayOfWeek;
    }
}
