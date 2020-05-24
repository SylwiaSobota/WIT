<?php

namespace Application\Model;

class Data 
{
    public function dzisiaj()
	{
		return date('Y-m-d H:i:s');
	}
	
	public function dniTygodnia()
	{
		return [
			'Poniedzia³ek', 'Wtorek', 'Œroda', 
			'Czwartek', 'Pi¹ek', 'Sobota', 'Niedziela'
		];
	}
}