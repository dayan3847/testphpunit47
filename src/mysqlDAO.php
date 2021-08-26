<?php

namespace Dayan3847\Testphpunit47;

class mysqlDAO implements DAO {
	/**
	 * @param string $element element to create
	 *
	 * @return bool is created?
	 */
	public function create( string $element ): bool {
		return true;
	}

	public function update( string $element ): string {
		return $element . 'element';
	}

	public function delete( int $id ): bool {
		return true;
	}
}
