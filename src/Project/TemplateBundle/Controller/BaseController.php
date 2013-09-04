<?php

namespace Project\TemplateBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Base controller.
 *
 * Place all common functions here available across all controllers
 */
class BaseController extends Controller
{
    /**
     * @param Form $form
     * @return boolean
     */
    public function processForm(Form $form)
    {
        $form->submit($this->getRequest());
        return $form->isValid();
     }

    /**
     * Send email
     *
     * @param $subject
     * @param $emailFrom
     * @param $emailTo
     * @param $message
     */
    public function sendMail($subject, $emailTo, $message)
    {
        $message = \Swift_Message::newInstance()
            ->setSubject($subject)
            ->setFrom($this->container->getParameter('project_template.emails.contact_email'))
            ->setTo($emailTo)
            ->setBody($message);

        $this->get('mailer')->send($message);
    }

    /**
     * @param array $data
     *
     * @return JsonResponse
     */
    public function getJsonResponse(array $data = array() )
    {
        return new JsonResponse($data);
    }

    /**
     * @param mixed $response
     * @return array
     */
    public function createJsonSuccessResponse($response = null)
    {
        return $this->createResponseFor('success', $response);
    }

    /**
     * @param mixed $response
     * @return array
     */
    public function createJsonFailureResponse($response = null)
    {
        return $this->createResponseFor('failure', $response);
    }

    /**
     * @param string $what
     * @param mixed $response
     * @return array
     */
    private function createResponseFor($what, $response = null)
    {
        return new JsonResponse(array(
            $what => $response === null ? true : $response,
        ) );
    }
}