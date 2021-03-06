<?php
namespace Bmatics\SQLiteIlike\Database;

use Bmatics\SQLiteIlike\Database\Query\Grammars\SQLiteIlikeGrammar as QueryGrammar;
use Illuminate\Database\SQLiteConnection;

class SQLiteIlikeConnection extends SQLiteConnection
{
	protected function getDefaultQueryGrammar()
	{
		return $this->withTablePrefix(new QueryGrammar);
	}
}