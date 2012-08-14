<?php
namespace Event
{
	use Zend\EventManager as ZE;
	class Event implements ZE\EventManagerAwareInterface
	{
		protected $events;
		public function setEventManager(ZE\EventManagerInterface $events)
		{
			$events->addIdentifiers(array(
			__CLASS__,
			get_called_class(),
			));
			$this->events = $events;
			return $this;
		}
		public function bar($baz, $bat = null)
		{
			$params = compact('baz', 'bat');
			$this->getEventManager()->trigger(__FUNCTION__, $this, $params);
		}

		public function getEventManager()
		{
			if(null === $this->events){
				$this->setEventManager(new ZE\EventManager());
			}
			return $this->events;
		}
	}
}
