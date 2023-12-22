<?php

use Dotenv\Dotenv;

class HolidayService extends Service {
	private $apiKey;

	public function __construct() {
		$dotenv = Dotenv::createImmutable(__DIR__ . '/../../../');
		$dotenv->load();

		$this->apiKey = $_ENV['API_KEY'] ?? null;
	}

	public function isHolidayOrWeekend($date) {
		if ($this->apiKey === null) {
			return "API_KEY não encontrada no arquivo .env";
		}
	
		$url = "https://www.googleapis.com/calendar/v3/calendars/pt.ao%23holiday%40group.v.calendar.google.com/events?key=" . $this->apiKey;
		
		$data = $this->fetchDataFromAPI($url);
	
		if (is_string($data)) {
			return $data;
		}
	
		foreach ($data['items'] as $item) {
			if (isset($item['start']['date'])) {
				$holidayDate = substr($item['start']['date'], 0, 10);
				if ($date == $holidayDate) {
					return true;
				}
			}
		}
	
		$dayOfWeek = date('N', strtotime($date));
		if ($dayOfWeek >= 6) {
			return true;
		}
	
		return false;
	}
}