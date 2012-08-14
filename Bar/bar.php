<?php 
	namespace Bar{
	use Zend\EventManager as EM;
		class bar{
			public $foo;
			public $em;
			public function setFoo(){
				$this->foo = new \Foo\foo;
			}
			public function setEventManager(EM\Event $event){
				$this->em = $event;
				return $this;
			}
		}
	}

