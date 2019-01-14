<?php

namespace app\models;

use app\classes\Bind;
use app\traits\PersistDb;

abstract class Model {

	protected $connection;

	use PersistDb; // se comporta com uma herança

	public function __construct() {
		$this->connection = Bind::get('connection');
	}

	public function findAll() {

		$sql = "SELECT * FROM {$this->table}";

		$list = $this->connection->prepare($sql);

		$list->execute();

		return $list->fetchAll();

	}

	public function find($field, $value) {

		$sql = "SELECT * FROM {$this->table} WHERE {$field} = :{$field}";

		$find = $this->connection->prepare($sql);
		$find->bindValue($field, $value);
		$find->execute();

		return $find->fetch();
	
	}

	public function delete($field, $value) {

		$sql = "DELETE FROM {$this->table} WHERE {$field} = ?";

		$delete = $this->connection->prepare($sql);
		$delete->bindValue(1, $value);
		$delete->execute();

		return $delete->rowCount();

	}

}