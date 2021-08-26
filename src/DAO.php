<?php

namespace Dayan3847\Testphpunit47;

interface DAO {
	/**
	 * @param string $element element to create
	 *
	 * @return bool is created?
	 */
	function create( string $element ): bool;

	function update( string $element ): string;

	function delete( int $id ): bool;
}