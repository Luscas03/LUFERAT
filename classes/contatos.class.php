
<?php

class contactForm
{

    // Atributos --> características
    private $action; // URL do action do formulário
    private $formerror = ''; // Mensagens de erro    
    private $formname = ''; // Valor do campo nome
    private $formemail = ''; // Valor do campo e-mail
    private $formsubject = ''; // Valor do campo assunto
    private $formmessage = ''; // Valor do campo mensagem
    private $template = 'templates/contatos.php'; // Arquivo com template HTML

    // Métodos --> ações

    // Método contrutor --> Excuta ao criar o objeto
    public function __construct($action)
    {
        $action = trim($action); // Remove espaços antes e depois da string
        $action = filter_var($action, FILTER_SANITIZE_STRING); // Filtro de string
        if ($action == '') { // Atributo não pode estar vazio
            die('Erro: O parâmetro do contrutor tem que ser um URL.'); // Para o código com a mensagem de erro
        }
        $this->action = $action; // Atribui ao atributo
    }

    // Método get para $this->formerror
    public function getFormError()
    {
        return $this->formerror;
    }
    // Método set para $this->formerror
    public function setFormError($formerror = '')
    {
        $formerror = trim($formerror); //        ┌───> Isso é uma constante do PHP
        $formerror = filter_var($formerror, FILTER_SANITIZE_STRING);
        $this->formerror = $formerror;
    }

    // Método get para $this->formname
    public function getFormName()
    {
        return $this->formname;
    }
    // Método set para $this->formname
    public function setFormName($formname = '')
    {
        $formname = trim($formname);
        $formname = filter_var($formname, FILTER_SANITIZE_STRING);
        $this->formname = $formname;
    }

    // Método get para $this->formemail
    public function getFormEmail()
    {
        return $this->formemail;
    }
    // Método set para $this->formname
    public function setFormEmail($formemail = '')
    {
        $formemail = trim($formemail);
        $formemail = filter_var($formemail, FILTER_SANITIZE_EMAIL);
        $this->formemail = $formemail;
    }
    // Método get para $this->formemail
    public function getFormsubject()
    {
        return $this->formsubject;
    }
    // Método set para $this->formname
    public function setFormsubject($formsubject = '')
    {
        $formsubject = trim($formsubject);
        $formsubject = filter_var($formsubject, FILTER_SANITIZE_EMAIL);
        $this->formsubject = $formsubject;
    }
    public function getFormmessage()
    {
        return $this->formmessage;
    }
    // Método set para $this->formname
    public function setFormmessage($formmessage = '')
    {
        $formmessage = trim($formmessage);
        $$formmessage = filter_var($formmessage, FILTER_SANITIZE_EMAIL);
        $this->formmessage = $formmessage;
    }
    public function getTemplate()
    {
        return $this->template;
    }
    // Método set para $this->formname
    public function setTemplate($template = '')
    {
        $template = trim($template);
        $formname = filter_var($template, FILTER_SANITIZE_URL);
        if ($template != '') {
            $this->template = $template;
        }
    }
    //método que exibe o formulário
    public function get()
    {
        $erro = $this->getFormError();

        $action = $this->action;
        //echo $action;
        $nome = $this->getFormName();
        //echo $nome;
        $email = $this->getFormEmail();
        //echo $email;
        $assunto = $this->getFormsubject();
        // echo $assunto;
        $mensagem = $this->getFormmessage();
        //echo $mensagem;

    }
}

$form = new contactForm($_SERVER['PHP_SELF']);
$form->setFormError('Tem algo errado na Dinamarca');
$form->setFormName('nome');
$form->setFormEmail('email');
$form->setFormsubject('subject');
$form->setFormmessage('oi');
$form->get(); //exibe o form do produto





                                                        //AREA DE TESTEEEEEEEEEEEEEEEEEEEEE
// Altera o valor de formerror
// $contato->setFormError('1');
// $contato->setFormName('2');
//  $contato->setFormEmail('3');
// $contato->setFormsubject('4');
//  $contato->setFormmessage('5');
// $contato->setTemplate('/romarin/brabo');

// Lê o valor de formerror
// echo $contato->getFormError();
// echo $contato->getFormName();
// echo $contato->getFormEmail();
// echo $contato->getFormsubject();
// echo $contato->getFormmessage();
// echo $contato->getTemplate();
