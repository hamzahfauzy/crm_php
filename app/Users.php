<?php
namespace app;
use vendor\zframework\Model;

class Users extends Model
{
	static $table = "users";
	static $fields = ["id","username","password","level"];

}
