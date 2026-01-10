<?php
declare(strict_types=1);

class ContactController extends ControllerBase
{

    public function indexAction()
    {

    }

    public function submitAction()
    {
        if ($this->request->isPost()) {
            try {
                $contact = new Contact();
                $contact->name = $this->request->getPost('name');
                $contact->email = $this->request->getPost('email');
                $contact->subject = $this->request->getPost('subject');
                $contact->message = $this->request->getPost('message');

                if ($contact->save()) {
                    $this->session->set('success_message', 'Your message has been sent. Thank you!');
                } else {
                    $this->session->set('error_message', 'There was an error sending your message.');
                }
            } catch (Exception $e) {
                // Fallback: simpan ke file jika database error
                $data = [
                    'name' => $this->request->getPost('name'),
                    'email' => $this->request->getPost('email'),
                    'subject' => $this->request->getPost('subject'),
                    'message' => $this->request->getPost('message'),
                    'created_at' => date('Y-m-d H:i:s')
                ];
                file_put_contents('contacts.txt', json_encode($data) . "\n", FILE_APPEND);
                $this->session->set('success_message', 'Your message has been sent. Thank you!');
            }
        }
        
        return $this->response->redirect('contact');
    }

}

