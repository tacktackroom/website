<?php
class ContactController extends ContactControllerCore
{
  /*
    * module: eicaptcha
    * date: 2019-12-09 19:20:58
    * version: 0.4.17
    */
    public function checkAccess() {
    return (bool)Hook::exec('contactFormAccess');
  }
  /*
    * module: eicaptcha
    * date: 2019-12-09 19:20:58
    * version: 0.4.17
    */
    public function initCursedPage() {
    parent::setMedia();
    if (!empty($this->redirect_after)) {
      parent::redirect();
    }
    if (!$this->content_only && ($this->display_header || (isset($this->className) && $this->className))) {
      parent::initHeader();
    }
    parent::initContent();
    if (!$this->content_only && ($this->display_footer || (isset($this->className) && $this->className))) {
      parent::initFooter();
    }
    parent::display();
    die;
  }
}
