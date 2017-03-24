<?php
/**
* MODELO Eventos
*/
use Illuminate\Database\Eloquent\Model as Eloquent;
class Event extends Eloquent
{
	protected $table = 'events';
	protected $fillable = ['name_event','tickets'];
}