<?php

namespace BlueSpice;

/**
 * This class holds all registered notifications with
 * their default \INotifier objects
 */
class NotificationRegistry implements \BlueSpice\IRegistry {
	protected $notifications;

	/**
	 *
	 * @return string[]
	 */
	public function getAllKeys() {
		return array_keys( $this->notifications );
	}

	/**
	 *
	 * @param string $key
	 * @param mixed $default
	 * @return mixed
	 */
	public function getValue( $key, $default = '' ) {
		if ( isset( $this->notifications[$key] ) ) {
			return $this->notifications[$key];
		}

		return $default;
	}

	/**
	 * Adds new notification
	 *
	 * @param string $key
	 * @param INotifier $value
	 */
	public function addValue( $key, $value ) {
		$this->notifications[$key] = $value;
	}

	/**
	 * Checks if specified notification key is registered
	 *
	 * @param string $key
	 * @return bool
	 */
	public function hasKey( $key ) {
		if ( isset( $this->notifications[$key] ) ) {
			return true;
		}

		return false;
	}
}
